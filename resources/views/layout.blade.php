<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shikshadhan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Include Montserrat font family -->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

	<!-- Include Bootstrap Icons CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/addon.css')}}">
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
					<li><a href="{{ route('packages') }}">Courses </a></li>
					<li>About Us </li>
					<li>Contact us </li>
					<li><i class="bi bi-person-circle profile-icon" id="profile-icon"></i></li>
				</ul>
			</div>
		</div>
	</header>

    <div class="global-container">
        @yield('main_content_purchase')
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
                <p>To get More Choices</p>
			</div>
			<div class="col-md-6 col-sm-12 col-lg-4">
                <p>Legal</p>
                <p>Privacy</p>
                <p>Terms & Condition</p>
			</div>
		</div>
	</footer>
