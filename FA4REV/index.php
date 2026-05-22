<?php
$pageTitle = "Home - Story Collection";
require 'header.php';
?>

<div class="home-container">
    <h2>Welcome to My Story Collection</h2>
    <p>Choose a story to read:</p>
    
    <div class="story-grid">
        <div class="story-card">
            <img src="story1.jpg" alt="Story 1">
            <h3>Story 1: The Adventure Begins</h3>
            <p>A tale of courage and discovery...</p>
            <a href="story1.php" class="read-btn">Read Story</a>
        </div>
        
        <div class="story-card">
            <img src="story2.jpg" alt="Story 2">
            <h3>Story 2: The Mystery</h3>
            <p>An unsolved mystery awaits...</p>
            <a href="story2.php" class="read-btn">Read Story</a>
        </div>
        
        <div class="story-card">
            <img src="story3.jpg" alt="Story 3">
            <h3>Story 3: The Journey</h3>
            <p>A journey across distant lands...</p>
            <a href="story3.php" class="read-btn">Read Story</a>
        </div>
        
        <div class="story-card">
            <img src="story4.jpg" alt="Story 4">
            <h3>Story 4: The Challenge</h3>
            <p>Facing the ultimate challenge...</p>
            <a href="story4.php" class="read-btn">Read Story</a>
        </div>
        
        <div class="story-card">
            <img src="story5.jpg" alt="Story 5">
            <h3>Story 5: The Ending</h3>
            <p>How will it all end?...</p>
            <a href="story5.php" class="read-btn">Read Story</a>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
