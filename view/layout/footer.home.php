	<?php if($action == 'home'){ ?>
	<footer>
		<div id="right">
			<span data-toggle="modal" data-target="#myModal"><img src="images/logo/email.png"></span><img src="images/logo/insta.png"><img src="images/logo/fb.png">
		</div>
		<div id="left" style="padding-top:5px">
			<img src="images/logo/bio.png">
		</div>
		<div class="clear"></div>
	</footer>
	<?php } ?>

	 <script src="assets/jquery/jquery-1.10.2.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.pageslide.min.js"></script>
 	<script type="text/javascript" src="assets/ajax/send_mail.js"></script>
<script>

    $('#alertform').fadeOut();
	$('#closealert').on('click',function(){
		$('#alertform').fadeOut();
	});
	$('.second').mouseover(function(){
		$('#navigation').slideDown();	
		
		
	});
	$('#navigation').mouseleave(function(){
		$('#navigation').slideUp();
	});
	 

	
</script>
</body>
</html>