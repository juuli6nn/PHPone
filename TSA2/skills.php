<?php
$pageTitle = 'Skills';
$pageStylesheet = 'skills.css';
require_once 'resume-data.php';
require 'resume/header.php';
?>
<section class="section-content">
    <h2>Skills</h2>
    <ul class="resume-section-list">
        <?php foreach ($skills as $skill): ?>
            <li><?php echo $skill; ?></li>
        <?php endforeach; ?>
    </ul>
</section>
<?php include 'resume/footer.php'; ?>
