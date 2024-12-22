<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now -  SPORTS BIKE  Sales</title>
    <link rel="stylesheet" href="buy.css">
  
</head>
<body>
    

    <section class="buy-now">
        <h1>BUY  NOW  YOUR DREAM  SPORTS BIKE </h1>
        <form action="sbike.php" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input  class="text1"type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input  class="text2"type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input class="text1" type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="car-model">Motorsport Model:</label>
                <select id="vechile" name="vechile" required>
                    <option  class="value1"value="BMW S1000 RR (29 Lakh)">BMW S1000 RR (29 Lakh)</option>
                    <option class="value2" value="MV Agusta (9 Lakh)"> MV Agusta (9 Lakh)</option>
                    <option class="value3" value="Kawasaki Z1000 (10 Lakh)">Kawasaki Z1000 (10 Lakh)</option>
                    <option  class="value4"value="Ducati Panigale V4 (75 Lakh)">Ducati Panigale V4 (75 Lakh)</option>
                    <option  class="value5"value="Yamaha YZF R1 (35 Lakh)">Yamaha YZF R1 (35 Lakh)</option>
                    <option  class="value6"value="Suzuki Hayabusa (21 Lakh)">Suzuki Hayabusa (21 Lakh)</option>
                </select>
            </div>
            <div class="form-group">
                <label for="payment-method">Payment Method:</label>
                <select id="pay" name="pay" required>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="EMI Available">EMI Available</option>
                    <option value="Cash on delivery"> Cash on delivery</option>
                    <option value="PayPal">Pay Pal </option>
                </select>
            </div>
            <button type="submit" class="btn">BUY NOW </button>
        </form>
    </section>

    <footer>
        <p>&copy; 2024 CarSales. All rights reserved.</p>
        <p>Our Location:15 Street Suburb ldh</p>
        <p>Contact us: +91 09292020</p>
        <p>Email us: automotive@carsale.com</p>
        
    </footer>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deal_car";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $vechile = $_POST['vechile'];
    $pay = $_POST['pay'];
    
    
    
    $sql = "INSERT INTO `order` (name, email, phone, vechile, pay) VALUES ('$name', '$email', '$phone', '$vechile', '$pay')";
    

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
    
      echo '<script>
       
      window.location.href = "cong.php";
    </script>';
}

?> 
   