<?php
require_once('../includes/mydbhandler.php');
$dbhandler = new Mydbhandler();
$trxref = $_GET['trxref'];
global $paystatus;
$description = $_GET['description'];
$invoiceid = $_GET['invoiceid'];
$paymenttype = $_GET['paymenttype'];
$method = $_GET['method'];
$patientid = $_GET['patientid'];
$email = $_GET['email'];
$paystatus = $dbhandler->getAvaluebyID('status', 'payment_integration_id','1', 'payment_integration');

if($paystatus == "1")
{
 // this is for demo   
  $secretkey = $dbhandler->getAvaluebyID('secret_key_test', 'payment_integration_id','1', 'payment_integration');  
}
else if($paystatus == "2")
{
 // this is for live test   
 $secretkey = $dbhandler->getAvaluebyID('live_secret_key', 'payment_integration_id','1', 'payment_integration');  
   
}

// amount is already present
$paystack_url = 'https://api.paystack.co/transaction/verify/'.$trxref;
$headers2 = array("GET /HTTP/1.1","Authorization: Bearer ".$secretkey);
$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers2);
curl_setopt($ch, CURLOPT_URL,$paystack_url);

$data = curl_exec($ch);
if (curl_errno($ch)) {
    //print "Error: " . curl_error($ch);
	// I know this is an error
}
else {
    $json = json_decode($data,true);
    curl_close($ch);
}
$status = $json['status'];
$status2 =  $json['data']['status'];
$reference =  $json['data']['reference'];
$authorizationcode =  $json['data']['authorization']['authorization_code'];
$amount = $json['data']['amount']/100;

if($status == 1 && $status2 == 'success')
{
$dbhandler->PerformVerification($reference,$amount,$authorizationcode,$email,$description,$invoiceid,$method,$patientid,$paymenttype);	
}
?>