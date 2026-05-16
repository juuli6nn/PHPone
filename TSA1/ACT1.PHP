<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <link rel="stylesheet" href="ACT1.css">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<body>
    <?php
    $student_number = "202411609";
    $grade = "11";
    $last_name = "Cruz";
    $first_name = "Arianne Julian";
    $middle_initial = "A";
    $birth_date = "2006-07-25";
    $gender = "Male";
    $contact_number = "09171234567";
    $email = "ajuliancruzzz@gmail.com";
    $address = "628 EDSA Quezon City";
    $course = "BSIT";
    $year_level = "2nd";
    $section = "TW25";
    $school_email = "aacruz2@fit.edu.ph";
    $specialization = "Web and Mobile Development";
    ?>

    <a href="index.php" class="return-button">←</a>

    <div class="container">
        <h1 class="header-title">Form - Personal and Student</h1>
        <hr class="title-divider">

        <div class="header-row">
            <h2 class="section-heading">Personal Information</h2>
        </div>

        <form class="student-form" method="post" action="#">


            <label>
                Last Name
                <input type="text" name="last_name" value="<?php echo $last_name; ?>">
            </label>
            <label>
                First Name
                <input type="text" name="first_name" value="<?php echo $first_name; ?>">
            </label>
            <label>
                Middle Initial
                <input type="text" name="middle_initial" value="<?php echo $middle_initial; ?>" maxlength="1">
            </label>
            <div class="form-grid">
                <label>
                    Date of Birth
                    <input type="date" name="birth_date" value="<?php echo $birth_date; ?>">
                </label>
                <label>
                    Gender
                    <select name="gender">
                        <option value="Male" <?php echo $gender === 'Male' ? 'selected' : ''; ?>>Male</option>
                        <option value="Female" <?php echo $gender === 'Female' ? 'selected' : ''; ?>>Female</option>
                        <option value="Other" <?php echo $gender === 'Other' ? 'selected' : ''; ?>>Other</option>
                    </select>
                </label>
                <label>
                    Contact Number
                    <input type="tel" name="contact_number" value="<?php echo $contact_number; ?>">
                </label>

            </div>
            <label>
                Email
                <input type="text" name="address" value="<?php echo $email; ?>">
            </label>
            <label>
                Address
                <input type="text" name="address" value="<?php echo $address; ?>">
            </label>

            <div class="header-row">
                <h2 class="section-heading">Student Information</h2>
            </div>
            <label>
                Student Number
                <input type="text" name="student_number" value="<?php echo $student_number; ?>" readonly>
            </label>
            <label>
                Course
                <input type="text" name="course" value="<?php echo $course; ?>">
            </label>
            <div class="form-grid">
                <label>
                    Year Level
                    <input type="text" name="year_level" value="<?php echo $year_level; ?>">
                </label>
                <label>
                    Section
                    <input type="text" name="section" value="<?php echo $section; ?>">
                </label>
                <label>
                    School Email
                    <input type="text" name="section" value="<?php echo $school_email; ?>">
                </label>
            </div>
            <label>
                Specialization
                <input type="text" name="course" value="<?php echo $specialization; ?>">
            </label>

            <button type="submit" class="submit-button">Submit</button>
        </form>
    </div>
</body>

</html>