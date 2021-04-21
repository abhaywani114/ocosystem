<?php
namespace App\Classes;
use Illuminate\Support\Facades\DB;

//class systemid
class SystemID
{
	private $type;
	private $id;
	private $invalid = false;
	private $allowed_type = array(
		'company'=>['company_seq','01'],
		'individual'=>['individual_seq','02'],
		'product'=>['product_seq','03'],
		'location'=>['location_seq','04'],
		'terminal'=>['terminal_seq','05'],
		// 06 = receipt_seq_000048 (receipt sequence with terminal_id)
		// e.g. 1060000480000000009
        'counter'=>['counter_seq','07'],
		'voucherlist'=>['voucher_seq','08'],
		'takeaway'=>['takeaway_seq','09'],
		// 10 = refund_seq_000048 (receipt sequence with terminal_id)
		// e.g. 1100000480000000009
		'stockreport'=>['stockreport_seq','11'],
		'wastage'=>['wastage_seq','12'],
		'rack'=>['rack_seq','13'],
		'promo'=>['promo_seq','14'],
		'member'=>['member_seq','15'],
		'loyaltypts'=>['loyaltypts_seq','16'],
		'membershipmts'=>['membershipmts_seq','17'],
		'franchise'=>['franchise_seq','18'],
		'og_tank'=>['ogtank_seq','19'],
		'calibration'=>['calibration_seq','20'],
		'controller'=>['controller_seq','21'],
		'pump'=>['pump_seq','22'],
		'invoice'=>['invoice_seq','23'],
		'salesorder'=>['salesorder_seq','24'],
		'trackingreport'=>['trackingreport_seq','25'],
		// StockTake Mgmt require it's own systemid
		// Every receiver will generate it's own stockreport.systemid (11)
		'stocktake'=>['stocktake_seq','26'],
		'refund'=>['refund_seq','27'],
		'cmr'=>['cmr_seq','28'],
		// This is for Industry Ecommerce platform
		'platform'=>['platform_seq','29'],
		'creditnote'=>['creditnote_seq','30'],
		'debitnote'=>['debitnote_seq','31'],
		'agent'=>['agent_seq','32'],
		'comm_company'=>['comm_company_seq','32'],
		// This is for the redemption of products using Pts
		// at the Counter Loyalty Point Redemption (Pts)
		'pts_prd_redemption'=>['pts_prd_redemption_seq','33'],
		// These are for the ECommerce Platform
		'ec_buyer'=>['ec_buyer_seq','34'],
		'ec_merchant'=>['ec_merchant_seq','35'],
		'ec_receipt'=>['ec_receipt_seq','36'],
		'csr'=>['csr_seq','37'],
		'cpcr'=>['cpcr_seq','38'],
		// Project Management: project_id, job_id
		'projmgmt'=>['projmgmt_seq','39'],
		'projmgmt_job'=>['projmgmtjob_seq','40'],
		'asset'=>['asset_seq','41'],
		'hcap_staff'=>['hcap_staff_seq','42'],
		'pjobproduct'=>['pjobproduct_seq','43'],
		'ext_stockreport'=>['ext_stockreport_seq','44'],
		'purchaseorder'=>['purchaseorder_seq','45'],
		'deliveryorder'=>['deliveryorder_seq','46'],
		'asset'=>['asset_seq','47'],
		'vehicle'=>['vehicle_seq','48'],
		'atg'=>['atg_seq','49'],
		'converter'=>['converter_seq','50'],
		'converterport'=>['converterport_seq','51'],
		'arpayment'=>['arpayment_seq','52'],
        // 53 = openitem_seq_000048 (openitem sequence with location_id)
        // e.g. 1530000480000000009
        //'openitem'=>['openitem_seq','53'],
        'carparklot'=>['carparklot_seq','54'],
        'authorize'=>['authorize_seq','55'],
	);

	// This is a global platform identifier
	// 1 = Ocosystem
	// 2 = Ocobank
	// 3 = Pioneer E-Commerce 
	// 4 = CarKing	
	// 5 = Colugo
	// 6 = Dingo
	private $global_platform = 1;

	function __construct($type) {	
		if (!array_key_exists($type, $this->allowed_type)){
			$this->invalid =  true;

		} else {
			$data = $this->allowed_type[$type];
			$sequence = $data[0];
			$this->type = $data[1];
			$this->id = DB::select(
				"select nextval($sequence) as SystemID;")[0]->SystemID;
		}
	}


	// This is especially for receipt's systemid
	// 06 = receipt_seq_000048 (receipt sequence with terminal_id)
	// e.g. 1060000480000000009
	static public function reciept_system_id($t_id) {
		$type = '06';
		$sq_name = 'receipt_seq_' . sprintf("%06d",$t_id);
		$id = DB::select("select nextval($sq_name) as SystemID;")[0]->
			SystemID;

		return (1 . $type . sprintf("%06d",$t_id) . sprintf("%010d", $id ));
	}


	// This is especially for refund's systemid
	// 10 = refund_seq_000048 (refund sequence with terminal_id)
	// e.g. 1100000480000000009
	static public function refund_system_id($t_id) {
		$type = '10';
		$sq_name = 'refund_seq_' . sprintf("%06d",$t_id);
		$id = DB::select("select nextval($sq_name) as SystemID;")[0]->
			SystemID;

		return (1 . $type . sprintf("%06d",$t_id) . sprintf("%010d", $id ));
	}


	function  __toString() {
		if ($this->invalid) {
			return "Invalid type given";
		}

		return $this->global_platform.$this->type.sprintf("%010d",$this->id);
	}
}
?>
