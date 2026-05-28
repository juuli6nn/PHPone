<?php
$pageTitle = 'Educational Attainment';
$pageStylesheet = 'educational-attainment.css';
require_once 'resume-data.php';
require 'resume/header.php';
?>
<section class="section-content">
    <h2>Educational Attainment</h2>
    <?php foreach ($educationalAttainment as $education): ?>
        <div class="education-item">
            <h3><?php echo $education['title']; ?></h3>
            <p><strong><?php echo $education['school']; ?></strong></p>
            <p><em><?php echo $education['year']; ?></em></p>
            <p><?php echo $education['details']; ?></p>
        </div>
    <?php endforeach; ?>
</section>
<?php include 'resume/footer.php'; ?>
