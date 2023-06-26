

/*ANIMACION DE CAMBIO DE ICONO PARA SWITCH (MODO OSCURO) Y ASIGNACION DE class="active" */
/*
const BTN_ModoOscuro = document.querySelector(".div-btn-switch");
icono = document.querySelector(".div-btn-icon i");

BTN_ModoOscuro.addEventListener("click",() =>{
    BTN_ModoOscuro.classList.toggle("active");

    if(BTN_ModoOscuro.classList.contains("active")){
        return icono.classList.replace("bx-sun","bx-moon");
    }else{
        return icono.classList.replace("bx-moon","bx-sun");
    }
});
*/

/* MEMORIA LOCAL PARA GUARDAR EL MODO OSCURO */
const activar= document.getElementById('toggleDark');
const body = document.querySelector('body');
icono = document.querySelector(".div-btn-icon i");

let getMode=localStorage.getItem("modo");
    console.log(getMode);

if(getMode && getMode=="dark"){
    body.classList.add("dark");
    activar.classList.add("active");
    icono.classList.replace("bx-sun","bx-moon");
}

/* IGUAL QUE EL DE ARRIBA , PERO COGE EL ID EN VEZ DE LA CLASE   */



activar.addEventListener("click",function(){
    activar.classList.toggle("active");
    
    if(this.classList.contains("active")){
        console.log("El activo está ON");
        return icono.classList.replace("bx-sun","bx-moon");
    }else{
        console.log("El activo está OFF");
        return icono.classList.replace("bx-moon","bx-sun");
    }
});


/* ACTIVAR EL MODO OSCURO EN EL BODY => BODY.DARK{} */

activar.addEventListener("click",()=>{
    body.classList.toggle("dark");
    if(!body.classList.contains("dark")){
        return localStorage.setItem("modo","light");
    }
        localStorage.setItem("modo","dark");
    
});

 /* A LA HORA DE HACER EL BODY , CREAMOS :
 
    "body {} " y un "" body.dark{} ""
 */
