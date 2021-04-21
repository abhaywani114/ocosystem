/* Squidster: Sat  8 Sep 02:45:19 +08 2018
 * Hardcopy modules based on the QZ API: https://qz.io/api/
 */

/*------------------------ Globals ---------------------------*/
/* Print device; typically default printer in local system */
var printdev = null;

/* QZ config derived from the default printer */
var config = null;

/* Content for the receipt */
var qzcontent = null;
/*------------------------------------------------------------*/


/* Initialization of QZ API System upon load */
window.onload = function() {

    // Authentication for QZ 
    qz.security.setCertificatePromise(function(resolve, reject) {
        //alert('print_qz: setCertificate');
        console.log('print_qz: setCertificate');
        //$.ajax({url:'/assets/signing/server.crt',cache:false,dataType:'text'}).then(resolve, reject);
        $.ajax({url:'/assets/signing/digital-certificate.txt',cache:false,dataType:'text'}).then(resolve, reject);
    });

    // qz.security.setSignaturePromise(function(toSign) {
    //     return function(resolve, reject) {
    //         console.log('print_qz: setSignature');
    //         $.ajax('/assets/signing/sign-message.php?request=' + toSign).then(resolve,reject);
    //     };
    // });

	/* See if we have an already active connection */
	if (!qz.websocket.isActive()) {

		/* No we don't, lets connect to the QZ daemon */
		qz.websocket.connect({retries:5, delay:1}).then(function() {
			console.info('Connected to QZ!');

			/* Figure out the system default printer */
			qz.printers.getDefault().then(function(found) {
				//alert(found);
				console.info("Found default printer: " + found);

				/* Found device, set the global */
				printdev = found;
				/* Use it to create a QZ config for use later */
				//config = qz.configs.create(printdev);
				config = qz.configs.create(printdev, {rasterize: "false"});

			}).catch((qz_connect_error)=>{
				console.error({qz_connect_error});
			});

		}).catch(function(err) {
			if (err.target != undefined) {
				if (err.target.readyState >= 2) { //if CLOSING or CLOSED
					console.log("Connection to QZ Tray was closed");
				} else {
					console.log("A connection error occurred, check log for details");
				}
			} 
			console.error(err);
		});
	} else {
		console.warn('An active connection with QZ already exists.');
	}    
}


/* Function to pop open the cash drawer: 
ESC p m t1 t2
[Name] Generate pulse [Format] ASCII ESC p m t1 t2
Hex     1B  70 m t1 t2
Decimal 27 112 m t1 t2
*/
function open_cashdrawer() {
	console.info('open_cashdraw: Opening cash drawer');

    var rawdata = [{
        type: 'raw',
        format: 'plain',
        data: '\x1B' + '\x40' + '\x1B' + '\x70' + '\x00' + '\x40' + '\x80'
    }];

    qz.print(config, rawdata);
}


/* Whenever the window receives a message of type 'print_qz' it'll 
 * execute the print_qz() 
 */
window.onmessage=function(e){
    console.log({e});
    if (e.data.type=="print_qz") {
        qzcontent=e.data.content;
        print_qz();
    }
}
 

/* Function to use the QZ API for JS direct to printer mode */
function print_qz() {

    var rawdata = [{
        type: 'raw',
        format: 'plain',
        data: '\x1B' + '\x69'
    }];

    var imagedata = [{
        type: 'raw',
        format: 'image',
        data: 'images/barcode.png',
        options: {
            language: 'ESCPOS',
            dotDensity: 'single'
        }
    }];

  	var htmldata = [{
		type: 'pixel',
		format: 'html',
		flavor: 'plain',
		data: qzcontent
	}];  

    /* This is just to display the print HTML onscreen for testing */
    //display_receipt(htmldata[0].data);
	//console.log(htmldata[0].data);


    qz.print(config, htmldata).then(function() {
        //qz.print(config, rawdata);
    });
    return;
}

function send_print_receipt(printer, html) {
	console.log("Printing data using " + printer)
	
	if (printer == 'DEFAULT_SYSTEM_PRINTER') {
		console.log("Printing Using default")
		printer  = printdev;
	}

	// Create a default config for the found printer 
	//var config = qz.configs.create(printer);
	var config = qz.configs.create(printer, {rasterize:"false"});
 	var htmldata = [{
		type: 'pixel',
		format: 'html',
		flavor: 'plain',
		data: html
	}]; 
	/*
	var htmldata = [{
		type: 'html',
		format: 'plain',
		data: html
	}];
	*/
	return qz.print(config, htmldata);
}
 

function send_print_receipt_escpos(printer, escposdata, logo) {

	console.log("send_print_receipt_escpos: logo=" + logo)

	var printer = 'DEFAULT_SYSTEM_PRINTER';
	console.log("Printing data using " + printer)
	/*if(logo){
		image_logo = logo;
	} else {
		image_logo = '';
	}*/
	if (printer == 'DEFAULT_SYSTEM_PRINTER') {
		console.log("Printing Using default")
		printer  = printdev;
	}

	// Create a default config for the found printer 
	//var config = qz.configs.create(printer);
	var config = qz.configs.create(printer);

	data = JSON.parse(escposdata);
	console.log(data);
	// if (image_logo != '') {

	// 	console.log("We have image_logo="+ image_logo);

	// 	var htmldata = [{
	// 		type: 'raw',
	// 		format: 'image',
	// 		data: image_logo,
	// 		options: {
	// 			language: "escp",
	// 			dotDensity: 'double'
	// 		}}, escposdata
	// 	]; 

	// } else {
	// 	console.log("NO LOGO!");

 // 		var htmldata = [escposdata];  
	// }

	return qz.print(config, data);
}

 
