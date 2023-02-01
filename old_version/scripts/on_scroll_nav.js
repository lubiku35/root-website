const project_header = document.getElementById("project-header");
window.onscroll = function() {
  let currentScrollPos = window.pageYOffset;
  if (currentScrollPos === 0 || currentScrollPos === 1) {
    project_header.style.top = "0";
  } else if (window.matchMedia("(max-width: 950px)").matches) {
    project_header.style.top = "-135px";
  } else {
    project_header.style.top = "-65px";
  }
}