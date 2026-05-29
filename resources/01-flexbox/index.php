<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>01 – Flexbox Basics</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <a class="back" href="../">← Back</a>

    <div class="page-wrapper">
        <h1>Flexbox Basics</h1>
        <p class="intro">
            Flexbox arranges items in <strong>one direction</strong> — a row or a column.
            The parent gets <code>display: flex</code>. The children are the flex items.
        </p>

        <!-- ── SECTION 1: flex-direction ─────────────────────────── -->
        <section class="demo-section">
            <h2>1. flex-direction</h2>
            <p>Controls which direction children flow.</p>

            <div class="label">flex-direction: row (default)</div>
            <div class="demo demo-row">
                <div class="box">A</div>
                <div class="box">B</div>
                <div class="box">C</div>
            </div>

            <div class="label">flex-direction: column</div>
            <div class="demo demo-column">
                <div class="box">A</div>
                <div class="box">B</div>
                <div class="box">C</div>
            </div>
        </section>

        <!-- ── SECTION 2: justify-content ───────────────────────── -->
        <section class="demo-section">
            <h2>2. justify-content</h2>
            <p>Aligns items along the <strong>main axis</strong> (horizontally when row).</p>

            <div class="label">justify-content: flex-start</div>
            <div class="demo demo-row jc-start">
                <div class="box">A</div><div class="box">B</div><div class="box">C</div>
            </div>

            <div class="label">justify-content: center</div>
            <div class="demo demo-row jc-center">
                <div class="box">A</div><div class="box">B</div><div class="box">C</div>
            </div>

            <div class="label">justify-content: flex-end</div>
            <div class="demo demo-row jc-end">
                <div class="box">A</div><div class="box">B</div><div class="box">C</div>
            </div>

            <div class="label">justify-content: space-between</div>
            <div class="demo demo-row jc-between">
                <div class="box">A</div><div class="box">B</div><div class="box">C</div>
            </div>

            <div class="label">justify-content: space-around</div>
            <div class="demo demo-row jc-around">
                <div class="box">A</div><div class="box">B</div><div class="box">C</div>
            </div>
        </section>

        <!-- ── SECTION 3: align-items ───────────────────────────── -->
        <section class="demo-section">
            <h2>3. align-items</h2>
            <p>Aligns items along the <strong>cross axis</strong> (vertically when row).</p>

            <div class="label">align-items: flex-start</div>
            <div class="demo demo-row demo-tall ai-start">
                <div class="box">A</div><div class="box">B</div><div class="box">C</div>
            </div>

            <div class="label">align-items: center</div>
            <div class="demo demo-row demo-tall ai-center">
                <div class="box">A</div><div class="box">B</div><div class="box">C</div>
            </div>

            <div class="label">align-items: flex-end</div>
            <div class="demo demo-row demo-tall ai-end">
                <div class="box">A</div><div class="box">B</div><div class="box">C</div>
            </div>

            <div class="label">align-items: stretch (boxes fill the full height)</div>
            <div class="demo demo-row demo-tall ai-stretch">
                <div class="box box-noheight">A</div>
                <div class="box box-noheight">B</div>
                <div class="box box-noheight">C</div>
            </div>
        </section>

        <!-- ── SECTION 4: gap ───────────────────────────────────── -->
        <section class="demo-section">
            <h2>4. gap</h2>
            <p>Adds space between flex items without using margin.</p>

            <div class="label">gap: 5px</div>
            <div class="demo demo-row" style="gap: 5px;">
                <div class="box">A</div><div class="box">B</div><div class="box">C</div>
            </div>

            <div class="label">gap: 30px</div>
            <div class="demo demo-row" style="gap: 30px;">
                <div class="box">A</div><div class="box">B</div><div class="box">C</div>
            </div>
        </section>

        <!-- ── SECTION 5: flex-wrap ──────────────────────────────── -->
        <section class="demo-section">
            <h2>5. flex-wrap</h2>
            <p>Without wrap, items shrink to fit one line. With wrap, they move to the next line.</p>

            <div class="label">flex-wrap: nowrap — items squish together</div>
            <div class="demo demo-row nowrap">
                <?php for ($i = 1; $i <= 8; $i++) echo "<div class='box'>$i</div>"; ?>
            </div>

            <div class="label">flex-wrap: wrap — items flow to the next row</div>
            <div class="demo demo-row wrap">
                <?php for ($i = 1; $i <= 8; $i++) echo "<div class='box'>$i</div>"; ?>
            </div>
        </section>

        <!-- ── SECTION 6: flex: 1 ────────────────────────────────── -->
        <section class="demo-section">
            <h2>6. flex: 1 — equal width / grow to fill</h2>
            <p>
                <code>flex: 1</code> means "grow and shrink equally, share all available space."
                This is how your FA4 story cards all had equal widths.
            </p>

            <div class="label">All three boxes have flex: 1 — they share space equally</div>
            <div class="demo demo-row" style="gap: 10px;">
                <div class="box flex1">flex: 1</div>
                <div class="box flex1">flex: 1</div>
                <div class="box flex1">flex: 1</div>
            </div>

            <div class="label">flex: 2 on the middle one — it gets double the space</div>
            <div class="demo demo-row" style="gap: 10px;">
                <div class="box flex1">flex: 1</div>
                <div class="box flex2">flex: 2</div>
                <div class="box flex1">flex: 1</div>
            </div>
        </section>

        <!-- ── SECTION 7: margin-left: auto ─────────────────────── -->
        <section class="demo-section">
            <h2>7. margin-left: auto — push to far right</h2>
            <p>
                You used this on <code>.arrow</code> in all your nav cards.
                It pushes all remaining space to the left, shoving the item to the end.
            </p>

            <div class="label">The arrow gets margin-left: auto</div>
            <div class="demo demo-row" style="gap: 15px; padding: 15px; background:#f5f5f5; border-radius:8px;">
                <div class="box" style="background:#2c3e50;">01</div>
                <div style="font-weight:bold; align-self:center;">Card Title</div>
                <div class="arrow-demo">→</div>
            </div>
        </section>

    </div>

</body>
</html>
