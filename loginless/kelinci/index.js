<<<<<<< HEAD
const burger = document.querySelector(".hamburger");
const nav = document.querySelector("nav ul");
const body = document.querySelector("body");
=======
// body
const body = document.querySelector("body");

const burger = document.querySelector(".hamburger");
const nav = document.querySelector("nav ul");
>>>>>>> 943dcbb (initial commit)

burger.addEventListener("click", function () {
  burger.classList.toggle("transform");
  nav.classList.toggle("slide");
  body.classList.toggle("black");
});
<<<<<<< HEAD
=======

const dropbar = document.querySelector(".dropbar");
const ulDrop = document.querySelector(".ulDrop");
const profil = document.querySelector(".profil");

dropbar.addEventListener("click", function () {
  ulDrop.style.display = "block";

  dropbar.style.transform = "rotate(360deg)";
});

profil.addEventListener("mouseleave", function () {
  ulDrop.style.display = "none";

  dropbar.style.transform = "rotate(180deg)";
});

// nav menu
const menu = document.querySelectorAll(".menu li a");
menu.forEach(function (menuSemua) {
  menuSemua.addEventListener("mouseleave", function () {
    menuSemua.style.transition = "1s";
  });
});
>>>>>>> 943dcbb (initial commit)
