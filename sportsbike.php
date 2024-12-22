<?php
// include 'connect.php';
include('header1.php');
include('connection.php');
$sql = "SELECT * FROM post_bike";
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
        <h2>SPORTS MOTORSPORT AVAILABLE HERE </h2>
        <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="car-item">';
        echo '<img src="admin/' . $row["image"] . '" class="car22" alt="Car Image" width="400px">';
        echo '<div class="body">';
        echo '<h1 class="title"> Variant = ' . $row["variant"] . '</h1>';
        echo '<h4 class="author">' . $row["reg_year"] . '</h4>';
        echo '<h4 class="author">' . $row["manf_year"] . '</h4>';
        echo '<h4 class="author">Registration no :' . $row["reg_no"] . '</h4>';
        echo '<h4 class="author"> Ownership :' . $row["owner"] . '</h4>';
        echo '<h2 class="price"> Asking Price: ' . $row["price"] . '</h2>';
        echo ' <a href="sbike.php"><button class="btn"> BOOk NOW </button></a>';
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
       <!-- <a  href="index.php"> <img class="logo" src="image\pd.jpeg" ></a> 
        <div class="car-grid">
            <div class="car-item ">

                <img src="image\bike 2.2.jpg" alt="Car 1" class="bike1">
                <h3> VARIANT = BMW S1000 RR</h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR = 2023</p>
                <p> MFG = 2022</p>
                <p> Registration = HR 26</p>
                <p> VIP Number = 0011</p>
                <p> Mileage = 15.6 KM/L</p>
                <p>Engine = 999 cc</p>
                <p> POWER = 206.51 BHP</p>
                <p> Ownership = Second </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL DEC 2026</p>
                <p>TOP SPEED = 299 KMPH</p>  
                <h2> Asking Price :- 29 LAKH </h2>
                <a href="sbike.php"><button class="btnb1"> BOOk NOW </button></a>
                
                
            </div>
            <div class="car-item">
                <img src="image\av.jpg" alt="Car 2" class="bike2">
                <h3>  VARIANT = MV Agusta</h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR = 2019</p>
                <p> MFG = 2018</p>
                <p> Registration = HP 20</p>
                <p> VIP Number = 2020</p>
                <p> Mileage = 18.0 KMPL </p>
                <p>Engine = 798.0cc</p>
                <p> POWER = 218.4 cc</p>
                <p> Ownership = Second</p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL JAN 2026</p>
                <p>TOP SPEED = 244 KMPH</p> 
                <h2> Asking Price :- 9.5 LAKH </h2>
                <a href="sbike.php"><button class="btnb2"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\z100.jpg" alt="Car 3" class="bike3"> 
                <h3>  VARIANT =  Kawasaki Z1000 </h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR = 2023</p>
                <p> MFG = 2022</p>
                <p> Registration = PB 01</p>
                <p> VIP Number = PCL 010</p>
                <p> Mileage = 15 KMPL </p>
                <p>Engine = 1043.0 cc</p>
                <p> POWER = 197.0 BHP</p>
                <p> Ownership = First</p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  NOV 28</p>
                <p>TOP SPEED = 240 KMPH</p> 
                <h2> Asking Price :- 10 LAKH </h2>
                <a href="sbike.php"><button class="btnb3"> BOOk NOW </button></a>
               
            </div>
            
            <div class="car-item">
                <img src="image\ducati.jpg " alt="Car 4" class="bike4" >
                <h3>  VARIANT = Ducati Panigale V4 </h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR = 2020</p>
                <p> MFG = 2019</p>
                <p> Registration = JK 25</p>
                <p> VIP Number = 2525</p>
                <p> Mileage = 13.1 KM/L</p>
                <p>Engine = 1103 cc</p>
                <p> POWER = 212.5 BHP</p>
                <p> Ownership = third</p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL DEC 28</p>
                <p>TOP SPEED = 265 KMPH</p> 
                <h2> Asking Price -  75 LAKH </h2>
                <a href="sbike.php"><button class="btnb4"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\r1.jpg" alt="Car 5" class="bike5">
                <h3>  VARIANT =  Yamaha YZF R1</h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR = 2018</p>
                <p> MFG = 2017</p>
                <p> Registration = UP 72</p>
                <p> VIP Number = 0072</p>
                <p> Mileage = 16.5 KMPL</p>
                <p>Engine =  998 cc</p>
                <p> POWER = 17.8 BHP</p>
                <p> Ownership = forth </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  APR 29</p>
                <p>TOP SPEED = 295 KMPH</p> 
                <h2> Asking Price - 35 LAKHS </h2>
                <a href="sbike.php"><button class="btnb5"> BOOk NOW </button></a>
               
            </div>
            <div class="car-item">
                <img src="image\suzuki.jpg" alt="Car 6" class="bike6">
                <h3>  VARIANT =  Suzuki Hayabusa </h3>
                <h2> ABOUT THIS BIKE </h2>
                <p> Reg YEAR =  FEB 2024</p>
                <p> MFG = 2023</p>
                <p> Registration =  MH 21 </p>
                <p> VIP Number = 2001</p>
                <p> Mileage = 17.8 KMPL </p>
                <p>Engine = 1340 cc </p>
                <p> POWER = 190 BHP</p>
                <p> Ownership = second </p>
                <p> Fuel= PETROL</p> 
                <p> Insurance = TILL  NOV 26</p>
                <p>TOP SPEED = 270 KMPH</p> 
                <h2> Asking Price - 21 LAKH </h2>
                <a href="sbike.php"><button class="btnb6"> BOOk NOW </button></a>
             
            </div>
        </div>
        
    </section> -->
  
</body>
</html>