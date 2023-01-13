const header_navigation = document.getElementById('project-header');
window.addEventListener('scroll', function() {
    header_navigation.classList.toggle("header-scrolled", window.scrollY > 100);
})