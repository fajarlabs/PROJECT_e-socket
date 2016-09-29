<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url(); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
      </head>
      <body>
        <div class="wrapper row-offcanvas">
            <aside class="right-side strech">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Project List
                        <small>List your project here</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">List Project</li>
                        <li class="active">Create Project</li>
                    </ol>
                </section>        
            </aside>
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-sm btn-primary pull-right" href="<?php base_url(); ?>project/createProject"><i class="fa fa-plus"></i> Add Project</a>
                </div>
            </div>
            <div style="width:100%;height:18px;"></div>
            <div class="row">
                <section class="col-lg-12 connectedSortable"> 
                    <!-- quick email widget -->
                    <div class="box box-info">
                        <div class="box-header">
                            <i class="fa fa-list"></i>
                            <h3 class="box-title"><?php echo $form_title; ?></h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button class="btn btn-danger btn-sm pull-right" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                            </div><!-- /. tools -->
                        </div>
                        <div class="box-body">
                            <table class="table table-striped dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Name</th>
                                    <th>Field</th>
                                    <th>Create Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $no = 1;
                                foreach($list_data as $key => $val) : ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $val->project_name; ?></td>
                                    <td><?php echo $val->field; ?></td>
                                    <td><?php echo $val->create_date; ?></td>
                                    <td>
                                        <div class="btn-group">
                                        <a href="<?php echo base_url(); ?>project/viewApi/<?php echo $val->project_id; ?>" class="btn btn-warning btn-sm"><i class="fa fa-rocket"></i> View API</a>
                                        <a href="<?php echo base_url(); ?>project/editProject/<?php echo $val->project_id; ?>" class="btn btn-success btn-sm"><i class="fa fa-pencil"></i> edit</a>
                                        <a href="<?php echo base_url(); ?>project/confirmProject/<?php echo $val->project_id; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" ></i> delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <?php 
                                $no++;
                                endforeach; 
                                ?>
                            </tbody></table>

                        </div>
                        <div class="box-footer clearfix">

                        </div>
                    </div>
                </section><!-- /.Left col -->
            </div>
        </div><!-- ./wrapper -->
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- jQuery UI 1.10.3 -->
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- Morris.js charts -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/morris/morris.min.js" type="text/javascript"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- jvectormap -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
        <!-- fullCalendar -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/jqueryKnob/jquery.knob.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
        <!-- iCheck -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>

        <!-- DATA TABES SCRIPT -->
        <script src="<?php echo base_url(); ?>assets/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="<?php echo base_url(); ?>assets/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>

        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>

        <!-- page script -->
        <script type="text/javascript">
            $(function() {
                $(".dataTable").dataTable();
                // load class after dataTable
                $("select,input").addClass("form-control");
            });
        </script>
    </body>
    </html>