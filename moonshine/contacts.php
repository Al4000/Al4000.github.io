<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Самогонщики</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/media.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
    <link rel="shortcut icon" href="img/icon.ico" type="image/x-icon">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
		$(document).ready(function(){
    		PopUpHide();
   				});
			function PopUpShow(){
					$("#basket_popup").show();
				}
			function PopUpHide(){
				$("#basket_popup").hide();
			}
	</script>
</head>
<body>
 	<?php $punkt = 'contacts'; require_once "header.php"; require_once "basket.php" ?>
	<div class="cont_wrap">
		<div class="contacts_left">
			<h1>Контакты</h1>
			<h3>адрес</h3>
				<p>г. Киров, ул. Орловская, 12</p>
			<h3>телефон</h3>
				<p>8-800-100-00-00<br>
				(8332) 23-23-23</p>
			<h3>почта</h3>
				<a href="#">moonshineshop@ya.ru</a>
		</div>
		<div class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2078.9665989365662!2d49.68548331603856!3d58.59608277663662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x43fcf43750579d11%3A0xeda71431f8b21471!2z0YPQuy4g0J7RgNC70L7QstGB0LrQsNGPLCAxMiwg0JrQuNGA0L7Qsiwg0JrQuNGA0L7QstGB0LrQsNGPINC-0LHQuy4sIDYxMDAwMg!5e0!3m2!1sru!2sru!4v1490437506131" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</div>
	
	<?php require_once "footer.php"	?>
	
</body>
</html>