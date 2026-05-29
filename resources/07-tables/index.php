<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07 – HTML Tables</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a class="back" href="../">← Back</a>

<div class="page-wrapper">
    <h1>HTML Tables + PHP Data</h1>

    <!-- ── TABLE STRUCTURE EXPLAINED ──────────────────── -->
    <section class="block">
        <h2>1. Table HTML Structure</h2>
        <pre class="code">&lt;table&gt;
    &lt;thead&gt;              &lt;!-- header section --&gt;
        &lt;tr&gt;             &lt;!-- table row --&gt;
            &lt;th&gt;Name&lt;/th&gt;   &lt;!-- header cell (bold + centered by default) --&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;              &lt;!-- body section --&gt;
        &lt;tr&gt;
            &lt;td&gt;Saka&lt;/td&gt;   &lt;!-- data cell --&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;</pre>
    </section>

    <!-- ── BASIC TABLE ─────────────────────────────────── -->
    <section class="block">
        <h2>2. Basic Table — static HTML</h2>
        <table class="basic-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Number</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bukayo Saka</td>
                    <td>Right Wing</td>
                    <td>7</td>
                </tr>
                <tr>
                    <td>Declan Rice</td>
                    <td>Central Mid</td>
                    <td>41</td>
                </tr>
                <tr>
                    <td>Martin Odegaard</td>
                    <td>Attacking Mid</td>
                    <td>8</td>
                </tr>
            </tbody>
        </table>
    </section>

    <!-- ── PHP-GENERATED TABLE ─────────────────────────── -->
    <section class="block">
        <h2>3. PHP-generated Table — data comes from a PHP array</h2>
        <p>Same output as above, but the rows are built by PHP using a foreach loop.</p>

        <?php
        /* Array of associative arrays — each one is a row */
        $squad = [
            ["name" => "Bukayo Saka",     "position" => "Right Wing",      "num" => 7,  "goals" => 20, "assists" => 14],
            ["name" => "Declan Rice",      "position" => "Central Mid",     "num" => 41, "goals" => 8,  "assists" => 6],
            ["name" => "Martin Odegaard",  "position" => "Attacking Mid",   "num" => 8,  "goals" => 12, "assists" => 11],
            ["name" => "William Saliba",   "position" => "Centre Back",     "num" => 12, "goals" => 3,  "assists" => 1],
            ["name" => "David Raya",       "position" => "Goalkeeper",      "num" => 22, "goals" => 0,  "assists" => 0],
            ["name" => "Leandro Trossard", "position" => "Left Wing",       "num" => 19, "goals" => 10, "assists" => 7],
        ];
        ?>

        <table class="data-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Shirt</th>
                    <th>Goals</th>
                    <th>Assists</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($squad as $i => $player) {
                    /* $i is the loop index (0-based), so +1 to start from 1 */
                    echo "<tr>";
                    echo "<td>" . ($i + 1) . "</td>";
                    echo "<td class='name-col'>" . htmlspecialchars($player["name"]) . "</td>";
                    echo "<td>" . htmlspecialchars($player["position"]) . "</td>";
                    echo "<td>" . $player["num"] . "</td>";
                    echo "<td class='stat'>" . $player["goals"] . "</td>";
                    echo "<td class='stat'>" . $player["assists"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

    <!-- ── CSS SELECTORS FOR TABLES ───────────────────── -->
    <section class="block">
        <h2>4. Useful CSS selectors for tables</h2>
        <pre class="code">/* Remove gap between cell borders */
table { border-collapse: collapse; }

/* Every other row gets a light background (zebra striping) */
tbody tr:nth-child(even) { background: #f9f9f9; }
tbody tr:nth-child(odd)  { background: white; }

/* Highlight row on hover */
tbody tr:hover { background: #fdecea; }

/* Target only the first column */
td:first-child { font-weight: bold; }

/* Target only the last column */
td:last-child { color: gray; }

/* Target the 3rd column */
td:nth-child(3) { text-align: right; }</pre>

        <h3 style="font-size:15px; margin-top: 8px;">Live example — notice the zebra stripes and hover:</h3>
        <table class="style-demo-table">
            <thead><tr><th>Col 1</th><th>Col 2</th><th>Col 3</th></tr></thead>
            <tbody>
                <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo "<tr><td>Row $i, A</td><td>Row $i, B</td><td>Row $i, C</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

    <!-- ── COLSPAN / ROWSPAN ────────────────────────────── -->
    <section class="block">
        <h2>5. colspan and rowspan — merging cells</h2>
        <pre class="code">&lt;td colspan="2"&gt;spans 2 columns&lt;/td&gt;
&lt;td rowspan="2"&gt;spans 2 rows&lt;/td&gt;</pre>
        <table class="merge-table">
            <thead>
                <tr>
                    <th colspan="3">Season Stats (spans 3 cols)</th>
                </tr>
                <tr>
                    <th>Name</th><th>Goals</th><th>Assists</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="2" class="rowspan-cell">Arsenal<br>(spans 2 rows)</td>
                    <td>Saka: 20</td>
                    <td>Saka: 14</td>
                </tr>
                <tr>
                    <td>Rice: 8</td>
                    <td>Rice: 6</td>
                </tr>
            </tbody>
        </table>
    </section>

</div>
</body>
</html>
