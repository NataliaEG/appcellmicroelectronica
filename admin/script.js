//Enviar los datos del modal editar
const btn_actualizar= document.getElementById("actualizar");
const formulario = document.getElementById("form_agregar");
let buscador= document.getElementById("buscador")
let botonBuscar = document.getElementById("buscar")

//----------------Mostrar Datos en tabla----------------------------
function obtenerLista(){
    fetch("lista_clientes.php")
      .then((response) =>  response.json())
      .then((datos) => {
        cargarDatos(datos);

        buscador.addEventListener("click", () => {
          filtrarBuscador(datos)
        })
      });
} 

function cargarDatos(arrayClientes) {
  let contenedor = document.getElementById("datosClientes");
  contenedor.innerHTML = "";
 
  arrayClientes.forEach(
    ({
      id,
      cliente,
      telefono,
      codigo,
      modelo,
      falla,
      observacion,
      fecha_ingreso,
      fecha_entrega,
      precio,
      imei,
      estado,
    }) => {
      let tarjeta = document.createElement("tr");
      tarjeta.className = "tarjeta";

      tarjeta.innerHTML = `
        <td scope="row">${id}</td>
        <td scope="row">${cliente}</td>
        <td scope="row">${telefono}</td>
        <td scope="row">${codigo}</td>
        <td scope="row">${modelo}</td>
        <td scope="row">${falla}</td>
        <td scope="row">${observacion}</td>
        <td scope="row">${fecha_ingreso}</td>
        <td scope="row">${fecha_entrega}</td>
        <td scope="row">${precio}</td>
        <td scope="row">${imei}</td>
        <td scope="row">${estado}</td>
        <td>
          <a class="btn btn-primary" onclick="editarModal(${id})" value="${id}">
            <i class="fa fa-edit"></i>
          </a>
        </td>
        <td>
          <button  class="btn btn-danger" id="borrar"  onclick="borrarCliente(event)" data-id="${id}">
            <i class="fa fa-trash"></i>
          </button>
        </td>
      `;
      contenedor.appendChild(tarjeta);
    }
  );
}
 
function filtrarBuscador(datos) {
  let arrayFiltrado = datos.filter(({ cliente }) =>
    cliente.includes(buscador.value.toLowerCase())
  );
  cargarDatos(arrayFiltrado);
}



fetch("lista_clientes.php")
  .then((response) => response.json())
  .then((datos) => {
    buscador.addEventListener("input", () => {
      filtrarBuscador(datos);
    });
  });

 

//----------------Actualizar Datos----------------------------
btn_actualizar.addEventListener("click", function(e){
    e.preventDefault(); // Evitar el envío del formulario

    // Obtención de datos
    const id =            document.getElementById("editar-id").value;
    const cliente =       document.getElementById("editar-cliente").value;
    const telefono =      document.getElementById("editar-telefono").value;
    const codigo =        document.getElementById("editar-codigo").value;
    const modelo =        document.getElementById("editar-modelo").value;
    const falla =         document.getElementById("editar-falla").value;
    const observacion =   document.getElementById("editar-observacion").value;
    const fecha_ingreso = document.getElementById("editar-fecha_ingreso").value;
    const fecha_entrega = document.getElementById("editar-fecha_entrega").value;
    const precio =        document.getElementById("editar-precio").value;
    const imei =          document.getElementById("editar-imei").value;
    const estado =        document.getElementById("editar-estado").value;
 
    // Validación de datos
    if (cliente === "" || codigo === "" || modelo === "" || falla === "" ) {
      alert("Ingrese todos los datos, por favor.");
      return;
    }

    fetch(`editar_cliente.php?id=${id}&opcion=modificar`, {
      method: "POST",
      body: JSON.stringify({
        id,
        cliente,
        telefono,
        codigo,
        modelo,
        falla,
        observacion,
        fecha_ingreso,
        fecha_entrega,
        precio,
        imei,
        estado
      }),
      headers: {
        "Content-Type": "application/json",
      },
    })
      .then((response) => response.json())
      .then((resultado) => {
        if (resultado.estado === true) {
          $("#modal-editar").modal("hide");

          // Muestra el modal si todo está bien
          lanzarAlerta("Solicitud exitosa", "La edición se realizó con éxito", "success")
          location.reload();
        } else {
          // Muestra el modal si hay un error
          lanzarAlerta("Ocurrió un error", "La edición no se realizó con éxito", "error")
        }
      });
  });

