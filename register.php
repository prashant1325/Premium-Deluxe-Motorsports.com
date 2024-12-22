<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Car & Bike Dealer</title>
    
    <style>
        body {
            background-color: black;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .img {
            width: 700px;
            height: 500px;
            margin: 100px;
            border: 3px solid white;
            border-radius: 20px;
            transition: border-color 0.3s ease;
            background-color: black;
    border-color: red;
    box-shadow: 0 0 10px red, 0 0 20px red, 0 0 30px red;
    animation: rainbow-glow 1.5s infinite;
        }

        .register-container {
            background-color: grey;
            padding: 40px;
            border-radius: 20px;
            width: 300px;
            border: 3px solid white; 
            transition: border 0.5s ease-in-out;
            
        }

        .register-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 35px;
        }

        .register-container form {
            display: flex;
            flex-direction: column;
        }

        .register-container form input {
            margin-bottom: 10px;
            padding: 10px;
            border: 3px solid black;
            border-radius: 5px;
        }

        .register-container form input:hover {
            background-color: aqua;
        }

        .register-container form button {
            padding: 10px;
            background-color: #333;
            color: #fff;
            border: 2px solid red;
            border-radius: 5px;
            cursor: pointer;
            position: relative;
            overflow: hidden;
            transition: background-color 0.3s ease;
        }

        .register-container form button:hover {
            background-color: red;
            border-color: black;
            box-shadow: 0 0 10px red, 0 0 20px red, 0 0 30px red;
            animation: rainbow-glow 1.5s infinite;
        }

        .register-container .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-container .login-link a {
            color: #333;
            text-decoration: none;
            color: blue;
        }

        .register-container .login-link a:hover {
            text-decoration: underline;
        }

        .img:hover {
            border-color: red;
        }

        .register-container:hover {
            background-color: black;
    border-color: red;
    box-shadow: 0 0 10px red, 0 0 20px red, 0 0 30px red;
    animation: rainbow-glow 1.5s infinite;
        }
        .h1{
            color:white;
        }

        @keyframes rainbow-glow {
            0% {
                box-shadow: 0 0 5px red, 0 0 10px red;
            }
            14% {
                box-shadow: 0 0 5px orange, 0 0 10px orange;
            }
            28% {
                box-shadow: 0 0 5px yellow, 0 0 10px yellow;
            }
            42% {
                box-shadow: 0 0 5px green, 0 0 10px green;
            }
            57% {
                box-shadow: 0 0 5px blue, 0 0 10px blue;
            }
            71% {
                box-shadow: 0 0 5px indigo, 0 0 10px indigo;
            }
            85% {
                box-shadow: 0 0 5px violet, 0 0 10px violet;
            }
            100% {
                box-shadow: 0 0 5px red, 0 0 10px red;
            }
        }
    </style>
   
</head>
<body>
    <img class="img" src="image/logo 1.jpg" >
    <div class="register-container">
        <h2 class ="h1">Register</h2>
        <form method="POST">
            <input type="text" id="use" name="username" placeholder="Username" required>
            <input type="email" id="mail" name="email" placeholder="Email" required>
            <input type="password" id="pass" name="password" placeholder="Password" required>
            <input type="password" id="cpass" name="confirm_password" placeholder="Confirm Password" required>
            <button type="submit">Register</button>
        </form>
        <div class="login-link">
            <p class ="h1" >Already have an account? <a href="login.php">Login</a></p>
        </div>
    </div>
</body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deal_car";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Check if the user already exists
    $check_sql = "SELECT * FROM user WHERE email='$email'";
    $result = $conn->query($check_sql);
    // contains the number of rows in the result set.
    if ($result->num_rows > 0) {
        echo '<script>
        alert("User already exists");
        </script>';
    } else {
        $sql = "INSERT INTO user VALUES ('$name', '$email', '$password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "New Record created successfully";
            echo '<script>
            alert("New record created successfully");
            window.location.href = "login.php";
            </script>';
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

$conn->close();
?>
