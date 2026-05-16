<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="ACT2.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<body>
    <a href="index.php" class="return-button">←</a>
    <div class ="container">
            <h1 class="act-title">Multiplication Table</h1>
            <table>
                <?php
                for ($row = 0; $row <= 10; $row++) {
                    echo "<tr>";

                    for ($col = 0; $col <= 10; $col++) {
                        $result = $row * $col;

                        if (($row + $col) % 2 == 0) {
                            $color = "yellow";
                        } else {
                            $color = "red";
                        }

                        echo "<td class='$color'>$result</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
    </div>
</body>

</html>