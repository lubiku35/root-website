
/* SOCIAL ICONS */
let socials_linkedin = document.getElementById("socials-linkedin"); 
let socials_twitter = document.getElementById("socials-twitter"); 
let socials_instagram = document.getElementById("socials-instagram"); 
let socials_github = document.getElementById("socials-github"); 
let socials_codewars = document.getElementById("socials-codewars"); 
let socials_behance = document.getElementById("socials-behance"); 
let socials_dribbble = document.getElementById("socials-dribbble"); 
let socials_soundcloud = document.getElementById("socials-soundcloud"); 
let socials_twitch = document.getElementById("socials-twitch"); 
let socials_youtube = document.getElementById("socials-youtube"); 

let theme_changer = document.getElementById("theme-changer");
let continue_arrow = document.getElementById("continue-arrow");

theme_changer.addEventListener('click', function() {
    document.body.classList.toggle("dark-theme");
    if (document.body.classList.contains("dark-theme")) {
        theme_changer.src = "./assets/themes/sun.png";
        continue_arrow.src = "./assets/imgs/white_arrow.png";

        /* SCOCIAL ICONS */
        socials_linkedin.src = "./assets/socials/light/linkedin.svg";
        socials_twitter.src = "./assets/socials/light/twitter.svg";
        socials_instagram.src = "./assets/socials/light/instagram.svg";
        socials_github.src = "./assets/socials/light/github.svg";
        socials_codewars.src = "./assets/socials/light/codewars.svg";
        socials_behance.src = "./assets/socials/light/behance.svg";
        socials_dribbble.src = "./assets/socials/light/dribbble.svg";
        socials_soundcloud.src = "./assets/socials/light/soundcloud.svg";
        socials_twitch.src = "./assets/socials/light/twitch.svg";
        socials_youtube.src = "./assets/socials/light/youtube.svg";
 
    } else {
        theme_changer.src = "./assets/themes/moon.png";
        continue_arrow.src = "./assets/imgs/black_arrow.png";
    
        /* SCOCIAL ICONS */ 
        socials_linkedin.src = "./assets/socials/dark/linkedin.svg";
        socials_twitter.src = "./assets/socials/dark/twitter.svg";
        socials_instagram.src = "./assets/socials/dark/instagram.svg";
        socials_github.src = "./assets/socials/dark/github.svg";
        socials_codewars.src = "./assets/socials/dark/codewars.svg";
        socials_behance.src = "./assets/socials/dark/behance.svg";
        socials_dribbble.src = "./assets/socials/dark/dribbble.svg";
        socials_soundcloud.src = "./assets/socials/dark/soundcloud.svg";
        socials_twitch.src = "./assets/socials/dark/twitch.svg";
        socials_youtube.src = "./assets/socials/dark/youtube.svg";
    }
});