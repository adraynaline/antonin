<p><?php echo $_GET['action']; ?></p> 

<!-- Button trigger modal -->
<button class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
  Ajouter un modele
</button>

<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ajouter une moto</h4>
      </div>
      
      <div class="modal-body">
        <div id="first_step_modele">
          Ajoutez les images
          <form action="model/admin/processupload.php" method="post" enctype="multipart/form-data" id="MyUploadForm">
          <input name="ImageFile" id="imageInput" type="file" />
          <input type="submit"  id="submit-btn" value="Upload" />
          <img src="images/ajax-loader.gif" id="loading-img" style="display:none;" alt="Please Wait"/>
          </form>
          <div id="output"></div>
         
           <div class="modal-footer">
         <button type="button" class="btn btn-default" id="next_step">Next Step</button>
       
          </form>
        </div>
      </div>
        <div id="second_step_modele">
            <form method="post" action="?appli=admin&action=add_moto" id="moto1form">
         		Nom<br/>
         		<input type="text" name="nom" id="nom"><br/>
         		Description<br/>
         		<input type="text" name="description" id="description"><br/>
           
            
         		
            <input type="hidden" id="photo" name="photo" value=""><br/>
            <input type="hidden" id="photo_2" name="photo_2" value=""><br/>
           
          <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-default" id="previous_step">Previous Step</button>
          <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
      </div>
      </div>
     
    </div>
  </div>
 
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <td>ID</td>
      <td>NOM</td>
      <td>DESCRIPTION</td>
      <td>COVER</td>
      <td>DELETE</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach($modele as $modele): ?>
      <tr>
        <td><?php echo $modele['id']; ?></td>
        <td><a href="?appli=admin&action=details&modele=<?php echo $modele['id']; ?>"><?php echo $modele['nom']; ?></a></td>
        <td><?php echo $modele['description']; ?></td>
        <td><img height="100px" width="auto" src="<?php echo $modele['image']; ?>"></td>
        <td>
          <form method="post" action="?appli=admin&action=delete_modele" id="delModele">
              <input type="hidden" id="id" name="id" value="<?php echo $modele['id']; ?>">
              <button class="btn"type="submit">Delete</button>
          </form>
          
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
