<?php
namespace App\Classes;
use Log;
use GuzzleHttp;
use Illuminate\Support\Facades\DB;

class ECAPI
{
	private $url = "";
	private $appKey = '';
	private $ch = null;

    public function __construct($appKey, $url) {
        $this->appKey = $appKey;
        $this->url = $url;
    }
	
	public function set_channel() {
		$this->ch = curl_init($this->url);
		curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, 1);
		$headers = array();
		$headers[] = "Content-Type: application/json";
		curl_setopt($this->ch, CURLOPT_HTTPHEADER, $headers);		
	}	

	public function test_configuration() {
		$data = [
		   'appkey' => $this->appKey
		 ];

		$this->set_channel();
		curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 
		$response = json_decode(curl_exec($this->ch));
		$ret['response'] = $response;
		$ret['http_code'] = $http_code;
		$this->close_channel();
		return $ret;
	}
	
	public function postrequest($data) {
		$this->set_channel();
		curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 
		$response = json_decode(curl_exec($this->ch));
		$ret['response'] = $response;
		$ret['http_code'] = $http_code;
		$this->close_channel();
		return $ret;
	}	
	
	public function getrequest($data) {
		$this->set_channel();
		curl_setopt($this->ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($this->ch, CURLOPT_POSTFIELDS, json_encode($data));
		$http_code = curl_getinfo($this->ch, CURLINFO_HTTP_CODE); 
		$response = json_decode(curl_exec($this->ch));
		$ret['response'] = $response;
		$ret['http_code'] = $http_code;
		$this->close_channel();
		return $ret;
	}		
	
	public function close_channel() {
		if (!empty($this->ch)) {
			curl_close($this->ch);
		}
	}

}

?> 
