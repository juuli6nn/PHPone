<?php
/* ── fixtures.php — HTML Table page ────────────────────────
 * Demonstrates HTML tables built with PHP data.
 * Shows: border-collapse, thead/tbody, nth-child, conditional row classes.
 */

$pageTitle = "Fixtures — Arsenal Mini Site";
require 'header.php';

/* Fixtures data — array of associative arrays */
$fixtures = [
    ["opponent" => "Chelsea",     "venue" => "Home", "score" => "3-1", "result" => "W"],
    ["opponent" => "Liverpool",   "venue" => "Away", "score" => "2-2", "result" => "D"],
    ["opponent" => "Man City",    "venue" => "Home", "score" => "1-0", "result" => "W"],
    ["opponent" => "Tottenham",   "venue" => "Away", "score" => "2-0", "result" => "W"],
    ["opponent" => "Man United",  "venue" => "Home", "score" => "1-2", "result" => "L"],
    ["opponent" => "Newcastle",   "venue" => "Away", "score" => "3-3", "result" => "D"],
    ["opponent" => "Brentford",   "venue" => "Home", "score" => "4-0", "result" => "W"],
];

/* Count results — using PHP to compute from the data */
$wins   = 0;
$draws  = 0;
$losses = 0;

foreach ($fixtures as $f) {
    /* match is like a switch — matches the value of $f["result"] */
    match ($f["result"]) {
        "W" => $wins++,
        "D" => $draws++,
        "L" => $losses++,
        default => null,
    };
}
?>

    <div class="container">
        <div class="page-header">
            <h1>Fixtures</h1>
            <p class="page-sub">Recent Results</p>
        </div>

        <!-- ── RECORD SUMMARY ────────────────────────────────── -->
        <div class="record-row">
            <div class="record-item win-item">
                <span class="record-val"><?php echo $wins; ?></span>
                <span class="record-lbl">Wins</span>
            </div>
            <div class="record-item draw-item">
                <span class="record-val"><?php echo $draws; ?></span>
                <span class="record-lbl">Draws</span>
            </div>
            <div class="record-item loss-item">
                <span class="record-val"><?php echo $losses; ?></span>
                <span class="record-lbl">Losses</span>
            </div>
        </div>

        <!-- ── FIXTURES TABLE ────────────────────────────────── -->
        <div class="table-wrap">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Opponent</th>
                        <th>Venue</th>
                        <th>Score</th>
                        <th>Result</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($fixtures as $i => $match) {
                        /*
                         * Conditional row class: add "win-row", "draw-row", or "loss-row"
                         * based on the result — changes the row background color via CSS
                         */
                        $rowClass = match ($match["result"]) {
                            "W" => "win-row",
                            "D" => "draw-row",
                            "L" => "loss-row",
                            default => "",
                        };

                        echo '<tr class="' . $rowClass . '">';
                        echo "<td>" . ($i + 1) . "</td>";
                        echo "<td class='opponent'>" . htmlspecialchars($match["opponent"]) . "</td>";
                        echo "<td>" . $match["venue"] . "</td>";
                        echo "<td class='score'>" . $match["score"] . "</td>";
                        echo '<td><span class="result-badge result-' . strtolower($match["result"]) . '">' . $match["result"] . '</span></td>';
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

<?php require 'footer.php'; ?>
