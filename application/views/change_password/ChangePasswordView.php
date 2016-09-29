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
            <!-- Right side column. Contains the navbar and content of the page -->   
            <aside class="right-side strech">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Change Password
                        <small>Change your password here</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#">Setting</a></li>
                        <li class="active">Change Password</li>
                    </ol>
                </section>        
            </aside>
            <div class="row">
            <section class="col-lg-6 connectedSortable"> 
                <!-- quick email widget -->
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-key"></i>
                        <h3 class="box-title"><?php echo $form_title; ?></h3>
                        <!-- tools box -->
                        <div class="pull-right box-tools">
                            <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                        </div><!-- /. tools -->
                    </div>
                    <div class="box-body">
                        <form id="changePasswordForm" action="<?php echo $form_path; ?>" method="post">
                            <?php if(!empty($error_message)) : ?>
                            <div class="form-group">
                                <label><?php echo $error_message; ?></label>
                            </div>
                            <?php endif; ?>
                            <div class="form-group">
                                <input type="hidden" name="<?php echo $csrf_token_name; ?>" value="<?php echo $csrf_hash; ?>" />
                                <input id="oldPassword" type="text" class="form-control" value="" name="oldPassword" placeholder="Old password"/>
                            </div>
                            <div class="form-group">
                                <input id="newPassword" type="text" class="form-control" name="newPassword" placeholder="New Password" value="" />
                            </div>
                            <div class="form-group">
                                <input id="confirmPassword" type="text" class="form-control" name="confirmPassword" placeholder="Confirm Password" value="" />
                            </div>
                        </form>
                    </div>
                    <div class="box-footer clearfix">
                        <button class="pull-right btn btn-default" id="btnSubmit">Submit <i class="fa fa-arrow-circle-right"></i></button>
                    </div>
                </div>
            </section><!-- /.Left col -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-sm btn-primary pull-left" href="<?php echo base_url(); ?>project"><i class="fa fa-arrow-left"></i> Back</a>
                </div>
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
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/js/AdminLTE/app.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                var changePasswordForm = $("#changePasswordForm");
                var oldPassword = $("#oldPassword");
                var newPassword = $("#newPassword");
                var confirmPassword = $("#confirmPassword");
                var btnSubmit = $("#btnSubmit");

                btnSubmit.on("click",function() {

                    if(oldPassword.val() == "") {
                        alert("Old password cannot be empty !");
                        oldPassword.focus();
                        return;
                    }

                    if(newPassword.val() == "") {
                        alert("New password cannot be empty !");
                        newPassword.focus();
                        return;  
                    }

                    if(confirmPassword.val() == "") {
                        alert("Confirm password cannot be empty !");
                        confirmPassword.focus();
                        return;  
                    }

                    if(newPassword.val() != confirmPassword.val()) {
                        alert("Confirm password not correct !")
                        confirmPassword.focus();
                        return;
                    } else {
                        changePasswordForm.submit();
                    }
                });
            });
        </script>
    </body>
    </html>