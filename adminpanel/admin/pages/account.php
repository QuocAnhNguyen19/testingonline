<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>QUẢN LÝ TÀI KHOẢN</div>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">DANH SÁCH TÀI KHOẢN
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-left pl-4">Tên tài khoản</th>
                                <th class="text-left ">Mật khẩu</th>
                                <th class="text-left ">Phân quyền</th>
                                <th class="text-left ">Ngày tạo</th> 
                                <th class="text-center" width="20%">Quản lý</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                              <?php 
                                $adminId = $_SESSION['admin']['admin_id'];
                                $selExam = $conn->query("SELECT * FROM admin_acc WHERE admin_id=$adminId ");
                                if($selExam->rowCount() > 0)
                                {
                                    while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selExamRow['admin_user']; ?></td>
                                          
                                            <td><?php echo $selExamRow['admin_pass']; ?></td>
                                            <td>
                                            <?php
                                        
                                            if($selExamRow['admin_law'] ==  1 )
                                                        {
                                                          echo '<span style="color:green;">Trưởng Bộ Môn</span>';
                                                        }
                                                        else{
                                                          echo '<span style="color:red;">Giáo Viên</span>';

                                                        }
                                                        ?>
                                            </td>
                                           
                                            <td><?php echo $selExamRow['acc_created']; ?></td>
                                            <td class="text-center">
                                            <a rel="facebox" style="text-decoration: none;" class="btn btn-primary btn-sm" href="facebox_modal/updateAccount.php?id=<?php echo $selExamRow['admin_id']; ?>" id="updateAccount">Cập nhật</a>
                                            
                                            
                                             <?php
                                                           $adminId = $_SESSION['admin']['admin_id'];
                                                           $seladminData = $conn->query("SELECT * FROM admin_acc WHERE admin_id='$adminId' ")->fetch(PDO::FETCH_ASSOC);
                                                           $acc_id = $selExamRow['admin_id'];       
                                                          if($seladminData['admin_law'] == 1){
                                                        //    echo "<button style='background-color:green;' type='button' id='addaccount' data-id='$acc_id' class='btn btn-danger btn-sm'>Thêm Giáo Viên</button>";
                                                           echo "<a href='?page=quanlycanbo'  class='btn btn-success btn-sm'>Quản lý giảng viên</a>";
                                                         }
                                                         ?>
                                            </td>

                                        </tr>

                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="5">
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
         
