<form class="refreshFrm" id="addFeebacks" method="post">
     <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nhập mật khẩu để ghi danh và lấy đề</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" name="pass" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submitpass" class="btn btn-primary">Add Now</button>
    
      </div>
    </div>
   </form>
   // Admin Log in
$(document).on("submit","#adminLoginFrm", function(){
   $.post("query/loginExe.php", $(this).serialize(), function(data){
      if(data.res == "invalid")
      {
        Swal.fire(
          'Invalid',
          'Vui lòng nhập thông tin/Mật khẩu',
          'error'
        )
      }
      else if(data.res == "success")
      {
        $('body').fadeOut();
        window.location.href='home.php';
      }
   },'json');

   return false;
});

// Update Account
$(document).on("submit","#updateAccount" , function(){
  $.post("query/update_account.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            'Cập nhật thành công Tài Khoản!',
            'success'
          )
          refreshDiv();
     }
  },'json')
  return false;
});

// Add Course 
$(document).on("submit","#addCourseFrm" , function(){
  $.post("query/addCourseExe.php", $(this).serialize() , function(data){
  	if(data.res == "exist")
  	{
  		Swal.fire(
  			'Already Exist',
  			data.course_name.toUpperCase() + ' Already Exist',
  			'error'
  		)
  	}
  	else if(data.res == "success")
  	{
  		Swal.fire(
  			'Success',
  			data.course_name.toUpperCase() + ' Thêm thành công',
  			'success'
  		)
      // $('#course_name').val("");
      refreshDiv();
      setTimeout(function(){ 
                $('#body').load(document.URL);
             },1500);
  	}
  },'json')
  return false;
});

// thong bao
$(document).on("submit","#addFileFrm" , function(){
  $.post("query/addFile.php", $(this).serialize() , function(data){
  	if(data.res == "failed")
  	{
  		Swal.fire(
  			'Already Exist',
  		 ' Already Exist',
  			'error'
  		)
  	}
  	else if(data.res == "success")
  	{
  		Swal.fire(
  			'Success',
  			' Thêm thành công',
  			'success'
  		)
      // $('#course_name').val("");
      refreshDiv();
      // setTimeout(function(){ 
      //           $('#body').load(document.URL);
      //        },1500);
  	}
  },'json')
  return false;
});

// xoa thong bao
$(document).on("click", "#delete_file", function(e){
  e.preventDefault();
  var id = $(this).data("id");
   $.ajax({
    type : "post",
    url : "query/delete_file.php",
    dataType : "json",  
    data : {id:id},
    cache : false,
    success : function(data){
      if(data.res == "success")
      {
        Swal.fire(
          'Success',
          'Xóa thành công thông báo',
          'success'
        )
        refreshDiv();
      //   setTimeout(function(){ 
      //     $('#body').load(document.URL);
      //  },1000);
      }
    },
    error : function(xhr, ErrorStatus, error){
      console.log(status.error);
    }

  });
  
 

  return false;
});

// Update Course
$(document).on("submit","#updateCourseFrm" , function(){
  $.post("query/updateCourseExe.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            'Cập nhật thành công khóa học!',
            'success'
          )
          refreshDiv();
          setTimeout(function(){ 
            $('#body').load(document.URL);
         },1000);
     }
  },'json')
  return false;
});


// Delete Course
$(document).on("click", "#deleteCourse", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteCourseExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Xóa thành công khóa học',
            'success'
          )
          refreshDiv();
        //   setTimeout(function(){ 
        //     $('#body').load(document.URL);
        //  },1000);
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    
   

    return false;
  });
// delete student
$(document).on("click", "#deletestudent", function(e){
  e.preventDefault();
  var id = $(this).data("id");
   $.ajax({
    type : "post",
    url : "query/deletestudent.php",
    dataType : "json",  
    data : {id:id},
    cache : false,
    success : function(data){
      if(data.res == "success")
      {
        Swal.fire(
          'Success',
          'Xóa thành công thí sinh !',
          'success'
        )
        refreshDiv();
      }
    },
    error : function(xhr, ErrorStatus, error){
      console.log(status.error);
    }

  });
  
 

  return false;
});

// Delete Exam
$(document).on("click", "#deleteExam", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteExamExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Xóa thành công bài thi !',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    
   

    return false;
  });



// Add Exam 
$(document).on("submit","#addExamFrm" , function(){
  $.post("query/addExamExe.php", $(this).serialize() , function(data){
    if(data.res == "noSelectedCourse")
   {
      Swal.fire(
          'No Course',
          'Vui lòng nhập khóa học',
          'error'
       )
    }
    if(data.res == "QuestLimit")
    {
       Swal.fire(
           'No Time Limit',
           'Vui lòng nhập thời gian thi',
           'error'
        )
     }
    if(data.res == "noSelectedTime")
   {
      Swal.fire(
          'No Time Limit',
          'Vui lòng nhập thời gian thi',
          'error'
       )
    }
    if(data.res == "noDisplayLimit")
   {
      Swal.fire(
          'No Display Limit',
          'Vui lòng nhập số câu hỏi',
          'error'
       )
    }

     else if(data.res == "exist")
    {
      Swal.fire(
        'Already Exist',
        data.examTitle.toUpperCase() + '<br>Đã xảy ra lỗi',
        'error'
      )
    }
    else if(data.res == "success")
    {
      Swal.fire(
        'Success',
        data.examTitle.toUpperCase() + '<br>Thêm Thành Công',
        'success'
      )
          $('#addExamFrm')[0].reset();
          $('#course_name').val("");
          refreshDiv();
    }
  },'json')
  return false;
});



