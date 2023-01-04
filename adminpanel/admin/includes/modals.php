<!-- Update Account -->
<div class="modal fade myModal" id="updateAccount-<?php echo $selExamRow['admin_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
     <form class="refreshFrm" id="updateAccount" method="post" >
       <div class="modal-content myModal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cập nhật ( <?php echo $selExamRow['admin_user']; ?> )</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Tài khoản</label>
              <input type="" name="admin_user" id="admin_user" class="form-control" value="<?php echo $selExamRow['admin_user']; ?>">
            </div>
            <div class="form-group">
              <label>Mật khẩu</label>
              <input type="" name="admin_password" id="admin_password" class="form-control" value="<?php echo $selExamRow['admin_password']; ?>">
            </div>
            <div class="form-group">
            <label>Phân quyền</label>
            <select class="form-control" name="admin_law" id="admin_law">
              
              <option value="0">Gián viên Bộ Môn</option>
              <option value="1">Trưởng Bộ Môn</option>
            </select>
          </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
      </div>
     </form>
    </div>
  </div>
  <!-- add account -->
  <div class="modal fade" id="addcount" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <form class="refreshFrm" id="addaccount" method="post" >
       <div class="modal-content myModal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">THÊM GIẢNG VIÊN</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Tài khoản</label>
              <input type="" name="add_user" id="add_user" placeholder="Nhập ID" class="form-control" value="">
            </div>
            <div class="form-group">
              <label>Mật khẩu</label>
              <input type="" name="add_password" id="add_password" placeholder="Mật khẩu" class="form-control" value="">
            </div>
            <div class="form-group">
            <label>Phân quyền</label>
            <select class="form-control" name="add_law" id="add_law">
              
              <option value="0">Gián viên Bộ Môn</option>
              <option value="1">Trưởng Bộ Môn</option>
            </select>
          </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="submit" class="btn btn-primary">Thêm ngay</button>
        </div>
      </div>
     </form>
  </div>
</div>
  <!-- them thong bao -->
  <div class="modal fade" id="addFile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addFileFrm" method="post" enctype="multipart/form-data">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm thông báo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
        <div class="form-group">
            <label>ID</label>
          
            <input type="" name="file_id" id="file_id" class="form-control" placeholder="Nhập ID" required="" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Tên thông báo</label>
          
            <input type="" name="file_name" id="file_name" class="form-control" placeholder="Nhập tên thông báo" required="" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Chọn File</label>
            <input type="file" name="file_link" id="file_link" class="form-control" required="" >
          </div>
          <!-- <div class="form-group">
            <label>File đề cương tổng quát</label>
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" >
          </div> -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Thêm ngay</button>
      </div>
    </div>
   </form>
  </div>
</div>

<!-- Modal For Add Course -->

<div class="modal fade" id="modalForAddCourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addCourseFrm" method="post" enctype="multipart/form-data">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm khóa học</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Tên Khóa</label>
          
            <input type="" name="course_name" id="course_name" class="form-control" placeholder="Nhập tên khóa học" required="" autocomplete="off">
          </div>
          <div class="form-group">
            <label>Cán bộ giảng dạy</label>
            <input type="" name="course_author" id="course_author" class="form-control" placeholder="Nhập tên Tác giả" required="" autocomplete="off">
          </div>
          <!-- <div class="form-group">
            <label>File đề cương tổng quát</label>
            <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" >
          </div> -->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Thêm ngay</button>
      </div>
    </div>
   </form>
  </div>
</div>


<!-- Modal For Update Course -->
<div class="modal fade myModal" id="updateCourse-<?php echo $selCourseRow['cou_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog " role="document">
     <form class="refreshFrm" id="addCourseFrm" method="post" >
       <div class="modal-content myModal-content" >
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cập nhật ( <?php echo $selCourseRow['cou_name']; ?> )</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="col-md-12">
            <div class="form-group">
              <label>Course</label>
              <input type="" name="course_name" id="course_name" class="form-control" value="<?php echo $selCourseRow['cou_name']; ?>">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
          <button type="submit" class="btn btn-primary">Cập nhật</button>
        </div>
      </div>
     </form>
    </div>
  </div>


