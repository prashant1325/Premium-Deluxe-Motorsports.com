<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Demo</title>
    
    
        <style>
   

            
body {
   
    font-family: "Roboto", sans-serif;
    margin: 0;
    padding: 20px;
    background-color: #f4f4f9;
    display: flex;
    justify-content: center;
    align-items: center;
    background: black;
    flex-direction: column;
}


.grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    margin-top: 20px;
    
}

.container {
    width: 100%;
    max-width: 320px;
    overflow: hidden;
    border: 4px solid white;
    border-radius: 10px;
    background-color: white;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    position: relative;
    display: flex;
    flex-direction: column;
    transition: transform 0.3s ease;
}

.container:hover {
    transform: scale(1.05) translateY(-10px);
    animation: rainbow-glow 1.5s infinite;
    box-shadow: 0 0 20px red, 0 0 30px red, 0 0 40px red; 
    border-color: red; Initial border color when hovered
}
.carousel {
    display: flex;
    width: 100%;
    transition: transform 0.5s ease-in-out;
}

.carousel img {
    width: 100%;
    flex-shrink: 0;
    height: 300px;
    object-fit: cover;
}

.arrow {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 16px;
    color: white;
    background-color: black;
    border: none;
    cursor: pointer;
    padding: 5px;
    border-radius: 50%;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

.arrow:hover {
    color: white;
}

.arrow.left {
    left: 5px;
}

.arrow.right {
    right: 5px;
}

.container-text {
    padding: 10px;
    text-align: center;
    background-color: #f1f1f1;
    font-size: 16px;
    color: #333;
    border-top: 1px solid #ccc;
}

.book-now {
    margin-top: 10px;
    padding: 10px 20px;
    background-color: black;
    color: white;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-size: 16px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s ease;
}

.book-now:hover {
    background-color: black;
    color: blue;
    border: 3px solid red;
    box-shadow: 
        0 0 20px #ff00ff,  
        0 0 30px #ff00ff, 
        0 0 40px #ff00ff, 
        0 0 20px #00ff00,  
        0 0 30px #00ff00,  
        0 0 40px #00ff00;  
}
@keyframes rainbow-glow {
    0% { border-color: red; }
    14% { border-color: orange; }
    28% { border-color: yellow; }
    42% { border-color: green; }
    57% { border-color: blue; }
    71% { border-color: indigo; }
    85% { border-color: violet; }
    100% { border-color: red; }
}
footer {
    color: white;
    text-align: center;
    margin-top: 40px;
    font-size: 14px;
}


.text {
    color: white;
}
header {
    
    background-color: black;
    padding: 20px 10;
    text-align: center;
    width: 100vw; 
    margin: 0; 
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}
        

        nav {
            display: flex;
            justify-content: space-between;
        }
  

        nav ul {
            list-style: none;
            font size :40px;
            display: flex;
            gap: 25px;
            position: relative;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            text-decoration: none;
            margin-bottom:29px;
            padding: 10px 15px;
            display: block;
            padding: 5px 15px; 
            font-size: 18px; 
            color: white;
            font-size: 22px;
        }

        nav ul li ul {
    display: none;
    position: absolute;
    background-color: black;
    border-radius: 6px;
    z-index: 10;
    min-width: 150px;
    padding:  0; 
   
    margin: 0;
}
nav ul li ul li {
    margin: 0;
}
nav ul li:hover > ul {
    display: block;
    padding:  0;
    /* margin-left: 10px; */
    margin:0; 
}
nav ul li ul li {
    margin: 0; 
}
nav ul li ul li a {
    text-decoration: none;
    padding: 5px 10px; 
    color: white;
    font-size: 18px; 
    display: block; 
}
nav ul li ul li:nth-child(1) {
    margin-bottom: 0; 
}

nav ul li ul li:nth-child(2) {
    margin-top: 0;
}

nav ul li ul li a:hover {
    background-color: #444; 
    padding: 5px 10px; 
}       
        .sign {
            margin-left: auto;
            color: white;
            display: flex;
            align-items: center;
            font-size: 22px;
            margin-bottom:29px;
        }

        .sign svg {
            margin-right: 5px;
            font-size: 22px;
        }

        .sign:hover {
            color: red;
        }
   

.container1 {
    display: flex;
    justify-content: space-between;
}

.header-left {
  display: flex;
  align-items: center; 
  padding-left:40px;
}

.img {
    border-radius: 250px;
    border: 5px solid  ;
    margin-top: 25px;
    margin-bottom:15px;
    margin-left:40px;
    margin-top:10px;
    transform: scale(1.05) translateY(-10px);
    animation: rainbow-glow 1.5s infinite;
    box-shadow: 0 0 20px red, 0 0 30px red, 0 0 40px red; 
    border-color: red; Initial border color when hovered
}

.logo-text {
    font-size: 40px; 
    font-weight: bold; 
    color: white;
    margin-left: 10px; 
    margin-top:10px;

}
.img:hover{
    transform: scale(1.05) translateY(-10px);
    animation: rainbow-glow 1.5s infinite;
    box-shadow: 0 0 20px red, 0 0 30px red, 0 0 40px red; 
    border-color: red; Initial border color when hovered
}


      </style>
</head>
<body>
   
<header>
  <nav class="container1">
    <div class="header-left">
      <img class="img" src="image\pd.jpeg" width="90px" height="90px">&nbsp;&nbsp;&nbsp;
      <div class="logo">
      <h1 class="logo-text">Premium Deluxe<br> Motorsport</h1>
        <!-- <span class="logo-text">Premium Deluxe</span> <br>
        <span class="logo-text">Motorsport</span> -->
      </div>
    </div>
 
    <ul>
  
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li>
        <a href="#">Segment &#9662;</a>
        <ul>
            <li><a  href="sports.php">SPORTS CAR</a></li>
            <li><a  href="Suv.php">SUV CAR</a></li>
            <li><a href="sedan.php">SEDAN CAR</a></li>
            <li><a href="electric car.php">ELECTRIC CAR</a></li>
            <li><a  href="citycar.php">CITY CAR</a></li>
        </ul>
    </li>
    <li>
        <a href="#">Motorsport &#9662;</a>
        <ul>
            <li><a  href="sportsbike.php">SPORTS BIKE</a></li>
            <li><a href="touring bike.php">TOURING BIKE</a></li>
        </ul>
    </li>
    <li><a href="Contact.php">Contact</a></li>
    <li>
        <a href="#">Demo &#9662;</a>
        <ul>
            <li><a  href="demo.php">Car</a></li>
            <li><a  href="demo1.php">Motorsports</a></li>
        </ul>
    </li>
    <li>
        <a class="nav-link sign" href="logout.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
            </svg>
        </a>
    </li>
</ul>


</header>
<br>
<br>

   <h1 class="text">SPORTS BIKE</h1>
    <div class="grid-container">
        
        <div class="container">
            <div class="carousel" id="carousel1">
                <img src="image/demo001.jpg" alt="Car 1">
                <img src="image/09.jpg" alt="Car 2">
                <img src="image/s12.jpg" alt="Car 3">
                <img src="image/s13.jpg" alt="Car 4">
            </div>
            <button class="arrow left" onclick="prevSlide(1)">&#8592;</button>
            <button class="arrow right" onclick="nextSlide(1)">&#8594;</button>
            <div class="container-text">
                <h2>BMW S1000RR PRO</h2>
                <a href="bookbike1.php"><button class="book-now"> BOOk NOW FOR TEST RIDE </button></a>
            </div>
        </div>

        
        <div class="container">
            <div class="carousel" id="carousel2">
                <img src="image/z1.jpg" alt="Car 4">
                <img src="image/z2.jpg" alt="Car 5">
                <img src="image/z3.jpg" alt="Car 6">
                <img src="image/z4.jpg" alt="Car 7">
            </div>
            <button class="arrow left" onclick="prevSlide(2)">&#8592;</button>
            <button class="arrow right" onclick="nextSlide(2)">&#8594;</button>
            <div class="container-text">
                <h2>KAWASAKI ZX10R</h2>
                <a href="bookbike1.php"><button class="book-now"> BOOk NOW FOR TEST RIDE </button></a>
                
            </div>
        </div>

       
        <div class="container">
            <div class="carousel" id="carousel3">
                <img src="image/h1.jpg" alt="Car 8">
                <img src="image/h2.jpg" alt="Car 9">
                <img src="image/h3.jpg" alt="Car 10">
                <img src="image/h4.jpg" alt="Car 11">
            </div>
            <button class="arrow left" onclick="prevSlide(3)">&#8592;</button>
            <button class="arrow right" onclick="nextSlide(3)">&#8594;</button>
            <div class="container-text">
                <h2>SUZUKI HAYABUSA GSX</h2>
                <a href="bookbike1.php"><button class="book-now"> BOOk NOW FOR TEST RIDE </button></a>
            </div>
        </div>
    </div>

    <br>
    <br>
    <h1 class="text">TOURING BIKE</h1>
    <div class="grid-container">
        <div class="container">
            <div class="carousel" id="carousel4">
                <img src="image/t1.jpg" alt="Car 1">
                <img src="image/t2.jpg" alt="Car 2">
                <img src="image/t3.jpg" alt="Car 3">
                <img src="image/t4.jpg" alt="Car 4">
            </div>
            <button class="arrow left" onclick="prevSlide(4)">&#8592;</button>
            <button class="arrow right" onclick="nextSlide(4)">&#8594;</button>
            <div class="container-text">
                <h2>BMW R 1250 GS</h2>
                <a href="bookbike2.php"><button class="book-now"> BOOk NOW FOR TEST RIDE </button></a>
            </div>
        </div>

       
        <div class="container">
            <div class="carousel" id="carousel5">
                <img src="image/t11.jpg" alt="Car 4">
                <img src="image/t22.jpg" alt="Car 5">
                <img src="image/t33.jpg" alt="Car 6">
                <img src="image/t44.jpg" alt="Car 7">
            </div>
            <button class="arrow left" onclick="prevSlide(5)">&#8592;</button>
            <button class="arrow right" onclick="nextSlide(5)">&#8594;</button>
            <div class="container-text">
                <h2>XPULSE 200 4V</h2>
                <a href="bookbike2.php"><button class="book-now"> BOOk NOW FOR TEST RIDE </button></a>
            </div>
        </div>

        
        <div class="container">
            <div class="carousel" id="carousel6">
                <img src="image/te1.jpg" alt="Car 8">
                <img src="image/te2.jpg" alt="Car 9">
                <img src="image/te3.jpg" alt="Car 10">
                <img src="image/te4.jpg" alt="Car 11">
            </div>
            <button class="arrow left" onclick="prevSlide(6)">&#8592;</button>
            <button class="arrow right" onclick="nextSlide(6)">&#8594;</button>
            <div class="container-text">
                <h2>ZONGSHEN RS3S</h2>
                <a href="bookbike2.php"><button class="book-now"> BOOk NOW FOR TEST RIDE </button></a>
            </div>
        </div>
    </div>
    <h1 class="text">CITY BIKE </h1>
    <div class="grid-container">
       
        <div class="container">
            <div class="carousel" id="carousel7">
                <img src="image/p1.jpg" alt="Car 1">
                <img src="image/p2.jpg" alt="Car 2">
                <img src="image/p3.jpg" alt="Car 3">
                <img src="image/p4.jpg" alt="Car 4">
            </div>
            <button class="arrow left" onclick="prevSlide(7)">&#8592;</button>
            <button class="arrow right" onclick="nextSlide(7)">&#8594;</button>
            <div class="container-text">
                <h2>YAMAHA R15 V4
</h2>
<a href="booktest2.php"><button class="book-now"> BOOk NOW FOR TEST RIDE </button></a>
            </div>
        </div>

       
        <div class="container">
            <div class="carousel" id="carousel8">
                <img src="image/m11.jpg" alt="Car 4">
                <img src="image/m22.jpg" alt="Car 5">
                <img src="image/m33.jpg" alt="Car 6">
                <img src="image/m44.jpg" alt="Car 7">
            </div>
            <button class="arrow left" onclick="prevSlide(8)">&#8592;</button>
            <button class="arrow right" onclick="nextSlide(8)">&#8594;</button>
            <div class="container-text">
                <h2>YAMAHA MT 15</h2>
                <a href="booktest2.php"><button class="book-now"> BOOk NOW FOR TEST RIDE </button></a>
            </div>
        </div>
    
     <!-- Container 3 -->
     <div class="container">
            <div class="carousel" id="carousel9">
                <img src="image/e11.jpg" alt="Car 8">
                <img src="image/e22.jpg" alt="Car 9">
                <img src="image/e33.jpg" alt="Car 10">
                <img src="image/e44.jpg" alt="Car 11">
            </div>
            <button class="arrow left" onclick="prevSlide(9)">&#8592;</button>
            <button class="arrow right" onclick="nextSlide(9)">&#8594;</button>
            <div class="container-text">
                <h2>KEEWAY K300N</h2>
                <a href="booktest2.php"><button class="book-now"> BOOk NOW FOR TEST RIDE </button></a>
            </div>
        </div>
    </div>
   
    <br>
    <br>
    <footer class ="text">
        <p>&copy; 2024 AutoDeals. All rights reserved.</p>
        <p>Contact us: automotive@carsale.com</p>
    </footer>

    <script>
        function prevSlide(carouselId) {
            const carousel = document.getElementById(`carousel${carouselId}`);
            const totalSlides = carousel.children.length;
            let currentIndex = Number(carousel.dataset.index || 0);
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            carousel.dataset.index = currentIndex;
        }

        function nextSlide(carouselId) {
            const carousel = document.getElementById(`carousel${carouselId}`);
            const totalSlides = carousel.children.length;
            let currentIndex = Number(carousel.dataset.index || 0);
            currentIndex = (currentIndex + 1) % totalSlides;
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
            carousel.dataset.index = currentIndex;
        }
    </script>
</body>
</html>
