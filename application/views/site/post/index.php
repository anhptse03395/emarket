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

						<form action="<?php echo user_url('post') ?>"  method="post" enctype="multipart/form-data" >
							 <?php foreach ($info as $row):?>
						
							<input  type="text" name="p_name" style="text-align: center; " value="<?php echo $row->name?>">
							
							<input  type="text" name="p_email" style="text-align: center; " value="<?php echo $row->email?>">
							
							<input  type="text" name="p_phone" style="text-align: center; " value="<?php echo $row->phone?>">

							<?php endforeach;?>
							
							

							<input placeholder="Title" type="text" name="p_title" value="<?php echo set_value('p_title')?>">
							<div class="clear error" name="name_error"><?php echo form_error('p_title')?></div>
							<input placeholder="Content" type="text" name="p_content" value="<?php echo set_value('p_content')?>">
							<div class="clear error" name="name_error"><?php echo form_error('p_content')?></div>

							<input placeholder="Address" type="text" name="p_address" value="<?php echo set_value('p_address')?>">
							<div class="clear error" name="name_error"><?php echo form_error('p_address')?></div>

							<div class="formRow">
							<label class="formLeft">Hình ảnh:<span class="req"></span></label>
								<div class="formRight">
									<div class="left">
										<input type="file" name="image" id="image" size="25">
									</div>
									<div class="clear error" name="image_error"></div>
								</div>
								<div class="clear"></div>
							</div>

							<div class="formRow">
								<label class="formLeft">Ảnh kèm theo:</label>
								<div class="formRight">
									<div class="left">
										<input type="file" multiple="" name="image_list[]" id="image_list" size="25" >
									</div>
									<div class="clear error" name="image_list_error"></div>
								</div>
								<div class="clear"></div>
							</div>	

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