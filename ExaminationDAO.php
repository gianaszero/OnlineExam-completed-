<?php 
	include_once 'configuration.php';
	class ExaminationDAO
	{
		
		public static function createExaminee($fname, $lname, $email,$password){
			global $db;
			try{
				$sql="INSERT INTO examinee(fname,lname,email,password,exam_score) VALUES ('$fname', '$lname','$email','$password', '')";
				$result = $db->query($sql);
				return $result;
				//echo "<script type = 'text/javascript'>alert('Successfully Registered'); window.location.href='loginpage.php'</script>";
			}catch(Exception $e){
				error_log($e->getMessage());
				return true;
			}

		}
		public static function getExaminee($email, $password){
			global $db;
			try{
				$sql="SELECT * from examinee where email= '{$email}' and password = '{$password}'";
				$result = $db->query($sql);
				$row = $result->fetch_assoc();
					// header("location:examInterface.php");
					return $row;
			}catch(Exception $e){
					error_log($e->getMessage());
					return true;
			}

		}
		// public static function getExaminee2($fname,$lname){
		// 	global $db;
		// 	$sql="SELECT * from examinee where email= '{$email}' and password = '{$password}'";
		// 	$result = $db->query($sql);
		// 	if($result->num_rows > 0){
		// 		header("location:examInterface.php");
		// 	}else{
		// 		echo "<script type = 'text/javascript'>alert('Unsuccessfully Login');  window.location.href='loginpage.php'</script>";
		// 	}
		//}
		public static function getQuestions($quest_num){
			global $db;
			try{
				$sql= "SELECT question_id,question,choice_a,choice_b,choice_c,choice_d,answer FROM questions where question_id = '{$quest_num}'";
				$result = $db->query($sql);
				$row = $result->fetch_assoc();
				return $row;
			}catch(Exception $e){
				error_log($e->getMessage());
				return true;
			}			
		}
		// public static function updateExamineeScore($totalscore,$email){
		// 	global $db;

		// 	$sql = "UPDATE examinee SET exam_score ='{$totalscore}' WHERE email = '{$email}'";
		// 	$result =$db->query($sql);
		// 	if($result->num_rows > 0){
		// 		return true;
		// 	}
		// }
		public static function getAnswers(){
			global $db;
			try{
				$sql="SELECT answer FROM questions ORDER BY question_id";
				$result = $db->query($sql);
				$row = array();
				while ($res = $result->fetch_assoc()){
					$row[] = $res['answer'];
				}
				return $row;
			}catch(Exception $e){
				error_log($e->getMessage());
				return false;
			}
		}
		public static function checkAnswers($answers){
			$correct = self::getAnswers();
			//$correct= array('','','',........);
			if($correct === false){
				error_log('Correct Answers not Ready');
				return false;
			}if(count($correct) != strlen($answers)){
				error_log('Invalid Answers');
				return false;
			}
			$score = 0;
			$corr = $correct;
			$ans = $answers;
			for($i = 0; $i < 10; $i++){
				//compare
				if($corr[$i] == $ans[$i]){
					$score++;
				}
			}
			return $score;
		}
	}
 ?>