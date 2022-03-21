
<!-- Header -->
<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +233 24 398 8909</li>
								<li><i class="ti-email"></i> support@ncare.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-7 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-user"></i> <a href="register.php">Register</a></li>
								<li><i class="ti-power-off"></i><a href="login.php">Login</a></li>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.php"><img src="images/nlogo.png" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<form method='post' action="search_results.php">
									<input name="search_phrase" placeholder="Search Products Here....." >
									<button name="search" type="submit" class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
						<!--/ End Search Form -->

					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar shopping">
								<a href="./cart.php" class="single-icon"><i class="ti-bag"></i> <span class="total-count"><?php print_r( $_SESSION['cartcount']);?></span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row">
						<div class="col-lg-3">
							<!-- <div class="all-category">
								<h3 class="cat-heading"><i class="fa fa-bars" aria-hidden="true"></i>CATEGORIES</h3>
								<ul class="main-category">
									<li class="main-mega"><a href="#">best selling <i class="fa fa-angle-right" aria-hidden="true"></i></a>
										<ul class="mega-menu">
											<li class="single-menu">
												<a href="#" class="title-link">Woodin</a>
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">GTP New Style</a>
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">Holland</a>
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
											<li class="single-menu">
												<a href="#" class="title-link">Lace Fabrics</a>
												<div class="image">
													<img src="https://via.placeholder.com/225x155" alt="#">
												</div>
											</li>
										</ul>
									</li>
									<li><a href="#">Cosmetics</a></li>
									<li><a href="#">Accessories</a></li>
								</ul>
							</div> -->
						</div>
						<div class="col-lg-9 col-12">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">	
										<div class="nav-inner">	
											<ul class="nav main-menu menu navbar-nav">
												<li><a href="index.php">Home</a></li>
												<li><a href="fabrics.php">Fabrics</a></li>												
												<!-- <li><a href="perfumes.php">Perfumes</a></li> -->
												<li><a href="cosmetics.php">Cosmetics<span class="new">New</span></a></li>
												<li><a href="specialOrder.php">Special Order</a></li>
											</ul>
									</div>
									</div>
								</nav>
								<!--/ End Main Menu -->	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
</header>
