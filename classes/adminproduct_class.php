
<?php
// palmers,tee tree, cetaphil, cerave,mgl naturals

require('../settings/db_class.php');

class Product extends Connection{


    function getAllGTP(){
        $query = "SELECT * FROM products WHERE product_cat = 6; " ;
        return $this->fetch($query);
    }

    function getAllWoodin(){
        $query = "SELECT * FROM products WHERE product_cat = 5; " ;
        return $this->fetch($query);
    }

    function getAllLace(){
        $query = "SELECT * FROM products WHERE product_cat = 4; " ;
        return $this->fetch($query);
    }

    function getAllCosmetics(){
        $query = "SELECT * FROM products WHERE product_cat = 1; " ;
        return $this->fetch($query);
    }

    function getAllAccessories(){
        $query = "SELECT * FROM products WHERE product_cat = 3; " ;
        return $this->fetch($query);
    }

    function getAllBags(){
        $query = "SELECT * FROM products WHERE product_cat = 2; " ;
        return $this->fetch($query);
    }

    function viewOneProduct($pro_id){
        $query = "select * from products where product_id = '$pro_id' ;";
        return $this->fetch($query);
    }

    function checkProduct($product_title) {
        $query = "select * from products where product_name = '$product_title';";
        return $this->fetch($query);
    }

    function  addProduct($product_title,$price,$img,$desc,$keywords,$cat) {
        $query = "insert into products(product_name,product_price,product_image,product_desc,product_keywords,product_cat) values('$product_title','$price','$img','$desc','$keywords','$cat');";
        return $this->query($query);
    }

    function editProduct($id,$name,$price,$img,$desc,$keywords,$category){
        // update record for specified product
        return $this->query("update products set product_name ='$name' ,product_price = '$price', product_image = '$img', product_desc = '$desc', product_keywords = '$keywords' where product_id =' $id';");
    }

    

    function  deleteOneProduct($product_id) {
        $query = "delete from products where product_id = '$product_id';";
        return $this->query($query);
    }

    function productCount(){
        $query = "SELECT COUNT(product_id) from products;";
        return $this->query($query);
    }




}

?>