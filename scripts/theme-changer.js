
let theme_changer = document.getElementById("theme-changer");
let continue_arrow = document.getElementById("continue-arrow");

theme_changer.addEventListener('click', function() {
    document.body.classList.toggle("dark-theme");
    if (document.body.classList.contains("dark-theme")) {
        theme_changer.src = "./assets/themes/sun.png";
        continue_arrow.src = "./assets/imgs/white_arrow.png";
    } else {
        theme_changer.src = "./assets/themes/moon.png";
        continue_arrow.src = "./assets/imgs/black_arrow.png";
    }
});