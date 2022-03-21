<?php
require('../settings/core.php');
require(dirname(__FILE__)).'/../controllers/cart_controller.php';


// if add to cart form button is submitted collect product id and quantity 
if (isset($_POST['product_id']) && isset($_POST['qty'])) {

    $product_id = $_POST['product_id'];
    $quantity = $_POST['qty'];
    
// user ip address
    $visitor_ip = getRealIpAddr();


// if product already in cart go to message page
    $results = viewOneCartController($product_id, $visitor_ip);

    $results = viewOneCartController($product_id, $visitor_ip);
    if(count($results) > 0 ){
        //product exists so update quantity +1 where user ip is recorded
        updateCartQtyController($product_id, $visitor_ip);
        //count cart items beloning to current ip
        $cartCount = count(countCartController($visitor_ip));
        $_SESSION['cartcount'] = $cartCount;
        header("location:javascript://history.go(-1)");
        exit();
        
    }else {
        // product does not exist so add to cart
        $addcart = addToCartByIp_Controller($product_id,$quantity,$visitor_ip);
        //count cart items beloning to current ip
        $cartCount = count(countCartController($visitor_ip));
        $_SESSION['cartcount'] = $cartCount;
        // refresh page
        header("location:javascript://history.go(-1)");
        exit();
        

    }
}
     
    
//delete button to process remove from cart
if(isset($_GET['cartremoveid'])){

    // get user ip address
    $visitor_ip = getRealIpAddr();

    $cart_item_id = $_GET['cartremoveid'];
    // delete cart item with index product id and visitor's ip address
    $delete_Cart = deleteOneCartController($cart_item_id,$visitor_ip);
    $cartCount = count(countCartController($visitor_ip));
    $_SESSION['cartcount'] = $cartCount;
    header("location: ../cart.php");
    exit();
     }
 
?>