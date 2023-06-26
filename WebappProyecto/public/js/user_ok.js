 /* VARIABLES LOCALES*/
 const activarsection = document.getElementById('toggleDark');
 const sections = document.querySelectorAll('section.spad');
 
 const subtitleSections = document.querySelectorAll('p, h1, .normal');
 
 
 let getModesection = localStorage.getItem("modo");
 console.log(getMode + "section");
 
 /* VARIABLES PARA EL section */
 if (getModesection && getModesection === "dark") {
   sections.forEach(section => {
     section.classList.add("dark");
   });
   subtitleSections.forEach(section => {
     section.classList.add("dark");
   });
 }
 
 activarsection.addEventListener("click", () => {
   sections.forEach(section => {
     section.classList.toggle("dark");
   });
   subtitleSections.forEach(section => {
     section.classList.toggle("dark");
   });
 });
 