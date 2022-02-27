<?php

require(dirname(__FILE__)).'/../classes/cart_class.php';


function addToCartByIp_Controller($product_id,$qty,$ip){
    
    $cart_actions = new cart();

    return $cart_actions->addToCartByIp($product_id,$qty,$ip);
}

function viewOneCartController($product_id, $visitor_ip){
    
    $cart_actions = new cart();

    return $cart_actions->viewOneCart($product_id, $visitor_ip);
}

// countitems in cart controller
function countCartController($visitor_ip){
    
    $cart_actions = new cart();

    return $cart_actions->countCart($visitor_ip);
}



// update quantity controller
function updateCartQtyController($product_id, $visitor_ip){
    
    $cart_actions = new cart();

    return $cart_actions->updateCartQty($product_id, $visitor_ip);
}

// get all items in cart controller for current ip
function getAllCartItemsController($visitor_ip){
    
    $cart_actions = new cart();

    return $cart_actions->getAllCartItems($visitor_ip);
}

// get all items in cart controller for current ip
function deleteOneCartController($cart_item_id,$visitor_ip){
    
    $cart_actions = new cart();

    return $cart_actions->deleteOneCart($cart_item_id,$visitor_ip);
}


?>