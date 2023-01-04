
<?php 
 include("../../../conn.php");
 extract($_POST);
 
//  $course_name = strtoupper($course_name);
//  $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_name='$course_name' ");
 $target_dir = "./assets/images/slide_1.jpg";
//  $target_file = $target_dir . basename($_FILES["file_link"]["images"]);
//  move_uploaded_file($_FILES["file_link"]["images"],$target_dir);
 
 
	$insCourse2 = $conn->query("INSERT INTO file_tbl(file_id,ex_title,file_pdf) VALUES('$file_id','$file_name',' $target_dir') ");
	if($insCourse2)
	{
		$res = array("res" => "success", "file_name" => $file_name);
	}
	else
	{
		$res = array("res" => "failed", "file_name" => $file_name);
	}


 




 echo json_encode($res);
 ?>
