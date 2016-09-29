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
                        Dashboard View
                        <small>Dashboard Information</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="<?php echo base_url(); ?>dashboard">Dashboard</a></li>
                    </ol>
                </section>        
            </aside>

            <div class="row">
                <div class="col-xs-4"></div>
                <div class="col-xs-4">
                <section class="col-lg-12 connectedSortable"> 
                    <br /><br /><br />
                    <b>Sorry, undergoing maintenance :(</b>
                </section>
                </div>
                <div class="col-xs-4"></div>
            </div>
        </div><!-- ./wrapper -->
    </body>
    </html>