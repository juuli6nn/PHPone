<?php
$pageTitle = "Story 1 - The Adventure Begins";
require 'header.php';
?>

<style>
.story-container {
    max-width: 900px;
    margin: 0 auto;
    padding: 40px 20px;
}

.story-hero {
    position: relative;
    height: 400px;
    border-radius: 16px;
    overflow: hidden;
    margin-bottom: 40px;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}

.story-hero-content {
    text-align: center;
    color: white;
    z-index: 2;
    padding: 40px;
}

.story-number {
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    opacity: 0.9;
    margin-bottom: 16px;
}

.story-hero h1 {
    font-size: 48px;
    font-weight: 800;
    margin-bottom: 16px;
    text-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
}

.story-meta {
    display: flex;
    gap: 24px;
    justify-content: center;
    font-size: 14px;
    opacity: 0.9;
}

.story-body {
    background: white;
    border-radius: 16px;
    padding: 48px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
    margin-bottom: 32px;
}

.story-body p {
    font-size: 18px;
    line-height: 1.8;
    color: #334155;
    margin-bottom: 24px;
}

.story-body p:first-letter {
    font-size: 64px;
    font-weight: 700;
    float: left;
    line-height: 1;
    margin: 0 12px 0 0;
    color: #667eea;
}

.story-quote {
    border-left: 4px solid #667eea;
    padding: 24px;
    margin: 32px 0;
    background: #f8fafc;
    border-radius: 8px;
    font-style: italic;
    color: #475569;
}

.story-navigation {
    display: flex;
    justify-content: space-between;
    gap: 16px;
}

.nav-btn {
    flex: 1;
    padding: 16px 32px;
    background: white;
    border: 2px solid #e2e8f0;
    border-radius: 12px;
    text-decoration: none;
    color: #334155;
    font-weight: 600;
    text-align: center;
    transition: all 0.2s;
}

.nav-btn:hover {
    background: #667eea;
    color: white;
    border-color: #667eea;
    transform: translateY(-2px);
    box-shadow: 0 8px 16px rgba(102, 126, 234, 0.3);
}

@media (max-width: 768px) {
    .story-hero {
        height: 300px;
    }
    
    .story-hero h1 {
        font-size: 32px;
    }
    
    .story-body {
        padding: 32px 24px;
    }
    
    .story-body p {
        font-size: 16px;
    }
    
    .story-navigation {
        flex-direction: column;
    }
}
</style>

<div class="story-container">
    <div class="story-hero">
        <div class="story-hero-content">
            <div class="story-number">Chapter One</div>
            <h1>The Adventure Begins</h1>
            <div class="story-meta">
                <span>📖 5 min read</span>
                <span>✨ Fantasy</span>
            </div>
        </div>
    </div>
    
    <div class="story-body">
        <p>
            Once upon a time, in a small village nestled between towering mountains, 
            there lived a young adventurer named Alex. Every morning, Alex would climb 
            to the highest point in the village and gaze at the distant peaks, dreaming 
            of the mysteries that lay beyond the horizon.
        </p>
        
        <p>
            The village was peaceful, but Alex's heart yearned for something more—
            something extraordinary. While others were content with their daily routines, 
            Alex spent nights reading ancient maps and listening to travelers' tales 
            at the village inn.
        </p>
        
        <div class="story-quote">
            "The greatest adventures begin with a single step into the unknown."
        </div>
        
        <p>
            One fateful morning, as mist rolled through the valley, a mysterious traveler 
            arrived. His cloak was weathered, his eyes held secrets of distant lands, 
            and his voice carried the weight of untold stories. He spoke of a hidden 
            treasure deep within the mountains—a treasure that could grant any wish 
            to the one pure of heart who found it.
        </p>
        
        <p>
            The villagers dismissed his tale as fantasy, but Alex's eyes sparkled with 
            determination. That very night, under a blanket of stars, Alex packed a 
            leather satchel with supplies: a compass, a rope, dried provisions, and 
            a worn journal to document the journey ahead.
        </p>
        
        <p>
            At dawn, without fanfare or farewell, Alex set off toward the mountains. 
            The path was treacherous—steep cliffs tested courage, dark forests whispered 
            warnings, and rushing rivers challenged resolve. But with each obstacle 
            overcome, Alex's determination only grew stronger.
        </p>
        
        <p>
            As the sun painted the sky in shades of orange and purple, Alex reached 
            a cave entrance carved into the mountainside. Ancient symbols, glowing 
            faintly with an ethereal light, marked the stone archway. Taking a deep 
            breath and steadying trembling hands, our hero stepped into the darkness, 
            ready for whatever mysteries awaited within...
        </p>
    </div>
    
    <div class="story-navigation">
        <a href="index.php" class="nav-btn">← Back to Home</a>
        <a href="story2.php" class="nav-btn">Continue Reading →</a>
    </div>
</div>

<?php
include 'footer.php';
?>
