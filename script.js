// function para font awesome
function lanzarAlerta(title, text, icon){
    swal.fire({
        title: title,
        text: text,
        icon: icon
    })
}

//Codigo Ejecutar Modal consulta
//Cerrar Modal 
let closeModal = document.getElementById('modalData');
let botonCerrar = document.querySelector("#modalData .close");

botonCerrar.addEventListener("click", function() {
    let modal = bootstrap.Modal.getInstance(closeModal);
    modal.hide();
});
//Fin Cerrar Modal 

document.getElementById('myForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario

    let formData = new FormData(this);

    fetch('codigoConsulta.php', {
        method: 'POST',
        body: formData
    })
    .then(function(response) {
        if (!response.ok) {
            throw new Error('Error en la solicitud: ' + response.status);
        }
        return response.json();
    })
    .then(function(data) {
        let modalContent = document.getElementById('modalContent');
        modalContent.innerHTML = '';

        if (data.mensaje) {
            // Mostrar mensaje de error
            let mensajeError = document.createElement('p');
            mensajeError.innerText = data.mensaje;
            modalContent.appendChild(mensajeError);
        } else {
            // Mostrar datos del cliente
            let cliente = document.createElement('p');
            cliente.innerText = 'Cliente: ' + data.cliente;
            modalContent.appendChild(cliente);

            let estado = document.createElement('p');
            estado.innerText = 'Estado del celular: ' + data.estado;
            modalContent.appendChild(estado);

            let observacion = document.createElement('p');
            observacion.innerText = 'Observacion del celular: ' + data.observacion;
            modalContent.appendChild(observacion);
        }

        // Abrir el modal
        let modal = new bootstrap.Modal(document.getElementById('modalData'));
        modal.show();
    })
    .catch(function(error) {
        console.log('Error: ', error);
    });
});
//Fin codigo Ejecutar Modal consulta

//inicio codigo Navbar
const toggleBtn= document.querySelector('.toggle_btn')
const toggleBtnIcon= document.querySelector('.toggle_btn i')
const dropDownMenu= document.querySelector('.dropdown_menu')

toggleBtn.onclick= function(){
  dropDownMenu.classList.toggle('open')
  const isOpen= dropDownMenu.classList.contains('open')
  
  toggleBtnIcon.classList= isOpen 
  ? 'fas fa-bars'
  : 'fas fa-bars'
}
//Fin codigo Navbar

//Inicio Card-modal-Tarjetas de reparacion
let popupViews= document.querySelectorAll('.popup-view')
let poupBtns= document.querySelectorAll('.popup-btn')
let closeBtn= document.querySelectorAll('.close-btn')

let popup= function(popupClick){
  popupViews[popupClick].classList.add('active')
}

poupBtns.forEach((poupBtn, i) => {
  poupBtn.addEventListener("click", () => {
    popup(i)
  })
})

closeBtn.forEach((closeBtn) => {
  closeBtn.addEventListener("click", () =>{
      popupViews.forEach((popupViews) => {
        popupViews.classList.remove('active')
      })
  })
})
//Fin Card-modal-Tarjetas de reparacion


// JS Carrousel instagram
class Carrusel {
  constructor(carruselNumber) {
    this.track = document.querySelector(`#track${carruselNumber}`);
    this.carruselList = document.querySelector(`#carrusel-list${carruselNumber}`);

    this.carruselList.addEventListener('click', (event) => {
      if (event.target.classList.contains('carrusel-arrow')) {
        this.processingButton(event);
      }
    });
  }

  processingButton(event) {
    const btn = event.target;
    const carrusel = this.track.querySelectorAll('.carrusel2');

    const trackWidth = this.track.offsetWidth;
    const carruselWidth = carrusel[0].offsetWidth;
    const listWidth = this.carruselList.offsetWidth;

    let leftPosition = parseFloat(this.track.style.left) || 0;
    if (btn.dataset.button === "button-prev") {
      this.prevAction(leftPosition, carruselWidth);
    } else {
      this.nextAction(leftPosition, trackWidth, listWidth, carruselWidth);
    }
  }

  prevAction(leftPosition, carruselWidth) {
    if (leftPosition < 0) {
      this.track.style.left = `${leftPosition + carruselWidth}px`;
    }
  }

  nextAction(leftPosition, trackWidth, listWidth, carruselWidth) {
    if (leftPosition > (listWidth - trackWidth)) {
      this.track.style.left = `${leftPosition - carruselWidth}px`;
    }
  }
}

// Ejecutar el código después de que el DOM haya cargado completamente
window.onload = function() {
  // Inicializar cada carrusel
  const carrusel1 = new Carrusel(1);
  const carrusel2 = new Carrusel(2);
};
// JS fin Carrousel instagram


