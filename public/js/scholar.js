function listScholar() {
  $.ajax({
    type: "get",
    url: baseurl + "/scholar/list",
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (html){
      $('#list-area').html(html);
    }
  });
}
//function new->add
function createScholar() {
  $.ajax({
    type: "get",
    url: baseurl + "/scholar/create",
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    dataType: 'html',
    success: function (html){
      // $('div.flash-message').html(data);
      $('#list-area').html(html);
    }
  });
}
//function edit->store
function storeScholar() {
  var arr = [];
  $("[id^='test']:checked").each(function(){
    arr.push($(this).val());
  });
  console.log(arr);
  var form_data={
    name_scholar: $("#name_scholar").val() ,
    university : $("#name_university").val(),
    level_id: $("#level_id").val(),
    program_id: $("#program_id").val(),
    test_score_types_id: arr,
    country: $("#name_country").val(),
    inclusion: $("#inclusion").val(),
    description: $("#description").val()
  };
  console.log(form_data);
  $.ajax({
    type: "post",
    dataType: "json",
    url: baseurl + "/scholar/store",
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: form_data,
    success: function (html){
      $('#list-area').html(html);
      listScholar();
      swal({
        title: "Good job!",
        text: "You insert data success!",
        icon: "success",
        button: "OK!",
      });
    },
    error: function(data){
      $('#errors').html('');
      if(data.status === 422){
        var errors = $.parseJSON(data.responseText);
        $.each(errors, function(key,value){
          console.log(errors);
        $('#errors').addClass("alert alert-danger");
          if($.isPlainObject(value)){
            $.each(value, function (key,value){
            $('#errors').show().append(value+"<br/>");
            });
          }else{
            $('#errors').show().append(value+"<br/>");
          }
        });
      }
    }
  });
}
function showScholar(id) {
  $.ajax({
    type: "get",
    url: baseurl + "/scholar/show/" + id,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (html){
      $('#list-area').html(html);
    }
  });
}
function editScholar(id) {
  $.ajax({
    type: "get",
    url: baseurl + "/scholar/edit/" + id,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (html){
      $('#list-area').html(html);
    }
  });
}
function updateScholar(id) {
  var arr = [];
  $("[id^='test']:checked").each(function(){
    arr.push($(this).val());
  });
  console.log(arr);
  var form_data={
    name_scholar: $("#name_scholar").val(),
    university: $("#name_university").val(),
    level_id: $("#level_id").val(),
    program_id: $("#program_id").val(),
    test_score_types_id: arr,
    country: $("#name_country").val(),
    inclusion: $("#inclusion").val(),
    description: $("#description").val()
  };
  console.log(form_data);
  $.ajax({
    type: "put",
    url: baseurl + "/scholar/update/" + id,
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    data: form_data,
    success: function (html){
      // $('#list-area').html(html);
      listScholar();
      swal({
        title: "Good job!",
        text: "You edit data success!",
        icon: "success",
        button: "OK!",
      });
    },
    error: function(data){
      $('#errors').html('');
      if(data.status === 422){
        var errors = $.parseJSON(data.responseText);
        $.each(errors, function(key,value){
          console.log(errors);
        $('#errors').addClass("alert alert-danger");
          if($.isPlainObject(value)){
            $.each(value, function (key,value){
            $('#errors').show().append(value+"<br/>");
            });
          }else{
            $('#errors').show().append(value+"<br/>");
          }
        });
      }
    }
  });
}
function deleteScholar(id) {
  $.ajax({
    type: "get",
    url: baseurl + "/scholar/delete/" + id,
    data: { "_token": "{{ csrf_token() }}" },
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },
    success: function (html){
      $('#list-area').html(html);
      swal({
      title: "Are you sure?",
      text: "Once deleted, you will not be able to recover this imaginary file!",
      icon: "warning",
      buttons: true,
      dangerMode: true,
    });
    }
  });
}
