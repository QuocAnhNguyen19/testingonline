<script type="text/javascript">
  window.onunload = function() {
    null;
  }
</script>
<script type="text/javascript" >
   function preventBack(){window.history.forward();}
    setTimeout("preventBack()", 0);
    window.onunload=function(){null};
</script>
 <?php 
    $examId = $_GET['id'];
    $selExam = $conn->query("SELECT * FROM exam_tbl WHERE ex_id='$examId' ")->fetch(PDO::FETCH_ASSOC);
    $selExamTimeLimit = $selExam['ex_time_limit'];
    $exDisplayLimit = $selExam['ex_questlimit_display'];
    $exDisplayLimitde = $selExam['socaude'];
    $exDisplayLimittb = $selExam['socautb'];
    $exDisplayLimitkho = $selExam['socaukho'];

 ?>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="app-main__outer" >
<div class="app-main__inner" style="font-size:large">
    <div class="col-md-12">
         <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div style="color:red;font-size:25px;text-transform: uppercase;">
                            <?php echo $selExam['ex_title']; ?>
                            <div style="color:blue;" class="page-title-subheading">
                              <?php echo $selExam['ex_description']; ?>
                            </div>
                            <div style="color:blue;" class="page-title-subheading">
                           <b style="color:black;"> Mã đề :</b> <?php echo $selExam['made']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions mr-5" style="font-size: 20px;">
                        <form name="cd">
                          <input type="hidden" name="a" id="timeExamLimit" value="<?php echo $selExamTimeLimit; ?>">
                          <label>Thời gian : </label>
                          <input style="border:none;background-color: transparent;color:blue;font-size: 25px;" name="disp" type="text" class="clock" id="txt" value="00:00" size="5" readonly="true" />
                          <p id="demo"></p>
                      </form> 
                    </div>   
                 </div>
            </div>  
    </div>
    <!--  -->
<script>
var elem = document.documentElement;
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}

function closeFullscreen() {
  if (document.exitFullscreen) {
    document.exitFullscreen();
  } else if (document.webkitExitFullscreen) { /* Safari */
    document.webkitExitFullscreen();
  } else if (document.msExitFullscreen) { /* IE11 */
    document.msExitFullscreen();
  }
}
</script>


<!-- Display the countdown timer in an element -->
<p id="demo"></p>

<!-- <script>
// Set the date we're counting down to
var timelm = document.getElementById("timeExamLimit").value;

var countDownDate = new Date("Dec 5, 2023 23:59:00").getTime();
console.log(countDownDate);
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script> -->



    <div class="col-md-12 p-0 mb-4" >
        <form method="post" id="submitAnswerFrm">
            <input type="hidden" name="exam_id" id="exam_id" value="<?php echo $examId; ?>">
            <input type="hidden" name="examAction" id="examAction" >
        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
 <!-- lấy số câu hỏi dễ -->
        <?php 
            // $selQuest = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' ORDER BY rand() LIMIT $exDisplayLimit ");
            $selQuestde = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' AND capdo = 'Dễ' AND trangthai='1'  LIMIT $exDisplayLimitde ");
            // $selQuesttb =$conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' AND capdo = 'Trung Bình' ORDER BY rand() LIMIT $exDisplayLimittb ");
            // $selQuestkho = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' AND capdo = 'Khó' ORDER BY rand() LIMIT $exDisplayLimitkho ");
            

            if($selQuestde->rowCount() > 0)
            {
                $i = 1;
                while ($selQuestRow = $selQuestde->fetch(PDO::FETCH_ASSOC)) { ?>
                <?php $questId = $selQuestRow['eqt_id']; ?>
                    <tr>
                        <td style="border-bottom:0.2px solid red;">
                        <!-- <div class="star-rating">
                        <input type="checkbox" name="rate" id="rate-5" style="position: absolute;left: 29px;top: 30px;display:none;">
                        <label for="rate-5" class="fas fa-flag" style="font-style: italic;font-size: 20px;">
                        Flag for question
                        </label>
                        
                        
                        </div> -->
                         <p><b> <b style="color:blue;"> Câu <?php echo $i++ ; ?>) </b> <?php echo $selQuestRow['exam_question']; ?></b></p>
                            <div class="col-md-4 float-left">
                              <div class="form-group pl-4 ">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch1']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch1']; ?>
                                </label>
                              </div>  

                              <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch2']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch2']; ?>
                                </label>
                              </div>   
                            </div>
                            <div class="col-md-8 float-left">
                             <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch3']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch3']; ?>
                                </label>
                              </div>  

                              <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch4']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch4']; ?>
                                </label>
                              </div>   
                            </div>
                            </div>
                             

                        </td>
                    </tr>
                
                    

                <?php }
                ?>
                
                
                     

                <?php
            }
            
             ?>
