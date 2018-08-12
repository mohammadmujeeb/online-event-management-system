$('#sub').click(function(){
    var event = $('#event').val();
    $.ajax
    ({
        type: 'POST',
        url: 'http://localhost/fms2/php/getdata.php',
        data: 
        {
            event: event
        },
            success: function(data)
        {
            var flag = data.search("false");
                if (flag != -1) {
                    $('#myModal').modal();
                    $('#data').html("");
                }
                else{
                    $('#heading').html("Student Registered For Event "+ event);
                    $('#data').html(data);
                }
        }
    });
});