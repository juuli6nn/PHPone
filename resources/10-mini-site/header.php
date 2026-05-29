<?php
/*
 * HEADER — included at the top of every page.
 * $pageTitle is set before this is required.
 * ?? is the null coalescing operator: use $pageTitle if set, else fallback.
 */
$title = $pageTitle ?? "Mini Site";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Back button is position:fixed so it sits on top of everything and stays while scrolling -->
<a class="back" href="../">← Back</a>

<header>
    <nav>
        <!-- PHP echo outputs a variable into HTML -->
        <a class="nav-brand" href="index.php">⚽ Arsenal FC</a>

        <!-- nav links built from an array — one loop, one place to edit -->
        <?php
        $navLinks = [
            ["Squad",     "index.php"],
            ["Stats",     "stats.php"],
            ["Fixtures",  "fixtures.php"],
        ];
        ?>
        <ul class="nav-links">
            <?php foreach ($navLinks as $link): ?>
                <li><a href="<?php echo $link[1]; ?>"><?php echo $link[0]; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<main>