//traer los datos al modal editar
function editarModal(id) {
  // Abrir modal
  $("#modal-editar").modal("show");
  // Obtener datos del elemento
  fetch(`editar_cliente.php?id=${id}`)
  .then((response) => response.json())
  .then((elemento) => {
    // Rellenar el formulario
    document.getElementById("editar-id").value =            elemento[0].id;
    document.getElementById("editar-cliente").value =       elemento[0].cliente;
    document.getElementById("editar-telefono").value =      elemento[0].telefono;
    document.getElementById("editar-codigo").value =        elemento[0].codigo;
    document.getElementById("editar-modelo").value =        elemento[0].modelo;
    document.getElementById("editar-falla").value =         elemento[0].falla;
    document.getElementById("editar-observacion").value =   elemento[0].observacion;
    document.getElementById("editar-fecha_ingreso").value = elemento[0].fecha_ingreso;
    document.getElementById("editar-fecha_entrega").value = elemento[0].fecha_entrega;
    document.getElementById("editar-precio").value =        elemento[0].precio;
    document.getElementById("editar-imei").value =          elemento[0].imei;
    document.getElementById("editar-estado").value =        elemento[0].estado;
  });
}

//----------------Mostrar alerta----------------------------
function lanzarAlerta(title, text, icon){
  swal.fire({
      title,
      text,
      icon
  })
}


//-------------Borrar usuario--------------------

function borrarCliente(event) {
  const button = event.target;
  // Obtener el ID del cliente del atributo "data-id" del botón
  const id = button.getAttribute('data-id');
  // Confirmar la eliminación con el usuario
  //if (confirm("¿Estás seguro de que deseas eliminar este cliente?")) {
  // }
  Swal
    .fire({
        title: "¿Eliminar cliente?",
        text: "¿Estás seguro de que deseas eliminar este cliente?",
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: "Sí, eliminar",
        cancelButtonText: "Cancelar",
    })
    .then(resultado => {
      if (resultado.value) {
      
    // Enviar una solicitud fetch para eliminar el cliente
    fetch('eliminar_cliente.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({ id: id })
    })
      .then(response => response.json())
      .then(data => {
        // Hacer algo con la respuesta del servidor, si es necesario
        console.log(data);

        // Mostrar una alerta si el cliente se eliminó correctamente
        if (data.success) {
          lanzarAlerta("Cliente eliminado", "El cliente ha sido eliminado correctamente", "success");
          location.reload();
          //obtenerLista(); // Actualizar la lista de clientes después de la eliminación
          
        } else {
          lanzarAlerta("Error", "No se pudo eliminar el cliente", "error");
        }
      })
      .catch(error => {
        console.error(error);
        lanzarAlerta("Error", "Ocurrió un error al procesar la solicitud", "error");
      });
        // Hicieron click en "Sí"
        console.log("*se elimina la venta*");
      } else {
          // Dijeron que no
          console.log("*NO se elimina la venta*");
      }
  });
  
}

