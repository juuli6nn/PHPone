<?php
$pageTitle = "Activity 2 - String Functions";
require 'header.php';

// List of names
$names = array("chrisa", "julian", "marcus", "sophia", "alexander");
?>

<div class="activity-container">
    <h2 class="activity-title">List of Names - String Manipulation</h2>
    
    <div class="table-wrapper">
        <table class="string-table">
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
                    // 1. Number of characters
                    $charCount = strlen($name);
                    
                    // 2. Uppercase first character
                    $uppercaseFirst = ucfirst($name);
                    
                    // 3. Replace vowels with @
                    $vowelsReplaced = str_replace(
                        array('a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'),
                        '@',
                        $name
                    );
                    
                    // 4. Check position of character "a"
                    $positionA = strpos($name, 'a');
                    // strpos returns false if not found, so we need to check
                    $positionDisplay = ($positionA !== false) ? $positionA : 'Not found';
                    
                    // 5. Reverse name
                    $reversedName = strrev($name);
                    
                    // Display row
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
    
    <div class="code-section">
        <h3>PHP String Functions Used:</h3>
        <div class="function-grid">
            <div class="function-card">
                <h4>strlen()</h4>
                <p>Returns the length of a string (number of characters)</p>
                <code>strlen("chrisa") // Returns: 6</code>
            </div>
            
            <div class="function-card">
                <h4>ucfirst()</h4>
                <p>Converts the first character to uppercase</p>
                <code>ucfirst("chrisa") // Returns: "Chrisa"</code>
            </div>
            
            <div class="function-card">
                <h4>str_replace()</h4>
                <p>Replaces all occurrences of a search string with a replacement</p>
                <code>str_replace(['a','e','i','o','u'], '@', "chrisa")</code>
            </div>
            
            <div class="function-card">
                <h4>strpos()</h4>
                <p>Finds the position of the first occurrence of a substring</p>
                <code>strpos("chrisa", "a") // Returns: 5</code>
            </div>
            
            <div class="function-card">
                <h4>strrev()</h4>
                <p>Reverses a string</p>
                <code>strrev("chrisa") // Returns: "asirhc"</code>
            </div>
        </div>
    </div>
</div>

<style>
.activity-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 40px 20px;
}

.activity-title {
    text-align: center;
    font-size: 32px;
    color: #1e293b;
    margin-bottom: 40px;
    font-weight: 700;
}

.table-wrapper {
    overflow-x: auto;
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 40px;
}

.string-table {
    width: 100%;
    border-collapse: collapse;
    min-width: 800px;
}

.string-table thead {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
}

.string-table th {
    padding: 16px;
    text-align: left;
    font-weight: 600;
    font-size: 14px;
    border-bottom: 2px solid #e2e8f0;
}

.string-table tbody tr {
    border-bottom: 1px solid #e2e8f0;
    transition: background-color 0.2s;
}

.string-table tbody tr:hover {
    background-color: #f8fafc;
}

.string-table td {
    padding: 16px;
    font-size: 14px;
    color: #475569;
}

.name-cell {
    font-weight: 600;
    color: #1e293b;
}

.code-section {
    margin-top: 60px;
}

.code-section h3 {
    font-size: 24px;
    color: #1e293b;
    margin-bottom: 24px;
    text-align: center;
}

.function-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
    gap: 20px;
}

.function-card {
    background: white;
    border-radius: 12px;
    padding: 24px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-left: 4px solid #667eea;
    transition: transform 0.2s, box-shadow 0.2s;
}

.function-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
}

.function-card h4 {
    color: #667eea;
    font-size: 18px;
    margin-bottom: 8px;
    font-family: 'Courier New', monospace;
}

.function-card p {
    color: #64748b;
    font-size: 14px;
    margin-bottom: 12px;
    line-height: 1.6;
}

.function-card code {
    display: block;
    background: #f1f5f9;
    padding: 12px;
    border-radius: 6px;
    font-size: 12px;
    color: #334155;
    overflow-x: auto;
    font-family: 'Courier New', monospace;
}

@media (max-width: 768px) {
    .activity-title {
        font-size: 24px;
    }
    
    .string-table th,
    .string-table td {
        padding: 12px 8px;
        font-size: 12px;
    }
    
    .function-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php
include 'footer.php';
?>
