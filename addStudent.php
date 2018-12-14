
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
        <link href="style.css" rel="stylesheet" type="text/css"/>
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
                            <a href="/admin">
                            <i class="fa fa-dashboard"></i>
                            <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                            <i class="fa fa-suitcase"></i>
                            <span class="title">Category</span>
                            <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="admin/cate/danh-sach.html"  >Danh Sách</a>
                                </li>
                                <li>
                                    <a class="" href="admin/cate/them-cate.html"  >Thêm</a>
                                </li>
                            </ul>
                        </li>
                        <li class="">
                            <a href="javascript:;">
                            <i class="fa fa-suitcase"></i>
                            <span class="title">Sản Phẩm</span>
                            <span class="arrow "></span>
                            </a>
                            <ul class="sub-menu" >
                                <li>
                                    <a class="" href="admin/product/danh-sach.html"  >Danh Sách</a>
                                </li>
                                <li>
                                    <a class="" href="admin/product/them-product.html"  >Thêm</a>
                                </li>
                            </ul>
                        </li>

                        <li class="">
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
                        </li>

                    </ul>
                </div>
                <!-- MAIN MENU - END -->
            </div>


        <!-- START TOPBAR -->
          <!-- START CONTAINER -->
          <div class="page-container row-fluid container-fluid">
            <!-- SIDEBAR - START -->
           
               


            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
            <section class="wrapper main-wrapper row" style=''>
                <div class='col-xs-12'>
                    <div class="page-title">
                        <div class="pull-left">
                            <h1 class="title">Add Sản Phẩm</h1>
                        </div>
                        <div class="pull-right hidden-xs">
                            
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Thông Tin</h2>
                            <div class="actions panel_actions pull-right">
                                <a class="box_toggle fa fa-chevron-down"></a>
                                <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                <a class="box_close fa fa-times"></a>
                            </div>
                        </header>
                        <div class="content-body">
                            <div class="row">
                            
                                <form action ="" method="post" enctype="multipart/form-data">
                               
                                    <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                        <div class="form-group">
                                            <label class="form-label" for="field-120334">Tên sinh viên</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" id="name" value="" class="form-control" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                        <div class="form-group">
                                            <label class="form-label" for="field-120334">Tuổi</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" id="name" value="" class="form-control" name="name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                        <div class="form-group">
                                            <label class="form-label" for="field-120334">Địa chỉ</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" id="name" value="" class="form-control" name="name">
                                            </div>
                                        </div>
                                    </div>

                                   <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                        <div class="form-group">
                                            <label class="form-label" for="field-120334">Lớp</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" id="name" value="" class="form-control" name="name">
                                            </div>
                                        </div>
																		</div>
																		<div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                        <div class="form-group">
                                            <label class="form-label" for="field-120334">Phone</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" id="name" value="" class="form-control" name="name">
                                            </div>
                                        </div>
																		</div>
																		<div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                        <div class="form-group">
                                            <label class="form-label" for="field-120334">Mssv</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" id="name" value="" class="form-control" name="name">
                                            </div>
                                        </div>
																		</div>
																		<div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                        <div class="form-group">
                                            <label class="form-label" for="field-120334">Tiền đã vay</label>
                                            <span class="desc"></span>
                                            <div class="controls">
                                                <input type="text" id="name" value="" class="form-control" name="name">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-12 col-sm-9 col-md-8 padding-bottom-30">
                                        <div class="text-left">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                            <button type="button" class="btn">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                    </section>
                    </div>
            </section>
        </section>
            <!-- END CONTENT -->
            <div class="chatapi-windows ">
            </div>
         <!-- END CONTAINER -->
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->
        <!-- CORE JS FRAMEWORK - START --> 
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script> 
        <script src="js/jquery.easing.min.js" type="text/javascript"></script> 
        <script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
        <script src="plugins/pace/pace.min.js" type="text/javascript"></script>  
        <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
        <script src="plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
        <script>window.jQuery||document.write('<script src="TT_Admin/assets/js/jquery-1.11.2.min.js"><\/script>');</script>
        <!-- CORE JS FRAMEWORK - END --> 
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
        <!-- <script src="TT_Admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js" type="text/javascript"></script> -->
       <!--  <script src="TT_Admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script> -->
        <script src="plugins/echarts/echarts-custom-for-dashboard.js" type="text/javascript"></script>
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
        <!-- CORE TEMPLATE JS - START --> 
        <script src="js/scripts.js" type="text/javascript"></script> 
        <!-- END CORE TEMPLATE JS - END --> 
        <!-- General section box modal start -->
        <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog animated bounceInDown">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Section Settings</h4>
                    </div>
                    <div class="modal-body">
                        Body goes here...
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <button class="btn btn-success" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal end -->
        <script type="text/javascript">
            $(document).ready(function(){
               $.post(
                    './admin/getUser',
                    {

                    },function(data){
                      $('img.avatar').attr('src', 'upload/' + data.img);
                      $('.name').html(data.fullname);
                    }
                )
            });
        </script>
    </body>
</html>
            <script src="plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
            <script src="plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
            <script src="plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
            <script src="plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>