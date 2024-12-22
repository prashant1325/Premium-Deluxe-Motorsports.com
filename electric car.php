<?php
// include 'connect.php';
include('header1.php');
include('connection.php');
$sql = "SELECT * FROM post_elec";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT OUR ELECTRIC  CAR  </title>
    <link rel="stylesheet" href="style2.css">
    
   
</head>
<body>
 
    <section class="featured-cars" id="cars">
        <h2>ELECTRIC CAR AVAILABLE HERE </h2>
        <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="car-item">';
        echo '<img src="admin/' . $row["image"] . '" class="car22" alt="Car Image" width="400px">';
        echo '<div class="body">';
        echo '<h1 class="title">  ' . $row["variant"] . '</h1>';
        echo '<h4 class="author"> ' . $row["reg_year"] . '</h4>';
        echo '<h4 class="author"> ' . $row["manf_year"] . '</h4>';
        echo '<h4 class="author"> ' . $row["reg_no"] . '</h4>';
        echo '<h4 class="author"> Ownership = ' . $row["owner"] . '</h4>';
        echo '<h2 class="price"> Asking Price: ' . $row["price"] . '</h2>';
        echo '<a href="buyelec.php"><button class="btn"> BOOk NOW </button></a>';
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

                <img src="image\ele1.jpeg" alt="Car 1" class="car1">
                <h3> VARIANT = Audi E-Tron</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2022</p>
                <p> MFG = 2021</p>
                <p> Registration = HR 26</p>
                <p> VIP Number = 01</p>
                <p> Mileage = 23000 KM</p>
                <p>Engine = EV </p>
                <p> POWER = 191 BHP</p>
                <p> Ownership = Second </p>
                <p> Fuel= EV</p> 
                <p> Insurance = TILL DEC 2026</p>
                <p>TOP SPEED = 280 KMPH</p>  
                <h2> Asking Price :- 1.5 crore </h2>
                <a href="buyelec.php"><button class="btn1"> BOOk NOW </button></a>
                
                
            </div>
            <div class="car-item">
                <img src="image\ele2.jpeg" alt="Car 2" class="car2">
                <h3>  VARIANT = Jaguar I-PACE </h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2023</p>
                <p> MFG = 2022</p>
                <p> Registration = HP 40</p>
                <p> VIP Number = 0007</p>
                <p> Mileage = 45000 KM</p>
                <p>Engine = 1.5 LTR</p>
                <p> POWER = 181 BHP</p>
                <p> Ownership = third</p>
                <p> Fuel= EV</p> 
                <p> Insurance = TILL JAN 2025</p>
                <p>TOP SPEED = 256 KMPH</p> 
                <h2> Asking Price :- 1.1 crore </h2>
                <a href="buyelec.php"><button class="btn2"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\elec3.jpeg" alt="Car 3" class="car3">
                <h3>  VARIANT =  Mercedes-Benz EQC </h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2023</p>
                <p> MFG = 2022</p>
                <p> Registration = DL 01</p>
                <p> VIP Number = 0777</p>
                <p> Mileage = 32000 KM</p>
                <p>Engine = 5LTR</p>
                <p> POWER = 202 BHP</p>
                <p> Ownership = First</p>
                <p> Fuel= EV</p> 
                <p> Insurance = TILL  NOV 24</p>
                <p>TOP SPEED = 295 KMPH</p> 
                <h2> Asking Price :- 2.5 crore </h2>
                <a href="buyelec.php"><button class="btn3"> BOOk NOW </button></a>
               
            </div>
            
            <div class="car-item">
                <img src="image\elec4.jpeg" alt="Car 4" class="car4" >
                <h3>  VARIANT = BMW IX  </h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2021</p>
                <p> MFG = 2020</p>
                <p> Registration = JK 99</p>
                <p> VIP Number = 0101</p>
                <p> Mileage = 2000 KM</p>
                <p>Engine = 2.0 L INLINE 4 CYLINDER</p>
                <p> POWER = 191 BHP</p>
                <p> Ownership = first </p>
                <p> Fuel= EV</p> 
                <p> Insurance = TILL  DEC 25</p>
                <p>TOP SPEED = 246 KMPH</p> 
                <h2> Asking Price -  1.4crore </h2>
                <a href="buyelec.php"><button class="btn4"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\elec5.jpeg" alt="Car 5" class="car5">
                <h3>  VARIANT = Porsche Taycan</h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR = 2023</p>
                <p> MFG = 2022</p>
                <p> Registration = UP 05</p>
                <p> VIP Number = 0002</p>
                <p> Mileage = 230KM</p>
                <p>Engine =  2 LTR</p>
                <p> POWER = 190 BHP</p>
                <p> Ownership = zero(Brand new Car) </p>
                <p> Fuel= EV</p> 
                <p> Insurance = TILL  APR 26</p>
                <p>TOP SPEED = 254 KMPH</p> 
                <h2> Asking Price - 1.7 crore </h2>
                <a href="buyelec.php"><button class="btn5"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\ele6.jpeg" alt="Car 6" class="car6">
                <h3>  VARIANT = Tesla Model 3 </h3>
                <h2> ABOUT THIS CAR </h2>
                <p> Reg YEAR =  FEB 2024</p>
                <p> MFG = 2024</p>
                <p> Registration =  MH 01 </p>
                <p> VIP Number = 0009</p>
                <p> Mileage = 23000 KM</p>
                <p>Engine = 1.9 LTR </p>
                <p> POWER = 181 BHP</p>
                <p> Ownership = Second </p>
                <p> Fuel= EV</p> 
                <p> Insurance = TILL 26</p>
                <p>TOP SPEED = 240 KMPH</p> 
                <h2> Asking Price - 1.5 crore </h2>
                <a href="buyelec.php"><button class="btn6"> BOOk NOW </button></a>
             
            </div>
        </div>
        
    </section> -->
   