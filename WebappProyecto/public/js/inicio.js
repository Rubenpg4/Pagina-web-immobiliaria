/* VARIABLES LOCALES*/
const activarsection= document.getElementById('toggleDark');

let getModesection=localStorage.getItem("modo");
    console.log(getMode + "section");

/* VARIABLES PARA EL section*/
const sections = document.querySelectorAll('section.spad,.modal-content');
const filtro = document.querySelectorAll('.input-filtro, .parrafo');


if(getModesection && getModesection=="dark"){
  sections.forEach(section => {
    section.classList.add("dark");
  });
  filtro.forEach(section => {
    section.classList.add("dark");
  });

}

activarsection.addEventListener("click", () => {
  sections.forEach(section => {
    section.classList.toggle("dark");
  });
  filtro.forEach(section => {
    section.classList.toggle("dark");
  });
});


  $(document).ready(function(){
    $(".animate-from-bottom").addClass("show");
    $(".animate-from-bottom-2").addClass("show");
 });

/* 
  ACTIVO EN BOTONES DE BUSQUEDA
*/

const botones = document.querySelectorAll('.boton-alquilar, .boton-comprar');
const inputOpcionSeleccionada = document.getElementById('opcionSeleccionada');

botones.forEach(boton => {
  boton.addEventListener('click', function(event) {
    event.preventDefault(); // Agregado para evitar la acción predeterminada del botón
    botones.forEach(boton => {
      boton.classList.remove('activo');
      boton.name = "boton-inactivo";
    });
    this.classList.add('activo');
    this.name = "boton-activo";

    inputOpcionSeleccionada.value = this.value;
  });
});


const opciones = document.querySelectorAll('.opcion');
opciones.forEach(opcion => {
  opcion.addEventListener('click', function(event) {
    event.preventDefault(); // Agregado para evitar la acción predeterminada del botón
    opciones.forEach(opcion => {
      opcion.classList.remove('activo');
      boton.name = "boton-inactivo"
    });
    this.classList.add('activo');
    this.name = "boton-activo";

    inputOpcionSeleccionada.value = this.value;
  });
});

// Obtener los elementos necesarios
var filterToggle = document.querySelector('.filter-toggle');
var container33 = document.querySelector('#container-33');
var container66 = document.querySelector('#container-66');
var modal = document.getElementById('myModal');
var modalFilter = document.getElementById('modal-filter');

// Mostrar el modal con el filtro
filterToggle.addEventListener('click', function() {
  modal.style.display = 'block';
});

// Cerrar el modal al hacer clic en el botón de cerrar
var closeBtn = document.querySelector('.close');
closeBtn.addEventListener('click', function() {
  modal.style.display = 'none';
});

// Actualizar el contenido del modal con el filtro al hacer clic en el botón "Actualizar"
var submitButton2 = document.getElementById('submitButton2');
submitButton2.addEventListener('click', function() {
  // Aquí puedes agregar el código necesario para obtener los valores del filtro y actualizar el contenido del modalFilter
  // Por ejemplo:
  // var minPrecioCompra = document.getElementById('minPrecioCompra').value;
  // var maxPrecioCompra = document.getElementById('maxPrecioCompra').value;
  // ...
  // modalFilter.innerHTML = 'Valores del filtro: ' + minPrecioCompra + ' - ' + maxPrecioCompra;

  // Cerrar el modal después de actualizar el filtro
  modal.style.display = 'none';
});

// Mostrar u ocultar los contenedores según la resolución de la pantalla
function toggleContainers() {
  if (window.innerWidth < 1333) {
    container33.style.display = 'none';
    container66.style.width = '100%';
  } else {
    container33.style.display = 'block';
    container66.style.width = '66.66%';
  }
}

// Llamar a toggleContainers al cargar la página
toggleContainers();

// Volver a llamar a toggleContainers cuando la ventana cambie de tamaño
window.addEventListener('resize', toggleContainers);