var device;
navigator.usb.requestDevice({ filters: [{ vendorId: 0x1a86 }] })
.then(selectedDevice => {
	device = selectedDevice;
	return device.open(); // Begin a session.
})
// Select configuration #1 for the device.
.then(() => device.selectConfiguration(1))
// Request exclusive control over interface #2.
.then(() => device.claimInterface(2))
.then(() => device.controlTransferOut({
	requestType: 'class',
	recipient: 'interface',
	request: 0x22,
	value: 0x01,
	index: 0x02})) // Ready to receive data
// Waiting for 64 bytes of data from endpoint #5.
.then(() => device.transferIn(5, 64))
.then(result => {
	let decoder = new TextDecoder();
	console.log('Received: ' + decoder.decode(result.data));
})
.catch(error => { console.log(error); });
