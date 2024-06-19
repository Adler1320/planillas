<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Usuarios</title>
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


          <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <span class="btn-label"><i class="fa fa-plus"></i></span>
            Agregar Nuevo Usuario
          </button>

          <div class="modal" id="exampleModal" tabindex="-1">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Agregar Usuario</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="tablas/insertarusuario.php" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-12  ms-auto me-auto">
                      <div class="card">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-md-6 col-lg-10  ms-auto me-auto">
                              <img src="assets/img/fotodeperfil/profile_default.jpg" class="rounded mx-auto d-block"
                                alt="...">
                              <div class="form-group">
                                <label for="namecompleto">Nombre</label>
                                <input type="text" class="form-control" id="namecompleto" name="namecompleto"
                                  placeholder="Ingrese nombre completo" />
                              </div>
                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="user">Usuario</label>
                                    <input type="text" class="form-control" id="user" name="user"
                                      placeholder="Ingrese usuario" />
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <input type="text" class="form-control" id="password" name="password"
                                      placeholder="Ingrese contraseña" />
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="local">Local</label>
                                <select class="form-select" id="local-select" name="local">
                                  <?php
                                  include_once 'tablas/traerlocales.php';
                                  ?>
                                </select>
                                <!-- Campo oculto para el id del local -->
                                <input type="hidden" id="idLocal" name="idLocal" value="">
                              </div>

                              <script>
                                
                                  document.addEventListener('DOMContentLoaded', function () {
                                    // Seleccionar el primer elemento
                                    var selectElement = document.getElementById('local-select');
                                    var firstOption = selectElement.options[0];

                                    // Asignar el valor del ID al input oculto
                                    document.getElementById('idLocal').value = firstOption.getAttribute('data-id');

                                    // Agregar el evento de cambio
                                    selectElement.addEventListener('change', function () {
                                      var selectedOption = selectElement.options[selectElement.selectedIndex];
                                      document.getElementById('idLocal').value = selectedOption.getAttribute('data-id');
                                    });
                                  });
                              </script>

                              <div class="row">
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="tipo_usuario">Tipo de Usuario</label>
                                    <select class="form-select" id="tipo_usuario" name="tipo_usuario">
                                      <option value="Administrador">Administrador</option>
                                      <option value="Usuario">Usuario</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="estatus">Estatus</label>
                                    <select class="form-select" id="estatus" name="estatus">
                                      <option value="Activo">Activo</option>
                                      <option value="Inactivo">Inactivo</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="foto_perfil">Seleccione una Foto</label>
                                <input type="file" class="form-control-file" id="foto_perfil" name="foto_perfil" />
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer card-action ms-auto me-auto">
                    <button type="submit" class="btn btn-success">Agregar Usuario</button>
                  </div>
                </form>

              </div>
            </div>
          </div>

        </div>
        <!-- PARA AGREGAR USUARIOS AL Sistema -->

        <!-- TABLA PARA VER TODOS LOS USUARIOS -->
        <?php
        // Incluye el archivo 'header.php' solo una vez
        include_once 'tablas/tbusuarios.php';
        ?>
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