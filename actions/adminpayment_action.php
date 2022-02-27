<?php
require('../controllers/adminpayment_controller.php');


 // add new order process
 if(isset($_POST['addPay'])){

    // retrieve form details
    $customer_id = $_POST['cid'];
    $curr = $_POST['curr'];
    $amt = $_POST['amt'];
    $orderid = $_POST['orderid'];
    $date = $_POST['paydate'];

    $order_id_check = checkPaymentController($orderid);
    if(empty($order_id_check) )
    {            
      addPaymentController($cid,$curr,$amt,$orderid,$date);
      header("location:../view/payments_table.php"); 
      exit(); 

              }  
              else  
              {  
               
                header("location:../view/payments_table.php?exits=true"); 
                exit(); 


              }  
           
    

}

//delete button process for payment table
if(isset($_POST["paydelbtn"])){

    $pay_id = $_POST['paydel'];
    deleteOnePaymentController($pay_id);
    header("location:../view/payments_table.php"); 
        exit(); 
     }





?>