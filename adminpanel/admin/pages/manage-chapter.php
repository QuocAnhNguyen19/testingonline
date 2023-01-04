<link rel="stylesheet" type="text/css" href="css/mycss.css">

<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>THÔNG TIN KHÓA HỌC</div>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">CHI TIẾT KHÓA HỌC
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                
                                <th>Tên Khóa Học</th>
                                <th>Giáo viên giảng dạy</th>
                                <th>Ngày khởi tạo</th>
                                <!-- <th>File</th> -->
                                <th>Thao tác</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $selCourse = $conn->query("SELECT * FROM course_tbl ORDER BY cou_id DESC ");
                                if($selCourse->rowCount() > 0)
                                {
                                    while ($selCourseRow = $selCourse->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            <td class="pl-4">
                                                <?php echo $selCourseRow['cou_name']; ?>
                                            </td>
                                            <td >
                                                <?php echo $selCourseRow['cou_author']; ?>
                                            </td>
                                            <td >
                                                <?php echo $selCourseRow['cou_created']; ?>
                                            </td>
                                           
                                            
                                            <td >
                                            <!-- <a target="blank" href="./assets/images/PDF_1.pdf"  class="btn btn-success btn-sm">Xem đề cương</a> -->
                                            <a rel="facebox" style="text-decoration: none;" class="btn btn-primary btn-sm" href="facebox_modal/updateCourse.php?id=<?php echo $selCourseRow['cou_id']; ?>" id="updateCourse">Cập nhật</a>
                                             <button type="button" id="deleteCourse" data-id='<?php echo $selCourseRow['cou_id']; ?>'  class="btn btn-danger btn-sm">Xóa</button>
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
         
