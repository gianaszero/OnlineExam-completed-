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
				<h1>Sign In on Online Exam</h1>
			</div>
			<div class= "row">
				<div class= "span6 offset3">
					<div class= "widget-body">
						<div style ="text-align:center;">
							<form class="form-horizontal form-signin-signup" action= "loginAuthenticator.php" method = "post">
									<input type = 'text' name = 'email' id = 'email' placeholder="Email">
									<input type = 'password' name = 'password' id = 'password' placeholder="Password">
									<div>
										<input type="submit" value="Login" class="btn btn-primary btn-large">
									</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>			
</body>
<script type="text/javascript" src = "js/jquery.1.10.2.js"></script>
</html>