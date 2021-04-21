
$(document).ready(function() {
	fetch_products();
});

function addproduct(e, keys) {
	console.log(keys);
	add_product_scanner(keys.join(""))
	keys.length = 0;
	flag = 0;
	index = 0;
}


function add_product_scanner(product_barcode) {
	$.post("{{route('opossum.product_barcodes_new')}}", {"search_string":product_barcode})
	.done(function(res) {
			addDProduct(res.product_id,undefined,undefined, res);
	}).fail(function(res)	{
	$("#message").html("Barcode not found")
		$("#messageModal").modal('show');
		setTimeout(function () {
			$("#messageModal").modal('hide')
			$("#message").html('')
		}, 2000);
	});
}

/*/
function add_product_scanner(product_barcode) {
	fetch_products();
	/*
    console.log('product_barcode='+product_barcode);
    console.log('barcodes='+JSON.stringify(barcodes));
	

	 setTimeout(function () {
			barcodes = psystemid;
			if(barcodes.includes(product_barcode)) {
				addDProduct(pid[barcodes.indexOf(product_barcode)],undefined,undefined, true);
			} else {
				$("#msgModal").modal('show');
				setTimeout(function () {
					$("#msgModal").modal('hide')
				}, 2000);
			}
	}, 1000);
}
/*/
function display_product(prd) {
	alert(prd);
}
