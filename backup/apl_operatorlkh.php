<?php
session_start();
if(empty($_SESSION['username'])or empty($_SESSION['password'])){header("location:apl_login.php");}
error_reporting(0);
include "apl_koneksi.php";


$sqljumlahpeserta = "SELECT COUNT(*) as jumlahpeserta FROM peserta";
$resultjumlahpeserta= mysqli_query($conn,$sqljumlahpeserta);

$sqlmasuk = "SELECT COUNT(*) as jumlahmasuk FROM peserta WHERE Status=1";
$resultmasuk= mysqli_query($conn,$sqlmasuk);

$sqlkeluar= "SELECT COUNT(*) as jumlahkeluar FROM peserta WHERE Status=0";
$resultkeluar= mysqli_query($conn,$sqlkeluar);

$sqlsisa= "SELECT kuota as kuota FROM kuota";
$resultsisa= mysqli_query($conn,$sqlsisa);
	
?>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Halaman Admin stanley</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-yellow sidebar-mini">
<div class="wrapper">

 <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Stanley</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
     <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="images/admin.png" class="user-image" alt="User Image">
             <span class="hidden-xs"><?php echo $_SESSION['username']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/admin.png" class="img-circle" alt="User Image">

                <p>
                 <?php echo $_SESSION['username']?>
                  <small>Administrator PT. Indonesia Stanley</small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <!-- Menu Footer-->
              <li class="user-footer">
                <center>
                <div class="center">
                  <a href="apl_logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
				</center>
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
          <img src="images/admin.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['username']?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class=" treeview">
          <a href="apl_operatorhome.php">
            <i class="fa fa-dashboard"></i> <span>Home</span>
           
          </a>
          
        </li>
		<li class="treeview">
          <a href="apl_operatorproduksi.php">
            <i class="fa fa-files-o"></i>
            <span>Produksi</span>
            
          </a>
         
        </li>
		<li><a href="apl_operatorkritiksaran.php"><i class="fa fa-book"></i> <span>Kritik dan Saran</span></a></li>
		<li class="treeview">
          <a href="apl_operatorrincianng.php">
            <i class="fa fa-share"></i> <span>Rincian NG</span>          
          </a>
        </li>
		<li  class="active treeview"><a href="apl_operatorlkh.php"><i class="fa fa-book"></i> <span>LKH</span></a></li>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
	
	
	
	
	
	
	
	
	
	
	

    <!-- Main content -->
    <section class="content">
	
	<div class="box box-solid bg-yellow">
            <div class="box-header ui-sortable-handle" style="cursor: move;">
             <i class="fa fa-fw fa-balance-scale"></i>

              <h3 class="box-title">Halaman Utama</h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bars"></i></button>
                  <ul class="dropdown-menu pull-right" role="menu">
                    <li><a href="#">Add new event</a></li>
                    <li><a href="#">Clear events</a></li>
                    <li class="divider"></li>
                    <li><a href="#">View calendar</a></li>
                  </ul>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!--The calendar -->
             
		   </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row">
				<center><img src="images/logopt.png" alt="Smiley face" width="200" height="100">
				<h5>SELAMAT DATANG DI SISTEM INFORMASI</h5>
				<h5> PT. INDONESIA STANLEY ELECTRIC </h5>
				
				</center>
                
              </div>
              
			 
			<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center><h3 class="box-title">LAPORAN KERJA HARIAN <br><i>PLASTIC INJECTION (PO)</i></h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                	<tbody><tr>
                    		<th style="width: 20%px; font-size:46px; padding-top:25px;"><p align="center">327,421</p></th>
                  			<th style="width: 30%px"><center><div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center>
              <h3 class="box-title">WORK ORDER</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p align="center" style="font-size:24px">0032742110</p>
            </div>
			
            <!-- /.box-body -->
          </div>
          </center></th>
                            <th style="width: 20%px"><center>
                            
                            <table class="table table-bordered">
                				<tbody><tr style="background-color:#f39c12;">
                                		<th style="width: 20%px"><center>Leader S1</center></th>
                                		<th style="width: 20%px"><center>Leader S2</center></th>
                                		<th style="width: 20%px"><center>Leader S3</center></th>
                                </tr>
                                <tr>
                                		<td></td>
                                        <td></td>
                                        <td></td>
                                </tr>
                                </tbody>
                            </table>
                            
                            </center></th>
                    </tr>
                    </tbody>
                </table>
            </div>
			
            <!-- /.box-body -->
          </div>
              
              <div class="row">
              
              <div class="col-md-4 col-sm-6 col-xs-12">
				<table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                    		<th style="width: 33%"><center>TGL. PROD</center></th>
                  			<th style="width: 33%"><center>NO M/C</center></th>
                            <th style="width: 33%"><center>No PART</center></th>
                    </tr>
                    
                    <tr>
                    		<td height="70px"><center>14 Nov 2017</center></td>
                            <td height="70px"><center>PM 15</center></td>
                            <td height="70px"><center>3802080300</center></td>
                  			
                    </tr>
                    </tbody>
                </table>
		</div>
              
              <div class="col-md-3 col-sm-6 col-xs-12">
				<table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                    		<th><center>NAMA PART</center></th>
                    </tr>
                    
                    <tr>
                    		<td height="70px"><center>W2910M/REF HL/KIJI</center></td>
                  			
                    </tr>
                    </tbody>
                </table>
		</div>
        
        <div class="col-md-5 col-sm-6 col-xs-12">
				<table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                    		<th style="width: 25%"><center>TYPE</center></th>
                  			<th style="width: 25%"><center>DIES</center></th>
                            <th style="width: 25%"><center>C/T <small>STANDART</small></center></th>
                            <th style="width: 25%"><center>C/T <br><small>AKTUAL</small></center></th>
                    </tr>
                    
                    <tr>
                    		<td height="70px"><center>K59A-HL</center></td>
                            <td height="70px"><center></center></td>
                            <td height="70px"><center>28,56</center></td>
                            <td height="70px"><center></center></td>
                  			
                    </tr>
                    </tbody>
                </table>
		</div>
        
        <div class="col-md-4 col-sm-6 col-xs-12">
				<table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                    		<th style="width: 30%"><center>Wo Qty</center></th>
                  			<th style="width: 15%"><center>Std Berat</center></th>
                            <th style="width: 15%"><center>Check</center></th>
                    		<th style="width: 40%"><center>Lot Material</center></th>
                    </tr>
                    
                    <tr>
                    		<td height="70px"><center>2.647</center></td>
                            <td height="70px"><center>209.50 Gr</center></td>
                            <td height="70px"><center></center></td>
                            <td height="70px"><center></center></td>
                  			
                    </tr>
                    </tbody>
                </table>
		</div>
              
              <div class="col-md-3 col-sm-6 col-xs-12">
				<table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                    		<th><center>Nama Material</center></th>
                    </tr>
                    
                    <tr>
                    		<td><center><u>1199932800</u></center></td>
                  			
                    </tr>
                    <tr>
                    		<td><center><small>68/S3000R/9001/BLACK/PC/A</small></center></td>
                  			
                    </tr>
                    </tbody>
                </table>
		</div>
        
        <div class="col-md-5 col-sm-6 col-xs-12">
				<table class="table table-bordered">
                	<tbody><tr>
                    		<th colspan="5"><small>Perubahan 4M</small></th>
                    </tr>
                    
                    <tr>
                    
                    				<th style="width:15%"><small>Man</small></th>
                            		<th style="width:15%"><small>Mc</small></th>
                                    <th style="width:15%"><small>Material</small></th>
                                    <th style="width:15%"><small>Methods</small></th>
                                    <th style="width:40%"><small>Ref No.</small></th>
                    		
                    </tr>
                    
                    <tr>
                    
                    		<td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            
                            
                    </tr>
                    
                    <tr>
                    		<td colspan="5"><small>*) Tuliskan jenis perubahan 4M beri tanda centang (v)<br>*) Cantumkan No LPPB (bila diperlukan)</small></td>
                    </tr>
                    
                    </tbody>
                </table>
		</div>
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        	<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center><h3 class="box-title">SHIFT 1</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                	<tbody><tr>
                    		<th style="width: 33%">
                            <div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center>
              <h3 class="box-title">PLAN PROD</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p align="center" style="font-size:24px">1.009</p>
            </div>
			
            <!-- /.box-body -->
          </div>
                            </th>
                  			<th style="width: 33%"><center><div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center>
              <h3 class="box-title">OPERATOR M/C</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p align="center" style="font-size:24px"></p>
            </div>
			
            <!-- /.box-body -->
          </div>
          </center></th>
                            <th style="width: 20%px">
                            
                            	<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center>
              <h3 class="box-title">COUNTER AKHIR <br>(OK + NG)</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p align="center" style="font-size:24px"></p>
            </div>
			
            <!-- /.box-body -->
          </div>
                            
                            </th>
                    </tr>
                    
                    <tr>
                    
                    	<center>
                            
                            <table class="table table-bordered">
                				<tbody><tr style="background-color:#f39c12;">
                                		<th style="width: 25%; padding-top:25px" rowspan="2"><center>WAKTU PROD</center></th>
                                		<th style="width: 15%"><center><small>08:00-10:00</small></center></th>
                                		<th style="width: 15%"><center><small>10:10-11:45</small></center></th>
                                		<th style="width: 15%"><center><small>12:20-15:30</small></center></th>
                                		<th style="width: 15%"><center><small>15:45-17:00</small></center></th>
                                		<th style="width: 15%"><center><small>Total</small></center></th>
                                </tr>
                                <tr  style="background-color:#f39c12;">
                                		<th style="width: 15%"><center><small>120 Mnt</small></center></th>
                                		<th style="width: 15%"><center><small>95 Mnt</small></center></th>
                                		<th style="width: 15%"><center><small>190 Mnt</small></center></th>
                                		<th style="width: 15%"><center><small>75 Mnt</small></center></th>
                                		<th style="width: 15%"><center><small>480 Mnt</small></center></th>
                                </tr>
                                <tr  style="background-color:#f39c12;">
                                		<th style="width: 25%"><center><small>MAKSIMAL PROD</small></center></th>
                                		<th style="width: 15%"><center><small>252</small></center></th>
                                		<th style="width: 15%"><center><small>200</small></center></th>
                                		<th style="width: 15%"><center><small>399</small></center></th>
                                		<th style="width: 15%"><center><small>158</small></center></th>
                                		<th style="width: 15%"><center><small>1009</small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 25%; text-align:right"><small>MENIT</small></th>
                                		<th style="width: 15%"><center><small>60</small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 25%;"><small>ACTUAL <br>PROD<i style="padding-left:185px">QTY</i></small></th>
                                		<th style="width: 15%"><center><small>92</small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 25%; text-align:right"><small>BALANCE</small></th>
                                		<th style="width: 15%"><center><small>-160</small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 25%; background-color:#f39c12;"><center><small>BERAT BONGGOL</small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                		<th style="width: 15%"><center><small></small></center></th>
                                </tr>
                                </tbody>
                            </table>
                            
                            </center>
                    
                    </tr>
                    
                    </tbody>
                </table>
            </div>
			
            <!-- /.box-body -->
          </div>
        </div>
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        	<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center><h3 class="box-title">SHIFT 2</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                	<tbody><tr>
                    		<th style="width: 33%">
                            <div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center>
              <h3 class="box-title">PLAN PROD</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p align="center" style="font-size:24px">882</p>
            </div>
			
            <!-- /.box-body -->
          </div>
                            </th>
                  			<th style="width: 33%"><center><div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center>
              <h3 class="box-title">OPERATOR M/C</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p align="center" style="font-size:24px"></p>
            </div>
			
            <!-- /.box-body -->
          </div>
          </center></th>
                            <th style="width: 20%px">
                            
                            	<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center>
              <h3 class="box-title">COUNTER AKHIR <br>(OK + NG)</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p align="center" style="font-size:24px"></p>
            </div>
			
            <!-- /.box-body -->
          </div>
                            
                            </th>
                    </tr>
                    
                    <tr>
                    
                    	<center>
                            
                            <table class="table table-bordered">
                				<tbody><tr style="background-color:#f39c12;">
                                		<th style="width: 28%; padding-top:25px" rowspan="2"><center>WAKTU PROD</center></th>
                                		<th style="width: 18%"><center><small>17:00-18:00</small></center></th>
                                		<th style="width: 18%"><center><small>18:30-21:30</small></center></th>
                                		<th style="width: 18%"><center><small>22:00-01:00</small></center></th>
                                		<th style="width: 18%"><center><small>Total</small></center></th>
                                </tr>
                                <tr  style="background-color:#f39c12;">
                                		<th style="width: 18%"><center><small>60 Mnt</small></center></th>
                                		<th style="width: 18%"><center><small>180 Mnt</small></center></th>
                                		<th style="width: 18%"><center><small>180 Mnt</small></center></th>
                                		<th style="width: 18%"><center><small>420 Mnt</small></center></th>
                                </tr>
                                <tr  style="background-color:#f39c12;">
                                		<th style="width: 28%"><center><small>MAKSIMAL PROD</small></center></th>
                                		<th style="width: 18%"><center><small>126</small></center></th>
                                		<th style="width: 18%"><center><small>378</small></center></th>
                                		<th style="width: 18%"><center><small>378</small></center></th>
                                		<th style="width: 18%"><center><small>882</small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 28%; text-align:right"><small>MENIT</small></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 28%;"><small>ACTUAL <br>PROD<i style="padding-left:185px">QTY</i></small></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 28%; text-align:right"><small>BALANCE</small></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 28%; background-color:#f39c12;"><center><small>BERAT BONGGOL</small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                </tr>
                                </tbody>
                            </table>
                            
                            </center>
                    
                    </tr>
                    
                    </tbody>
                </table>
            </div>
			
            <!-- /.box-body -->
          </div>
        </div>
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        	<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center><h3 class="box-title">SHIFT 3</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                	<tbody><tr>
                    		<th style="width: 33%">
                            <div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center>
              <h3 class="box-title">PLAN PROD</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p align="center" style="font-size:24px">756</p>
            </div>
			
            <!-- /.box-body -->
          </div>
                            </th>
                  			<th style="width: 33%"><center><div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center>
              <h3 class="box-title">OPERATOR M/C</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p align="center" style="font-size:24px"></p>
            </div>
			
            <!-- /.box-body -->
          </div>
          </center></th>
                            <th style="width: 20%px">
                            
                            	<div class="box box-warning box-solid">
            <div class="box-header with-border">
              <center>
              <h3 class="box-title">COUNTER AKHIR <br>(OK + NG)</h3></center>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <p align="center" style="font-size:24px"></p>
            </div>
			
            <!-- /.box-body -->
          </div>
                            
                            </th>
                    </tr>
                    
                    <tr>
                    
                    	<center>
                            
                            <table class="table table-bordered">
                				<tbody><tr style="background-color:#f39c12;">
                                		<th style="width: 28%; padding-top:25px" rowspan="2"><center>WAKTU PROD</center></th>
                                		<th style="width: 18%"><center><small>01:00-05:00</small></center></th>
                                		<th style="width: 18%"><center><small>06:00-08:00</small></center></th>
                                		<th style="width: 18%"><center><small>Total</small></center></th>
                                </tr>
                                <tr  style="background-color:#f39c12;">
                                		<th style="width: 18%"><center><small>240 Mnt</small></center></th>
                                		<th style="width: 18%"><center><small>120 Mnt</small></center></th>
                                		<th style="width: 18%"><center><small>360 Mnt</small></center></th>
                                </tr>
                                <tr  style="background-color:#f39c12;">
                                		<th style="width: 28%"><center><small>MAKSIMAL PROD</small></center></th>
                                		<th style="width: 18%"><center><small>504</small></center></th>
                                		<th style="width: 18%"><center><small>252</small></center></th>
                                		<th style="width: 18%"><center><small>756</small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 28%; text-align:right"><small>MENIT</small></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 28%;"><small>ACTUAL <br>PROD<i style="padding-left:185px">QTY</i></small></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 28%; text-align:right"><small>BALANCE</small></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                </tr>
                                <tr>
                                		<th style="width: 28%; background-color:#f39c12;"><center><small>BERAT BONGGOL</small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                		<th style="width: 18%"><center><small></small></center></th>
                                </tr>
                                </tbody>
                            </table>
                            
                            </center>
                    
                    </tr>
                    
                    </tbody>
                </table>
            </div>
			
            <!-- /.box-body -->
          </div>
        </div>
        
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        <table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                    		<th colspan="5">RINCIAN JENIS NG ----> PO-RETURN <small>(Pcs)</small></th>
                  			<th><center>Input SAP PO-RETURN</center></th>
                    </tr>
                    
                    <tr>
                    		<td>1. Silver</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>2. Weldline</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>3. Crack</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>4. Bintik di Permukaan Part</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>5. Bintik di Dalam Part</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>6. Dekok/Hike</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>7. Cold Flow/Zetting</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>8. Flow Mark</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>9. Gompal/Patah</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>10. Under Cut</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>11. Gores</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>12. Fleq/Kotor</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>13. Short Shot</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>14. NG Try</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td align="right">Total</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td align="right">Paraf Nurse Leader</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td colspan="4"></td>
                            <td align="right"><small>Total NG</small></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td colspan="4"></td>
                            <td align="right"><small>NG Try</small></td>
                            <td></td>
                    </tr>
                    
                    </tbody>
        </table>
        </div> 
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        <table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                    		<th colspan="5">RINCIAN JENIS NG ----> PO-RETURN <small>(Pcs)</small></th>
                  			<th><center>Input SAP PO-RETURN</center></th>
                    </tr>
                    
                    <tr>
                    		<td>1. Silver</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>2. Weldline</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>3. Crack</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>4. Bintik di Permukaan Part</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>5. Bintik di Dalam Part</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>6. Dekok/Hike</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>7. Cold Flow/Zetting</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>8. Flow Mark</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>9. Gompal/Patah</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>10. Under Cut</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>11. Gores</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>12. Fleq/Kotor</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>13. Short Shot</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>14. NG Try</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td align="right">Total</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td align="right">Paraf Nurse Leader</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td colspan="4"></td>
                            <td align="right"><small>Total NG</small></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td colspan="4"></td>
                            <td align="right"><small>NG Try</small></td>
                            <td></td>
                    </tr>
                    
                    </tbody>
        </table>
        </div> 
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        <table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                    		<th colspan="5">RINCIAN JENIS NG ----> PO-RETURN <small>(Pcs)</small></th>
                  			<th><center>Input SAP PO-RETURN</center></th>
                  			<th><center>Grand Total NG <small>Input SAP</small></center></th>
                    </tr>
                    
                    <tr>
                    		<td>1. Silver</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>2. Weldline</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>3. Crack</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>4. Bintik di Permukaan Part</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>5. Bintik di Dalam Part</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>6. Dekok/Hike</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>7. Cold Flow/Zetting</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>8. Flow Mark</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>9. Gompal/Patah</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>10. Under Cut</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>11. Gores</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>12. Fleq/Kotor</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>13. Short Shot</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>14. NG Try</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td align="right">Total</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td align="right">Paraf Nurse Leader</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td colspan="4"></td>
                            <td align="right"><small>Total NG</small></td>
                            <td></td>
                            <td rowspan="2"></td>
                    </tr>
                    
                    <tr>
                    		<td colspan="4"></td>
                            <td align="right"><small>NG Try</small></td>
                            <td></td>
                    </tr>
                    
                    </tbody>
        </table>
        </div> 
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        <table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                    		<th>Lost Time <small>(Menit)</small></th>
                  			<th><center>Input SAP</center></th>
                            <th align="right" colspan="2">Input SAP</th>
                            <th align="right" colspan="2">Input SAP</th>
                            <th align="right" colspan="2">Input SAP</th>
                            
                    </tr>
                    
                    <tr>
                    		<th>Direct</th>
                            <th>Mnt</th>
                            <th>Indirect</th>
                            <th>Mnt</th>
                            <th>Setup</th>
                            <th>Mnt</th>
                            <th>Machine</th>
                            <th>Mnt</th>
                    </tr>
                    
                    <tr>
                    		<td>Mold Rusak</td>
                            <td></td>
                            <td>Material Kurang</td>
                            <td></td>
                            <td>Ganti Type</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Set. Ejector</td>
                            <td></td>
                            <td>Try New Dies(NPP)</td>
                            <td></td>
                            <td>Prepare Mold</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>M/C Trouble</td>
                            <td></td>
                            <td>Material NG</td>
                            <td></td>
                            <td>Setting Mold</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Part NG</td>
                            <td></td>
                            <td>Lorry Habis</td>
                            <td></td>
                            <td>Pre Heating Mold</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Report LKH</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<th>Total</th>
                            <td></td>
                            <th>Total</th>
                            <td></td>
                            <th>Total</th>
                            <td></td>
                            <th>Total</th>
                            <td></td>
                    </tr>
                    
                    
                    </tbody>
        </table>
        </div> 
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        <table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                    		<th>Lost Time <small>(Menit)</small></th>
                  			<th><center>Input SAP</center></th>
                            <th align="right" colspan="2">Input SAP</th>
                            <th align="right" colspan="2">Input SAP</th>
                            <th align="right" colspan="2">Input SAP</th>
                            
                    </tr>
                    
                    <tr>
                    		<th>Direct</th>
                            <th>Mnt</th>
                            <th>Indirect</th>
                            <th>Mnt</th>
                            <th>Setup</th>
                            <th>Mnt</th>
                            <th>Machine</th>
                            <th>Mnt</th>
                    </tr>
                    
                    <tr>
                    		<td>Mold Rusak</td>
                            <td></td>
                            <td>Material Kurang</td>
                            <td></td>
                            <td>Ganti Type</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Set. Ejector</td>
                            <td></td>
                            <td>Try New Dies(NPP)</td>
                            <td></td>
                            <td>Prepare Mold</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>M/C Trouble</td>
                            <td></td>
                            <td>Material NG</td>
                            <td></td>
                            <td>Setting Mold</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Part NG</td>
                            <td></td>
                            <td>Lorry Habis</td>
                            <td></td>
                            <td>Pre Heating Mold</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Report LKH</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<th>Total</th>
                            <td></td>
                            <th>Total</th>
                            <td></td>
                            <th>Total</th>
                            <td></td>
                            <th>Total</th>
                            <td></td>
                    </tr>
                    
                    
                    </tbody>
        </table>
        </div> 
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        <table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                    		<th>Lost Time <small>(Menit)</small></th>
                  			<th><center>Input SAP</center></th>
                            <th align="right" colspan="2">Input SAP</th>
                            <th align="right" colspan="2">Input SAP</th>
                            <th align="right" colspan="2">Input SAP</th>
                            
                    </tr>
                    
                    <tr>
                    		<th>Direct</th>
                            <th>Mnt</th>
                            <th>Indirect</th>
                            <th>Mnt</th>
                            <th>Setup</th>
                            <th>Mnt</th>
                            <th>Machine</th>
                            <th>Mnt</th>
                    </tr>
                    
                    <tr>
                    		<td>Mold Rusak</td>
                            <td></td>
                            <td>Material Kurang</td>
                            <td></td>
                            <td>Ganti Type</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Set. Ejector</td>
                            <td></td>
                            <td>Try New Dies(NPP)</td>
                            <td></td>
                            <td>Prepare Mold</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>M/C Trouble</td>
                            <td></td>
                            <td>Material NG</td>
                            <td></td>
                            <td>Setting Mold</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Part NG</td>
                            <td></td>
                            <td>Lorry Habis</td>
                            <td></td>
                            <td>Pre Heating Mold</td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Report LKH</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<th>Total</th>
                            <td></td>
                            <th>Total</th>
                            <td></td>
                            <th>Total</th>
                            <td></td>
                            <th>Total</th>
                            <td></td>
                    </tr>
                    
                    
                    </tbody>
        </table>
        </div> 
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        <table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                            <th colspan="2">Omit Time</th>
                    		<th><center>Duration</center></th>
                  			<th>Keterangan</th>
                            
                    </tr>
                    
                    <tr>
                    		<th>Direct</th>
                            <th>Mnt</th>
                            <th rowspan="6"></th>
                            <th rowspan="7"></th>
                    </tr>
                    
                    <tr>
                    		<td>Morning Meeting</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Cleaning</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Inventory</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Medical Check</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>QC Circle</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td align="right">Total</td>
                            <td></td>
                            <th><center>Input SAP</center></th>
                    </tr>
                    
                    
                    </tbody>
        </table>
        </div> 
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        <table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                            <th colspan="2">Omit Time</th>
                    		<th><center>Duration</center></th>
                  			<th>Keterangan</th>
                            
                    </tr>
                    
                    <tr>
                    		<th>Direct</th>
                            <th>Mnt</th>
                            <th rowspan="6"></th>
                            <th rowspan="7"></th>
                    </tr>
                    
                    <tr>
                    		<td>Morning Meeting</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Cleaning</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Inventory</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Medical Check</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>QC Circle</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td align="right">Total</td>
                            <td></td>
                            <th><center>Input SAP</center></th>
                    </tr>
                    
                    
                    </tbody>
        </table>
        </div> 
        
        <div class="col-md-12 col-sm-6 col-xs-12">
        <table class="table table-bordered">
                	<tbody><tr style="background-color:#f39c12;">
                            <th colspan="2">Omit Time</th>
                    		<th><center>Duration</center></th>
                  			<th>Keterangan</th>
                            
                    </tr>
                    
                    <tr>
                    		<th>Direct</th>
                            <th>Mnt</th>
                            <th rowspan="6"></th>
                            <th rowspan="7"></th>
                    </tr>
                    
                    <tr>
                    		<td>Morning Meeting</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Cleaning</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Inventory</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>Medical Check</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td>QC Circle</td>
                            <td></td>
                    </tr>
                    
                    <tr>
                    		<td align="right">Total</td>
                            <td></td>
                            <th><center>Input SAP</center></th>
                    </tr>
                    
                    
                    </tbody>
        </table>
        </div> 
        
        
        
        
      
        
        </div> <!-- end row -->
              
			  
              <!-- /.row -->
            </div> <!-- end box-footer text-black -->
          </div>
	
	
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.7
    </div>
    <strong>Copyright &copy; 2018 <a href="http://almsaeedstudio.com">pakpolitik</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>