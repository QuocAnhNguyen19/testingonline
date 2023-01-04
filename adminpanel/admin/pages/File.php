<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>QUẢN LÝ THÔNG BÁO</div>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">DANH SÁCH THÔNG BÁO
                    </div>
                    <div class="table-responsive">
                    <div><a href="#" data-toggle="modal" data-target="#addFile" style="text-decoration: none;" class="btn btn-primary btn-sm">Thêm thông báo</a></div>
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-left pl-4">ID thông báo</th>
                                <th class="text-left ">Tên thông báo</th>
                            
                                <th class="text-left ">File</th> 
                                <th class="text-center" width="20%">Quản lý</th>
                            </tr>
                            </thead>
                            <tbody>
                            
                              <?php 
                                // $adminId = $_SESSION['admin']['admin_id'];
                                $selfile = $conn->query("SELECT * FROM file_tbl ");
                                if($selfile->rowCount() > 0)
                                {
                                    while ($selExamfile = $selfile->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4"><?php echo $selExamfile['file_id']; ?></td>
                                          
                                            <td><?php echo $selExamfile['ex_title']; ?></td>
                                            <td>
                                           
                                            <img style="max-width:200px;" src="<?php echo $selExamfile['file_pdf']; ?>" alt="">
                                            </td>
                                           
                                            
                                            <td class="text-center">
                                            <button type="button" id="delete_file" data-id='<?php echo $selExamfile['file_id']; ?>'  class="btn btn-danger btn-sm">Xóa</button>
                                            <!-- <a href="#" data-toggle="modal" data-target="#addFile" style="text-decoration: none;" class="btn btn-primary btn-sm">Thêm thông báo</a> -->
                                            
                                           
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
         
