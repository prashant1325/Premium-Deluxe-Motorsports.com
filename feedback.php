
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealership Feedback Form</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: black;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    box-sizing: border-box;
}
/* .feedback-form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
} */
.feedback-form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 500px;
    border: 5px solid transparent; /* Initial border setup */
    background-clip: padding-box; /* Ensures the background doesn't overlap the border */
    position: relative; /* Required for the pseudo-element */
}

.feedback-form::before {
    content: '';
    position: absolute;
    top: -5px;
    left: -5px;
    right: -5px;
    bottom: -5px;
    z-index: -1; /* Behind the form */
    background: linear-gradient(90deg, red, orange, yellow, green, cyan, blue, violet);
    border-radius: 10px;
}

.feedback-form h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
    text-align: center;
}
.feedback-form .form-group {
    margin-bottom: 15px;
}
.feedback-form .form-group label {
    display: block;
    margin-bottom: 5px;
    color: #555;
    font-weight: bold;
}
.feedback-form .form-group input,
.feedback-form .form-group select,
.feedback-form .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}
.feedback-form .form-group textarea {
    resize: vertical;
}
.feedback-form button {
    width: 100%;
    background: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
}
.feedback-form button:hover {
    background: green;
    border:3px solid black;
}
@media (max-width: 768px) {
    .feedback-form {
        padding: 15px;
    }
    .feedback-form h2 {
        font-size: 20px;
    }
}
/* .h5{
    border :5px solid black;
}
.h5:hover{
    border-color :red;
} */


    </style>
   
</head>
<body>

    <form class="feedback-form" action ="https://formsubmit.co/puish9986@gmail.com" method="post" >
        <h2>Car Dealership Feedback Form</h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <input  class ="h5" type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input class ="h5" type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input class ="h5"  type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label  for="car-model">Select Model:</label>
            <select id="car-model" name="car-model" required>
                <option  class ="h5"value="Car">Car</option>
                <option class ="h5" value="Motorsport">Motorsport</option>
            
            </select>
        </div>
        <div class="form-group">
            <label for="Model-name">Model Name </label>
            <input class ="h5" type="name" id="model name" name="model name" required>
        </div>
        <div class="form-group">
        <label for="date">Purchase Date:</label>
        <input class ="h5" type="date" id="date" name="date" min="{{today}}" required>
        </div>
        <div class="form-group">
            <label  for="rating">Overall Experience:</label>
            <select id="rating" name="rating" required>
                <option value="">Select</option>
                <option value="excellent">Excellent</option>
                <option value="good">Good</option>
                <option value="average">Average</option>
                <option value="poor">Poor</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comments">Additional Comments:</label>
            <textarea class ="h5" id="comments" name="comments" rows="4"></textarea>
        </div>
        <button type="submit">Submit Feedback</button>
          <input type="hidden" name="_template" value="table">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="http://localhost/car/feedback thank.php">
    </form>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

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
    $mail->Body    = '<p><strong>Name:</strong> ' . $name . '</p><p><strong>Email:</strong> ' . $email . '</p><p><strong>Message:</strong><br>' . nl2br($feedback) . '</p>';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';

    }

}

?>
<script>
        // Set the minimum date to today
        const dateInput = document.getElementById('date');
        const today = new Date().toISOString().split('T')[0];
        dateInput.min = today;

      

        daysInput.addEventListener('input', () => {
            const days = parseInt(daysInput.value) || 1;
            const pricePerDay = parseFloat(priceInput.value);
            const totalCost = days * pricePerDay;
            totalCostElement.textContent = `$${totalCost}`;
        });
    </script>
</body>
</html>
