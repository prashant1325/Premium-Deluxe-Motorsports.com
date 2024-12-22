<?php
// include 'connect.php';
include('header1.php');
include('connection.php');
$sql = "SELECT * FROM post_city";
$result = $conn->query($sql);

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT OUR CITY CAR  </title>
    <link rel="stylesheet" href="style2.css">
   

</head>
<body>
 
    <section class="featured-cars" id="cars">
        <h2>CITY CAR AVAILABLE HERE </h2>
        <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="car-item">';
        echo '<img src="admin/' . $row["image"] . '" class="car22" alt="Car Image" width="400px">';
        echo '<div class="body">';
        echo '<h1 class="title"> Variant =' . $row["variant"] . '</h1>';
        echo '<h4 class="author"> Reg Year =' . $row["reg_year"] . '</h4>';
        echo '<h4 class="author">' . $row["manf_year"] . '</h4>';
        echo '<h4 class="author">' . $row["reg_no"] . '</h4>';
        echo '<h4 class="author">' . $row["owner"] . '</h4>';
        echo '<h2 class="price">Price: $' . $row["price"] . '</h2>';
        echo '<a href="city car buy .php"><button class="btn"> BOOk NOW </button></a>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
    
    }
} else {
    echo "No products available.";
}
?>
        <footer id="contact">
        
        <a  href="index.php"> <button class="btn"> Back to Home</button></a> 
    
    </footer>
</body>
</html>
        <!-- <a  href="index.php"> <img class="logo" src="image\pd.jpeg" ></a>
        <div class="car-grid">
            <div class="car-item ">

                <img src="image\city 1.jpg" alt="Car 1" class="carci1">
                <h3> VARIANT = Maruti Sizuki Swift ZXI</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2023</p>
                <p> MFG = 2022</p>
                <p> Registration = HR 26</p>
                <p> VIP Number = 0011</p>
                <p> Mileage = 25.75 KMPL</p>
                <p>Engine = 1197 cc</p>
                <p> POWER = 80.46 BHP</p>
                <p> Ownership = Second </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL DEC 2026</p>
                <p>TOP SPEED = 150 KMPH</p>  
                <h2> Asking Price :- 9.8 LAKHS </h2>
                <a href="city car buy .php"><button class="btnci1"> BOOk NOW </button></a>
                
                
            </div>
            <div class="car-item">
                <img src="image\city2.jpg" alt="Car 2" class="carci2">
                <h3>  VARIANT = Mahindra Thar</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2023</p>
                <p> MFG = 2022</p>
                <p> Registration = HP 20</p>
                <p> VIP Number = 2020</p>
                <p> Mileage = 15.2 KMPL </p>
                <p>Engine = 2.2 LTR 4X4</p>
                <p> POWER = 2184 cc</p>
                <p> Ownership = Second</p>
                <p> Fuel= DIESEL</p> 
                <p> Insurance = TILL JAN 2026</p>
                <p>TOP SPEED = 168 KMPH</p> 
                <h2> Asking Price :- 17 Lakh </h2>
                <a href="city car buy .php"><button class="btnci2"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\city3.jpg" alt="Car 3" class="carci3">
                <h3>  VARIANT =  Mahindra XUV 700 </h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2023</p>
                <p> MFG = 2022</p>
                <p> Registration = PB 01</p>
                <p> VIP Number = PCL 010</p>
                <p> Mileage = 17 KMPL </p>
                <p>Engine = 2.2 cc</p>
                <p> POWER = 197.13 BHP</p>
                <p> Ownership = First</p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  NOV 28</p>
                <p>TOP SPEED = 200 KMPH</p> 
                <h2> Asking Price :- 27 LAKHS </h2>
                <a href="city car buy .php"><button class="btnci3"> BOOk NOW </button></a>
               
            </div>
            
            <div class="car-item">
                <img src="image\city 4.jpg" alt="Car 4" class="carci4" >
                <h3>  VARIANT = Tata Harrier </h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2024</p>
                <p> MFG = 2023</p>
                <p> Registration = JK 25</p>
                <p> VIP Number = 2525</p>
                <p> Mileage = 15-17 KM/L</p>
                <p>Engine = 2.0 LTR</p>
                <p> POWER = 167,62 BHP</p>
                <p> Ownership = first </p>
                <p> Fuel= DIESEL</p> 
                <p> Insurance = TILL DEC 28</p>
                <p>TOP SPEED = 195 KMPH</p> 
                <h2> Asking Price -  35 LAKHS </h2>
                <a href="city car buy .php"><button class="btnci4"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\city 5.jpg" alt="Car 5" class="carci5">
                <h3>  VARIANT = Hyundai Creta</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2024</p>
                <p> MFG = 2024</p>
                <p> Registration = UP 72</p>
                <p> VIP Number = 0072</p>
                <p> Mileage = 17-21KM</p>
                <p>Engine =  1.5 LTR</p>
                <p> POWER = 85-118 BHP</p>
                <p> Ownership = zero(Brand new Car) </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  APR 29</p>
                <p>TOP SPEED = 195 KMPH</p> 
                <h2> Asking Price - 19.5 LAKHS </h2>
                <a href="city car buy .php"><button class="btnci5"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\city 6.gif" alt="Car 6" class="carci6">
                <h3>  VARIANT =  Fortuner Legender </h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR =  FEB 2024</p>
                <p> MFG = 2023</p>
                <p> Registration =  MH 21 </p>
                <p> VIP Number = 2001</p>
                <p> Mileage = 14.2 KMPL </p>
                <p>Engine = 2.8 LTR 4X4 </p>
                <p> POWER = 163.6 BHP</p>
                <p> Ownership = Second </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  NOV 26</p>
                <p>TOP SPEED = 240 KMPH</p> 
                <h2> Asking Price - 55.5 LAKHS </h2>
                <a href="city car buy .php"><button class="btnci6"> BOOk NOW </button></a>
             
            </div>
        </div>
        
    </section> -->
   