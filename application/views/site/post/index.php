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

	<section id="form_post"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						
						<h2>Dang thong tin san pham</h2>
                        <?php  $message = $this->session->flashdata('message');
                        ?>
                        <?php if(isset($message) && $message):?>
                            <div class="nNote nInformation hideit">
                                <p><strong> </strong><?php echo $message?></p>
                            </div>
                        <?php endif;?>

						<form action="<?php echo user_url('post') ?>" method="post">
							<input placeholder="Tên" type="text" name="p_name" value="<?php echo set_value('p_name')?>">
                            <div class="clear error" name="name_error"><?php echo form_error('p_name')?></div>
							<input placeholder="Email " type="text" name="p_email"value="<?php echo set_value('p_email')?>">
                            <div class="clear error" name="name_error"><?php echo form_error('p_email')?></div>
							<input placeholder="PhoneNuber" type="text" name="p_phone" value="<?php echo set_value('p_phone')?>">
                            <div class="clear error" name="name_error"><?php echo form_error('p_phone')?></div>
							<input placeholder="Address" type="text" name="p_address" value="<?php echo set_value('p_address')?>">
                            <div class="clear error" name="name_error"><?php echo form_error('p_address')?></div>
							<input placeholder="Title" type="text" name="p_title" value="<?php echo set_value('p_title')?>">
                            <div class="clear error" name="name_error"><?php echo form_error('p_title')?></div>
							<input placeholder="Content" type="text" name="p_content" value="<?php echo set_value('p_content')?>">
                            <div class="clear error" name="name_error"><?php echo form_error('p_content')?></div>
							<button type="submit" class="btn btn-default">Post</button>
						</form>
					</div>
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