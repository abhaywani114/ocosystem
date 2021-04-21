var lm = 5;
var sellerwidth = $(".sellerbutton").width();
var tankposition= $("#tankbutton").position();
var prodposition= $('#prod').position();
var analyticsposition= $("#analyticsbutton").position();

//$('#tableTankMang').DataTable();
//$('#example').DataTable();
//$('#prodContent').hide()

if (typeof (tankposition) != 'undefined') {
    // var tankmargin = tankposition.left;
    // $("#tankdropdown").css('marginLeft', tankmargin - lm);
    $("#tankdropdown");
}

if (typeof (analyticsposition) != 'undefined') {
    // var analyticsmargin = analyticsposition.left- tankposition.left ;
    // $("#analyticsdropdown").css('marginLeft', tankmargin - lm);
    $("#analyticsdropdown").css('top', 65);
}

$('.dropdownnn').click(function (event) {

    event.stopPropagation();
    $(".hide").slideUp(500);

    switch(this.id) {
    case 'tankbutton':
        console.log("Industry button Case")
        /*--------- Report Button: Rigging listener and action */
        $("#tankdropdown").slideToggle(500);
        break;
                    
    case 'analyticsbutton':
        console.log("Analytics button Case")
        /*--------- Report Button: Rigging listener and action */
        $("#analyticsdropdown").slideToggle(500);
        break;    
    default:
    }

    return false;
});

    
/*
$("#fuelPrice").click(function(){
    var go_to_url = 'show-fuel_price-view'
    console.log("Console Button", go_to_url);
    window.open(go_to_url, '_blank');
});

$("#tankMon").click(function(){
	var go_to_url = 'show-tank_Monitoring-view'
	console.log("Console Button", go_to_url);
	window.open(go_to_url, '_blank');
});

$("#tankMng").click(function(){
	var go_to_url = 'show-tank_Mangement-view'
	console.log("Console Button", go_to_url);
	window.open(go_to_url, '_blank');
});

$('#prod').click(function(){
	$('#prodContent').toggle()
})

$('#main').click(function(){
	console.log("Hide")
	$('#prodContent').hide()
})
*/
