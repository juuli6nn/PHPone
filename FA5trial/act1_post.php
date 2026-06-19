<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information - POST</title>
    <link rel="stylesheet" href="act1.css">
</head>
<body>
    <a href="index.php" class="return-button">←</a>
    
    <div class="container">
        <h1>Personal Information</h1>
        <p class="subtitle">(POST)</p>

        <form action="act1_post.php" method="POST">
            <div class="form-group">
                <label>First Name:</label>
                <input type="text" name="firstname" required>
            </div>

            <div class="form-group">
                <label>Middle Name:</label>
                <input type="text" name="middlename" required>
            </div>

            <div class="form-group">
                <label>Last Name:</label>
                <input type="text" name="lastname" required>
            </div>

            <div class="form-group">
                <label>Date of Birth:</label>
                <input type="date" name="birthdate" required>
            </div>

            <div class="form-group">
                <label>Address:</label>
                <input type="text" name="address" required>
            </div>

            <button type="submit">Submit</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $firstname = htmlspecialchars($_POST['firstname']);
            $middlename = htmlspecialchars($_POST['middlename']);
            $lastname = htmlspecialchars($_POST['lastname']);
            $birthdate = htmlspecialchars($_POST['birthdate']);
            $address = htmlspecialchars($_POST['address']);

            echo '
            <div class="result-box">
                <h2>Submitted Information</h2>
                <div class="result-item"><strong>First Name:</strong> ' . $firstname . '</div>
                <div class="result-item"><strong>Middle Name:</strong> ' . $middlename . '</div>
                <div class="result-item"><strong>Last Name:</strong> ' . $lastname . '</div>
                <div class="result-item"><strong>Date of Birth:</strong> ' . $birthdate . '</div>
                <div class="result-item"><strong>Address:</strong> ' . $address . '</div>
            </div>';
        }
        ?>
    </div>
</body>
</html>
