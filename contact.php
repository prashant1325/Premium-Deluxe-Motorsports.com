<?php
// include 'connect.php';
include('header1.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Car and Motorsport Dealership</title>
    <link rel="stylesheet" href="contact1.css">
</head>

<body>


    <section class="contact-form">
        
        <h1>Contact Us</h1>
        <form action ="https://formsubmit.co/puish9986@gmail.com" method="post">
            <div class="form-group">
                <label for="name">Full Name:</label>
                <input  class=text1 type="text" name="Name" required id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email Address:</label>
                <input class=text1 type="email" name="E-mail" required id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input  class=text1 type="tel" name="Phone-no" required id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label   for="Vehicle Type">Vehicle Type:</label>
                <select  class=text1  name="Vechile-Type" requiredid="vehicle type"  required>
                    <option  class=text1 value="CAR">Car</option>
                    <option  class=text1 value="Motorsport">Motorsport</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Vechile Name">Vechile Name :</label>
                <input  class=text1 type="Vechile Name" name="Vechile-Name" required id="Vechile Name"  required>
            <div class="form-group">
                <label  for="message">Message:</label>
                <textarea  class=text1 name="Message" requiredid="message" rows="5" required></textarea>
            </div>
            <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="http://localhost/car/contact3.php">
            <button type="submit" class="btn">Submit</button>
        </form>
    </section>
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

    <footer>
        <p>&copy; 2024 AutoDeals. All rights reserved.</p>
        <p>Contact us: automotive@carsale.com</p>
    </footer>
</body>
</html>
