<?php
/**
 * Created by PhpStorm.
 * User: Anolis
 * Date: 7/4/2017
 * Time: 8:44 PM
 */

$ip = $_SERVER['REMOTE_ADDR']; //requesting ip
$sheet_url = ''; //put a google sheet url here with a function to handle the IP argument
$redirect_url = ''; //put a redirect link here to send them to

header("Location: $redirect_url" ); //send them on their way

$req = curl_init($sheet_url ."?ip=$ip");
curl_exec($req); //run the request to the sheet
