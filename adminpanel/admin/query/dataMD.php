<?php 
        //  
 include("../../../conn.php");
 extract($_POST);
 $tmp = $_POST['id'];
 $selCoursemade = $conn->query("SELECT * FROM exam_tbl where cou_id='$tmp' ");
 while ($selCourseRowmade = $selCoursemade->fetch(PDO::FETCH_ASSOC)) { ?>
 <option value="<?php echo $selCourseRowmade['made'] ?>"><?php echo $selCourseRowmade['made']; ?></option>
<?php 
}
?>