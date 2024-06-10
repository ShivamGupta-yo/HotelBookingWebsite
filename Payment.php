<?php 

require('admin/inc/db_config.php');
require('admin/inc/essentials.php');

define('CHANNEL_ID','WEB');
define('INDUSTRY_TYPE_ID','Retail');

date_default_timezone_set("Asia/Kolkata");

session_start();

if(!(isset($_SESSION['login']) && $_SESSION['login'] == true)){
    redirect('index.php');
}

// if((isset($_POST['pay_now']))){
//  $checkSum='';

//  $ORDER_ID = 'ORD_'.$_SESSION['uId'].random_int(1111,99999);
//  $CUST_ID =$_SESSION['uId'];
//  $INDUSTRY_TYPE_ID = $_POST['INDUSTRY_TYPE_ID'];
//  $CHANNEL_ID = $_POST['CHANNEL_ID'];
//  $TXN_AMOUNT = $_POST['TXN_AMOUNT'];
// }

?>










<!--  phone pay payment code          ------------------------------------------------------------------- -->
<?php
// Replace these with your actual PhonePe API credentials

$merchantId = 'PGTESTPAYUAT'; // sandbox or test merchantId
$apiKey="099eb0cd-02cf-4e2a-8aca-3e6c6aff0399"; // sandbox or test APIKEY
$redirectUrl = 'http://localhost/Hotelbookingwebsite/pay_response.php';
$keyIndex=1;

// Set transaction details
if((isset($_POST['pay_now']))){
  $checkSum='';
$ORDER_ID = 'ORD_'.$_SESSION['uId'].random_int(1111,99999);
$CUST_ID =$_SESSION['uId'];
$INDUSTRY_TYPE_ID = $_POST['INDUSTRY_TYPE_ID'];
$CHANNEL_ID = $_POST['CHANNEL_ID'];
$TXN_AMOUNT = $_SESSION['room']['payment'];
$amount = 10;


// $name="Tutorials Website";
// $email="info@tutorialswebsite.com";
// $mobile=9999999999;
// $amount = 10; // amount in INR
// $description = 'Payment for Product/Service';


$paymentData = array(
    'merchantId' => $merchantId,
    'merchantTransactionId' => "MT7850590068188104", // test transactionID
    "merchantUserId"=>$_SESSION['uId'],
    'amount' => $amount*100,
    'redirectUrl'=>$redirectUrl,
    'redirectMode'=>"POST",
    'callbackUrl'=>$redirectUrl,
    "merchantOrderId"=>$order_id,
   "mobileNumber"=>$mobile,
   "message"=>$description,
   "email"=>$email,
   "shortName"=>$name,
   "paymentInstrument"=> array(    
    "type"=> "PAY_PAGE",
  )
);



 $jsonencode = json_encode($paymentData);
 $payloadMain = base64_encode($jsonencode);

 $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
 $sha256 = hash("sha256", $payload);
 $final_x_header = $sha256 . '###' . $keyIndex;
 $request = json_encode(array('request'=>$payloadMain));
                
$curl = curl_init();
curl_setopt_array($curl, [
  CURLOPT_URL => "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
   CURLOPT_POSTFIELDS => $request,
  CURLOPT_HTTPHEADER => [
    "Content-Type: application/json",
     "X-VERIFY: " . $final_x_header,
     "accept: application/json"
  ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
   $res = json_decode($response);
 
if(isset($res->success) && $res->success=='1'){
$paymentCode=$res->code;
$paymentMsg=$res->message;
$payUrl=$res->data->instrumentResponse->redirectInfo->url;

header('Location:'.$payUrl) ;
}
}

}
          
?>
