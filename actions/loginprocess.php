<?php

require('../controllers/people_controller.php');

if(isset($_POST["logbtn"]))  
 {  
      if(empty($_POST["log_mail"]) || empty($_POST["log_pass"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = $_POST["log_mail"];  
           $password = $_POST["log_pass"];  

           //retrieve customer record from table for checking
           $result = retrieve_cust_controller ($username); 
          //  print_r($result); 

           //retrieve email and password
           $cust_email = $result['0']["customer_email"];
           $hash_pass =  $result['0']["customer_pass"];
         

           if($username = $cust_email && password_verify($password, $hash_pass))  
           {         
               session_start();
               $_SESSION["email"] = $cust_email; 
          //   redirect to users profile page
               header("location:../cart.php"); 
           } else {
               header("location:../login.php"); 

           } 
                  
           
      }
 } 

?>