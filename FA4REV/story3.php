<?php
$pageTitle = "Story 3 - The Journey Home";
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
    background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
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
    color: #00f2fe;
}

.vision-box {
    background: linear-gradient(135deg, #e0f7ff 0%, #f0f9ff 100%);
    border-radius: 12px;
    padding: 32px;
    margin: 32px 0;
    border-left: 4px solid #00f2fe;
}

.vision-box h3 {
    color: #0369a1;
    margin-bottom: 16px;
    font-size: 20px;
}

.vision-box ul {
    list-style: none;
    padding: 0;
}

.vision-box li {
    padding: 8px 0;
    color: #475569;
    padding-left: 28px;
    position: relative;
}

.vision-box li:before {
    content: "✨";
    position: absolute;
    left: 0;
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
    background: #00f2fe;
    color: white;
    border-color: #00f2fe;
    transform: translateY(-2px);
    box-shadow: 0 8px 16px rgba(0, 242, 254, 0.3);
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
            <div class="story-number">Chapter Three</div>
            <h1>The Journey Home</h1>
            <div class="story-meta">
                <span>📖 5 min read</span>
                <span>🌟 Wisdom</span>
            </div>
        </div>
    </div>
    
    <div class="story-body">
        <p>
            "I wish for the wisdom to help my village prosper," Alex declared, voice 
            steady despite the trembling hands. The words echoed through the chamber, 
            and the crystal's light exploded into a brilliant cascade of colors that 
            enveloped Alex in warmth.
        </p>
        
        <p>
            Suddenly, visions flooded Alex's mind—not as dreams, but as vivid 
            experiences. Alex saw through the eyes of ancient farmers who had 
            mastered the art of coaxing life from stubborn soil. Felt the hands 
            of healers who knew which herbs could cure and which could harm. 
            Understood the mathematics of architects who built structures that 
            could withstand centuries.
        </p>
        
        <div class="vision-box">
            <h3>The Crystal's Gifts of Knowledge:</h3>
            <ul>
                <li>Crop rotation techniques that would triple harvest yields</li>
                <li>Herbal remedies for common ailments that plagued the village</li>
                <li>Engineering principles for building homes that could weather any storm</li>
                <li>Water management systems to prevent drought and flood</li>
                <li>Methods for preserving food through harsh winters</li>
            </ul>
        </div>
        
        <p>
            But with the knowledge came a warning—a vision darker than the rest. 
            Alex saw storm clouds gathering on the horizon, not weeks or months away, 
            but mere days. A tempest unlike any the region had seen in generations 
            was coming, one that would test everything the village had built.
        </p>
        
        <p>
            The crystal's light began to fade, and Alex found standing once more in 
            the chamber, but everything had changed. The knowledge wasn't just in 
            mind—it was in hands, in heart, in every fiber of being. Alex could feel 
            the weight of responsibility that came with such wisdom.
        </p>
        
        <p>
            "Use this gift wisely," the voice whispered one final time. "Knowledge 
            without compassion is tyranny. Wisdom without action is waste. Go now, 
            and may your village flourish."
        </p>
        
        <p>
            Alex bowed deeply to the crystal, then turned and ran. There was no time 
            to waste admiring ancient artifacts or pondering mysteries. The village 
            needed to prepare, and every moment counted. The journey back would be 
            faster—Alex now knew shortcuts through the mountains that only the ancients 
            had used, paths revealed in the visions.
        </p>
        
        <p>
            As Alex emerged from the cave into the fading daylight, determination 
            burned brighter than ever. The real adventure wasn't finding the treasure—
            it was using it to save everyone back home...
        </p>
    </div>
    
    <div class="story-navigation">
        <a href="story2.php" class="nav-btn">← Previous Chapter</a>
        <a href="story4.php" class="nav-btn">Continue Reading →</a>
    </div>
</div>

<?php
include 'footer.php';
?>
