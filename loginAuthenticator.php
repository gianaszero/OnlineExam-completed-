<?php 
	include_once('ExaminationDAO.php');
	session_start();
	$email = $_POST['email'];
	$password = $_POST['password'];
	$result = ExaminationDAO::getExaminee($email, $password);

	if((!empty($email) && !empty($password))&&($result['email'] == $email && $result['password'] == ($password))) {
		$_SESSION['fname'] = $result['fname'];
		$_SESSION['lname'] = $result['lname'];
		$_SESSION['email'] = $_POST['email'];
		echo "<script type = 'text/javascript'>alert('Successfully Login');  window.location.href='examInterface.php'</script>";
	}else{
		echo "<script type = 'text/javascript'>alert('Unsuccessfully Login');  window.location.href='loginpage.php'</script>";
	}
	
 ?>