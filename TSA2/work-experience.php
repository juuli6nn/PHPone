<?php
$pageTitle = 'Work Experience';
$pageStylesheet = 'work-experience.css';
require_once 'resume-data.php';
require 'resume/header.php';
?>
<section class="section-content">
    <h2>Work Experience</h2>
    <?php foreach ($workExperience as $experience): ?>
        <div class="experience-item">
            <h3><?php echo $experience['position']; ?></h3>
            <p><strong><?php echo $experience['company']; ?></strong></p>
            <p><em><?php echo $experience['duration']; ?></em></p>
            <p><?php echo $experience['description']; ?></p>
        </div>
    <?php endforeach; ?>
</section>
<?php include 'resume/footer.php'; ?>
