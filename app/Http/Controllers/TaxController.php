<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ixudra\Curl\Facades\Curl;
use Illuminate\Support\Facades\Config;


class TaxController extends Controller
{

    protected $request;

    public function __construct(Request $request){
        $this->request = $request;
    }

    public function calculateTax(){
        $curl_url = '127.0.0.1:8080/api/tax';
        $server_response = Curl::to($curl_url)
            ->withData( ['form_fields' => json_encode($this->request->all())] )
            ->withOption('SSL_VERIFYHOST', false)
            ->withOption('TIMEOUT',0)
			->returnResponseObject()
            ->post();

		if($server_response->status == 200){
			return response($server_response->content, 200);
		}else {
			return response([], 404);
		}
        
    }
}