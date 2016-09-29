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
		    <div class="alert alert-info alert-dismissable">
		        <i class="fa fa-info"></i>
		        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		        Saved Successfully ! <br /><small>Redirect in <span id="timeRemind"></span> seconds</small>
		    </div>
		</div>
	</div>
</div>
<script type="text/javascript">
	var delay = 3;
	var timeRemind = document.getElementById('timeRemind');
	var updateTime = function(time) {
		if(time < 1) window.location = "/change_password";
		timeRemind.innerHTML=time; // have a look at the logo
	};
	var reminder = function() {
		timeRemind.innerHTML= delay;
		setInterval(
			function() { 
				updateTime(--delay)
			},1000);
	};
	reminder();
</script>
</body>
</html>