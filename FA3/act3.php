<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="act3.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>



<body>

    <a href="index.php" class="return-button">←</a>

    <?php
    function showSum($a, $b, $c) {
        echo $a + $b + $c;
    }
    
    function showDiff($a, $b, $c) {
        echo $a - $b - $c;
    }
    
    function showProduct($a, $b, $c) {
        echo $a * $b * $c;
    }
    
    function showQuotient($a, $b, $c) {
        echo $a / $b / $c;
    }
    
    $num1 = 25;
    $num2 = 13;
    $num3 = 6;
?>

<table>
    <thead>
        <tr>
            <th colspan="2">My Parameter values: <?php echo "$num1, $num2, $num3"; ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Addition</td>
            <td><?php showSum($num1, $num2, $num3); ?></td>
        </tr>
        <tr>
            <td>Subtraction</td>
            <td><?php showDiff($num1, $num2, $num3); ?></td>
        </tr>
        <tr>
            <td>Multiplication</td>
            <td><?php showProduct($num1, $num2, $num3); ?></td>
        </tr>
        <tr>
            <td>Division</td>
            <td><?php showQuotient($num1, $num2, $num3); ?></td>
        </tr>
    </tbody>
</table>

</body>
</html>