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
					<li><a href="{{ route('home') }}" style="text-decoration: none">Home </a></li>
					<li><a href="{{ route('packages') }}">Courses </a></li>
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
            <form>
                @csrf
			<div class="login-input-field">
				<input placeholder="Username">
				<input placeholder="Password">
			</div>
			<div class="login-btn">
				<button>login</button>
				<p>Doesn’t have an account ? <a href="#" id="register-form">Register</a> </p>
			</div>
            </form>
		</div>
	</div>


    <div id="registerModal" class="registermodal">
		<div class="modal-content">
			<span class="registerclose">&times;</span>
			<div class="modal-title">
				<h2>Register</h2>
				<p>Welcome to Shikshadhan Edu Tech</p>
			</div>
            <form action="">
                @csrf
			<div class="login-input-field">
                <input placeholder="Enter a username" name="username">
                <input placeholder="Enter email" name="email">
				<input placeholder="Mobile number" name="mobilenumber">
                <input placeholder="Enter password" name="password">
                <input placeholder="Re-enter the password">
			</div>
			<div class="login-btn">
				<button>login</button>
				<p>Doesn’t have an account ? <a href="#" id="register-form">Register</a> </p>
			</div>
            </form>
		</div>
	</div>

{{-- Main Content --}}
	<div class="global-container">
        @yield('index_full_content')
	</div>
{{-- Main Content End --}}


{{-- Footer --}}
	<footer>
		<div class="footer transparent-card row">
			<div class="col-md-6 col-sm-12 col-lg-4">
				<h4>
					Shikshadhan EduTech
				</h4>
				<p>Private LTD</p>
			</div>
			<div class="col-md-6 col-sm-12 col-lg-4">
                <p>To get More Choices</p>
			</div>
			<div class="col-md-6 col-sm-12 col-lg-4">
                <p>Legal</p>
                <p>Privacy</p>
                <p>Terms & Condition</p>
			</div>
		</div>
	</footer>
{{-- Footer --}}





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
        const registercloseBtn = document.getElementsByClassName('registerclose')[0];
        const coursebtn = document.getElementById('course');
        const registeration = document.getElementById('register-form');
        const registerModal = document.getElementById('registerModal');

		profileIcon.addEventListener('click', function() {
			modal.style.display = 'block';
		});

        registeration.addEventListener('click', function(){
            registerModal.style.display = 'block';
            modal.style.display = 'none';
        })

		closeBtn.addEventListener('click', function() {
			modal.style.display = 'none';
		});

        registercloseBtn.addEventListener('click', function() {
			registerModal.style.display = 'none';
		});

        closeBtn.addEventListener('click', function(){
            // window.location.href = closeRoute;
            console.log('hello');

            // Retrieve the route URL from the data attribute
            // var routeUrl = this.getAttribute('data-route');

            // Redirect to the route URL
            // window.location.href = routeUrl;
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
