$(document).ready(function(){
	$('#moto1form').on('submit', function(){
		var nom = $('#nom').val();
        var description = $('#img_description').val();
        var photo = $('#photo').val();
        var photo2 = $('#photo_2').val();
		var redirect = $('#url_redirect').val();
	
	if(nom == "" || description == "" || photo == "" || photo_2 == ""){
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
                        window.setTimeout("location=('?appli=admin&action=modele');");
                    } else {
                        alert('Erreur : '+ json.reponse);
                    }
                }
            });
        }
        return false;
		
	});
});