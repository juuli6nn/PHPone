<?php
$pageTitle = "Page A — PHP Includes Demo";
require 'header.php';
?>

    <div class="content-box">
        <h2>This is Page A</h2>
        <p>
            The header and footer are shared with every page — written once in
            <code>header.php</code> and <code>footer.php</code>.
            If you change the nav in header.php, it updates everywhere.
        </p>
        <p style="margin-top: 16px;">
            Notice how the browser tab says "Page A" — that's because we set
            <code>$pageTitle = "Page A — PHP Includes Demo"</code> before requiring the header.
        </p>
        <a class="btn" href="page-b.php">Go to Page B →</a>
    </div>

<?php require 'footer.php'; ?>
