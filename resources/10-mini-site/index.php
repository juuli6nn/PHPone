<?php
/* ── index.php — Squad page ─────────────────────────────
 * Concepts demonstrated:
 *   - PHP require (header/footer)
 *   - Array of associative arrays
 *   - foreach loop building HTML
 *   - CSS Grid card layout
 *   - Hover effects
 *   - Responsive @media query
 */

$pageTitle = "Squad — Arsenal Mini Site";
require 'header.php';
?>

    <div class="container">
        <div class="page-header">
            <h1>The Squad</h1>
            <p class="page-sub">2025/26 Season</p>
        </div>

        <?php
        /* ── DATA ────────────────────────────────────────────────
         * Array of associative arrays — each player is one array.
         * Keys: name, position, number, goals, assists, nationality
         */
        $squad = [
            ["name" => "David Raya",         "position" => "GK",  "number" => 22, "goals" => 0,  "assists" => 0,  "nat" => "Spain"],
            ["name" => "Ben White",           "position" => "RB",  "number" => 4,  "goals" => 2,  "assists" => 5,  "nat" => "England"],
            ["name" => "William Saliba",      "position" => "CB",  "number" => 12, "goals" => 3,  "assists" => 1,  "nat" => "France"],
            ["name" => "Gabriel Magalhães",   "position" => "CB",  "number" => 6,  "goals" => 4,  "assists" => 1,  "nat" => "Brazil"],
            ["name" => "Jurrien Timber",      "position" => "LB",  "number" => 31, "goals" => 2,  "assists" => 4,  "nat" => "Netherlands"],
            ["name" => "Declan Rice",         "position" => "CM",  "number" => 41, "goals" => 8,  "assists" => 6,  "nat" => "England"],
            ["name" => "Martin Odegaard",     "position" => "AM",  "number" => 8,  "goals" => 12, "assists" => 11, "nat" => "Norway"],
            ["name" => "Bukayo Saka",         "position" => "RW",  "number" => 7,  "goals" => 20, "assists" => 14, "nat" => "England"],
            ["name" => "Leandro Trossard",    "position" => "LW",  "number" => 19, "goals" => 10, "assists" => 7,  "nat" => "Belgium"],
            ["name" => "Gabriel Martinelli",  "position" => "LW",  "number" => 11, "goals" => 9,  "assists" => 5,  "nat" => "Brazil"],
            ["name" => "Viktor Gyökeres",     "position" => "ST",  "number" => 9,  "goals" => 28, "assists" => 8,  "nat" => "Sweden"],
        ];

        /* ── SQUAD GRID ────────────────────────────────────────
         * CSS Grid is applied to .squad-grid via style.css
         * Each iteration of foreach builds one player card
         */
        ?>
        <div class="squad-grid">
            <?php foreach ($squad as $player):
                /*
                 * Ternary operator: (condition) ? "true value" : "false value"
                 * If goals >= 10, add the 'top-scorer' class for special styling
                 */
                $scorerClass = ($player["goals"] >= 10) ? " top-scorer" : "";
            ?>
                <div class="player-card<?php echo $scorerClass; ?>">
                    <!-- shirt number badge -->
                    <div class="shirt-number"><?php echo $player["number"]; ?></div>

                    <div class="player-info">
                        <h3 class="player-name"><?php echo htmlspecialchars($player["name"]); ?></h3>
                        <p class="player-pos"><?php echo $player["position"]; ?> · <?php echo htmlspecialchars($player["nat"]); ?></p>
                    </div>

                    <div class="player-stats">
                        <div class="stat-item">
                            <span class="stat-val"><?php echo $player["goals"]; ?></span>
                            <span class="stat-lbl">Goals</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-val"><?php echo $player["assists"]; ?></span>
                            <span class="stat-lbl">Assists</span>
                        </div>
                    </div>

                    <?php if ($player["goals"] >= 10): ?>
                        <!-- Only shown on top scorers (goals >= 10) — conditional HTML in PHP -->
                        <div class="badge">⭐ Top Scorer</div>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- ── SUMMARY STATS ────────────────────────────────────
         * PHP can compute values from the array:
         * array_sum() adds up all values in an array
         * array_column() extracts one column from a 2D array
         */
        <?php
        $totalGoals   = array_sum(array_column($squad, "goals"));
        $totalAssists = array_sum(array_column($squad, "assists"));
        $playerCount  = count($squad);

        /* Find top scorer using a foreach loop */
        $topScorer = $squad[0];
        foreach ($squad as $p) {
            if ($p["goals"] > $topScorer["goals"]) {
                $topScorer = $p;
            }
        }
        ?>
        <div class="summary-bar">
            <div class="summary-item">
                <span class="summary-val"><?php echo $playerCount; ?></span>
                <span class="summary-lbl">Players</span>
            </div>
            <div class="summary-item">
                <span class="summary-val"><?php echo $totalGoals; ?></span>
                <span class="summary-lbl">Total Goals</span>
            </div>
            <div class="summary-item">
                <span class="summary-val"><?php echo $totalAssists; ?></span>
                <span class="summary-lbl">Total Assists</span>
            </div>
            <div class="summary-item">
                <span class="summary-val"><?php echo htmlspecialchars($topScorer["name"]); ?></span>
                <span class="summary-lbl">Top Scorer (<?php echo $topScorer["goals"]; ?> goals)</span>
            </div>
        </div>

    </div>

<?php require 'footer.php'; ?>
