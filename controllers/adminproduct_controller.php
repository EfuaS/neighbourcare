
<?php

require('../classes/adminproduct_class.php');



function viewAllGTPController(){
    
    $admin_actions = new Product();
    return $admin_actions->getAllGTP();
}

function viewAllWoodinController(){
    
    $admin_actions = new Product();
    return $admin_actions->getAllWoodin();
}

function viewAllLaceController(){
    
    $admin_actions = new Product();
    return $admin_actions->getAllLace();
}

function viewAllBagsController(){
    
    $admin_actions = new Product();
    return $admin_actions->getAllBags();
}

function viewAllCosmeticsController(){
    
    $admin_actions = new Product();
    return $admin_actions->getAllCosmetics();
}

function viewAllAccessController(){
    
    $admin_actions = new Product();
    return $admin_actions->getAllAccessories();
}

function checkProductController($product_title){
    
    $admin_actions = new Product();
    return $admin_actions->checkProduct($product_title);
}

function addProductController($product_title,$price,$img,$desc,$keywords,$cat){
    
    $admin_actions = new Product();
    return $admin_actions->addProduct($product_title,$price,$img,$desc,$keywords,$cat);
}

function editProductController($id,$product_title,$price,$img,$desc,$keywords,$category){
    
    $admin_actions = new Product();
    return $admin_actions->editProduct($id,$product_title,$price,$img,$desc,$keywords,$category);
}



function viewOneProductController($pro_id){
    
    $admin_actions = new Product();

    return $admin_actions->viewOneProduct($pro_id);
}

function deleteOneProductController($id){
    
    $admin_actions = new Product();
    return $admin_actions->deleteOneProduct($id);
}

function productCountController(){
    
    $admin_actions = new Product();
    return $admin_actions->productCount();
}




?>