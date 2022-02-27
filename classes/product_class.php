<?php

require('./settings/db_class.php');

class Product extends Connection{

    function retrieve_whites (){
        return $this->fetch("SELECT * from products WHERE product_image LIKE 'white%';");
    }

    function getAllFabrics(){
        $query = "SELECT * FROM products WHERE product_cat = 6 OR product_cat = 5 OR product_cat = 4; " ;
        return $this->fetch($query);
    }

    function getAllCosmetics(){
        $query = "SELECT * FROM products WHERE product_cat = 1; " ;
        return $this->fetch($query);
    }

    function getAllAccessories(){
        $query = "SELECT * FROM products WHERE product_cat = 3 OR product_cat = 2; " ;
        return $this->fetch($query);
    }

    function getOneProduct($pid){
        $query = "SELECT * FROM products WHERE product_id = '$pid'; ";
        return $this->fetch($query);
    }

    function searchDb($phrase){
        $query = "SELECT * FROM `products` WHERE `product_keywords` LIKE '%$phrase%' ORDER BY `product_keywords`;";
        return $this->fetch($query);
    }
// function to insert customer review to db
    function addReview($name,$product_name,$mail,$rating,$message){
        $query = "insert into reviews values('$name','$product_name','$mail','$rating','$message'); ";
        return $this->query($query);
    }

// function to retrieve review based on product name
function getReviews($product_name){
    $query = "SELECT * FROM reviews WHERE Product_Name = '$product_name' LIMIT 3; ";
    return $this->fetch($query);
}

// method record custom order details 
function createCustomOrder($username,$product_name,$usermail,$user_contact,$message){
    $query = "insert into custom_order (name,email,tel,product,order_details) values('$username','$usermail','$user_contact','$product_name','$message'); ";
    return $this->query($query);
} 

}

?>