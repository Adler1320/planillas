<!DOCTYPE html>
<html lang="en">

<head>
<?php include_once "./navegacion/head.php"?>
</head>

<body>
  <div class="wrapper">

    <?php
    // Incluye el archivo 'header.php' solo una vez
    include_once 'navegacion/slidebaradmin.php';
    ?>

    <div class="main-panel">
      <?php
      // Incluye el archivo 'header.php' solo una vez
      include_once 'navegacion/navbar.php';
      ?>
      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Puestos</h3>
          </div>

          <button type="button" class="btn btn-secondary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="btn-label"><i class="fa fa-plus"></i></span>
            Agregar Nuevo Puesto
          </button>

          <!-- Modal para agregar/editar empresa -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTitle">Agregar Puesto</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="puestoForm" action="#" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12 ms-auto me-auto">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-12 col-lg-12">
                                  <div class="form-group">
                                    <input type="text" class="form-control" name="nombre" id="name"
                                      placeholder="Ej. Cocinero" required />
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
        </div>

        <div class="container">
          <div class="page-inner">

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
                          <tr>
                            <td>1</td>
                            <td>Ayudante de Cocina</td>
                            <td>
                              <div class="form-button-action">
                                <button type="button" data-bs-toggle="tooltip" title=""
                                  class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                  <i class="fa fa-edit"></i>
                                </button>
                                <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger"
                                  data-original-title="Remove">
                                  <i class="fa fa-times"></i>
                                </button>
                              </div>
                            </td>
                          </tr>


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



      <!-- End Custom template -->
    </div>
    <!--   Core JS Files   -->
    <?php include_once "./navegacion/footer.php"?>

</body>

</html>