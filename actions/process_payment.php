<?php

require("../settings/core.php");
require(dirname(__FILE__)).'/../controllers/checkout_controller.php';


// check if user is logged in
check_login();



$curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/{$_GET['ref']}",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_f5dbff0128d9c9c2641473e98ee4ae3c37188357",
      "Cache-Control: no-cache",
    ),
  ));

  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  

  $responseObject = json_decode($response);

  if(isset($responseObject->data->status)&& $responseObject->data->status === 'success'){
      $ref = $_GET['ref'];      
      $email = $_GET['email'];
      $amount = $_GET['amount'];
      $invoice = $_GET['invoice'];

    // since payment table requires order id, get it by using invoice number
    $order_id_results = getOrderID_controller ($invoice);
    $order_id = $order_id_results['0']['order_id'];

    // record payment in payments table
    $check = addPaymentController($email,$amount,$order_id);

    if ($check = true) {
    // user ip address
    $visitor_ip = getRealIpAddr();

    //clear cart of current ip
    clearCartController ($visitor_ip);
    // $cartCount = count(countCartController($visitor_ip));
    $cartCount = 0;
    $_SESSION['cartcount'] = $cartCount;
    header('location:../cart.php');
    exit();

    } else {
      header('location../404.html');
      exit();
    }
    

    }
?>