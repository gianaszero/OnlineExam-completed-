<html>
<head>
	<link type = "text/css" rel = "stylesheet" href = "css/bootstrap.css" >
  	<link type = "text/css" rel = "stylesheet" href = "style.css">
  	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="css/boot-business.css" rel="stylesheet">
	<title>Online Examination</title>
</head>
<body>
	<header>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
			</div>
		</div>
	</header>
	<div class ="content">
		<div class = "container">
			<div class ="page-header">
				<h1>Register For Online Examination</h1>
			</div>
			<div class= "row">
				<div class= "span6 offset3">
					<div class= "widget-body">
						<div style ="text-align:center;">
							<form class="form-horizontal form-signin-signup" action = "registrationAuthenticator.php" method = "POST" >
									<input type = 'text' name = 'fname' id = "fname" style ="width:70%; height:30px;"placeholder="First Name"><span id = "c_fname"></span>
									<input type = 'text' name = 'lname' id ="lname" style ="width:70%; height:30px;" placeholder="Last Name"><span id = "c_lname"></span>
									<input type = 'email' name = 'email' id= "email"style ="width:70%; height:30px;" placeholder="Email"><span id = "c_email"></span>
									<input type = 'password'name = 'password' id= "password" style ="width:70%; height:30px;" placeholder="Password"><span id = "c_pass"></span>
									<input type = 'password' name = 'c_password' id = "c_password" style ="width:70%; height:30px;" placeholder="Confirm Password"><span id = "c_confirm"></span>
									<div>
										<input type = 'submit' id = "click" value = 'Register' name = 'save' class="btn btn-primary btn-large">
									</div>
							</form>
							<h4>
								<i class="icon-question-sign"></i>
								Already have an Account?
							</h4>
							<a href="loginpage.php" class="btn btn-large bottom-space">Login</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
	</footer>
		
</body>
<script type="text/javascript" src = "js/jquery.1.10.2.js"></script>
<script type="text/javascript" src = "js/registerValidation.js"></script>
</html>
