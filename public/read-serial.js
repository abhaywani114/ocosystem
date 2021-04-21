let selectedDevice;


onmessage = async function(event) {
	switch(event.data.action) {
		case 'get-device':
			alert('foo');
			let port = await navigator.serial.requestPort({ filters: [
				{ vendorId: event.data.vendorId, productId: event.data.productId }
			]});

			await port.open({ baudrate: 9600 });
			await port.connect();
			break;

    // Read data from the opened device and send to the page.
		case 'read-device':
		try {
			let decoder = new TextDecoderStream();
			inputDone = port.readable.pipeTo(decoder.writable);
			inputStream = decoder.readable;

			reader = inputStream.getReader();

			while (true) {
				const { value, done } = await reader.read();
				if (value) {
					log.textContent += value + '\n';
					postMessage(msg);
				}
				if (done) {
					console.log('[readLoop] DONE', done);
					reader.releaseLock();
					break;
				}
			}


		} catch(error) {
			console.log(error);
			postMessage(error);
		}
		break;
	}
}
