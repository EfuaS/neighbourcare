<?php
//check if login session exit
include('../settings/core.php');

admincheck_login();

require ('../controllers/adminpeople_controller.php');

// get customer id from url to use to get customer info
$cust_id = $_GET['id'];
$customer = viewOneCustomerController($cust_id);

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
  foreach( $customer as $row ) {


?>
<form method="POST" action="../actions/admincustomer_actions.php" class="row g-3">
   <div class="col-md-6">
     <label for="fname" class="form-label">Full Name</label>
     <input type="text" class="form-control" value="<?php echo $row["customer_name"] ?>" name="name">
   </div>
   <div class="col-md-6">
     <label for="tel" class="form-label">Contact</label>
     <input type="tel" class="form-control" value="<?php echo $row["customer_contact"] ?>"  name="contact">
   </div>
   <div class="col-12">
     <label for="Email" class="form-label">Email</label>
     <input type="email" class="form-control" value="<?php echo $row["customer_email"] ?>" name="mail">
   </div>
   <div class="col-12">
     <input type="hidden" class="form-control" value="<?php echo $row["customer_id"] ?>" name="id">
   </div>
   <div>
   <button type="submit" class="btn btn-primary" name= "updateCust">Add</button>
   </div>
   
   </form>
<?php

  }
?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>