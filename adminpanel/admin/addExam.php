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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
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




<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                     <div class="page-title-heading">
                        <div style="font-size:25px;color:red;"> TẠO BÀI THI MỚI
                           
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
                      <form method="post" id="updatemademoiExamFrm">
                           <div class="form-group">
                           <input type="hidden" name="examId_ques" id="examId_ques" value="<?php echo $exId; ?>">
                            <label>Select Course</label>
                            <select class="form-control" name="courseId" id="course_exam">
                            <option value="0">Chọn khóa học</option>
                            <?php 
                             $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC");
                             if($selCourse->rowCount() > 0)
                                {
                                 while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                                <?php }
                                 }
                                 else
                                { ?>
                                <option value="0">Chưa chọn khóa học</option>
                                <?php }
                                ?>
                            </select>
                            </div>

                              <div class="form-group">
                                <label>Tiêu đề</label>
                                <!-- <input type="hidden" name="examId" > -->
                                <input type="" name="examTitle" class="form-control" required=""  placeholder="Nhập tiêu đề">
                              </div>  

                              <!-- <div class="form-group">
                                <label>Mật khẩu đề</label>
                                <input type="" name="examDesc" class="form-control" required="" >
                              </div>   -->

                              <div class="form-group">
                                <label>Thời gian làm bài</label>
                                <select class="form-control" name="examLimit" required="">
                                  <option > Minutes</option>
                            
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
                                
                                <input style="text-transform: uppercase;" type="" name="examQuestMade" class="form-control"  placeholder="Nhập mã đề thi"> 
                              </div>

                              <div class="form-group">
                                <label>Tổng số câu hỏi của đề thi</label>
                                <input type="number" name="examQuestDipLimit" class="form-control"  placeholder="Nhập số câu hỏi của đề thi" > 
                                <label style="font-style:italic;color: red;font-size:13px;">Lưu ý : Tổng số câu = Số câu dễ + Số câu trung bình + Số câu khó </label>
                              </div>
                               
                              <div class="form-group">
                                <label>Số câu hỏi dễ</label>
                                <span class="badge badge-pill badge-primary ml-2">
                                 Hiện có
                                 <span id="examQuestde" style="color:red;font-size:18px;">
                                  </span>
                                </span>
                                
                                <input type="number" name="examQuestLimitde" class="form-control"  placeholder="Nhập số câu dễ <= Số câu hiện có" value="<?php echo $selExamRow['socaude']; ?>"> 
                              </div>
                              <div class="form-group">
                                <label>Số câu hỏi trung bình</label>
                                <span class="badge badge-pill badge-primary ml-2">
                                 Hiện có
                                 <span id="examQuesttb" style="color:red;font-size:18px;">
                                  </span>
                                </span>
                                <input type="number" name="examQuestLimittb"  class="form-control" placeholder="Chọn số câu trung bình" value="<?php echo $selExamRow['socautb']; ?>"> 
                              </div>
                              <div class="form-group">
                                <label>Số câu hỏi khó</label>
                                <span class="badge badge-pill badge-primary ml-2">
                                 Hiện có
                                 <span id="examQuestKho" style="color:red;font-size:18px;">
                                  </span>
                                </span>
                                <input type="number" name="examQuestLimitkho" class="form-control" placeholder="Chọn số câu khó" value="<?php echo $selExamRow['socaukho']; ?>"> 
                              </div>
                              
                         
                             
                              <div class="form-group" align="center">
                                <button type="submit" class="btn btn-primary btn-lg">Cập nhật đề thi</button>
                              </div> 
                           </form>                           
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
