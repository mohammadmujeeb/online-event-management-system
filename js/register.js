$('#name, #collagename, #contactnumber, #email_id').bind('keyup', function() {
    if(allFilled()) $('#btnsub').removeAttr('disabled');
    else{
        $('#btnsub').prop("disabled", true);
    }
});

function allFilled() {
    var filled = true;
    $('body input').each(function() {
        if($(this).val() == '') filled = false;
    });
    return filled;
}
$('#select_event').change(function(){
    var select_event = $('#select_event').val();
    switch(select_event)
    {
    case 'Code Chef' :
            $('#fees').val(50);
            break;
    case 'Dark Code' :
            $('#fees').val(50);
            break;
    case 'Webatrix' :
            $('#fees').val(50);
            break;
    case 'Lan Gamming' :
            $('#fees').val(50);
            break;
    case 'Ignite' :
            $('#fees').val(100);
            break;
    case 'Draftrix' :
            $('#fees').val(100);
            break;
    case 'Keatso' :
            $('#fees').val(100);
            break;
    case 'Nirman' :
            $('#fees').val(200);
            break;
    case 'Brainvita' :
            $('#fees').val(50);
            break;
    case 'Campus Drive' :
            $('#fees').val(50);
            break;
    }
});
$('#btnsub').click(function(){
	var name = $('#name').val();
	var collagename = $('#collagename').val();
	var year = $('#year').val();
	var contactnumber = $('#contactnumber').val();
	var email_id = $('#email_id').val();
	var select_event = $('#select_event').val();
	var fees = $('#fees').val();
	if(select_event == "Dark Code")
	{
		$.ajax
        ({
            type: 'POST',
            url: 'http://localhost/fms2/php/darkcode.php',
            data: 
            {
                name: name,
                collagename: collagename,
                year: year,
                contactnumber: contactnumber,
                email_id: email_id,
                fees: fees
            },
            success: function(data)
            {
                if(data == "true")
                {
                    $('#myModal #generate').show();  
                    $('#myModal #result').html("Registration Successful....");
                    $('#myModal #name1').html(name);
                    $('#myModal #collage1').html(collagename);
                    $('#myModal #year1').html(year);
                    $('#myModal #contactnumber1').html(contactnumber);
                    $('#myModal #email1').html(email_id);
                    $('#myModal #event1').html(select_event);
                    $('#myModal #fees1').html(fees);
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
                else
                {
                    $('#myModal #result').html("Registration Unuccessful");
                    $('#myModal #generate').hide();
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
            }
        });
	}
	else if(select_event == "Code Chef")
	{
		$.ajax
        ({
            type: 'POST',
            url: 'http://localhost/fms2/php/codechef.php',
            data: 
            {
                name: name,
                collagename: collagename,
                year: year,
                contactnumber: contactnumber,
                email_id: email_id,
                fees: fees
            },
            success: function(data)
            {
                if(data == "true")
                {
                    $('#myModal #generate').show();  
                    $('#myModal #result').html("Registration Successful....");
                    $('#myModal #name1').html(name);
                    $('#myModal #collage1').html(collagename);
                    $('#myModal #year1').html(year);
                    $('#myModal #contactnumber1').html(contactnumber);
                    $('#myModal #email1').html(email_id);
                    $('#myModal #event1').html(select_event);
                    $('#myModal #fees1').html(fees);
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
                else
                {
                    $('#myModal #result').html("Registration Unuccessful");
                    $('#myModal #generate').hide();
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
            }
        });
	}
	else if(select_event == "Webatrix")
	{
		$.ajax
        ({
            type: 'POST',
            url: 'http://localhost/fms2/php/webatrix.php',
            data: 
            {
                name: name,
                collagename: collagename,
                year: year,
                contactnumber: contactnumber,
                email_id: email_id,
                fees: fees
            },
            success: function(data)
            {
                if(data == "true")
                {
                    $('#myModal #generate').show();  
                    $('#myModal #result').html("Registration Successful....");
                    $('#myModal #name1').html(name);
                    $('#myModal #collage1').html(collagename);
                    $('#myModal #year1').html(year);
                    $('#myModal #contactnumber1').html(contactnumber);
                    $('#myModal #email1').html(email_id);
                    $('#myModal #event1').html(select_event);
                    $('#myModal #fees1').html(fees);
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
                else
                {
                    $('#myModal #result').html("Registration Unuccessful");
                    $('#myModal #generate').hide();
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
            }
        });
	}
	else if(select_event == "Lan Gamming")
	{
		$.ajax
        ({
            type: 'POST',
            url: 'http://localhost/fms2/php/langamming.php',
            data: 
            {
                name: name,
                collagename: collagename,
                year: year,
                contactnumber: contactnumber,
                email_id: email_id,
                fees: fees
            },
            success: function(data)
            {
                if(data == "true")
                {
                    $('#myModal #generate').show();  
                    $('#myModal #result').html("Registration Successful....");
                    $('#myModal #name1').html(name);
                    $('#myModal #collage1').html(collagename);
                    $('#myModal #year1').html(year);
                    $('#myModal #contactnumber1').html(contactnumber);
                    $('#myModal #email1').html(email_id);
                    $('#myModal #event1').html(select_event);
                    $('#myModal #fees1').html(fees);
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
                else
                {
                    $('#myModal #result').html("Registration Unuccessful");
                    $('#myModal #generate').hide();
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
            }
        });
	}
	else if(select_event == "Ignite")
	{
		$.ajax
        ({
            type: 'POST',
            url: 'http://localhost/fms2/php/ignite.php',
            data: 
            {
                name: name,
                collagename: collagename,
                year: year,
                contactnumber: contactnumber,
                email_id: email_id,
                fees: fees
            },
            success: function(data)
            {
                if(data == "true")
                {
                    $('#myModal #generate').show();  
                    $('#myModal #result').html("Registration Successful....");
                    $('#myModal #name1').html(name);
                    $('#myModal #collage1').html(collagename);
                    $('#myModal #year1').html(year);
                    $('#myModal #contactnumber1').html(contactnumber);
                    $('#myModal #email1').html(email_id);
                    $('#myModal #event1').html(select_event);
                    $('#myModal #fees1').html(fees);
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
                else
                {
                    $('#myModal #result').html("Registration Unuccessful");
                    $('#myModal #generate').hide();
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
            }
        });
	}
	else if(select_event == "Draftrix")
	{
		$.ajax
        ({
            type: 'POST',
            url: 'http://localhost/fms2/php/draftrix.php',
            data: 
            {
                name: name,
                collagename: collagename,
                year: year,
                contactnumber: contactnumber,
                email_id: email_id,
                fees: fees
            },
            success: function(data)
            {
                if(data == "true")
                {
                    $('#myModal #generate').show();  
                    $('#myModal #result').html("Registration Successful....");
                    $('#myModal #name1').html(name);
                    $('#myModal #collage1').html(collagename);
                    $('#myModal #year1').html(year);
                    $('#myModal #contactnumber1').html(contactnumber);
                    $('#myModal #email1').html(email_id);
                    $('#myModal #event1').html(select_event);
                    $('#myModal #fees1').html(fees);
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
                else
                {
                    $('#myModal #result').html("Registration Unuccessful");
                    $('#myModal #generate').hide();
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
            }
        });
	}
	else if(select_event == "Keatso")
	{
		$.ajax
        ({
            type: 'POST',
            url: 'http://localhost/fms2/php/keatso.php',
            data: 
            {
                name: name,
                collagename: collagename,
                year: year,
                contactnumber: contactnumber,
                email_id: email_id,
                fees: fees
            },
            success: function(data)
            {
                if(data == "true")
                {
                    $('#myModal #generate').show();  
                    $('#myModal #result').html("Registration Successful....");
                    $('#myModal #name1').html(name);
                    $('#myModal #collage1').html(collagename);
                    $('#myModal #year1').html(year);
                    $('#myModal #contactnumber1').html(contactnumber);
                    $('#myModal #email1').html(email_id);
                    $('#myModal #event1').html(select_event);
                    $('#myModal #fees1').html(fees);
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
                else
                {
                    $('#myModal #result').html("Registration Unuccessful");
                    $('#myModal #generate').hide();
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
            }
        });
	}
	else if(select_event == "Nirman")
	{
		$.ajax
        ({
            type: 'POST',
            url: 'http://localhost/fms2/php/nirman.php',
            data: 
            {
                name: name,
                collagename: collagename,
                year: year,
                contactnumber: contactnumber,
                email_id: email_id,
                fees: fees
            },
            success: function(data)
            {
                if(data == "true")
                {
                    $('#myModal #generate').show();  
                    $('#myModal #result').html("Registration Successful....");
                    $('#myModal #name1').html(name);
                    $('#myModal #collage1').html(collagename);
                    $('#myModal #year1').html(year);
                    $('#myModal #contactnumber1').html(contactnumber);
                    $('#myModal #email1').html(email_id);
                    $('#myModal #event1').html(select_event);
                    $('#myModal #fees1').html(fees);
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
                else
                {
                    $('#myModal #result').html("Registration Unuccessful");
                    $('#myModal #generate').hide();
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
            }
        });
	}
	else if(select_event == "Brainvita")
	{
		$.ajax
        ({
            type: 'POST',
            url: 'http://localhost/fms2/php/brainvita.php',
            data: 
            {
                name: name,
                collagename: collagename,
                year: year,
                contactnumber: contactnumber,
                email_id: email_id,
                fees: fees
            },
            success: function(data)
            {
                if(data == "true")
                {
                    $('#myModal #generate').show();  
                    $('#myModal #result').html("Registration Successful....");
                    $('#myModal #name1').html(name);
                    $('#myModal #collage1').html(collagename);
                    $('#myModal #year1').html(year);
                    $('#myModal #contactnumber1').html(contactnumber);
                    $('#myModal #email1').html(email_id);
                    $('#myModal #event1').html(select_event);
                    $('#myModal #fees1').html(fees);
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
                else
                {
                    $('#myModal #result').html("Registration Unuccessful");
                    $('#myModal #generate').hide();
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
            }
        });
	}
	else if(select_event == "Campus Drive")
	{
		$.ajax
        ({
            type: 'POST',
            url: 'http://localhost/fms2/php/campusdrive.php',
            data: 
            {
                name: name,
                collagename: collagename,
                year: year,
                contactnumber: contactnumber,
                email_id: email_id,
                fees: fees
            },
            success: function(data)
            {
                if(data == "true")
                {
                    $('#myModal #generate').show();  
                    $('#myModal #result').html("Registration Successful....");
                    $('#myModal #name1').html(name);
                    $('#myModal #collage1').html(collagename);
                    $('#myModal #year1').html(year);
                    $('#myModal #contactnumber1').html(contactnumber);
                    $('#myModal #email1').html(email_id);
                    $('#myModal #event1').html(select_event);
                    $('#myModal #fees1').html(fees);
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
                else
                {
                    $('#myModal #result').html("Registration Unuccessful");
                    $('#myModal #generate').hide();
                    $('#myModal').modal();
                    $('#regform')[0].reset();
                }
            }
        });
	}
});
