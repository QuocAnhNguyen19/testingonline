<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
body {
  
  /* font-family: cursive; */
}

.glow {
  margin-bottom:30px;
  margin-right:60px;
  font-size: 80px;
  color: #fff;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}


@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  }
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
       

    
</style>

<style>
  .body{
        position: relative;
        height: 100%;

      }

      .body{
        /* background: #eee; */
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        margin-top:50px;
        padding-right: 60px;
      }

      .swiper {
        width: 900px;
        height: 300px;
        padding: 0 !important;
        
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide a img {
        display: inline-block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
</style>

<div class="app-main__outer">
    <div id="refreshData" style="background-color:#ffffff;magin-left:48px;">
    <marquee style="margin-top: 5px;color: blue;font-size: larger;font-weight: 500;">Chào mừng bạn đến với WEBSITE kiểm tra trực tuyến!</marquee>
    </div>
     <!-- sliderfooter -->
    <div class="body_slidee" style="">
     <div class="slider" >
        <div class="slides">
          <input type="radio" name="radio_btn" id="radio_1">
          <input type="radio" name="radio_btn" id="radio_2">
          <input type="radio" name="radio_btn" id="radio_3">
          <input type="radio" name="radio_btn" id="radio_4">
<!--  -->
         
          <div class="slide mot">
            <img src="./assets/images/slide_1.jpg" alt="">
          </div>
          <div class="slide ">
            <img src="./assets/images/slode_3.jpg" alt="">
          </div>
          <div class="slide ">
            <img src="./assets/images/slide_0.jpg" alt="">
          </div>
          <div class="slide ">
            <img src="./assets/images/slide_2.jpg" alt="">
          </div>

          <div class="navigation_auto">
              <div class="auto_btn1"></div>
              <div class="auto_btn2"></div>
              <div class="auto_btn3"></div>
              <div class="auto_btn4"></div>
          </div>
        </div>
        <div class="nav_manual">
          <label for="radio_1" class="manual-btn"></label>
          <label for="radio_2" class="manual-btn"></label>
          <label for="radio_3" class="manual-btn"></label>
          <label for="radio_4" class="manual-btn"></label>
        </div>
     </div>

     
    

             

     <script type="text/javascript">
     var counter1 = 1;
     setInterval(function(){
       document.getElementById('radio_' + counter1).checked = true;
       counter1 ++;
       if(counter1 > 4 ){
         counter1 = 1;
       } 
     },4000);
       
     </script>
   

    
        </div>
  <!-- <div style="font-size:large;margin:50px 0;">
    CÁC KHÓA HỌC NỔI BẬT
  </div> -->


  <div class="body">
  
    <!-- <div class="swiper mySwiper">
    
      <div class="swiper-wrapper">
        <div class="swiper-slide">
        <a href=""><img style="height:100%;width:100%" src="https://tailieuchung.com/2015_anh/201601/20160130/doinhugiobay_14/ba_i_gia_ng_phan_ti_ch_thie_t_ke_thua_t_toa_nchuong_4_gt_5136.png" alt=""></a>
        </div>
        <div class="swiper-slide">
        <a target="blank" href="./assets/images/CHSV_NgaNam_ThanhTri_MyXuyen.pdf"><img style="height:100%;width:100%" src="https://tailieuchung.com/2015_anh/201601/20160130/doinhugiobay_14/ba_i_gia_ng_phan_ti_ch_thie_t_ke_thua_t_toa_nchuong_4_gt_5136.png" alt=""></a>
      </div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div> -->
    
    
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
    <div style="text-align:center;margin-top:30px;">CÁC KHÓA HỌC HIỆN CÓ SẲN TRÊN HỆ THỐNG
    <div class="main-card mb-3 card">
                    <div class="card-header">
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                
                                <th>Tên Khóa Học</th>
                                <th>Giáo viên giảng dạy</th>
                              
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
                                            <a target="blank" href="./assets/images/CHSV_NgaNam_ThanhTri_MyXuyen.pdf"  class="btn btn-success btn-sm">THAM KHẢO TÀI LIỆU </a>
                                           
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
    <div id="calendar"></div>
  </div>
</div>
<style>
.fc-title{
  font-size: 20px;
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
  var calendarEl = document.getElementById("calendar");
  var calendar = new FullCalendar.Calendar(calendarEl, {
    /*plugins and theming*/
    locale: "en-gb",
    plugins: ["dayGrid", "timeGrid"],
    defaultView: "timeGridWeek",
    eventTextColor: "#fff",
    eventBorderColor: "#000",

    /*header*/
    header: {
      left: "prevYear,prev,next,nextYear today",
      center: " ",
      right: "timeGridWeek,timeGridDay"
    },
    buttonText: {
      today: "Today",
      week: "Week",
      day: "Day"
    },

    /*custom properties of GridView*/
    nowIndicator: "true", //indicator of current time
    minTime: "08:00:00", //start time
    maxTime: "19:00:00", //end time
    slotLabelFormat: {
      hour: "numeric",
      minute: "2-digit",
      omitZeroMinute: false,
      meridiem: ""
    }, //side time labels
    contentHeight: "auto", //resizes table to fit any screen
    navLinks: "true", //links any date to day view
    weekends: false,
    eventLimit: true,
    slotEventOverlap: true,
    views: {
      timeGrid: {
        eventLimit: 5
      }
    },

    /*events go here*/
    events: [
      {
        id: "1",
        title: "Test Event",
        start: "2020-03-10T10:30:00",
        end: "2020-03-10T11:30:00"
      },
      {
        id: "1",
        title: "Test Event",
        start: "2020-03-11T10:30:00",
        end: "2020-03-11T11:30:00"
      }
    ]
  });
  calendar.render();
  myDatepicker();

  function myDatepicker() {
    $(".fc-center").append('<input type="text" id="datepicker"></input>');
    $(function() {
      $("#datepicker").datepicker({
        showOn: "both",
        showOptions: {
          direction: "down"
        },
        autoSize: true,
        buttonImage:
          "https://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
        buttonText: "Select date...",
        changeMonth: true,
        changeYear: true,
        dateFormat: "DD, d MM yy",
        firstDay: 1,
        showOtherMonths: true,
        selectOtherMonths: true,

        onSelect: function(formated, dates) {
          var newDate = $.datepicker.formatDate("yy-mm-dd", formated);
          alert(newDate);
          calendar.gotoDate(newDate);
          console.log("running function select");
          myDatepicker();
        }
      });
      $("#datepicker").datepicker("setDate", "+0d");
    });
  }
});
</script>

    
    


<!-- Initialize Swiper -->







       
      
       


       
        