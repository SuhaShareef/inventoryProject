<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
	unset($_SESSION['first_name']);
	unset($_SESSION['last_name']);
	header("location: table.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="Inventmng/srtdash/assets/bootstrap.min.css">
</head>
<body>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
   
</div>
<script>src="srtdash/assets/js/vendor/jquery-2.2.4.min.js" </script>
<script>src="srtdash/assets/js/vendor/modernizr-2.8.3.min.js" </script>
</body>
</html>



<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- <title>srtdash - ICO Dashboard</title> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <!-- <div class="page-container"> -->
        <!-- sidebar menu area start -->
       <!--  <div class="sidebar-menu"> -->
            <!-- <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div> -->
           <!--  <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu"> -->
                            <!-- <li class="active">
                                <a href="index.php" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                                
                            </li> --> 
                            
                           
                            
                           
                            <!-- <li>
                                <a href="table.php" aria-expanded="true"><i class="fa fa-table"></i>
                                    <span>Item Records</span></a> -->
                               <!-- <ul class="collapse">
                                    <li><a href="table-basic.html">basic table</a></li>
                                    <li><a href="table-layout.html">table layout</a></li>
                                    <li><a href="datatable.html">datatable</a></li>
                                </ul>
								!-->
								
                        <!--     </li> -->
                           
                            
                          <!-- 
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div> -->
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <!-- <div class="main-content"> -->
            <!-- header area start -->
           <!--  <div class="header-area">
                <div class="row align-items-center"> -->
                    <!-- nav and search button -->
                   <!--  <div class="col-md-6 col-sm-8 clearfix"> -->
                        <!-- <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div> -->
                       <!--  <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div> -->
                   <!--  </div> -->
                    <!-- profile info & task notification -->
                   <!--  <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                           
                            
        
                        </ul>
                    </div> -->
              <!--   </div> -->
          <!--   </div> -->
            <!-- header area end -->
            <!-- page title area start -->
           <!--  <div class="page-title-area">
                <div class="row align-items-center"> -->
                   <!--  <div class="col-sm-6"> -->
                       <!--  <div class="breadcrumbs-area clearfix">
                            <h4 class="page-title pull-left">Dashboard</h4>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.php">Home</a></li>
                                <li><span>Dashboard</span></li>
                            </ul>
                        </div> -->
                    <!-- </div> -->
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right" style="margin-right: -148px;border-radius: 25px;">
                            <img class="avatar user-thumb" src="assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                 
							<a class="dropdown-item" href="index.php?logout='1'">Log Out</a>
                            </div>
                        </div>
                    </div>
               <!--  </div> -->
            <!-- </div> -->
            <!-- page title area end -->
        
               
             <div class="container">
   <div class="item active">
        <img src="img/technic.png" alt="pic" style="width:50%;margin-left: 267px;">
       <!--  <div class="centered" style="position: absolute;top: 40%;left: 60%;
  transform: translate(-50%, -50%);font-size: 40px;font-family: cursive;">Inventory Management System</div>
      </div> -->
</div>

<!-- <div class="container" style="position: relative;text-align: center;color: white;"> -->
 
      
        <!-- <div class="centered" style="position: absolute;top: 40%;left: 60%;
  transform: translate(-50%, -50%);font-size: 40px;font-family: cursive;">Inventory Management System</div> -->
  <div class="container">
  <div class="row">

<a href="material_requisition.php">
    <div class="col-md-6" style="border: 1px solid rgb(210, 206, 206); padding: 44px 40px;width: 400px;
    height: 116px;/*margin-right: 35px;*/margin-bottom: 25px;/*margin-left: 178px;*/ margin-top: 35px;/*box-shadow: -6px -6px 1px;*/ color:rgb(210, 206, 206);border-radius: 18px 19px 18px 19px; background-color: #0F439D;">
     <!--  <div>
          <center><img src="img/pic5.jpg" style="width: 65px; height: 45px;margin-top: -45px;" alt=""/></center>
      </div> -->
      <center><h3 style="color:white;font-weight: bold;  margin-top: 1px; font-size: 16px;">Material Requisition</h3></center>
    </div>
</a>
<a href="">
    <div class="col-md-6" style="border: 1px solid rgb(210, 206, 206); padding: 44px 40px;width: 405px;
    height: 116px; /*margin-right: 35px;*/margin-bottom: 25px; margin-top: 35px; /*margin-left: 143px;*/ /*box-shadow: -6px -6px 1px;*/ color:rgb(210, 206, 206);border-radius: 18px 19px 18px 19px; background-color: #0F439D;">
           <!--  <div>
          <center><img src="img/pic17.png" style="width: 65px; height: 45px;margin-top: -45px;" alt=""/></center>
      </div> -->
      <center><h3 style="color:white;font-size: 16px;font-weight: bold; margin-top: 2px;">Fund Requisition</h3></center>
    </div>
</a>
</div>

<div class="row" style="margin-left: 30px;">
<a href="">
    <div class="col-md-6" style="border: 1px solid rgb(210, 206, 206);padding: 44px 40px;width: 585px; height: 116px;margin-top: 7px;margin-bottom: 25px;/*margin-right: 12px; margin-left: 178px;*/ /*box-shadow: -6px -6px 1px;*/ color:rgb(210, 206, 206);border-radius: 18px 19px 18px 19px; background-color: #0F439D;">
           <div>
          <center><img src="img/pic19.png" style="height: auto;width: 57px;margin-top: -30px;"/></center>
      </div>
      <center><h3 style="color:white;margin-top: 5px;font-size: 16px;font-weight: bold;margin-left: -8px;">Letter of Credit Management</h3></center>
    </div>
</a>


<a href="">
    <div class="col-md-6" style="border: 1px solid rgb(210, 206, 206);padding: 44px 40px; width: 405px; 
    height: 116px; margin-top: 7px;margin-bottom: 25px;/*margin-right: 35px;*/ padding: 44px 36px; /*margin-left: 148px;*/ /*box-shadow: -6px -6px 1px;*/ color:rgb(210, 206, 206);border-radius: 18px 19px 18px 19px; background-color: #0F439D;">
      <div>
          <center><img src="img/pic7.png" style="width: 52px; height: 45px;margin-top: -38px;" alt=""/></center>
      </div>
      <center><h3 style="color:white;font-size: 16px;margin-top: 5px;font-weight: bold;">Procurement</h3></center>
    </div>
</a>
</div>

 <div class="row">
<a href="">
    <div class="col-md-6" style="border: 1px solid rgb(210, 206, 206); padding: 44px 40px;width: 405px; height: 116px;margin-top: 7px;margin-bottom: 25px;/*margin-right: 35px; margin-left: 178px;*/ /*box-shadow: -6px -6px 1px;*/ color:rgb(210, 206, 206);border-radius: 18px 19px 18px 19px; background-color: #0F439D;"hover:border: 1px solid black;>
     <div>
          <center><img src="img/pic18.png" style="width: 52px; height: 43px;margin-top: -51px;" alt=""/></center>
      </div>
      <center><h3 style="color:white;margin-top: 7px;font-size: 16px;font-weight: bold;">Manage Inventory</h3></center>
    </div>
</a> 

<a href="">
    <div class="col-md-6" style="border: 1px solid rgb(210, 206, 206); padding: 44px 40px;width: 585px; height: 116px;margin-top: 7px;margin-bottom: 25px;/*margin-right: 35px;margin-left: 125px;*/ /*box-shadow: -6px -6px 1px;*/ color:rgb(210, 206, 206);border-radius: 18px 19px 18px 19px;  background-color: #0F439D;" hover:border: 1px solid black;>
     <div>
          <center><img src="img/pic20.png" style="width: 68px; height: 41px;margin-top: -37px;" alt=""/></center>
      </div>
      <center><h3 style="color:white;margin-top:-3px;font-size: 16px;font-weight: bold;margin-left: -9px;">Fixed Asset Management</h3></center>
    </div>
</a> 
</div>

<!-- <a href="">
    <div class="col-md-3" style="border: 1px solid rgb(210, 206, 206); margin-right: 12px; margin-bottom: 20px; width: 260px; height: 203px; padding: 44px 36px; box-shadow: -1px 0px 1px; color:rgb(210, 206, 206);" hover:border: 1px solid black;>
     <div>
          <center><img src="img/pic15.png" style="width: 80px; height: 57px;" alt=""/></center>
      </div>
      <center><h3 style="color:#000;">Sales</h3></center>
    </div>
</a> -->

<!-- <a href="">
    <div class="col-md-3" style="border: 1px solid rgb(210, 206, 206); margin-right: 12px; margin-bottom: 20px; width: 260px; height: 203px; padding: 44px 36px; box-shadow: -1px 0px 1px; color:rgb(210, 206, 206);" hover:border: 1px solid black;>
     <div>
          <center><img src="img/pic17.png" style="width: 80px; height: 57px;" alt=""/></center>
      </div>
      <center><h3 style="color:#000;">Procurement</h3></center>
    </div>
</a> -->

<!-- <a href="">
    <div class="col-md-3" style="border: 1px solid rgb(210, 206, 206); margin-right: 12px; margin-bottom: 20px; width: 260px; height: 203px; padding: 44px 36px; box-shadow: -1px 0px 1px; color:rgb(210, 206, 206);" hover:border: 1px solid black;>
     <div>
          <center><img src="img/pic18.png" style="width: 80px; height: 57px;" alt=""/></center>
      </div>
      <center><h3 style="color:#000;">Store Dept.</h3></center>
    </div>
</a> -->
</div>
                
      </div>              
        </div>

          <div>
        
         <?php  if (isset($_SESSION['first_name']) ) : ?>
        <h2 style="text-align:center"> Welcome <strong><?php echo $_SESSION['first_name']; echo " " ;echo $_SESSION['last_name'];?></strong></h2>
        
        <?php endif ?>
        <!-- <img src="image.jpg" alt="welcome " style="width:100%"> -->
        
        </div>
		
        <!-- main content area end -->
        <!-- footer area start-->
        <footer>
            <div class="footer-area">
                <p>?? All right reserved
            </div>
        </footer>
        <!-- footer area end-->
    </div>
    <!-- page container area end -->
    <!-- offset area start -->
    <div class="offset-area">
        <div class="offset-close"><i class="ti-close"></i></div>
        <ul class="nav offset-menu-tab">
            <li><a class="active" data-toggle="tab" href="#activity">Activity</a></li>
            <li><a data-toggle="tab" href="#settings">Settings</a></li>
        </ul>
        
           
    <!-- offset area end -->
    <!-- jquery latest version -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/metisMenu.min.js"></script>
    <script src="assets/js/jquery.slimscroll.min.js"></script>
    <script src="assets/js/jquery.slicknav.min.js"></script>

    <!-- start chart js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
    <!-- start highcharts js -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!-- start zingchart js -->
    <script src="https://cdn.zingchart.com/zingchart.min.js"></script>
    <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
    </script>
    <!-- all line chart activation -->
    <script src="assets/js/line-chart.js"></script>
    <!-- all pie chart -->
    <script src="assets/js/pie-chart.js"></script>
    <!-- others plugins -->
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>
