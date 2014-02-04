<?php 
	include_once('ExaminationDAO.php');
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$c_pass= $_POST['c_password'];

	ExaminationDAO::createExaminee($fname, $lname, $email, $password);
?>