// Update Exam 
$(document).on("submit","#updateExamFrm" , function(){
  $.post("query/updateExamExe.php", $(this).serialize() , function(data){
    if(data.res == "success")
    {
      Swal.fire(
          'Cập nhật thành công',
          data.msg + ' <br>Đã cập nhật',
          'success'
       )
          refreshDiv();
    }
    else if(data.res == "failed")
    {
      Swal.fire(
        "Something's went wrong!",
         'Somethings went wrong',
        'error'
      )
    }
   
  },'json')
  return false;
});

// add Exam page 
$(document).on("submit","#updatemademoiExamFrm" , function(){
  $.post("query/updatemademoiExamExe.php", $(this).serialize() , function(data){
    if(data.res == "noSelectedCourse")
    {
       Swal.fire(
           'No Course',
           'Vui lòng nhập khóa học',
           'error'
        )
     }
     if(data.res == "noSelectedTime")
    {
       Swal.fire(
           'No Time Limit',
           'Vui lòng nhập thời gian thi',
           'error'
        )
     }
    if(data.res == "success")
    {
      Swal.fire(
          'Cập nhật thành công',
          data.msg + ' <br>Đã cập nhật mã đề mới',
          'success'
       )
          refreshDiv();
    }
    else if(data.res == "failed")
    {
      Swal.fire(
        "Something's went wrong!",
         'Somethings went wrong',
        'error'
      )
    }
   
  },'json')
  return false;
});

// Update Question
$(document).on("submit","#updateQuestionFrm" , function(){
  $.post("query/updateQuestionExe.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            'Cập nhật câu hỏi thành công !',
            'success'
          )
          refreshDiv();
     }
  },'json')
  return false;
});


// Delete Question
$(document).on("click", "#deleteQuestion", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/deleteQuestionExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Deleted Success',
            'Xóa câu hỏi thành công !',
            'success'
          )
          refreshDiv();
          setTimeout(function(){ 
            $('#body').load(document.URL);
         },1000);
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    
   

    return false;
  });
