<p><?php echo $_GET['action']; ?></p> 
<button class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
  Ajouter une image a la premiere page
</button>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Ajouter</h4>
      </div>
      <div class="modal-body">
      
       		
       	<form method="post" action="?appli=admin&action=add_logo" id="formLogo">
	        <input type="file" name="fileUpload1" id="fileUpload1" class="fileUpload bt vert" /><br/>
          <div id="previews"></div>
          <div id="response"></div>
         
          <input type="hidden" id="photo" name="photo" value=""><br/>
	       <input class="btn" type="submit">
        </form>
      </div>    
    </div>
  </div>
 
</div><br/><br/>
Actual Logo <br/>

<img width="80%" src="<?php echo $logo['photo']; ?>">