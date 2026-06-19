<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['color1'] = $_POST['color1'];
    $_SESSION['color2'] = $_POST['color2'];
    $_SESSION['color3'] = $_POST['color3'];
    $_SESSION['color4'] = $_POST['color4'];
    $_SESSION['color5'] = $_POST['color5'];
    
    header('Location: act3_result.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 3 - Favorite Colors</title>
    <link rel="stylesheet" href="act3.css">
</head>
<body>
    <a href="index.php" class="return-button">←</a>
    
    <div class="container">
        <h1>Favorite Colors</h1>
        <p class="subtitle">SESSION Method</p>

        <form action="act3.php" method="POST">
            <div class="form-group">
                <label>Favorite color 1:</label>
                <input type="text" name="color1" placeholder="e.g., Red" required>
            </div>

            <div class="form-group">
                <label>Favorite color 2:</label>
                <input type="text" name="color2" placeholder="e.g., Yellow" required>
            </div>

            <div class="form-group">
                <label>Favorite color 3:</label>
                <input type="text" name="color3" placeholder="e.g., Orange" required>
            </div>

            <div class="form-group">
                <label>Favorite color 4:</label>
                <input type="text" name="color4" placeholder="e.g., Violet" required>
            </div>

            <div class="form-group">
                <label>Favorite color 5:</label>
                <input type="text" name="color5" placeholder="e.g., Blue" required>
            </div>

            <button type="submit">Send Colors</button>
        </form>
    </div>
</body>
</html>
