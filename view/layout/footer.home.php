<?php if($action == 'home'){ ?>
	<footer>
		<center>
			<span data-toggle="modal" data-target="#myModal"><img src="images/logo/email.png"></span> <img src="images/logo/insta.png"> <img src="images/logo/fb.png">
			<img src="images/logo/bio.png">
		</center>
		<div class="clear"></div>
	</footer>
<?php } ?>

<script src="assets/jquery/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/ajax/send_mail.js"></script>
<script src="assets/jquery/home.effect.js"></script>
<script type="text/javascript">
 	var height_menu = $('#menu').height();
 	var ok = height_menu + 30;
 	$('#logo').select('img').css('margin-left', ok);
</script>
</body>
</html>