<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now -  Sports Car Sales</title>
    <link rel="stylesheet" href="buy.css">
    
</head>
<body>
    

    <section class="buy-now">
        <h1>BUY  NOW  YOUR DREAM  SPORTS CAR </h1>
        <form action="" method="post">
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
                <label for="car-model">Car Model:</label>
                <select id="vechile" name="vechile" required>
                    <option  class="value1"value="Ferrari 296 GTS (2.5 crore)"> Ferrari 296 GTS (2.5 crore)</option>
                    <option class="value2" value="Himalayan 450 (9.5 Lakh)">Porsche 911 (1.5 crore)</option>
                    <option class="value3" value=" Multistrada 1260 (30 Lakh)"> Lamborghini Huracan (5.5 crore)</option>
                    <option class="value4" value="KTM 890 Adventure (1.5 Lakh)"> BMW M4 SPORTS (1.4 crore)</option>
                    <option  class="value5"value="Hero Xpulse 200 4V (39 Lakh)">Audi RS5(2.7 crore)</option>
                    <!-- <option  class="value6"value="Harley-Davidson UK (11 Lakh)">Harley-Davidson UK (11 Lakh)</option> -->
                </select>
            </div>
               
            </div>
            <div class="form-group">
                <label for="payment-method">Payment Method:</label>
                <select id="pay" id=" pay" name="pay" required>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Debit Card">Debit Card</option>
                    <option value="PayPal">EMI Available</option>
                    <option value="PayPal"> Cash on delivery</option>
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

