<?php
$current_year = date("Y");
$current_version = "v1.5";
?>

<section id="welcome" class="full-height">
    <div class="heading-wrapper">
        <h1 id="project-heading">luboslav motosicky</h1>
        <h3 id="project-description-heading">studio | portfolio | branding</h3>
    </div>
    <div class="project-welcome-footer">
        <p>
            <?php echo $current_version ?>
        </p>
        <a href="">
            <svg fill="#000000" height="45px" width="45px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50" enable-background="new 0 0 50 50"
                xml:space="preserve">
                <path d="M34.36,31.301v-12c0-5.514-4.486-10-10-10s-10,4.486-10,10v12c0,5.514,4.486,10,10,10S34.36,36.814,34.36,31.301z
        M16.36,31.301v-12c0-4.411,3.589-8,8-8s8,3.589,8,8v12c0,4.411-3.589,8-8,8S16.36,35.712,16.36,31.301z" />
                <path
                    d="M26.982,20.487v-3c0-1.379-1.121-2.5-2.5-2.5s-2.5,1.121-2.5,2.5v3c0,1.379,1.121,2.5,2.5,2.5S26.982,21.866,26.982,20.487z
        M23.982,20.487v-3c0-0.275,0.225-0.5,0.5-0.5s0.5,0.225,0.5,0.5v3c0,0.275-0.225,0.5-0.5,0.5S23.982,20.763,23.982,20.487z" />
            </svg>
        </a>

        <p>// <?php echo $current_year ?>
        </p>
    </div>
</section>