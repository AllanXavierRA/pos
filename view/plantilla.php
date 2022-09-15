<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Blank Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="icon" href="view/img/plantilla/icono-negro.png">

  <!--==========
  PLUGINS DE CSS
  ============-->

  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="view/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="view/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="view/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="view/dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="view/dist/css/skins/_all-skins.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="view/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="view/bower_components/datatables.net-bs/css/responsive.bootstrap.min.css">

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  
  <!--============
  PLUGINS DE JAVASCRIPT
  ============-->

  <!-- jQuery 3 -->
  <script src="view/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="view/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="view/bower_components/fastclick/lib/fastclick.js"></script>
  <!-- AdminLTE App -->
  <script src="view/dist/js/adminlte.min.js"></script>

  <!-- DataTables -->
  <script src="view/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="view/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  <script src="view/bower_components/datatables.net-bs/js/dataTables.responsive.min.js"></script>
  <script src="view/bower_components/datatables.net-bs/js/responsive.bootstrap.min.js"></script>

  <!-- Sweet Alert -->
  <script src="view/plugins/sweetalert2/sweetalert2.all.js"></script>
</head>

  <!--============
  CUERPO DOCUMENTO
  ============-->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini login-page">
<!-- Site wrapper -->

<?php

  if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){

    echo '<div class="wrapper">';
    /*--============
    CABEZOTE
    ============*/
    include "modulos/cabezote.php";

    /*--============
    MENU
    ============*/
    include "modulos/menu.php";

    /*--============
    CONTENIDO
    ============*/

    if(isset($_GET["ruta"])){
      
      if($_GET["ruta"] == "inicio"||
      $_GET["ruta"] == "usuarios" ||
      $_GET["ruta"] == "categorias" ||
      $_GET["ruta"] == "productos" ||
      $_GET["ruta"] == "clientes" ||
      $_GET["ruta"] == "ventas" ||
      $_GET["ruta"] == "crear-venta" ||
      $_GET["ruta"] == "reportes" ||
      $_GET["ruta"] == "salir"){

        include "modulos/".$_GET["ruta"].".php";

      }else{
        include "modulos/404.php";
      }
    }else{
      include "modulos/inicio.php";
    }

    /*--============
    FOOTER
    ============*/
    include "modulos/footer.php";

    echo '</div>';
  }else{
    include "modulos/login.php";
  }
?>
  
</div>
<!-- ./wrapper -->

<script src="view/js/plantilla.js"></script>
<script src="view/js/usuarios.js"></script>

</body>
</html>