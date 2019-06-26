<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Movie Ticket | Admin Panel</title>
 <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets')?>/images/final_movie.jpg">
	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets');?>/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets');?>/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets');?>/css/core.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets');?>/css/components.css" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('assets');?>/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="<?php echo base_url('assets');?>/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets');?>/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets');?>/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets');?>/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="<?php echo base_url('assets');?>/js/plugins/forms/validation/validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets');?>/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url('assets');?>/js/core/app.js"></script>
	<script type="text/javascript" src="<?php echo base_url('assets');?>/js/pages/login_validation.js"></script>
	<!-- /theme JS files -->
<style type="text/css">
	.cover
	{
		background-color: #28343a;
	}
</style>
</head>

<body class="login-container cover">

	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content pb-20">

					<!-- Form with validation -->
					 <form action="<?php echo base_url('admin/login/process');?>" id="loginForm" method="post"  class="form-validate">
						<div class="panel panel-body login-form">
							<div class="text-center">
								<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
								<h5 class="content-group">Login to your account </h5>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								 <input type="email" placeholder="example@gmail.com" title="Please enter your email" autocomplete="off" value="<?php if (get_cookie('email')) { echo get_cookie('email'); } ?>" name="email" id="email" class="form-control" >
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								 <input type="password" title="Please enter your password" placeholder="******" required=""value="<?php if (get_cookie('password')) { echo get_cookie('password'); } ?>" name="password" id="password" class="form-control">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group login-options">
								<div class="row">
									<div class="col-sm-6">
										<label class="checkbox-inline">
											<input type="checkbox" name="remember_me" id="remember_me" value="Remember me" <?php if (get_cookie('email')) { ?> checked="checked" <?php } ?> class="styled"> Remember me </label>
											
									
									</div>

									<div class="col-sm-6 text-right">
										<a href="login_password_recover.html">Forgot password?</a>
									</div>
								</div>
							</div>
  
                        
							<div class="form-group">
								<input type="submit" name="login" value="Login" class="btn bg-blue btn-block">
							</div>

							<!-- <div class="content-divider text-muted form-group"><span>or sign in with</span></div>
							<ul class="list-inline form-group list-inline-condensed text-center">
								<li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
								<li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
								<li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
								<li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
							</ul>
 -->
							
					</form>
					<!-- /form with validation -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

</body>
</html>
