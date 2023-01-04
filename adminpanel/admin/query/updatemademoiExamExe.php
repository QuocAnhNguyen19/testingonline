<?php 
 include("../../../conn.php");
 
 extract($_POST);

 if($courseId == "0")
 {
 	$res = array("res" => "noSelectedCourse");
 }
 else if($examLimit == "0")
 {
 	$res = array("res" => "noSelectedTime");
 }
//  else if($examQuestLimitde == "5")
//  {
//  	$res = array("res" => "QuestLimit");
//  }
//  else if($selCourse->rowCount() > 0)
//  {
// 	$res = array("res" => "exist", "examTitle" => $examTitle);
//  }
 else{


  $updExamnew = $conn->query("INSERT INTO exam_tbl(cou_id,ex_title,ex_time_limit,made,ex_questlimit_display,socaude,socautb,socaukho)
  VALUES ('$courseId','$examTitle','$examLimit','$examQuestMade','$examQuestDipLimit','$examQuestLimitde','$examQuestLimittb','$examQuestLimitkho') ");
  $selEid = $conn->query("SELECT MAX(ex_id) as tmp FROM exam_tbl ");
  $selExamRow = $selEid->fetch(PDO::FETCH_ASSOC);
  $examIdnew = $selExamRow['tmp'];
  $upexamid=$conn->query("UPDATE exam_question_tbl SET exam_id ='$examIdnew' WHERE cou_qs='$courseId'");
 if($updExamnew)
 {
  
   $res = array("res" => "success", "msg" => $examTitle);
  }
 else
 {
   $res = array("res" => "failed");
 }

 }
 echo json_encode($res);
 ?>
