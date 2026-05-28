<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Student Resume'; ?></title>
    <link rel="stylesheet" href="resume/<?php echo isset($pageStylesheet) ? $pageStylesheet : 'resume-base.css'; ?>">
</head>
<body>
    <header class="resume-header">
        <div class="header-inner">
            <div>
                <h1>Resume</h1>
            </div>
            <nav class="resume-nav">
                <a href="act3.php">Resume</a>
                <a href="career-objective.php">Career Objective</a>
                <a href="personal-information.php">Personal Info</a>
                <a href="educational-attainment.php">Education</a>
                <a href="skills.php">Skills</a>
                <a href="affiliation.php">Affiliation</a>
                <a href="work-experience.php">Experience</a>
            </nav>
            <div class="header-actions">
                <a href="index.php" class="header-button">Back to Index</a>
            </div>
        </div>
    </header>
    <main>
