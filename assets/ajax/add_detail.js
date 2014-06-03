$(document).ready(function(){
	$('#moto2form').on('submit', function(){
        var modele = $('#modele').val();
        var description = $('#img_description').val();
        var photo = $('#photo').val();
		var redirect = $('#url_redirect').val();
	
	if( modele == "" || description == "" || photo == ""){
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
                        window.setTimeout("location=('"+redirect+"');");
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
		
	});
});