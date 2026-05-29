<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03 – PHP Arrays & Foreach</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a class="back" href="../">← Back</a>

<div class="page-wrapper">
    <h1>PHP Arrays &amp; Foreach</h1>

    <?php
    /* ──────────────────────────────────────────────────────────
     * INDEXED ARRAY — items accessed by number (0, 1, 2 ...)
     * Two ways to write the same thing:
     * $arr = array("a", "b", "c");   ← old syntax
     * $arr = ["a", "b", "c"];        ← modern shorthand (same thing)
     * ────────────────────────────────────────────────────────── */
    $players = ["Saka", "Rice", "Odegaard", "Raya", "Saliba"];
    ?>

    <section class="block">
        <h2>1. Indexed Array</h2>
        <pre class="code">$players = ["Saka", "Rice", "Odegaard", "Raya", "Saliba"];</pre>
        <p>Access one item by its index number (starts at 0):</p>
        <pre class="code">echo $players[0];  // "Saka"
echo $players[2];  // "Odegaard"</pre>
        <div class="output">
            <?php
            /* echo outputs text/HTML directly to the page
             * . (dot) joins strings together                  */
            echo "<p>$players[0] &nbsp;→&nbsp; index 0</p>";
            echo "<p>$players[2] &nbsp;→&nbsp; index 2</p>";
            ?>
        </div>
    </section>

    <!-- ── FOREACH ──────────────────────────────────────────── -->
    <section class="block">
        <h2>2. foreach — loop through every item</h2>
        <pre class="code">foreach ($players as $player) {
    echo "&lt;li&gt;" . $player . "&lt;/li&gt;";
}</pre>
        <p>
            Each time the loop runs, <code>$player</code> becomes the next item in the array.
            The <code>.</code> (dot) concatenates (joins) strings.
        </p>
        <ul class="output-list">
            <?php
            foreach ($players as $player) {
                /* htmlspecialchars() converts < > & to safe HTML
                 * Always use it when displaying user-supplied data */
                echo "<li>" . htmlspecialchars($player) . "</li>";
            }
            ?>
        </ul>
    </section>

    <!-- ── FOREACH WITH INDEX ──────────────────────────────── -->
    <section class="block">
        <h2>3. foreach with index ($key => $value)</h2>
        <pre class="code">foreach ($players as $index => $player) {
    echo $index . ". " . $player;
}</pre>
        <p><code>$index</code> is the position number (0, 1, 2…). <code>$player</code> is the value.</p>
        <div class="output">
            <?php
            foreach ($players as $index => $player) {
                echo "<p>" . $index . " &rarr; " . htmlspecialchars($player) . "</p>";
            }
            ?>
        </div>
    </section>

    <!-- ── ASSOCIATIVE ARRAY ───────────────────────────────── -->
    <section class="block">
        <h2>4. Associative Array — key =&gt; value pairs</h2>
        <pre class="code">$player = [
    "name"     => "Bukayo Saka",
    "position" => "Right Wing",
    "number"   => 7,
    "goals"    => 20
];

echo $player["name"];      // "Bukayo Saka"
echo $player["goals"];     // 20</pre>
        <p>Instead of numbers, you use named keys to access values.</p>

        <?php
        /* Associative array: each key has a name, not just a number */
        $player = [
            "name"     => "Bukayo Saka",
            "position" => "Right Wing",
            "number"   => 7,
            "goals"    => 20
        ];
        ?>

        <div class="output">
            <?php
            /* Loop through the associative array — $key and $value */
            foreach ($player as $key => $value) {
                echo "<p><strong>$key:</strong> $value</p>";
            }
            ?>
        </div>
    </section>

    <!-- ── ARRAY OF ARRAYS ─────────────────────────────────── -->
    <section class="block">
        <h2>5. Array of associative arrays — used to build tables</h2>
        <p>
            This is the most common pattern in your projects.
            An outer array holds multiple items, each item is an associative array (one row of data).
        </p>
        <pre class="code">$squad = [
    ["name" => "Saka",    "position" => "RW", "goals" => 20],
    ["name" => "Rice",    "position" => "CM", "goals" => 8],
    ["name" => "Odegaard","position" => "AM", "goals" => 12],
];</pre>

        <?php
        /* Array of associative arrays — each item is a player row */
        $squad = [
            ["name" => "Saka",     "position" => "Right Wing",      "goals" => 20],
            ["name" => "Rice",     "position" => "Central Mid",      "goals" => 8],
            ["name" => "Odegaard", "position" => "Attacking Mid",    "goals" => 12],
            ["name" => "Saliba",   "position" => "Centre Back",      "goals" => 3],
            ["name" => "Raya",     "position" => "Goalkeeper",       "goals" => 0],
        ];
        ?>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Goals</th>
                </tr>
            </thead>
            <tbody>
                <?php
                /* foreach loop builds one table row per player */
                foreach ($squad as $index => $p) {
                    echo "<tr>";
                    echo "<td>" . ($index + 1) . "</td>";             /* +1 so it starts at 1 not 0 */
                    echo "<td>" . htmlspecialchars($p["name"]) . "</td>";
                    echo "<td>" . htmlspecialchars($p["position"]) . "</td>";
                    echo "<td>" . $p["goals"] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </section>

    <!-- ── COUNT / ARRAY FUNCTIONS ─────────────────────────── -->
    <section class="block">
        <h2>6. Useful array functions</h2>
        <pre class="code">count($players)     // number of items in array
in_array("Saka", $players)  // true/false — does "Saka" exist?
array_push($players, "Trossard")  // add to end of array
sort($players)      // sort alphabetically (modifies original)</pre>

        <?php
        $count = count($players);
        $hasSaka = in_array("Saka", $players);

        /* The ternary operator: (condition) ? "if true" : "if false" */
        $sakaText = $hasSaka ? "Yes, Saka is in the array." : "No, Saka not found.";
        ?>

        <div class="output">
            <p>count($players) = <strong><?php echo $count; ?></strong></p>
            <p>in_array("Saka") → <strong><?php echo $sakaText; ?></strong></p>
        </div>
    </section>

</div>
</body>
</html>
