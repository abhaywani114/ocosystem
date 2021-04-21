function open_opos_pvoucher(id) {
  $.ajax({
    url: `opospvoucher/view/${id}`,
    method: "get",
    success: function (res) {
		$("#papervoucher-details").modal("show");
		$("#papervoucher-details").find("#staff_name").text(res.data.user.name);

		$("#papervoucher-details").find("#staff_id").
			text(res.data.user.staff.systemid);

		$("#papervoucher-details").find("#doc_no").text(res.data.doc_no);

		/* ucfirst the platform */
		var pf = res.data.platform;
		if (pf === 'aliexpress') {
			pf = 'AliExpress';
		} else {
			pf = pf.charAt(0).toUpperCase() + pf.slice(1);
		}

		//console.log('pf='+pf);

		$("#papervoucher-details").find("#platform").text(pf);
		$("#papervoucher-details").find("#comments").text(res.data.description);
	},
  });
}
