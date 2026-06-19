<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 2 - Cookie Management</title>
    <link rel="stylesheet" href="act2.css">
</head>
<body>
    <a href="index.php" class="return-button">←</a>
    
    <div class="container">
        <h1>Cookie Management System</h1>
        <p>This page sets cookies after 10, 20, and 30 seconds using JavaScript</p>

        <div class="timer-display"><span id="timer">0</span> seconds</div>

        <div class="cookie-status">
            <h3>Cookie Status:</h3>
            <div class="cookie-item" id="cookie1">Cookie 1 (10s): <span id="cookie1-status">Not set yet</span></div>
            <div class="cookie-item" id="cookie2">Cookie 2 (20s): <span id="cookie2-status">Not set yet</span></div>
            <div class="cookie-item" id="cookie3">Cookie 3 (30s): <span id="cookie3-status">Not set yet</span></div>
        </div>

        <button onclick="location.reload()">Reset Page</button>
    </div>

    <script>
        let seconds = 0;
        let cookie1Set = false;
        let cookie2Set = false;
        let cookie3Set = false;

        const timerInterval = setInterval(() => {
            seconds++;
            document.getElementById('timer').textContent = seconds;

            if (seconds === 10 && !cookie1Set) {
                document.cookie = "cookie1=SetAt10Seconds; max-age=3600";
                document.getElementById('cookie1-status').innerHTML = '<strong style="color: green;">SET!</strong>';
                document.getElementById('cookie1').classList.add('active');
                cookie1Set = true;
            }

            if (seconds === 20 && !cookie2Set) {
                document.cookie = "cookie2=SetAt20Seconds; max-age=3600";
                document.getElementById('cookie2-status').innerHTML = '<strong style="color: green;">SET!</strong>';
                document.getElementById('cookie2').classList.add('active');
                cookie2Set = true;
            }

            if (seconds === 30 && !cookie3Set) {
                document.cookie = "cookie3=SetAt30Seconds; max-age=3600";
                document.getElementById('cookie3-status').innerHTML = '<strong style="color: green;">SET!</strong>';
                document.getElementById('cookie3').classList.add('active');
                cookie3Set = true;
            }
        }, 1000);
    </script>
</body>
</html>
