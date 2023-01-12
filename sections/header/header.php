<!-- Header Website Section -->
<header id='website-header'>
    <nav id='project-navigation'>
        <a href='./index.php'>luboslav motosicky</a>
        <ul>
            <li><a href='./index.php#projects'>projects</a></li>
            <li><a href='./index.php#whoami'>whoami</a></li>
            <li><a href='./contact.php'>contact</a></li>
            <?php
            if (isset($_SESSION["useruid"])) {
                echo "<li><a href='./profile.php'>profile</a></li>";
            }
            ?>
            <img src='./assets/themes/moon.png' id='theme-changer' alt='theme changer image' width='25px' height='25px'>
        </ul>
    </nav>
</header>