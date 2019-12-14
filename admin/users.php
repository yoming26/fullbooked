<?php
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
            <li><a href="product.php"><i class="fa fa-circle-o"></i> Products </a></li>
            <li class="active"><a href="users.php"><i class="fa fa-circle-o"></i> Users</a></li>
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
        <li class="active">Users</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" >
     
              <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Books</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Photo</th>
                  <th>Menber Since</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <td>01</td>
                  <td>Anna Dangoy</td>
                  <td> <img src="" height="100px;" ></td>
                  <td>12//12/2018</td>
                  <td>adangoy777@gmail.com</td>
                  <td>anna777</td>
                  <td class="text-center"><a class='btn btn-info btn-xs' data-toggle="modal" data-target="#myModal" href="#"><span class="fa fa-pencil-square"></span></a> <a href="#" class="btn btn-danger btn-xs"   data-toggle="modal" data-target="#ordine"><span class="fa fa-trash"></span></a></td>
                </tr>
                <tr>
                 <td>02</td>
                  <td>Joshua Cabillan</td>
                  <td> <img src="" height="100px;" ></td>
                  <td>01//12/2018</td>
                  <td>qwerty@gmail.com</td>
                  <td>qwerty</td>
                  <td class="text-center"><a class='btn btn-info btn-xs' data-toggle="modal" data-target="#myModal" href="#"><span class="fa fa-pencil-square"></span></a> <a href="#" class="btn btn-danger btn-xs"   data-toggle="modal" data-target="#ordine"><span class="fa fa-trash"></span></a></td>
                </tr>
                <tr>
                  <td>03</td>
                  <td>Teodoro Baptista</td>
                  <td> <img src="" height="100px;" ></td>
                  <td>11//12/2018</td>
                  <td>bongbong@gmail.com</td>
                  <td>bongbong</td>
                  <td class="text-center"><a class='btn btn-info btn-xs' data-toggle="modal" data-target="#myModal" href="#"><span class="fa fa-pencil-square"></span></a> <a href="#" class="btn btn-danger btn-xs"   data-toggle="modal" data-target="#ordine"><span class="fa fa-trash"></span></a></td>
                </tr>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
         
       
        
      </section>
    </div>
    
     <!-- Modal -->
<div id="ordine" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title">You are about to delete this item</h4>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Delete</button>
      </div>
    </div>

       
    </div>
    
    
    </div>
    
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil-o"></i> ADD / UPDATE</h4>
      </div>
      <div class="modal-body">
   
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
               <div class="form-group">
                  <label for="mem_id">Member ID</label>
                  <input type="text" class="form-control" id="mem_id" readonly>
                </div>
                <div class="form-group">
                  <label for="mem_name">Member Name</label>
                  <input type="text" class="form-control" id="mem_name">
                </div>
                <div class="form-group">
                  <label for="mem_date">Member Since</label>
                  <input type="date" class="form-control" id="mem_date">
                </div>
                 <div class="form-group">
                  <label for="mem_email">Member Email</label>
                  <input type="email" class="form-control" id="mem_email">
                </div>
                 <div class="form-group">
                  <label for="mem_pass">Member Password</label>
                  <input type="password" class="form-control" id="mem_pass">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
        
       
      
        
      
        </div>
    </div>
    </div>
    
        
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
<script src="dist/js/pages/dashboard2.js"></script>
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

