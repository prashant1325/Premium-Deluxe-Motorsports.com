<?php
// include 'connect.php';
include('header1.php');
include('connection.php');
$sql = "SELECT * FROM post_suv";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT OUR SUV CAR  </title>
    <link rel="stylesheet" href="style2.css">
  
</head>
<body>
 
    <section class="featured-cars" id="cars">
        <h2>SUV(Sports Utility Vehicle) CAR AVAILABLE HERE </h2>
        <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
    
      echo '<div class="car-item">';
        echo '<img src="admin/' . $row["image"] . '" class="car22" alt="Car Image" width="400px">';
        echo '<div class="body">';
        echo '<h1 class="title">Variant = ' . $row["variant"] . '</h1>';
        echo '<h4 class="author">Reg Year = ' . $row["reg_year"] . '</h4>';
        echo '<h4 class="author"> Mfg = ' . $row["manf_year"] . '</h4>';
        echo '<h4 class="author"> Registration no =  ' . $row["reg_no"] . '</h4>';
        echo '<h4 class="author"> Ownership = ' . $row["owner"] . '</h4>';
        echo '<h2 class="price"> Asking Price: ' . $row["price"] . '</h2>';
        echo '<a href="buysuv.php"><button class="btn"> BOOk NOW </button></a>';
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
                <!-- <img src="image\suv1.jpeg" alt="Car 1" class="carsu1">
                <h3> VARIANT = Rolls-Royce Cullinan</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2012</p>
                <p> MFG = 2011</p>
                <p> Registration = DL 06</p>
                <p> VIP Number = 6969</p>
                <p> Mileage = 32000 KM</p>
                <p>Engine = 6.6 LTR</p>
                <p> POWER = 563 BHP</p>
                <p> Ownership = Third</p>
                <p> Fuel= DIESEL</p> 
                <p> Insurance = EXPIRED</p>
                <p>TOP SPEED = 380 KMPH</p>  
                <h2> Asking Price:- 4.5crore </h2>
                <a href="buysuv.php"><button class="btnsu1"> BOOk NOW </button></a>
                
                
            </div>
            <div class="car-item">
                <img src="image\suv2.jpeg" alt="Car 2" class="carsu2">
                <h3>  VARIANT = Mercedes-G-Class </h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2022</p>
                <p> MFG = 2022</p>
                <p> Registration = OD 69</p>
                <p> VIP Number = 0004</p>
                <p> Mileage = 44500 KM</p>
                <p>Engine = 3.0 LTR</p>
                <p> POWER = 282 BHP</p>
                <p> Ownership = second</p>
                <p> Fuel= DIESEL</p> 
                <p> Insurance = TILL OCT 2024</p>
                <p>TOP SPEED = 236 KMPH</p> 
                <h2> Asking Price:-2.5 crore</h2>
                <a href="buysuv.php"><button class="btnsuv2"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\suv3.jpeg" alt="Car 3" class="carsu3">
                <h3>  VARIANT = Lamborghini Urus </h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2020</p>
                <p> MFG = 2019</p>
                <p> Registration = DL 01</p>
                <p> VIP Number = 1(Single Digit NO.)</p>
                <p> Mileage = 6000 KM</p>
                <p>Engine = 4LTR</p>
                <p> POWER = 650 BHP</p>
                <p> Ownership = Second</p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL NOV 26</p>
                <p>TOP SPEED = 350 KMPH</p> 
                <h2> Asking Price:- 4.7crore</h2>
                <a href="buysuv.php"><button class="btnsuv3"> BOOk NOW </button></a>
               
            </div>
            
            <div class="car-item">
                <img src="image\suv4.jpeg" alt="Car 4" class="carsu4" >
                <h3>  VARIANT = BMW X7 40i M Sp</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2024</p>
                <p> MFG = 2023</p>
                <p> Registration = CH 01</p>
                <p> VIP Number = 022</p>
                <p> Mileage = 27000 KM</p>
                <p>Engine = 3.0 LTR</p>
                <p> POWER = 375 BHP</p>
                <p> Ownership = First </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = Till 03/08/25</p>
                <p>TOP SPEED = 249 KMPH</p> 
                <h2> Asking Price -  1.crore 3 Lac </h2>
                <a href="buysuv.php"><button class="btnsuv4"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\suv5.jpeg" alt="Car 5" class="carsu5">
                <h3>  VARIANT = Bentley Bentayga</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2024</p>
                <p> MFG = 2024</p>
                <p> Registration =  Indian </p>
                <p> VIP Number = 22BH</p>
                <p> Mileage = 46000KM</p>
                <p>Engine =  2 LTR N-Line</p>
                <p> POWER = 390 BHP</p>
                <p> Ownership = zero(Brand new Car) </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  APR 27</p>
                <p>TOP SPEED = 294 KMPH</p> 
                <h2> Asking Price - 3.7 crore</h2>
                <a href="buysuv.php"><button class="btnsuv5"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\suv 6.jpeg" alt="Car 6" class="carsu6">
                <h3>  VARIANT =  Audi Q7
                </h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR =  FEB 2022</p>
                <p> MFG = 2021</p>
                <p> Registration =  KL 11 </p>
                <p> VIP Number = 1000</p>
                <p> Mileage = 39000 KM</p>
                <p>Engine = 3.9 LTR Inline 4-Cylinder   </p>
                <p> POWER = 281 BHP</p>
                <p> Ownership = Second </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  NOV 26</p>
                <p>TOP SPEED = 240 KMPH</p> 
                <h2> Asking Price - 1.5 crore </h2>
                <a href="buysuv.php"><button class="btnsuv6"> BOOk NOW </button></a>
             
            </div>
        </div> -->
        
    <!-- </section> -->
    <!-- <footer id="contact">
        
        <a  href="index.php"> <button class="btn"> Back to Home</button></a> 
    
    </footer>
</body>
</html> -->