<?php 
 include("../../../conn.php");


extract($_POST);

$delfile = $conn->query("DELETE  FROM file_tbl WHERE file_id='$id'  ");
if($delfile)
{
	$res = array("res" => "success");
}
else
{
	$res = array("res" => "failed");
}



	echo json_encode($res);
 ?>
