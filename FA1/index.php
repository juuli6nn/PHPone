<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <div class="left-column">
            <?php
            // Profiles
            $NAME = "Arianne Julian A. Cruz";
            $LOC = "Manila, Philippines";
            $NUMBER = "420-67-41";
            $ROLE = "Full Stack Web Engineer";
            $PROGRAM = "Bachelors of Science in Information Technology";
            $HIGHSCHOOL = "University of the East";

            // Skills
            $SKILL1 = "HTML/CSS";
            $SKILL2 = "JavaScript";
            $SKILL3 = "PHP";
            $SKILL4 = "Python";
            $SKILL5 = "Java";
            $SKILL6 = "React";
            $SKILL7 = "MySQL";
            $SKILL8 = "Git/GitHub";
            
            // Experiences
            $EXP2_TITLE = "Freelance Web Developer";
            $EXP2_COMPANY = "Self-Employed";
            $EXP2_DATE = "January 2024 - Present";
            $EXP2_DESC = "Created custom websites for small businesses and individuals. Managed client requirements and delivered projects on time.";
            
            // Projects
            $PROJ1_TITLE = "Mclaren E-Commerce Website";
            $PROJ1_TECH = "HTML, CSS, Javascript, React, Node.js, Vercel, Render";
            $PROJ1_DATE = "April 2026";
            $PROJ1_DESC = "Developed a Mclaren F1 inspired e-commerce platform with proper UI, product catalog, and shopping cart functionality.";
            
            $PROJ2_TITLE = "Sari: A POS/Inventory System Designed for Sari Sari Stores";
            $PROJ2_TECH = "Figma";
            $PROJ2_DATE = "December 2024";
            $PROJ2_DESC = "Built an app with the help of Figma utilizing a star-up idea called Sari";
            ?>
            
            <div class="photo-container">
                <img src="photo.png" class="formal-pic">
            </div>

            <br>

            <h1>
                Profile
                <hr>
                <p class = "Profile">
                    A motivated Bachelor of Science in Information Technology 
                    major in Web and Mobile Applications student at FEU Institute 
                    of Technology, with a strong interest in web development and 
                    machine learning. Passionate about building functional and 
                    user-friendly digital solutions, with foundational experience 
                    in front-end and back-end development. Eager to apply technical 
                    skills in real-world projects, continuously learn emerging 
                    technologies, and contribute to innovative and impactful systems.
                </p>
            </h1>

            <h1>
                Skills
                <hr>
                <ul class="skills-list">
                    <li><?php echo $SKILL1; ?></li>
                    <li><?php echo $SKILL2; ?></li>
                    <li><?php echo $SKILL3; ?></li>
                    <li><?php echo $SKILL4; ?></li>
                    <li><?php echo $SKILL5; ?></li>
                    <li><?php echo $SKILL6; ?></li>
                    <li><?php echo $SKILL7; ?></li>
                    <li><?php echo $SKILL8; ?></li>
                </ul>
            </h1>



        </div>

        <div class="right-column">
            <h1 class="ResumeName">
                <?php echo $NAME ?>
            </h1>
            <h2 class="Role">
                <?php echo $ROLE ?>
            </h2>

            <br>
            <hr class="header-hr">
            <br>

            <h1>
                Education
            </h1>
            <hr class="section-hr">
            <p>
            <h3><?php echo $PROGRAM ?></h3>
            <p>2024-Present</p>
            <p>Far Eastern University Institute of Technology</p>
            </p>

            <p>
            <h3><?php echo $HIGHSCHOOL ?></h3>
            <p>2022-2024</p>
            <p>University of the East</p>
            </p>

            <br>

            <h1>
                Experiences
            </h1>
            <hr class="section-hr">

            <h3><?php echo $EXP2_TITLE; ?></h3>
            <p><strong><?php echo $EXP2_COMPANY; ?></strong></p>
            <p><em><?php echo $EXP2_DATE; ?></em></p>
            <p><?php echo $EXP2_DESC; ?></p>

            <br>

            <h1>
                Projects
            </h1>
            <hr class="section-hr">
            <h3><?php echo $PROJ1_TITLE; ?></h3>
            <p><strong><?php echo $PROJ1_TECH; ?></strong></p>
            <p><em><?php echo $PROJ1_DATE; ?></em></p>
            <p><?php echo $PROJ1_DESC; ?></p>

            <h3><?php echo $PROJ2_TITLE; ?></h3>
            <p><strong><?php echo $PROJ2_TECH; ?></strong></p>
            <p><em><?php echo $PROJ2_DATE; ?></em></p>
            <p><?php echo $PROJ2_DESC; ?></p>
        </div>

</body>

</html>