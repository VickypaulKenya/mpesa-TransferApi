<?php
include""

date_default_timezone_set("africa/Nairobi");
$processrequest_url="";
$callback="";
$Passkey ="";
$bussinessShotcode="";
$Timestamp=date("Y-m-d\TH:i:s");
$Password=base64_encode($bussinessShotcode . $Passkey . $Timestamp);
$phone="";
$money="";
$partyA=$phone;
$partyB="0703966359";
$accountReference="";
$transsactionDesc="";
$amount=$money;
$stkpushHeader=["Content-Type:application/json","Authorization:Bearer". $access_token];
$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,$initaiate_url);
curl_setopt($curl,CURLOPT_HTTPHEADER,$stkHeader);
$curl_post_data=array(
"BussinessShortCode"=$bussinessShotcode,
"Password"=>$Password,
"Timestamp"=>$Timestamp,
"TransactionType"=>"CustomerPaybillOnlone",
"Amount"=>$amount,
"PartyA"==>$partyA,
""

);
