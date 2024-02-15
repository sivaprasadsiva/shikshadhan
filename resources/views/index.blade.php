<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
	<div class="super_container">

		<!-- Header -->

		<div class="header ">
			<!-- Header Main -->

			<div class="main_nav">
				<div class="container">
					<div class="row">

						<!-- Logo -->
						<div class="col-lg-4 col-sm-12 col-md-4">
							<div class="logo_container">
								<div class="logo"><a href="#">Shikshadhan</a></div>
							</div>
						</div>
						<div class="col-lg-8 col-md-8 col-12">
							<div class="main_nav_menu">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">Services<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">Contact Us<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="#">About us<i class="fas fa-chevron-down"></i></a></li>
									<li>
										<div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
									</li>

								</ul>
							</div>
						</div>
						<!-- Wishlist -->
						<!-- <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">


							<div class="user_icon"><img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1560918647/user.svg" alt=""></div>
							<div class="wishlist_content">
								<div class="wishlist_text"><a href="#" id="loginDialogBtn">Register / Login</a></div>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Main Navigation -->

	<!-- <nav class="main_nav">
				<div class="container">
					<div class="row">
						<div class="col">

							<div class="main_nav_content d-flex flex-row"> -->

	<!-- Categories Menu -->
	<!-- Main Nav Menu -->

	<!-- <div class="main_nav_menu">
									<ul class="standard_dropdown main_nav_dropdown">
										<li><a href="#">Home<i class="fas fa-chevron-down"></i></a></li>
										<li class="hassubs">
											<a href="#">Laptop<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li>
													<a href="#">Lenovo<i class="fas fa-chevron-down"></i></a>
													<ul>
														<li><a href="#">Lenovo 1<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Lenovo 3<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Lenovo 2<i class="fas fa-chevron-down"></i></a></li>
													</ul>
												</li>
												<li><a href="#">DELL<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">APPLE<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">HP<i class="fas fa-chevron-down"></i></a></li>
											</ul>
										</li>
										<li class="hassubs">
											<a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li>
													<a href="#">APPLE<i class="fas fa-chevron-down"></i></a>
													<ul>
														<li><a href="#">Laptop<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Mobiles<i class="fas fa-chevron-down"></i></a></li>
														<li><a href="#">Ipads<i class="fas fa-chevron-down"></i></a></li>
													</ul>
												</li>
												<li><a href="#">Samsung<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">Lenovo<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="#">DELL<i class="fas fa-chevron-down"></i></a></li>
											</ul>
										</li>
										<li class="hassubs">
											<a href="#">Pages<i class="fas fa-chevron-down"></i></a>
											<ul>
												<li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
												<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
											</ul>
										</li>
										<li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
										<li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
									</ul>
								</div> -->

	<!-- Menu Trigger -->

	<div class="menu_trigger_container ml-auto">
		<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
			<div class="menu_burger">
				<div class="menu_trigger_text">menu</div>
				<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
			</div>
		</div>
	</div>

	<!-- </div>
						</div>
					</div>
				</div>
			</nav> -->

	<!-- Menu -->

	<div class="page_menu">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="page_menu_content">
						<div class="page_menu_search">
							<form action="#">
								<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
							</form>
						</div>
						<ul class="page_menu_nav">
							<li class="page_menu_item has-children">
								<a href="#">Language<i class="fa fa-angle-down"></i></a>
								<ul class="page_menu_selection">
									<li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
								</ul>
							</li>
							<li class="page_menu_item has-children">
								<a href="#">Currency<i class="fa fa-angle-down"></i></a>
								<ul class="page_menu_selection">
									<li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
								</ul>
							</li>
							<li class="page_menu_item">
								<a href="#">Home<i class="fa fa-angle-down"></i></a>
							</li>
							<li class="page_menu_item has-children">
								<a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
								<ul class="page_menu_selection">
									<li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
									<li class="page_menu_item has-children">
										<a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
										<ul class="page_menu_selection">
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
											<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
										</ul>
									</li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
								</ul>
							</li>
							<li class="page_menu_item has-children">
								<a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
								<ul class="page_menu_selection">
									<li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
								</ul>
							</li>
							<li class="page_menu_item has-children">
								<a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
								<ul class="page_menu_selection">
									<li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
									<li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
								</ul>
							</li>
							<li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
							<li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
						</ul>

						<div class="menu_contact">
							<div class="menu_contact_item">
								<div class="menu_contact_icon"><img src="images/phone_white.png" alt=""></div>+38 068 005 3570
							</div>
							<div class="menu_contact_item">
								<div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</header>

	<!-- Login popup start -->

	<div id="DialogeBox" class="modal">

		<!-- Modal content -->
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="login-box">
				<h1>Login</h1>
				<p>Welcome to Shikshadhan Edutech </p>
				<div class="input-field">
					<input class="username" placeholder="User name">
					<input class="password" placeholder="Password">
				</div>
				<button class="login-btn">Login</button>

			</div>
		</div>

	</div>

	<!-- Login popup end -->

	</div>

	<script>
		// Get the modal
		var modal = document.getElementById("DialogeBox");

		// Get the button that opens the modal
		var btn = document.getElementById("loginDialogBtn");

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks the button, open the modal 
		btn.onclick = function() {
			modal.style.display = "block";
		}

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
			modal.style.display = "none";
		}

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
</body>

</html>