<!DOCTYPE html>
<html >
<head>
	<?php 
	$this->load->view('site/head');
	?>

</head>

<body>

	<div id="header">
		<?php $this->load->view('site/header'); ?>
	</div>

	

	<div class="col-sm-9 padding-right " style="margin-left: 15%">
		<div class="product-details"><!--product-details-->
			<div class="col-sm-5">
				<div class="view-product" style="">
					<img src="<?php echo base_url('upload/product/'.$product->image_link)?>" alt="" />
					<h3>ZOOM</h3>
				</div>
				<div id="similar-product" class="carousel slide" data-ride="carousel">

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<?php if(is_array($image_list)):?>
								<?php foreach ($image_list as $img):?>

									
									<a href=""><img src="<?php echo base_url('upload/product/'.$img)?>" alt=""></a>

								<?php endforeach;?>
							<?php endif;?>
						</div>


					</div>

					<!-- Controls -->
					<a class="left item-control" href="#similar-product" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="right item-control" href="#similar-product" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>

			</div>
			<div class="col-sm-7">
				<div class="product-information"><!--/product-information-->

					<h2>Anne Klein Sleeveless Colorblock Scuba</h2>
					<p>Web ID: 1089772</p>

					<span>

						<label>Quantity:</label>
						<input type="text" value="3" />
						<button type="button" class="btn btn-fefault cart">
							<i class="fa fa-shopping-cart"></i>
							Add to cart
						</button>
					</span>
					<p><b>Availability:</b> In Stock</p>
					<p><b>Condition:</b> New</p>
					<p><b>Brand:</b> E-SHOPPER</p>
					<a href=""><img src="<?php echo public_url('user')?>/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
				</div><!--/product-information-->
			</div>
		</div><!--/product-details-->

		<div class="category-tab shop-details-tab"><!--category-tab-->
			<div class="col-sm-12">
				<ul class="nav nav-tabs">
					<li><a href="#details" data-toggle="tab">Details</a></li>

				</ul>
			</div>

		</div><!--/category-tab-->



	</div>


	
</body>
<script src="<?php echo public_url('user')?>/js/jquery.js"></script>
<script src="<?php echo public_url('user') ?>/js/bootstrap.min.js"></script>
<script src="<?php echo public_url('user') ?>/js/jquery.scrollUp.min.js"></script>
<script src="<?php echo public_url('user') ?>/js/price-range.js"></script>
<script src="<?php echo public_url('user') ?>/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo public_url('user') ?>/js/main.js"></script>
</html>
