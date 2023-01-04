<?php 
 include("../../../conn.php");

extract($_POST);
// echo "ok";
// $examId=$_POST['examId'];
// $question=$_POST['question'];
// $capdo_qs=$_POST['capdo_qs'];
// $course_qs==$_POST['course'];
// $option_A=$_POST['option_A'];
// $option_B=$_POST['option_B'];
// $option_C=$_POST['option_C'];
// $option_D=$_POST['option_D'];
// $answer=$_POST['answer'];
// if($selQuest->rowCount() > 0)
// {
//   $res = array("res" => "exist", "msg" => $question);
// }
// else
// {
	// $insQuest = $conn->query("INSERT INTO exam_question_tbl(exam_id,exam_question,cou_qs,capdo,exam_ch1,exam_ch2,exam_ch3,exam_ch4,exam_answer)
	//  VALUES('$examId','$question','$course','$capdo','$choice_A','$choice_B','$choice_C','$choice_D','$answer') ");
	$insQuest = $conn->query("INSERT INTO exam_question_tbl(exam_question,exam_id,cou_qs,capdo,exam_ch1,exam_ch2,exam_ch3,exam_ch4,exam_answer)
	 VALUES('$question','$examId','$course_qs','$capdo_qs','$option_A','$option_B','$option_C','$option_D','$answer') ");
	if($insQuest)
	{
       $res = array("res" => "success", "msg" => $question);
	}
	else
	{
       $res = array("res" => "failed");
	}
// }



echo json_encode($res);
 ?>
