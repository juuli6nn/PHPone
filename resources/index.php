<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Resources</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="page">
        <h1 class="title">Study Resources</h1>
        <p class="subtitle">PHP · HTML · CSS — reference projects &amp; your own work</p>

        <!-- CSS GRID: two-column layout. Each .section is one column. -->
        <div class="columns">

            <!-- LEFT COLUMN: module reference projects -->
            <section class="section">
                <h2 class="section-heading">Module Projects</h2>
                <p class="section-sub">Commented examples for each concept</p>

                <?php
                /*
                 * ASSOCIATIVE ARRAY — each item has named keys (num, title, desc, link)
                 * This makes the code easier to read than using index numbers like $item[0]
                 */
                $moduleProjects = [
                    ["num" => "01", "title" => "Flexbox Basics",       "desc" => "display:flex, direction, justify, align, gap, wrap, flex:1",   "link" => "resources/01-flexbox/"],
                    ["num" => "02", "title" => "CSS Grid",             "desc" => "display:grid, columns, 1fr, repeat(), auto-fill, minmax",      "link" => "resources/02-css-grid/"],
                    ["num" => "03", "title" => "PHP Arrays & Foreach", "desc" => "array(), [], foreach, echo, string concat with .",             "link" => "resources/03-php-arrays/"],
                    ["num" => "04", "title" => "PHP String Functions", "desc" => "strlen, ucfirst, strtoupper, strrev, strpos, str_replace",     "link" => "resources/04-php-strings/"],
                    ["num" => "05", "title" => "Responsive Design",    "desc" => "@media queries, breakpoints, mobile-first thinking",          "link" => "resources/05-responsive/"],
                    ["num" => "06", "title" => "PHP Includes",         "desc" => "require, include, reusable header and footer components",      "link" => "resources/06-php-includes/"],
                    ["num" => "07", "title" => "HTML Tables + PHP",    "desc" => "table, thead, tbody, tr, th, td, border-collapse, nth-child", "link" => "resources/07-tables/"],
                    ["num" => "08", "title" => "Hover & Transitions",  "desc" => "transition, transform, translateY, scale, box-shadow, :hover","link" => "resources/08-hover-effects/"],
                    ["num" => "09", "title" => "CSS Position",         "desc" => "static, relative, absolute, fixed, z-index, top/left",        "link" => "resources/09-position/"],
                    ["num" => "10", "title" => "Mini Site",            "desc" => "Everything combined: includes, arrays, grid, tables, hover",   "link" => "resources/10-mini-site/"],
                ];

                /* FOREACH — loops through every item in the array.
                 * $project takes the value of one item per iteration. */
                foreach ($moduleProjects as $project) {
                    echo '
                    <a class="card" href="' . $project["link"] . '">
                        <span class="card-number">' . $project["num"] . '</span>
                        <div class="card-text">
                            <span class="card-title">' . $project["title"] . '</span>
                            <span class="card-desc">' . $project["desc"] . '</span>
                        </div>
                        <span class="arrow">→</span>
                    </a>';
                }
                ?>
            </section>

            <!-- RIGHT COLUMN: your actual FA and TSA projects -->
            <section class="section">
                <h2 class="section-heading">My Projects</h2>
                <p class="section-sub">Formative &amp; summative assessments</p>

                <?php
                /*
                 * Links go up one level (../) because the FA folders
                 * are siblings of resources/, not inside it.
                 */
                $myProjects = [
                    ["num" => "FA1", "title" => "Formative 1",          "desc" => "Single page layout — basic HTML & CSS structure",              "link" => "FA1/"],
                    ["num" => "FA2", "title" => "Formative 2",          "desc" => "Card navigation + MBA image gallery + activity pages",         "link" => "FA2/"],
                    ["num" => "FA3", "title" => "Formative 3",          "desc" => "Arsenal squad table with images, card nav, hover effects",     "link" => "FA3/"],
                    ["num" => "FA4", "title" => "Formative 4",          "desc" => "Story blog — header/footer includes, dropdown nav, PHP strings","link" => "FA4/"],
                    ["num" => "F4R", "title" => "Formative 4 Revised",  "desc" => "Revised version of FA4 with cleaner structure",               "link" => "FA4REV/"],
                    ["num" => "TSA", "title" => "Summative 1",          "desc" => "Summative assessment — card nav + activity pages",             "link" => "TSA1/"],
                ];

                foreach ($myProjects as $project) {
                    echo '
                    <a class="card card--mine" href="' . $project["link"] . '">
                        <span class="card-number">' . $project["num"] . '</span>
                        <div class="card-text">
                            <span class="card-title">' . $project["title"] . '</span>
                            <span class="card-desc">' . $project["desc"] . '</span>
                        </div>
                        <span class="arrow">→</span>
                    </a>';
                }
                ?>
            </section>

        </div><!-- end .columns -->

        <!-- PRACTICE CHALLENGES — things to build from scratch -->
        <section class="section section--practice">
            <h2 class="section-heading section-heading--green">Practice Challenges</h2>
            <p class="section-sub">Build these from scratch without AI — good midterm prep</p>

            <?php
            /*
             * Same pattern as above — array of associative arrays, then foreach.
             * "badge" is a difficulty label: Easy / Medium / Hard
             */
            $challenges = [
                ["num" => "P1",  "badge" => "Easy",   "title" => "Student Card",          "desc" => "PHP array of 5 students → foreach → HTML table with name, age, grade"],
                ["num" => "P2",  "badge" => "Easy",   "title" => "Flexbox Nav Bar",        "desc" => "Header with logo left, nav links right using display:flex + justify-content:space-between"],
                ["num" => "P3",  "badge" => "Easy",   "title" => "Hover Card Row",         "desc" => "3 cards side by side, each lifts on hover with transition + translateY"],
                ["num" => "P4",  "badge" => "Medium", "title" => "Photo Grid",             "desc" => "CSS Grid gallery — 3 columns, images fill cells with object-fit:cover"],
                ["num" => "P5",  "badge" => "Medium", "title" => "String Functions Page",  "desc" => "Input array of words → table showing strlen, ucfirst, strrev, strpos for each"],
                ["num" => "P6",  "badge" => "Medium", "title" => "Responsive Layout",      "desc" => "3-column flex layout that collapses to 1 column on mobile with @media"],
                ["num" => "P7",  "badge" => "Medium", "title" => "Header + Footer Include","desc" => "header.php + footer.php + 3 pages that require() them — sticky footer pattern"],
                ["num" => "P8",  "badge" => "Hard",   "title" => "Player Stats Table",     "desc" => "PHP array of players with image, name, goals, assists → styled table with nth-child"],
                ["num" => "P9",  "badge" => "Hard",   "title" => "Mini Blog",              "desc" => "index.php shows post cards in a grid; each card links to a story page with full text"],
                ["num" => "P10", "badge" => "Hard",   "title" => "Full Page from Scratch", "desc" => "Header, nav, hero section, card grid, footer — no starter code, just you"],
            ];

            foreach ($challenges as $c) {
                /* Pick a CSS class based on difficulty so each badge gets its own color */
                $badgeClass = strtolower($c["badge"]); /* "Easy" → "easy", "Medium" → "medium" */
                echo '
                <div class="card card--practice">
                    <span class="card-number">' . $c["num"] . '</span>
                    <div class="card-text">
                        <span class="card-title">' . $c["title"] . ' <span class="badge badge--' . $badgeClass . '">' . $c["badge"] . '</span></span>
                        <span class="card-desc">' . $c["desc"] . '</span>
                    </div>
                </div>';
            }
            ?>
        </section>

    </div><!-- end .page -->

</body>
</html>
