<html >
<head>
	<?php 
	$this->load->view('site/head');
	?>

</head>

<body >
	<div id="header">
		<?php $this->load->view('site/header'); ?>
	</div>

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						
						<h2>Dang thong tin san pham</h2>
						<form action="" method="post">
							<input placeholder="Tên" type="text" name="p_name">
							<input placeholder="Email " type="text" name="p_email">
							<input placeholder="Password" type="text" name="p_password">
							<input placeholder="PhoneNuber" type="text" name="p_phonenumber">
							<input placeholder="Address" type="text" name="p_address">
							<input placeholder="Title" type="text" name="p_title">
							<input placeholder="Content" type="text" name="Content">
							<button type="submit" class="btn btn-default">Post</button>
						</form>
					</div><!--/login form-->
				</div>
				
				
			</div>
		</div>
	</section>
	




	<script src="<?php echo public_url('user')?>/js/jquery.js"></script>
	<script src="<?php echo public_url('user') ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo public_url('user') ?>/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo public_url('user') ?>/js/price-range.js"></script>
	<script src="<?php echo public_url('user') ?>/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo public_url('user') ?>/js/main.js"></script>

</body>
</html>