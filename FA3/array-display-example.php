<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Display Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f5f5f5;
        }
        
        .array-box {
            border: 2px solid #333;
            padding: 20px;
            background-color: white;
            text-align: center;
            max-width: 800px;
            margin: 20px auto;
            font-size: 18px;
        }
        
        .array-title {
            font-weight: bold;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    
    <h1>Array Display Examples</h1>
    
    <?php
        // Example 1: Simple number array
        $numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 10);
    ?>
    
    <div class="array-box">
        Array list <?php echo implode(", ", $numbers); ?>
    </div>
    
    <?php
        // Example 2: Names array
        $names = array("Alice", "Bob", "Charlie", "David", "Eve");
    ?>
    
    <div class="array-box">
        Names: <?php echo implode(", ", $names); ?>
    </div>
    
    <?php
        // Example 3: Using a loop (alternative method)
        $fruits = array("Apple", "Banana", "Orange", "Mango", "Grape");
    ?>
    
    <div class="array-box">
        Fruits: 
        <?php
            foreach ($fruits as $index => $fruit) {
                echo $fruit;
                // Add comma if not the last item
                if ($index < count($fruits) - 1) {
                    echo ", ";
                }
            }
        ?>
    </div>
    
    <?php
        // Example 4: Displaying array keys and values
        $ages = array("John" => 25, "Jane" => 30, "Bob" => 28);
    ?>
    
    <div class="array-box">
        Ages: 
        <?php
            $items = array();
            foreach ($ages as $name => $age) {
                $items[] = "$name ($age)";
            }
            echo implode(", ", $items);
        ?>
    </div>
    
</body>
</html>
