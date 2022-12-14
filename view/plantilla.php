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
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="view/plugins/iCheck/all.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="view/bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- Morris chart -->
  <link rel="stylesheet" href="view/bower_components/morris.js/morris.css">

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
  <!-- By default SweetAlert2 doesn't support IE. To enable IE 11 support, include Promise polyfill:-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>

  <!-- iCheck 1.0.1 -->
  <script src="view/plugins/iCheck/icheck.min.js"></script>

  <!-- InputMask -->
  <script src="view/plugins/input-mask/jquery.inputmask.js"></script>
  <script src="view/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
  <script src="view/plugins/input-mask/jquery.inputmask.extensions.js"></script>

  <!-- JQuery Number -->
  <script src="view/plugins/jqueryNumber/jquerynumber.min.js"></script>

  <!-- daterangepicker http://www.daterangepicker.com/-->
  <script src="view/bower_components/moment/min/moment.min.js"></script>
  <script src="view/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>

  <!-- Morris.js charts http://morrisjs.github.io/morris.js/-->
  <script src="view/bower_components/raphael/raphael.min.js"></script>
  <script src="view/bower_components/morris.js/morris.min.js"></script>



</head>


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
      $_GET["ruta"] == "editar-venta" ||
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
<script src="view/js/categorias.js"></script>
<script src="view/js/productos.js"></script>
<script src="view/js/clientes.js"></script>
<script src="view/js/ventas.js"></script>
<script src="view/js/reportes.js"></script>

</body>
</html>
