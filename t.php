<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Test Drive Booking</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: black;
            color: white;
            text-align: center;
        }

        .container {
            padding: 20px;
            background-color: #222;
            border: 3px solid black;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.7);
        }

        .container:hover {
            border: 3px solid;
            border-image: linear-gradient(90deg, red, orange, yellow, green, cyan, blue, violet) 1;
        }

        h1 {
            font-size: 2em;
            color: #FFD700;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            color: white;
            background-color: green;
            text-decoration: none;
            font-size: 1em;
            border: 3px solid black;
            border-radius: 5px;
            transition: background-color 0.3s, transform 0.2s;
        }

        a:hover {
            background-color: black;
            border: 3px solid;
            border-image: linear-gradient(90deg, red, orange, yellow, green, cyan, blue, violet) 1;
            transform: scale(1.05);
        }

        a:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You for Booking a Test Drive!</h1>
        <p>Your test drive request has been successfully submitted. Our team will contact you shortly with further details.</p>
        <a href="index.php">Back to Homepage</a>
    </div>
</body>
</html>
