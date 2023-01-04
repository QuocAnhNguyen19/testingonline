<?php
 include("../../../conn.php");
 extract($_POST);

$duyetdethi = $conn->query("UPDATE exam_tbl SET ex_description = '1' WHERE ex_id='$id' ");
if($duyetdethi)
{
	   $res = array("res" => "success");
}
else
{
	   $res = array("res" => "failed");
}



 echo json_encode($res);	
?>
