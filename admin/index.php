<?php 
require_once "vistas/parte_superior.php"; 
require_once "paginacion.php";
?>
<style>

#button{
  display: flex;
  margin-top: -38px;
  margin-left: 235px;
  border-radius: 0 10px 10px 0;
}

.form-select{
    width: 75%;
}

@media (min-width: 576px){
  .col-sm-4 {
    margin: 0px 60px 9px 55px;
    width: 29.333333%;
  }
}

.row {
    /* --bs-gutter-x: 125.5rem; */
    display: flex;
    flex-wrap: nowrap;
}

.anterior .siguiente{
  cursor: pointer;
}
.anterior{
  cursor: pointer;
}

#wrapper #content-wrapper #content {
    font-size: small;
}
.container, .container-fluid, .container-lg, .container-md, .container-sm, .container-xl, .container-xxl {
    --bs-gutter-x: -1.5rem;
}

</style>

<!--CONTENT-HEADER-->
<section class="container content-header text-center m-2">
  <div class="row align-items-start">
    

    <!--Boton agregar-->
    <button class="btn btn-primary boton col-4 col-sm-4" data-toggle="modal" data-target="#modal-insertar">
      Agregar <i class="fas fa-user"></i>
    </button>
    
    <!--Filtro de estado 2-->
    <div class="col-4 col-sm-4">
      <select  id="estado" class="form-select" style=" width: 104%;">
        <option value="">SELECCIONAR ESTADO</option>
        <option value="RECIBIDO">RECIBIDO</option>
        <option value="DIAGNOSTICADO">DIAGNOSTICADO</option>
        <option value="EN_REPARACION">EN REPARACION</option>
        <option value="REPARADO_ABIERTO">REPARADO ABIERTO</option>
        <option value="REPARADO_CERRADO">REPARADO CERRADO</option>
        <option value="ENTREGADO">ENTREGADO</option>
        <option value="ENTREGADO_A_COBRAR">ENTREGADO A COBRAR</option>
        <option value="DEMORADO">DIAGNOSTICADO</option>
        <option value="SIN_SOLUCCION">SIN SOLUCCION</option>
      </select>
    </div>
    <!--Fin filtro de estado 2-->


    <!--Buscador-->
    <div class="col-4 col-sm-4">
      <div class="d-flex nav-link" role="search">
        <input id="buscador" class="form-control me-2" placeholder="Buscar por nombre">
        <button  class="btn btn-outline-success" id="buscar">Buscar</button>
      </div>
    </div>

  </div>
</section>


<!-- Tabla clientes -->
<div class="container">
    <div class="table-responsive">
            <table class="table table-bordered table-md text-center"  id="tblClientes">
                <thead class=" thead-dark">
                    <tr>
                        <th scope="col">Numero ID</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Codigo</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Falla</th>
                        <th scope="col">Observacion</th>
                        <th scope="col">Fecha Ingreso</th>
                        <th scope="col">Fecha Entrega</th>
                        <th scope="col">Precio</th>
                        <th scope="col">imei</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody id="datosClientes">
                    <!-- Datos del cliente -->
                    <?php 
                      while($row = $result->fetch_assoc())
                      { ?>                  
                      
                      <tr>
                      <?php $id = $row['id']?>

                        <td scope="row"><?php echo $id; ?></td>
                        <td scope="row"><?php echo $row["cliente"] ?></td>
                        <td scope="row"><?php echo $row["telefono"] ?></td>
                        <td scope="row"><?php echo $row["codigo"] ?></td>
                        <td scope="row"><?php echo $row["modelo"] ?></td>
                        <td scope="row"><?php echo $row["falla"] ?></td>
                        <td scope="row"><?php echo $row["observacion"] ?></td>
                        <td scope="row"><?php echo $row["fecha_ingreso"] ?></td>
                        <td scope="row"><?php echo $row["fecha_entrega"] ?></td>
                        <td scope="row"><?php echo $row["precio"] ?></td>
                        <td scope="row"><?php echo $row["imei"] ?></td>
                        <td scope="row"><?php echo $row["estado"] ?></td>
                        
                        <td>
                          <a class="btn btn-primary" onclick="editarModal(<?php echo $id; ?>)" value="<?php echo $id; ?>">
                            <i class="fa fa-edit"></i>
                          </a>
                        </td>
                        <td>
                          <a class="btn btn-danger" id="borrar" onclick="borrarCliente(event)" data-id="<?php echo $id; ?>">
                            <i class="fa fa-trash"></i>
                          </a>
                        </td>

                        
                        
                      <tr>

                      <?php
                      }
                      ?>
                     

                </tbody>
            </table>
        </div>
