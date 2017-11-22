<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:../about.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>EAI Society</title>
<link rel="shortcut icon" type="image/png" href="images/EAI.png"/>
<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/custom.css" rel='stylesheet' type='text/css' />
<link href="css/main.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

   	<link rel="stylesheet" href="fonts/css/font-awesome.min.css">

</head>
<body>
<div class="header_bg1">
<div class="container">
	<div class="row header">
		<div class="logo navbar-left">
			<h1 ><a href="index.html"><img class="logoimage" src="images/EAI.png" />	EAI SOCIETY </a><br><h5 style="opacity:0.6">Exploration and Analysis of Information</h5></h1>
		</div>
		<!-- <div class="h_search navbar-right">
			<form>
				<input type="text" class="text" value="Enter text here" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter text here';}">
				<input type="submit" value="search">
			</form>
		</div> -->
		<div class="clearfix"></div>
	</div>
	<div class="row h_menu">
		<nav class="navbar navbar-default navbar-left" role="navigation">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="../index.php">Home</a></li>
		        <li><a href="../technology.php">Events</a></li>
		        <li><a href="../about.php">Membership</a></li>
		        <!-- <li><a href="blog.html">Blog</a></li> -->
				<li><a href="../mem.php">Members</a></li>
		        <li><a href="../contact.php">Contact</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		    <!-- start soc_icons -->
		</nav>
		<div class="soc_icons navbar-right">
			<ul class="list-unstyled text-center">
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-youtube"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
			</ul>	
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</div>
<div class="main_btm"><!-- start main_btm -->
	<div class="container">
		<div class="main row">
				<form class="form-signin" name="form1" method="post" action="checklogin.php">
						<h4 class="form-signin-heading">Please sign in</h4>
						<input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
						<input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
						<!-- The checkbox remember me is not implemented yet...
						<label class="checkbox">
						  <input type="checkbox" value="remember-me"> Remember me
						</label>
						-->
						<button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
						<a href="signup.php" name="Sign Up" id="signup" class="btn btn-lg btn-primary btn-block" type="submit">Create new account</a>
				
						<div id="message"></div>
				</form>
			
</div>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
			<div class="copy text-center">
			</div>
		</div>
	</div>
</div>
<style></style>
	<!-- <script type="text/javascript">$('.message a').click(function(){
		$('form').animate({height: "toggle", opacity: "toggle"}, "slow");
	 });</script> -->
</body>
</html>