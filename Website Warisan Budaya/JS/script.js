// Toggle Class Active
const navbarNav = document.querySelector(".navbar-nav");
// Ketika humburger menu diklik class 'active' aktif
document.querySelector("#humburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Klik di luar sidebar untuk menghilangkan navbarside
const hamburger = document.querySelector("#humburger-menu");

document.addEventListener("click", function (e) {
  if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

const chevronDown = document.querySelector(".navbar-nav");

document.querySelector("#chevron-down").onclick = () => {
  navbarNav.classList.toggle("aktif");
};
