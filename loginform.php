<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location:../index.php");
}
?>
<!DOCTYPE>
<html>
<body>
<div style="float:right;">
		<a href="#" data-toggle="modal" id="log"data-target="#login-modal">Login</a>|
		<a href="#" data-toggle="modal" data-target="#sign-modal">Sign Up</a>
		
		<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				  <div class="modal-dialog">
						<div class="loginmodal-container">
							<h1>Login to Your Account</h1><br>
						 
							
							
							<form class="form-signin" name="form1" method="post" action="checklogin.php">
								<!-- <h2 class="form-signin-heading">Please sign in</h2> -->
								<input name="myusername" id="myusername" type="text" class="form-control" placeholder="Username" autofocus>
								<input name="mypassword" id="mypassword" type="password" class="form-control" placeholder="Password">
								<!-- The checkbox remember me is not implemented yet... -->
								<label class="checkbox">
								  <input type="checkbox" value="remember-me"> Remember me
								</label>
								
								<button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
							
						  <div class="login-help">
							  <br>
							<a href="#" class="form-control" data-toggle="modal" data-target="#sign-modal">Register</a> 
						  </div>
						</div>
					</div>
				  </div>
				  <div class="modal fade" id="sign-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
						<div class="modal-dialog">
							  <div class="loginmodal-container">
								  <h1>Create Your Account</h1><br>
								  <form class="form-signup" id="usersignup" name="usersignup" method="post" action="createuser.php">
									
									<input name="newuser" id="newuser" type="text" class="form-control" placeholder="Username" autofocus>
									<input name="email" id="email" type="text" class="form-control" placeholder="Email">
							<br>
									<input name="password1" id="password1" type="password" class="form-control" placeholder="Password">
									<input name="password2" id="password2" type="password" class="form-control" placeholder="Repeat Password">
							
									<button name="Submit" id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
							
									<div id="message"></div>
								  </form>
								  
								<div class="login-help">
								  
								</div>
							  </div>
						  </div>
						</div>
				</div>
</body>
</html>