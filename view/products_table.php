
<?php
//check if login session exit
include('../settings/core.php');

admincheck_login();

include('../includes/adminheader.php');
include('../includes/adminnavbar.php');


?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["adminemail"]; ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../images/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

<!-- GTP Table Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center float-right mb-4">
                    
                       <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#productmodal">
  Add New Product
</button>
                    </div>
                    <br>
                      <br>
                      <br>

<!-- Modal -->
<div class="modal fade" id="productmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form method="POST" action="../actions/adminproduct_actions.php" class="row g-3">
  <div class="col-md-6">
    <label for="product_title" class="form-label">Product Name</label>
    <input type="text" class="form-control" id="name" name="product_title">
  </div>
  <div class="col-md-6">
    <label for="price" class="form-label">Price</label>
    <input type="tel" class="form-control" id="price"  name="price">
  </div>
  <div class="col-md-6">
    <label for="desc" class="form-label">Description</label>
    <input type="text" class="form-control" id="desc"  name="desc">
  </div>
  <div class="col-md-6">
    <label for="image" class="form-label">Image</label>
    <input type="text" class="form-control" id="img" name="img">
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
  <div class="col-md-6">
  <label for="keywords" class="form-label">Keywords</label>
  <input type="text" class="form-control" id="key" name="key">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name= "addProduct">Add</button>
      </div>

      </form>

    </div>
  </div>
</div>

<section id="Products_gtp">
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Products - GTP Fabrics</h2></div>


<?php

require ('../controllers/adminproduct_controller.php');

$GTP = viewAllGTPController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $GTP as $row ) {


?>

  <tbody>
    <tr>
      <td><?php echo $row["product_id"] ?></td>
      <td><?php echo $row["product_name"] ?></td>
      <td><?php echo $row["product_price"] ?></td>
      <td><?php echo $row["product_desc"]; ?></td>
      <td><?php echo $row["product_image"]; ?></td>
      <td><?php echo $row["product_keywords"]; ?></td>
      <td>
      <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                        <input type="hidden" name="edit" value="<?php echo $row['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="editbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                <input type=hidden name="palmdel" value="<?php echo $row['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="palmdelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>       
      </section>    
<br>
<br>
<br>
<br>

<section id="products_woodin">

<!-- woodin Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Products - Woodin</h2>
    </div>
<?php


$woodin = viewAllWoodinController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $woodin as $row1 ) {


?>

  <tbody>
    <tr>
    <td><?php echo $row1["product_id"] ?></td>
      <td><?php echo $row1["product_name"] ?></td>
      <td><?php echo $row1["product_price"] ?></td>
      <td><?php echo $row1["product_desc"]; ?></td>
      <td><?php echo $row1["product_image"]; ?></td>
      <td><?php echo $row1["product_keywords"]; ?></td>
      <td> 
      <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                        <input hidden  name="edit" value="<?php echo $row1['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="editbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                <input type=hidden name="ceradel" value="<?php echo $row1['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="ceradelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>           
    </section>

<br>
<br>
<br>
<br>

<section id="products_lace">



<!-- Lace Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Products - Lace</h2>
    </div>
<?php


$Lace = viewAllLaceController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $Lace as $row2 ) {


?>

  <tbody>
    <tr>
    <td><?php echo $row2["product_id"] ?></td>
      <td><?php echo $row2["product_name"] ?></td>
      <td><?php echo $row2["product_price"] ?></td>
      <td><?php echo $row2["product_desc"]; ?></td>
      <td><?php echo $row2["product_image"]; ?></td>
      <td><?php echo $row2["product_keywords"]; ?></td>
      <td>
      <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                        <input type="hidden" name="edit" value="<?php echo $row2['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="editbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                <input type=hidden name="teadel" value="<?php echo $row2['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="teadelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>           
    </section>

<br>
<br>
<br>
<br>

<section id="products_cos">


<!-- cosmetics Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Products - Cosmetics</h2>
    </div>
<?php


$cosmetics = viewAllCosmeticsController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $cosmetics as $row3 ) {


?>

  <tbody>
    <tr>
    <td><?php echo $row3["product_id"] ?></td>
      <td><?php echo $row3["product_name"] ?></td>
      <td><?php echo $row3["product_price"] ?></td>
      <td><?php echo $row3["product_desc"]; ?></td>
      <td><?php echo $row3["product_image"]; ?></td>
      <td><?php echo $row3["product_keywords"]; ?></td>
      <td> 
      <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                        <input type="hidden" name="edit" value="<?php echo $row3['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="editbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                <input type=hidden name="cetadel" value="<?php echo $row3['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="cetadelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>           
    </section>

<br>
<br>
<br>
<br>


<section id="products_acc">


<!-- Accessories Naturals Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Products - Accessories</h2>
    </div>
<?php


$access = viewAllAccessController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>

  <?php
       foreach( $access as $row4 ) {


?>

  <tbody>
    <tr>
      <td><?php echo $row4["product_id"] ?></td>
      <td><?php echo $row4["product_name"] ?></td>
      <td><?php echo $row4["product_price"] ?></td>
      <td><?php echo $row4["product_desc"]; ?></td>
      <td><?php echo $row4["product_image"]; ?></td>
      <td><?php echo $row4["product_keywords"]; ?></td>
      <td>
      <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                        <input type="hidden" name="edit" value="<?php echo $row4['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="editbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                <input type=hidden name="mgldel" value="<?php echo $row4['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="mgldelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>

</table>           

    </section>

<br>
<br>
<br>

<section id="products_bags">


<!-- Accessories Naturals Section -->

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Products - Bags</h2>
    </div>
<?php


$bags = viewAllBagsController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
    <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Keywords</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>

  <?php
       foreach( $bags as $row5 ) {


?>

  <tbody>
    <tr>
      <td><?php echo $row5["product_id"] ?></td>
      <td><?php echo $row5["product_name"] ?></td>
      <td><?php echo $row5["product_price"] ?></td>
      <td><?php echo $row5["product_desc"]; ?></td>
      <td><?php echo $row5["product_image"]; ?></td>
      <td><?php echo $row5["product_keywords"]; ?></td>
      <td>
      <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                        <input type="hidden" name="edit" value="<?php echo $row5['product_id']; ?>" />
                        <button class="btn btn-primary" type="submit" name="editbtn" >edit</button>
                    </form>   
         

            <form class="d-inline-flex" action="../actions/adminproduct_actions.php" method="post">
                <input type=hidden name="bagdel" value="<?php echo $row5['product_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="bagdelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>

</table>           

    </section>


</div>


            <!-- End of Main Content -->


    <?php
    include('../includes/adminscripts.php');
    include('../includes/adminfooter.php');


?>





