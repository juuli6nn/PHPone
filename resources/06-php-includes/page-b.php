<?php
$pageTitle = "Page B — PHP Includes Demo";
require 'header.php';
?>

    <div class="content-box">
        <h2>This is Page B</h2>
        <p>Same header, same footer — different content in the middle.</p>
        <p style="margin-top: 16px;">
            This is exactly how your FA4 site works:
            <code>header.php</code> and <code>footer.php</code> are shared,
            and each <code>story1.php</code> through <code>story5.php</code>
            only contains its unique content.
        </p>
        <a class="btn" href="index.php">← Back to Home</a>
    </div>

<?php require 'footer.php'; ?>
