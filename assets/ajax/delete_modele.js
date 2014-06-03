$(document).ready(function(){
	$('#delModele').on('submit', function(){
		var id = $('#id').val();
       
	
	if(id == "" ){
		alert('Des champs sont incomplets');
	} else{
		$.ajax({
                url: $(this).attr('action'),
                type: $(this).attr('method'),
                data: $(this).serialize(),
                dataType: 'json',
                success: function(json) {
                    if(json.reponse == 'ok') { 
                        alert('Moto Supprimée.');
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