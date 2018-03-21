<?php 
	include "/includes/connection.php";

	function GetStatus()
	{
		$status = '';
		if(isset($_SESSION['logged_user']))
		{
			$status = 'Online';
		}
		else $status = '';
		return $status;
	}

?>

<?php 
	include "/includes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style1.css">
	<meta charset="UTF-8">
	<title>Личный кабинет</title>
</head>
<body>
	<div class="wrapper">
		<?php include "/includes/header.php"; ?>
		<div class="my_profile clearfix">
			<div class="profile_menu">
				<ul>
					<li><img src="/image/message.png"><a href="">Моя страница</a></li>
					<li><img src="/image/message.png"><a href="/messenger.php">Мои сообщения</a></li>
					<li><img src="/image/message.png"><a href="">Мои темы</a></li>
				</ul>
			</div>
			<div class="photo">
				<div class="myphoto">
					<img src="/image/unnamed.png">
				</div>
				<div class="redact_photo">
					<a href="">Редактировать</a>
				</div>
			</div>
			<div class="my_info">
				<div class="top_myinfo clearfix">
					<div class="fio">
						<p>Бутов Иван</p>
					</div>
					<div class="status">
						<p><?php echo GetStatus(); ?></p>
					</div>
				</div>
				<div class="main_info">
					<p>
						Дата рождения: 10 июня 1998<br>
						Предпочитаемые языки программирования: С#, PHP, 1C<br>
						<pre id="count_answ">Количество ответов: 100<br></pre>
						<pre id="rep">Репутация: +100<br></pre>
					</p>
					<div class="rewards">
						<h3>Мои награды:</h3>
						<div class="my_rewards">
							<img src="/image/sherif.jpg">
							<img src="/image/sherif.jpg">
							<img src="/image/sherif.jpg">
							<img src="/image/sherif.jpg">
						</div>
					</div>
				</div>
				<div class="my_mind">
				<form action="" method="post">
					<textarea name="mind" placeholder="Добавить запись на свою страницу"></textarea>
					<input type="submit" name="done">
				</form>
			</div>
			</div>
		</div>
		<?php include "/includes/footer.php"; ?>
	</div>
</body>
</html>