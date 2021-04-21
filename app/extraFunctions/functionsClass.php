<?php 
	namespace App\extraFunctions;
	class functionsClass {
		
		public static function monthNameShort(){
			$month = [];
			for($m=1; $m<=12; ++$m){
    			$month[] =  date('M', mktime(0, 0, 0, $m, 1));
    			}
			return $month;
		}

		public static function monthNameLong(){
			$month = [];
			for($m=1; $m<=12; ++$m){
    			$month[] =  date('F', mktime(0, 0, 0, $m, 1));
    			}
			return $month;
		}

		public static function dumyData(){
			$data = [];
			$date = date('d-m-Y');
			for ($i=0; $i <=10 ; $i++) {
				$data[]  = [
					'Day'=>date("D", strtotime("$date +".$i." days")),
					'date'=>date("d-m-Y", strtotime("$date +".$i." days")),
					'full'=>'0','working'=>'0','status'=>'Not Assigned'
				];
			}
			return $data;
		}
	}
?>
