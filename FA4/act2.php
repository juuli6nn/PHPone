<?php
$pageTitle = "Activity 2 - String Functions";
require 'header.php';
?>

<link rel="stylesheet" href="act2.css">

<?php
$names = array("Chrisa", "Bukayo", "Hincapie", "Dowman", "Calafiori");
?>

<div class="activity-container">
    <h2 class="activity-title">List of Names - String Manipulation</h2>
    
    <div class="tabler">
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Number of characters</th>
                    <th>Uppercase first character</th>
                    <th>Replace vowels with @</th>
                    <th>Check position of character "a"</th>
                    <th>Reverse name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($names as $name) {
                    $charCount = strlen($name);
                    
                    $uppercaseFirst = ucfirst($name);
                    
                    $vowelsReplaced = str_replace(
                        array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'),
                        '@',
                        $name
                    );

                    $positionA = strpos($name, 'a');
                    $positionDisplay = ($positionA !== false) ? $positionA : 'Not found';
                    
                    $reversedName = strrev($name);
                    
                    echo "<tr>";
                    echo "<td class='name-cell'>" . htmlspecialchars($name) . "</td>";
                    echo "<td>" . $charCount . "</td>";
                    echo "<td>" . htmlspecialchars($uppercaseFirst) . "</td>";
                    echo "<td>" . htmlspecialchars($vowelsReplaced) . "</td>";
                    echo "<td>" . $positionDisplay . "</td>";
                    echo "<td>" . htmlspecialchars($reversedName) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include 'footer.php';
?>
