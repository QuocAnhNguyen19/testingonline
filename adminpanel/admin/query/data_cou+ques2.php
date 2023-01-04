<?php 
        //  
 include("../../../conn.php");
 extract($_POST);
 $tmp_exam = $_POST['id'];
//  $selCoursemade = $conn->query("SELECT * FROM exam_tbl where cou_id='$tmp' ");


//  $selExamleveltb = $conn->query("SELECT * FROM exam_question_tbl WHERE cou_qs='$tmp_exam' AND capdo = 'Trung Bình' AND trangthai='1' ");
//  $selExamlevelde = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$tmp_exam' AND capdo = 'Dễ' AND trangthai='1' ");
 $selExamlevelkho = $conn->query("SELECT * FROM exam_question_tbl WHERE cou_qs='$tmp_exam' AND capdo = 'Khó' AND trangthai='1' ");
$selupQues=$conn->query("UPDATE exam_question_tbl SET exam_id='$tmp_exam'");
//  echo $selExamleveltb->rowCount();
 echo $selExamlevelkho->rowCount();
//  echo $selExamlevelde->rowCount();
                         
 

?>