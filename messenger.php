<?php 
	include "/includes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="UTF-8">
	<title>Мои сообщения</title>
</head>
<body>
	<div class="wrapper">
		<?php include "/includes/header.php"; ?>
		<div class="content54">
		<a href="myprofile.php"><input type="submit" value="Моя страница" class="buttonMess"></a> <Br>
		<input type="submit" value="Новости" class="buttonMess"><Br>
		<input type="submit" value="Мои фотографии" class="buttonMess"><Br>
		<a href="messenger.php"><input type="submit" value="Мои сообщения" class="buttonMess"></a><Br>
		<input type="submit" value="Мои ответы" class="buttonMess"><Br>
		<input type="submit" value="Мои Группы" class="buttonMess"><Br>
		</div>
		<div class="messenger"></div>
		<div class="poleMess" >
		<div class="divSpisok">
		<pre class="preMess">Частые диалоги</pre>
		<input type="submit"  value="Кирилл Саньков" id="button3Mess"></input>
		<input type="submit"  value="Бутов Иван" id="button3Mess"></input>
		<input type="submit"  value="Дудин Никита" id="button3Mess"></input>
		<input type="submit"  value="Мамонт" id="button3Mess"></input>
		</div>
		<div class="divText"><input type="text"  class="textMess" readonly></div>
		<div class="pole2Mess">
		<textarea type="text" placeholder="Введите сообщение" id="text2Mess"></textarea>
		<div class="textArea"><input type="text"  placeholder="Адрес получателя" id="text3Mess"></input></div>
		<div class="butMess"><input type="submit"  value="Отправить" id="button2Mess"></input></div>
		</div>
		</div>
		
		<?php include "/includes/footer.php"; ?>
	</div>
</body>
</html>