<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02 – CSS Grid</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a class="back" href="../">← Back</a>

    <div class="page-wrapper">
        <h1>CSS Grid</h1>
        <p class="intro">
            Grid arranges items in <strong>two dimensions</strong> — rows AND columns at the same time.
            Use Grid when you need a real layout (gallery, dashboard).
            Use Flex when arranging items in a single row or column.
        </p>

        <!-- ── SECTION 1: Basic 3-column grid ─────────────────── -->
        <section class="demo-section">
            <h2>1. grid-template-columns: repeat(3, 1fr)</h2>
            <p>
                <code>repeat(3, 1fr)</code> = make 3 columns, each 1 fraction of the available space.
                <code>1fr</code> is like <code>flex: 1</code> but for grid.
                All columns share space equally.
            </p>

            <div class="label">display: grid; grid-template-columns: repeat(3, 1fr); gap: 15px;</div>
            <div class="grid-3">
                <?php for ($i = 1; $i <= 6; $i++) echo "<div class='cell'>$i</div>"; ?>
            </div>
        </section>

        <!-- ── SECTION 2: Different column sizes ─────────────── -->
        <section class="demo-section">
            <h2>2. Mixed column sizes</h2>
            <p>
                You can mix fixed widths (<code>px</code>) and fractions (<code>fr</code>).
                The sidebar is 200px, the main content gets the rest.
            </p>

            <div class="label">grid-template-columns: 200px 1fr 1fr;</div>
            <div class="grid-mixed">
                <div class="cell sidebar">Sidebar<br>200px</div>
                <div class="cell">Main (1fr)</div>
                <div class="cell">Main (1fr)</div>
                <div class="cell sidebar">Sidebar<br>200px</div>
                <div class="cell">Content</div>
                <div class="cell">Content</div>
            </div>
        </section>

        <!-- ── SECTION 3: auto-fill minmax ───────────────────── -->
        <section class="demo-section">
            <h2>3. auto-fill + minmax — responsive grid with no media queries</h2>
            <p>
                <code>repeat(auto-fill, minmax(180px, 1fr))</code><br>
                → "Fill as many columns as you can, each at least 180px wide, max 1fr."<br>
                Resize the window and the number of columns changes automatically.
            </p>

            <div class="label">grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));</div>
            <div class="grid-auto">
                <?php
                $cards = ["Saka", "Rice", "Odegaard", "Raya", "Saliba", "Gabriel", "Martinelli", "Timber"];
                foreach ($cards as $name) {
                    echo "<div class='player-card'>$name</div>";
                }
                ?>
            </div>
        </section>

        <!-- ── SECTION 4: grid-column span ───────────────────── -->
        <section class="demo-section">
            <h2>4. grid-column: span 2 — an item that takes multiple columns</h2>
            <p>
                <code>grid-column: span 2</code> makes one item stretch across 2 columns.
                Useful for featured/hero items.
            </p>

            <div class="label">First item: grid-column: span 2</div>
            <div class="grid-3" style="gap: 10px;">
                <div class="cell span2">Featured — spans 2 columns</div>
                <div class="cell">Normal</div>
                <div class="cell">Normal</div>
                <div class="cell">Normal</div>
                <div class="cell">Normal</div>
                <div class="cell">Normal</div>
            </div>
        </section>

        <!-- ── SECTION 5: Flex vs Grid comparison ────────────── -->
        <section class="demo-section">
            <h2>5. Flex vs Grid — side by side</h2>

            <div class="compare">
                <div class="compare-block">
                    <div class="compare-label">Flexbox — items flow in a row, wrap if needed</div>
                    <div class="flex-example">
                        <?php for ($i = 1; $i <= 5; $i++) echo "<div class='cell'>$i</div>"; ?>
                    </div>
                    <code>display: flex; flex-wrap: wrap; gap: 10px;</code>
                    <p>Items don't align to a column — they just flow.</p>
                </div>

                <div class="compare-block">
                    <div class="compare-label">Grid — items snap to columns</div>
                    <div class="grid-compare">
                        <?php for ($i = 1; $i <= 5; $i++) echo "<div class='cell'>$i</div>"; ?>
                    </div>
                    <code>display: grid; grid-template-columns: repeat(3, 1fr); gap: 10px;</code>
                    <p>Items align to a strict 3-column structure.</p>
                </div>
            </div>
        </section>

    </div>

</body>
</html>
