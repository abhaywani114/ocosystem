'use strict';

let port;
let reader;
let inputDone;
let outputDone;
let inputStream;
let outputStream;


const butConnect = $('#butConnect');

$(document).ready(function() {

let buffer = new ArrayBuffer(3);
let barray = new Uint8Array(buffer);

barray = [0x30, 0x31, 0x40];	// Addr1
var crc = crc16ansi(barray);	// CRC=0x6f14
var crcl = crc & 0xff;
var crch = (crc >> 8) & 0xff;
//alert('Addr1: crc=0x'+ crch.toString(16) + crcl.toString(16));

barray = [0x30, 0x32, 0x40];	// Addr2
crc = crc16ansi(barray);		// CRC=0x9f14
crcl = crc & 0xff;
crch = (crc >> 8) & 0xff;
//alert('Addr2: crc=0x'+ crch.toString(16) + crcl.toString(16));


let pbuffer = new ArrayBuffer(9);
let pbarray = new Uint8Array(pbuffer);
pbarray = [0x10,0x02,0x30,0x31,0x40,0x14,0x6f,0x10,0x03];

butConnect.on('click', clickConnect);


async function clickConnect() {
	await connect();
}

async function connect() {
	// - Request a port and open a connection.
	port = await navigator.serial.requestPort();

	// - Wait for the port to open.
	await port.open({ baudrate: 9600 });

	let decoder = new TextDecoderStream();
	inputDone = port.readable.pipeTo(decoder.writable);
	inputStream = decoder.readable;

	const encoder = new TextEncoderStream();
	outputDone = encoder.readable.pipeTo(port.writable);
	outputStream = encoder.writable;

	var getStatusInterval = setInterval(pollStatus, 200, 1);

	reader = inputStream.getReader();
	await readLoop();
}


function writeToStream(pbarray) {
	const writer = outputStream.getWriter();
	console.log('[SEND]', pbarray);
	pbarray.forEach(function(val) {
		writer.write(val);
	});
	//writer.write(hexToBin(line));
	writer.releaseLock();
}


function pollStatus(pump_no) {
	writeToStream(pbarray);
	var val = reader.read(11);
	log.textContent += val;
}


async function readLoop() {
	while (true) {
		const { value, done } = await reader.read();
		if (value) {
			log.textContent += value;
		}

		if (done) {
			console.log('[readLoop] DONE', done);
			reader.releaseLock();
			break;
		}
	}
}


});

