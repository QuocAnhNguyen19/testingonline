<?php
 include("../../../conn.php");
 extract($_POST);
//  $exId = $_POST['id'];
$exmade = $_POST['examQuestMade'];
$courseIdex=$_POST['courseIdex'];
// $selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$exId' ");
// $selExamRow = $selExam->fetch(PDO::FETCH_ASSOC);
// $courseId2 = $selExamRow['cou_id'];
$duyetexaminee = $conn->query("UPDATE examinee_tbl SET exmne_course='$courseIdex',examne_made='$exmade' WHERE exmne_id='$id' ");
if($duyetexaminee)
{
	   $res = array("res" => "success");
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>
