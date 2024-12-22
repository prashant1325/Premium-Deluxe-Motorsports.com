<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Congratulations!</title>

    <style>
        body {
            font-family: 'Playwrite NG Modern', sans-serif;
            background-color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden; /* Prevents scroll caused by confetti */
        }

        .congratulations-container {
            text-align: center;
            background-color: black;
            padding: 20px;
            border: 5px solid red ;
            border-image: linear-gradient(90deg, red, orange, yellow, green, cyan, blue, violet) 1;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 500px;
            width: 90%;
            position: relative;
            animation: rainbow-border 3s linear infinite;
        }
       

        @keyframes rainbow-border {
            0% {
                border-image-source: linear-gradient(90deg, red, orange, yellow, green, cyan, blue, violet);
            }
            50% {
                border-image-source: linear-gradient(180deg, violet, blue, cyan, green, yellow, orange, red);
            }
            100% {
                border-image-source: linear-gradient(270deg, red, orange, yellow, green, cyan, blue, violet);
            }
        }

        h1 {
            color: #28a745;
            font-size: 36px;
        }

        p {
            font-size: 18px;
            color: #6c757d;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            color: #fff;
            background-color: #007bff;
            border: 1px solid #007bff;
            padding: 10px 20px;
            font-size: 16px;
            line-height: 1.5;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
            transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }

        .btn:hover {
            background-color: black;
            border: 3px solid black;
            border-color: red;
        }

        /* Confetti styles */
        .confetti {
            position: fixed;
            width: 10px;
            height: 10px;
            background-color: #ff0;
            opacity: 0.8;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 50%;
            animation: fall 3s linear infinite;
        }

        @keyframes fall {
            0% {
                transform: translateY(0) translateX(0) rotate(0deg);
                opacity: 1;
            }
            100% {
                transform: translateY(100vh) translateX(calc(-50vw + 100%)) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
</head>
<body>
    <div class="congratulations-container">
        <h1>Congratulations!</h1>
        <p>Thank you for purchasing a vehicle from us. We hope you enjoy your new ride!</p>
        <a href="index.php" class="btn">Back to Home</a>
        <a href="Feedback.php" class="btn">Feedback For Us!</a>
    </div>

    <script>
        function createConfetti() {
            for (let i = 0; i < 100; i++) {
                const confetti = document.createElement('div');
                confetti.classList.add('confetti');

                // Randomize color
                const colors = ['#ff0', '#f00', '#0f0', '#00f', '#ff6347', '#40e0d0', '#8a2be2'];
                confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];

                // Randomize position and animation duration
                confetti.style.left = Math.random() * 100 + 'vw';
                confetti.style.animationDuration = Math.random() * 2 + 2 + 's';

                // Add to body
                document.body.appendChild(confetti);

                // Remove after animation
                confetti.addEventListener('animationend', () => confetti.remove());
            }
        }

        // Trigger confetti on page load
        window.onload = createConfetti;
    </script>
</body>
</html>
