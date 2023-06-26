/* MEMORIA LOCAL PARA GUARDAR EL MODO OSCURO */
const activar= document.getElementById('toggleDark');
const body = document.querySelector('body');
const main= document.getElementById('main');
const card_body= document.getElementById('card_body');
const login_card_description= document.getElementById('login_card_description');
const login_id=document.getElementById('login');
const login_card_footer_text=document.getElementById('login_card_footer_text');
const mastarde = document.getElementById('mastarde');
const msg=document.querySelectorAll('.msg');
const formControls = document.querySelectorAll('.form-control');

const logo=document.getElementById('logo_pag');
icono = document.querySelector(".div-btn-icon i");


let getMode=localStorage.getItem("modo");
    console.log(getMode);

if(getMode && getMode=="dark"){
    body.classList.add("dark");
    activar.classList.add("active"); /*Aqui es donde se añaden divs , hacer para botones y tal*/
    main.classList.add("dark");
    card_body.classList.add("dark");
    login_card_description.classList.add("dark");
    login_id.classList.add("dark");
    login_card_footer_text.classList.add("dark");
    mastarde.classList.add("dark");

    icono.classList.replace("bx-sun","bx-moon");
    logo.src="img/logoJaen&CoLight.png";

    for(let i=0;i<msg.length;i++){
        msg[i].classList.add("dark");
    }
    for(let i=0;i<formControls.length;i++){
        formControls[i].classList.add("dark");
    }
}

/* COGE EL ID EN VEZ DE LA CLASE DEL SWITCH  */


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
    main.classList.toggle("dark");
    card_body.classList.toggle("dark");
    login_card_description.classList.toggle("dark");
    login_id.classList.toggle("dark");
    login_card_footer_text.classList.toggle("dark");
    mastarde.classList.toggle("dark");

    if(!body.classList.contains("dark")){
        return localStorage.setItem("modo","light");
    }
        localStorage.setItem("modo","dark");
    
});

/* ACTIVAR ATRIBUTOS DEL SMALL */

activar.addEventListener("click", ()=>{
    
    if(!card_body.classList.contains("dark")){
        for(let i=0;i<msg.length;i++){
            msg[i].classList.toggle("dark");
        }
        for(let i=0;i<formControls.length;i++){
            formControls[i].classList.toggle("dark");
        }
    }else{
        for(let i=0;i<msg.length;i++){
            msg[i].classList.toggle("dark");
        }
        for(let i=0;i<formControls.length;i++){
            formControls[i].classList.toggle("dark");
        }
    }
});


/* PARA ACTIVAR LOS MENSAJES DE ERROR */

$("#login").click(function(){
    console.log("entrando...");
    if(validarForm()==false){
        console.log("FORM incorrect!");
    }else{
        console.log("FORM valido!");
    }
});

/**
 * VER SI HAY CAMPOS VACIOS Y DESCTIVAR EL BOTON DE ENVIAR
 */

$('#password , #email').on("input", function(){
    if($('#password').val() == "" || $('#email').val() == ""){
        $('#login').attr("disabled", "disabled");
    }else{
        $('#login').removeAttr("disabled");
    }
});

 /**
 * Validar el email del formulario
 * devuelve Fasle para no realizar la peticion POST
 */
 function validarForm(event){
    var str_email= $('[name=email]').val();
    var str_pass=$('[name=password]').val();

    if(str_email.length < 6 || str_email.length > 40){
        var msg_error = $('#err_msg_email')
        msg_error.text("Longitud debe estar entre 6 y 40");
        msg_error.fadeIn("slow");
        msg_error.delay(3000).fadeOut("slow");

        if(str_pass.length < 4){
            var msg_errorr = $('#err_msg_pass')
            msg_errorr.text("Longitud necesaria minima es de 4 caracteres");
            msg_errorr.fadeIn("slow");
            msg_errorr.delay(3000).fadeOut("slow");
            return false;
        }else
            return false;
        
    }else if(str_pass.length < 4){
        var msg_errorr = $('#err_msg_pass')
        msg_errorr.text("Longitud necesaria minima es de 4 caracteres");
        msg_errorr.fadeIn("slow");
        msg_errorr.delay(3000).fadeOut("slow");
        return false;
    }else
        return true;
}