<!-- Modal For Add Exam -->
<div class="modal fade" id="modalForExam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addExamFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm bài thi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Select Course</label>
            <select class="form-control" name="courseSelected">
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
                  <option value="0">No Course Found</option>
                <?php }
               ?>
            </select>
          </div>

          <div class="form-group">
            <label>Thời gian làm bài</label>
            <select class="form-control" name="timeLimit" required="">
              <option value="0">Chọn thời gian</option>
              <option value="10">10 Phút</option> 
              <option value="20">20 Phút</option> 
              <option value="30">30 Phút</option> 
              <option value="40">40 Phút</option> 
              <option value="50">50 Phút</option> 
              <option value="60">60 Phút</option> 
            </select>
          </div>

          <div class="form-group">
            <label>Số câu hỏi</label>
            <input type="number" name="examQuestDipLimit" id="" class="form-control" placeholder="Nhập số giới hạn hiển thị câu hỏi">
          </div>

          <div class="form-group">
            <label>Tiêu đề</label>
            <input style="text-transform: uppercase;" type="" name="examTitle" class="form-control" placeholder="Nhập tiêu đề bài thi" required="">
          </div>

          <div class="form-group">
            <label>Ngày thi</label>
            <input type="datetime-local" style="text-transform: uppercase;" name="examDesc" class="form-control" rows="4" placeholder="Nhập mô tả" required="">
          </div>


        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Thêm ngay</button>
      </div>
    </div>
   </form>
  </div>
</div>


<!-- Modal For Add Examinee -->
<div class="modal fade" id="modalForAddExaminee" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addExamineeFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thêm thí sinh</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Fullname</label>
            <input type="" name="fullname" id="fullname" class="form-control" placeholder="Nhập họ tên" autocomplete="off" required="">
          </div>
          <div class="form-group">
            <label>Birhdate</label>
            <input type="date" name="bdate" id="bdate" class="form-control" placeholder="Nhập ngày sinh" autocomplete="off" >
          </div>
          <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="gender" id="gender">
              <option value="0">Chọn giới tính</option>
              <option value="male">Nam</option>
              <option value="female">Nữ</option>
            </select>
          </div>
         
          <div class="form-group">
            <label>Year Level</label>
            <select class="form-control" name="year_level" id="year_level">
              <option value="0">Khóa</option>
              <option value="first year">Khóa 44</option>
              <option value="second year">Khóa 45</option>
              <option value="third year">Khóa 46</option>
              <option value="fourth year">Khóa 47</option>
            </select>
          </div>
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Nhập Email" autocomplete="off" required="">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Nhập mật khẩu" autocomplete="off" required="">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Thêm ngay</button>
      </div>
    </div>
   </form>
  </div>
</div>



<!-- Modal For Add Question -->
<div class="modal fade" id="modalForAddQuestion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addQuestionFrm" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 style="color:blue;font-size:30px;" class="modal-title" id="exampleModalLabel">Tạo câu hỏi mới</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form class="refreshFrm" method="post" id="addQuestionFrm">
      <div class="modal-body">
        <div class="col-md-12">
       
          <div class="form-group">
            <label>Question</label>
            <input type="hidden" name="examId" id="examId" value="<?php echo $exId; ?>">
            <input type="" name="question" id="question" class="form-control" placeholder="Nhập câu hỏi" autocomplete="off">
          </div>

          <div class="form-group">
            <label>Course</label>
            <select class="form-control" name="course_qs" id="course_qs">
              <option  value="0">Chọn khóa học</option>
              <?php 
                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id asc");
                while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                  <option value="<?php echo $selCourseRow['cou_id']; ?>"><?php echo $selCourseRow['cou_name']; ?></option>
                <?php }
               ?>
            </select>
          </div>
          <div class="form-group">
            <label>Độ Khó</label>
            <select class="form-control" name="capdo_qs" id="capdo_qs" required="">
            <option value="0">Mức độ</option>
            <option value="Dễ">Dễ</option> 
            <option value="Trung Bình">Trung Bình</option> 
            <option value="Khó">Khó</option> 
          
            </select>
