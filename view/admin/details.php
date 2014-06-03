
Details de la moto  

<!-- Button trigger modal -->
<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Ajouter un detail
</button>

<!-- Modal -->

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   <form method="post" action="?appli=admin&action=add_details" id="moto2form">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ajouter une moto</h4>
      </div>
      <div class="modal-body">
      
       		
       		Description<br/>
       		<input type="text" name="description" id="description"><br/>
       		Image<br/>
       		<input type="file" name="fileUpload1" id="fileUpload1" class="fileUpload bt vert" /><br/>
            <div id="previews"></div>
          <div id="response"></div>
         
          <input type="hidden" id="photo" name="photo" value=""><br/>

       
      </div>
      <div class="modal-footer">
      	<input type="hidden" name="modele" id="modele" value="<?php echo $modele; ?>">
      	<input type="hidden" id="url_redirect" value="?appli=admin&action=details&modele=<?php echo $modele; ?>">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
  </form>
</div>
<table class="table table-striped">
  <thead>
    <tr>
      <td>ID</td>
      <td>Image</td>
      <td>descritpion</td>
     
      <td>DELETE</td>
    </tr>
  </thead>
  <tbody>
    <?php foreach($details as $detail): ?>
      <tr>
        <td><?php echo $detail['id']; ?></td>
       <td><img height="100px" width="auto" src="images/uploads/../../<?php echo $detail['image_detail']; ?>"></td>
        <td><?php echo $detail['description']; ?></td>
        
        <td>
           <form method="post" action="?appli=admin&action=delete_detail" id="delDetail">
              <input type="hidden" id="redirect" value="?appli=admin&action=details&modele=<?php echo $_GET['modele']; ?>">
              <input type="hidden" id="id" name="id" value="<?php echo $detail['id']; ?>">
              <button class="btn"type="submit">Delete</button>
          </form>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
