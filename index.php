<?php
if (defined('__BREAKDANCE_DIR__')) {
    require_once __BREAKDANCE_DIR__ . "/plugin/themeless/theme-simulator/breakdance-no-template.php";
} else {
   // TODO what do we want to put in there? A link to the plugins dir? A link to where they can buy Breakdance?
    ?>
    <section style="
    max-width: 600px;
    margin: 60px auto;
    padding: 20px 40px;
    background: rgb(205,203,250);
    background: linear-gradient(90deg, rgba(205,203,250,1) 0%, rgba(144,204,237,0.50) 100%);
    border-radius: 8px;
    font-family: sans-serif;
">
        <p>
            You're seeing an empty page because you're using <b>Breakdance Zero Theme</b>, but you don't have Breakdance installed and enabled.
        </p>
        <p style="font-size: 18px; font-weight: bold;">Please install and enable Breakdance.</p>
    </section>
<?php
}