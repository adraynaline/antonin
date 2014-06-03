$(document).ready(function(){
	$('#delDetail').on('submit', function(){
		var id = $('#id').val();
        var redirect = $('#redirect').val();
	
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