window.addEventListener("scroll", () => {
  let navbar = document.querySelector("nav");
  let scrolled = false;

  if (document.documentElement.scrollTop > 0) {
    navbar.classList.add("navbar-down");
  }
});

let aboutLink = document.querySelector("");

let about = document.querySelector(".about");

let rect = about.getBoundingClientRect();

// if (rect.top > document.documentElement.scrollTop) {
//   about.classList.add("active");
// }
