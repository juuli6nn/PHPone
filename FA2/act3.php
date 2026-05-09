<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-Digit Combinations</title>
    <link rel="stylesheet" href="act3.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <a href="index.php" class="return-button">←</a>

    <div class="wrapper">

        <div class="output-card">
            <h1 class="page-title" style="margin-bottom: 10px">Activity 3: Looping Statements</h1>
            <hr style="margin-right: 100px ; margin-left: 100px">
            <br>

            <?php
            $combinations = [];

            for ($i = 0; $i <= 9; $i++) {
                for ($j = 0; $j <= 9; $j++) {
                    $combinations[] = sprintf("%d%d", $i, $j);
                }
            }

            echo implode(", ", $combinations) . ",";
            ?>
        </div>
    </div>

</body>

</html>
