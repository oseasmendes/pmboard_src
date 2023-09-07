<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">    
  <title><?= $this->fetch('title') ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <?=
	    $this->Html->css([
	            "/plugins/fontawesome-free/css/all.min.css"	,
                "/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css",
                "/plugins/icheck-bootstrap/icheck-bootstrap.min.css",
                "/plugins/jqvmap/jqvmap.min.css",
                "/dist/css/adminlte.min.css",
                "/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    ])
    ?>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
<?= $this->element("top-nav") ?>
<?= $this->element("left-sidebar") ?>

  <!-- Content Wrapper. Contains page content -->

  

  <div class="content-wrapper">
    <div>
    <?= $this->fetch("content") ?>
      </div>
  </div>

  

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date("Y") ?>. <a href="http://www.portalsaes.com.br">www.portalsaes.com.br</a>.</strong>
    All rights reserved by Saes Intelligence Solution.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?=
    $this->Html->script([
        "/plugins/jquery/jquery.min.js", 
        "/plugins/jquery-ui/jquery-ui.min.js",
        "/plugins/bootstrap/js/bootstrap.bundle.min.js",
        "/js/moment.js",
        "/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js",
        "/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js",
        "/dist/js/adminlte.js",
        "/dist/js/pages/dashboard.js"
        
    ])
?>


</body>
</html>
