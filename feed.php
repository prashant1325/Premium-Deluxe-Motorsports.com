<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Dealership Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .feedback-form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .feedback-form h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .feedback-form .form-group {
            margin-bottom: 15px;
        }
        .feedback-form .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .feedback-form .form-group input,
        .feedback-form .form-group select,
        .feedback-form .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .feedback-form .form-group textarea {
            resize: vertical;
        }
        .feedback-form button {
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        .feedback-form button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <form class="feedback-form">
        <h2>Car Dealership Feedback Form</h2>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>
        </div>
        <div class="form-group">
            <label for="car-model">Car Model:</label>
            <input type="text" id="car-model" name="car-model" required>
        </div>
        <div class="form-group">
            <label for="purchase-date">Purchase Date:</label>
            <input type="date" id="purchase-date" name="purchase-date" required>
        </div>
        <div class="form-group">
            <label for="rating">Overall Experience:</label>
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
            <textarea id="comments" name="comments" rows="4"></textarea>
        </div>
        <button type="submit">Submit Feedback</button>
    </form>
</body>
</html>