//----------------Agregar nuevo usuario------------------------------
formulario.addEventListener("submit", (event) => {
  event.preventDefault()
  // Crear objeto FormData
  const formData = new FormData(document.getElementById('form_agregar'))
  // Obtener los datos del formulario
  const cliente = document.getElementById("modal-cliente").value;
  const telefono = document.getElementById("modal-telefono").value;
  const codigo = document.getElementById("modal-codigo").value;
  const modelo = document.getElementById("modal-modelo").value;
  const falla = document.getElementById("modal-falla").value;
  const observacion = document.getElementById("modal-observacion").value;
  const fecha_ingreso = document.getElementById("modal-fecha_ingreso").value;
  const fecha_entrega = document.getElementById("modal-fecha_entrega").value;
  const precio = document.getElementById("modal-precio").value;
  const imei = document.getElementById("modal-imei").value;
  const estado = document.getElementById("modal-estado").value;
  // Agregar los datos al objeto FormData
  formData.append('modal-cliente', cliente);
  formData.append('modal-telefono', telefono);
  formData.append('modal-codigo', codigo);
  formData.append('modal-modelo', modelo);
  formData.append('modal-falla', falla);
  formData.append('modal-observacion', observacion);
  formData.append('modal-fecha_ingreso', fecha_ingreso);
  formData.append('modal-fecha_entrega', fecha_entrega);
  formData.append('modal-precio', precio);
  formData.append('modal-imei', imei);
  formData.append('modal-estado', estado);

  // Deshabilitar el botón mientras se envían los datos
  agregar.disabled = true;
  // Enviar los datos mediante una solicitud fetch
  fetch('agregar_cliente.php',{
    method:'POST',
    body: formData
  })
    .then(response => response.json())
    .then(data => {
      // Hacer algo con la respuesta del servidor, si es necesario
      console.log(data)
      // Habilitar el botón nuevamente después de completar la solicitud
      agregar.disabled = false
      // Cerrar el modal si se ha agregado correctamente el cliente
      if (data.success) {
        $('#modal-insertar').modal('hide');
        // Muestra el modal si todo está bien
        lanzarAlerta("Solicitud exitosa", "Se agregó al usuario con éxito", "success");
        //obtenerLista();
      } else {
        // Muestra el modal si hay un error
        lanzarAlerta("Solicitud fallida", "No se pudo agregar al usuario", "error");
      }
    })
    .catch(error => {
      // Manejar cualquier error de la solicitud
      console.error(error);
      // Habilitar el botón nuevamente en caso de error
      agregar.disabled = false;
    });
});

 

//---------------Filtrar estado--------------------------
let selectEstado = document.getElementById("estado")

function filtrarPorEstado(clientes, estadoSeleccionado) {
  let arrayFiltrado = [];
  for (let i = 0; i < clientes.length; i++) {
    if (clientes[i].estado === estadoSeleccionado) {
      arrayFiltrado.push(clientes[i]);
    }
  }
  return arrayFiltrado;
}


function eliminarFiltro(){
  selectEstado.value = "";
  //obtenerLista()
} 

fetch("lista_clientes.php")
      .then((response) =>  response.json())
      .then((datos) => {

        // Uso de la función
      selectEstado.addEventListener("change", () => {
        let estadoSeleccionado = selectEstado.value;
        let arrayFiltrado = filtrarPorEstado(datos, estadoSeleccionado);
        cargarDatos(arrayFiltrado);
      });
    });



//-------------Paginacion-----------------

/*
function cargarPagina(page, pageSize) {
  const url = `paginacion.php?page-nr=${page}&pageSize=${pageSize}`;

  fetch(url)
    .then(response => response.json())
    .then(data => {
      // 'data' contiene los datos de la página solicitada
      cargarDatos(data.data);

      // Actualizamos los controles de paginación con los datos recibidos
      actualizarControlesPaginacion(page, pageSize, data.total);
    })
    .catch(error => {
      // Manejo de errores si la solicitud falla
      console.error('Error al cargar la página:', error);
    });
}

// Llamada inicial para cargar la primera página
cargarPagina(1, 4); // Puedes ajustar los valores de página y pageSize según tus necesidades

// Resto del código JavaScript...


*/
//-------------Fin Paginacion-----------------


//-------------Inicio generado de codigo-----------------
let numeros= "0123456789"
let letras= "abcdefghijklmnopqrstuvwxyz"
let todo= numeros + letras

function generateRandomNumber(){
  let longitud= 6
  let password= ""
  for(let x = 0; x<longitud; x++){
    let aleatorio= Math.floor(Math.random() * todo.length)
    password += todo.charAt(aleatorio)
  }

  // Asigna el número aleatorio al input
  document.getElementById('modal-codigo').value = password;
}
//-------------Fin generado de codigo----------------- 

function mostrar(){
  document.getElementById("accordion").style.display = "block";
  document.getElementById("boton-1").style.display = "none"
}

function ocultar(){
  document.getElementById("accordion").style.display = "none";
  document.getElementById("boton-1").style.display = "block"

}