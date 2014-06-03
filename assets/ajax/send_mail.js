$(document).ready(function(){
	$('#formSendMail').on('submit', function(){
        var destinataire = $('#destinataire').val();
        var subject = $('#subject').val();
        var message = $('#message').val();
		
	
	if(destinataire == "" || subject == "" || message == ""){
        $('#alertformmessage').empty();
        $('#alertform').css('background','red');
        $('#alertformmessage').append('<p>Empty Fields</p>');
        $('#alertform').fadeIn();
		
	} else{
		$.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        $('#alertformmessage').empty();
                        $('#alertform').css('background','green');
                        $('#alertformmessage').append('<p>Sending Mail Succed</p>');
                        $('#alertform').fadeIn();
                        $('#myModal').modal('hide');
                        
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
		
	});
});