<?php require "login/loginheader.php" ?>

<!DOCTYPE HTML>
<html>
<head>
<title>EAI Society | Membership</title>
<link rel="shortcut icon" type="image/png" href="login/images/EAI.png"/>
<!-- Bootstrap -->
<link href="login/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="login/css/custom.css" rel='stylesheet' type='text/css' />
<link href="login/css/login.css" rel='stylesheet' type='text/css' />
<link href="login/css/bootstrap.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="login/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- start plugins -->
<script type="text/javascript" src="login/js/jquery.min.js"></script>
<script type="text/javascript" src="login/js/bootstrap.js"></script>
<script type="text/javascript" src="login/js/bootstrap.min.js"></script>

   	<link rel="stylesheet" href="login/fonts/css/font-awesome.min.css">

</head>
<body>
<div class="header_bg1">
<div class="container">

	<div class="row header">
	<div style="float:right;"><a href="login/logout.php">Logout</a></div>
	<div class="logo navbar-left">
	<h1 id="brand"><a href="index.html"><img class="logoimage" src="login/images/EAI.png" />	EAI SOCIETY </a><br><h5 style="opacity:0.6">Exploration and Analysis of Information</h5></h1>
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
		        <li><a href="index.php">Home</a></li>
		        <li><a href="events.php">Events</a></li>
		        <li  class="active"><a href="membership.php">Membership</a></li>
		        <li><a href="members.php">Members</a></li>
				<!-- <li><a href="blog.html">Blog</a></li> -->
		        <li><a href="contact.php">Contact</a></li>
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
			    <div class="col-md-4 company_ad">
				    <h2>Contact:</h2>
      				<address>
						 <!-- <p>500 Lorem Ipsum Dolor Sit,</p>
						 <p>22-56-2-9 Sit Amet, Lorem,</p>
						 <p>USA</p> -->
						 <p>Phone:+91 95714 49301</p>
						 <p>Phone:+91 96491 21932</p>
						 <p>Phone:+91 96027 15882</p>
						<p>Email: <a href="mailto:info@eaisociety.com">info@eaisociety.com</a></p>
				   		<!-- <p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p> -->
				   	</address>
				</div>
				<div class="col-md-8">
				  <div class="contact-form">
				  	<h2>Membership Registration</h2>
					    <form method="post" action="thankyou.php">
					    	<div>
								<span>Type of Membership</span>
								<div>
								<span>&nbsp;&nbsp;Student<input type="radio" name="type" style="float:left;" value="student" checked></span>
							
								<span> &nbsp;&nbsp;Professional  <input type="radio" name="type" style="float:left;" value="professional"></span> <br>
							</div>
						    	<span>Personal Information</span>
								<span><input type="text" name="f_name" class="form-control" placeholder="First Name" required></span>
								<span><input name="m_name" type="text" class="form-control" placeholder="Middle Name"></span>
								<span><input name="l_name" type="text" class="form-control" placeholder="Last Name" required></span>
								
								 &nbsp Date of Birth
								<span><input name="dob" type="date" class="form-control" placeholder="Date of Birth" required></span>
								&nbsp Gender
								<span><select name="gender" class="form-control" required>
								<option  value="Male">Male</option>
								<option value="Female">Female</option>
								<option value="Prefer not to submit">Prefer not to submit</option>	
								

							</select></span>
							<span><input name="job" type="text" class="form-control" placeholder="Job Title" required></span>
							<span><input name="aff" type="text" class="form-control" placeholder="Affiliation" required></span>




						    </div>
						    <div>
						    	<span>Address</span>
								<span><textarea class="form-control" name="street" placeholder="Street Address" required></textarea></span>
								<span><input type="text" class="form-control" name="city" placeholder="City" required></span>
								<span><input type="text" class="form-control" name="state" placeholder="State/Province" required></span>
								<span><input type="text" class="form-control" name="postal" placeholder="Postal Code" required></span>
								<span><input type="text" class="form-control" name="country" placeholder="Country" required></span>
								
							</div>
							<div>
									<span>Primary Interest </span>
									<span><select name="interest" class="form-control" required>
										<option  value="Computer Applications">Computer Applications</option>
										<option value="Computer Systems Organization">Computer Systems Organization</option>
										<option value="Computing Methodologies">Computing Methodologies</option>	
										<option value="Computing Milieux">Computing Milieux</option>	
										<option value="Data">Data</option>	
										<option value="Hardware">Hardware</option>
										<option value="Information Systems">Information Systems</option>	
										<option value="Mathematics of Computing">Mathematics of Computing</option>
										<option value="Software">Software</option>
										<option value="Theory of Computation">Theory of Computation</option>
										
		
									</select></span>
										
								</div>
								<div>
									
									<span>
										<input type="text" class="form-control" name="other" placeholder="Precise Interest" required>
									</span>
										
								</div>
							
						    <div>
						    	<span>Contact Information</span>
								<span><input type="tel" name="phone" class="form-control" placeholder="Phone Number" required></span>
								<span><input type="text" name="fax" class="form-control" placeholder="Fax"></span>
								<span><input type="email" name="email" class="form-control" placeholder="Email Id" required></span>
						    </div>
						   <div>
						   		<label class="fa-btn btn-1 btn-1e"><input type="submit" value="submit"></label>
						  </div>
						  <div id="message"></div>
					    </form>
				    </div>
  			</div>			
  			<div class="clearfix"></div>		
	</div> 
</div>
</div>
<div class="footer_bg"><!-- start footer -->
	<div class="container">
		<div class="row  footer">
		<div style="float:right;">
		Visitors<br>
	<img src="http://hitwebcounter.com/counter/counter.php?page=6805314&style=0008&nbdigits=7&type=page&initCount=0" border="0" >
	
	
</div>
		</div>
	</div>
</div>
</body>
</html>