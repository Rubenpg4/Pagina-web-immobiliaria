const activarsection = document.getElementById('toggleDark');
const sections = document.querySelectorAll('section');

const container = document.querySelectorAll('.enlaces, .container-propiedad, .h1-propiedades, .p-propiedades, .container-propiedades, .container-precios');

let getModesection = localStorage.getItem("modo");
console.log(getMode + "section");

if (getModesection && getModesection === "dark") {
  sections.forEach(section => {
    section.classList.add("dark");
  });
  container.forEach(item => {
    item.classList.add("dark");
  });
}

activarsection.addEventListener("click", () => {

  sections.forEach(section => {
    section.classList.toggle("dark");
  });
  container.forEach(section => {
    section.classList.toggle("dark");
  });
});


$(document).ready(function () {
  $(".animate-from-bottom").addClass("show");
  $(".animate-from-bottom-2").addClass("show");
});


