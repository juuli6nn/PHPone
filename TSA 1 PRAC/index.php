<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Multiplication Table</h1>
    
    <table>
        <?php
        // Outer loop for rows (0 to 10)
        for ($row = 0; $row <= 10; $row++) {
            echo "<tr>"; // Start a table row
            
            // Inner loop for columns (0 to 10)
            for ($col = 0; $col <= 10; $col++) {
                // Calculate the multiplication result
                $result = $row * $col;
                
                // Determine the color based on position
                // If the sum of row and column is even, use yellow; otherwise, use red
                if (($row + $col) % 2 == 0) {
                    $color = "yellow";
                } else {
                    $color = "red";
                }
                
                // Output the table cell with the color class
                echo "<td class='$color'>$result</td>";
            }
            
            echo "</tr>"; // End the table row
        }
        ?>
    </table>
    
</body>
</html>