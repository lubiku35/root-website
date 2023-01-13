<?php
    $current_year = date("Y");
    $current_web_version = "v1.3";
?>

<section id='home-landing' class='landing-container'>
        <h1 id="home-landing-name">lubik<span class="handler-letter-spacing">u</span><span id="red-dot">.</span></h1>
        <footer class="landing-footer">
            <p id="year">\\ <?php echo $current_year?></p>
            <a href="#whoami"><img id="continue-arrow" src="./assets/imgs/black_arrow.png" alt="arrow image with link to next section"></a>
            <p id="version"><?php echo $current_web_version?></p>
        </footer>
</section>