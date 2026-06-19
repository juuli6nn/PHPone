<?php
session_start();

if (!isset($_SESSION['color1'])) {
    header('Location: act3.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result - Favorite Colors</title>
    <link rel="stylesheet" href="act3.css">
</head>
<body>
    <a href="index.php" class="return-button">←</a>
    
    <div class="container">
        <h1>My Favorite Colors</h1>
        <p class="subtitle">Retrieved from Session</p>

        <div class="result-box">
            <div class="result-item"><strong>My Favorite Color 1:</strong> <?php echo $_SESSION['color1']; ?></div>
            <div class="result-item"><strong>My Favorite Color 2:</strong> <?php echo $_SESSION['color2']; ?></div>
            <div class="result-item"><strong>My Favorite Color 3:</strong> <?php echo $_SESSION['color3']; ?></div>
            <div class="result-item"><strong>My Favorite Color 4:</strong> <?php echo $_SESSION['color4']; ?></div>
            <div class="result-item"><strong>My Favorite Color 5:</strong> <?php echo $_SESSION['color5']; ?></div>
        </div>
    </div>
</body>
</html>
