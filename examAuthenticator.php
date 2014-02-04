<?php 
	include_once('ExaminationDAO.php');
	$num = $_GET['num'];
	$ans = ((isset($_GET['ans']) ? $_GET['ans']: ''));
	$cor = (($question['answer'] == $ans ) ? 1:0);
	$fname = $_GET['fname'];
	$lname = $_GET['lname'];

	$question = ExaminationDAO::getQuestions($n
		um);
	$examinee = ExaminationDAO::getExaminee2()

	echo json_encode(
		array(
			'examinee'=>$examinee
			'question_num'=> $question['question_id'],
			'question'=> $question['question'],
			'a'=> $question['choice_a'],
			'b'=> $question['choice_b'],
			'c'=> $question['choice_c'],
			'd'=>$question['choice_d'],
			'ans'=>$question['answer'],
			'cor'=>$cor
			)
		);
 ?>