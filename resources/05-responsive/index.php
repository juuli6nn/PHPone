<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- viewport meta is REQUIRED for responsive design to work on phones -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05 – Responsive Design</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<a class="back" href="../">← Back</a>

<div class="page-wrapper">
    <h1>Responsive Design &amp; Media Queries</h1>
    <p class="intro">
        Responsive design means your page looks good on all screen sizes.
        <strong>Media queries</strong> let you write CSS that only applies at certain widths.
        Resize this browser window to see the layout change.
    </p>

    <!-- ── MEDIA QUERY SYNTAX ───────────────────────────── -->
    <section class="block">
        <h2>1. The @media Syntax</h2>
        <pre class="code">/* Normal CSS — applies to ALL screen sizes */
.container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}

/* TABLET — applies only when screen is 768px wide or LESS */
@media (max-width: 768px) {
    .container {
        grid-template-columns: repeat(2, 1fr);
    }
}

/* MOBILE — applies only when screen is 480px wide or LESS */
@media (max-width: 480px) {
    .container {
        grid-template-columns: 1fr;  /* single column */
    }
}</pre>
        <p>
            Breakpoints are just numbers you pick. Common ones:
            <strong>1200px</strong> (large desktop),
            <strong>768px</strong> (tablet),
            <strong>480px</strong> (mobile).
        </p>
    </section>

    <!-- ── LIVE DEMO: responsive grid ─────────────────────── -->
    <section class="block">
        <h2>2. Live Demo — resize the window to see this change</h2>

        <div class="responsive-indicator">
            <span class="desktop-label">Desktop: 3 columns</span>
            <span class="tablet-label">Tablet: 2 columns</span>
            <span class="mobile-label">Mobile: 1 column</span>
        </div>

        <div class="responsive-grid">
            <?php
            $items = [
                ["title" => "Card 1", "text" => "Visible on all screens"],
                ["title" => "Card 2", "text" => "Visible on all screens"],
                ["title" => "Card 3", "text" => "Visible on all screens"],
                ["title" => "Card 4", "text" => "Moves to next row on tablet"],
                ["title" => "Card 5", "text" => "Moves to next row on tablet"],
                ["title" => "Card 6", "text" => "Moves to next row on tablet"],
            ];
            foreach ($items as $item) {
                echo '
                <div class="r-card">
                    <h3>' . $item["title"] . '</h3>
                    <p>' . $item["text"] . '</p>
                </div>';
            }
            ?>
        </div>
    </section>

    <!-- ── HIDING ELEMENTS ─────────────────────────────── -->
    <section class="block">
        <h2>3. Show/hide elements at different screen sizes</h2>
        <pre class="code">/* Hide the sidebar on mobile */
@media (max-width: 480px) {
    .sidebar {
        display: none;
    }
}

/* Hide desktop nav, show hamburger menu on mobile */
@media (max-width: 768px) {
    .desktop-nav { display: none; }
    .mobile-nav  { display: block; }
}</pre>
        <div class="show-hide-demo">
            <div class="desktop-only">Only visible on desktop (hide at 768px)</div>
            <div class="tablet-only">Only visible on tablet (hide below 480px, hide above 768px)</div>
            <div class="mobile-only">Only visible on mobile (show below 480px)</div>
        </div>
    </section>

    <!-- ── FONT SIZES ──────────────────────────────────── -->
    <section class="block">
        <h2>4. Adjusting font sizes and padding for mobile</h2>
        <pre class="code">h1 {
    font-size: 40px;
}

@media (max-width: 768px) {
    h1 {
        font-size: 28px;   /* smaller on tablet */
    }
}

@media (max-width: 480px) {
    h1 {
        font-size: 22px;   /* smaller still on mobile */
    }
}</pre>
        <p>
            You used this in your FA4 and FA3 projects when adjusting table and title font sizes at 768px.
        </p>
    </section>

    <!-- ── STICKY FOOTER PATTERN ───────────────────────── -->
    <section class="block">
        <h2>5. min-width vs max-width</h2>
        <pre class="code">/* max-width: "apply when screen is X or SMALLER" (most common) */
@media (max-width: 768px) { ... }

/* min-width: "apply when screen is X or LARGER" (mobile-first) */
@media (min-width: 768px) { ... }

/* Range: apply only between two sizes */
@media (min-width: 480px) and (max-width: 768px) { ... }</pre>
        <p>
            You've been using <code>max-width</code> in all your projects — you start with desktop styles
            then override them for smaller screens. That's the standard approach.
        </p>
    </section>

</div>
</body>
</html>
