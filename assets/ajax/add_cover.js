$(document).ready(function(){
	$('#formCover').on('submit', function(){
        var photo = $('#photo').val();
		
	
	if(photo == ""){
		alert('Des champs sont incomplets');
	} else{
		$.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        alert('Image ajoutée.');
                        window.setTimeout("location=('?appli=admin&action=cover');");
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
		
	});
});