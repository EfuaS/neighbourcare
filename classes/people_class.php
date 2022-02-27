<?php

require('../settings/db_class.php');

class People extends Connection{

    function cust_check ($email){
        return $this->fetch("SELECT *  FROM people WHERE customer_email='$email';");
    }

    function retrieve_cust ($email){
        return $this->fetch("SELECT * from people WHERE customer_email='$email';");
    }



    function cust_reg($name,$email,$pass,$tel){
        return $this->query("INSERT INTO people(customer_name,customer_email,customer_pass,customer_contact) VALUES('$name','$email','$pass','$tel') ;");
    }

}   
?>