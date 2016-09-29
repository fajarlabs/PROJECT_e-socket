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
                        View API
                        <small>Information detail</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">List Project</li>
                        <li class="active">View API</li>
                    </ol>
                </section>        
            </aside>
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
                            <?php 
                            if($project_data != null) : 
                                foreach($project_data as $key) : 
                                    $array_field = explode(",",$key->field);
                                    $field  = "?";
                                    $last   = "";
                                    $comma  = "";
                                    $comma2 = "";
                                    if($this->ci_tools->is_array($array_field)) {
                                        $total = count($array_field) - 1;
                                        $i = 0;
                                        foreach($array_field as $key2 => $val2) {
                                            if($total != $i) {
                                                $comma  = "&";
                                                $comma2 = "or";
                                            } else {
                                                $comma  = "";
                                                $comma2 = "";
                                            }
                                            $last .= htmlentities("{$val2} {$comma2} ");
                                            $field .= htmlentities("{$val2}={data}{$comma}");
                                            $i++;
                                        } 
                                    }
                                    ?>
                                    <div class="alert alert-success alert-dismissable">
                                        <i class="fa fa-check"></i>
                                        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                                        <b>Congratulations!</b> Your API ready to use. <br />
                                        <b>Your Token is : <?php echo $key->token; ?></b>
                                    </div>
                                    <h4>How to use :</h4>
                                    <table class="table">
                                        <tr>
                                            <td style="width:100px;background:#00c0ef;">Push data</td>
                                            <td style="width:10px;background:#00c0ef;">:</td>
                                            <td style="background: #f1f1f1;"><b style="color:#ff0000;"><?php echo base_url(); ?>api/push/<?php echo $key->token; ?>/<?php echo $field; ?></b> maybe custom or select one.</td>
                                        </tr>
                                        <tr>
                                            <td style="width:100px;background:#00c0ef;">Last data</td>
                                            <td style="width:10px;background:#00c0ef;">:</td>
                                            <td style="background: #f1f1f1;"><b style="color:#ff0000;"><?php echo base_url(); ?>api/last/<?php echo $key->token; ?>/<?php echo $last; ?></b> maybe custom or select one.</td>
                                        </tr>
                                    </table>
                            <?php 
                                endforeach;
                            endif; ?>
                        </div>
                        <div class="box-footer clearfix">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <a class="btn btn-sm btn-primary pull-left" href="<?php echo base_url(); ?>project"><i class="fa fa-arrow-left"></i> Back</a>
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
    </body>
    </html>