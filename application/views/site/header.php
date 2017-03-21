<!--header-->
<div class="header_top"><!--header_top-->
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="contactinfo">
					<ul class="nav nav-pills">
						<li><a href="#"><i class="fa fa-phone"></i> +8498283436</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i> fsaophaixoanu@gmail.com</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="social-icons pull-right">
					<ul class="nav navbar-nav">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!--/header_top-->

<div class="header-middle"><!--header-middle-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4">
				<div class="logo pull-left">
					<a href="index.html"><img src="<?php echo public_url('user')?>/images/home/e-logo.png" alt=""></a>
				</div>

			</div>
			<div class="col-sm-8">
				<div class="shop-menu pull-right">
					<ul class="nav navbar-nav">

						<?php $mes = $this->session->userdata('user_login');?>

						<?php if(isset($mes)) {?>
						<li style="display: block;" ><a href="<?php echo user_url('profile')?>"><i class="fa fa-user" ></i> Tài khoản</a></li>
						<?php }else{ ?>
						<li style="display: none;" ><a href=" "><i class="fa fa-user" ></i> Tài khoản</a></li>
						<?php } ?>	

						<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
						<li><a href="<?php echo user_url('post') ?>"><i class="glyphicon glyphicon-pencil"></i> Đăng tin</a></li>
						<li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
						<?php if(isset($mes)) { ?>
						<li><a href="<?php echo user_url('user/logout') ?>"><i class="glyphicon glyphicon-log-out"></i> Đăng xuất</a></li>
						<?php }else{ ?>
						<li><a href="<?php echo user_url('login') ?>"><i class="glyphicon glyphicon-log-in"></i> Đăng nhập</a></li>

						<?php } ?>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
</div><!--/header-middle-->

<div class="header-bottom"><!--header-bottom-->
	<div class="container">
		<div class="row">
			<div class="col-sm-9">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="mainmenu pull-left">
					<ul class="nav navbar-nav collapse navbar-collapse">
						<li><a href="index.html" class="active">Trang Chủ</a></li>
						<li class="dropdown"><a href="#">Tin Tức<i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="sub-menu">
								<li><a href="shop.html">Products</a></li>
								<li><a href="product-details.html">Product Details</a></li> 
								<li><a href="checkout.html">Checkout</a></li> 
								<li><a href="cart.html">Cart</a></li> 
								<li><a href="login.html">Login</a></li> 
							</ul>
						</li> 
						<li class="dropdown"><a href="#">Bảng Giá<i class="fa fa-angle-down"></i></a>
							<ul role="menu" class="sub-menu">
								<li><a href="blog.html">Blog List</a></li>
								<li><a href="blog-single.html">Blog Single</a></li>
							</ul>
						</li> 
						
						<li><a href="contact-us.html">Liên Hệ</a></li>
					</ul>
				</div>
			</div>

		</div>
	</div>
</div><!--/header-bottom-->
