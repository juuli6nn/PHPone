<?php
$pageTitle = 'Career Objective';
$pageStylesheet = 'career-objective.css';
require_once 'resume-data.php';
require 'resume/header.php';
?>
<section class="section-content">
    <h2>Career Objective</h2>
    <p><?php echo $careerObjective; ?></p>
</section>
<?php include 'resume/footer.php'; ?>
