<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url('asset/admin/')?>css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php echo base_url('asset/admin/')?>css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php echo base_url('asset/')?>css/style.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('asset/') ?>css/dataTables.bootstrap4.css">
  <link href="<?php echo base_url('asset/') ?>css/jquery.dataTables.min.css" rel="stylesheet">
  <style>

    .map-container{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
.navbar, .page-footer, main {
    padding-left: 0;
}
  </style>
</head>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container-fluid">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="{{ base_url() }}">
          <strong class="blue-text">FOREX</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->

      </div>
    </nav>
    <!-- Navbar -->

    <!-- Sidebar -->
    <!-- <div class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
      </a>

      <div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Dashboard
        </a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Profile</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Tables</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-map mr-3"></i>Maps</a>
        <a href="#" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-money-bill-alt mr-3"></i>Orders</a>
      </div>

    </div> -->
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5">
    <div class="container-fluid mt-5">
    <?php
        $CI = &get_instance();
        if($CI->session->flashdata('success')): ?>
            <div class="alert alert-success" role="alert">
            <?php echo $CI->session->flashdata('success'); ?>
            </div>
    <?php endif; ?>
    <?php
        $CI = &get_instance();
        if($CI->session->flashdata('error')): ?>
            <div class="alert alert-danger" role="alert">
            <?php echo $CI->session->flashdata('error'); ?>
            </div>
    <?php endif; ?>
        @yield('content')
    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small primary-color-dark darken-2 mt-4 wow fadeIn" style="bottom:0;left:0;right:0;position:fixed;z-index:1;">
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="{{ base_url() }}" target="_blank"> Forex </a>
    </div>
    <!--/.Copyright-->
  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="<?php echo base_url('asset/admin/')?>js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo base_url('asset/admin/')?>js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('asset/admin/')?>js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo base_url('asset/admin/')?>js/mdb.min.js"></script>
  <!-- Initializations -->
  <script src="<?php echo base_url('asset/'); ?>js/jquery.dataTables.min.js"></script>
  <script src="<?php echo base_url('asset/'); ?>js/dataTables.bootstrap4.js"></script>
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
  @yield('script')
</body>

</html>
