<?php
  require_once("../connection.php");
   session_start();

    if(isset($_SESSION['user'])) {
?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FullyBooked | Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>FB</b>A</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>FBook</b>Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
        
      <!-- User Account -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Hello Admin</span>
            </a>
            
          </li>
          <!-- Control Sidebar Toggle Button -->
          
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview menu-open">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Manage</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="product.php"><i class="fa fa-circle-o"></i>Manage Product</a></li>
            <li><a href="add_pro.php"><i class="fa fa-circle-o"></i>Add Product</a></li>
            <li><a href="users.php"><i class="fa fa-circle-o"></i> Users</a></li>
            <li><a href="feedback.php"><i class="fa fa-circle-o"></i> Feedback</a></li>
          </ul>
        </li>
        <li><a href="trans.html"><i class="fa fa-dollar"></i> <span>Transactions</span></a></li>
         <li><a href="chat.html"><i class="fa fa-comment"></i> <span>Chats</span></a></li>
        <li><a href="report.html"><i class="fa fa-book"></i> <span>Reports</span></a></li>
        <li><a href="logout.php?logout"><i class="glyphicon glyphicon-log-out"></i> <span>Logout</span></a></li
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Products
                <small>Search</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Manage</a></li>
        <li class="active">Products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" >
     
         <form action="addprod.php" method="POST">
              <div class="box-body">
               <div class="form-group">
                  <label for="book_id">Book ID</label>
                  <input type="text" class="form-control" name="book_id" readonly>
                </div>
                <div class="form-group">
                  <label for="book_name">Book Name</label>
                  <input type="text" class="form-control" name="book_name">
                </div>
                <div class="form-group">
                  <label for="book_author">Book Author</label>
                  <input type="text" class="form-control" name="book_author">
                </div>
                 <div class="form-group">
                  <label for="book_price">Book Price</label>
                  <input type="number" min="0.00" max="10000.00" step="0.01" class="form-control" name="book_price">
                </div>
                 <div class="form-group">
                  <label for="book_description">Book Description</label>
                  <textarea class="form-control" rows="3" name="book_description"></textarea>
                </div>
                <div class="form-group">
                  <label for="book_photo">Product Image</label>
                  <input type="file" name="book_photo">

              
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
       
        
      </section>
    </div>
    
     <!-- Modal -->

    
   
  <footer class="main-footer">
    <strong>Copyright &copy; 2019 FullyBooked.</strong> All rights
    reserved.
  </footer>

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap  -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- ChartJS -->
<script src="bower_components/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->

<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/index2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Dec 2019 02:27:56 GMT -->
</html>
<?php

     }
    else {
        header('location: login.php');
    }
?>
