<?php
$pageTitle = 'Personal Information';
$pageStylesheet = 'personal-information.css';
require_once 'resume-data.php';
require 'resume/header.php';
?>
<section class="section-content">
    <h2>Personal Information</h2>
    <ul class="resume-section-list">
        <?php foreach ($personalInformation as $label => $value): ?>
            <li><strong><?php echo $label; ?>:</strong> <?php echo $value; ?></li>
        <?php endforeach; ?>
    </ul>
</section>
<?php include 'resume/footer.php'; ?>
