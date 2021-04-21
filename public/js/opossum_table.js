/**
 * Created by Chris Uzor on 8/21/2019.
 */

/**Global Variables
 *
 */
var clicktablebutton = 0;
var oldid = 0;
var tableNumber = 0;
var tableType = '';
var fromTable = null;
var setSkip = null;


function cancelTable() {
    $.ajax({
        url: "table/cancel",
        type: 'post',
        data: {
            'tableNumber': tableNumber,
            'terminal_id': $('#terminal_id').val()
        },
        success: function (response, textStatus, request) {
            $(".modal").modal('hide');
            $("#productResponce").html(response);
            changeScreenCTable();
            $("#cancelbtn").hide();
            $("#tableno").text('Table ');

        },
        error: function (e) {
            $('#response').html(e);
            $("#msgModal").modal('show');
        }
    });

}

function clickOrder() {
    master_reset_all();
    $("#tableno").text('Table ' + tableNumber);
    $('.bg-manual.sellerbutton').prop('disabled',false);
    $('.bg-code.sellerbutton').prop('disabled',false);
}

function clickConfirm() {

    trigger_kitchen_printing();
    $("#" + oldid).removeClass("confirmgreen");
    $("#tableno").removeClass("confirmheighlight");

    $("#" + clicktablebutton).addClass("confirmgreen");
    $("#tableno").addClass("confirmheighlight");
    oldid = clicktablebutton;
    $.ajax({
        url: "table/add",
        type: 'post',
        data: {
            'terminal_id': $('#terminal_id').val(),
            'tableNumber': tableNumber,
            'products': JSON.stringify(product_details),
            'pax': $('#number').val(),
            'type': 'table',
            'cash': payment.cash_amount,
            'item_total': $('#item_amount2').html(),
            'total_amount': $('#total_amount').html(),
            'rounding': $('#amount_round').html()
        },
        success: function (response) {
            $('#btn' + tableNumber).removeClass("bg-black");
            $('#btn' + tableNumber).addClass("btn-success");
            $('#btn' + tableNumber).addClass("active_table");
            $("#confirmbtn").attr("disabled", "on");
            master_reset_all();
            tableNumber = 0;
        },
        error: function (e) {
            $('#response').html(e);
            $("#msgModal").modal('show');
        }
    });

}


function clickSkipTable(skipTable){
    tableNumber = 0;
    $("#tableno").text('Table ');
    $("#cancelbtn").hide();
    var skipTableNo = skipTable.value;

    if(parseInt(skipTableNo) > 0){

        if ($('#skip' + skipTableNo).hasClass("skipactivetable")) {
            console.log("Active");
            master_reset_all();
            $.ajax({
                url: "skip/fetch",
                type: 'post',
                data: {
                    'terminal_id': $('#terminal_id').val(),
                    'skipNumber':skipTableNo,
                },
                success: function (response) {
                    if (response) {
                        jQuery.each(response, function (i, val) {
                            var price = val.order_price / 100;

                            addDProduct(val.product_id);
                            add_qty_prod(val.quantity, val.product_id, val.order_price, val.discount);
                            fromTable = true;
                            if (val.special_products) {

                                jQuery.each(val.special_products, function (j, value) {
                                    $("#cancelbtn").hide();
                                    console.log(value);
                                    append_special(value);
                                });

                            }


                        });
                    }


                },
                error: function (e) {
                    $('#response').html(e);
                    $("#msgModal").modal('show');
                }
            });
        }else {
            if ($('#skip' + setSkip).hasClass("skipactivetable")) {
                master_reset_all();
            }


        }
        setSkip = parseInt(skipTableNo);
    }else{
        console.log("Not Active");
        if(setSkip > 0){
            if (product_details.length > 0) {
                $.ajax({
                    url: "skip/add",
                    type: 'post',
                    data: {
                        'terminal_id': $('#terminal_id').val(),
                        'skipNumber': setSkip,
                        'products': JSON.stringify(product_details),
                        'pax': $('#number').val(),
                        'type': 'skip',
                        'cash': payment.cash_amount,
                        'item_total': $('#item_amount2').html(),
                        'total_amount': $('#total_amount').html(),
                        'rounding': $('#amount_round').html()
                    },
                    success: function (response) {
                        changeScreenCSkip();
                        $('#skip' + setSkip).addClass("skipactivetable");
                        master_reset_all();
                        setSkip = null;
                    },
                    error: function (e) {
                        $('#response').html(e);
                        $("#msgModal").modal('show');
                    }
                });
                master_reset_all();
            }else{
                $('#combineModalLabel').html('Add a Product');
                $('#combinemsgModal').modal('show');
                setTimeout(function() {
                    $("#combinemsgModal").modal('hide');
                    $('.modal-backdrop').remove();
                },2500)
               }

        }else{
            $('#combineModalLabel').html('Select a skip number');
            $('#combinemsgModal').modal('show');
            setTimeout(function() {
                $("#combinemsgModal").modal('hide');
                $('.modal-backdrop').remove();
            },2500)

        }
    }
}
function table_status(thistext){
    i = thistext.value;
    setSkip=null;
    clicktablebutton = thistext.id;
    console.log('table_status');
        //Checks if the previous table has an active table
   var all_active_tables = $(".active_table").map(function(){
       var html = this.innerHTML;
       return $.trim(html.replace(/<\/?span>/g, ''));
   }).get();
   var table_name = $("#"+clicktablebutton+" span").html();

    // if (all_active_tables.indexOf(tableNumber) < 0) {
        master_reset_all();
    // }
    var total_amount = $('#total_amount').html();

    if (total_amount > 0) {
        $("#confirmbtn").removeAttr("disabled");
        $("#confirmbtn").addClass("confirmhighlight");
        $("#cancelbtn").hide();
    }
    $("#tableno").removeAttr("disabled");
    $("#tableno").removeClass("confirmheighlight");
    $("#" + oldid).removeClass("confirmgreen");
    tableNumber = i;
    if (tableNumber > 0) {
        $("#reservebtn").removeAttr("disabled");
        $("#splitbtn").removeAttr("disabled");
        $("#cancelbtn").hide();
    }
    if (tableNumber.match(/[A-Z]/i)) {

        $("#reservebtn").attr("disabled", "on");
        $("#cancelbtn").hide();
        $("#splitbtn").attr("disabled", "on");
    }
    var id_num = i.replace("+", "0");
    id_num = id_num.replace("+", 0);

    tableType = 'table';

    if ($('#btn' + id_num).hasClass("active_table")) {
        $("#cancelbtn").hide();
        master_reset_all();
        closetable();
        $("#confirmbtn").attr("disabled", "on");
        $("#orderbtn").removeAttr("disabled");
        $.ajax({
            url: "table/fetch",
            type: 'post',
            data: {
                'terminal_id': $('#terminal_id').val(),
                'tableNumber': tableNumber,
            },
            success: function (response) {
                if (response) {
                    table_type = 'opos';
                    jQuery.each(response, function (i, val) {
                        var price = val.order_price / 100;
                        $('.bg-manual.sellerbutton').prop('disabled',true);
                        $('.bg-code.sellerbutton').prop('disabled',true);
                        $('#discount').prop('disabled',true);
                        $('#discount').css('cursor','not-allowed');
                        $('#number').val(val.pax);
                        // Add Product to order and Removes Order edit attributes
                        addDProduct(val.product_id,table_type,val.order_price);
                        add_qty_prod(val.quantity, val.product_id, val.order_price, val.discount);
                        fromTable = true;
                        if (val.special_products) {

                            jQuery.each(val.special_products, function (j, value) {
                                $("#cancelbtn").hide();
                                console.log(value);
                                append_special(value);
                            });

                        }


                    });
                }


            },
            error: function (e) {
                $('#response').html(e);
                $("#msgModal").modal('show');
            }
        });
    }else  if ($('#btn' + i).hasClass("reserved_table")) {
        $.ajax({
            url: "table/showReserve",
            type: 'post',
            data: {
                'terminal_id': $('#terminal_id').val(),
                'tableNumber': tableNumber,
            },
            success: function (response) {
                $('#reserveMessage').val(response.message);

                $('#reserveTableNo').html(tableNumber);

                $("#reserve_modal").modal('show');
            },
            error: function (e) {
                $('#response').html(e);
                $("#msgModal").modal('show');
            }
        });
    }
    else if ($('#btn' + i).hasClass("split_table")) {
        $("#cancelbtn").show();

    }
    else if ($('#btn' + id_num).hasClass("combine_table")) {
        $("#cancelbtn").show();
    }
    else{
        $("#cancelbtn").hide();
    }

    if(table_name.length > 6) {
        $("#tableno").text('Table ' + table_name.substring(0,6) + '...');
    } else {
        $("#tableno").text('Table ' + table_name);
    }
}

