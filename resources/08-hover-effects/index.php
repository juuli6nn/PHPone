<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>08 – Hover Effects</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a class="back" href="../">← Back</a>

<div class="page-wrapper">
    <h1>Hover Effects &amp; CSS Transitions</h1>
    <p class="intro">
        Hover effects use the <code>:hover</code> pseudo-class and <code>transition</code> to smoothly
        animate CSS property changes. All effects on this page use <strong>no JavaScript</strong>.
    </p>

    <!-- ── THE TRANSITION PROPERTY ────────────────────── -->
    <section class="block">
        <h2>1. The transition property</h2>
        <pre class="code">/* Syntax: transition: property duration timing-function; */
.card {
    background: white;
    transition: background 0.3s ease;   /* animate 'background' over 0.3 seconds */
}

.card:hover {
    background: red;   /* this change will be animated smoothly */
}

/* Animate multiple properties at once */
.card {
    transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
}

/* Animate EVERYTHING */
.card {
    transition: all 0.3s ease;
}</pre>
        <p>
            Without <code>transition</code>, changes happen instantly.
            With it, the browser smoothly animates between the two states.
        </p>
    </section>

    <!-- ── LIVE DEMOS ──────────────────────────────────── -->
    <section class="block">
        <h2>2. Hover the cards to see each effect</h2>

        <div class="effects-grid">

            <!-- translateY: lifts the card up -->
            <div class="effect-card lift">
                <div class="effect-label">translateY(-8px)</div>
                <div class="effect-code">transform: translateY(-8px);</div>
                <p>Used in all your story cards and nav cards.</p>
            </div>

            <!-- scale: makes the element bigger -->
            <div class="effect-card scale">
                <div class="effect-label">scale(1.05)</div>
                <div class="effect-code">transform: scale(1.05);</div>
                <p>Grows to 105% of its size. Good for images.</p>
            </div>

            <!-- background color change -->
            <div class="effect-card bg-change">
                <div class="effect-label">Background color</div>
                <div class="effect-code">background-color: #E80107;</div>
                <p>Used on all your nav cards — white to red on hover.</p>
            </div>

            <!-- box-shadow -->
            <div class="effect-card shadow">
                <div class="effect-label">box-shadow</div>
                <div class="effect-code">box-shadow: 0 8px 20px rgba(0,0,0,0.2);</div>
                <p>Adds/changes shadow depth on hover.</p>
            </div>

            <!-- border change -->
            <div class="effect-card border-change">
                <div class="effect-label">border-color</div>
                <div class="effect-code">border-color: #E80107;</div>
                <p>Border changes color without layout shift.</p>
            </div>

            <!-- opacity fade -->
            <div class="effect-card fade">
                <div class="effect-label">opacity</div>
                <div class="effect-code">opacity: 0.6;</div>
                <p>Fades the element when hovered (inverse — less visible).</p>
            </div>

        </div>
    </section>

    <!-- ── IMAGE ZOOM ────────────────────────────────────── -->
    <section class="block">
        <h2>3. Image zoom inside a container</h2>
        <p>
            You used this in FA4 for the story card images.
            The trick: set <code>overflow: hidden</code> on the container so the zoomed image clips.
        </p>
        <pre class="code">.image-wrapper {
    width: 200px;
    height: 150px;
    overflow: hidden;   /* clips the image so it doesn't overflow when scaled */
}

.image-wrapper img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.image-wrapper:hover img {
    transform: scale(1.1);   /* zoom in on hover */
}</pre>

        <div class="image-demo">
            <div class="image-wrapper">
                <!-- Using a colored placeholder div instead of real image for demo -->
                <div class="fake-image">Hover me</div>
            </div>
            <p>The red box represents an image. Hover to see it zoom inside its container.</p>
        </div>
    </section>

    <!-- ── COLOR CHANGE ON CHILDREN ─────────────────────── -->
    <section class="block">
        <h2>4. Changing child elements on parent hover</h2>
        <p>
            You used this in FA4 — when you hover the card, the arrow and number also turn white.
            You target the child inside the parent's <code>:hover</code>.
        </p>
        <pre class="code">/* When the card is hovered, everything inside also gets styled */
.card:hover .card-number {
    color: white;
}

.card:hover .arrow {
    color: white;
}</pre>

        <div class="child-demo">
            <div class="parent-card">
                <span class="num">07</span>
                <div class="texts">
                    <span class="card-name">Hover this card</span>
                    <span class="card-sub">The number and arrow also change</span>
                </div>
                <span class="arr">→</span>
            </div>
        </div>
    </section>

    <!-- ── TRANSITION TIMING ─────────────────────────────── -->
    <section class="block">
        <h2>5. Transition timing functions</h2>
        <pre class="code">transition: transform 0.4s ease;        /* slow start and end (most natural) */
transition: transform 0.4s ease-in;     /* slow start, fast end               */
transition: transform 0.4s ease-out;    /* fast start, slow end               */
transition: transform 0.4s linear;      /* constant speed                     */
transition: transform 0.4s ease-in-out; /* slow both ends — same as ease      */</pre>

        <div class="timing-demos">
            <?php
            $timings = ["ease", "ease-in", "ease-out", "linear", "ease-in-out"];
            foreach ($timings as $t) {
                echo '<div class="timing-card" style="--timing: ' . $t . '">
                    <span>' . $t . '</span>
                </div>';
            }
            ?>
        </div>
    </section>

</div>
</body>
</html>
