<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Boxed Layout</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/css/_all-skins.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">


<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
      </span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>

  <aside class="main-sidebar">
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
            <li><a href="index.php"><i class="fa fa-circle-o"></i> Home</a></li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>USERS</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php?controller=users&action=addUsers"><i class="fa fa-circle-o"></i> Add_User</a></li>
                <li><a href="index.php?controller=users&action=listUsers"><i class="fa fa-circle-o"></i> List_Users</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>PRODUCTS</span>
              </a>
              <ul class="treeview-menu">
                <li><a href="index.php?controller=products&action=addProducts"><i class="fa fa-circle-o"></i> Add_Product</a></li>
                <li><a href="index.php?controller=products&action=listProducts"><i class="fa fa-circle-o"></i> List_Products</a></li>
              </ul>
            </li>
      </ul>
    </section>
  </aside>

  <div class="content-wrapper">
    <section class="content-header">
		<?php
            include 'controller/home_controller.php';
			$home = new Homecontroller();
			$home->handleRequest();
            ?>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  
  <div class="control-sidebar-bg"></div>
</div>



<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.slimscroll.min.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/adminlte.min.js"></script>
<script src="assets/js/demo.js"></script>

</body>
</html>
