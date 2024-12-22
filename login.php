<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Car & Bike Dealer</title>
<!-- 
    <link rel="stylesheet" href="style1.css"> -->
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
    width: 800px;
    height: 600px;
    margin: 100px;
    border: 4px solid white;
    border-radius: 20px;
    transition: border-color 0.3s ease;
    background-color: black;
    border-color: red;
    box-shadow: 0 0 10px red, 0 0 20px red, 0 0 30px red;
    animation: rainbow-glow 1.5s infinite;
}
.img:hover{
    background-color: black;
    border-color: red;
    box-shadow: 0 0 10px red, 0 0 20px red, 0 0 30px red;
    animation: rainbow-glow 1.5s infinite;
    
}

.login-container {
    background-color: grey;
    padding: 20px;
    border-radius: 20px;
    width: 300px;
    border: 3px solid black; /* Set the border to black by default */
    transition: border 0.5s ease-in-out;
    border: 3px solid white;
}

.login-container h2 {
    text-align: center;
    margin-bottom: 40px;
    font-size: 35px;
}

.login-container form {
    display: flex;
    flex-direction: column;
}

.login-container form input {
    margin-bottom: 10px;
    padding: 10px;
    border: 3px solid black;
    border-radius: 5px;
}

.login-container form input:hover {
    background-color: aqua;
}

.login-container form button {
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

.login-container form button:hover {
    background-color: red;
    border-color: black;
    box-shadow: 0 0 10px red, 0 0 20px red, 0 0 30px red;
    animation: rainbow-glow 1.5s infinite;
}

.login-container .register-link {
    text-align: center;
    margin-top: 10px;
}

.login-container .register-link a {
    color: blue;
    text-decoration: none;
}

.login-container .register-link a:hover {
    text-decoration: underline;
}

.cardhead {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding-inline: 10px;
    gap: 8px;
}

.img:hover {
    border-color: red;
}

.login-container:hover {
    /* animation: rainbow-glow 1.5s infinite;
    border: 3px solid transparent;
    background-color: linear-gradient(45deg, red, orange, yellow, green, blue, indigo, violet);
    background-size: 400% 400%; */
    background-color: black;
    border-color: red;
    box-shadow: 0 0 10px red, 0 0 20px red, 0 0 30px red;
    animation: rainbow-glow 1.5s infinite;
}

.h{
    color: white;
}
.h0{
    border-color:white;
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

    <img  class="img" src="https://img.gta5-mods.com/q95/images/motorsport-car-dealer-sell-car-lua/7f5813-Premium%20Deluxe%20Motorsport.jpg" >
<div class="login-container">
    <div class="cardhead">
    <h2 class="h">Login</h2>
         <svg class="h" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"  viewBox="0 0 16 16">
        <path d="M4 9a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM4.862 4.276 3.906 6.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 4H5.309a.5.5 0 0 0-.447.276"/>
        <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM4.82 3a1.5 1.5 0 0 0-1.379.91l-.792 1.847a1.8 1.8 0 0 1-.853.904.8.8 0 0 0-.43.564L1.03 8.904a1.5 1.5 0 0 0-.03.294v.413c0 .796.62 1.448 1.408 1.484 1.555.07 3.786.155 5.592.155s4.037-.084 5.592-.155A1.48 1.48 0 0 0 15 9.611v-.413q0-.148-.03-.294l-.335-1.68a.8.8 0 0 0-.43-.563 1.8 1.8 0 0 1-.853-.904l-.792-1.848A1.5 1.5 0 0 0 11.18 3z"/>
      </svg> 
    </div>
    <form action="" method="POST">

        <input  class="h0"type="text" id="name" name="name" placeholder="Username" required>
        <input class ="h0"type="password" id="pass" name="pass" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <div class="register-link">
        <p class="h">Don't have an account? <a href="register.php">Register</a></p>
    </div>
</div>
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
    $password = $_POST['pass'];
    
    $sql = "SELECT * FROM user WHERE name = '$name' AND pass = '$password'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0)
     {
        $_SESSION["username"]= $name;
        echo '<script>
       
                window.location.href = "index.php";
              </script>';
    } else {
        echo '<script> alert("You are not Login Sir Please Register First !!");
        
                window.location.href = "register.php";
              </script>';
    }
}

?>  