// Duyet cau hoi
  $(document).on("click", "#duyetQuestion", function(e){
    e.preventDefault();
    var id = $(this).data("id");
     $.ajax({
      type : "post",
      url : "query/duyetQuestionExe.php",
      dataType : "json",  
      data : {id:id},
      cache : false,
      
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Duyệt câu hỏi thành công !',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    
   

    return false;
  });

  // Duyet thi sinh

  $(document).on("click", "#duyetexaminee", function(e){
    e.preventDefault();
    var id = $(this).data("id");
    let examQuestMade = $('#examQuestMade').val(); 
    let courseIdex = $('#courseIdex').val(); 
     $.ajax({
      type : "post",
      url : "query/duyetexaminee.php",
      dataType : "json",  
      data : {
        id:id,
        courseIdex:courseIdex,
        examQuestMade:examQuestMade,
      },
      cache : false,
      
      success : function(data){
        if(data.res == "success")
        {
          Swal.fire(
            'Success',
            'Thêm thành công thí sinh !',
            'success'
          )
          refreshDiv();
        }
      },
      error : function(xhr, ErrorStatus, error){
        console.log(status.error);
      }

    });
    
   

    return false;
  });
// duyet de thi
$(document).on("click", "#duyetdethi", function(e){
  e.preventDefault();
  var id = $(this).data("id");
   $.ajax({
    type : "post",
    url : "query/duyetdethi.php",
    dataType : "json",  
    data : {
      id:id 
    },
    cache : false,
    
    success : function(data){
      if(data.res == "success")
      {
        Swal.fire(
          'Success',
          'Mở đề thi thành công !',
          'success'
        )
        refreshDiv();
      }
    },
    error : function(xhr, ErrorStatus, error){
      console.log(status.error);
    }

  });
  
 

  return false;
});


// Add Question 
$(document).on("submit", "#addQuestionFrm", function(e){
  e.preventDefault();
  var id = $(this).data("id");
  let examId = $('#examId').val(); 
  let question = $('#question').val(); 
  let course_qs = $('#course_qs').val(); 
  let capdo_qs = $('#capdo_qs').val(); 
  let option_A = $('#choice_A').val();
  let option_B = $('#choice_B').val();
  let option_C = $('#choice_C').val();
  let option_D = $('#choice_D').val();
  let answer = $('#rdOptionA').is(':checked')?$('#choice_A').val():$('#rdOptionB').is(':checked')?$('#choice_B').val():$('#rdOptionC').is(':checked')?$('#choice_C').val():$('#rdOptionD').is(':checked')?$('#choice_D').val():'';
   $.ajax({
    type : "post",
    url : "query/addQuestionExe.php",
    dataType : "json",  
    data : {
      id:id,
      examId:examId,
      question:question,
      course_qs:course_qs,
      capdo_qs:capdo_qs,
      option_A:option_A,
      option_B:option_B,
      option_C:option_C,
      option_D:option_D,
      answer:answer,
    },
    cache : false,
    
    success : function(data){
      if(data.res == "success")
      {
        Swal.fire(
          'Success',
          'Thêm thành công câu hỏi !',
          'success'
        )
        refreshDiv();
      }
    //   setTimeout(function(){ 
    //     $('#body').load(document.URL);
    //  },1500);
    },
    error : function(xhr, ErrorStatus, error){
      console.log(status.error);
    }

  });
  
 

  return false;
});
// $(document).on("submit","#addQuestionFrm" , function(){
//   $.post("query/addQuestionExe.php", $(this).serialize() , function(data){
    
//     if(data.res == "exist")
//     {
//       Swal.fire(
//           'Already Exist',
//           data.msg + ' question <br>already exist in this exam',
//           'error'
//        )
//     }
//     else if(data.res == "success")
//     {
//       Swal.fire(
//         'Success',
//          data.msg + ' <br>Thêm Thành Công câu hỏi',
//         'success'
//       )
//         $('#addQuestionFrm')[0].reset();
//         refreshDiv();
//     }
   
//   },'json')
//   return false;
// });


// Add Examinee

// $(function () {
//   var citiesByState = 
//     $('select[name=course]').change(function(){
//       var selectedCountry = $(this).children("option:selected").val();
//       alert("You have selected the country - " + selectedCountry);
     
//   });
      
  

//   $('select[name=course]').change(function () {
//       var cities = citiesByState[$(this).val()];
//       var opts = $.map(cities, function(name) {
//           return "<option>" + name + "</option>";
//       });
//       $('select[name=exmne_made]').html(opts.join(""));
//   });
// });
$(document).ready(function(){
  $("#course").change(function(){
    var id = $("#course").val();
    $.post("query/dataMD.php", {id: id}, function(data){
      $("#exmne_made").html(data);
    })
  })
});

// Cập nhật số câu hỏi theo Khóa học
$(document).ready(function(){
  $("#course_exam").change(function(){
    var id = $("#course_exam").val();
    $.post("query/data_cou+ques1.php", {id: id}, function(data){
      $("#examQuestde").html(data);
    });
  });
});

$(document).ready(function(){
  $("#course_exam").change(function(){
    var id = $("#course_exam").val();
    $.post("query/data_cou+ques.php", {id: id}, function(data){
      $("#examQuesttb").html(data);
    });
  });
});
$(document).ready(function(){
  $("#course_exam").change(function(){
    var id = $("#course_exam").val();
    $.post("query/data_cou+ques2.php", {id: id}, function(data){
      $("#examQuestKho").html(data);
    });
  });
});
// add thi sinh
$(document).on("submit","#addExamineeFrm" , function(){
  $.post("query/addExamineeExe.php", $(this).serialize() , function(data){
    if(data.res == "noGender")
    {
      Swal.fire(
          'No Gender',
          'Please select gender',
          'error'
       )
    }
    else if(data.res == "noCourse")
    {
      Swal.fire(
          'No Course',
          'Please select course',
          'error'
       )
    }
    else if(data.res == "noLevel")
    {
      Swal.fire(
          'No Year Level',
          'Please select year level',
          'error'
       )
    }
    else if(data.res == "fullnameExist")
    {
      Swal.fire(
          'Fullname Already Exist',
          data.msg + ' are already exist',
          'error'
       )
    }
    else if(data.res == "emailExist")
    {
      Swal.fire(
          'Email Already Exist',
          data.msg + ' are already exist',
          'error'
       )
    }
    else if(data.res == "success")
    {
      Swal.fire(
          'Success',
          data.msg + ' Thêm thành công thí sinh',
          'success'
       )
        refreshDiv();
        $('#addExamineeFrm')[0].reset();
        setTimeout(function(){ 
          $('#body').load(document.URL);
       },1000);
    }
    else if(data.res == "failed")
    {
      Swal.fire(
          "Something's Went Wrong",
          '',
          'error'
       )
    }


    
  },'json')
  return false;
});



// Update Examinee
$(document).on("submit","#updateExamineeFrm" , function(){
  $.post("query/updateExamineeExe.php", $(this).serialize() , function(data){
     if(data.res == "success")
     {
        Swal.fire(
            'Success',
            data.exFullname + ' <br>has been successfully updated!',
            'success'
          )
          refreshDiv();
     }
  },'json')
  return false;
});


function refreshDiv()
{
  $('#tableList').load(document.URL +  ' #tableList');
  $('#refreshData').load(document.URL +  ' #refreshData');

}


