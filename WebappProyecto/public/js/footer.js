
/* VARIABLES LOCALES*/
const activarfooter= document.getElementById('toggleDark');

let getModefoot=localStorage.getItem("modo");
    console.log(getMode + "footer");

/* VARIABLES PARA EL FOOTER*/
const footer=document.getElementById('footer');
const footerLinks=document.querySelectorAll('.footer-link');


if(getModefoot && getModefoot=="dark"){

    footer.classList.add("dark");

    for(let i=0;i<footerLinks.length;i++){
        footerLinks[i].classList.add("dark");
    }
}

/* ATRIBUTOS PARA EL FOOTER*/

activarfooter.addEventListener("click", () => {
    if (!footer.classList.contains("dark")) {
      for (let i = 0; i < footerLinks.length; i++) {
        footerLinks[i].classList.toggle("dark");
      }
      return footer.classList.toggle("dark");
    } else {
      for (let i = 0; i < footerLinks.length; i++) {
        footerLinks[i].classList.toggle("dark");
      }
      return footer.classList.toggle("dark");
    }
  });