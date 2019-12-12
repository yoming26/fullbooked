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
              <img src="" class="user-image">
              <span class="hidden-xs">Marlon Ocsan</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="" class="img-circle">

                <p>
                  Marlon Ocsan
                  <small>Administrator</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
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
      <div class="user-panel">
        <div class="pull-left image">
          <img src="" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Marlon Ocsan</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
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
            <li class="active"><a href="product.php"><i class="fa fa-circle-o"></i> Products </a></li>
            <li><a href="users.php"><i class="fa fa-circle-o"></i> Users</a></li>
            <li><a href="feedback.php"><i class="fa fa-circle-o"></i> Feedback</a></li>
          </ul>
        </li>
        <li><a href="trans.html"><i class="fa fa-dollar"></i> <span>Transactions</span></a></li>
         <li><a href="chat.html"><i class="fa fa-comment"></i> <span>Chats</span></a></li>
        <li><a href="report.html"><i class="fa fa-book"></i> <span>Reports</span></a></li>
        
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
     
              <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <button type="submit" class="btn btn-success" href="add_product.html"  data-toggle="modal" data-target="#myModal" ><i class="fa fa-plus"></i></button>
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
                  <th>Auhtor</th>
                  <th>Price</th>
                  <th>Description</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <td>01</td>
                  <td>The Testament</td>
                  <td> <img src="C:\xampp\htdocs\fullbooked\im.jpg" height="100px;" ></td>
                  <td>Margaret Atwood</td>
                  <td><span>&#8369;750.00</span></td>
                  <td>The Testaments is a 2019 novel by Margaret Atwood. It is a sequel to The Handmaid's Tale (1985). The novel is set 15 years after the events of The Handmaid's Tale. It is narrated by Aunt Lydia, a character from the previous novel; Agnes, a young woman living in Gilead; and Daisy, a young woman living in Canada.</td>
                                  <td class="text-center"><a class='btn btn-info btn-xs' data-toggle="modal" data-target="#myModal" href="#"><span class="fa fa-pencil-square"></span></a> <a href="#" class="btn btn-danger btn-xs"   data-toggle="modal" data-target="#ordine"><span class="fa fa-trash"></span></a></td>
                </tr>
                <tr>
                 <td>02</td>
                  <td>Smashed</td>
                  <td> <img src="im/2.jpg" height="100px;" ></td>
                  <td>Koren Zailckas </td>
                  <td><span>&#8369;650.00</span></td>
                  <td>"Smashed: Story of a Drunken Girlhood is a memoir written in 2005 by American writer Koren Zailckas and published by Viking Press. The book has spent more than 10 weeks on the New York Times Best Seller list."</td>
                                  <td class="text-center"><a class='btn btn-info btn-xs' data-toggle="modal" data-target="#myModal" href="#"><span class="fa fa-pencil-square"></span></a> <a href="#" class="btn btn-danger btn-xs"   data-toggle="modal" data-target="#ordine"><span class="fa fa-trash"></span></a></td>
                </tr>
                <tr>
                 
                 
             
                 
                  <td>03</td>
                  <td>Norse Mytholog</td>
                  <td> <img src="im/3.jpg" height="100px;" ></td>
                  <td>Neil Gaiman </td>
                  <td><span>&#8369;650.00</span></td>
                  <td>Norse mythology is the body of myths of the North Germanic peoples, stemming from Norse paganism and continuing after the Christianization of Scandinavia, and into the Scandinavian folklore of the modern period.</td>
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
        <h4 class="modal-title" id="myModalLabel"><i class="fa fa-pencil-o"></i> UPDATE</h4>
      </div>
      <div class="modal-body">
   
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
               <div class="form-group">
                  <label for="book_id">Book ID</label>
                  <input type="text" class="form-control" id="book_id" readonly>
                </div>
                <div class="form-group">
                  <label for="book_name">Book Name</label>
                  <input type="text" class="form-control" id="book_name">
                </div>
                <div class="form-group">
                  <label for="book_author">Book Author</label>
                  <input type="text" class="form-control" id="book_author">
                </div>
                 <div class="form-group">
                  <label for="book_price">Book Price</label>
                  <input type="text" class="form-control" id="book_price">
                </div>
                 <div class="form-group">
                  <label for="book_description">Book Author</label>
                  <textarea class="form-control" rows="3" ></textarea>
                </div>
                <div class="form-group">
                  <label for="book_photo">File input</label>
                  <input type="file" id="book_photo">

                  
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
