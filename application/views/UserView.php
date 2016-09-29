<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
</head>
<?php standard_css(); ?>
<style type="text/css">
	html,body {
		height:100% !important;
	}
</style>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
<link href="<?php echo base_url(); ?>assets/plugins/morris-chart/css/morris.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/graph.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/detail.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/legend.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/extensions.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/rickshaw.min.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/rickshaw-chart/css/lines.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen"/><link href="assets/plugins/icheck/skins/minimal/white.css" rel="stylesheet" type="text/css" media="screen"/>
<body class=" ">
	<!-- START TOPBAR -->
	<div class='page-topbar '>
		<div class='logo-area'>

		</div>
		<div class='quick-area'>
			<div class='pull-left'>
				<ul class="info-menu left-links list-inline list-unstyled">
					<li class="sidebar-toggle-wrap">
						<a href="#" data-toggle="sidebar" class="sidebar_toggle">
							<i class="fa fa-bars"></i>
						</a>
					</li>
				</ul>
			</div>		
			<div class='pull-right'>
				<ul class="info-menu right-links list-inline list-unstyled">
					<li class="profile">
						<a href="#" data-toggle="dropdown" class="toggle">
							<img src="<?php echo base_url(); ?>data/profile/profile.png" alt="user-image" class="img-circle img-inline">
							<span>Jason Bourne <i class="fa fa-angle-down"></i></span>
						</a>
						<ul class="dropdown-menu profile animated fadeIn">
							<li class="last">
								<a href="ui-login.html">
									<i class="fa fa-lock"></i>
									Logout
								</a>
							</li>
						</ul>
					</li>
				</ul>			
			</div>		
		</div>

	</div>
	<!-- END TOPBAR -->

	<!-- START CONTAINER -->
	<div class="page-container row-fluid">

		<!-- SIDEBAR - START -->
		<div class="page-sidebar ">
			<?php nav_menu(); ?>
		</div>
		<!--  SIDEBAR - END -->

		<!-- START CONTENT -->
		<section id="main-content" style="height:auto;margin-bottom:0px;" class=" ">
			<section class="wrapper" style='margin-bottom:0px;margin-top:45px;display:inline-block;height:auto;width:100%;padding:15px 0 0 15px;'>
				<div class="row">
					<div class="col-lg-12">
						<h4>User</h4>
						<button class="btn btn-primary btn-sm pull-right"><i class="fa fa-plus"></i> Tambah</button>
						<div style="width:100%;height:6px; clear:both; "></div>
						<table class="table">
							<tr>
								<th>No</th>
								<th>Nama User</th>
								<th>Level</th>
								<th>Aksi</th>
							</tr>
							<?php $i = 1; 
							foreach($query->result() as $row) : 	
							?>
							<tr>
								<td><?php echo $i; ?></td>
								<td><?php echo $row->ru_name; ?></td>
								<td><?php echo $row->ru_level; ?></td>
								<td>
									<a href="<?php echo base_url(); ?>user/edit/<?php echo $row->ru_id; ?>" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Edit</a>
									<a href="<?php echo base_url(); ?>user/delete/<?php echo $row->ru_id; ?>" class="confirm btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> Hapus</a>
								</td>
							</tr>
							<?php $i++; 
							endforeach; 
							?>
						</table>
					</div>
				</div>
			</section>
		</section> 
		<!-- END CONTENT -->  

	</div>
	<!-- END CONTAINER -->
	<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

	<!-- CORE JS FRAMEWORK - START --> 
	<?php standard_js(); ?>
	<script type="text/javascript">
		$(".confirm").on("click",function(e){
			var c = confirm("Apakah anda yakin ?");
			if(c !== true) e.preventDefault() ;
		});
	</script>

	<!-- CORE JS FRAMEWORK - END --> 
</body>
</html>