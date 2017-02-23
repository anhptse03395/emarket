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
						
						<div style="color: red;text-align: center;font-weight:bold"> <?php echo form_error('login') ;?> </div>
						
						
						<h2>Đăng nhập bằng tài khoản</h2>
						<form action="<?php echo user_url('login') ?>" method="post">
							<input placeholder="Email Address" type="text" name="email">
							<input placeholder="Password" type="password" name="password">
							<span>
								<input class="checkbox" type="checkbox"> 
								Keep me signed in
							</span>
							<button type="submit"  class="btn btn-default">Login</button>

						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng kí tài khoản mơi!</h2>
						<?php  $message = $this->session->flashdata('message');
						?>

						<?php if(isset($message) && $message):?>
							<div class="nNote nInformation hideit">
								<p><strong> </strong><?php echo $message?></p>
							</div>
						<?php endif;?>


						<form action="<?php echo user_url('register') ?>" method="post">
							<input placeholder="Name" type="text" name="r_name" value="<?php echo set_value('r_name')?>">
							<div class="clear error" name="name_error"><?php echo form_error('r_name')?></div>
							<input placeholder="Email Address" type="email" name="r_email" value="<?php echo set_value('r_email')?>" >
							<div class="clear error" name="name_error"><?php echo form_error('r_email')?></div>
							<input placeholder="Phone" type="text" name="r_phone" value="<?php echo set_value('r_phone')?>">
							<div class="clear error" name="name_error"><?php echo form_error('r_phone')?></div>
							<input placeholder="Address" type="text" name="r_address" value="<?php echo set_value('r_address')?>">
							<div class="clear error" name="name_error"><?php echo form_error('r_address')?></div>
							<input placeholder="Password" type="password" name="r_password">
							<div class="clear error" name="name_error"><?php echo form_error('r_password')?></div>
							<input placeholder="Repassword" type="password" name="r_repassword">
							<div class="clear error" name="name_error"><?php echo form_error('r_repassword')?></div>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section>
	



	<link href="<?php echo public_url('user')?>/css/main.css" rel="stylesheet">
	<script src="<?php echo public_url('user')?>/js/jquery.js"></script>
	<script src="<?php echo public_url('user') ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo public_url('user') ?>/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo public_url('user') ?>/js/price-range.js"></script>
	<script src="<?php echo public_url('user') ?>/js/jquery.prettyPhoto.js"></script>
	<script src="<?php echo public_url('user') ?>/js/main.js"></script>

</body>
</html>