function changeTablenameButtonText(thistext) {
    i = thistext.value;
    setSkip=null;
    clicktablebutton = thistext.id;

    var id_num = i.replace("+", "0");
    id_num = id_num.replace("+", 0);
    var btn_type = '';
    tableNumber = i;

    // Check if table is exists then proceed further
    if ($('#btn' + i).hasClass("reserved_table")) {
        btn_type = 'reserved';   
    }
    else if ($('#btn' + i).hasClass("split_table")) {
        btn_type = 'split';   
    }
    else if ($('#btn' + id_num).hasClass("combine_table")) {
        btn_type = 'combine';   
    }
    else if($('#btn' + id_num).hasClass("active_table")) {
        btn_type = 'active';   
    }
    else if($('#btn' + i).hasClass("active_table")) {
        btn_type = 'active';   
    } else {
        btn_type = 'black';
    }
    $.ajax({
        url: "table/table_status",
        type: 'post',
        data: {
            'terminal_id': $('#terminal_id').val(),
            'tableNumber': tableNumber,
            'btn_type': btn_type,
        },
        success: function (response) {
            // console.log(btn_type);
            // console.log($.trim(response));
            if($.trim(response) == 'False') {
                master_reset_all();
                closetable();
                $("#cancelbtn").hide();
            } else {
                table_status(thistext);
            }
        },
        error: function (e) {
            $('#response').html(e);
            $("#msgModal").modal('show');
        }
    });

}

function add_qty_prod(quantity, prod_id, order_price, discount) {

    row = $('#' + prod_id);
    details = find_product_row(row.attr('row_id'));
    new_value = eval(quantity);
    input = $('#tdinput' + prod_id).children('input');
    input.val(new_value);
    add_qty(row.attr('row_id'), new_value);
    amount_table = $('#total_amount' + prod_id);
    var new_price = quantity * order_price;
    var new_discount = Math.round(new_price - (new_price*discount) / 100)/100;
    amount_table.html(toFixedTrunc(new_discount, 2));
    details.mock_price = new_price;
    details.mock_sst = rate.cal_sst(details.mock_price);
    details.mock_sc = rate.cal_sc(details.mock_price);
    $('#discountamt' + prod_id).html(discount + '%');
    add_discount(row.attr('row_id'), discount);
    row_details = find_product_row(row.attr('row_id'));

    //     amount_table.html(toFixedTrunc((new_price.amount/100),2));
    //    details.mock_sst = rate.cal_sst(new_price/100);
    //    details.mock_sc = rate.cal_sc(new_price/100);
    bill.update_recept();
}
