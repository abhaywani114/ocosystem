<?php
namespace App\Classes;
use Log;
use GuzzleHttp;
use Illuminate\Support\Facades\DB;

class PTS2
{
	private $url;
	private $username;
	private $password;
	private $ch = null;

    public function __construct($username, $password, $url) {
		$this->url = (!empty($url)) ? $url : env('PTS_URL');
		//Log::debug('url='.$this->url);

        $this->username = (!empty($username)) ? $username : env('PTS_USER');
		//Log::debug('username='.$this->username);

        $this->password = (!empty($password)) ? $password : env('PTS_PASSWD');
		//Log::debug('password='.$this->password);
    }

	public function set_channel() {
		$this->ch = curl_init($this->url);
		curl_setopt($this->ch, CURLOPT_USERPWD,
			"$this->username:$this->password");
		//curl_setopt($this->ch,CURLOPT_CONNECTTIMEOUT, 10);
		//curl_setopt($this->ch,CURLOPT_TIMEOUT, 10);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, TRUE);
	}


	public function pump_set_prices($pump, $prices) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				"Type" => "PumpSetPrices",
				'Data' => array(
					'Pump' => $pump,
					'Prices' => $prices
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));
		Log::debug(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_pts_config_file($ipaddr) {
		$url = "http://".$ipaddr.'/'.env('PTS_CONFIG');
		//dump($url);

		$ch = curl_init();
		//dump($ch);

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERPWD, "$this->username:$this->password");
		curl_setopt($ch, CURLOPT_FAILONERROR, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING ,"");

		//dump($this->username);
		//dump($this->password);

		$response = curl_exec($ch);

		$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		curl_close($ch);
		return $ret;
	}


	public function get_battery_voltage() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetBatteryVoltage'
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_unique_identifier() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetUniqueIdentifier'
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_firmware_information() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetFirmwareInformation'
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_sd_information() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetSdInformation'
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_user_information() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetUserInformation'
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function set_users_configuration($users) {
		/* Testing of fuelgrades array */
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				"Type" => "SetUsersConfiguration",
				'Data' => array(
					'Users' => $users
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));
		Log::debug(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_configuration_identifier() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetConfigurationIdentifier'
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_datetime() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetDateTime'
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function set_datetime($datetime) {
		//"DateTime" – date and time in format YYYY-MM-DDThh:mm:ss
		// (string, 19 symbols),
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'SetDateTime',
				'Data' => array(
					'DateTime' => $datetime,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump($data);

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}

	/*
	"IpAddress" – array of IPv4 octets (each is integer, range from 0 to 255)
	"NetMask" – array of network mask octets (each is integer, range from 0 to 255)
	"Gateway" – array of network gateway octets (each is integer, range from 0 to 255)
	"HttpPort" – network port for HTTP (integer, range from 0 to 65535)
	"HttpsPort" – network port for HTTPS (integer, range from 0 to 65535)
	"Dns1" – array of IPv4 octets (each is integer, range from 0 to 255)
	"Dns2" – array of IPv4 octets (each is integer, range from 0 to 255)
	*/
	public function set_pts_network_settings($ipaddress, $netmask, $gateway,
		$http_port , $https_port ,$dns1 , $dns2) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'SetPtsNetworkSettings',
				'Data' => array(
					'IpAddress' => $ipaddress,
					'NetMask' => $netmask,
					'Gateway' => $gateway,
					'HttpPort' => $http_port,
					'HttpsPort' => $https_port,
					'Dns1' => $dns1,
					'Dns2' => $dns2
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_pts_network_settings() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetPtsNetworkSettings'
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_system_decimal_digits() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetSystemDecimalDigits'
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function set_system_decimal_digits($price, $amount, $volume,
		$amount_total, $volume_total) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				"Type" => "SetSystemDecimalDigits",
				'Data' => array(
					'Price' => $price,
					'Amount' => $amount,
					'Volume' => $volume,
					'AmountTotal' => $amount_total,
					'VolumeTotal' => $volume_total
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}




	public function get_parameter($device, $number, $address) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetParameter',
				'Data' => array(
					'Device' => $device,
					'Number' => $number,
					'Address' => $address,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_pumps_configuration() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetPumpsConfiguration',
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function set_pumps_configuration($ports, $pumps) {
		/* Testing of fuelgrades array */
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				"Type" => "SetPumpsConfiguration",
				'Data' => array(
					'Ports' => $ports,
					'Pumps' => $pumps
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));
		Log::debug(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_probes_configuration() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetProbesConfiguration',
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function set_probes_configuration($ports, $probes) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetProbesConfiguration',
				'Data' => array(
					'Ports'  => $ports,
					'Probes' => $probes
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_fuel_grades_configuration() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetFuelGradesConfiguration',
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	/*
	"FuelGrades" – array of objects for configuration of fuel grades,
	elements of each object:
	­ “Id” – identifier of fuel grade (integer, range from 1 to 10)
	­ “Name” – name of fuel grade (string, up to 10 ASCII characters)
	­ “Price” – price of fuel grade (float, up to 9 digits with dot as a decimal
	   separator, value without a decimal separator is considered to have no
	   decimal digits)
	*/
	public function set_fuel_grades_configuration($fuelgrades) {
		/* Testing of fuelgrades array */
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				"Type" => "SetFuelGradesConfiguration",
				'Data' => array(
					'FuelGrades' => $fuelgrades
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));
		Log::debug(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_pump_nozzles_configuration() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetPumpNozzlesConfiguration',
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	/*
	"PumpNozzles" – array of objects for configuration of pump nozzles:
	­ “PumpId” – identifier of pump (integer, range from 1 to 64)
	­ “FuelGradeIds” – arrays of fuel grade IDs for nozzles (up to 6 integer
	   elements in each array, value range from 1 to 10)
	*/
	public function set_pump_nozzles_configuration($pumpnozzles) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				"Type" => "SetPumpNozzlesConfiguration",
				'Data' => array(
					'PumpNozzles' => $pumpnozzles
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_tanks_configuration() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetTanksConfiguration',
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function set_tanks_configuration($tanks) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'SetTanksConfiguration',
				'Data' => array(
					'Tanks' => $tanks
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}



	public function get_users_configuration() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetUsersConfiguration',
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function get_port_logging_configuration() {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'GetPortLoggingConfiguration',
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_get_status($pump_no) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpGetStatus',
				'Data' => array(
					'Pump' => $pump_no,
				)
			))
		);
		//dump($data);

		$this->set_channel();
		//dump($this->ch);

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));

		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_authorize($pump_no,$type,$dose,$nozzle=null,$price=null) {
        $dataDetails = [
            'Pump' => $pump_no,
            'Type' => $type,
            'Dose' => $dose,
            'AutoCloseTransaction' => true
        ];

        if (!empty($price)) {
            $dataDetails['Price'] = $price;
        }

        if (!empty($nozzle)) {
            $dataDetails['Nozzle'] = $nozzle;
        }

		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpAuthorize',
				'Data' => $dataDetails
			))
		);

		$this->set_channel();
		//dump($this->ch);
		//Log::debug(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_transaction_information($pump_no, $transaction) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpGetTransactionInformation',
				'Data' => array(
					'Pump' => $pump_no,
					'Transaction' => $transaction,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_stop($pump_no) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpStop',
				'Data' => array(
					'Pump' => $pump_no,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_emergency_stop($pump_no) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpEmergencyStop',
				'Data' => array(
					'Pump' => $pump_no,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		Log::debug('PTS2: pump_emergency_stop:'.json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_resume($pump_no) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpResume',
				'Data' => array(
					'Pump' => $pump_no,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_suspend($pump_no) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpSuspend',
				'Data' => array(
					'Pump' => $pump_no,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_close_transaction($pump_no, $transaction) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpCloseTransaction',
				'Data' => array(
					'Pump' => $pump_no,
					'Transaction' => $transaction,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_get_totals($pump_no, $nozzle) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpGetTotals',
				'Data' => array(
					'Pump' => $pump_no,
					'Nozzle' => $nozzle,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_get_prices($pump_no) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpGetPrices',
				'Data' => array(
					'Pump' => $pump_no,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_get_display_data($pump_no) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpGetDisplayData',
				'Data' => array(
					'Pump' => $pump_no,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_get_tag($pump_no, $nozzle) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpGetTag',
				'Data' => array(
					'Pump' => $pump_no,
					'Nozzle' => $nozzle,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function pump_set_lights($pump_no, $state) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'PumpSetLights',
				'Data' => array(
					'Pump' => $pump_no,
					'State' => $state,
				)
			))
		);

		$this->set_channel();
		//dump($this->ch);

		//dump(json_encode($data));

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function probe_get_measurements($probe_no) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'ProbeGetMeasurements',
				'Data' => array(
					'Probe' => $probe_no,
				)
			))
		);
		//dump($data);

		$this->set_channel();
		//dump($this->ch);

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function probe_get_tank_volume_for_height($probe_no, $height) {
		$data = array(
			'Protocol' => 'jsonPTS',
			'Packets' => array(array (
				'Id' => 1,
				'Type' => 'ProbeGetTankVolumeForHeight',
				'Data' => array(
					'Probe' => $probe_no,
					'Height' => $height,
				)
			))
		);
		//dump($data);

		$this->set_channel();
		//dump($this->ch);

		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));

		$response = json_decode(curl_exec($this->ch));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 

		$ret['response'] = $response;
		$ret['http_code'] = $http_code;

		return $ret;
	}


	public function close_channel() {
		if (!empty($this->ch)) {
			curl_close($this->ch);
		}
	}
}
?> 
