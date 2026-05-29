<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09 – CSS Position</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- This back button uses position: fixed — scroll down and it stays in view -->
<a class="back" href="../">← Back</a>

<div class="page-wrapper">
    <h1>CSS Position</h1>
    <p class="intro">
        The <code>position</code> property controls where an element is placed and how it interacts with
        surrounding content. You used <code>position: fixed</code> for the back button in FA3.
    </p>

    <!-- ── THE 5 POSITION VALUES ──────────────────────── -->
    <section class="block">
        <h2>The 5 position values</h2>

        <div class="pos-table">
            <div class="pos-row header-row">
                <div>Value</div>
                <div>What it does</div>
                <div>top/left/right/bottom</div>
            </div>
            <div class="pos-row">
                <div><code>static</code></div>
                <div>Default. Elements flow normally in the page.</div>
                <div>Ignored</div>
            </div>
            <div class="pos-row">
                <div><code>relative</code></div>
                <div>Moves <em>relative to its normal position</em>. Still takes up space in the flow.</div>
                <div>Work from where it normally sits</div>
            </div>
            <div class="pos-row">
                <div><code>absolute</code></div>
                <div>Taken out of normal flow. Positioned relative to nearest <code>position: relative</code> ancestor.</div>
                <div>Work from the ancestor's corner</div>
            </div>
            <div class="pos-row">
                <div><code>fixed</code></div>
                <div>Taken out of flow. Stays fixed on the screen — doesn't move when you scroll.</div>
                <div>Work from the viewport corner</div>
            </div>
            <div class="pos-row">
                <div><code>sticky</code></div>
                <div>Behaves like relative until you scroll past it, then sticks like fixed.</div>
                <div>Used for sticky headers</div>
            </div>
        </div>
    </section>

    <!-- ── STATIC ──────────────────────────────────────── -->
    <section class="block">
        <h2>1. static (default)</h2>
        <pre class="code">/* This is the default — no position property needed */
.box { background: red; }

/* top/left have NO effect on static elements */
.box { position: static; top: 50px; }  /* top: 50px is IGNORED */</pre>
        <div class="demo-area">
            <div class="static-box">Static</div>
            <div class="static-box">Static</div>
            <div class="static-box">Static</div>
        </div>
    </section>

    <!-- ── RELATIVE ────────────────────────────────────── -->
    <section class="block">
        <h2>2. relative</h2>
        <pre class="code">/* Moves the element from WHERE IT NORMALLY WOULD BE */
.box {
    position: relative;
    top: 20px;    /* moves 20px DOWN from normal position  */
    left: 30px;   /* moves 30px RIGHT from normal position */
}
/* The space it would have taken is STILL RESERVED (gap remains) */</pre>
        <div class="demo-area">
            <div class="rel-box">Normal</div>
            <div class="rel-box shifted">Shifted (relative, top:20px left:30px)</div>
            <div class="rel-box">Normal</div>
        </div>
    </section>

    <!-- ── ABSOLUTE ────────────────────────────────────── -->
    <section class="block">
        <h2>3. absolute</h2>
        <pre class="code">/* Parent needs position: relative to be the anchor */
.parent {
    position: relative;  /* becomes the anchor for absolute children */
    height: 200px;
}

/* Child is positioned from the parent's top-left corner */
.badge {
    position: absolute;
    top: 10px;     /* 10px from parent's top                */
    right: 10px;   /* 10px from parent's right              */
}

/* Without a relative ancestor, it positions from the page itself */</pre>

        <div class="abs-parent">
            Parent (position: relative)
            <div class="abs-child top-right">Top Right</div>
            <div class="abs-child bottom-left">Bottom Left</div>
            <div class="abs-child center">Center</div>
        </div>
    </section>

    <!-- ── FIXED ───────────────────────────────────────── -->
    <section class="block">
        <h2>4. fixed — the back button on this page is fixed</h2>
        <pre class="code">/* Stays visible even when page scrolls */
.back-button {
    position: fixed;
    top: 16px;     /* always 16px from top of screen      */
    left: 16px;    /* always 16px from left of screen     */
    z-index: 100;  /* sit above other content             */
}

/* You used this in FA3 for the return button */</pre>
        <p>Scroll up and down — the "← Back" button in the top-left stays in place. That's <code>position: fixed</code>.</p>
    </section>

    <!-- ── STICKY ──────────────────────────────────────── -->
    <section class="block">
        <h2>5. sticky — sticks when you reach it while scrolling</h2>
        <pre class="code">/* Acts like relative until you scroll past the threshold */
.sticky-header {
    position: sticky;
    top: 0;          /* stick to top of viewport once scrolled to it */
    background: white;
    z-index: 10;
}</pre>
        <div class="sticky-demo">
            <div class="sticky-header-demo">↑ This header is sticky — scroll inside this box</div>
            <?php for ($i = 1; $i <= 12; $i++) echo "<div class='scroll-row'>Row $i — scroll to see sticky header stay</div>"; ?>
        </div>
    </section>

    <!-- ── Z-INDEX ─────────────────────────────────────── -->
    <section class="block">
        <h2>6. z-index — stacking order</h2>
        <pre class="code">/* z-index only works on positioned elements (not static) */
.front { position: relative; z-index: 10; }  /* appears on top  */
.back  { position: relative; z-index: 1;  }  /* appears behind  */

/* Higher number = in front. Default is 0 */</pre>
        <div class="z-demo">
            <div class="z-box z1">z-index: 1</div>
            <div class="z-box z5">z-index: 5</div>
            <div class="z-box z10">z-index: 10</div>
        </div>
    </section>

</div>
</body>
</html>
