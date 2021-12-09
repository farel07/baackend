

// body
const body = document.querySelector("body");

const burger = document.querySelector(".hamburger");
const nav = document.querySelector("nav ul");


burger.addEventListener("click", function () {
  burger.classList.toggle("transform");
  nav.classList.toggle("slide");
  body.classList.toggle("black");
});

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


