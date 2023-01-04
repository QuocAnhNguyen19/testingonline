<?php
 include("../../../conn.php");
 extract($_POST);


$updAccount = $conn->query("UPDATE admin_acc SET admin_user='$admin_user', admin_pass='$admin_password', admin_law='$admin_law' WHERE admin_id='$admin_id' ");
if($updAccount)
{
	   $res = array("res" => "success", "admin_user" => $admin_user);
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>
