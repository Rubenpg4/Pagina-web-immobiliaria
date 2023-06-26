/* VARIABLES LOCALES*/
const activarsection= document.getElementById('toggleDark');

let getModesection=localStorage.getItem("modo");
    console.log(getMode + "section");

/* VARIABLES PARA EL section*/
const section=document.getElementsByClassName('spad')[0];



if(getModesection && getModesection=="dark"){
    section.classList.add("dark");

}

/* ATRIBUTOS PARA EL FOOTER*/

activarsection.addEventListener("click", () => {
    if (!section.classList.contains("dark")) {
      
      return section.classList.toggle("dark");
    } else {
      
      return section.classList.toggle("dark");
    }
  });


  $(document).ready(function(){
    $(".animate-from-bottom").addClass("show");
    $(".animate-from-bottom-2").addClass("show");
 });