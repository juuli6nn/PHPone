<?php
$pageTitle = 'Affiliation';
$pageStylesheet = 'affiliation.css';
require_once 'resume-data.php';
require 'resume/header.php';
?>
<section class="section-content">
    <h2>Affiliation</h2>
    <ul class="resume-section-list">
        <?php foreach ($affiliations as $affiliation): ?>
            <li><?php echo $affiliation; ?></li>
        <?php endforeach; ?>
    </ul>
</section>
<?php include 'resume/footer.php'; ?>
