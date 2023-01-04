<?php 

// Count All Course
$selCourse = $conn->query("SELECT COUNT(cou_id) as totCourse FROM course_tbl ")->fetch(PDO::FETCH_ASSOC);


// Count All Exam
$selExam = $conn->query("SELECT COUNT(ex_id) as totExam FROM exam_tbl ")->fetch(PDO::FETCH_ASSOC);

$selExmne2 = $conn->query("SELECT COUNT(exmne_id) as totExmne FROM examinee_tbl ")->fetch(PDO::FETCH_ASSOC);


 ?>
