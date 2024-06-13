<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Datatables - Kaiadmin Bootstrap 5 Admin Dashboard</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="assets/img/kaiadmin/favicon.ico" type="image/x-icon" />

  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: { families: ["Public Sans:300,400,500,600,700"] },
      custom: {
        families: [
          "Font Awesome 5 Solid",
          "Font Awesome 5 Regular",
          "Font Awesome 5 Brands",
          "simple-line-icons",
        ],
        urls: ["assets/css/fonts.min.css"],
      },
      active: function () {
        sessionStorage.fonts = true;
      },
    });
  </script>

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

      <!-- PARA AGREGAR USUARIOS AL Sistema -->
      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Usuarios del Sistema</h3>
          </div>
          <div class="row">
            <div class="col-md-8  ms-auto me-auto">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Agregar Usuario</div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-10  ms-auto me-auto">
                      <img src="assets/img/jm_denis.jpg" class="rounded mx-auto d-block" alt="...">
                      <div class="form-group">
                        <label for="namecompleto">Nombre</label>
                        <input type="namecompleto" class="form-control" id="namecompleto"
                          placeholder="Ingrese nombre completo" />
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="user">Usuario</label>
                            <input type="user" class="form-control" id="user"
                              placeholder="Ingrese un nombre de usuario" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password"
                              placeholder="Ingrese una contraseña" />
                          </div>
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="user">Local</label>
                        <div class="input-icon">
                          <span class="input-icon-addon">
                            <i class="fas fa-store"></i>
                          </span>
                          <input type="text" class="form-control" placeholder="Seleccione un local" />
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipo de Usuario</label>
                            <select class="form-select" id="exampleFormControlSelect1">
                              <option>Administrador</option>
                              <option>Usuario</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Estatus</label>
                            <select class="form-select" id="exampleFormControlSelect1">
                              <option>Activo</option>
                              <option>Inactivo</option>
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Seleccione una Foto</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-action ms-auto me-auto">
                  <button class="btn btn-success">Agregar Usuario</button>
                </div>
              </div>
            </div>
          </div>
        </div>
<!-- PARA AGREGAR USUARIOS AL Sistema -->

<!-- TABLA PARA VER TODOS LOS USUARIOS -->
        <div class="page-inner">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Todos los usuarios del sistema</h4>
                  </div>
                </div>
                <div class="card-body">
                  <!--  
                  <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header border-0">
                          <h5 class="modal-title">
                            <span class="fw-mediumbold"> New</span>
                            <span class="fw-light"> Row </span>
                          </h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="small">
                            Create a new row using this form, make sure you
                            fill them all
                          </p>
                          <form>
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                  <label>Name</label>
                                  <input id="addName" type="text" class="form-control" placeholder="fill name" />
                                </div>
                              </div>
                              <div class="col-md-6 pe-0">
                                <div class="form-group form-group-default">
                                  <label>Position</label>
                                  <input id="addPosition" type="text" class="form-control"
                                    placeholder="fill position" />
                                </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group form-group-default">
                                  <label>Office</label>
                                  <input id="addOffice" type="text" class="form-control" placeholder="fill office" />
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer border-0">
                          <button type="button" id="addRowButton" class="btn btn-primary">
                            Add
                          </button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div> -->

                  <div class="table-responsive">
                    <table id="add-row" class="display table table-striped table-hover">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>Usuario</th>
                          <th>Local</th>
                          <th>Tipo de Usuario</th>
                          <th>Estatus</th>
                          <th style="width: 10%">Acción</th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Nombre</th>
                          <th>Usuario</th>
                          <th>Local</th>
                          <th>Tipo de Usuario</th>
                          <th>Estatus</th>
                          <th>Acción</th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>Adler Abdiel Ramos Merida</td>
                          <td>aramosm</td>
                          <td>Monte Alto Cambote</td>
                          <td>Administrador</td>
                          <td>Activo</td>
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
        <!-- TABLA PARA VER TODOS LOS USUARIOS -->


      </div>
    </div>


  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery-3.7.1.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <!-- jQuery Scrollbar -->
  <script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
  <!-- Datatables -->
  <script src="assets/js/plugin/datatables/datatables.min.js"></script>
  <!-- Kaiadmin JS -->
  <script src="assets/js/kaiadmin.min.js"></script>
  <!-- Kaiadmin DEMO methods, don't include it in your project! -->
  <script src="assets/js/setting-demo2.js"></script>
  <script>
    $(document).ready(function () {
      $("#basic-datatables").DataTable({});

      $("#multi-filter-select").DataTable({
        pageLength: 5,
        initComplete: function () {
          this.api()
            .columns()
            .every(function () {
              var column = this;
              var select = $(
                '<select class="form-select"><option value=""></option></select>'
              )
                .appendTo($(column.footer()).empty())
                .on("change", function () {
                  var val = $.fn.dataTable.util.escapeRegex($(this).val());
                  column
                    .search(val ? "^" + val + "$" : "", true, false)
                    .draw();
                });
              column
                .data()
                .unique()
                .sort()
                .each(function (d, j) {
                  select.append(
                    '<option value="' + d + '">' + d + "</option>"
                  );
                });
            });
        },
      });
      // Add Row
      $("#add-row").DataTable({
        pageLength: 5,
      });
      var action =
        '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';
      $("#addRowButton").click(function () {
        $("#add-row")
          .dataTable()
          .fnAddData([
            $("#addName").val(),
            $("#addPosition").val(),
            $("#addOffice").val(),
            action,
          ]);
        $("#addRowModal").modal("hide");
      });
    });
  </script>
</body>

</html>