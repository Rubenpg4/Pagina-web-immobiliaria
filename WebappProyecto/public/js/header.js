

/* MEMORIA LOCAL PARA GUARDAR EL MODO OSCURO */
const activar= document.getElementById('toggleDark');
const body = document.querySelector('body');
icono = document.querySelector(".div-btn-icon i");
const logo=document.getElementById('logo_pag');
/* VARIABLES PARA EL NAVBAR*/
const Navbar=document.getElementById('Navbar');
const Navlinks= document.querySelectorAll('.nav-link');
const BotonPrimary=document.querySelectorAll('.btn-primary');
const formControls = document.querySelectorAll('.form-control');
const container2 = document.querySelectorAll('.dropdown-menu', '.dropdown-item');

/* VARIABLES PARA EL FOOTER*/
/*
const footer=document.getElementById('footer');
const footerLinks=document.querySelectorAll('.footer-link');
*/
let getMode=localStorage.getItem("modo");
    console.log(getMode + "header");

    if(getMode && getMode=="dark"){
        body.classList.add("dark");
        activar.classList.add("active");
        icono.classList.replace("bx-sun","bx-moon");
        logo.src="img/logoJaen&CoLight.png";
        Navbar.classList.replace("bg-dark","bg-dark-dark");
        Navbar.classList.replace("shadow-light","shadow-dark");
        //footer.classList.add("dark");
        
        for(let i = 0;i<Navlinks.length;i++){
            Navlinks[i].classList.add("dark");
        }
        for(let i=0;i<BotonPrimary.length;i++){
            BotonPrimary[i].classList.add("dark");
        }
        for(let i=0;i<formControls.length;i++){
            formControls[i].classList.add("dark");
        }
        container2.forEach(item => {
            item.classList.add("dark");
          });
        /*
        for(let i=0;i<footerLinks.length;i++){
            footerLinks[i].classList.add("dark");
        }*/
    }

/* Codigo para el activo del NAVBAR*/

var currentUrl = window.location.href;
var links = document.querySelectorAll('.navbar-nav a');

for (var i = 0; i < links.length; i++) {
    var linkUrl = links[i].href;

    if (currentUrl.indexOf(linkUrl) !== -1) {
        links[i].classList.add('active');
    } else {
        links[i].classList.remove('active');
    }
}


/* IGUAL QUE EL DE ARRIBA , PERO COGE EL ID EN VEZ DE LA CLASE   */



activar.addEventListener("click",function(){
    activar.classList.toggle("active");
    
    if(this.classList.contains("active")){
        console.log("El activo está ON");
        icono.classList.replace("bx-sun","bx-moon");
        return logo.src="img/logoJaen&CoLight.png";
    }else{
        console.log("El activo está OFF");
        icono.classList.replace("bx-moon","bx-sun");
        return logo.src="img/logoJaen&CoDark.png";
    }
});


/* ACTIVAR EL MODO OSCURO EN EL BODY => BODY.DARK{} */

activar.addEventListener("click",()=>{
    body.classList.toggle("dark"); /*Aqui es donde se activa el modo oscuro del body , hacer para botones y tal*/
    if(!body.classList.contains("dark")){
        return localStorage.setItem("modo","light");
    }
        localStorage.setItem("modo","dark");
});

/* ACTIVAR ATRIBUTOS DEL NAVBAR */

activar.addEventListener("click", ()=>{
    
    if(!Navbar.classList.contains("bg-dark")){
        Navbar.classList.replace("shadow-dark","shadow-light");
        for(let i = 0;i<Navlinks.length;i++){
            Navlinks[i].classList.toggle("dark");
        }
        for(let i=0;i<BotonPrimary.length;i++){
            BotonPrimary[i].classList.toggle("dark");
        }
        for(let i=0;i<formControls.length;i++){
            formControls[i].classList.toggle("dark");
        }
        container2.forEach(item => {
            item.classList.add("dark");
          });
        return Navbar.classList.replace("bg-dark-dark","bg-dark");
    }else{
        Navbar.classList.replace("shadow-light","shadow-dark");
        for(let i = 0;i<Navlinks.length;i++){
            Navlinks[i].classList.toggle("dark");
        }
        for(let i=0;i<BotonPrimary.length;i++){
            BotonPrimary[i].classList.toggle("dark");
        }
        for(let i=0;i<formControls.length;i++){
            formControls[i].classList.toggle("dark");
        }
        container2.forEach(item => {
            item.classList.add("dark");
          });
        return Navbar.classList.replace("bg-dark","bg-dark-dark");
    }
});

/* ATRIBUTOS PARA EL FOOTER*/
/*
activar.addEventListener("click", () => {
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

*/

/* FUNCION PARA USAR PUNTOS DE ANCLAJE PARA REDIRECCIONAR EN EL HTML */
/* EJEMPLO DE USO -----> <button onclick="scrollToSection('mas-informacion')"> */
function scrollToSection(id) {
    var section = document.getElementById(id);
    section.scrollIntoView({ behavior: "smooth", block: "start", inline: "nearest" });
  }

