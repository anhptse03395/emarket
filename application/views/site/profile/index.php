<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Profile</title>

    <!-- Bootstrap -->
    <link href="<?php echo public_url('user')?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo public_url('user')?>/css/profile.css" rel="stylesheet">


  </head>
  <body>
<?php $this->load->view('site/head') ?>
<?php $this->load->view('site/header') ?>

<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<!-- <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt=""> -->
                   
                    
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<span class="hidden-xs">Hareesh Vudari</span>
					</div>
					<div class="profile-usertitle-job">
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							<span class="hidden-xs">Personal<span> </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							<span class="hidden-xs">Delivery Address<span> </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-ok"></i>
							<span class="hidden-xs">Orders <span></a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-flag"></i>
							<span class="hidden-xs">My Wishlist <span></a>
						</li>
                            <li>
							<a href="#">
							<i class="glyphicon glyphicon-shopping-cart"></i>
							<span class="hidden-xs">Shopping Bag<span> </a>
                            
						</li>
                        
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9 order-content">
          
		<div class="form_main col-md-4 col-sm-5 col-xs-7">
                <h4 class="heading"><strong>Personal </strong> Contact <span></span></h4>
                <div class="form">
                <form action="" method="" id="contactFrm" name="contactFrm">
                    <input type="text" required="" placeholder="Name" value="" name="name" class="txt">
                    <input type="text" required="" placeholder="Email" value="" name="email" class="txt">
                    <input type="password" required="" placeholder="Change Pwd" value="" name="password" class="txt"><br>
                    <button type="button" class="btn btn-default">Update</button>
                </form>
            </div>
            </div>
            
	</div>
		
		
	</div>
</div>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo public_url('user')?>/js/bootstrap.min.js"></script>
  </body>
</html>