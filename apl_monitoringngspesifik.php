<?php
//session_start();
//if(empty($_SESSION['username'])or empty($_SESSION['password'])){header("location:apl_login.php");}
//error_reporting(0);
include "apl_koneksi.php";



	
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
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="images/admin.png" class="img-circle" alt="User Image">

                <p>
                 Administrator
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
          <p>Administrator</p>
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
          <a href="apl_adminlkh.php">
            <i class="fa fa-dashboard"></i> <span>LKH</span>
           
          </a>
          
        </li>
		<li class="treeview">
          <a href="apl_monitoringmesin.php">
            <i class="fa fa-files-o"></i>
            <span>Monitoring Mesin</span>
            
          </a>
         
        </li>
		<li><a href="apl_stok.php"><i class="fa fa-book"></i> <span>Stok</span></a></li>
		<li class="treeview">
          <a href="apl_monitoringngspesifik.php">
            <i class="fa fa-share"></i> <span>Monitoring NG Bulanan</span>
            
          </a>
        </li>
		<li class="active treeview"><a href="apl_monitoringngspesifik.php"><i class="fa fa-book"></i> <span>Monitoring NG Spesifik</span></a></li>
		  <li class="treeview">
          <a href="apl_monitoringng3besar.php">
            <i class="fa fa-dashboard"></i> <span>Monitoring NG 3 Besar</span>
           
          </a>
          
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Master Data</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="apl_mesin.php"><i class="fa fa-circle-o"></i>Data Mesin</a></li>
            <li><a href="apl_produk.php"><i class="fa fa-circle-o"></i> Data Produk</a></li>
            <li><a href="apl_user.php"><i class="fa fa-circle-o"></i> Data User</a></li>
            
          </ul>
        </li>
		<li><a href="apl_kritiksaran.php"><i class="fa fa-book"></i> <span>Kritik dan Saran</span></a></li>
		
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
	
	
	
	
	
	
	
	
	
	
	

    <!-- Main content -->
    <section class="content">
		<div class="row">
		
		
		
		</div>
		<div class="row">
		<div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Monitoring "NG SILVER" TAHUN 2017</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<div class="nav-tabs-custom" style="cursor: move;">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right ui-sortable-handle">
             
              <li class="pull-left header"><i class="fa fa-inbox"></i>RC CP LENS 650 RH</li>
            </ul>
            <div class="tab-content no-padding">
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"><svg height="300" version="1.1" width="572.583" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; top: -0.633331px;"><desc>Created with Raphaël 2.2.0</desc><defs></defs><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">0</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,261H547.583" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="202" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">7,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,202H547.583" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="143" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4">15,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,143H547.583" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="84.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4.000000000000028">22,500</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,84.00000000000003H547.583" stroke-width="0.5"></path><text style="text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="53.5" y="25.00000000000003" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal"><tspan dy="4.000000000000028">30,000</tspan></text><path style="" fill="none" stroke="#aaaaaa" d="M66,25.00000000000003H547.583" stroke-width="0.5"></path><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="459.2245151883354" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4">2013</tspan></text><text style="text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" x="245.05759173754555" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#888888" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4">2012</tspan></text><path style="fill-opacity: 1;" fill="#74a5c2" stroke="none" d="M66,219.05493333333334C79.45857715674362,219.56626666666668,106.37573147023087,222.62345,119.83430862697449,221.10026666666667C133.2928857837181,219.57708333333335,160.21004009720536,209.13558251366123,173.66861725394898,206.86946666666668C186.98090552855408,204.6279825136612,213.6054820777643,204.88215,226.9177703523694,203.06986666666666C240.23005862697448,201.25758333333332,266.8546351761847,194.9129178506375,280.1669234507898,192.3712C293.6255006075334,189.80155118397084,320.54265492102064,182.51721666666668,334.00123207776426,182.6244C347.4598092345079,182.73158333333333,374.37696354799516,204.18057122040074,387.8355407047388,193.22866666666667C401.1478289793439,182.39580455373408,427.77240552855403,101.94395359116024,441.08469380315915,95.48533333333336C454.25069319562573,89.09768692449357,480.58269198055893,135.13802307692308,493.7486913730255,141.8436C507.2072685297691,148.69818974358975,534.1244228432563,147.7554,547.583,149.726L547.583,261L66,261Z" fill-opacity="1"></path><path style="" fill="none" stroke="#3c8dbc" d="M66,219.05493333333334C79.45857715674362,219.56626666666668,106.37573147023087,222.62345,119.83430862697449,221.10026666666667C133.2928857837181,219.57708333333335,160.21004009720536,209.13558251366123,173.66861725394898,206.86946666666668C186.98090552855408,204.6279825136612,213.6054820777643,204.88215,226.9177703523694,203.06986666666666C240.23005862697448,201.25758333333332,266.8546351761847,194.9129178506375,280.1669234507898,192.3712C293.6255006075334,189.80155118397084,320.54265492102064,182.51721666666668,334.00123207776426,182.6244C347.4598092345079,182.73158333333333,374.37696354799516,204.18057122040074,387.8355407047388,193.22866666666667C401.1478289793439,182.39580455373408,427.77240552855403,101.94395359116024,441.08469380315915,95.48533333333336C454.25069319562573,89.09768692449357,480.58269198055893,135.13802307692308,493.7486913730255,141.8436C507.2072685297691,148.69818974358975,534.1244228432563,147.7554,547.583,149.726" stroke-width="3"></path><circle cx="66" cy="219.05493333333334" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="119.83430862697449" cy="221.10026666666667" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="173.66861725394898" cy="206.86946666666668" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="226.9177703523694" cy="203.06986666666666" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="280.1669234507898" cy="192.3712" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="334.00123207776426" cy="182.6244" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="387.8355407047388" cy="193.22866666666667" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="441.08469380315915" cy="95.48533333333336" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="493.7486913730255" cy="141.8436" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="547.583" cy="149.726" r="4" fill="#3c8dbc" stroke="#ffffff" style="" stroke-width="1"></circle><path style="fill-opacity: 1;" fill="#eaf3f6" stroke="none" d="M66,240.02746666666667C79.45857715674362,239.8072,106.37573147023087,241.35496666666666,119.83430862697449,239.1464C133.2928857837181,236.93783333333334,160.21004009720536,223.33676429872497,173.66861725394898,222.35893333333334C186.98090552855408,221.39173096539162,213.6054820777643,233.23263333333333,226.9177703523694,231.36626666666666C240.23005862697448,229.4999,266.8546351761847,209.2890577413479,280.1669234507898,207.428C293.6255006075334,205.54649107468123,320.54265492102064,214.4391666666667,334.00123207776426,216.39600000000002C347.4598092345079,218.35283333333336,374.37696354799516,232.37947613843355,387.8355407047388,223.08266666666668C401.1478289793439,213.88690947176687,427.77240552855403,148.2268241252302,441.08469380315915,142.42573333333334C454.25069319562573,136.68839079189686,480.58269198055893,170.47037838827842,493.7486913730255,176.92893333333336C507.2072685297691,183.53101172161175,534.1244228432563,190.23343333333335,547.583,194.66826666666668L547.583,261L66,261Z" fill-opacity="1"></path><path style="" fill="none" stroke="#a0d0e0" d="M66,240.02746666666667C79.45857715674362,239.8072,106.37573147023087,241.35496666666666,119.83430862697449,239.1464C133.2928857837181,236.93783333333334,160.21004009720536,223.33676429872497,173.66861725394898,222.35893333333334C186.98090552855408,221.39173096539162,213.6054820777643,233.23263333333333,226.9177703523694,231.36626666666666C240.23005862697448,229.4999,266.8546351761847,209.2890577413479,280.1669234507898,207.428C293.6255006075334,205.54649107468123,320.54265492102064,214.4391666666667,334.00123207776426,216.39600000000002C347.4598092345079,218.35283333333336,374.37696354799516,232.37947613843355,387.8355407047388,223.08266666666668C401.1478289793439,213.88690947176687,427.77240552855403,148.2268241252302,441.08469380315915,142.42573333333334C454.25069319562573,136.68839079189686,480.58269198055893,170.47037838827842,493.7486913730255,176.92893333333336C507.2072685297691,183.53101172161175,534.1244228432563,190.23343333333335,547.583,194.66826666666668" stroke-width="3"></path><circle cx="66" cy="240.02746666666667" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="119.83430862697449" cy="239.1464" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="173.66861725394898" cy="222.35893333333334" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="226.9177703523694" cy="231.36626666666666" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="280.1669234507898" cy="207.428" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="334.00123207776426" cy="216.39600000000002" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="387.8355407047388" cy="223.08266666666668" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="441.08469380315915" cy="142.42573333333334" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="493.7486913730255" cy="176.92893333333336" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle><circle cx="547.583" cy="194.66826666666668" r="4" fill="#a0d0e0" stroke="#ffffff" style="" stroke-width="1"></circle></svg><div class="morris-hover morris-default-style" style="left: 183.418px; top: 145px; display: none;"><div class="morris-hover-row-label">2011 Q4</div><div class="morris-hover-point" style="color: #a0d0e0">
  Item 1:
  3,767
