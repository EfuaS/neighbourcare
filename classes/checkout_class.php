<?php

require(dirname(__FILE__)).'/../settings/db_class.php';

class Checkout extends Connection{

    function addOrder($customer_id,$invoice_no,$name,$phone,$email,$city,$region,$address,$carttotal){
        $query = "insert into orders(customer_id,invoice_no,Name,Phone,Email,City,Region,Street_Address,Total_Cost) values('$customer_id','$invoice_no','$name','$phone','$email','$city','$region','$address','$carttotal');" ;
        return $this->query($query);

    }

    function getCustId ($email){
        return $this->fetch("SELECT customer_id from people WHERE customer_email='$email';");
    }

    function getOrderID ($invoice){
        return $this->fetch("SELECT order_id from orders WHERE invoice_no='$invoice';");
    }

    // record payment in payments table
    function addPayment($email,$amt,$orderid){
        return $this->query("insert into payment(email,amt,order_id) values('$email','$amt','$orderid');");    }

        // clear cart
    function clearCart ($visitor_ip){
        return $this->query("delete from cart where ip_add = '$visitor_ip';");
    }


}
