<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "./navegacion/head.php"?>
</head>
<body>
  <div class="wrapper">
    <?php include_once 'navegacion/slidebaradmin.php'; ?>
    <div class="main-panel">
      <?php include_once 'navegacion/navbar.php'; ?>
      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Puestos</h3>
          </div>

          <button type="button" class="btn btn-secondary mb-4" data-bs-toggle="modal" data-bs-target="#AgregarPuesto">
            <span class="btn-label"><i class="fa fa-plus"></i></span>
            Agregar Nuevo Puesto
          </button>

          <!-- Modal para agregar/editar empresa -->
          <div class="modal fade" id="AgregarPuesto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTitle">Agregar Puesto</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="puestoForm" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12 ms-auto me-auto">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="nombrePuesto" id="name" placeholder="Ej. Cocinero" required />
                                  </div>
                                  <br>
                                  <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Guardar Puesto</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="page-inner">
              <?php 
              include 'conexionBD/conexion.php';
              $sql = "SELECT * FROM puestoempleado";
              $result = $conn->query($sql);
             
              ?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <div class="d-flex align-items-center">
                          <h4 class="card-title">Puestos Añadidos Recientemente</h4>
                        </div>
                      </div>
                      <div class="card-body">
                        <div class="table-responsive">
                          <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Nombre del Puesto</th>
                                <th style="width: 10%">Accion</th>
                              </tr>
                            </thead>
                            <tfoot>
                              <tr>
                                <th>#</th>
                                <th>Nombre del Puesto</th>
                                <th>Accion</th>
                              </tr>
                            </tfoot>
                            <tbody>
                              <?php 
                               if ($result->num_rows > 0) { 
                                $contador=0;
                              while ($row = $result->fetch_assoc()) { ?>
                              <tr>
                                <td><?php echo $contador +=1; ?></td>
                                <td><?php echo $row['nombrepuesto']; ?></td>
                                <td>
                                  <div class="form-button-action">
                                    <button type="button" onclick="showModal(<?php echo $row['idpuestoempleado']; ?>, '<?php echo $row['nombrepuesto']; ?>')" class="btn btn-link btn-primary btn-lg" >
                                      <i class="fa fa-edit"></i>
                                    </button>
                                    <button type="button" onclick="eliminarPuesto(<?php echo $row['idpuestoempleado'];?>)" class="btn btn-link btn-danger" data-original-title="Remove">
                                      <i class="fa fa-times"></i>
                                    </button>
                                  </div>
                                </td>
                              </tr>
                              <?php }} else{?>
                                <tr>
                                      <td >#</td>
                                      <td >No existen puestos aún.</td>
                                      <td ></td>
                                 </tr>
                                    <?php } ?>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> 
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

                              <!-- Modal para editar puesto -->
  <div class="modal fade" id="EditarPuesto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalTitle">Editar Puesto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form id="EditarPuestoForm" enctype="multipart/form-data">
        <div class="row">
          <div class="col-md-12 ms-auto me-auto">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-12 col-lg-12">
                        <div class="form-group">
                          <input type="text" class="form-control" name="Puesto" id="Puesto" value="" placeholder="Ej. Cocinero" required />
                          <input type="hidden" name="idPuesto" id="idPuesto" value="" />
                        </div>
                        <br>
                        <div class="d-flex justify-content-center">
                          <button type="submit" class="btn btn-primary">Guardar Puesto</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
    <!-- End Custom template -->
    <?php include_once "./navegacion/footer.php" ?>
    <script src="scriptTurnosPuestos/insertarPuesto.js"></script>
    <script src="scriptTurnosPuestos/editarPuesto.js"></script>
    <script src="scriptTurnosPuestos/eliminarPuesto.js"></script>
  </div>
</body>
</html>