</div>


<!--inicio Modal editar-->
<div class="modal fade" id="modal-editar" tabindex="-1"  role="dialog">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editarModalLabel">Editar Datos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">&times;</button>
        </div>
        <div class="modal-body">
          <form id="form-editar">
            <div class="mb-3">
             <label for="editar-id" class="form-label">id</label>
             <input type="text" class="form-control" id="editar-id" name="editar-id">
            </div>

            <div class="mb-3">
             <label for="editar-cliente" class="form-label">Cliente</label>
             <input type="text" class="form-control" id="editar-cliente" name="editar-cliente">
            </div>

            <div class="mb-3">
             <label for="editar-telefono" class="form-label">Telefono</label>
             <input type="text" class="form-control" id="editar-telefono" name="editar-telefono">
            </div>

            <div class="mb-3">
             <label for="editar-codigo" class="form-label">Código</label>
             <input type="text" class="form-control" id="editar-codigo" name="editar-codigo">
             </div> 

            <div class="mb-3">
             <label for="editar-modelo" class="form-label">Modelo</label>
             <input type="text" class="form-control" id="editar-modelo" name="editar-modelo" required>
            </div>

            <div class="mb-3">
             <label for="editar-falla" class="form-label">Falla</label>
             <input type="text" class="form-control" id="editar-falla" name="editar-falla" required>
            </div>

            <div class="mb-3">
             <label for="editar-observacion" class="form-label">Observación</label>
             <textarea class="form-control" id="editar-observacion" name="editar-observacion" rows="3" required></textarea>
            </div>

            <div class="mb-3">
             <label for="editar-fecha_ingreso" type="date" class="form-label">Fecha de Ingreso</label>
             <input type="date" class="form-control" id="editar-fecha_ingreso" name="editar-fecha_ingreso" required>
            </div>

            <div class="mb-3">
             <label for="editar-fecha_entrega" type="date" class="form-label">Fecha de Entrega</label>
             <input type="date" class="form-control" id="editar-fecha_entrega" name="editar-fecha_entrega" required>
            </div>

            <div class="mb-3">
             <label for="editar-precio" class="form-label">Precio</label>
             <input type="text" class="form-control" id="editar-precio" name="editar-precio" required>
            </div>

            <div class="mb-3">
             <label for="editar-imei" class="form-label">IMEI</label>
             <input type="text" class="form-control" id="editar-imei" name="editar-imei" required>
            </div>

            <div class="mb-3">
             <label for="editar-estado" class="form-label">Estado</label>            
              <select name="editar-estado" id="editar-estado" class="form-select" required>
                <option value="" selected>SELECCIONAR ESTADO</option>
                <option value="RECIBIDO">RECIBIDO</option>
                <option value="DIAGNOSTICADO">DIAGNOSTICADO</option>
                <option value="EN_REPARACION">EN REPARACION</option>
                <option value="REPARADO_ABIERTO">REPARADO ABIERTO</option>
                <option value="REPARADO_CERRADO">REPARADO CERRADO</option>
                <option value="ENTREGADO">ENTREGADO</option>
                <option value="ENTREGADO_A_COBRAR">ENTREGADO A COBRAR</option>
                <option value="DEMORADO">DIAGNOSTICADO</option>
                <option value="SIN_SOLUCCION">SIN SOLUCCION</option>
              </select>
            </div>
           <button type="submit" class="btn btn-primary" id="actualizar">Guardar Cambios</button>
         </form>
       </div>
      </div>
  </div>
</div> 
<!--Fin Modal editar-->


