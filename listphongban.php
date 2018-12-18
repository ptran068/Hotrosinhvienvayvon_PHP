<?php require_once 'headerr.php'; ?>


            <!--  SIDEBAR - END -->
            <!-- START CONTENT -->
            <section id="main-content" class=" ">
                <section class="wrapper main-wrapper row" style=''>
                    <div class='col-xs-12'>
                        <div class="page-title">
                            <div class="pull-left">
                                <h1 class="title">Danh Sách Phòng Ban</h1>
                            </div>
                            <div class="pull-right hidden-xs">
                               
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-lg-12">
                        <section class="box ">
                            <header class="panel_header">
                                <h2 class="title pull-left">All Phòng ban</h2>
                                <div class="actions panel_actions pull-right">
                                    <a class="box_toggle fa fa-chevron-down"></a>
                                    <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                                    <a class="box_close fa fa-times"></a>
                                </div>
                            </header>
                            <div class="content-body">
                                <div class="row">
                                    
                                    <div class="col-xs-12">
                                        <!-- ********************************************** -->
                                        <table id="example" class="display table table-hover table-condensed">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Mô tả</th>
                                                    <th>Nhân Viên</th> 
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                                $sql = "select * from phongban";
                                                $rs= mysqli_query($connect,$sql);
                                                while($result=mysqli_fetch_array($rs))
                                                {
                                                    echo '<tr>
                                                    <td>'.$result["IDPB"].'</td>
                                                    <td>'.$result["TenPB"].'</td>
                                                    <td>'.$result["Mota"].'</td>
                                                    <td><a href="listnhanvien.php?IDPB='.$result["IDPB"].'">xxx</a></td>
                                                   
                                                    </tr>';
                                                }
                                                // echo '</table>';
                                                ?>
                                            </tbody>
                                        </table>
                                        <!-- ********************************************** -->
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </section>
            </section>
            <!-- END CONTENT -->
            <div class="chatapi-windows ">

            </div>

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

        <script>
            $(document).ready(function() {
                $('#example').Tabledit({
                    url:'action.php',
                    columns:{
                        identifier:[0,"IDPB"],
                        editable:[[1, 'TenPB'],[2,'Mota']]
                    },
                    onSuccess:function(data,text,jq){
                        if(data.action='delete'){
                            $('#'+data.IDPB).remove();
                        }
                    }
                })
            }
        
        </script>

    </body>
</html>
            <script src="plugins/datatables/js/jquery.dataTables.min.js" type="text/javascript"></script>
            <script src="plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
            <script src="plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js" type="text/javascript"></script>
            <script src="plugins/datatables/extensions/Responsive/bootstrap/3/dataTables.bootstrap.js" type="text/javascript"></script>