<?php
 include("../../../conn.php");
 extract($_POST);


$duyetCourse = $conn->query("UPDATE exam_question_tbl SET trangthai = '1' WHERE eqt_id='$id' ");
if($duyetCourse)
{
	   $res = array("res" => "success");
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>
