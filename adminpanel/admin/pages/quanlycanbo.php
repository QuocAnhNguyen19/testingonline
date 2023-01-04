<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>QUẢN LÝ TÀI KHOẢN GIẢNG VIÊN</div>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">DANH SÁCH TÀI KHOẢN
                    <button class="btn btn-sm btn-primary " data-toggle="modal" data-target="#addcount">Thêm giảng viên</button>
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
                               
                                $selExamcb = $conn->query("SELECT * FROM admin_acc WHERE admin_law='0'");
                                if($selExamcb->rowCount() > 0)
                                {
                                    while ($selExamRowcb = $selExamcb->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selExamRowcb['admin_user']; ?></td>
                                          
                                            <td><?php echo $selExamRowcb['admin_pass']; ?></td>
                                            <td>
                                            <?php
                                        
                                            if($selExamRowcb['admin_law'] ==  1 )
                                                        {
                                                          echo '<span style="color:green;">Trưởng Bộ Môn</span>';
                                                        }
                                                        else{
                                                          echo '<span style="color:red;">Giáo Viên</span>';

                                                        }
                                                        ?>
                                            </td>
                                           
                                            <td><?php echo $selExamRowcb['acc_created']; ?></td>
                                            <td class="text-center">
                                            <a rel="facebox" style="text-decoration: none;" class="btn btn-primary btn-sm" href="facebox_modal/updateAccount.php?id=<?php echo $selExamRow['admin_id']; ?>" id="updateAccount">Cập nhật</a>
                                            
                                            
                                           
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
         
