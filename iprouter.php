<?php
/**
 * Created by PhpStorm.
 * User: Anolis
 * Date: 7/4/2017
 * Time: 8:44 PM
 */

$sheet_url = '***REMOVED***';
$ip = $_SERVER['REMOTE_ADDR'];
$redirect_url = 'https://www.youtube.com/watch?v=AUYqjmKstRQ';
//echo $ip;

$req = curl_init($sheet_url ."?ip=$ip");
curl_exec($req);
header("Location: $redirect_url" );
