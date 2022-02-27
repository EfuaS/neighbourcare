<?php
//check if login session exit
include('../settings/core.php');

admincheck_login();

require ('../controllers/adminproduct_controller.php');

// get product id from url to use to get product info
$pro_id = $_GET['id'];
$product = viewOneProductController($pro_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
  foreach( $product as $row ) {


?>
<form method="POST" action="../actions/adminproduct_actions.php" class="row g-3">
   <div class="col-md-6">
     <label for="fname" class="form-label">Product Name</label>
     <input type="text" class="form-control" value="<?php echo $row["product_name"] ?>" name="name">
   </div>
   <div class="col-md-6">
     <label for="tel" class="form-label">Price</label>
     <input type="number" class="form-control" value="<?php echo $row["product_price"] ?>"  name="price">
   </div>
   <div class="col-12">
     <label for="Email" class="form-label">Description</label>
     <input type="text" class="form-control" value="<?php echo $row["product_desc"] ?>" name="desc">
   </div>
   <div class="col-12">
     <label  class="form-label">Image</label>
     <input type="text" class="form-control" value="<?php echo $row["product_image"] ?>" name="img">
   </div>
   <div class="col-12">
     <label  class="form-label">Keywords</label>
     <input type="text" class="form-control" value="<?php echo $row["product_keywords"] ?>" name="key">
   </div>
   <div class="col-md-6">
  <label for="" class="form-label">Category</label>
  <select id="cat" name="cat">
    <option value="1">cosmetics</option>
    <option value="2">bags</option>
    <option value="3">accessories</option>
    <option value="4">lace</option>
    <option value="5">woodin</option>
    <option value="6">gtp</option>
  </select>  </div>
   <div class="col-12">
     <input type="hidden" class="form-control" value="<?php echo $row["product_id"] ?>" name="pid">
   </div>
   <div>
   <button type="submit" class="btn btn-primary" name= "updatePro">Edit</button>
   </div>
   
   </form>
<?php

  }
?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>