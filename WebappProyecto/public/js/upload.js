/* VARIABLES LOCALES*/
const activarsection = document.getElementById('toggleDark');
const sections = document.querySelectorAll('section.spad');

const container = document.querySelectorAll('.input-container, .btn-primary2, .input2, .select2');


let getModesection = localStorage.getItem("modo");
console.log(getMode + "section");

/* VARIABLES PARA EL section */
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

/* animaciones */
$(document).ready(function () {
  $(".animate-from-bottom").addClass("show");
  $(".animate-from-bottom-2").addClass("show");
});




