<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                     <div class="page-title-heading">
                        <div style="font-size:25px;color:red;"> CHI TIẾT CÂU HỎI
                            
                        </div>
                    </div>
                </div>
            </div>        
            
           
           

                  <div class="col-md-12">
                    <?php 
                        $eqtId = $_GET['eqt_id'];
                        $selQuest = $conn->query("SELECT * FROM exam_question_tbl WHERE eqt_id='$eqtId'");
                    ?>
                     <div class="main-card mb-3 card">
                          <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>
                            
                             <div class="btn-actions-pane-right">
                                <button class="btn btn-sm btn-primary " data-toggle="modal" data-target="#modalForAddQuestion">Thêm câu hỏi</button>
                                <a style="background-color:green;" class="btn btn-sm btn-primary " href="home.php?page=questions">Quay trở về</a>
                                
                               
                                
                              </div>
                          </div>
                          <div class="card-body" >
                            <div class="scroll-area-sm" style="min-height: 400px;">
                               <div class="scrollbar-container">

                            <?php 
                               
                               if($selQuest->rowCount() > 0)
                               {  ?>
                                 <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                                        <thead>
                                        <tr>
                                            <th class="text-left pl-1">Câu hỏi</th>
                                            <!-- <th class="text-left pl-1">Chương</th> -->
                                            <th class="text-left pl-1">Mức độ</th>
                                            <th class="text-left pl-1">Ngày tạo</th>
                                            <th class="text-left pl-1">Trạng thái</th>
                                            <th class="text-center" width="20%">Tác vụ</th>
                                        </tr>
                                        </thead>
                                        <tbody id="myTableQ">
                                          <?php 
                                            
                                            if($selQuest->rowCount() > 0)
                                            {
                                               $i = 1;
                                               while ($selQuestionRow = $selQuest->fetch(PDO::FETCH_ASSOC)) { ?>
                                                <tr>
                                                        <td >
                                                            <b>  <?php echo $selQuestionRow['exam_question']; ?></b><br>
                                                            <?php 
                                                              // Choice A
                                                              if($selQuestionRow['exam_ch1'] == $selQuestionRow['exam_answer'])
                                                              { ?>
                                                                <span class="pl-4 text-success">A - <?php echo  $selQuestionRow['exam_ch1']; ?></span><br>
                                                              <?php }
                                                              else
                                                              { ?>
                                                                <span class="pl-4">A - <?php echo $selQuestionRow['exam_ch1']; ?></span><br>
                                                              <?php }

                                                              // Choice B
                                                              if($selQuestionRow['exam_ch2'] == $selQuestionRow['exam_answer'])
                                                              { ?>
                                                                <span class="pl-4 text-success">B - <?php echo $selQuestionRow['exam_ch2']; ?></span><br>
                                                              <?php }
                                                              else
                                                              { ?>
                                                                <span class="pl-4">B - <?php echo $selQuestionRow['exam_ch2']; ?></span><br>
                                                              <?php }

                                                              // Choice C
                                                              if($selQuestionRow['exam_ch3'] == $selQuestionRow['exam_answer'])
                                                              { ?>
                                                                <span class="pl-4 text-success">C - <?php echo $selQuestionRow['exam_ch3']; ?></span><br>
                                                              <?php }
                                                              else
                                                              { ?>
                                                                <span class="pl-4">C - <?php echo $selQuestionRow['exam_ch3']; ?></span><br>
                                                              <?php }

                                                              // Choice D
                                                              if($selQuestionRow['exam_ch4'] == $selQuestionRow['exam_answer'])
                                                              { ?>
                                                                <span class="pl-4 text-success">D - <?php echo $selQuestionRow['exam_ch4']; ?></span><br>
                                                              <?php }
                                                              else
                                                              { ?>
                                                                <span class="pl-4">D - <?php echo $selQuestionRow['exam_ch4']; ?></span><br>
                                                              <?php }

                                                             ?>
                                                            
                                                        </td>
                                                        
                                                        <td><?php echo $selQuestionRow['capdo']; ?></td>
                                                                <td><?php echo $selQuestionRow['exam_status']; ?></td>
                                                        <td style="font-weight:600"><?php 
                                                        if($selQuestionRow['trangthai'] ==  1 )
                                                        {
                                                          echo '<span style="color:green;">Đã phê duyệt</span>';
                                                        }
                                                        else{
                                                          echo '<span style="color:red;">Chờ xét duyệt</span>';

                                                        }
                                                        ?>
                                                        </td>
                                                        
                                                        <td class="text-center">
                                                         <a rel="facebox" href="facebox_modal/updateQuestion.php?id=<?php echo $selQuestionRow['eqt_id']; ?>" class="btn btn-sm btn-primary">Cập nhật</a>
                                                         <button type="button" id="deleteQuestion" data-id='<?php echo $selQuestionRow['eqt_id']; ?>'  class="btn btn-danger btn-sm">Xóa</button>
                                                         
                                                       
                             
                                                         
                                                          <!-- <button type="button" id="" data-id=''  class="btn btn-danger btn-sm">Duyet</button> -->
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
                               <?php }
                               else
                               { ?>
                                  <h4 class="text-primary">Mời bạn thêm câu hỏi</h4>
                                 <?php
                               }
                             ?>
                               </div>
                            </div>


                          </div>
                        
                      </div>
                  </div>
              </div>  
            </div> 
            </div>
               
            </div>