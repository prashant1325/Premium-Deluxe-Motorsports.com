<?php
// include 'connect.php';
include('header1.php');
include('connection.php');
$sql = "SELECT * FROM post";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ABOUT OUR SPORTS CAR</title>
    <link rel="stylesheet" href="style2.css">
    
</head>
<body>

   

    <div class="container">
        <section class="featured-cars" id="cars">
            <h2>SPORTS CAR AVAILABLE HERE</h2>
            
     <?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="car-item">';
        echo '<img src="admin/' . $row["image"] . '" class="car22" alt="Car Image" width="400px">';
        echo '<div class="body">';
        echo '<h1 class="title">' . $row["variant"] . '</h1>';
        echo '<h4 class="author">' . $row["reg_year"] . '</h4>';
        echo '<h4 class="author">' . $row["manf_year"] . '</h4>';
        echo '<h4 class="author">' . $row["reg_no"] . '</h4>';
        echo '<h4 class="author">' . $row["owner"] . '</h4>' ;
        echo '<h2 class="price"> ' . $row["price"] . '</h2>';
        echo '<a href="sportsbuy.php"><button class="btn">BOOK NOW</button></a>';
        echo '</form>';
        echo '</div>';
        echo '</div>';
    
    
    }
} else {
    echo "No products available.";
}
?>

                
                    

    <footer id="contact">
        <a href="index.php"><button class="btn">Back to Home</button></a>
    </footer>
</body>
</html>
