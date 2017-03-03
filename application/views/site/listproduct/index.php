
<html>
<head>
	<?php 
	$this->load->view('site/head');
	?>

</head>

<body>
	<div id="header">
		<?php $this->load->view('site/header'); ?>
	</div>
	<<div class="well-searchbox">
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<label class="col-md-4 control-label">Keyword</label>
			<div class="col-md-8">
				<input type="text" class="form-control" placeholder="Keyword">
			</div>
		</div>





		<div class="form-group">
			<label class="col-md-4 control-label">Category</label>
			<div class="col-md-8">
				<select class="form-control" placeholder="Category">
					<option value="">All</option>
					<option value="">Category 1</option>
					<option value="">Category 2</option>
				</select>
			</div>
		</div>
		<div class="col-sm-offset-4 col-sm-5">
			<button type="submit" class="btn btn-success">Search</button>
		</div>
	</form>
</div>
<section id="cart_items">
	<div class="container">	

		<div class="breadcrumbs">
			<ol class="breadcrumb">

			</ol>
		</div>

		
		<div class="table-responsive cart_info">
			<table class="table table-condensed">




				<thead>
					<tr class="cart_menu">
						<td class="image">Hinh Anh</td>
						<td class="description">Description</td>
						
						
						
					</tr>
				</thead>
				<tbody>
					<?php foreach ($list as $row):?>
						<tr>
							<td class="cart_product">
								<a href=""><img  height="60" src="<?php echo base_url('upload/product/'.$row->image_link)?>" alt=""></a>
							</td>
							<td class="cart_description">
								<b> <a href=""> <?php echo $row->name?></b>
							</td>
						</tr>


					<?php endforeach;?>

				</tbody>


			</table>
			<div class="pagination">

				<li><?php echo $this->pagination->create_links()?></li>


			</div>
		</div>

	</div>	
	


</section>

</body>
<footer id="footer">
	<?php $this->load->view('site/footer') ?>

</footer>

<script src="<?php echo public_url('user')?>/js/jquery.js"></script>
<script src="<?php echo public_url('user') ?>/js/bootstrap.min.js"></script>
<script src="<?php echo public_url('user') ?>/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo public_url('user') ?>/js/price-range.js"></script>
<script src="<?php echo public_url('user') ?>/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo public_url('user') ?>/js/main.js"></script>
</html>