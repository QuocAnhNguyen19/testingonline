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
                        <div> Quản lý bài thi
                            <div class="page-title-subheading">
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
                          <div class="card-header">
                            <i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>Thông tin bài thi
                          </div>
                          <div class="card-body">
                           <form method="post" id="updatemademoiExamFrm">
                               <div class="form-group">
                                <label>Course</label>
                                <select class="form-control" name="courseId" required="">
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
                                <label>Mô tả</label>
                                <input type="" name="examDesc" class="form-control" required="" value="<?php echo $selExamRow['ex_description']; ?>">
                              </div>   -->

                              <div class="form-group">
                                <label>Thời gian làm bài</label>
                                <select class="form-control" name="examLimit" required="">
                                  <option value="<?php echo $selExamRow['ex_time_limit']; ?>"><?php echo $selExamRow['ex_time_limit']; ?> Minutes</option>
                                  <option value="10">10 Minutes</option> 
                                  <option value="20">20 Minutes</option> 
                                  <option value="30">30 Minutes</option> 
                                  <option value="40">40 Minutes</option> 
                                  <option value="50">50 Minutes</option> 
                                  <option value="60">60 Minutes</option> 
                                </select>
                              </div>
                              <div class="form-group">
                                <label>Mã đề thi</label>
                                
                                <input style="text-transform: uppercase;" type="" name="examQuestMade" class="form-control" value=""> 
                              </div>

                              <div class="form-group">
                                <label>Số câu hỏi</label>
                                <input type="number" name="examQuestDipLimit" class="form-control" value="<?php echo $selExamRow['ex_questlimit_display']; ?>"> 
                              </div>
                               <!-- <div class="form-group">
                                <label>Số câu hỏi khó hiện có</label>
                                <input type="number" name="examQuestDipLimit" class="form-control" value="
                              </div> -->
                             
                
                              
                              <div class="form-group">
                                <label>Số câu hỏi dễ</label>
                                <span class="badge badge-pill badge-primary ml-2">
                                 Hiện có
                                 <span id="examQuestde2" style="color:red;font-size:18px;">
                                  </span>
                                </span>
                                <input type="number" name="examQuestLimitde" class="form-control" value="<?php echo $selExamRow['socaude']; ?>"> 
                              </div>
                              <div class="form-group">
                                <label>Số câu hỏi trung bình</label>
                                <span class="badge badge-pill badge-primary ml-2">
                                 Hiện có
                                 <span id="examQuesttb2" style="color:red;font-size:18px;">
                                  </span>
                                </span>
                                <input type="number" name="examQuestLimittb" class="form-control" value="<?php echo $selExamRow['socautb']; ?>"> 
                              </div>
                              <div class="form-group">
                                <label>Số câu hỏi khó</label>
                                <span class="badge badge-pill badge-primary ml-2">
                                 Hiện có
                                 <span id="examQuestkho2" style="color:red;font-size:18px;">
                                  </span>
                                </span>
                                <input type="number" name="examQuestLimitkho" class="form-control" value="<?php echo $selExamRow['socaukho']; ?>"> 
                              </div>
                              
                         
                              <div class="form-group" align="center">
                              <a href="manager-exam2.php?id=<?php echo $selExamRow['ex_id']; ?>" type="button" class="btn btn-primary btn-sm">Thay đổi mã đề</a>
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
