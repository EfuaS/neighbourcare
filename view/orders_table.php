
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
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
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

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="h3 mb-0 text-gray-800">Orders </h2>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>
<?php

require ('../controllers/adminorder_controller.php');

$success = viewAllOrdersController();


?>

                    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Invoice No.</th>
      <th scope="col">Total Cost</th>
      <th scope="col">Order Date</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Phone</th>
      <th scope="col">Delivery City</th>
      <th scope="col">Delivery Region</th>
      <th scope="col">Address</th>
      <th scope="col">Actions</th>


    </tr>
  </thead>

  <?php
       foreach( $success as $row ) {


?>

  <tbody>
    <tr>
      <td><?php echo $row["order_id"]; ?></td>
      <td><?php echo $row["invoice_no"]; ?></td>
      <td><?php echo $row["Total_cost"]; ?></td>
      <td><?php echo $row["order_date"] ;?></td>
      <td><?php echo $row["Name"]; ?></td>
      <td><?php echo $row["Phone"]; ?></td>
      <td><?php echo $row["City"]; ?></td>
      <td><?php echo $row["Region"] ;?></td>
      <td><?php echo $row["Street_Address"] ;?></td>


      <td >          

            <form class="d-inline-flex" action="../actions/adminorder_actions.php" method="post">
                <input type=hidden name="ordel" value="<?php echo $row['order_id']; ?>" />
                <button class="btn btn-danger" type="submit" name="ordelbtn" >delete</button>
            </form>    
    </td>

    </tr>
  </tbody>

  <?php
       }
  ?>
</table>    


</div>
            <!-- End of Main Content -->


    <?php
    include('../includes/adminscripts.php');
    include('../includes/adminfooter.php');


?>





