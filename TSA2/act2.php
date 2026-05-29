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
        function volume_cube(float $s): float {
            return $s ** 3;
        }

        function volume_rectangular_prism(float $length, float $width, float $height): float {
            return $length * $width * $height;
        }

        function volume_cylinder(float $radius, float $height): float {
            return pi() * $radius ** 2 * $height;
        }

        function volume_cone(float $radius, float $height): float {
            return (pi() * $radius ** 2 * $height) / 3;
        }

        function volume_sphere(float $radius): float {
            return (4 / 3) * pi() * $radius ** 3;
        }
    ?>

    <table>
        <thead>
            <tr>
                <th colspan="3">Volume of Shapes</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Values</td>
                <td>Formulas</td>
                <td>Answers</td>
            </tr>
            <tr>
                <td>s = 5</td>
                <td>V = s³</td>
                <td><?php echo volume_cube(5); ?></td>
            </tr>
            <tr>
                <td>l = 5, w = 3, h = 2</td>
                <td>V = l × w × h</td>
                <td><?php echo volume_rectangular_prism(5, 3, 2); ?></td>
            </tr>
            <tr>
                <td>r = 4, h = 10</td>
                <td>V = π r² h</td>
                <td><?php echo number_format(volume_cylinder(4, 10), 1); ?></td>
            </tr>
            <tr>
                <td>r = 3, h = 8</td>
                <td>V = 1/3 π r² h</td>
                <td><?php echo number_format(volume_cone(3, 8), 1); ?></td>
            </tr>
            <tr>
                <td>r = 7</td>
                <td>V = 4/3 π r³</td>
                <td><?php echo number_format(volume_sphere(7), 1); ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>