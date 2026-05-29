<?php
/* ── stats.php — String Functions page ─────────────────────
 * Demonstrates PHP string functions on real player name data.
 * Same concept as FA4/act2.php but with comments explaining each step.
 */

$pageTitle = "Stats — Arsenal Mini Site";
require 'header.php';

/* The names we'll run string operations on */
$players = ["Bukayo Saka", "Declan Rice", "Martin Odegaard", "William Saliba", "David Raya"];
?>

    <div class="container">
        <div class="page-header">
            <h1>String Stats</h1>
            <p class="page-sub">PHP string functions applied to player names</p>
        </div>

        <!-- ── STRING FUNCTION TABLE ──────────────────────────── -->
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>strlen()</th>
                        <th>strtoupper()</th>
                        <th>strrev()</th>
                        <th>strpos "a"</th>
                        <th>str_replace vowels→*</th>
                        <th>substr(0,6)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($players as $name) {
                        /* strlen: count characters including spaces */
                        $len = strlen($name);

                        /* strtoupper: every character becomes uppercase */
                        $upper = strtoupper($name);

                        /* strrev: reverse the entire string character by character */
                        $rev = strrev($name);

                        /* strpos: find position of 'a' (case-sensitive)
                         * Returns false if not found — use !== false to check */
                        $pos = strpos($name, 'a');
                        $posText = ($pos !== false) ? "pos " . $pos : "–";

                        /* str_replace with array of find targets
                         * Replaces all vowels with * */
                        $noVowels = str_replace(['a','e','i','o','u','A','E','I','O','U'], '*', $name);

                        /* substr: extract part of string
                         * (string, start index, length)
                         * substr("Bukayo Saka", 0, 6) → "Bukayo" */
                        $sub = substr($name, 0, 6);

                        echo "<tr>";
                        echo "<td class='name-td'>" . htmlspecialchars($name) . "</td>";
                        echo "<td>" . $len . "</td>";
                        echo "<td>" . htmlspecialchars($upper) . "</td>";
                        echo "<td>" . htmlspecialchars($rev) . "</td>";
                        echo "<td>" . $posText . "</td>";
                        echo "<td>" . htmlspecialchars($noVowels) . "</td>";
                        echo "<td>" . htmlspecialchars($sub) . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <!-- ── EXPLANATION CARDS ──────────────────────────────── -->
        <div class="explanation-grid">
            <?php
            $funcs = [
                ["fn" => "strlen(\$name)",            "result" => 'strlen("Bukayo Saka") → 11'],
                ["fn" => "strtoupper(\$name)",         "result" => 'strtoupper("saka") → "SAKA"'],
                ["fn" => "strrev(\$name)",             "result" => 'strrev("Saka") → "akaS"'],
                ["fn" => "strpos(\$name, \"a\")",      "result" => 'strpos("Saka","a") → 1 (0-indexed)'],
                ["fn" => "str_replace(array, \"*\", \$name)", "result" => 'str_replace(vowels,"*","Saka") → "S*k*"'],
                ["fn" => "substr(\$name, 0, 6)",       "result" => 'substr("Bukayo Saka",0,6) → "Bukayo"'],
            ];
            foreach ($funcs as $f) {
                echo '
                <div class="fn-card">
                    <code class="fn-name">' . htmlspecialchars($f["fn"]) . '</code>
                    <p class="fn-result">' . htmlspecialchars($f["result"]) . '</p>
                </div>';
            }
            ?>
        </div>
    </div>

<?php require 'footer.php'; ?>
