<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="index.css">

</head>
<body>
<header>

<nav class="container">
    <img class="img" src="image\lg.jpeg" width="90px" height="90px">
    <!-- <div class="logo">
    Premium Deluxe <br>Motorsport
    </div> -->
    <!-- <div class="logo">
    <span class="logo-text">Premium Deluxe</span> <br>
    <span class="logo-text">Motorsport</span>
</div> -->
<div class="logo">
    <span class="logo-text">Premium Deluxe</span> <br>
    <span class="logo-text">Motorsport</span>
</div>

    
    <div class="nav-list">
        <ul>
            <li><a href="index.php" >Home</a></li>
            <!-- <li><a href="about.php">About</a></li> -->
          
            
           
            
            
            
                        <?php if (isset($_SESSION["username"])): ?>
                            <li><a href="about.php">About</a></li>
                            <li class="nav-item dropdown">
                           
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Segments
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="sports.php">SPORTS CAR </a></li>
                    <li><a class="dropdown-item" href="Suv.php"> SUV CAR</a></li>
                    <li><a class="dropdown-item" href="sedan.php">SEDAN CAR</a></li>
                    <li><a class="dropdown-item" href="electric car.php">ELECTRIC CAR</a></li>
                    <li><a class="dropdown-item" href="citycar.php">CITY  CAR</a></li>
                    
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Motorsports
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="sportsbike.php">SPORTS BIKE</a></li>
                    <li><a class="dropdown-item" href="touring bike.php">TOURING BIKE </a></li>

                </ul>
                           
                <li><a href="contact.php">Contact</a></li>
                <!-- <li><a href="demo.php">Demo </a></li> -->
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Demo
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="demo.php"> CAR </a></li>
                    <li><a class="dropdown-item" href="demo1.php"> Motorsports </a></li>
                        </ul>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                
                <li class="nav-item">
                    <a class="nav-link sign"  href="logout.php" class ="sign"><svg  xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" fill="currentColor" class="bi bi-person-circle"
                            viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg> <u>Logout</a></u>
                </li>
            <?php else: ?>
                <li><a href="checklogin.php">About</a></li>
                <li class="nav-item">
                    
                    <a class="nav-link" href="checklogin.php">  Segments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="checklogin.php">  Motorsports</a>
                </li>
                
                <li><a href="contact.php">Contact</a></li>
               
                <li class="nav-item">
                
                 <a class="nav-link sign"  href="login.php" class="sign" ><svg  xmlns="http://www.w3.org/2000/svg"
                            width="20" height="20" fill="currentColor" class="bi bi-person-circle"
                            viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                            <path fill-rule="evenodd"
                                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                                </svg>  <u>Login</a></u> 
                      </li>
                      <li class="nav-item">
              
                     </li>
            <?php endif; ?>
           
           
        </ul>
    </div>

</nav>

</header>
</body>
</html>