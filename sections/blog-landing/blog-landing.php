<?php
    $current_year = date("Y");
    $current_web_version = "v1.3";
?>

<section id='blog-landing' class='landing-container'>
        <h1 id="blog-landing-name">metanoi<span class="handler-letter-spacing">a</span><span id="red-dot">.</span></h1>
        <section id='blog-main-navigation'>
            <a href="./blog-join.php" id='blog-join'>join</a>
            <a href="http://">about metanoia</a>
        </section>
        <footer class="landing-footer">
            <p id="year">\\ <?php echo $current_year?></p>
            <a href="#whoami"><img id="continue-arrow" src="./assets/imgs/black_arrow.png" alt="arrow image with link to next section"></a>
            <p id="version"><?php echo $current_web_version?></p>
        </footer>
</section>

