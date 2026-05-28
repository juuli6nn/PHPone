<?php
$pageTitle = 'Resume';
$pageStylesheet = 'act3.css';
require_once 'resume-data.php';
require 'resume/header.php';
?>

<div class="container">
    <div class="left-column">
        <div class="photo-container">
            <img src="photo.png" class="formal-pic" alt="Profile Photo">
        </div>

        <section class="section-block">
            <h2>Profile</h2>
            <p><?php echo $profileSummary; ?></p>
        </section>

        <section class="section-block">
            <h2>Skills</h2>
            <ul class="skills-list">
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo $skill; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    </div>

    <div class="right-column">
        <h1 class="ResumeName"><?php echo $studentName; ?></h1>
        <h2 class="Role"><?php echo $studentRole; ?></h2>

        <hr class="header-hr">

        <section class="section-block">
            <h2>Education</h2>
            <?php foreach ($educationalAttainment as $education): ?>
                <div class="education-item">
                    <h3><?php echo $education['title']; ?></h3>
                    <p><strong><?php echo $education['school']; ?></strong></p>
                    <p><em><?php echo $education['year']; ?></em></p>
                    <p><?php echo $education['details']; ?></p>
                </div>
            <?php endforeach; ?>
        </section>

        <section class="section-block">
            <h2>Experience</h2>
            <?php foreach ($workExperience as $experience): ?>
                <div class="experience-item">
                    <h3><?php echo $experience['position']; ?></h3>
                    <p><strong><?php echo $experience['company']; ?></strong></p>
                    <p><em><?php echo $experience['duration']; ?></em></p>
                    <p><?php echo $experience['description']; ?></p>
                </div>
            <?php endforeach; ?>
        </section>
    </div>
</div>

<?php include 'resume/footer.php'; ?>