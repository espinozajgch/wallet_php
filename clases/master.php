<?php
	require 'api.php';

	class Master{
		/*clase que contiene todas las funciones relacionadas a las consultas de la informacion de los usuarios*/

	function __construct(){

	}


	public static function browser($url){
		$handler = curl_init($url);  
		//curl_setopt($handler, CURLOPT_URL, $url);  
		curl_setopt($handler, CURLOPT_HTTPGET,true); 
		//curl_setopt($handler, CURLOPT_USERAGENT,"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.1) Gecko/2008070208 Firefox/3.0.1");  
		curl_setopt($handler, CURLOPT_HTTPHEADER, array('Content-Type:application/json','Accept:application/json'));  
		curl_setopt($handler, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($handler, CURLOPT_POST,false);  
        curl_setopt($handler, CURLOPT_HEADER, false);  
        curl_setopt($handler, CURLOPT_REFERER, '');  
        curl_setopt($handler, CURLOPT_FOLLOWLOCATION, false);  
        
        $response = curl_exec($handler);  
		curl_close($handler);

        if($response === false){  
            echo curl_error($handler);  
        }
        else{
        	return $response;	
        }  
	}

	public static function wallet()
    {
    	$curl = URL.CREATE."api_key=".API_KEY;
    	echo $curl;
        $blockchain = Master::browser($curl);
        return json_decode($blockchain);
        //echo $blockchain->guid;
    }

    public static function balance()
    {
    	$curl = URL.BALANCE."api_key=".API_KEY;
    	echo $curl;
        $blockchain = Master::browser($curl);
        return json_decode($blockchain);
        //echo $blockchain->guid;
    }

    public static function create($email, $password)
    {
    	$curl = URL.CREATE."api_key=".API_KEY."&password=".$password."&mail=".$email."&label=".LABEL;
        echo $curl;
        $blockchain = Master::browser($curl);
        return json_decode($blockchain);
        //echo $blockchain->guid;
    }

    public static function send($address, $mount, $fee, $pin)
    {
    	$curl = URL.SEND."api_key=".API_KEY."&to=".$address."&mount=".$mount."&fee=".$fee."&pin".$pin;
        echo $curl;
        $blockchain = Master::browser($curl);
        return json_decode($blockchain);
        //echo $blockchain->guid;
    }

    public static function newaddress()
    {
    	$curl = URL.NEWADDRESS."api_key=".API_KEY."&label=".LABEL;
        echo $curl;
        $blockchain = Master::browser($curl);
        return json_decode($blockchain);
        //echo $blockchain->guid;
    }

    public static function addressbalance($address)
    {
    	$curl = URL.ADDRESSBALANCE."api_key=".API_KEY."&address=".$address;
        echo $curl;
        $blockchain = Master::browser($curl);
        return json_decode($blockchain);
        //echo $blockchain->guid;
    }

    public static function archive($address)
    {
    	$curl = URL.ARCHIVE."api_key=".API_KEY."&address=".$address;
        echo $curl;
        $blockchain = Master::browser($curl);
        return json_decode($blockchain);
        //echo $blockchain->guid;
    }

    public static function unarchive($address)
    {
    	$curl = URL.UNARCHIVE."api_key=".API_KEY."&address=".$address;
        echo $curl;
        $blockchain = Master::browser($curl);
        return json_decode($blockchain);
        //echo $blockchain->guid;
    }

    public static function listaddress()
    {
    	$curl = URL.LISTADDRESS."api_key=".API_KEY;
        echo $curl;
        $blockchain = Master::browser($curl);
        return json_decode($blockchain);
        //echo $blockchain->guid;
    }

    public static function bitcoin($value,$coin)
    {
    	$curl = URL.BITCOIN."value=".$value."&coin=".$coin;
        echo $curl;
        $blockchain = Master::browser($curl);
        return json_decode($blockchain);
        //echo $blockchain->guid;
    }

}

?>