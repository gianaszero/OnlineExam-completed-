<?php 
require_once('ExaminationDAO.php');
session_start();

$F_name = $_SESSION['fname'];
$L_name = $_SESSION['lname'];

define('QUESTION_NUMBERS',10);
$quest_num = (isset($_POST['quest_num']))
	? $_POST['quest_num']
	+1:1;

$answers = (isset($_POST['answers']))
	?$_POST['answers']: '';

$answer= (isset($_POST['opt'])) 
	? $_POST['opt'] : '';

$answers .= $answer;

if($quest_num > QUESTION_NUMBERS){
	$_SESSION['answers'] = $answers;
	header('Location:examresult.php');
}
$choices = ExaminationDAO::getQuestions($quest_num);
$question= $choices['question'];
if(isset($_SESSION['email']) == ""){
	header('Location:loginpage.php');
}else{
	echo"";
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
				<a href="logout.php" class="pull-right"><h4>Logout</h4></a><br>
				<h3 class= "pull-right"><?= $F_name ?>&nbsp;<?= $L_name ?></h3>
				<h1>Exam Proper</h1>
			</div>
			<div class= "row">
				<div class= "span6 offset3">
					<h3 class="widget-header" name="quest_num">Question No. <?= $quest_num ?></h3>

					<div class= "widget-body">
						<div style ="text-align:center;">
							<form class="form-horizontal form-signin-signup" action = "<?= $_SERVER['PHP_SELF'] ?>" method = "POST">
								<input type="hidden" name = "quest_num" value= "<?=$quest_num?>" />
								<input type = "hidden" name= "answers" value= "<?= $answers?>" />
								<h4 id = 'question'><?= $question ?></h4>
								<center><table>
									<tr>
										<td><input type = "radio" name = "opt" id = "opt" value = "a"/><?= $choices['choice_a'] ?></td>
									</tr>
									<tr>
										<td><input type = "radio" name = "opt" id = "opt1" value = "b"/><?= $choices['choice_b'] ?></td>
									</tr>
									<tr>
										<td><input type = "radio" name = "opt" id = "opt2" value = "c"/><?= $choices['choice_c'] ?></td>
									</tr>
									<tr>
										<td><input type = "radio" name = "opt" id = "opt3" value = "d"/><?= $choices['choice_d'] ?></td>
									</tr>
								</table></center>
								<div>
									<button class="btn btn-primary btn-large hide" id ="next">Next</button>
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
<script type="text/javascript" src="js/jquery.1.10.2.js"></script>	
<script type="text/javascript" src="js/examValidation.js"></script>		
</body>
</html>