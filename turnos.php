<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Planillas
  </title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="assets/img/nomina.ico" type="image/x-icon" />
  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script src="assets/js/font.js"></script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />
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
            <h3 class="fw-bold mb-3">Turnos</h3>
          </div>

          <button type="button" class="btn btn-secondary mb-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="btn-label"><i class="fa fa-plus"></i></span>
            Agregar Nuevo Turno
          </button>

          <!-- Modal para agregar/editar empresa -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-md">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalTitle">Agregar Turno</h5>
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
                                      placeholder="Ej. AM" required />
                                  </div>
                                  <br>
                                  <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
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
                      <h4 class="card-title">Turnos Añadidos Recientemente</h4>
 
                    </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="add-row" class="display table table-striped table-hover">
                        <thead>
                          <tr>
                            <th>#</th>
                            <th>Nombre del Turno</th>
                            <th style="width: 10%">Accion</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>#</th>
                            <th>Nombre del Turno</th>
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
    <script src="assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="assets/js/core/popper.min.js"></script>
    <script src="assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="assets/js/kaiadmin.min.js"></script>
    <script src="assets/js/paginacion.js"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>

</body>

</html>