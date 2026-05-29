<?php
/*
 * HEADER COMPONENT — included at the top of every page.
 *
 * $pageTitle is set in the parent page BEFORE requiring this file.
 * If it's not set, we fall back to "My Site" using the null coalescing operator ??.
 *
 * The null coalescing operator ?? means:
 *   "use $pageTitle if it exists, otherwise use 'My Site'"
 */
$title = $pageTitle ?? "My Site";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- $title is the PHP variable from above — it becomes the browser tab title -->
    <title><?php echo htmlspecialchars($title); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- HEADER: the nav bar at the top of every page -->
<header>
    <nav>
        <h1>06 – PHP Includes</h1>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="page-a.php">Page A</a></li>
            <li><a href="page-b.php">Page B</a></li>
            <!-- Dropdown: shown/hidden with CSS :hover — no JavaScript needed -->
            <li class="dropdown">
                <a class="dropdown-toggle">More ▾</a>
                <ul class="dropdown-menu">
                    <li><a href="page-a.php">Submenu 1</a></li>
                    <li><a href="page-b.php">Submenu 2</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</header>

<!-- MAIN: the page-specific content comes after the header is included -->
<main>
