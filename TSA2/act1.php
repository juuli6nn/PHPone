<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruits</title>
    <link rel="stylesheet" href="act1.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>
<body>

    <a href="index.php" class="return-button">←</a>
    
    <?php
        $fruits = array(
            array(
                "name" => "Apple",
                "color" => "Red",
                "description" => "A sweet, crisp fruit often used in pies and snacks.",
                "facts" => "Apples are high in fiber and vitamin C and come in many varieties.",
                "image" => "apple.png"
            ),
            array(
                "name" => "Banana",
                "color" => "Yellow",
                "description" => "A soft, sweet fruit with a creamy texture.",
                "facts" => "Bananas are rich in potassium and are easy to digest.",
                "image" => "Banana.png"
            ),
            array(
                "name" => "Cherry",
                "color" => "Red",
                "description" => "A small, juicy stone fruit with a bright flavor.",
                "facts" => "Cherries contain antioxidants and may support healthy sleep.",
                "image" => "Cherry.webp"
            ),
            array(
                "name" => "Dragonfruit",
                "color" => "Pink",
                "description" => "A tropical fruit with a unique appearance and mild taste.",
                "facts" => "Dragonfruit is rich in vitamin C and fiber and has a striking look.",
                "image" => "dragonfruit.png"
            ),
            array(
                "name" => "Grapes",
                "color" => "Green",
                "description" => "Small, juicy clusters eaten fresh or used to make wine.",
                "facts" => "Grapes are full of antioxidants and are a healthy snack.",
                "image" => "grapes.webp"
            ),
            array(
                "name" => "Kiwi",
                "color" => "Green",
                "description" => "A fuzzy fruit with bright green flesh and tiny seeds.",
                "facts" => "Kiwi is a good source of vitamin C and dietary fiber.",
                "image" => "kiwi.png"
            ),
            array(
                "name" => "Mango",
                "color" => "Orange",
                "description" => "A juicy tropical fruit with a sweet and fragrant flavor.",
                "facts" => "Mangoes are loaded with vitamins A and C and are very popular worldwide.",
                "image" => "mango.png"
            ),
            array(
                "name" => "Orange",
                "color" => "Orange",
                "description" => "A citrus fruit known for its refreshing juice.",
                "facts" => "Oranges are high in vitamin C and support immune health.",
                "image" => "orange.webp"
            ),
            array(
                "name" => "Strawberry",
                "color" => "Red",
                "description" => "A sweet berry often used in desserts and smoothies.",
                "facts" => "Strawberries are rich in vitamin C and antioxidants.",
                "image" => "strawberry.png"
            ),
            array(
                "name" => "Watermelon",
                "color" => "Green",
                "description" => "A large, juicy fruit with sweet red flesh.",
                "facts" => "Watermelon is refreshing and mostly water, making it hydrating.",
                "image" => "watermelon.png"
            )
        );
        
        usort($fruits, function($a, $b) {
            return strcmp($a["name"], $b["name"]);
        });
        
    ?>
    
    <h1>Fruit Directory</h1>
    
    <table>
        <thead>
            <tr>
                <th colspan="6">FRUITS</th>
            </tr>
        </thead>
        <thead>
            <tr>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Facts</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $counter = 1;
                foreach ($fruits as $fruit) {
                    echo "<tr>";
                    echo "<td class='name-cell'>" . $fruit["name"] . "</td>";
                    echo "<td><img src='" . $fruit["image"] . "' alt='" . $fruit["name"] . "'></td>";
                    echo "<td>" . $fruit["description"] . "</td>";
                    echo "<td>" . $fruit["facts"] . "</td>";
                    echo "</tr>";
                    $counter++;
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>