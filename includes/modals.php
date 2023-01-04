<!-- Modal For Add Course -->
<div class="modal fade" id="feedbacksModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addFeebacks" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gửi phản hồi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <div class="form-group">
            <label>Chọn tên phản hồi</label><br>
            <?php 
               $selMe = $conn->query("SELECT * FROM examinee_tbl WHERE exmne_id='$exmneId' ")->fetch(PDO::FETCH_ASSOC);
             ?>
            <input type="radio" name="asMe" value="<?php echo $selMe['exmne_fullname']; ?>"> <?php echo $selMe['exmne_fullname']; ?> <br>
            <input type="radio" name="asMe" value="Anonymous"> Ẩn danh
            
          </div>
          <div class="form-group">
           <textarea name="myFeedbacks" class="form-control" rows="3" placeholder="Nhập phản hồi"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="submit" class="btn btn-primary">Xác nhận</button>
      </div>
    </div>
   </form>
   
  </div>
</div>
<!-- pass -->
<div class="modal fade" id="modalpassid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
   <form class="refreshFrm" id="addpassid" method="post" enctype="multipart/form-data">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Xác nhận mật khẩu thi</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
        <div class="col-md-12">
          <!-- <div class="form-group">
            <label>Mật khẩu</label>
          
            <input type="password" name="course_name" id="course_name" class="form-control" placeholder="Nhập tên khóa học" required="" autocomplete="off">
          </div> -->
          <div class="form-group wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
     
        
        </div>
      </div>
      <div class="modal-footer">
  
        <button type="submit" class="btn btn-primary">Xác nhận</button>
      </div>
    </div>
   </form>
  </div>
</div>