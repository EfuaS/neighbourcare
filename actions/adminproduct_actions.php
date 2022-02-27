<?php
require('../controllers/adminproduct_controller.php');




if(isset($_POST['addProduct'])){
    // retrieve form details
    $product_title = $_POST['product_title'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $desc = $_POST['desc'];
    $category = $_POST['cat'];
    $keywords = $_POST['key'];
  
    $name_check = checkProductController($product_title);
    if(empty($name_check))
    {            
        addProductController($product_title,$price,$img,$desc,$keywords,$category);
        header("location:../view/products_table.php"); 
        exit(); 

              }  
              else  
              {  
                header("location:../view/products_table.php?exits=true"); 
                exit(); 

  
  
              }  
           
    
  
  }
  
//edit product process
if(isset($_POST['updatePro'])){
    // retrieve form details
    $product_name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_POST['img'];
    $desc = $_POST['desc'];
    $category = $_POST['cat'];
    $keywords = $_POST['key'];
    $id = $_POST['pid'];
 
 

    editProductController($id,$product_name,$price,$img,$desc,$keywords,$category);
    // header("location:../view/product_table.php"); 
    // exit(); 
 }  

 $pro_id = null;
 if (isset($_POST["editbtn"])) {
    $pro_id = $_POST['edit'];
    header("location: productupdate.php?id=$pro_id"); 
  
 }

//delete button process for product cetaphil table
if(isset($_POST["cetadelbtn"])){

    $ceta_id = $_POST['cetadel'];
    deleteOneProductController($ceta_id);
    header("location:../view/products_table.php"); 
        exit(); 
     }

//delete button process for product cerave table
if(isset($_POST["ceradelbtn"])){

    $cera_id = $_POST['ceradel'];
    deleteOneProductController($cera_id);
    header("location:../view/products_table.php"); 
        exit(); 
     }

//delete button process for product tea trea table
if(isset($_POST["teadelbtn"])){

    $tea_id = $_POST['teadel'];
    deleteOneProductController($tea_id);
    header("location:../view/products_table.php"); 
        exit(); 
     }

     //delete button process for product mgl table
if(isset($_POST["mgldelbtn"])){

    $mgl_id = $_POST['mgldel'];
    deleteOneProductController($mgl_id);
    header("location:../view/products_table.php"); 
        exit(); 
     }


     //delete button process for product palmers table

     if(isset($_POST["palmdelbtn"])){

    $palm_id = $_POST['palmdel'];
    deleteOneProductController($palm_id);
    header("location:../view/products_table.php"); 
        exit(); 
        }


?>