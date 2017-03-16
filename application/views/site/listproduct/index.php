
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
	
	<section id="cart_items">
		<div class="container">	

			<div class="breadcrumbs">
				<ol class="breadcrumb">

				</ol>
			</div>


			<div class="table-responsive cart_info">
				<table class="table table-condensed">


					<div class="well-searchbox">
						<form class="form-horizontal" role="form" method="get" action="<?php echo user_url('listproduct')?>"  >
							<div class="form-group">
								<label class="col-md-4 control-label">Keyword</label>
								<div class="col-md-8">
									<input type="text" class="form-control" placeholder="Keyword" name="name" value="<?php $this->input->get('name') ?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Category</label>
								<div class="col-md-8">
								<select class="form-control" placeholder="Category" name="catalog">
								<option value=""></option>

										<?php foreach ($catalogs as $row):?>
											<?php if(count($row->subs) > 1):?>
												<optgroup label="<?php echo $row->name?>">
													<?php foreach ($row->subs as $sub):?>
														<option value="<?php echo $sub->id?>" <?php echo ($this->input->get('catalog') == $sub->id) ? 'selected' : ''?>> <?php echo $sub->name?> </option>
													<?php endforeach;?>
												</optgroup>
											<?php else:?>
												<option value="<?php echo $row->id?>" <?php echo ($this->input->get('catalog') == $row->id) ? 'selected' : ''?>><?php echo $row->name?></option>
											<?php endif;?>
										<?php endforeach;?>

									</select>
								</div>
							</div>
							<div class="col-sm-offset-4 col-sm-5">
								<button type="submit" style="float: left;">Search</button>
								
							</div>
						</form>
					</div>




					<thead>
						<tr class="cart_menu">
							<td class="image">Hinh Anh</td>
							<td class="description">Tên Sản Phẩm</td>
							<td class="description">Số Lượng</td>




						</tr>
					</thead>
					<tbody>
						<?php foreach ($list as $row):?>
							<tr>
								<td class="cart_product">
									<a href="<?php echo user_url('listproduct/product_detail/'.$row->id)?>"><img  height="60" src="<?php echo base_url('upload/product/'.$row->image_link)?>" alt=""></a>
									<p> <?php echo $row->user_name ?></p>	
								</td>

								<td class="cart_description">
									<a href="<?php echo user_url('listproduct/product_detail/'.$row->id)?>"> <?php echo $row->product_name?>
								</td>
								<td class="cart_description">
									<p> <?php echo $row->number?>Kg</p>
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