var lm = 5;
var analyticsposition = $("#abtns").position();
var tankposition= $("#tankbutton").position();
var disitposition= $("#ogdistbutton").position();

$('#tableTankMang').DataTable();
$('#tankMoni').DataTable();
$('#fuelManag').DataTable();


if (typeof (tankposition) != 'undefined') {
    const tankmargin = tankposition.left;
	$("#tankdropdown").css('left', tankmargin-lm);
    $("#tankdropdown");
}
if (typeof (analyticsposition) != 'undefined') {
    const analyticsmargin = analyticsposition.left;
	$("#abdropdown").css('left', analyticsmargin-lm);
    $("#abdropdown");
}

if (typeof (disitposition) != 'undefined') {
    const disitmargin = disitposition.left;
	$("#distdropdown").css('left', disitmargin-lm);
    $("#distdropdown");
}

$('.dropdownnn1').click(function (event) {

    event.stopPropagation();
    $(".hide").slideUp(500);

    switch(this.id) {
    case 'tankbutton':
        console.log("Tank button Case")
        /*--------- Tank Button: Rigging listener and action */
        $("#tankdropdown").slideToggle(500);
        break;
       case 'abtns':
        console.log("Analytics button Case")
        /*--------- Analytics Button: Rigging listener and action */
        $("#abdropdown").slideToggle(500);
        break;
	   case 'ogdistbutton':
		$("#distdropdown").slideToggle(500);
		break;

		case 'servicebtn':
		$("#serviceBtndropdown").slideToggle(500);
		break;

       default:
    }

    return false;
});

   
$("#fuelManagement").click(function(){
    // var go_to_url = '/fuel-management'
    var go_to_url = '/industry/fuel-management'
    window.open(modified_url_fn(go_to_url), '_blank');
});
    
$("#fuelPrice").click(function(){
    var go_to_url = 'show-fuel_price-view'
    window.open(modified_url_fn(go_to_url), '_blank');
});

$("#tankMon").click(function(){
	var go_to_url = '/industry/show-tank_Monitoring-view'
	window.open(modified_url_fn(go_to_url), '_blank');
});

$("#tankMng").click(function(){
	var go_to_url = '/industry/show-tank_Mangement-view'
	window.open(modified_url_fn(go_to_url), '_blank');
});

$('#prod').click(function(){
	var go_to_url = '/industry/og_product'
	window.open(modified_url_fn(go_to_url), '_self');
})

$('#main').click(function(){
	var go_to_url = '../landing'
	window.open(modified_url_fn(go_to_url), '_self');
})
 
$("#open_new_tab").click(function(){
	var go_to_url = 'show-fuel_price-view'
	window.open(modified_url_fn(go_to_url), '_blank');
});

$("#franchiseTankMng").click(function() {

	var go_to_url = '/industry/show-tank_Mangement-view-franchise?franchise=true'
	window.open(modified_url_fn(go_to_url), '_blank');
});
// Load pump volume default page On click on pump button
$("#pumpAnalytics" ).click(function() {
	$.ajax({
		url: "pump-volume-graph",
		type: 'GET',
		dataType: "html",
		success: function (response) {
			$("#landing").html(response);
		},
		error: function (e) {
			console.log('error', e);
		}
	});
});

$("#centraladminbuttona_og" ).click(function() {
	$.ajax({
		url: "/industry/cadmin/vehicle_mng",
		type: 'GET',
		dataType: "html",
		success: function (response) {
			$("#landing").html(response);
		},
		error: function (e) {
			console.log('error', e);
		}
	});
});

$("#cAdm").click(function(){
	$.ajax({
		url: "/industry/cadmin",
		type: 'GET',
		dataType: "html",
		success: function (response) {
			$("#landing").html(response);
		},
		error: function (e) {
			console.log('error', e);
		}
	});
});
 

$("#og_dilverymanbutton" ).click(function() {
	$.ajax({
		url: "/industry/cadmin/deliveryman",
		type: 'GET',
		dataType: "html",
		success: function (response) {
			$("#landing").html(response);
		},
		error: function (e) {
			console.log('error', e);
		}
	});
});
