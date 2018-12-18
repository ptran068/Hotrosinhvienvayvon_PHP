<?php
	$connect = mysqli_connect('localhost','root','','DULIEU');
	mysqli_set_charset($connect,"utf8");
	session_start();
?>

	<?php
		if(isset($_GET["act"])&&$_GET["act"]=="logout"){
			unset($_SESSION["loged"]);
			header("location:index.php");
			setcookie("success", "Bạn đã đăng xuất!", time()+1, "/","", 0);
		}
	?>
    <?php
     
            if (!isset($_SESSION['loged'])) {
	        header('Location: index.php');
            }
    ?>


<!DOCTYPE html>
<html class=" ">
    <head>
     
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8" />
        <title>Complete Admin : Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
       
        <link href="plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS FRAMEWORK - END -->
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <link href="plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/>
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
        <!-- CORE CSS TEMPLATE - START -->
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
        <!-- CORE CSS TEMPLATE - END -->
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class=" ">
        <!-- START TOPBAR -->
        <div class='page-topbar '>
            <div class='logo-area'>
            </div>
            <div class='quick-area'>
                <div class='pull-left'>
                    <ul class="info-menu left-links list-inline list-unstyled">
                        <li class="sidebar-toggle-wrap">
                            <a href="javascript:;" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class='pull-right' id="profile-right">
                    <ul class="info-menu right-links list-inline list-unstyled">
                        <li class="profile">
                            <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="images/anh.jpg"  alt="user-image" class="img-circle img-inline avatar">
                            <span class="name"> <i class="fa fa-angle-down"></i></span>
                            </a>
                            <ul class="dropdown-menu profile animated fadeIn">
                                <li>
                                    <a href="#settings">
                                    <i class="fa fa-wrench"></i>
                                    Settings
                                    </a>
                                </li>
                                <li>
                                    <a href="#profile">
                                    <i class="fa fa-user"></i>
                                    Profile
                                    </a>
                                </li>
                               
                                <li class="last">
                                     <?php if(isset($_SESSION["loged"])) echo "<a href='index.php?act=logout' class='btn btn-danger'>Đăng xuất</a>"; ?>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END TOPBAR -->
        <!-- START CONTAINER -->
        <div class="page-container row-fluid container-fluid">
            <!-- SIDEBAR - START -->
           
            <div class="page-sidebar pagescroll">
                <!-- MAIN MENU - START -->
                <div class="page-sidebar-wrapper" id="main-menu-wrapper">
                    <!-- USER INFO - START -->
                    <div class="profile-info row">
                        <div class="profile-image col-xs-4">
                            <a href="ui-profile.html">
                            <img alt="images/anh.jpg"  src="images/anh.jpg" class="img-responsive img-circle avatar">
                            </a>
                        </div>
                        <div class="profile-details col-xs-8">
                            <h3>
                                <a href="ui-profile.html" class="name">Đại Phong</a>
                                <!-- Available statuses: online, idle, busy, away and offline -->
                                <span class="profile-status online"></span>
                            </h3>
                            <p class="profile-title">Web Developer</p>
                        </div>
                    </div>
                    <!-- USER INFO - END -->
                    <ul class='wraplist'>
                        <li class='menusection'>Main</li>
                        <li class="open"> 
                            <a href="danhsach_view.php">
                            <i class="fa fa-dashboard"></i>
                            <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                            <i class="fa fa-suitcase"></i>
                            <span class="title">Nhân viên</span>
                            <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="danhsach_view.php"  >Danh Sách</a>
                                </li>
                                <li>
                                    <a class="" href="themnhanvien.php"  >Thêm</a>
                                </li>
                                <li>
                                    <a class="" href="suanhanvien.php"  >Sửa</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                            <i class="fa fa-suitcase"></i>
                            <span class="title">Phòng ban</span>
                            <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="listphongban.php"  >Danh Sách</a>
                                </li>
                                <li>
                                    <a class="" href="themphongban.php"  >Thêm</a>
                                </li>
                               
                            </ul>
                        </li>

                        <!-- <li class="">
                            <a href="javascript:;">
                            <i class="fa fa-suitcase"></i>
                            <span class="title">Đơn Hàng</span>
                            <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="admin/cart/danh-sach.html"  >Danh Sách</a>
                                </li>
                            </ul>
                        </li> -->

                    </ul>
                </div>
                <!-- MAIN MENU - END -->
            </div>
