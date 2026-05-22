<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="act2.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>


<body>
    
    <a href="index.php" class="return-button">←</a>
    
    <?php
    $NUMBERS = array (2, 4, 6, 8, 10, 12, 14, 16, 18, 20)
    ?>

    <table>
        <thead>
            <tr>
                <th colspan="2">Array list: <?php echo implode(", ", $NUMBERS); ?></th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Addition</td>
                <td>
                    <?php
                        $SUM = 0;
                        foreach($NUMBERS as $index) {
                            $SUM += $index;
                        }
                        echo $SUM;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Subtraction</td>
                <td>
                    <?php
                        $DIFFERENCE = 0;
                        foreach($NUMBERS as $index) {
                            $DIFFERENCE -= $index;
                        }
                        echo $DIFFERENCE;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Multiplication</td>
                <td>
                    <?php
                        $PRODUCT = 1;
                        foreach($NUMBERS as $index) {
                            $PRODUCT *= $index;
                        }
                        echo $PRODUCT;
                    ?>
                </td>
            </tr>
            <tr>
                <td>Division</td>
                <td>
                    <?php
                        $QUOTIENT = 1;
                        foreach($NUMBERS as $index) {
                            $QUOTIENT /= $index;
                        }
                        echo $QUOTIENT;
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>