</div><div class="morris-hover-point" style="color: #3c8dbc">
  Item 2:
  3,597
</div></div></div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"><svg height="300" version="1.1" width="602.583" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative;"><desc>Created with Raphaël 2.2.0</desc><defs></defs><path style="opacity: 0;" fill="none" stroke="#3c8dbc" d="M301.2915,243.33333333333331A93.33333333333333,93.33333333333333,0,0,0,389.51925519497706,180.44625304313007" stroke-width="2" opacity="0"></path><path style="" fill="#3c8dbc" stroke="#ffffff" d="M301.2915,246.33333333333331A96.33333333333333,96.33333333333333,0,0,0,392.35514732624415,181.4248826052307L428.9066459070204,194.03833029452744A135,135,0,0,1,301.2915,285Z" stroke-width="3"></path><path style="opacity: 1;" fill="none" stroke="#f56954" d="M389.51925519497706,180.44625304313007A93.33333333333333,93.33333333333333,0,0,0,217.5763462783141,108.73398312817662" stroke-width="2" opacity="1"></path><path style="" fill="#f56954" stroke="#ffffff" d="M392.35514732624415,181.4248826052307A96.33333333333333,96.33333333333333,0,0,0,214.88550205154564,107.40757544301087L175.71876941747115,88.10097469226493A140,140,0,0,1,433.63313279246563,195.6693795646951Z" stroke-width="3"></path><path style="opacity: 0;" fill="none" stroke="#00a65a" d="M217.5763462783141,108.73398312817662A93.33333333333333,93.33333333333333,0,0,0,301.2621784690488,243.333328727518" stroke-width="2" opacity="0"></path><path style="" fill="#00a65a" stroke="#ffffff" d="M214.88550205154564,107.40757544301087A96.33333333333333,96.33333333333333,0,0,0,301.2612359912682,246.3333285794739L301.2490884998742,284.9999933380171A135,135,0,0,1,180.2035097954186,90.31165416754118Z" stroke-width="3"></path><text style="text-anchor: middle; font-family: &quot;Arial&quot;; font-size: 15px; font-weight: 800;" x="301.2915" y="140" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="15px" stroke="none" fill="#000000" font-weight="800" transform="matrix(1,0,0,1,0,0)"><tspan dy="140">In-Store Sales</tspan></text><text style="text-anchor: middle; font-family: &quot;Arial&quot;; font-size: 14px;" x="301.2915" y="160" text-anchor="middle" font-family="&quot;Arial&quot;" font-size="14px" stroke="none" fill="#000000" transform="matrix(1,0,0,1,0,0)"><tspan dy="160">30</tspan></text></svg></div>
            </div>
          </div>
				<div class="box box-solid bg-teal-gradient">
            
           
            <!-- /.box-body -->
         
            <!-- /.box-footer -->
          </div>
			
			
			
              <table class="table table-bordered">
                <tbody><tr>
                  <th ><center>JENIS NG</center></th>
                  <th ><center>1</center></th>
				   <th ><center>2</center></th>
				    <th ><center>3</center></th>
					 <th ><center>4</center></th>
					  <th ><center>5</center></th>
					   <th ><center>6</center></th>
					    <th ><center>7</center></th>
						 <th ><center>8</center></th>
						  <th ><center>9</center></th>
						   <th ><center>10</center></th>
                 
                 
                </tr>
                <tr>
					 <th ><center>SILVER</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
				 <tr>
					 <th ><center>SHORT</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
				 <tr>
					 <th ><center>CRACK</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
				 <tr>
					 <th ><center>WELDLINE</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
				 <tr>
					 <th ><center>BINTIN DI PERMUKAAN PART</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
				 <tr>
					 <th ><center>BINTIK DI DALAM PART</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
                <tr>
					 <th ><center>KOTOR</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
                <tr>
					 <th ><center>GELOMBANG</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
				 <tr>
					 <th ><center>FLOWMARK</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
				 <tr>
					 <th ><center>DEKOK</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
               
                <tr>
					 <th ><center>UNDERCUT</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
                <tr>
					 <th ><center>MINYAK</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
               
                <tr>
					 <th ><center>KABUT</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
                <tr>
					 <th ><center>ZETTING</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
                <tr>
					 <th ><center>FLEQ</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
                <tr>
					 <th ><center>RAMBUT</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
               
                <tr>
					 <th ><center>GORES</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
               
                <tr>
					 <th ><center>BURRY</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
                <tr>
					 <th ><center>GELEMBUNG</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
                <tr>
					 <th ><center>GOMPAL/PATAH</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
               
                <tr>
					 <th ><center>TRY</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center>19</center></th>
					 <th ><center>32</center></th>
					  <th ><center>31</center></th>
					   <th ><center>40</center></th>
					    <th ><center></center></th>
						 <th ><center>23</center></th>
						  <th ><center>24</center></th>
						   <th ><center>27</center></th>
	
                </tr>
				 <tr>
					 <th ><center>CHECK LEADER</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center></center></th>
					 <th ><center></center></th>
					  <th ><center></center></th>
					   <th ><center></center></th>
					    <th ><center></center></th>
						 <th ><center></center></th>
						  <th ><center></center></th>
						   <th ><center></center></th>
	
                </tr>
				  <tr>
					 <th ><center>CHECK SECTION LEADER/MANAGER</center></th>
                  <th ><center></center></th>
				   <th ><center></center></th>
				    <th ><center></center></th>
					 <th ><center></center></th>
					  <th ><center></center></th>
					   <th ><center></center></th>
					    <th ><center></center></th>
						 <th ><center></center></th>
						  <th ><center></center></th>
						   <th ><center></center></th>
	
                </tr>
               
               
               
               
              </tbody></table>
            </div>
            <!-- /.box-body -->
            
          </div>

        </div>
		</div>
		
		
		
		
      <!-- Small boxes (Stat box) -->
     
      <!-- /.row -->
      <!-- Main row -->

      <!-- /.row (main row) -->

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
