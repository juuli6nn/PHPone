<?php
$pageTitle = "Story 2 - The Mystery";
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
    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
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
    color: #f5576c;
}

.story-quote {
    border-left: 4px solid #f5576c;
    padding: 24px;
    margin: 32px 0;
    background: #fef2f2;
    border-radius: 8px;
    font-style: italic;
    color: #475569;
    font-size: 20px;
    text-align: center;
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
    background: #f5576c;
    color: white;
    border-color: #f5576c;
    transform: translateY(-2px);
    box-shadow: 0 8px 16px rgba(245, 87, 108, 0.3);
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
            <div class="story-number">Chapter Two</div>
            <h1>The Crystal's Mystery</h1>
            <div class="story-meta">
                <span>📖 4 min read</span>
                <span>🔮 Mystery</span>
            </div>
        </div>
    </div>
    
    <div class="story-body">
        <p>
            Darkness enveloped Alex as the cave entrance disappeared behind. But the 
            darkness didn't last long. Ancient writings began to glow on the walls, 
            their ethereal blue light pulsing like a heartbeat, illuminating intricate 
            symbols that seemed to dance and shift in the shadows.
        </p>
        
        <p>
            Alex traced fingers along the glowing markings, feeling warmth emanate 
            from the stone. These weren't just decorations—they were a language, 
            a story carved by hands long turned to dust. Each symbol seemed to whisper 
            secrets of those who had walked this path before.
        </p>
        
        <p>
            Following the luminescent trail deeper into the mountain, Alex descended 
            through winding passages that opened into a vast chamber. The ceiling 
            soared so high it disappeared into darkness, and the walls were lined 
            with artifacts from civilizations forgotten by time—golden masks, jeweled 
            weapons, scrolls sealed with wax bearing unknown crests.
        </p>
        
        <p>
            But none of these treasures held Alex's attention. In the center of the 
            chamber, atop a pedestal of polished obsidian, rested a crystal unlike 
            anything Alex had ever seen. It pulsed with an otherworldly light that 
            shifted through colors no artist could name—hues that existed between 
            blue and green, between gold and silver.
        </p>
        
        <div class="story-quote">
            "Only those pure of heart may claim the treasure. What is your greatest wish?"
        </div>
        
        <p>
            The voice that echoed through the chamber was neither male nor female, 
            neither young nor old. It seemed to come from everywhere and nowhere, 
            resonating in Alex's very bones. The crystal's light intensified with 
            each word, casting dancing shadows across the ancient walls.
        </p>
        
        <p>
            Alex stood frozen, heart pounding. This was the moment that would define 
            everything. The traveler's words echoed in memory: "The crystal grants 
            wishes, but it also reveals the truth of one's heart." What did Alex 
            truly desire? Wealth? Power? Fame?
        </p>
        
        <p>
            As Alex pondered, images flashed through mind—the village, the people 
            who had raised and nurtured a dreaming child, the struggles they faced, 
            the hardships they endured. And in that moment of reflection, Alex knew 
            exactly what to wish for...
        </p>
    </div>
    
    <div class="story-navigation">
        <a href="story1.php" class="nav-btn">← Previous Chapter</a>
        <a href="story3.php" class="nav-btn">Continue Reading →</a>
    </div>
</div>

<?php
include 'footer.php';
?>
