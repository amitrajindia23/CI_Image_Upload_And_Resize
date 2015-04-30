<!DOCTYPE html>
<html>
<head>
	<title>Image Gallery</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap-responsive.min.css';?>">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-1.11.2.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-migrate-1.2.1.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
</head>
<body>
	<div class="container">			
		<div class="row">
			<h1>Image Upload</h1>
			<a class="btn btn-success" href="<?php echo site_url('image');?>">Upload Image</a>
			<hr>		
			<div class="col-sm-12">
				<?php 
					foreach ($imageList as $key => $value) {
				?>
					<div class="col-sm-3">
						<img src="<?php echo base_url().$value['thumb'];?>">
					</div>		
				<?php
					}
				?>				
			</div>		
		</div>
	</div>
</body>
</html>