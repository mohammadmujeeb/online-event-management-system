$('#myform').hide();
$(document).ready(function(){
    $('#myform').fadeIn(1200);
});
$('#myform1').hide();
$(document).ready(function(){
    $('#myform1').fadeIn(1600);
});

$('#login').click(function(){
  var user_id = $('#user_id').val();
  var password = $('#password').val();
  $.ajax({
        type: 'POST',
        url: 'http://localhost/fms2/php/check.php',
        data: 
        {
          user_id: user_id,
          password: password
        },
        success: function(data)
        {
           if (data == "true") {
              $('#myModal #result').html("Login Successful");
              $('#myModal #msg').html("Welcome Admin");
              $('#myModal').modal();
              window.location.href = "http://localhost/fms2/adminhome.php";
           }
           else{
              $('#myModal').modal();
              $('#myModal #result').html("Login Unsuccessful");
              $('#myModal #msg').html("Please Enter Valid User Id And Password.");
           }
        }
  });
});