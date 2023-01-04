<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!-- Xuat file pdf -->
<script type="text/javascript">
$(document).ready(function($)
{
  $(document).on('click', '.btn_print', function(event)
  {
    event.preventDefault();
    var element = document.getElementById('content_pdf');
    html2pdf().set({filename: 'Danhsachketqua' + '.pdf'}).from(element).save();
    // var opt =
    // {
    //   margin: 1,
    //   filename: 'pageContent_'+'.pdf',
    //   image: { type: 'jpeg', quality: 0.98 },
    //   html2canvas: { scale: 2 },
    //   jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
    // };
    // html2pdf().set(opt).from(elenment).save();
  });
});
</script>

<div class="app-main__outer">

        <div class="app-main__inner" id="content_pdf">
            <?php 
                @$exam_id = $_GET['exam_id'];


                if($exam_id != "")
                {
                   $selEx = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$exam_id' ")->fetch(PDO::FETCH_ASSOC);
                   $exam_course = $selEx['cou_id'];
                   $exam_made = $selEx['made'];

                   

                   $selExmne = $conn->query("SELECT * FROM examinee_tbl et  WHERE exmne_course='$exam_course' AND examne_made='$exam_made' ");


                   ?>
                   <div class="app-page-title">
                    <div class="page-title-wrapper" style="justify-content:center;">
                        <div class="page-title-heading">
                            <div>
                            <div style="text-align:center;">
                            <b class="text-primary">KẾT QUẢ CHI TIẾT</b><br>
                                Tên bài thi : <?php echo $selEx['ex_title']; ?><br><br>
                            </div>
                               <span class="border" style="padding:10px;color:black;background-color: yellow;">Xuất sắc</span>
                               <span class="border" style="padding:10px;color:white;background-color: green;">Tốt</span>
                               <span class="border" style="padding:10px;color:white;background-color: #3939eb;">Khá</span>
                               <span class="border" style="padding:10px;color:black;background-color: #f56060;">Hỏng</span>
                               <span class="border" style="padding:10px;color:black;background-color: #E9ECEE;">Vắng</span>
                               <!-- <input type="text" name="" id="myInput" placeholder="Tìm kiếm thí sinh">
                               <input type="button" id="expdf" value="Xuất File (PDF) " class="btn btn-primary btn-sm btn_print"> -->
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="table-responsive" >
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                                <tr>
                                    <th>STT</th>
                                    <th width="25%">Họ Tên Thí Sinh</th>
                                    <th>Câu / Tổng</th>
                                    <th>Tỉ lệ</th>
                                    <th>Điểm/10</th>
                                    

                                </tr>
                            </thead>
                          <tbody id="myTable">
                            <?php 
                                $i=1;
                                while ($selExmneRow = $selExmne->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <?php 
                                            $exmneId = $selExmneRow['exmne_id'];
                                            $selScore = $conn->query("SELECT * FROM exam_question_tbl eqt INNER JOIN exam_answers ea ON eqt.eqt_id = ea.quest_id AND eqt.exam_answer = ea.exans_answer  WHERE ea.axmne_id='$exmneId' AND ea.exam_id='$exam_id' AND ea.exans_status='new' ORDER BY ea.exans_id DESC");

                                              $selAttempt = $conn->query("SELECT * FROM exam_attempt WHERE exmne_id='$exmneId' AND exam_id='$exam_id' ");

                                             $over = $selEx['ex_questlimit_display']  ;  
                                             @$tst = $selAttempt->rowCount();  
                                            

                                              @$score = $selScore->rowCount();
                                                @$ans = $score / $over * 100;
                                                @$ans10 = $score / $over * 10;
                                                // $k=0;
                                                @$k += $ans;
                                                // $s=0;
                                                @$s += $score;
                                                @$avgtb= $k / $i;


                                                
                                              

                                         ?>
                                       <tr style="<?php 
                                             if($selAttempt->rowCount() == 0)
                                             {
                                                echo "background-color: #E9ECEE;color:black";
                                             }
                                             else if($ans >= 90)
                                             {
                                                echo "background-color: yellow;";
                                             } 
                                             else if($ans >= 80){
                                                echo "background-color: green;color:white";
                                             }
                                             else if($ans >= 60){
                                              echo "background-color: blue;color:white";
                                             }

                                             else if($ans < 40){
                                                echo "background-color: #f56060;color:white";
                                             }
                                             else
                                             {
                                                echo "background-color: red;color:white";
                                             }
                                           
                                            
                                             ?>"
                                        >
                                        <td><?php echo $i++ ; ?></td>
                                        <td>

                                          <?php echo $selExmneRow['exmne_fullname']; ?>
                                        
                                        </td>
                                        
                                        <td >
                                        <?php 
                                          if($selAttempt->rowCount() == 0)
                                          {
                                            echo "Chưa hoàn thành";
                                          }
                                          else if($selScore->rowCount() > 0)
                                          {
                                            echo $totScore =  $selScore->rowCount();
                                            echo " / ";
                                            echo $over;
                                          }
                                          else
                                          {
                                            echo $totScore =  $selScore->rowCount();
                                            echo " / ";
                                            echo $over;
                                          }

                                            
                                            

                                         ?>
                                        </td>
                                        <td>
                                          <?php 
                                                if($selAttempt->rowCount() == 0)
                                                {
                                                  echo "Chưa hoàn thành";
                                                }
                                                else
                                                {
                                                    echo number_format($ans,2); ?>%<?php
                                                }
                                           
                                          ?>
                                        </td>
                                        <td>
                                        <?php 
                                                if($selAttempt->rowCount() == 0)
                                                {
                                                  echo "Chưa hoàn thành";
                                                }
                                                else
                                                {
                                                    echo number_format($ans10,2); ?> Điểm<?php
                                                }
                                           
                                          ?>
                                        </td>
                                       
                                    </tr>
                                    
                                                         
                       
                        <?php }
                             ?>  
                          </tbody>
                
                        </table>

                        <div style="text-align:center;margin-top:10px;color:blue;font-size:x-large;">
                        Điểm Trung Bình bài thi :
                        <span style="color:red;">
                        
                        <?php
                        echo number_format($avgtb,2); 
                        ?> %
                        </span>
                       

                        </div>
                           
                    </div>

<!-- Xuat file -->
            <div style="text-align:center;margin-top:30px;">
            <input type="text" name="" id="myInput" placeholder="Tìm kiếm thí sinh" style="line-height:1.9;">
            <input type="button" id="expdf" value="Xuất File (PDF) " class="btn-primary btn-sm btn_print">
            
            </div>
                   <?php
                }
                else
                { ?>

                <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div><b>DANH SÁCH QUẢN LÝ BÀI THI</b></div>
                    </div>
                </div>
                </div> 

                 <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">DANH SÁCH
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-left pl-4">Tên bài thi</th>
                                <th class="text-left ">Khóa học</th>
                                <th class="text-left ">Mã đề</th>
                                <th class="text-left ">Trạng thái</th>
                                <th class="text-center" width="8%">Quản lý</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php 
                                $selExam = $conn->query("SELECT * FROM exam_tbl ORDER BY ex_id DESC ");
                                if($selExam->rowCount() > 0)
                                {
                                    while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <tr>
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
                                            <td><?php echo $selExamRow['made']; ?></td>
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
                                            <td class="text-center">
                                             <a href="?page=ranking-exam&exam_id=<?php echo $selExamRow['ex_id']; ?>"  class="btn btn-success btn-sm">View</a>
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
                    
                <?php }

             ?>      
            
          
        
</div>
         


















