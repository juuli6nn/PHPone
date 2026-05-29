<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04 – PHP String Functions</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a class="back" href="../">← Back</a>

<div class="page-wrapper">
    <h1>PHP String Functions</h1>
    <p class="intro">
        This is an expanded version of your FA4 act2.php.
        Every string function you need to know, with a live table showing the results.
    </p>

    <?php
    /* The array of names we'll run string functions on
     * Same pattern you used in FA4/act2.php               */
    $names = ["Chrisa", "Bukayo", "Hincapie", "Dowman", "Calafiori", "julian"];
    ?>

    <!-- ── TABLE: String functions on each name ─────────── -->
    <div class="table-wrapper">
        <table>
            <thead>
                <tr>
                    <th>Original</th>
                    <th>strlen()</th>
                    <th>strtoupper()</th>
                    <th>strtolower()</th>
                    <th>ucfirst()</th>
                    <th>strrev()</th>
                    <th>strpos( ,"a")</th>
                    <th>str_replace vowels→@</th>
                    <th>substr(0,3)</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($names as $name) {

                    /* strlen — count characters in the string */
                    $len = strlen($name);

                    /* strtoupper — ALL CAPS */
                    $upper = strtoupper($name);

                    /* strtolower — all lowercase */
                    $lower = strtolower($name);

                    /* ucfirst — only first letter capitalised */
                    $ucf = ucfirst($name);

                    /* strrev — reverses the entire string */
                    $rev = strrev($name);

                    /* strpos — find the position (index) of a character
                     * Returns FALSE if not found, not -1 like other languages!
                     * Use !== false (strict) to check — not != false
                     * because position 0 would incorrectly look like false */
                    $pos = strpos($name, 'a');
                    $posDisplay = ($pos !== false) ? $pos : "not found";

                    /* str_replace — replace one thing with another
                     * Can take an array as the first argument to replace many at once */
                    $noVowels = str_replace(
                        ['a','e','i','o','u','A','E','I','O','U'],  /* find these */
                        '@',                                          /* replace with this */
                        $name                                         /* in this string */
                    );

                    /* substr — extract part of a string
                     * substr($string, start, length)
                     * substr("Bukayo", 0, 3) → "Buk" */
                    $sub = substr($name, 0, 3);

                    echo "<tr>";
                    echo "<td class='name'>" . htmlspecialchars($name) . "</td>";
                    echo "<td>" . $len . "</td>";
                    echo "<td>" . htmlspecialchars($upper) . "</td>";
                    echo "<td>" . htmlspecialchars($lower) . "</td>";
                    echo "<td>" . htmlspecialchars($ucf) . "</td>";
                    echo "<td>" . htmlspecialchars($rev) . "</td>";
                    echo "<td>" . $posDisplay . "</td>";
                    echo "<td>" . htmlspecialchars($noVowels) . "</td>";
                    echo "<td>" . htmlspecialchars($sub) . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- ── QUICK REFERENCE CARDS ───────────────────────── -->
    <h2 class="section-title">Quick Reference</h2>

    <div class="ref-grid">
        <?php
        /* Array of reference cards — each has a function name,
         * what it does, syntax, and an example               */
        $refs = [
            [
                "fn"      => "strlen()",
                "what"    => "Count how many characters are in a string",
                "syntax"  => 'strlen($str)',
                "example" => 'strlen("Saka") → 4',
            ],
            [
                "fn"      => "strtoupper()",
                "what"    => "Convert entire string to uppercase",
                "syntax"  => 'strtoupper($str)',
                "example" => 'strtoupper("saka") → "SAKA"',
            ],
            [
                "fn"      => "strtolower()",
                "what"    => "Convert entire string to lowercase",
                "syntax"  => 'strtolower($str)',
                "example" => 'strtolower("SAKA") → "saka"',
            ],
            [
                "fn"      => "ucfirst()",
                "what"    => "Capitalise only the FIRST letter",
                "syntax"  => 'ucfirst($str)',
                "example" => 'ucfirst("saka") → "Saka"',
            ],
            [
                "fn"      => "ucwords()",
                "what"    => "Capitalise the first letter of EVERY word",
                "syntax"  => 'ucwords($str)',
                "example" => 'ucwords("bukayo saka") → "Bukayo Saka"',
            ],
            [
                "fn"      => "strrev()",
                "what"    => "Reverse the string",
                "syntax"  => 'strrev($str)',
                "example" => 'strrev("Saka") → "akaS"',
            ],
            [
                "fn"      => "strpos()",
                "what"    => "Find the position of a character/word. Returns FALSE if not found.",
                "syntax"  => 'strpos($str, $needle)',
                "example" => 'strpos("Saka","a") → 1  (0-indexed!)',
            ],
            [
                "fn"      => "str_replace()",
                "what"    => "Find and replace — can use arrays to replace many things at once",
                "syntax"  => 'str_replace($find, $replace, $str)',
                "example" => 'str_replace("a","@","Saka") → "S@k@"',
            ],
            [
                "fn"      => "substr()",
                "what"    => "Extract a piece of the string",
                "syntax"  => 'substr($str, $start, $length)',
                "example" => 'substr("Bukayo", 0, 3) → "Buk"',
            ],
            [
                "fn"      => "trim()",
                "what"    => "Remove spaces from start and end",
                "syntax"  => 'trim($str)',
                "example" => 'trim("  hello  ") → "hello"',
            ],
            [
                "fn"      => "str_contains()",
                "what"    => "Check if a string contains another (PHP 8+)",
                "syntax"  => 'str_contains($str, $needle)',
                "example" => 'str_contains("Bukayo","kay") → true',
            ],
            [
                "fn"      => "htmlspecialchars()",
                "what"    => "Convert < > & \" to safe HTML — always use when outputting data",
                "syntax"  => 'htmlspecialchars($str)',
                "example" => 'htmlspecialchars("<b>hi</b>") → "&lt;b&gt;hi&lt;/b&gt;"',
            ],
        ];

        foreach ($refs as $r) {
            echo '
            <div class="ref-card">
                <div class="fn-name">' . $r["fn"] . '</div>
                <p class="fn-what">' . $r["what"] . '</p>
                <code class="fn-syntax">' . htmlspecialchars($r["syntax"]) . '</code>
                <div class="fn-example">' . htmlspecialchars($r["example"]) . '</div>
            </div>';
        }
        ?>
    </div>

</div>
</body>
</html>
