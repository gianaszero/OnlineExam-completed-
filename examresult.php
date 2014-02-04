<?php 
require_once('ExaminationDAO.php');
session_start();
$F_name = $_SESSION['fname'];
$L_name = $_SESSION['lname'];
$answers = $_SESSION['answers'];
$result = ExaminationDAO::checkAnswers($answers);

if(isset($_SESSION['email']) == ""){
	header('Location:loginpage.php');
}else{
	echo "";
}
 ?>
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
				<h1>Exam Result</h1>
			</div>
			<div class= "row">
				<div class= "span6 offset3">
					<h3 class="widget-header"><?= $F_name ?>&nbsp;<?= $L_name ?></h3>
					<div class= "widget-body">
						<div style ="text-align:center;">
							<form class="form-horizontal form-signin-signup " method = "post">
									<center>
										<div>
											Score:<br><label align="center" ><?= $result ?></label>
										</div>
										<div>
											Result:<br>
											<label>
												<?php 
													if($result >=7 && $result <= 9){
														echo "Congratulation, You Passed";
													}elseif($result == 10){
														echo "You are a master";
													}else{
														echo "You failed";
													}
												 ?>
											</label>
										</div>
									</center>
									<div>
										<a href="logout.php" type="submit" class="btn btn-primary btn-large">Logout</a>
									</div>
							</form>
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
<script type="text/javascript" src= "js/resultpageValidation.js"></script>
</html>