<?php 
	include "/includes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<meta charset="UTF-8">
	<title>Личный кабинет</title>
</head>
<body>
	<div class="wrapper">
		<?php include "/includes/header.php"; ?>
		<div>
		<div class="content54">
		<input type="submit" value="Моя страница" class="button56"> <Br>
		<input type="submit" value="Новости" class="button56"><Br>
		<input type="submit" value="Мои фотографии" class="button56"><Br>
		<input type="submit" value="Мои сообщения" class="button56"><Br>
		<input type="submit" value="Мои ответы" class="button56"><Br>
		<input type="submit" value="Мои Группы" class="button56"><Br>
		</div>
		
		<div class="content55">
		<img src="/image/foto.jpg" class="foto">
		<input type="submit" value="Изменить фотографию" class="button60"><Br>
		</div>
		<div class="content56">
		<pre id="FIO">Бутов Иван                             Online</pre>
		<pre id="Group">Дата Рождения: 10 июля 1998</pre>
		<pre id="programs">Предпочитаемые языки программирования: С#, JS, HTMl,PHP,1C</pre> 
		<input type="text" id="text" placeholder="Добавить запись на свою страницу"></input>
		<input type="submit" value="Добавить" id="button101"></input>
		<img src="/image/pic.png" id="pic"></img>
		<img src="/image/foto.jpg" id="fotoP"></img>
		<pre id="zapic">Жизнь удалась, если коньяк, который мы пьем,<Br> старше женщин, с которыми мы спим.<pre>
		<pre id="zapic2">20.03.2018|<a href="#">Ответить</a><pre>
		<a href="#"><img src="/image/like.png" id="Flike"></img></a>
		</div>
		</div>
		<?php include "/includes/footer.php"; ?>
	</div>
</body>
</html>