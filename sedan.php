<?php
// include 'connect.php';
include('header1.php');
include('connection.php');
$sql = "SELECT * FROM post_sedan";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT OUR SEDAN CAR  </title>
    <link rel="stylesheet" href="style2.css">
   
   

</head>
<body>
    <section class="featured-cars" id="cars">
        <h2>SEDAN CAR AVAILABLE HERE </h2>
        <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="car-item">';
        echo '<img src="admin/' . $row["image"] . '" class="car22" alt="Car Image" width="400px">';
        echo '<div class="body">';
        echo '<h1 class="title"> Variant = ' . $row["variant"] . '</h1>';
        echo '<h4 class="author"> Reg Year = ' . $row["reg_year"] . '</h4>';
        echo '<h4 class="author"> Mfg =  ' . $row["manf_year"] . '</h4>';
        echo '<h4 class="author">  Registration no = ' . $row["reg_no"] . '</h4>';
        echo '<h4 class="author"> Ownership =  ' . $row["owner"] . '</h4>';
        echo '<h2 class="price"> Asking Price: ' . $row["price"] . '</h2>';
        echo ' <a href="buysedan.php"><button class="btn"> BOOk NOW </button></a>';
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
        <!-- <div class="car-grid">
            <div class="car-item ">

                <img src="image\sedan1.jpeg" alt="Car 1" class="carse1">
                <h3> VARIANT = Rolls-Royce Phantom</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2015</p>
                <p> MFG = 2016</p>
                <p> Registration = HR 26</p>
                <p> VIP Number = 0001</p>
                <p> Mileage = 23000 KM</p>
                <p>Engine = 6.0 LTR</p>
                <p> POWER = 380 BHP</p>
                <p> Ownership = Second </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL DEC 2025(Upgrade)</p>
                <p>TOP SPEED = 380 KMPH</p>  
                <h2> Asking Price :- 5.5 crore </h2>
                <a href="buysedan.php"><button class="btnse1"> BOOk NOW </button></a>
                
                
            </div>
            <div class="car-item">
                <img src="image\sedan3.jpeg" alt="Car 2" class="carse2">
                <h3>  VARIANT = Bentley Flying Spur</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2023</p>
                <p> MFG = 2022</p>
                <p> Registration = PB 01</p>
                <p> VIP Number =  PCL </p>
                <p> Mileage = 55000 KM</p>
                <p>Engine = 3.8 LTR</p>
                <p> POWER = 386 BHP</p>
                <p> Ownership = Second</p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  2027</p>
                <p>TOP SPEED = 356 KMPH</p> 
                <h2> Asking Price :- 6.5 crore </h2>
                <a href="buysedan.php"><button class="btnse2"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\sedan2.jpeg" alt="Car 3" class="carse3">
                <h3>  VARIANT = Mercedes-Benz AMG S 63 E</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2020</p>
                <p> MFG = 2019</p>
                <p> Registration = AS 01</p>
                <p> VIP Number = 0077</p>
                <p> Mileage = 38000 KM</p>
                <p>Engine = 4LTR TURBO</p>
                <p> POWER = 292 BHP</p>
                <p> Ownership = THIRD</p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  NOV 24</p>
                <p>TOP SPEED = 295 KMPH</p> 
                <h2> Asking Price :- 3.5 crore </h2>
                <a href="buysedan.php"><button class="btnse3"> BOOk NOW </button></a>
               
            </div>
            
            <div class="car-item">
                <img src="image\sedan4.jpeg" alt="Car 4" class="carse4" >
                <h3>  VARIANT = Lexus ES </h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2021</p>
                <p> MFG = 2020</p>
                <p> Registration = KL 99</p>
                <p> VIP Number = 0101</p>
                <p> Mileage = 2000 KM</p>
                <p>Engine = 4.0 L INLINE 8 CYLINDER</p>
                <p> POWER = 391 BHP</p>
                <p> Ownership = Second </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = UPGRADE TILL NOV 26</p>
                <p>TOP SPEED = 246 KMPH</p> 
                <h2> Asking Price -  1.4crore </h2>
                <a href="buysedan.php"><button class="btnse4"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\sedan5.jpeg" alt="Car 5" class="carse5">
                <h3>  VARIANT = Volvo S90</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2024</p>
                <p> MFG = 2024</p>
                <p> Registration = MP 05</p>
                <p> VIP Number = 0002</p>
                <p> Mileage = 300KM</p>
                <p>Engine =  2.5  LTR</p>
                <p> POWER = 350 BHP</p>
                <p> Ownership = zero(Brand new Car) </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  APR 26</p>
                <p>TOP SPEED = 254 KMPH</p> 
                <h2> Asking Price - 2.0 crore </h2>
                <a href="buysedan.php"><button class="btnse5"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\sedan6.jpeg" alt="Car 6" class="carse6">
                <h3>  VARIANT =  BMW 7 Series</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR =  FEB 2024</p>
                <p> MFG = 2024</p>
                <p> Registration =  TL 01 </p>
                <p> VIP Number = 2004</p>
                <p> Mileage = 23900 KM</p>
                <p>Engine = 1.9 LTR 4-TURBO </p>
                <p> POWER = 481 BHP</p>
                <p> Ownership = Second </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  NOV 28</p>
                <p>TOP SPEED = 280 KMPH</p> 
                <h2> Asking Price - 1.5 crore </h2>
                <a href="buysedan.php"><button class="btnse6"> BOOk NOW </button></a>
             
            </div>
        </div>
        
    </section> -->
    