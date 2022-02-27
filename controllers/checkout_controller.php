<?php

require(dirname(__FILE__)).'/../classes/checkout_class.php';

function addOrderConttoller($customer_id,$invoice_no,$name,$phone,$email,$city,$region,$address,$carttotal){
    $checkout_actions = new Checkout();
    return $checkout_actions->addOrder($customer_id,$invoice_no,$name,$phone,$email,$city,$region,$address,$carttotal);
}

function getCustId_controller ($email){
    
    $checkout_actions = new Checkout();

    return $checkout_actions->getCustId ($email);
}

function getOrderID_controller ($invoice){
    
    $checkout_actions = new Checkout();

    return $checkout_actions->getOrderID ($invoice);
}

function addPaymentController($email,$amt,$orderid){
    
    $checkout_actions = new Checkout();

    return $checkout_actions->addPayment($email,$amt,$orderid);
}

function clearCartController ($visitor_ip){
    
    $checkout_actions = new Checkout();

    return $checkout_actions->clearCart ($visitor_ip);
}

