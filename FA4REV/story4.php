<?php
$pageTitle = "Story 4 - The Storm";
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
    background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
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
    color: #fa709a;
}

.action-sequence {
    background: #fef3c7;
    border-radius: 12px;
    padding: 24px;
    margin: 32px 0;
    border-left: 4px solid #f59e0b;
}

.action-sequence h3 {
    color: #92400e;
    margin-bottom: 16px;
    font-size: 18px;
    font-weight: 700;
}

.action-sequence p {
    color: #78350f;
    font-size: 16px;
    margin-bottom: 12px;
}

.dramatic-moment {
    text-align: center;
    font-size: 24px;
    font-weight: 700;
    color: #dc2626;
    margin: 40px 0;
    padding: 24px;
    background: #fee2e2;
    border-radius: 12px;
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
    background: #fa709a;
    color: white;
    border-color: #fa709a;
    transform: translateY(-2px);
    box-shadow: 0 8px 16px rgba(250, 112, 154, 0.3);
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
            <div class="story-number">Chapter Four</div>
            <h1>The Storm</h1>
            <div class="story-meta">
                <span>📖 6 min read</span>
                <span>⚡ Action</span>
            </div>
        </div>
    </div>
    
    <div class="story-body">
        <p>
            Alex burst into the village square just as the sun was setting, breathless 
            and covered in dust from the mountain trails. The villagers gathered around, 
            surprised to see the young adventurer return so soon—and even more surprised 
            by the urgency in Alex's eyes.
        </p>
        
        <p>
            "A storm is coming," Alex announced, voice carrying across the square. 
            "Not in weeks or months, but in three days. We must prepare now, or 
            everything we've built will be lost."
        </p>
        
        <p>
            Skeptical murmurs rippled through the crowd. Old Thomas, the village elder, 
            stepped forward. "The sky is clear, young one. What makes you so certain?" 
            But when Alex began describing the ancient techniques for reinforcing homes, 
            explaining principles of engineering that no one in the village had ever 
            heard, the murmurs turned to whispers of amazement.
        </p>
        
        <div class="action-sequence">
            <h3>The Village Mobilizes:</h3>
            <p><strong>Day 1:</strong> Alex taught the farmers new methods of securing 
            crops and protecting livestock. Trenches were dug to redirect water flow. 
            The blacksmith forged new reinforcements for roofs and walls.</p>
            
            <p><strong>Day 2:</strong> Every able-bodied villager worked from dawn to 
            dusk. Children helped gather supplies while elders shared their own knowledge 
            of past storms. The community came together like never before.</p>
            
            <p><strong>Day 3:</strong> As the final preparations were completed, dark 
            clouds appeared on the horizon, exactly as Alex had foreseen. The village 
            was ready.</p>
        </div>
        
        <p>
            The storm arrived with a fury that made even the oldest villagers tremble. 
            Lightning split the sky in jagged white scars. Thunder shook the ground 
            like the footsteps of giants. Rain fell in sheets so thick you couldn't 
            see your hand in front of your face.
        </p>
        
        <div class="dramatic-moment">
            The wind howled. The earth trembled. But the village stood firm.
        </div>
        
        <p>
            For three days and three nights, the tempest raged. Trees that had stood 
            for centuries were uprooted. Rivers overflowed their banks. But the homes 
            Alex had helped reinforce held strong. The trenches channeled water away 
            from the fields. The secured livestock shelters protected the animals.
        </p>
        
        <p>
            When the storm finally passed and the sun broke through the clouds, the 
            villagers emerged to survey the damage. Neighboring villages had been 
            devastated, but their own stood largely intact. Crops were saved. Homes 
            were whole. Lives were preserved.
        </p>
        
        <p>
            Old Thomas approached Alex with tears in his eyes. "You saved us all," 
            he said simply. But Alex shook head, looking around at the community 
            that had worked together. "We saved ourselves. I just showed you what 
            was possible when we work as one."
        </p>
        
        <p>
            That night, as the village celebrated their survival, Alex stood at the 
            edge of the square and looked back toward the mountains. The crystal's 
            gift had been more than knowledge—it had been the catalyst that brought 
            the community together, that showed them their own strength...
        </p>
    </div>
    
    <div class="story-navigation">
        <a href="story3.php" class="nav-btn">← Previous Chapter</a>
        <a href="story5.php" class="nav-btn">Final Chapter →</a>
    </div>
</div>

<?php
include 'footer.php';
?>
