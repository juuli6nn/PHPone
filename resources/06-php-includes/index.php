<?php
/*
 * PHP INCLUDES — require vs include
 *
 * require 'file.php'  → inserts the file here; CRASHES if file missing
 * include 'file.php'  → inserts the file here; WARNS if file missing (page still loads)
 *
 * Use require for things the page can't work without (header, footer, config).
 * Use include for optional/supplementary content.
 *
 * require_once / include_once — same as above but won't insert the same file twice.
 * Useful if multiple files might all include the same config or functions file.
 */

/* Set the page title BEFORE requiring the header.
 * The header reads $pageTitle to fill in the <title> tag. */
$pageTitle = "Home — PHP Includes Demo";

require 'header.php';
/* Everything from header.php is now rendered:
 * <!DOCTYPE html>, <head>, <header>, <nav>, and <main> are open */
?>

    <div class="content-box">
        <h2>How require and include work</h2>

        <div class="explain">
            <div class="explain-block">
                <div class="tag require">require</div>
                <p>Inserts the file at this exact spot in the page. If the file is missing, PHP <strong>stops immediately</strong> with a fatal error.</p>
                <pre class="code">require 'header.php';
require 'config.php';
require 'footer.php';</pre>
            </div>

            <div class="explain-block">
                <div class="tag include">include</div>
                <p>Same as require, but if the file is missing PHP only shows a <strong>warning</strong> and continues loading the page.</p>
                <pre class="code">include 'optional-banner.php';
include 'ads.php';</pre>
            </div>

            <div class="explain-block">
                <div class="tag once">require_once</div>
                <p>Inserts the file, but <strong>only once</strong> even if the same line appears in multiple files. Prevents duplicate function definitions.</p>
                <pre class="code">require_once 'functions.php';
require_once 'database.php';</pre>
            </div>
        </div>

        <h2 style="margin-top: 30px;">What happens when this page loads</h2>
        <div class="flow">
            <div class="flow-step">1. PHP reads <code>index.php</code></div>
            <div class="flow-arrow">↓</div>
            <div class="flow-step">2. Hits <code>require 'header.php'</code> → inserts the entire header.php content here</div>
            <div class="flow-arrow">↓</div>
            <div class="flow-step">3. Continues with index.php content (this box you're reading)</div>
            <div class="flow-arrow">↓</div>
            <div class="flow-step">4. Hits <code>require 'footer.php'</code> → inserts footer.php content (closes tags, shows footer)</div>
        </div>

        <h2 style="margin-top: 30px;">Passing data between files</h2>
        <pre class="code"><?php echo htmlspecialchars('<?php
// Variables set BEFORE require are available INSIDE the required file
$pageTitle = "My Page Title";
$userName  = "Arianne";

require "header.php";
// header.php can now use $pageTitle and $userName
?>'); ?></pre>
        <p>PHP variables are shared in the same scope — files included with require/include see the variables already defined.</p>
    </div>

<?php
/* require footer LAST — it closes </main>, </body>, </html>  */
require 'footer.php';
?>
