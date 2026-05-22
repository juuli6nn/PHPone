<?php
$pageTitle = "Story 5 - Legacy";
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
    background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}

.story-hero-content {
    text-align: center;
    color: #1e293b;
    z-index: 2;
    padding: 40px;
}

.story-number {
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 2px;
    text-transform: uppercase;
    opacity: 0.8;
    margin-bottom: 16px;
}

.story-hero h1 {
    font-size: 48px;
    font-weight: 800;
    margin-bottom: 16px;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
}

.story-meta {
    display: flex;
    gap: 24px;
    justify-content: center;
    font-size: 14px;
    opacity: 0.8;
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
    background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.epilogue-box {
    background: linear-gradient(135deg, #fef3c7 0%, #fce7f3 100%);
    border-radius: 12px;
    padding: 32px;
    margin: 32px 0;
    text-align: center;
}

.epilogue-box h3 {
    color: #92400e;
    margin-bottom: 16px;
    font-size: 22px;
    font-weight: 700;
}

.epilogue-box p {
    color: #78350f;
    font-size: 16px;
    font-style: italic;
}

.final-quote {
    text-align: center;
    font-size: 28px;
    font-weight: 700;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    margin: 48px 0;
    padding: 32px;
    border-top: 2px solid #e2e8f0;
    border-bottom: 2px solid #e2e8f0;
}

.the-end {
    text-align: center;
    font-size: 48px;
    font-weight: 900;
    letter-spacing: 8px;
    margin: 60px 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: fadeIn 2s ease-in;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
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
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-color: transparent;
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
    
    .final-quote {
        font-size: 20px;
    }
    
    .the-end {
        font-size: 32px;
        letter-spacing: 4px;
    }
    
    .story-navigation {
        flex-direction: column;
    }
}
</style>

<div class="story-container">
    <div class="story-hero">
        <div class="story-hero-content">
            <div class="story-number">Final Chapter</div>
            <h1>Legacy</h1>
            <div class="story-meta">
                <span>📖 5 min read</span>
                <span>💫 Conclusion</span>
            </div>
        </div>
    </div>
    
    <div class="story-body">
        <p>
            Ten years passed like pages turning in a well-loved book. The village 
            that had once been small and struggling now thrived beyond anyone's 
            wildest imagination. Fields stretched green and abundant across the 
            valley. New homes, built with the wisdom Alex had shared, stood strong 
            and beautiful. The marketplace bustled with traders from distant lands, 
            drawn by tales of the village's prosperity.
        </p>
        
        <p>
            But the greatest change wasn't in the buildings or the crops—it was in 
            the people. The villagers had learned that knowledge shared multiplies, 
            that community is stronger than any individual, and that preparation 
            and wisdom can overcome even the greatest challenges.
        </p>
        
        <p>
            Alex, now a respected leader, had never stopped learning or exploring. 
            Each year brought new adventures—helping neighboring villages prepare 
            for disasters, teaching the ancient techniques to anyone who wished to 
            learn, and always, always looking for ways to improve life for everyone.
        </p>
        
        <div class="epilogue-box">
            <h3>The Village's Achievements:</h3>
            <p>
                A school where children learned not just to read and write, but to 
                think critically and solve problems. A healing center where the sick 
                found care. A library filled with knowledge from across the world. 
                And most importantly, a community that valued every voice and worked 
                together toward common goals.
            </p>
        </div>
        
        <p>
            One spring morning, as cherry blossoms painted the village in shades of 
            pink and white, a young child approached Alex in the square. The child's 
            eyes sparkled with the same curiosity and wonder that Alex had once felt 
            gazing at distant mountains.
        </p>
        
        <p>
            "Elder Alex," the child asked, "will you tell me about your adventure? 
            About the crystal and the storm and how you saved everyone?"
        </p>
        
        <p>
            Alex knelt down, seeing in this child the same spirit of adventure that 
            had driven a young dreamer to climb mountains and face the unknown. 
            "The crystal didn't save anyone," Alex said gently. "It only showed me 
            what was already there—the strength of our community, the power of 
            knowledge shared, and the courage to act when action is needed."
        </p>
        
        <div class="final-quote">
            "Every great adventure begins with a single step into the unknown. 
            And yours, young one, is just beginning."
        </div>
        
        <p>
            The child's face lit up with excitement, and Alex saw the future in 
            that smile. New adventures awaited. New challenges would come. But as 
            long as there were dreamers willing to take that first step, as long as 
            there were communities willing to work together, and as long as wisdom 
            was shared freely—the village, and the world, would continue to flourish.
        </p>
        
        <p>
            That evening, as the sun set behind the mountains where it all began, 
            Alex stood at the village edge and smiled. The greatest treasure hadn't 
            been the crystal's wisdom or the power to predict storms. It had been 
            the journey itself—the growth, the connections, the lives touched and 
            changed.
        </p>
        
        <p>
            And somewhere in those distant mountains, in a cave marked with ancient 
            symbols, a crystal pulsed with gentle light, waiting for the next pure 
            heart to find it, waiting for the next adventure to begin...
        </p>
        
        <p class="the-end">THE END</p>
    </div>
    
    <div class="story-navigation">
        <a href="story4.php" class="nav-btn">← Previous Chapter</a>
        <a href="index.php" class="nav-btn">Return Home</a>
    </div>
</div>

<?php
include 'footer.php';
?>
