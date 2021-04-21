  
$(document).ready(function () {
	var wastagetable =  $('#wastagetable').DataTable({
		"order": [],
		"columnDefs": [
			{"className": "dt-center", "targets": [0,1,3]},
			{"targets": -1, 'orderable' : true}
		],
		"autoWidth" : true,
	});
});


function increaseValue_pax() {
	var value = parseInt(document.getElementById('number').value, 10);
	value = isNaN(value) ? 1 : value;
	value++;
	document.getElementById('number').value = value;
	var table_name = $('#tableno').text();
	table_name = $.trim(table_name);
	if(table_name != 'Table'){
		update_pax(table_name, value);
	}
}

function decreaseValue_pax() {
	var value = parseInt(document.getElementById('number').value, 10);
	value = isNaN(value) ? 0 : value;
	value < 1 ? value = 1 : '';
	value--;
	document.getElementById('number').value = value;
	var table_name = $('#tableno').text();
	table_name = $.trim(table_name);
	if(table_name != 'Table'){
		update_pax(table_name, value);
	}
}

function update_pax(table_name, value) {
	$.ajax({
        url: "/opossum-update-pax",
		type: "POST",
		data: {
            'terminal_id': $('#terminal_id').val(),
            'tableNumber': tableNumber,
            'pax': $('#number').val(),
            'type': 'table',
        },
		success: function (response) {
			console.log(response.success);
		}, error: function (e) {
			console.log(e.message)
		}
	});
}

function increaseValue() {
	var value = parseInt(document.getElementById('number').value, 10);
	value = isNaN(value) ? 1 : value;
	value++;
	document.getElementById('number').value = value;
}

function decreaseValue() {
	var value = parseInt(document.getElementById('number').value, 10);
	value = isNaN(value) ? 0 : value;
	value < 1 ? value = 1 : '';
	value--;
	document.getElementById('number').value = value;
}

function splitTable(){
	var terminal_id = $('#terminal_id').val();
	$.ajax({
		url: "table/split",
		type: "POST",
		data: {'tableType':tableType, 'tableNumber':tableNumber,'terminal_id' : terminal_id},
		success: function (response) {
			console.log(response.success);
			$('#voucher_div').html('');
			$(".modal").modal('hide');
			$("#productResponce").html(response);

            changeScreenCTable();
		}, error: function (e) {
			console.log(e.message)
		}
	});
}

function reserveTable(){
	var terminal_id = $('#terminal_id').val();
	var message = $('#reserveMessage').val();

	$.ajax({
		url: "table/reserve",
		type: "POST",
		data: {'tableType':tableType, 'tableNumber':tableNumber,'terminal_id' : terminal_id,'message':message},
		success: function (response) {
			console.log(response.success);

			$(".modal").modal('hide');
		//	$(".modal-backdrop").remove();

			$("#productResponce").html(response);


			changeScreenCTable();
		}, error: function (e) {
			console.log(e.message)
		}
	});
}
 function showReserveTable() {
	 $("#reserveMessage").val('');
	 $('#reserveTableNo').html(tableNumber);
	 $('.researveModal').modal('show');
	 // $.ajax({
		//  url: "table/show_reserve_modal/"+tableNumber,
		//  type: "GET",
     //
		//  success: function (response) {
		// 	 console.log(response.success);
		//
     //
		// 	 //	$('#voucher_div').html('');
     //
		// 	// $("#reserveMessage").val('');
     //
		//  }, error: function (e) {
		// 	 console.log(e.message)
		//  }
	 // });
 }

function cancelReserveTable() {
	var terminal_id = $('#terminal_id').val();

	$.ajax({
		url: "table/delete/reserve",
		type: "POST",
		data: {'tableType':tableType, 'tableNumber':tableNumber,'terminal_id' : terminal_id},
		success: function (response) {
			console.log(response.success);
			//	$('#voucher_div').html('');
			$(".modal").modal('hide');
			$("#productResponce").html(response);

			changeScreenCTable();
		}, error: function (e) {
			console.log(e.message)
		}
	});
}
var global_array = [];

