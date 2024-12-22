<?php
// include 'connect.php';
include('header1.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Test Drive Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: black;
            color: white;
        }
        form {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 4px solid black;
            border-radius: 10px;
            background-color: #f9f9f9;
            color: black;
            transition: border-image 0.5s ease, border-color 0.5s ease;
        }
        form:hover {
            border: 4px solid;
            border-image: linear-gradient(90deg, red, orange, yellow, green, cyan, blue, violet) 1;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        select {
    appearance: none; /* Remove default arrow styling */
    -webkit-appearance: none;
    -moz-appearance: none;
    background-color: white;
    color: black;
    cursor: pointer;
    padding-right: 30px; /* Space for arrow */
    background-image: url('data:image/svg+xml;charset=US-ASCII,<svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"><polygon points="0,0 10,0 5,5" fill="black"/></svg>');
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 10px 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

select:hover {
    border-color: #007BFF;
}

        
        button {
            background-color: green;
            color: white;
            border: 3px solid black;
            cursor: pointer;
        }
        button:hover {
            background-color: black;
            border: 3px solid;
            border-image: linear-gradient(90deg, red, orange, yellow, green, cyan, blue, violet) 1;
        }
        .form-group {
            margin: 15px 0;
        }
        #total-cost {
            font-weight: bold;
        }
        .success-message {
            max-width: 400px;
            margin: 20px auto;
            padding: 10px;
            background-color: #28a745;
            color: white;
            text-align: center;
            border-radius: 5px;
        }
    </style>
</head>
<body>
   
<form action ="https://formsubmit.co/puish9986@gmail.com" method="post">

        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" placeholder="Enter your address" required>

        <div class="form-group">
            <label for="car-model">Select Model:</label>
            <select id="car-model" name="car-model" required>
            <option value=""></option>
                <option value="YAMAHA R15 V4">YAMAHA R15 V4</option>
                <option value="YAMAHA MT 15">YAMAHA MT 15</option>
                <option value="KEEWAY K300N">KEEWAY K300N</option>
            </select>
        </div>

        

        <label for="date">Select a Start Date:</label>
        <input type="date" id="date" name="date" required>

        <label for="days">Number of Days:</label>
        <input type="number" id="days" name="days" min="1" value="1" required>

        <label for="price">Price for One Day:</label>
        <input type="number" id="price" name="price" value="250" readonly>
        

        <p>
    <label for="total-cost">Total Cost:</label>
    <input type="text" id="total-cost" name="total-cost" value="$250" readonly>
</p>

        <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="http://localhost/car/t.php">
            

        <button type="submit">BOOK YOUR RIDE</button>
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    

    require 'PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'puish9986gmail.com'; // Your Gmail address
    $mail->Password = '2230074cse'; // Your Gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom($email, $name);
    $mail->addAddress('puish9988@gmail.com'); // Your Gmail address to receive the emails

    $mail->isHTML(true);
    $mail->Subject = 'New Contact Form Submission';
    $mail->Body    = '<p><strong>Name:</strong> ' . $name . '</p><p><strong>Email:</strong> ' . $email . '</p><p><strong>Message:</strong><br>' . nl2br($message) . '</p>';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';

    }

}

?>

<script>
    
    const dateInput = document.getElementById('date');
    const today = new Date().toISOString().split('T')[0];
    dateInput.min = today;

    
    const daysInput = document.getElementById('days');
    const priceInput = document.getElementById('price');
    const totalCostInput = document.getElementById('total-cost');

    daysInput.addEventListener('input', () => {
        const days = parseInt(daysInput.value) || 1;
        const pricePerDay = parseFloat(priceInput.value);
        const totalCost = days * pricePerDay;
        totalCostInput.value = `$${totalCost}`;
    });
</script>

</body>
</html>
