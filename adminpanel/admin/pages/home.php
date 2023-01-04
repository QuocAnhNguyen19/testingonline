<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script	src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>

<div class="app-main__outer">
    <div id="refreshData">
    <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-car icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div style="font-size:30px;">CÁC THỐNG KÊ CƠ BẢN
                            <div class="page-title-subheading" style="font-weight:500;">Dữ liệu được thu thập từ trang quản lý.
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                        <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
                        <div class="d-inline-block dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                Buttons
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-inbox"></i>
                                            <span>
                                                Inbox
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-book"></i>
                                            <span>
                                                Book
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-picture"></i>
                                            <span>
                                                Picture
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a disabled href="javascript:void(0);" class="nav-link disabled">
                                            <i class="nav-link-icon lnr-file-empty"></i>
                                            <span>
                                                File Disabled
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>   
                 </div>
            </div>            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Các khóa học hiện có</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selCourse['totCourse']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Các bài kiểm tra hiện có</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                    <span><?php echo $totalCourse = $selExam['totExam']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Các thí sinh hiện có</div>
                                <div class="widget-subheading" style="color:transparent;">.</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white">
                                <span><?php echo $totalExmne = $selExmne2['totExmne']; ?></span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-premium-dark">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Products Sold</div>
                                <div class="widget-subheading">Revenue streams</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-warning"><span>$14M</span></div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <div id="calendar"></div>
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
            <!-- <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Total Orders</div>
                                    <div class="widget-subheading">Last year expenses</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">1896</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Products Sold</div>
                                    <div class="widget-subheading">Revenue streams</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-warning">$3M</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Followers</div>
                                    <div class="widget-subheading">People Interested</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-danger">45,9%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Income</div>
                                    <div class="widget-subheading">Expected totals</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-focus">$147</div>
                                </div>
                            </div>
                            <div class="widget-progress-wrapper">
                                <div class="progress-bar-sm progress-bar-animated-alt progress">
                                    <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                </div>
                                <div class="progress-sub-label">
                                    <div class="sub-label-left">Expenses</div>
                                    <div class="sub-label-right">100%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

             <?php include("includes/graph.php"); ?> 
      
        
        </div>
         
    </div>
    
