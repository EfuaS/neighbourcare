<?php

require(dirname(__FILE__)).'/../settings/db_class.php';

class cart extends Connection{

    function addToCartByIp($product_id,$qty,$ip){
        $query = "insert into cart(p_id,qty,ip_add) values('$product_id','$qty','$ip');" ;
        return $this->query($query);

    }

    function viewOneCart($product_id, $visitor_ip){
        $query = "select * from cart where p_id = '$product_id' and ip_add='$visitor_ip';" ;
        return $this->fetch($query);

    }
// count items in cart for user with ip
    function countCart($visitor_ip){
        $query = "select * from cart where ip_add='$visitor_ip';" ;
        return $this->fetch($query);

    }

    // update cart quantity in database plus 1
    function updateCartQty($product_id, $visitor_ip){
        $query = "update cart set qty = qty + 1 where p_id = '$product_id' and ip_add='$visitor_ip';" ;
        return $this->query($query);

    }

    // retrieve records from cart for display cart.php page
    function getAllCartItems($visitor_ip){
        $query = "SELECT * FROM `cart` JOIN `products` ON (`products`.`product_id` = `cart`.`p_id`) WHERE `cart`.`ip_add`='$visitor_ip';";
        return $this->fetch($query);

    }

        // retrieve records from cart for display cart.php page
        function deleteOneCart($cart_item_id, $visitor_ip){
            $query = "delete from cart where ip_add ='$visitor_ip' and p_id = '$cart_item_id';";
            return $this->query($query);
    
        }
    
    
    

}
?>