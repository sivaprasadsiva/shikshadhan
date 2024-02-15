<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="global-container">
        <div class="header-container">
            <header>
                <div class="header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 col-lg-4">
                            <h1 class="header-title">Shikshadhan</h1>
                            <i class="fas fa-bars menu-icon" id="menuButton" (click)="toggleMenu()"></i>
                            <!-- <span class="header-close-btn">&times;</span> -->
                        </div>
                        <div class="col-md-6 col-sm-12 col-lg-7">
                            <div class="nav-list-container" id="menuDrawer">
                                <ul class="nav-list menu">
                                    <li><a>Home</a></li>
                                    <li><a>Services</a></li>
                                    <li><a>Contact Us</a></li>
                                    <li><a>About Us</a></li>
                                    <li><i class="fa fa-user profile-icon" id="loginDialogBtn"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <div class="hero-sec">
            <div class="hero-img-container">
                <img class="hero-image" src="{{ asset('assets/hero-img.jpg') }}">
            </div>
            <div class="hero-card">
                <h1>Inspiring Knowledge ,
                    Education Minds</h1>
                <p>Education is a systematic process through which a child or an adult acquires knowledge, experience, skill and sound attitude. It makes an individual civilized, refined, cultured and educated. For a civilized and socialized society, education is the only means. Its goal is to make an individual perfect.</p>
                <button>Learm more >>>></button>
            </div>
        </div>
    </div>

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

    <!-- Login Dialog Box  start-->
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

    <!-- login Dialog Box close -->

    <!-- header start -->
    <script>
        function toggleMenu() {
            var menu = document.querySelector('.menu');
            menu.classList.toggle('show');
        }

        function myFunction(x) {
            x.classList.toggle("change");
        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var menuButton = document.getElementById('menuButton');

            menuButton.addEventListener('click', function() {
                toggleMenu();
            });
        });

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

    <!-- header close -->
</body>

</html>