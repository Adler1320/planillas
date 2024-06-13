<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Planillas</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="assets/img/nomina.ico" type="image/x-icon" />
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
      <!-- AQUI VA EL CONTENIDO -->


      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Mi Perfil</h3>
          </div>
          <div class="row">
            <div class="col-md-8  ms-auto me-auto">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Detalles del Usuario</div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-10  ms-auto me-auto">
                      <img src="assets/img/jm_denis.jpg" class="rounded mx-auto d-block" alt="...">
                      <div class="form-group">
                        <label for="namecompleto">Nombre</label>
                        <input type="namecompleto" class="form-control" id="namecompleto"
                          placeholder="Adler Abdiel Ramos Merida" />
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="user">Usuario</label>
                            <input type="user" class="form-control" id="user" placeholder="aramosm" />
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="123456789" />
                          </div>
                        </div>
                      </div>


                      <div class="form-group">
                        <label for="user">Local</label>
                        <div class="input-icon">
                          <span class="input-icon-addon">
                            <i class="fas fa-store"></i>
                          </span>
                          <input type="text" class="form-control" placeholder="Admon ALPA" />
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
                  <button class="btn btn-success">Guardar Cambios</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- AQUI TERMINA EL CONTENIDO -->
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
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="assets/js/setting-demo.js"></script>
    <script src="assets/js/demo.js"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });
      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });
      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
</body>

</html>