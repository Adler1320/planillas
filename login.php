<!DOCTYPE html>
<html lang="es">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Iniciar Sesión</title>
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
          "simple-line-icons"
        ],
        urls: ["assets/css/fonts.min.css"]
      },
      active: function () {
        sessionStorage.fonts = true;
      }
    });
  </script>

<style>
    .logo {
      width: 250px; /* Ajusta el tamaño deseado */
      height: 100px; /* Ajusta el tamaño deseado */
    }
  </style>


  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/plugins.min.css" />
  <link rel="stylesheet" href="assets/css/kaiadmin.min.css" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css" />
</head>

<body>
  <div class="wrapper">
    
 <div class="text-center">
    <img src="assets/img/kaiadmin/logo_dark.svg" alt="" class="logo">
  </div>


    <div class="container">
      <div class="row justify-content-center mt-1">
        <div class="col-md-5">
          <div class="card">
            <div class="card-header">
              <br>
            <h4 class="card-title text-center">Sistema ALPA</h4>
              <h3 class="card-title text-center">Iniciar Sesión</h3>
              <br>
            </div>
            <div class="card-body">
              <form>
                <div class="form-group">
                  <label for="user">Usuario</label>
                  <input type="text" class="form-control" id="user" placeholder="Introduce tu usuario">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" class="form-control" id="password" placeholder="Introduce tu contraseña">
                </div>
                <br>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                </div>
                <br><br>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Core JS Files -->
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
</body>

</html>