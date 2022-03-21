<?php

if (isset($_POST['reviewbtn'])) {
    $reviewername = $_POST['reveiwer'];
    $product_name = $_POST['rev_product'];
    $mail = $_POST['rev_email'];
    $rating = $_POST['rev_rating'];
    $pro_id = $_POST['pro_id'];
    $message = $_POST['rev_message'];

    include('controllers/product_controller.php');

    // record review in database
    $check = addReviewController($reviewername,$product_name,$mail,$rating,$message);
    if ($check = true) {
        // if adding review successful refresh page
        header("location:single_product.php?pid=".$pro_id);

    }else {
        //return to single product view page
        header("location:javascript://history.go(-1)");
    }
}



?>