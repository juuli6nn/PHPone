<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Directory</title>
    <link rel="stylesheet" href="act1.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>

    <a href="index.php" class="return-button">←</a>
    
    <?php
        $people = array(
            array(
                "name" => "Eberechi Eze",
                "age" => 26,
                "birthday" => "June 29, 1998",
                "contact" => "0983761234",
                "image" => "1 EZE.jpg"
            ),
            array(
                "name" => "Gabriel Magalhaes",
                "age" => 26,
                "birthday" => "December 19, 1997",
                "contact" => "0983762345",
                "image" => "1 GABRIEL.jpg"
            ),
            array(
                "name" => "Viktor Gyokeres",
                "age" => 26,
                "birthday" => "June 4, 1998",
                "contact" => "0983763456",
                "image" => "1 GYOKERES.jpg"
            ),
            array(
                "name" => "Gabriel Martinelli",
                "age" => 23,
                "birthday" => "June 18, 2001",
                "contact" => "0983764567",
                "image" => "1 MARTINELLI.jpg"
            ),
            array(
                "name" => "Martin Odegaard",
                "age" => 25,
                "birthday" => "December 17, 1998",
                "contact" => "0983765678",
                "image" => "1 ODEGAARD.jpg"
            ),
            array(
                "name" => "David Raya",
                "age" => 29,
                "birthday" => "September 15, 1995",
                "contact" => "0983766789",
                "image" => "1 RAYA.jpg"
            ),
            array(
                "name" => "Declan Rice",
                "age" => 25,
                "birthday" => "January 14, 1999",
                "contact" => "0983767890",
                "image" => "1 RICE.jpg"
            ),
            array(
                "name" => "Bukayo Saka",
                "age" => 23,
                "birthday" => "September 5, 2001",
                "contact" => "0983768901",
                "image" => "1 SAKA.jpg"
            ),
            array(
                "name" => "William Saliba",
                "age" => 23,
                "birthday" => "March 24, 2001",
                "contact" => "0983769012",
                "image" => "1 SALIBA.jpg"
            ),
            array(
                "name" => "Jurrien Timber",
                "age" => 23,
                "birthday" => "June 17, 2001",
                "contact" => "0983760123",
                "image" => "1 TIMBER.jpg"
            )
        );
        
        usort($people, function($a, $b) {
            return strcmp($a["name"], $b["name"]);
        });
        
    ?>
    
    <h1>Arsenal Football Club</h1>
    
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Image</th>
                <th>Age</th>
                <th>Birthday</th>
                <th>Contact Number</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $counter = 1;
                foreach ($people as $person) {
                    echo "<tr>";
                    echo "<td>" . $counter . "</td>";
                    echo "<td>" . $person["name"] . "</td>";
                    echo "<td><img src='" . $person["image"] . "' alt='Profile'></td>";
                    echo "<td>" . $person["age"] . "</td>";
                    echo "<td>" . $person["birthday"] . "</td>";
                    echo "<td>" . $person["contact"] . "</td>";
                    echo "</tr>";
                    $counter++;
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>