<!-- lấy số câu hỏi trung bình -->
        <?php 
            // $selQuest = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' ORDER BY rand() LIMIT $exDisplayLimit ");
            // $selQuestde = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' AND capdo = 'Dễ'  ORDER BY rand() LIMIT $exDisplayLimitde ");
            $selQuesttb =$conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' AND capdo = 'Trung Bình' AND trangthai='1'  LIMIT $exDisplayLimittb ");
            // $selQuestkho = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' AND capdo = 'Khó' ORDER BY rand() LIMIT $exDisplayLimitkho ");
            

            if($selQuesttb->rowCount() > 0)
            {
                // $i = 1;
                while ($selQuestRow = $selQuesttb->fetch(PDO::FETCH_ASSOC)) { ?>
                <?php $questId = $selQuestRow['eqt_id']; ?>
                    <tr>
                        <!-- <div class="star-rating">
                        <input type="checkbox" name="rate-5" id="rate-5" style="position: absolute;left: 29px;top: 30px;display:none;">
                        <label for="rate-5" class="fas fa-flag" style="font-style: italic;font-size: 20px;">
                        Flag for question
                        </label>
                        
                        
                        </div> -->
                        <td style="border-bottom:0.5px solid red;">
                         <p><b> <b style="color:blue;"> Câu <?php echo $i++ ; ?>) </b> <?php echo $selQuestRow['exam_question']; ?></b></p>
                            <div class="col-md-4 float-left">
                              <div class="form-group pl-4 ">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch1']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch1']; ?>
                                </label>
                              </div>  

                              <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch2']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch2']; ?>
                                </label>
                              </div>   
                            </div>
                            <div class="col-md-8 float-left">
                             <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch3']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch3']; ?>
                                </label>
                              </div>  

                              <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch4']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch4']; ?>
                                </label>
                              </div>   
                            </div>
                            </div>
                             

                        </td>
                    </tr>
                
                    

                <?php }
                ?>
                
                
                     

                <?php
            }
            
             ?>
                
         
<!-- lấy số câu hỏi khó -->
         <?php 
            // $selQuest = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' ORDER BY rand() LIMIT $exDisplayLimit ");
            // $selQuestde = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' AND capdo = 'Dễ'  ORDER BY rand() LIMIT $exDisplayLimitde ");
            // $selQuesttb =$conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' AND capdo = 'Trung Bình' ORDER BY rand() LIMIT $exDisplayLimittb ");
            $selQuestkho = $conn->query("SELECT * FROM exam_question_tbl WHERE exam_id='$examId' AND capdo = 'Khó' AND trangthai='1' ORDER BY rand() LIMIT $exDisplayLimitkho ");
            

            if($selQuestkho->rowCount() > 0)
            {
                // $i = 1;
                while ($selQuestRow = $selQuestkho->fetch(PDO::FETCH_ASSOC)) { ?>
                <?php $questId = $selQuestRow['eqt_id']; ?>
                    <tr>
                        <td style="border-bottom:0.5px solid red;">
                        <!-- <div class="star-rating">
                        <input type="checkbox" name="rate" id="rate-5" style="position: absolute;left: 29px;top: 30px;display:none;">
                        <label for="rate-5" class="fas fa-flag" style="font-style: italic;font-size: 20px;">
                        Flag for question
                        </label>
                        
                        
                        </div> -->
                         <p><b> <b style="color:blue;"> Câu <?php echo $i++ ; ?>) </b> <?php echo $selQuestRow['exam_question']; ?></b></p>
                            <div class="col-md-4 float-left">
                              <div class="form-group pl-4 ">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch1']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch1']; ?>
                                </label>
                              </div>  

                              <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch2']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch2']; ?>
                                </label>
                              </div>   
                            </div>
                            <div class="col-md-8 float-left">
                             <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch3']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch3']; ?>
                                </label>
                              </div>  

                              <div class="form-group pl-4">
                                <input name="answer[<?php echo $questId; ?>][correct]" value="<?php echo $selQuestRow['exam_ch4']; ?>" class="form-check-input" type="radio" value="" id="invalidCheck" required >
                               
                                <label class="form-check-label" for="invalidCheck">
                                    <?php echo $selQuestRow['exam_ch4']; ?>
                                </label>
                              </div>   
                            </div>
                            </div>
                             

                        </td>
                    </tr>
                
                <?php }
                ?>
                  

                
                
                  <tr>
                        <td style="padding: 20px;">
                            <button type="button" class="btn btn-xlg btn-warning p-3 pl-4 pr-4" id="resetExamFrm">Bỏ chọn đáp án</button>
                            <input name="submit" type="submit" value="Kết thúc và nộp bài" class="btn btn-xlg btn-primary p-3 pl-4 pr-4 float-right" id="submitAnswerFrmBtn">
                        </td>
                    </tr>

                <?php
            }
            else
            { ?>
                <b>No question at this moment</b>
            <?php }
         ?>   
         
              </table>

        </form>
    </div>
</div>
 
