<?php
include("auth/auth.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.png" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/linearicons-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/MagnificPopup/magnific-popup.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
</head>

<body class="animsition">

	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<!-- Topbar -->
			<div class="top-bar">
				<div class="content-topbar flex-sb-m h-full container">
					<div class="text-center">
						Free shipping for standard order over 2000
					</div>
				</div>
			</div>

			<div class="wrap-menu-desktop">
				<nav class="limiter-menu-desktop container">

					<!-- Logo desktop -->
					<a href="index.php" class="logo">
						<h3 style="color: #333;"><b>ARTS</b> STORE</h3>
					</a>

					<!-- Menu desktop -->
					<div class="menu-desktop">
						<ul class="main-menu">
							<li>
								<a href="index.php">Home</a>
							</li>

							<li>
								<a href="product.php">Products</a>
							</li>
							<li>
								<a href="about.php">About</a>
							</li>

							<li>
								<a href="contact.php">Contact</a>
							</li>
							<li>
								<a href="feedback.php">Feedback</a>
							</li>
							<?php
							if (!isset($_SESSION['username'])) {
							?>


								<li>
									<a href="register.php">Sign Up</a>
								</li>
								<li>
									<a href="login.php">Sign In</a>
								</li>
							<?php

							} else {
							?>

								<li>
									<a href="profile.php">Profile</a>
								</li>
								<li>
									<a href="logout.php">logout</a>
								</li>
							<?php
							}
							?>
							<?php if (isset($_SESSION['usertype']) && $_SESSION['usertype'] === 'admin') : ?>
								<li>
									<a href="dashmin/categories.php">Admin Panel</a>
								</li>
							<?php endif; ?>
						</ul>
					</div>

					<!-- Icon header -->
					<div class="wrap-icon-header flex-w flex-r-m">

						<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php
																																	$quantityCount = 0;
																																	if (isset($_SESSION['cart'])) {
																																		foreach ($_SESSION['cart'] as $keys => $val) {
																																			$quantityCount = $quantityCount + $val['proquantity'];
																																		}
																																		echo $quantityCount;
																																	} else {
																																		echo $quantityCount;
																																	}
																																	?>">
							<i class="zmdi zmdi-shopping-cart"></i>
						</div>
					</div>
				</nav>
			</div>
		</div>

		<!-- Header Mobile -->
		<div class="wrap-header-mobile">
			<!-- Logo moblie -->
			<div class="logo-mobile">
				<a href="index.php">
					<h3 style="color: #333;"><b>ARTS</b> STORE</h3>
				</a>
			</div>

			<!-- Icon header -->
			<div class="wrap-icon-header flex-w flex-r-m">

				<div class="icon-header-item cl2 hov-cl1 trans-04 p-l-22 p-r-11 icon-header-noti js-show-cart" data-notify="<?php
																															$quantityCount = 0;
																															if (isset($_SESSION['cart'])) {
																																foreach ($_SESSION['cart'] as $keys => $val) {
																																	$quantityCount = $quantityCount + $val['proquantity'];
																																}
																																echo $quantityCount;
																															} else {
																																echo $quantityCount;
																															}
																															?>">
					<i class="zmdi zmdi-shopping-cart"></i>
				</div>
			</div>

			<!-- Button show menu -->
			<div class="btn-show-menu-mobile hamburger hamburger--squeeze">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</div>
		</div>


		<!-- Menu Mobile -->
		<div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						Free shipping for standard order over 2000
					</div>
				</li>
			</ul>

			<ul class="main-menu-m">
				<li>
					<a href="index.php">Home</a>
				</li>

				<li>
					<a href="product.php">Products</a>
				</li>
				<li>
					<a href="about.php">About</a>
				</li>

				<li>
					<a href="contact.php">Contact</a>
				</li>
				<li>
					<a href="feedback.php">feedback</a>
				</li>
				<?php
				if (!isset($_SESSION['username'])) {
				?>


					<li>
						<a href="register.php">Sign Up</a>
					</li>
					<li>
						<a href="login.php">Sign In</a>
					</li>
				<?php

				} else {
				?>

					<li>
						<a href="profile.php">Profile</a>
					</li>
					<li>
						<a href="logout.php">logout</a>
					</li>
				<?php
				}
				?>
			</ul>
		</div>

		<!-- Modal Search -->

	</header>

	<!-- Cart -->
	<div class="wrap-header-cart js-panel-cart">
		<div class="s-full js-hide-cart"></div>

		<div class="header-cart flex-col-l p-l-65 p-r-25">
			<div class="header-cart-title flex-w flex-sb-m p-b-8">
				<span class="mtext-103 cl2">
					Your Cart
				</span>

				<div class="fs-35 lh-10 cl2 p-lr-5 pointer hov-cl1 trans-04 js-hide-cart">
					<i class="zmdi zmdi-close"></i>
				</div>
			</div>

			<div class="header-cart-content flex-w js-pscroll">
				<ul class="header-cart-wrapitem w-full">
					<?php
					$subTotal = 0;
					if (isset($_SESSION['cart'])) {
						foreach ($_SESSION['cart'] as $cartKeys => $cartValues) {
							$subTotal += $cartValues['proquantity'] * $cartValues['proprice'];
					?>
							<li class="header-cart-item flex-w flex-t m-b-12">
								<div class="header-cart-item-img">
									<img src="<?php echo $proaddress . $cartValues['proimage'] ?>" alt="IMG">
								</div>

								<div class="header-cart-item-txt p-t-8">
									<a href="#" class="header-cart-item-name m-b-18 hov-cl1 trans-04">
										<?php echo $cartValues['proname'] ?>
									</a>

									<span class="header-cart-item-info">
										<?php echo $cartValues['proquantity'] ?> x PKR: <?php echo $cartValues['proprice'] ?>
									</span>
								</div>
							</li>
					<?php
						}
					}
					?>



				</ul>

				<div class="w-full">
					<div class="header-cart-total w-full p-tb-40">
						Total: PKR: <?php echo $subTotal ?>
					</div>

					<div class="header-cart-buttons flex-w w-full">
						<a href="shoping-cart.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-r-8 m-b-10">
							View Cart
						</a>

						<a href="order.php" class="flex-c-m stext-101 cl0 size-107 bg3 bor2 hov-btn3 p-lr-15 trans-04 m-b-10">
							Check Out
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>