<!--   
          </div>
          <div class="form-group">
            <label>Trạng thái</label>
            <select class="form-control" name="trangthai" required="">
            <option value="0">Chờ xét duyệt</option>
            <option value="Phê duyệt">Phê duyệt</option> 
            <option value="Trung Bình">Trung Bình</option> 
            <option value="Khó">Khó</option> 
          
            </select>
  
          </div> -->

          <fieldset>
            <!-- <legend>Input word for choice's</legend> -->
            <div class="form-group">
                <label>Choice A</label>
                <input type="" name="choice_A" id="choice_A" class="form-control" placeholder="Nhập đáp án" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Choice B</label>
                <input type="" name="choice_B" id="choice_B" class="form-control" placeholder="Nhập đáp án" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Choice C</label>
                <input type="" name="choice_C" id="choice_C" class="form-control" placeholder="Nhập đáp án" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Choice D</label>
                <input type="" name="choice_D" id="choice_D" class="form-control" placeholder="Nhập đáp án" autocomplete="off">
            </div>

            <div class="form-group">
                <label>Correct Answer</label>
               
            </div>
    
            <div class="form-group" id="checkans" >
              
                <label class="fontnew" >
                <input type="radio" name="answer"   id="rdOptionA"  class="form-control"  autocomplete="off">Câu A
                <span class="checkmark"></span>
                </label>
                <label class="fontnew">
                <input  type="radio" name="answer" id="rdOptionB"  class="form-control"  autocomplete="off">Câu B
                <span class="checkmark"></span>
                </label > 
                <label class="fontnew" >
                <input type="radio" name="answer" id="rdOptionC"  class="form-control"  autocomplete="off">Câu C
                <span class="checkmark"></span>
                </label>
                <label class="fontnew" >
                <input type="radio" name="answer" id="rdOptionD"  class="form-control"  autocomplete="off">Câu D
                <span class="checkmark"></span>
                </label>
            </div>
          </fieldset>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary" id="anssubmit" >Thêm ngay</button>
      </div>
      </form>
    </div>
   </form>
  </div>
</div>
<!-- check dap an -->
<!-- <script type="text/javascript">
$('#anssubmit').click(function(){
  let examId = $('#examId').val(); 
  let question = $('#question').val(); 
  let course_qs = $('#course_qs').val(); 
  let capdo_qs = $('#capdo_qs').val(); 
  let option_A = $('#choice_A').val();
  let option_B = $('#choice_B').val();
  let option_C = $('#choice_C').val();
  let option_D = $('#choice_D').val();
  let answer = $('#rdOptionA').is(':checked')?$('#choice_A').val():$('#rdOptionB').is(':checked')?$('#choice_B').val():$('#rdOptionC').is(':checked')?$('#choice_C').val():$('#rdOptionD').is(':checked')?$('#choice_D').val():'';
  // console.log(question,capdo_qs,course_qs,answer);

  $.ajax({
    type : 'post',
    url : 'query/addQuestionExe.php',
    // dataType : "json",  
    data:{    
      examId:examId,
      question:question,
      course_qs:course_qs,
      capdo_qs:capdo_qs,
      option_A:option_A,
      option_B:option_B,
      option_C:option_C,
      option_D:option_D,
      answer:answer
    },
    success : function(data){
      //   console.log(data)
      if(data.res == "success")
        {
          // Swal.fire(
          // data,
          // );
  $('#question').val(); 
  $('#course_qs').val(); 
  $('#capdo_qs').val(); 
  $('#choice_A').val();
  $('#choice_B').val();
  $('#choice_C').val();
  $('#choice_D').val();
          refreshDiv();
        }
    }
  });
});
</script> -->

<style>
/* The fontnew */
.fontnew {
  
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.fontnew input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 5px;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.fontnew:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.fontnew input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.fontnew input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.fontnew .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
</style>