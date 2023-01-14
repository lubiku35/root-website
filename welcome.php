<?php
$current_year = date("Y");
$current_version = "v1.5";
?>

<section id="welcome">
    <div class="alignment-controller"></div>
    <div class="heading-wrapper">
        <h1 id="project-heading">luboslav motosicky</h1>
        <h3 id="project-description-heading">studio | portfolio | branding</h3>
    </div>
    <div class="project-welcome-footer">
        <p>
            <?php echo $current_version ?>
        </p>
        <a href="">
            <svg width="33" height="26" viewBox="0 0 33 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L16.5 16L32 1" stroke="black" stroke-width="2" />
                <path d="M1 9L16.5 24L32 9" stroke="black" stroke-width="2" />
            </svg>
        </a>
        <p>// <?php echo $current_year ?>
        </p>
    </div>
</section>