<!-- Modal Insertar Trabajo -->
<div class="modal fade" id="modal-insertar" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Insertar Nuevo Trabajo</h5>
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">×</span>
          <span class="sr-only">Close</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="form_agregar">
          <div class="mb-3">
            <label for="modal-cliente" class="form-label" name="modal-cliente">Cliente</label>
            <input type="text" class="form-control"  id="modal-cliente"  required>
          </div>
          <div class="mb-3">
            <label for="modal-telefono" class="form-label" name="modal-telefono">Telefono</label>
            <input type="text" class="form-control"  id="modal-telefono"  required>
          </div>
          <div class="mb-3">
            <label for="modal-codigo" class="form-label" name="modal-codigo">Código</label>
            <input type="text" class="form-control" id="modal-codigo" disabled>
            <button class="btn btn-primary" onclick="generateRandomNumber()">Generar Codigo</button>
          </div>
          <div class="mb-3">
            <label for="modal-modelo" class="form-label" name="modal-modelo">Modelo</label>
            <input type="text" class="form-control" id="modal-modelo" required>
          </div>
          <div class="mb-3">
            <label for="modal-falla" class="form-label" name="modal-falla">Falla</label>
            <input type="text" class="form-control" id="modal-falla" required>
          </div>
          <div class="mb-3">
            <label for="modal-observacion" class="form-label" name="modal-observacion">Observación</label>
            <textarea class="form-control" id="modal-observacion" rows="3" required></textarea>
          </div>
          <div class="mb-3">
            <label for="modal-fecha_ingreso" class="form-label" name="modal-fecha_ingreso">Fecha de Ingreso</label>
            <input type="date" class="form-control" id="modal-fecha_ingreso" required>
          </div>
          <div class="mb-3">
            <label for="modal-fecha_entrega" class="form-label" name="modal-fecha_entrega">Fecha de Entrega</label>
            <input type="date" class="form-control" id="modal-fecha_entrega" required>
          </div>
          <div class="mb-3">
            <label for="modal-precio" class="form-label" name="modal-precio">Precio</label>
            <input type="text" class="form-control" id="modal-precio" required>
          </div>
          <div class="mb-3">
            <label for="modal-imei" class="form-label" name="modal-imei">IMEI</label>
            <input type="text" class="form-control" id="modal-imei" required>
          </div>
          <div class="mb-3">
            <label for="modal-estado" class="form-label" name="modal-estado">Estado</label>
            <select name="modal-estado" id="modal-estado" class="form-select" required>
              <option value="">SELECCIONAR ESTADO</option>
              <option value="RECIBIDO">RECIBIDO</option>
              <option value="DIAGNOSTICADO">DIAGNOSTICADO</option>
              <option value="EN_REPARACION">EN REPARACION</option>
              <option value="REPARADO_ABIERTO">REPARADO ABIERTO</option>
              <option value="REPARADO_CERRADO">REPARADO CERRADO</option>
              <option value="ENTREGADO">ENTREGADO</option>
              <option value="ENTREGADO_A_COBRAR">ENTREGADO A COBRAR</option>
              <option value="DEMORADO">DIAGNOSTICADO</option>
              <option value="SIN_SOLUCCION">SIN SOLUCCION</option>
            </select>
          </div>
          <div class="modal-footer">
            <button type="submit"  class="btn btn-primary" id="agregar">Guardar Cambios</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          </div>
        </form>
      </div>            
    </div>
  </div>
</div>
<!-- Fin Modal Insertar clientes -->

<!--Inicio Paginacion-->
<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item" id="first" href="">
          <a class="page-link" href="?page-nr=1">
            Primero
                    </a>
        </li>

        <?php
          if(isset($_GET['page-nr']) && $_GET['page-nr'] > 1){ 
          ?>

          <li class="page-item" id="anterior">
            <a class="page-link" href="?page-nr=<?php echo $_GET['page-nr'] - 1 ?>">
              Anterior
            </a>
          </li>
                      
          <?php
          }
          else{
          ?>

              <li class="page-item" id="anterior">
                <a class="page-link">
                  Anterior
                </a>
              </li>

          <?php
          }
        ?>
 
        
        
        <li class="page-item">
          <a class="page-link" id="numPagina">
            Pagina <?php echo $_GET['page-nr'] ?> de <?php echo $pages ?> paginas 
          </a>
        </li>
 
         <?php
          if(!isset($_GET['page-nr'])){
          ?>

            <li class="page-item" id="siguiente">
              <a href="?page-nr=2" class="page-link">
                Siguiente
              </a>
            </li>

        <?php
          }
          else{
            if($_GET['page-nr'] >= $pages){
              ?>

                <li class="page-item" id="siguiente">
                  <a class="page-link">
                    Siguiente
                  </a>
                </li>
              
            <?php
            }else{
            ?>
                  <li class="page-item" id="siguiente">
                    <a class="page-link" href="?page-nr=<?php echo $_GET['page-nr'] +1  ?>">
                      Siguiente
                    </a>
                  </li>
                <?php
              }
            }
        ?>
 
        <li class="page-item" id="last">
          <a class="page-link" href="?page-nr=<?php echo $pages ?>">
            Ultimo
          </a>
        </li>
    </ul> 
</nav>
<!--Fin Paginacion-->



<?php require_once "vistas/parte_inferior.php"; ?>