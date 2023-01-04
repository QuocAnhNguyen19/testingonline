<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<!-- timkiemcauhoi -->
<script>
$(document).ready(function(){
  $("#myInputQ").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTableQ tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<?php 
session_start();

if(!isset($_SESSION['admin']['adminnakalogin']) == true) header("location:index.php");


 ?>
<?php include("../../conn.php"); ?>
<!-- MAO NI ANG HEADER -->
<?php include("includes/header.php"); ?>      

<!-- UI THEME DIRI -->
<?php include("includes/ui-theme.php"); ?>

<div class="app-main">
<!-- sidebar diri  -->
<?php include("includes/sidebar.php"); ?>



<?php 
   $exId = $_GET['id'];
  
   $selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$exId' ");
   $selExamRow = $selExam->fetch(PDO::FETCH_ASSOC);

   $courseId = $selExamRow['cou_id'];
  
   $selCourse = $conn->query("SELECT cou_name as courseName FROM course_tbl WHERE cou_id='$courseId' ")->fetch(PDO::FETCH_ASSOC);
 ?>
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                     <div class="page-title-heading">
                        <div style="font-size:25px;color:red;"> QUẢN LÝ BÀI THI
                            <div class="page-title-subheading" style="font-style:italic;color:black;">
                              Thêm câu hỏi cho <?php echo $selExamRow['ex_title']; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
            <div id="refreshData">
            <div class="row">
                  <div class="col-md-12" style="font-size:16px;font-weight:700">
                      <div class="main-card mb-3 card">
                          <div class="card-header" style="align-self:center;">
                            <i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Thông tin bài thi
                          </div>
                          <div class="card-body">
                           <form method="post" id="updateExamFrm">
                               <div class="form-group">
                                <label>Course</label>
                                <select class="form-control" name="courseId" id="courseIdex" required="">
                                  <option value="<?php echo $selExamRow['cou_id']; ?>"><?php echo $selCourse['courseName']; ?></option>
                                  <?php 
                                    $selAllCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC");
                                    while ($selAllCourseRow = $selAllCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                      <option value="<?php echo $selAllCourseRow['cou_id']; ?>"><?php echo $selAllCourseRow['cou_name']; ?></option>
                                    <?php }
                                   ?>
                                </select>
                              </div>

                              <div class="form-group">
                                <label>Tiêu đề</label>
                                <input type="hidden" name="examId" value="<?php echo $selExamRow['ex_id']; ?>">
                                <input type="" name="examTitle" class="form-control" required="" value="<?php echo $selExamRow['ex_title']; ?>">
                              </div>  

                              <!-- <div class="form-group">
                                <label>Ngày thi</label>
                                <input type="" name="examDesc" class="form-control" required="" value="<?php echo $selExamRow['ex_description']; ?>">
                              </div>   -->

                              <div class="form-group">
                                <label>Thời gian làm bài</label>
                                <select class="form-control" name="examLimit" required="">
                                  <option value="<?php echo $selExamRow['ex_time_limit']; ?>"><?php echo $selExamRow['ex_time_limit']; ?> Minutes</option>
                                  <option value="30">30 Minutes</option> 
                                  <option value="40">40 Minutes</option> 
                                  <option value="50">50 Minutes</option> 
                                  <option value="60">60 Minutes</option> 
                                  <option value="90">90 Minutes</option> 
                                  <option value="120">120 Minutes</option> 
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Mã đề thi</label>
                                
                                <input style="text-transform: uppercase;" type="" name="examQuestMade" id="examQuestMade" class="form-control" value="<?php echo $selExamRow['made']; ?>"> 
                              </div>

                              <div class="form-group">
                                <label>Số câu hỏi</label>
                                <input type="number" name="examQuestDipLimit" class="form-control" value="<?php echo $selExamRow['ex_questlimit_display']; ?>"> 
                              </div>
                               <!-- <div class="form-group">
                                <label>Số câu hỏi khó hiện có</label>
                                <input type="number" name="examQuestDipLimit" class="form-control" value="<?php echo $selExamRow['ex_questlimit_display']; ?>"> 
                              </div> -->
                             
                              <?php 
                                $selExamleveltb = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id=$exId AND capdo = 'Trung Bình' AND trangthai='1' ");
                                $selExamlevelde = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id=$exId AND capdo = 'Dễ' AND trangthai='1' ");
                                $selExamlevelkho = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id=$exId AND capdo = 'Khó' AND trangthai='1' ");

                                ?>
                              
                              <div class="form-group">
                                <label>Số câu hỏi dễ</label>
                                <span class="badge badge-pill badge-primary ml-2">
                                 Hiện có
                                 <span style="color:red;font-size:18px;">
                                    <?php echo $selExamlevelde->rowCount(); ?>
                                  </span>
                                </span>
                                <input type="number" name="examQuestLimitde" class="form-control" value="<?php echo $selExamRow['socaude']; ?>"> 
                              </div>
                              <div class="form-group">
                                <label>Số câu hỏi trung bình</label>
                                <span class="badge badge-pill badge-primary ml-2">
                                 Hiện có
                                 <span style="color:red;font-size:18px;">
                                    <?php echo $selExamleveltb->rowCount(); ?>
                                  </span>
                                </span>
                                <input type="number" name="examQuestLimittb" class="form-control" value="<?php echo $selExamRow['socautb']; ?>"> 
                              </div>
                              <div class="form-group">
                                <label>Số câu hỏi khó</label>
                                <span class="badge badge-pill badge-primary ml-2">
                                 Hiện có
                                 <span style="color:red;font-size:18px;">
                                    <?php echo $selExamlevelkho->rowCount(); ?>
                                  </span>
                                </span>
                                <input type="number" name="examQuestLimitkho" class="form-control" value="<?php echo $selExamRow['socaukho']; ?>"> 
                              </div>
                              
                         
                              <div class="form-group" align="center">
                              <a href="manager-exam2.php?id=<?php echo $selExamRow['ex_id']; ?>" type="button" class="btn btn-primary btn-sm">Thay đổi mã đề</a>
                              </div> 
                              <div class="form-group" align="center">
                                <button type="submit" class="btn btn-primary btn-lg">Lưu chỉnh sửa</button>
                              </div> 
                           </form>                           
                          </div>
                      </div>
                   
                  </div>

                  <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">DANH SÁCH THÍ SINH
                    </div>
                    
                    <div style="text-align:end;">
                    <button type="button" id="duyetdethi" data-id="<?php echo $selExamRow['ex_id']; ?>" class="btn btn-sm btn-primary">Bắt đầu mở đề thi</button>
                    <input type="text" name="" id="myInputQ" placeholder="Tìm kiếm thí sinh">
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ Tên</th>
                                <th>Giới tính</th>
                                <th>Ngày sinh</th>
                                <!-- <th>Học Khóa</th>
                                <th>Trình độ</th> -->
                                <th>Email</th>
                                <!-- <th>Password</th> -->
                                <!-- <th>status</th> -->
                                <th></th>
                            </tr>
                            </thead>
                            <tbody id="mytableQ">
                              <?php 
                                $selExmne = $conn->query("SELECT * FROM examinee_tbl ORDER BY exmne_id DESC ");
                                if($selExmne->rowCount() > 0)
                                {
                                    $k=1;
                                    while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $k++ ; ?></td>
                                           <td><?php echo $selExmneRow['exmne_fullname']; ?></td>
                                           <td><?php echo $selExmneRow['exmne_gender']; ?></td>
                                           <td><?php echo $selExmneRow['exmne_birthdate']; ?></td>
                                          
                                           
                                           <td><?php echo $selExmneRow['exmne_email']; ?></td>
                                           
                                           
                                           <td>

                                               <!-- <a rel="facebox" href="facebox_modal/updateExaminee.php?id=<?php echo $selExmneRow['exmne_id']; ?>" class="btn btn-sm btn-primary">Thêm sinh viên</a> -->
                                             
                                               <button type="button" id="duyetexaminee" data-id="<?php echo $selExmneRow['exmne_id']; ?>"  class="btn btn-sm btn-primary">Thêm sinh viên</button>
                                               

                                           </td>
                                        </tr>
                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="2">
                                        <h3 class="p-3">Không có dữ liệu</h3>
                                      </td>
                                    </tr>
                                <?php }
                               ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
              </div>  
            </div> 
            </div>
               
            </div>
      
        

<!-- MAO NI IYA FOOTER -->
<?php include("includes/footer.php"); ?>

<?php include("includes/modals.php"); ?>
