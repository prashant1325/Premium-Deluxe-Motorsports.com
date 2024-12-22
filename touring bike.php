<?php
// include 'connect.php';
include('header1.php');
include('connection.php');
$sql = "SELECT * FROM post_tbike";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT OUR TOURING BIKE  </title>
    <link rel="stylesheet" href="style2.css">
 
</head>
<body>
 
    <section class="featured-cars" id="cars">
        <h2>TOURING MOTORSPORT AVAILABLE HERE </h2>
        <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="car-item">';
        echo '<img src="admin/' . $row["image"] . '" class="car22" alt="Car Image" width="400px">';
        echo '<div class="body">';
        echo '<h1 class="title"> Variant : ' . $row["variant"] . '</h1>';
        echo '<h4 class="author">' . $row["reg_year"] . '</h4>';
        echo '<h4 class="author">' . $row["manf_year"] . '</h4>';
        echo '<h4 class="author"> Registration no : ' . $row["reg_no"] . '</h4>';
        echo '<h5 class="author"> Ownership' . $row["owner"] . '</h5>';
        echo '<h4 class="price">Asking Price: ' . $row["price"] . '</h4>';
        echo ' <a href="tbikebuy.php"><button class="btn"> BOOk NOW </button></a>';
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

                <img src="image\bmw1250.jpg" alt="Car 1" class="car1">
                <h3> VARIANT = BMW R 1250 GS</h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR = 2023</p>
                <p> MFG = 2022</p>
                <p> Registration = HR 26</p>
                <p> VIP Number = 0011</p>
                <p> Mileage = 21 KM/L</p>
                <p>Engine = 12594 cc</p>
                <p> POWER = 134.1 BHP</p>
                <p> Ownership = Second </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL DEC 2026</p>
                <p>TOP SPEED = 200 KMPH</p>  
                <h2> Asking Price :- 29 LAKH </h2>
                <a href="tbikebuy.php"><button class="btn1"> BOOk NOW </button></a>
                
                
            </div>
            <div class="car-item">
                <img src="image\ad.jpg" alt="Car 2" class="car2">
                <h3>  VARIANT = Himalayan 450</h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR = 2019</p>
                <p> MFG = 2018</p>
                <p> Registration = HP 20</p>
                <p> VIP Number = 2020</p>
                <p> Mileage = 30 KMPL </p>
                <p>Engine = 452cc</p>
                <p> POWER = 39.37 bhp</p>
                <p> Ownership = Second</p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL JAN 2026</p>
                <p>TOP SPEED = 135 KMPH</p> 
                <h2> Asking Price :- 9.5 LAKH </h2>
                <a href="tbikebuy.php"><button class="btn2"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\dc.jpg" alt="Car 3" class="car3"> 
                <h3>  VARIANT =  Multistrada 1260 </h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR = 2023</p>
                <p> MFG = 2022</p>
                <p> Registration = PB 01</p>
                <p> VIP Number = PCL 010</p>
                <p> Mileage = 19.23 KMPL </p>
                <p>Engine = 1262 cc</p>
                <p> POWER = 129.50 BHP</p>
                <p> Ownership = First</p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  NOV 28</p>
                <p>TOP SPEED = 239 KMPH</p> 
                <h2> Asking Price :- 30 LAKH </h2>
                <a href="tbikebuy.php"><button class="btn3"> BOOk NOW </button></a>
               
            </div>
            
            <div class="car-item">
                <img src="image\xplux.webp " alt="Car 4" class="car4" >
                <h3>  VARIANT = Hero Xpulse 200 4V</h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR = 2020</p>
                <p> MFG = 2019</p>
                <p> Registration = JK 25</p>
                <p> VIP Number = 2525</p>
                <p> Mileage = 32.9 KM/L</p>
                <p>Engine = 199.6 cc</p>
                <p> POWER = 18.9 BHP</p>
                <p> Ownership = third</p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL DEC 28</p>
                <p>TOP SPEED = 155 KMPH</p> 
                <h2> Asking Price -  1.5 LAKH </h2>
                <a href="tbikebuy.php"><button class="btn4"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\hd.jpg" alt="Car 5" class="car5">
                <h3>  VARIANT =  Harley-Davidson UK</h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR = 2018</p>
                <p> MFG = 2017</p>
                <p> Registration = UP 72</p>
                <p> VIP Number = 0072</p>
                <p> Mileage = 35 KMPL</p>
                <p>Engine =  1866 cc</p>
                <p> POWER = 83 BHP</p>
                <p> Ownership = third </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  APR 29</p>
                <p>TOP SPEED = 100 KMPH</p> 
                <h2> Asking Price - 39 LAKHS </h2>
                <a href="tbikebuy.php"><button class="btn5"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\ktm.jpg" alt="Car 6" class="car6">
                <h3>  VARIANT =  ktm 890 adventure </h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR =  FEB 2024</p>
                <p> MFG = 2023</p>
                <p> Registration =  MH 21 </p>
                <p> VIP Number = 2001</p>
                <p> Mileage = 22.2 KMPL </p>
                <p>Engine = 889 cc </p>
                <p> POWER = 103.25 BHP</p>
                <p> Ownership = second </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  NOV 26</p>
                <p>TOP SPEED = 210 KMPH</p> 
                <h2> Asking Price - 11 LAKH </h2>
                <a href="tbikebuy.php"><button class="btn6"> BOOk NOW </button></a>
             
            </div>
        </div>
        
    </section> -->
   