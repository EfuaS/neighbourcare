<?php
require('../controllers/adminpeople_controller.php');

// add new customer process
 if(isset($_POST['addCust'])){
    // retrieve form details
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $pswd = $_POST['pass'];
    $pass_hash = password_hash($pswd,PASSWORD_DEFAULT);
    $contact = $_POST['contact'];
    $role = $_POST['role'];


    $email_check = customerCheckcontroller ($email);
    if(empty($email_check))
    {            
            addCustomerController ($name,$email,$pass_hash,$contact,$role);
             header("location:../view/customer_table.php"); 
             exit(); 


    }else {  
                   header("location:../view/customer_table.php?exits=true"); 
                   exit(); 
    }  

              }  
           

//update customer customer process
if(isset($_POST['updateCust'])){
   // retrieve form details
   $name = $_POST['name'];
   $email = $_POST['mail'];
   $contact = $_POST['contact'];
   $id = $_POST['id'];


   editCustomerController($name,$contact,$email, $id);
   header("location:../view/customer_table.php"); 
   exit(); 
}  
          
   







     // delete btn process
 if(isset($_POST["custdelbtn"])){

   $customer_id = $_POST['custdel'];
   deleteOneCustomerController($customer_id);
   header("location:../view/customer_table.php"); 
       exit(); 
    }

    $cust_id = null;
if (isset($_POST["custeditbtn"])) {
   $cust_id = $_POST['custedit'];
   header("location: update.php?id=$cust_id"); 
 
}

?>