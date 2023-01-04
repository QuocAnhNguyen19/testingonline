<?php 
 include("../../../conn.php");
 extract($_POST);
 


	// move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_dir);
	$insaddacccount = $conn->query("INSERT INTO admin_acc(admin_user,admin_pass,admin_law) VALUES('$add_user', '$add_password','$add_law') ");
	if($insaddacccount)
	{
        $res = array("res" => "success", "admin_user" => $add_user);
	}
	else
	{
        $res = array("res" => "failed");
	}


 




 echo json_encode($res);
 ?>