<?php

require("../controllers/people_controller.php");

if(isset($_POST["regbtn"]))  
 {  
      if(empty($_POST["email"]) || empty($_POST["password"]))  
      {  
           echo '<script>alert("All Fields are required")</script>';  
      }  
      else  
      {  
            $name = $_POST["name"];
            $email = $_POST["email"];  
            $tel = $_POST["tel"];
           $pass = $_POST["password"];  
           $hashpass = password_hash($pass, PASSWORD_DEFAULT);

           $custCheckResult = cust_check_controller($email);  


           if(empty($custCheckResult)){
                        
                        $results = cust_reg_controller($name,$email,$hashpass,$tel);
                        if ($results = true ) {
                             header("location:../login.php");
                        }else{
                        header("location:../404.html"); 
                        }
                     }  
                     else  
                     {  
                          
                         header("location:../login.php");
                     }  
                  
           
       }
 } 

?>


