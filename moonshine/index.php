<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MoonshineShop</title>
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
    <script>
		$(window).load(function() {
		    $(".status").fadeOut();
		    $(".preloader").delay(1000).fadeOut("slow");
		});
	</script>	
	
	<link href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>

</head>
<body>
		<div class="preloader">
	        <div class="status"></div>
	    </div>

		<?php $punkt = 'index'; require_once "header.php" ?>
		<main>
			<div class="offers">
				<p><img src="img/offers03.png"></p>
			</div>
			<div class="fotorama" data-transition="crossfade" data-autoplay="true" data-loop="true">
				<img src="img/slider1_2.jpg">
				<img src="img/slider2_2.jpg">
			</div>
			
			<div id="video">
				<div class="video_c">
					<iframe width="300" height="200" src="https://www.youtube.com/embed/mawIr64IjT8" frameborder="0" allowfullscreen></iframe>
					<div class="opsn">
						<h3 id="anchor" class="vid">АРМАНЬЯК И КАЛЬВАДОС</h3>
						<p>Описание<br>
					описание</p>
					</div>
					</div>
			    <div class="video_c">
					<iframe width="300" height="200" src="https://www.youtube.com/embed/soO7Nizl1-k" frameborder="0" allowfullscreen></iframe>
					<div class="opsn">
						<h3 class="vid">КОНЬЯК И ВИСКИ</h3>
						<p>Описание<br>
					описание</p>
					</div>
				</div>
				<div class="video_c">
					<iframe width="300" height="200" src="https://www.youtube.com/embed/TDSuURVlnJw" frameborder="0" allowfullscreen></iframe>
					<div class="opsn">
						<h3 class="vid">ШОТЛАДНСКИЙ ВИСКИ</h3>
						<p>Описание<br>описание</p>
					</div>
				</div>
			</div>
			
			<div id="spec">
				<div class="title">
				<p>Специальные предложения</p>
				</div>
			</div>
			<div id="app">
				<a href="details.php"><div class="apprt app1">
					<img src="img/app1.png">
					<p>аппарат<br>
					3347B-22</p></a>
					<a href="javascript:PopUpShow()">
						<div class="korz">В корзину</div>
					</a>
					<a href="javascript:PopUpShow()">
						<div class="price1">2000p.</div>
					</a>
				</div>
				<a href="details.php"><div class="apprt app2">
					<img src="img/app2.png">
					<p>аппарат<br>
					3347B-22</p></a>
					<a href="javascript:PopUpShow()">
						<div class="korz">В корзину</div>
					</a>
					<a href="javascript:PopUpShow()">
						<div class="price2">2000p.</div>
					</a>
				</div>
				<a href="details.php"><div class="apprt app3">
					<img src="img/app3.png">
					<p>аппарат<br>
					3347B-22</p></a>
					<a href="javascript:PopUpShow()">
						<div class="korz">В корзину</div>
					</a>
					<a href="javascript:PopUpShow()">
						<div class="price3">2000p.</div>
					</a>
				</div>
				<a href="details.php"><div class="apprt app4">
					<img src="img/app4.png">
					<p>аппарат<br>
					3347B-22</p></a>
					<a href="javascript:PopUpShow()">
						<div class="korz">В корзину</div>
					</a>
					<a href="javascript:PopUpShow()">
						<div class="price4">2000p.</div>
					</a>
				</div>
			</div>
			<div id="vse">
				<a href="catalogue.php">
					<div class="all_goods">все товары</div>
				</a>
			</div>
			<div id="bid">
				<p>оставьте заявку на консультацию</p>
				<div id="form">
					
					<div class="name">
						<input type="text" placeholder="Имя" id="name" name="name"><br>
					</div>
					<div class="phone">
						<input type="text" placeholder="Телефон" id="phone" name="phone"><br>
					</div>
					<div class="button">
						<button id="done">Оставить заявку</button>
						<!-- <input type="button" name="done" id="done" value="Оставить заявку"> -->
					</div>
				</div>
			</div>
			<div id="new">
				<div class="title">
				<p>Новинки</p>
				</div>
			</div>
			<div id="app">
				<a href="details.php"><div class="apprt app1">
					<img src="img/appnov1.png">
					<p>аппарат<br>
					3347B-22</p></a>
					<a href="#header" class="topLink">
						<div class="korz">В корзину</div>
					</a>
					<a href="javascript:PopUpShow()">
						<div class="price1">2000p.</div>
					</a>
				</div>
				<a href="details.php"><div class="apprt app2">
					<img src="img/appnov2.png">
					<p>аппарат<br>
					3347B-22</p></a>
					<a href="javascript:PopUpShow()">
						<div class="korz">В корзину</div>
					</a>
					<a href="javascript:PopUpShow()">
						<div class="price2">2000p.</div>
					</a>
				</div>
				<a href="details.php"><div class="apprt app3">
					<img src="img/appnov3.png">
					<p>аппарат<br>
					3347B-22</p></a>
					<a href="javascript:PopUpShow()">
						<div class="korz">В корзину</div>
					</a>
					<a href="javascript:PopUpShow()">
						<div class="price3">2000p.</div>
					</a>
				</div>
				<a href="details.php"><div class="apprt app4">
					<img src="img/appnov4.png">
					<p>аппарат<br>
					3347B-22</p></a>
					<a href="javascript:PopUpShow()">
						<div class="korz">В корзину</div>
					</a>
					<a href="javascript:PopUpShow()">
						<div class="price4">2000p.</div>
					</a>
				</div>
			</div>
			<div id="vse">
				 <a href="#header" class="topLink">
						<div class="all_goods">наверх</div>
				 </a>
			</div>
			<div id="nap">
				<div class="title">
				<p>48 видов напитков своими руками</p>
				</div>
			</div>
			<div id="slide2">
				<img src = "img/slide2.png">
			</div>
			<div id="recept">
				<a href="recept.php">
						<div class="recept">рецепты</div>
				 </a>
			</div>
			<div id="article">
				<h2>самогонный аппарат</h2>
				<p>Нужна домашняя мини-пивоварня? Решили порадовать друзей и близких пивом собственного приготовления, а сроки поджимают? Оперативно доставим минипивоварню курьером в Москве, Казани, Санкт-Петербурге и других городах! Доставляем заказы почтой по России, в Казахстан и Беларусь. Подробности смотрите в разделе сайта «Доставка».</p>
			</div>
			<div id="article2">
				<div class="left_art">
					<h2>Преимущества использования аппарата для домашней варки пива</h2>
					<p>Домашняя мини-пивоварня — это настоящий пивной заводик на дому. Домашняя мини-пивоварня дарит редкую возможность примерить на себя почетную профессию пивовара. Преимущества такого агрегата для дома очевидны:<br>- Вы сами следите за качеством сырья и расходных материалов и точно знаете из чего сделано ваше пиво<br>- Больше никаких консервантов и другой «химии»<br>- Домашняя пивоварня не займет в доме много места<br>- Мини-пивоварня при создании пенного напитка использует классическую технологию приготовления пива. Напиток на выходе получается непастеризованным и нефильтрованным<br>- Процедура приготовления достаточно проста<br>- Процесс пивоварения проходит при комнатной температуре и не требует особого контроля за процессом брожения.</p>
				</div>
				<div class="right_art">
					<h2>Доставка</h2>
					<p>Нужна домашняя минипивоварня? Решили порадовать друзей и близких пивом собственного приготовления, а сроки поджимают? Оперативно доставим минипивоварню курьером в Москве, Казани, Санкт-Петербурге и других городах! Доставляем заказы почтой по России, в Казахстан и Беларусь.<br>
					<br></p>
					<h2>Гарантии</h2>
					<p>Если наша домашняя пивоварня Вам не понравится, то Вы без объяснения причин можете отказаться от заявки в любое время до получения агрегата, а также в течение 7 суток после доставки. Товары нашего интернет-магазина снабжены сертификатами качества и обеспечены гарантией, оформленной в соответствии с положениями законодательства. Поэтому, если Вы решили купить мини-пивоварню в «moonshineshop.ru», то волноваться о ее качестве не нужно.</p>
				</div>
			</div>
		</main>
    	<?php require_once "basket.php" ?>
		<?php require_once "footer.php" ?>
		
		
		<script type="text/javascript">
		$(document).ready(function() {
    		$("a.topLink").click(function() {
      			$("html, body").animate({
         		scrollTop: $($(this).attr("href")).offset().top + "px"},
					{duration: 500, easing: "swing"
		  		});
		  	return false;
			});
		});
		</script>
		<script>
		$(document).ready(function() {
			$("#form").submit(function() {
				$.ajax({
					type: "POST",
					url: "mail.php",
					data: $(this).serialize()
				}).done(function() {
					$(this).find("input").val("");
					alert("Спасибо за заявку! Скоро мы с вами свяжемся.");
					$("#form").trigger("reset");
				});
				return false;
			});
		});
	</script>
</body>
</html>