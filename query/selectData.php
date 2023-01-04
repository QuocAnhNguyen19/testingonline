<?php 
$exmneId = $_SESSION['examineeSession']['exmne_id'];

// Select Data sa nilogin nga examinee
$selExmneeData = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
$exmneCourse =  $selExmneeData['exmne_course'];
$exmneMade =  $selExmneeData['examne_made'];


        
// Select and tanang exam depende sa course nga ni login 
$selExam = $conn->query("SELECT * FROM exam_tbl WHERE cou_id='$exmneCourse' AND made='$exmneMade' AND ex_description='1' ORDER BY ex_id DESC ");


//

 ?>
