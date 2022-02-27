<?php

require("./classes/product_class.php");


function retrieve_whites_controller (){
    
    $product_actions = new Product();

    return $product_actions->retrieve_whites ();
}


function getAllFabricsController(){
    $product_actions = new Product ();
    return $product_actions->getAllFabrics();
}

function getAllAccessoriesController(){
    $product_actions = new Product ();
    return $product_actions->getAllAccessories();
}

function getAllCosmeticsController(){
    $product_actions = new Product ();
    return $product_actions->getAllCosmetics();
}


function getOneProductController($pid){
    $product_actions = new Product ();
    return $product_actions->getOneProduct($pid);
}

function searchDbController($phrase){
    $product_actions = new Product ();
    return $product_actions->searchDb($phrase);
}

function addReviewController($name,$product_name,$mail,$rating,$message){
    $product_actions = new Product ();
    return $product_actions->addReview($name,$product_name,$mail,$rating,$message);
}

function getReviewsController($product_name){
    $product_actions = new Product ();
    return $product_actions->getReviews($product_name);
}

function createCustomOrderContr($username,$product_name,$usermail,$user_contact,$message){
    $product_actions = new Product ();
    return $product_actions->createCustomOrder($username,$product_name,$usermail,$user_contact,$message);
}



?>