<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>AdminLTE | General UI</title>
	<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
	<!-- bootstrap 3.0.2 -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- font Awesome -->
	<link href="<?php echo base_url(); ?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<!-- Ionicons -->
	<link href="<?php echo base_url(); ?>assets/css/ionicons.min.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
	<link href="<?php echo base_url(); ?>assets/css/AdminLTE.css" rel="stylesheet" type="text/css" />

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->
</head>
<body class="skin-blue">
<div class="container">
	<br />
	<div class="row">
		<div class="col-lg-12">
		    <div class="alert alert-danger alert-dismissable">
		        <i class="fa fa-info"></i>
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        Do you really want to delete this data ?<br /><br />
		        <div class="btn-group">
		        <a class="btn btn-sm btn-primary pull-left" href="<?php echo base_url(); ?>project"><i class="fa fa-arrow-left"></i> Back</a>
		        <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>project/deleteProject/<?php echo $project_id; ?>" ><i class="fa fa-trash-o"></i> Delete</a>
		        </div>

		    </div>
		</div>
	</div>
</div>
</body>
</html>