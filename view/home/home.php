<div id="alertform">
	<table height="100%" width="100%">
		<tr height="100%">
			<td width="33%">
			</td>
			<td id="alertformmessage" align="center" width="33%">
				<p>Empty field</p>
			</td>
			<td width="33%">
				<span id="closealert" class="glyphicon glyphicon-remove"></span>
			</td>
		</tr>
	</table>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<table width="100%" height="100%">
  		<tr height="100%" vertical-align="center">
  			<td width="100%" align="center">
				<div class="modal-dialog">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        <h4 class="modal-title" id="myModalLabel">Mail me</h4>
				      </div>
				      
				      <div class="modal-body">
				        	<form id="formSendMail" action="?appli=home&action=sendmail" method="post">
				        		<span class="help-block">Enter your email adress.</span>
				        		<input class="form-control" type="mail" name="destinataire" id="destinataire">
				        		<span class="help-block">Enter subject of your message</span>
				        		<input class="form-control" type="text" name="subject" id="subject">
				        		<span class="help-block">Enter your Message</span>
				        		<textarea class="form-control" type="text" name="message" id="message"></textarea>
				        	
				      </div>
				        
				       <div class="modal-footer">
				          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				          <button type="submit" class="btn btn-primary">Send</button>
				           </form>
				        
				      </div>
				     </div>
				     
				    </div>
				  
				 
				
			</td>
  		</tr>	
  	</table>
  </div>	
	<div id="navigation" style="display:none">
		<!--<div id="close_btn">
			<span id="close_menu" style="height=:50px;font-size:2em;color:white;padding:10px;margin-top:-2px;margin-right:10px">Close</span>
		</div>-->
		<div id="menu_item">
			<br>
			<nav>
			<table width="100%" height="100%">
				<tr height="6%"></tr>
				<tr height="85%" vertical-align="center">
					<td>
						<?php foreach($other_modele as $other): ?>
						    <div class="menu_item">
						   		<p class="nom_modele"><a href="?appli=home&action=home&modele=<?php echo $other['id']; ?>"><?php echo $other['nom']; ?></a></p>
						   		<center><img width="200px" height="200px" src="<?php echo $other['min_img']; ?>"></center><br/>
						   	</div>
						<?php endforeach; ?>
						
					</td>
				</tr>
				<tr height="9%"></tr>
			</table>
			
			</nav>
		</div>
		<div class="clear"></div>
	</div>

	<header>
		
		<span id="menu" ><a class="second"><img  width="80px" src="images/logo/logomenu.png"></a></span>
		<p id="logo"><a href="?appli=home&action=home"><img width="400px" src="images/logo/titlelogo.png"></a></p>

		
		<div class="clear"></div>
	</header>

	<div id="modal" style="display:none">
		<nav>
	   <?php foreach($other_modele as $other): ?>
	   <div class="menu_item">
	   		<p class="nom_modele"><a href="?appli=home&action=home&modele=<?php echo $other['id']; ?>"><?php echo $other['nom']; ?></a></p>
	   		<center><img src="<?php echo $other['min_img']; ?>"></center><br/>
	   	</div>
		<?php endforeach; ?>
			</nav>
	</div>


	<div id="content">
		<?php if(!isset($_GET['modele'])){ ?>
			
				<div id="cover" style="background:url('<?php echo $cover['img']; ?>'); background-size:cover; width:100%; height:100%;">

				</div>
			
		 <?php }
		 else { ?>
		 	<div id="content_detail">
			
			<img class="image_detail" src="<?php echo $modele_select['image']; ?>"/><br/>
				
			<?php foreach($details_select as $detail): ?>
				<img class="image_detail" src="<?php echo $detail['image_detail']; ?>"/><br/>
			<?php endforeach; ?>
		</div>
		<?php } ?>
	</div>

