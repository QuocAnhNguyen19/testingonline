<?php 

include("../conn.php");
 

extract($_POST);
// $selEid = $conn->query("SELECT MAX(ex_id) as tmp FROM exam_tbl ");
// $selExamRow = $selEid->fetch(PDO::FETCH_ASSOC);
// $examIdnew = $selExamRow['ex_description'];
// $selpassid = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='' ");
// $selrowid = $selpassid->fetch(PDO::FETCH_ASSOC);
$selAcc = $conn->query("SELECT * FROM exam_tbl WHERE ex_description='$password' ");
$selAccRow = $selAcc->fetch(PDO::FETCH_ASSOC);

if($selAcc->rowCount() > 0 )
{
//     $_SESSION['examineeSession'] = array(
//         'ex_id' => $selAccRow['ex_id'],
//         'examineenakalogin' => true
//    );
  $res = array("res" => "success2");

}
else
{
  $res = array("res" => "invalid2");
}




 echo json_encode($res);
 ?>
 