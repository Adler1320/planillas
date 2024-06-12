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
      <div class="container">
        <div class="page-inner">
          <div class="page-header">
            <h3 class="fw-bold mb-3">Empresas</h3>
            <ul class="breadcrumbs mb-3">
              <li class="nav-home">
              </li>

            </ul>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Agregar Empresa</div>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="name">Nombre de la Empresa</label>
                        <input type="name" class="form-control" id="name" placeholder="Monte Alto XYZ" />
                      </div>
                      <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="direccion" class="form-control" id="direccion" placeholder="5ta. Calle 6-7" />
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Logo de la Empresa</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" />
                      </div>
                    </div>
                    <div class="col-md-6 col-lg-6">
                      <div class="form-group">
                        <label for="tel1">Telefono No. 1</label>
                        <input type="tel1" class="form-control" id="tel1" placeholder="0000-0000" />
                      </div>
                      <div class="form-group">
                        <label for="tel2">Telefono No. 2</label>
                        <input type="tel2" class="form-control" id="tel2" placeholder="0000-0000" />
                      </div>

                    </div>
                  </div>
                </div>
                <div class="card-action d-flex justify-content-center">
                  <button class="btn btn-success"> Guardar </button>
                </div>
              </div>
            </div>
          </div>
          <h3 class="fw-bold mb-3">Empresas Registradas</h3>
          <br>
          <div class="row">
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-header" style="background-image: url('assets/img/portada.avif')">
                  <div class="profile-picture">
                    <div class="avatar avatar-xl">
                      <img src="assets/img/montealto.png" alt="..." class="avatar-img rounded-circle" />
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="user-profile text-center">
                    <div class="name">Monte Alto Cambote</div>
                    <div class="job">Cambote Zona 11</div><br>
                    <div class="desc">0000-0000</div>
                    <div class="desc">0000-0000</div>
                    <div class="view-profile">
                      <a href="#" class="btn btn-secondary w-100">Editar Empresa</a>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="row user-stats text-center">
                    <div class="col">
                      <div class="number">125</div>
                      <div class="title">Empleados</div>
                    </div>
                    <div class="col">
                      <div class="number">25K</div>
                      <div class="title">IGSS</div>
                    </div>
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