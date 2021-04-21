let selectedDevice;

onmessage = async function(event) {
  switch(event.data.action) {
    // Open the device specified with vendorId and productId.
    case 'get-device':
		let devices = await navigator.usb.getDevices();
		let device = devices[0];

		//foreach (let device of devices) {
        if (device.vendorId === event.data.vendorId
            && device.productId === event.data.productId) {

			console.log(device);

			selectedDevice = device;
			selectedDevice.open();
			break;
        }
      //}
      break;
    // Read data from the opened device and send to the page.
    case 'read-device':
      try {
        await selectedDevice.selectConfiguration(1);
		//console.log('after selectConfiguration(1)');
        await selectedDevice.claimInterface(0);
		//console.log('after claimInterface(0)');
		/*
        await selectedDevice.controlTransferOut({
          requestType: 'class',
          recipient: 'interface',
          request: 0x22,
          value: 0x01,
          index: 0x02
        });
		console.log('after controlTransferOut()');
		*/
        let result = await selectedDevice.transferIn(3, 64);
        let decoder = new TextDecoder();
        let msg = decoder.decode(result.data);

		//console.log(msg);
        postMessage(msg);

      } catch(error) {
        console.log(error);
        postMessage(error);
      }
      break;
  }
}
