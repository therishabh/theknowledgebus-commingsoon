<?php
if(isset($_POST['submit_btn']))
{
	$email = $_POST['email'];

	mail("niraj001@gmail.com", "The Knowledge Bus Notification", "$email");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Coming Soon</title>
<link href="tools/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://www.google.com/fonts#QuickUsePlace:quickUse/Family:Tienne" />
<script type="text/javascript" src="tools/jquery.min.js"></script> 
<script type="text/javascript" src="tools/cufon-yui.js"></script>
<script type="text/javascript" src="tools/Abraham_Lincoln_400.font.js"></script>
<script type="text/javascript" src="tools/Inspiration_400.font.js"></script>
<script type="text/javascript" src="tools/Museo_Slab_100_400-Museo_Slab_700_400.font.js"></script>
<script type="text/javascript">
	Cufon.replace('.logo h1', {fontFamily: 'Inspiration'});
	Cufon.replace('.logo h2', {fontFamily: 'Museo Slab 100'});
	Cufon.replace('.logo h2 span', {fontFamily: 'Abraham Lincoln'});
	Cufon.replace('p.big_text, p.small_text', {fontFamily: 'Museo Slab 100'});
	Cufon.replace('p.big_text strong, p.small_text strong', {fontFamily: 'Museo Slab 700'});
</script>


</head>
<body>
<div id="transy">
</div>
<div id="wrapper">
	<div class="logoo">
		A K Tour & Travels
	</div>
	<div class="content">
		<p class="big_text"><strong>we are working on something</strong> very interesting!</p>
		<p class="small_text"><strong>be notified.</strong> we just need your email address.</p>
		<div class="form">
			<div class="field_content">
				<form action="" method="post">
					<input class="field" type="text" name="email" />
					<input class="submit" type="submit" name="submit_btn" value="" />
				</form>
			</div>
		</div>
		<div class="clear"></div>
		<ul class="social">
			<li class="pinterest"><a href="#"></a></li>
			<li class="instagram"><a href="#"></a></li>
			<li class="twitter"><a href="#"></a></li>
			<li class="facebook"><a href="#"></a></li>
		</ul>
		
		
	</div>
</div>
</body>
</html>
