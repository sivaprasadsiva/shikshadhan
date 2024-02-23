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
        <div class="first-section" >
            <img src="{{ asset('assets/hero-img.jpg') }}"  alt="Background Image" class="background-image">
            <div class="content col-lg-5">
                <div class="heading-paragraph first-section-header">
                    <p>Inspiring Knowledge, </br>Education Mind</p>
                </div>
                <div class="heading-paragraph first-section-paragraph">
                    <p>Education is a systematic process through which a child or an adult acquires knowledge,
                        experience, skill and sound attitude. It makes an individual civilized, refined, cultured and educated.
                        For a civilized and socialized society, education is the only means. Its goal is to make an individual perfect.
                    </p>
                </div>
                <div class='learn-btn'>
                    <p>Learn More >></p>
                </div>
            </div>
        </div>


        {{-- info card section --}}
        <div class="info-bars">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 pl-5">
                        <div class="box">
                            <!-- Content for box 1 -->
                            <div class="main-box pt-3">
                                <div class="box-icon">
                                    <i class="bi bi-globe2"></i>
                                </div>
                                <div class="box-info">
                                    <p class="head"><b>Online Courses</b></p>
                                    <p class="read-btn">READ MORE..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 pl-5">
                        <div class="box">
                            <!-- Content for box 2 -->
                            <div class="main-box pt-3">
                                <div class="box-icon">
                                    <i class="bi bi-book"></i>
                                </div>
                                <div class="box-info">
                                    <p class="head"><b>Extra Books</b></p>
                                    <p class="read-btn">READ MORE...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 pl-5">
                        <div class="box">
                            <!-- Content for box 3 -->
                            <div class="main-box pt-3">
                                <div class="box-icon">
                                    <i class="bi bi-file-text"></i>
                                </div>
                                <div class="box-info">
                                    <p class="head"><b>Certification</b></p>
                                    <p class="read-btn">READ MORE...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        {{--  info card section--}}


        {{-- Package list --}}
        <div class="all-courses">
            <a href="{{route('packages')}}"><b>All Courses</b></a>
        </div>
            <div class="container">
                <div class="row pb-5">
                    <div class="col-lg-3 col-md-4">
                        <div class="package-box">
                                <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                                <div class="package-body">
                                    <p>Full Stack Development</p>
                                    <p>Learning to write programs stretches your mind, and helps you think better....</p>
                                    <span class="buy-btn">Buy</span>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="package-box">
                            <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                            <div class="package-body">
                                <p>Full Stack Development</p>
                                <p>Learning to write programs stretches your mind, and helps you think better....</p>
                                <span class="buy-btn">Buy</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="package-box">
                            <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                                <div class="package-body">
                                    <p>Full Stack Development</p>
                                    <p>Learning to write programs stretches your mind, and helps you think better....</p>
                                    <span class="buy-btn">Buy</span>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="package-box">
                            <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                            <div class="package-body">
                                <p>Full Stack Development</p>
                                <p>Learning to write programs stretches your mind, and helps you think better....</p>
                                <span class="buy-btn">Buy</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pb-5">
                    <div class="col-lg-3 col-md-4">
                        <div class="package-box">
                                <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                                <div class="package-body">
                                    <p>Full Stack Development</p>
                                    <p>Learning to write programs stretches your mind, and helps you think better....</p>
                                    <span class="buy-btn">Buy</span>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="package-box">
                            <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                                <div class="package-body">
                                    <p>Full Stack Development</p>
                                    <p>Learning to write programs stretches your mind, and helps you think better....</p>
                                    <span class="buy-btn">Buy</span>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="package-box">
                            <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                                <div class="package-body">
                                    <p>Full Stack Development</p>
                                    <p>Learning to write programs stretches your mind, and helps you think better....</p>
                                    <span class="buy-btn">Buy</span>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="package-box">
                            <img src="{{ asset('assets/package.jpeg')}}" class="package-image"/>
                                <div class="package-body">
                                    <p>Full Stack Development</p>
                                    <p>Learning to write programs stretches your mind, and helps you think better....</p>
                                    <span class="buy-btn">Buy</span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Package list --}}


            {{-- First Box content under Packages  --}}

            <div class="container first-box">
                <div class="row">
                    <div class="col-lg-6 left-section intro-image">
                            <img src=" {{ asset('assets/class.jpeg')}}" class="class-img"/>
                    </div>
                    <div class="col-lg-6">
                        <p class="p1"><b>Welcome To Our  Online Training Center</b></p>
                        <p class="p2">Online learning platforms in a repository of learning resources and materials, eliminating the need for students and teachers to take notes or make physical copies of learning materials. It helps save on paper and printing costs while ensuring all learners can access the resources.</p>
                        <span class="btn btn-primary">Discover More...</span>
                    </div>
                </div>
            </div>


        {{--  First Box conent under Packages --}}


        {{-- Second Box content --}}



        <div class="container second-box">
            <div class="row">
                <div class="col-lg-6">
                    <p class="p1"><b>Self Development Course</b></p>
                    <p class="p4">Self development is simply the process of learning new things and building new
                        skills—skills that help us increase our chances of success, achieving our goals, and manifesting our dreams.</p>
                    <span class="btn btn-primary">Discover More...</span>
                </div>
                <div class="col-lg-6 left-section intro-image">
                    <img src=" {{ asset('assets/learning.jpeg')}}" class="class-img"/>
            </div>
            </div>
        </div>

        {{-- Second Box content --}}

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
        const coursebtn = document.getElementById('course');

		profileIcon.addEventListener('click', function() {
			modal.style.display = 'block';
		});

		closeBtn.addEventListener('click', function() {
			modal.style.display = 'none';
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