function combineTables(tableNo) {

	if(global_array.includes(tableNo)){

		var index = global_array.indexOf(tableNo);
		console.log("Index is "+index);
		if(index > -1){
			global_array.splice(index, 1);
			$("#combineTable"+tableNo).css({
				"background-color": '#333333',
				"border-color" : "#333333"
			});
		}
	}else{
			console.log("array length"+global_array.length)
		if(global_array.length <= 2){
			$("#combineTable"+tableNo).css({
				"background-color": '#28a745',
				"border-color" : "#28a745"
			});
			global_array.push(tableNo);
		}else{
			$('#combineModalLabel').html('Exceeded table limit');
			$('#combinemsgModal').modal('show');
			setTimeout(function() {
				$("#combinemsgModal").modal('hide');
				$('.modal-backdrop').remove();
			},2500)
		}

	}

	console.log(global_array);
}


function showCombineModal() {
	var terminal_id = $('#terminal_id').val();
	$.ajax({
		url: "table/show_combine_modal/"+terminal_id,
		type: "GET",

		success: function (response) {
			console.log(response.success);


			//	$('#voucher_div').html('');
			$(".modal").modal('hide');
			$("#combine_modal_body").html(response);

		}, error: function (e) {
			console.log(e.message)
		}
	});
}


function combineTable() {
	console.log('Combine');
	var terminal_id = $('#terminal_id').val();
	$.ajax({
		url: "table/combine",
		type: "POST",
		data: {'tableType':tableType,'terminal_id' : terminal_id,
		'combination':global_array},
		success: function (response) {
			console.log(response.success);
			global_array = [];
			changeScreenCTable();
			//	$('#voucher_div').html('');
			$(".modal").modal('hide');
			$("#productResponce").html(response);

		}, error: function (e) {
			console.log(e.message)
		}
	});
}

$('.menu-header').click(function(e){
	e.stopPropagation();
	document.getElementById("mySidenav").style.width = "40%";
	$("#mySidenav").toggleClass("active");
	$("#mySidenav").show();
});

$(document).click(function(event){
	if($("#mySidenav").hasClass('active') && !$(event.target).closest('#mySidenav').length){
		document.getElementById("mySidenav").style.width = "0%";
		$("#mySidenav").hide();
		$("#mySidenav").removeClass("active");
	}
	
});



$(document).ready(function () {
	$('#combineclosemodal').on('hidden.bs.modal',function () {
		combineTable()
	} );

   var codeopossumtable =  $('#codeopossumtable').DataTable({
        "order": [],
        "columnDefs": [
            {"className": "dt-center"},
            {"targets": -1, 'orderable' : true}
        ],
        "autoWidth" : true,
	});
});


$(".rateval").click(function () {
    $(".rateval").removeClass("activerate");
    $(this).addClass("activerate");   
});


//button call opossum AJAX
$( "#wastagebtn" ).click(function() {
	loadView("{{route('opossum.wastage')}}")
});

//receipt list 
$(document).ready(function () {
   var receiptlistopossumtable =  $('#receiptlistopossumtable').DataTable({
       "order": [],
		"columnDefs": [
			{"className": "dt-center", "targets": [0,1,2]},
			{"targets": -1, 'orderable' : true}
		],
		"autoWidth" : true,
	});
});


function loadView(route) {
	$.ajax({
		url: route,
		type: 'GET',
		dataType: "html",
		success: function (response) {
			$(".opossumContain").html(response);
		},
		error: function (e) {
			console.log('error', e);
		}
	});
}

function loadView(route) {
		$.ajax({
			url: route,
			type: 'GET',
			dataType: "html",
			success: function (response) {
				$("#landing-view").html(response);
			},
			error: function (e) {
				console.log('error', e);
			}
		});
	}
 
$('#productbuttonopossum').click(function() {
	window.open("{{route('landing.ajax.product')}}");
});

