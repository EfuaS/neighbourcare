
<?php

require('../settings/db_class.php');

class People extends Connection{

    function admin_login ($email){
        return $this->fetch("SELECT * FROM people WHERE customer_email='$email' AND user_role = 1 ;");
    }
    // return $this->query("select count(customer_email) from customer where customer_email = '$email';");

    function customer_check ($email){
        return $this->fetch("SELECT * FROM people WHERE customer_email='$email';");
    }

    function viewAllCustomers(){
        $query = "select * from people where user_role = 2 order by customer_id;";
        return $this->fetch($query);
    }

    function viewOneCustomers($id){
        $query = "select * from people where user_role = 2 order by customer_id;";
        return $this->fetch($query);
    }

    function viewAllAdmins(){
        $query = "select * from people where user_role = 1 ;";
        return $this->fetch($query);
    }

    function viewOneCustomer($cust_id){
        $query = "select * from people where customer_id = '$cust_id' ;";
        return $this->fetch($query);
    }

    
    function customerCount(){
        $query= "SELECT COUNT(customer_id) FROM people where user_role = 2;";
        return $this->query($query);

    }


    function addCustomer($name,$email,$pswd,$contact,$role){
		// query to insert into table customer
        return $this->query("insert into people(customer_name, customer_email, customer_pass, customer_contact,user_role) values('$name','$email','$pswd','$contact','$role');");

    }

    function editCustomer($name,$contact,$email, $id){
        // update record for specified customer
        return $this->query("update people set customer_name ='$name' ,customer_contact = '$contact', customer_email = '$email' where customer_id =' $id';");
    }

    function deleteOneCustomer($customer_id){
        // delete specified customer record
        return $this->query("delete from people where customer_id = '$customer_id';");
    }



}

?>