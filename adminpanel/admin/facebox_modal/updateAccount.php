
<?php 
  include("../../../conn.php");
  $id = $_GET['id'];
 
  $selAcc = $conn->query("SELECT * FROM admin_acc WHERE admin_id='$id' ")->fetch(PDO::FETCH_ASSOC);

 ?>

<fieldset style="width:543px;" >
	<legend><i class="facebox-header"><i class="edit large icon"></i>&nbsp;Update <b>( <?php echo strtoupper($selAcc['admin_user']); ?> )</b></i></legend>
  <div class="col-md-12 mt-4">
<form method="post" id="updateAccount">
     <div class="form-group">
        <legend>Tên Tài Khoản</legend>
        <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
        <input type="" name="admin_user" class="form-control" required="" value="<?php echo $selAcc['admin_user']; ?>" >
     </div>
     <div class="form-group">
        <legend>Mật Khẩu mới</legend>
        <input type="hidden" name="admin_id" value="<?php echo $id; ?>">
        <input type="" name="admin_password" class="form-control" required="" value="<?php echo $selAcc['admin_pass']; ?>" >
     </div>

     <div class="form-group">
        <legend>Phân Quyền</legend>
        <select class="form-control" name="admin_law">
          <option value="<?php echo $selAcc['admin_law']; ?>"></option>
          <option value="0">Giáo viên Bộ Môn</option>
          <option value="1">Trưởng Bộ Môn</option>
        </select>
     </div>

    



    
  <div class="form-group" align="right">
    <button type="submit" class="btn btn-sm btn-primary">Update Now</button>
  </div>
</form>
  </div>
</fieldset>







