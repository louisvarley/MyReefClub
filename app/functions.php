<?php

function login($user){
	\myReef\classes\user::setUser($user);
}

function isLoggedIn(){
	
	return ((\myReef\classes\user::getName() !== null) ? true :false);
	
}

function userName(){
	
	return \myReef\classes\user::getName();
	
}

function userEmail(){
	
	return \myReef\classes\user::getEmail();
	
}

function userID(){
	
	return \myReef\classes\user::getID();
	
}

function logout(){
	
	return \myReef\classes\user::unsetUser();
		
}

/* Dashed String to Camel Case */
function dashesToCamelCase($string) 
{
    $str = lcfirst(str_replace(' ', '', ucwords(str_replace('-', ' ', $string))));
	
    return $str;
}

/* Redirect */
function redirect($url)
{
	$url = "/" . ltrim($url,"/");
	header("Location: $url");
}

/* Redirect */
function error($message="")
{
	$url = "/" . "error&m=" + base64_encode($message);
	header("Location: $url");
}


/* URL Parts */
function parts()
{
	
	$base = explode("?",$_SERVER['REQUEST_URI'])[0];
	return explode('/',$base);
}

function getClientIP()
{

    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
	
	return explode(":",$ip)[0];

}

/* Unique Nonce tied to the date and IP Address to semi-secure AJAX calls */
function getNonce()
{
	
	$str = date("Y-m-d") . getClientIP();
	$nonce = md5($str);		
	return $nonce;
	
}

/* Generate a Random GUID */
function guid()
{
    if (function_exists('com_create_guid') === true)
    {
        return trim(com_create_guid(), '{}');
    }

    return sprintf('%04X%04X-%04X-%04X-%04X-%04X%04X%04X', mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 20479), mt_rand(32768, 49151), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
}

/* Generate a Random Salt */
function salt(){
	
	 $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789/\\][{}\'";:?.>,<!@#$%^&*()-_=+|';
     $randString = "";
     $randStringLen = 64;

     while(strlen($randString) < $randStringLen) {
         $randChar = substr(str_shuffle($charset), mt_rand(0, strlen($charset)), 1);
         $randString .= $randChar;
     }

     return $randString;
}

function e($str){
	
	echo htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
	
}

function timeElapsed($timestamp, $full = false) {
	
	$datetime = new \DateTime();
	$datetime->setTimestamp($timestamp);

    $now = new DateTime;
    $ago =$datetime;
    $diff = $now->diff($ago);

    $diff->w = floor($diff->d / 7);
    $diff->d -= $diff->w * 7;

    $string = array(
        'y' => 'year',
        'm' => 'month',
        'w' => 'week',
        'd' => 'day',
        'h' => 'hour',
        'i' => 'minute',
        's' => 'second',
    );
    foreach ($string as $k => &$v) {
        if ($diff->$k) {
            $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
        } else {
            unset($string[$k]);
        }
    }

    if (!$full) $string = array_slice($string, 0, 1);
    return $string ? implode(', ', $string) . ' ago' : 'just now';
}


function rssStamp($timestamp, $full = false) {
	
    return date('r', $timestamp);
}

function currentURL(){
	
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
	{
		$link = "https://"; 
	}else{
		$link = "http://"; 
	}
	 
	$link .= $_SERVER['HTTP_HOST']; 
	$link .= $_SERVER['REQUEST_URI']; 
		  
	return $link;
	
}

function baseURL(){

if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
	{
		$link = "https://"; 
	}else{
		$link = "http://"; 
	}
	
	return $link . $_SERVER['SERVER_NAME']; 
}

function generateBitly($url){

	$arr_result = file_get_contents('https://api-ssl.bitly.com/v3/shorten?longUrl=' . urlencode($url) . '&access_token=' . _BITLY_TOKEN);	
	$arr_response = json_decode($arr_result);	

	if(!isset($arr_response->data->url)){
		return($url);
	}else{
		return $arr_response->data->url;
	}
	
}

function stringToColor($str) {
	
  $code = dechex(crc32($str));
  $code = substr($code, 0, 6);
  return "#" . $code;
}


function isFloat($v){
	
	return preg_match('/^[0-9]*\.[0-9]+$/', $v);
}


function price($str){
	
	if(isfloat($str))
	{
		return "£" . $str;
	}	else {
		return $str;
	}
	
}


