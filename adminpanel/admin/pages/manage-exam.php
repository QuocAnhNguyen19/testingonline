<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>QUẢN LÝ BÀI THI</div>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">DANH SÁCH BÀI THI
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th>STT</th>
                                <th class="text-left pl-4">Tên bài thi</th>
                                <th class="text-left ">Khóa học</th>
                                <th class="text-left ">Trạng thái</th>
                                <th class="text-left ">Số câu</th>  
                                <th class="text-left ">Mã đề</th>  
                                <th class="text-left ">Ngày tạo</th> 
                                <th class="text-center" width="20%">Quản lý</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selExam = $conn->query("SELECT * FROM exam_tbl ORDER BY ex_id DESC ");
                                if($selExam->rowCount() > 0)
                                {
                                    $s=1;
                                    while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td><?php echo $s++ ; ?></td>
                                            <td class="pl-4"><?php echo $selExamRow['ex_title']; ?></td>
                                            <td>
                                                <?php 
                                                    $courseId =  $selExamRow['cou_id']; 
                                                    $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$courseId' ");
                                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) {
                                                        echo $selCourseRow['cou_name'];
                                                    }
                                                ?>
                                            </td>
                                            <td>
                                            <?php 
                                                        if($selExamRow['ex_description'] ==  1 )
                                                        {
                                                          echo '<span style="color:green;">Đã mở</span>';
                                                        }
                                                        else{
                                                          echo '<span style="color:red;">Chưa mở</span>';

                                                        }
                                                        ?>
                                            </td>
                                            <td><?php echo $selExamRow['ex_questlimit_display']; ?></td>
                                            <td><?php echo $selExamRow['made']; ?></td>
                                            <td><?php echo $selExamRow['ex_created']; ?></td>
                                            <td class="text-center">
                                             <a href="manage-exam.php?id=<?php echo $selExamRow['ex_id']; ?>" type="button" class="btn btn-primary btn-sm">Xem chi tiết</a>
                                             <button type="button" id="deleteExam" data-id='<?php echo $selExamRow['ex_id']; ?>'  class="btn btn-danger btn-sm">Xóa</button>
                                            </td>
                                        </tr>

                                    <?php }
                                }
                                else
                                { ?>
                                    <tr>
                                      <td colspan="5">
                                        <h3 class="p-3">Không có bài kiểm tra</h3>
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
         
