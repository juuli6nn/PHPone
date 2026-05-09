<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Ranking</title>
    <link rel="stylesheet" href="act2.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <a href="index.php" class="return-button">←</a>

    <div class="wrapper">
        <h1 class="page-title">Activity 2: Grade Ranking Program</h1>

        <?php
        $firstName  = "Arianne Julian";
        $mi         = "A";
        $lastName   = "Cruz";
        $grade      = 60;
        $photo      = "";

        $fullName = $firstName . " " . $mi . ". " . $lastName;

        if ($grade >= 93 && $grade <= 100) {
            $rank = "A";
            $photo = "MBA A.jpeg";
        } elseif ($grade >= 90 && $grade <= 92) {
            $rank = "A-";
            $photo = "MBA A.jpeg";
        } elseif ($grade >= 87 && $grade <= 89) {
            $rank = "B+";
            $photo = "MBA B.jpeg";
        } elseif ($grade >= 83 && $grade <= 86) {
            $rank = "B";
            $photo = "MBA B.jpeg";
        } elseif ($grade >= 80 && $grade <= 82) {
            $rank = "B-";
            $photo = "MBA B.jpeg";
        } elseif ($grade >= 77 && $grade <= 79) {
            $rank = "C+";
            $photo = "MBA C.jpeg";
        } elseif ($grade >= 73 && $grade <= 76) {
            $rank = "C";
            $photo = "MBA C.jpeg";
        } elseif ($grade >= 70 && $grade <= 72) {
            $rank = "C-";
            $photo = "MBA C.jpeg";
        } elseif ($grade >= 67 && $grade <= 69) {
            $rank = "D+";
            $photo = "MBA D.jpeg";
        } elseif ($grade >= 63 && $grade <= 66) {
            $rank = "D";
            $photo = "MBA D.jpeg";
        } elseif ($grade >= 60 && $grade <= 62) {
            $rank = "D-";
            $photo = "MBA D.jpeg";
        } else {
            $rank = "F";
            $photo = "MBA F.jpeg";
        }

        if ($rank === "A" || $rank === "A-") {
            $rankClass = "rank-a";
        } elseif ($rank === "B+" || $rank === "B" || $rank === "B-") {
            $rankClass = "rank-b";
        } elseif ($rank === "C+" || $rank === "C" || $rank === "C-") {
            $rankClass = "rank-c";
        } elseif ($rank === "D+" || $rank === "D" || $rank === "D-") {
            $rankClass = "rank-d";
        } else {
            $rankClass = "rank-f";
        }
        ?>

        <div class="card">
            
            <div class="name-row">
                <span class="label">Name:</span>
                <span class="name-value"><?php echo ($fullName); ?></span>
            </div>
            
            <div class="info-row">
                <div class="box <?php echo $rankClass; ?>">
                    <span class="box-label">Rank:</span>
                    <span class="box-value"><?php echo ($rank); ?></span>
                </div>
                <div class="box grade-box">
                    <span class="box-label">Grade:</span>
                    <span class="box-value"><?php echo ($grade); ?></span>
                </div>
            </div>
            
            <div class="box photo-box">
                <?php if (!empty($photo) && file_exists($photo)): ?>
                    <img src="<?php echo ($photo); ?>" alt="Student Photo" class="student-photo">
                <?php else: ?>
                    <div class="photo-placeholder">Picture</div>
                <?php endif; ?>
            </div>
        </div>

    
    </div>
</body>

</html>