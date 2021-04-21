<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('bank')->truncate();
		$now = Carbon::now()->toDateTimeString();
		DB::table('bank')->insert(array (
			0 =>array(
				'code'=>'AFN',
				'name'=>'Affin',
				'logo'=>'',
				'company_name' => 'Affin Bank',
				'routing_id' => '100002322',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			1 =>array(
				'code'=>'AJH',
				'name'=>'Al-Rajhi',
				'logo'=>'',
				'company_name' => 'Al-Rajhi Bank',
				'routing_id' => '100003509',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			2 =>array(
				'code'=>'ALI',
				'name'=>'Alliance',
				'logo'=>'',
				'company_name' => 'Alliance Bank',
				'routing_id' => '100002128',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			3 =>array(
				'code'=>'AMB',
				'name'=>'AMB',
				'logo'=>'',
				'company_name' => 'Ambank',
				'routing_id' => '100002089',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			4 =>array(
				'code'=>'ISL',
				'name'=>'Bank Islam',
				'logo'=>'',
				'company_name' => 'Bank Islam',
				'routing_id' => '100002458',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			5 => array(
				'code' => 'RKY',
				'name' => 'Bank Rakyat',
				'logo' => '',
				'company_name' => 'Bank Rakyat',
				'routing_id' => '100016020',
				'created_at'  => $now,
				'updated_at'  => $now,
			),   
			6 =>array(
				'code'=>'MUA',
				'name'=>'Bank Muamalat',
				'logo'=>'',
				'company_name' => 'Bank Muamalat',
				'routing_id' => '100003415',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			7 => array(
				'code' => 'BoA',
				'name' => 'BoA',
				'logo' => '',
				'company_name' => 'Bank of America',
				'routing_id' => '100002076',
				'created_at'  => $now,
				'updated_at'  => $now,
			),
			8 =>array(
				'code'=>'BoT',
				'name'=>'Bank of Tokyo',
				'logo'=>'',
				'company_name' => 'Bank of Tokyo',
				'routing_id' => '100002102',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			9 =>array(
				'code'=>'BSN',
				'name'=>'BSN',
				'logo'=>'',
				'company_name' => 'Bank Simpanan Nasional',
				'routing_id' => '100006017',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			10 =>array(
				'code'=>'BNP',
				'name'=>'BNP',
				'logo'=>'',
				'company_name' => 'BNP Paribas Malaysia',
				'routing_id' => '100002636',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			11 =>array(
				'code'=>'CIMB',
				'name'=>'CIMB',
				'logo'=>'',
				'company_name' => 'CIMB Bank',
				'routing_id' => '100002050',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			12 =>array(
				'code'=>'Citibank',
				'name'=>'Citibank',
				'logo'=>'',
				'company_name' => 'Citibank',
				'routing_id' => '100002173',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			13 =>array(
				'code'=>'Deutsche',
				'name'=>'Deutsche',
				'logo'=>'',
				'company_name' => 'Deutsche Bank',
				'routing_id' => '100002199',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			14 => array(
				'code' => 'HLB',
				'name' => 'HLB',
				'logo' => '',
				'company_name' => 'Hong Leong Bank',
				'routing_id' => '100002241',
				'created_at'  => $now,
				'updated_at'  => $now,
			),
			15 =>array(
				'code'=>'HSBC',
				'name'=>'HSBC',
				'logo'=>'',
				'company_name' => 'HSBC Bank',
				'routing_id' => '100002225',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			16 =>array(
				'code'=>'ICBC',
				'name'=>'ICBC',
				'logo'=>'',
				'company_name' => 'Industrial & Commercial Bank of China',
				'routing_id' => '100002597',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			17 => array(
				'code' => 'JPMorgan',
				'name' => 'JPMorgan',
				'logo' => '',
				'company_name' => 'JPMorgan Chase Bank',
				'routing_id' => '100002157',
				'created_at'  => $now,
				'updated_at'  => $now,
			), 
			18 =>array(
				'code'=>'KFH',
				'name'=>'Kuwait Finance',
				'logo'=>'',
				'company_name' => 'Kuwait Finance House',
				'routing_id' => '100003460',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			19 =>array(
				'code'=>'MBB',
				'name'=>'Maybank',
				'logo'=>'',
				'company_name' => 'Maybank',
				'routing_id' => '100002270',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			20 =>array(
				'code'=>'MIZ',
				'name'=>'Mizuho',
				'logo'=>'',
				'company_name' => 'Mizuho Bank',
				'routing_id' => '100002610',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			21 =>array(
				'code'=>'OCBC',
				'name'=>'OCBC',
				'logo'=>'',
				'company_name' => 'OCBC Bank',
				'routing_id' => '100002296',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			22 => array(
				'code' => 'PBB',
				'name' => 'PBB',
				'logo' => '',
				'company_name' => 'Public Bank',
				'routing_id' => '100002335',
				'created_at'  => $now,
				'updated_at'  => $now,
			),    
			23 => array(
				'code' => 'RHB',
				'name' => 'RHB',
				'logo' => '',
				'company_name' => 'RHB Bank',
				'routing_id' => '100002186',
				'created_at'  => $now,
				'updated_at'  => $now,
			),  
			24 =>array(
				'code'=>'RBS',
				'name'=>'RBS',
				'logo'=>'',
				'company_name' => 'RBS Bank',
				'routing_id' => '100002021',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			25 =>array(
				'code'=>'STC',
				'name'=>'Stanchart',
				'logo'=>'',
				'company_name' => 'Standard Chartered Bank',
				'routing_id' => '100002144',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			26 =>array(
				'code'=>'SUM',
				'name'=>'Sumitomo',
				'logo'=>'',
				'company_name' => 'Sumitomo Mitsui Bank',
				'routing_id' => '100002623',
				'created_at'=>$now,
				'updated_at'=>$now
			),
			27 =>array(
				'code'=>'UOB',
				'name'=>'UOB',
				'logo'=>'',
				'company_name' => 'United Overseas Bank',
				'routing_id' => '100002267',
				'created_at'=>$now,
				'updated_at'=>$now
			),
		));
    }
}
