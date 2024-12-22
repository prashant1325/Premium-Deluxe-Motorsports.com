<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buy Now -  Sedan  Car Sales</title>
    <link rel="stylesheet" href="buy.css">
  
</head>
<body>
    

    <section class="buy-now">
        <h1>BUY  NOW  YOUR DREAM  SEDAN CAR </h1>
        <form action="buysedan.php" method="post">
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
                    <option  class="value1"value="Rolls-Royce Phantom (5.5 cr)">Rolls-Royce Phantom (5.5 cr)</option>
                    <option class="value2" value="Bentley Flying Spur (6.5 cr)">Bentley Flying Spur (6.5 cr)</option>
                    <option class="value3" value="Mercedes-Benz AMG S 63 E (3.5 cr)">Mercedes-Benz AMG S 63 E (3.5 cr)</option>
                    <option  class="value4"value="Lexus ES (1.4 cr)">Lexus ES (1.4 cr)</option>
                    <option  class="value5"value="Volvo S90 (2.0 cr)">Volvo S90 (2.0 cr)</option>
                    <option  class="value6"value="BMW 7 Series (1.5 cr)">BMW 7 Series (1.5 cr)</option>
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
            <input type="submit" class="btn" value="BUY NOW">
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

