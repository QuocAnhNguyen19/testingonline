

<link rel="stylesheet" type="text/css" href="css/mycss.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInputQuestion").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTableQuestion tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>NGÂN HÀNG CÂU HỎI</div>
                    </div>
                </div>
            </div>        
                    <?php 
                        $selQuest22 = $conn->query("SELECT * FROM exam_question_tbl WHERE trangthai='1'");
                    ?>
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">DANH SÁCH CÂU HỎI
                          <span class="badge badge-pill badge-primary ml-2">
                              <?php echo $selQuest22->rowCount(); ?>
                            </span>
                    
                         <div class="btn-actions-pane-right" style="margin-right:3px;:">
                                <button class="btn btn-sm btn-primary " data-toggle="modal" data-target="#modalForAddQuestion">Thêm Thủ Công</button>
                        </div>
                        <input type="text" name="" id="myInputQuestion" placeholder="Tìm kiếm câu hỏi" style="line-height:1.9;">

                    </div>
                  
                    
                    
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                            
                                <th>STT</th>
                                <th>Câu hỏi</th>
                                <!-- <th>Chương</th> -->
                                <th>Khóa học</th>
                                <!-- <th>Độ khó</th> -->
                                <th>Trạng thái</th>
                                <th>Tác vụ</th>
                               
                            </tr>
                            </thead>
                            <tbody id="myTableQuestion">
                            <?php 
                                $selQuestion = $conn->query("SELECT * FROM exam_question_tbl ORDER BY exam_id ASC ");
                                if($selQuestion->rowCount() > 0)
                                {
                                    $k=1;
                                    while ($selQuestionRow = $selQuestion->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
                                            
                                            <td><?php echo $k++ ; ?></td>
                                            <td class="" style="color:black;font-weight:700;">
                                                <?php echo $selQuestionRow['exam_question']; ?>
                                               
                                            </td>
                                            <td>
                                            <?php 
                                                 $QsCourse = $selQuestionRow['cou_qs'];
                                                 $selCourse = $conn->query("SELECT * FROM course_tbl WHERE cou_id='$QsCourse' ")->fetch(PDO::FETCH_ASSOC);
                                                 echo $selCourse['cou_name'];
                                             ?>
                                            </td>
                                            <td style="font-weight:600"><?php 
                                                        if($selQuestionRow['trangthai'] ==  1 )
                                                        {
                                                          echo '<span style="color:green;">Đã xét duyệt</span>';
                                                        }
                                                        else{
                                                          echo '<span style="color:red;">Chờ xét duyệt</span>';

                                                        }
                                                        ?>
                                            </td>
                                         
                                           
                                           
                                            <td >
                                            <a href="?page=detailQuestion&eqt_id=<?php echo $selQuestionRow['eqt_id']; ?>"  class="btn btn-success btn-sm">Xem chi tiết</a>
                                            <!-- <a rel="facebox" style="text-decoration: none;" class="btn btn-primary btn-sm" href="facebox_modal/updateCourse.php?id=<?php echo $selQuestionRow['exam_id']; ?>" id="updateCourse">Cập nhật</a> -->
                                            
                                              
                                             <button type="button" id="deleteQuestion" data-id='<?php echo $selQuestionRow['eqt_id']; ?>'  class="btn btn-danger btn-sm">Xóa</button></br> 
                                             <?php
                                                          $adminId = $_SESSION['admin']['admin_id'];
                                                          $seladminData = $conn->query("SELECT * FROM admin_acc WHERE admin_id='$adminId' ")->fetch(PDO::FETCH_ASSOC); 
                                                          $a_id = $selQuestionRow['eqt_id'];
                                                        
                                                          if($seladminData['admin_law'] == 1){

                                                           echo "<button style='' type='button' id='duyetQuestion' data-id='$a_id' class='btn btn-primary btn-sm'>Phê Duyệt</button>";
                                                         }
                                                         ?>
                                            
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
         
