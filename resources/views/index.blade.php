<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Shikshadhan</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('css/home.css') }}">
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
	<!-- Include Montserrat font family -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<!-- Include Bootstrap Icons CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>
	<header>
		<div class="header transparent-card row">
			<div class="col-md-4 col-sm-12 col-lg-5 responsive-header">
				<i class="bi bi-list menu-icon" id="menu-icon"></i>
				<h2>Shikshadhan</h2>
			</div>
			<div class="col-md-8 col-sm-12 col-lg-7">
				<ul class="header-list">
					<li>Home </li>
					<li>Courses </li>
					<li>About Us </li>
					<li>Contact us </li>
					<li><i class="bi bi-person-circle profile-icon" id="profile-icon"></i></li>
				</ul>
			</div>
		</div>
	</header>




	<div id="myModal" class="modal">
		<div class="modal-content">
			<span class="close">&times;</span>
			<div class="modal-title">
				<h2>Login</h2>
				<p>Welcome to Shikshadhan Edu Tech</p>
			</div>
			<div class="login-input-field">
				<input placeholder="Username">
				<input placeholder="Password">
			</div>
			<div class="login-btn">
				<button>login</button>
				<p>Doesn’t have an account ? <a href="#">Register</a> </p>
			</div>
		</div>
	</div>


	<div class="global-container">

	</div>



	<footer>
		<div class="footer transparent-card row">
			<div class="col-md-6 col-sm-12 col-lg-4">
				<h4>
					Shikshadhan EduTech
				</h4>
				<p>Private LTD</p>
			</div>
			<div class="col-md-6 col-sm-12 col-lg-4">

			</div>
			<div class="col-md-6 col-sm-12 col-lg-4">

			</div>
		</div>
	</footer>






	<!-- Script for responsive header -->

	<script>
		// Get references to the menu icon and the header list
		const menuIcon = document.getElementById('menu-icon');
		const headerList = document.querySelector('.header-list');

		// Add click event listener to the menu icon
		menuIcon.addEventListener('click', function() {
			// Toggle the 'show' class on the header list
			headerList.classList.toggle('show');
		});
	</script>

	<!-- Script for responsive header -->

	<!-- Script for Pop up -->

	<script>
		const profileIcon = document.getElementById('profile-icon');
		const modal = document.getElementById('myModal');
		const closeBtn = document.getElementsByClassName('close')[0];

		profileIcon.addEventListener('click', function() {
			modal.style.display = 'block';
		});

		closeBtn.addEventListener('click', function() {
			modal.style.display = 'none';
		});

		window.addEventListener('click', function(event) {
			if (event.target == modal) {
				modal.style.display = 'none';
			}
		});
	</script>


	<!-- Script for Pop up -->


</body>

</html>