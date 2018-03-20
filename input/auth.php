<?php 
	include '../includes/connection.php';
//***********************Авторизация**************************
	if($_POST['auth'])
	{
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$pass = md5($pass);
		$authorization = mysqli_query($connection,"SELECT * FROM `users` WHERE `email` = '$email'");
		$res_auth = mysqli_fetch_assoc($authorization);
		if($pass == $res_auth['password'])
		{
			$_SESSION['logged_user'] = $res_auth;
			header('Location:/');
		}
		else echo 'Неверный email или пароль!';
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../style1.css">
	<meta charset="UTF-8">
	<title>Авторизация</title>
</head>
<body>
	<div class="wrapper">

<?php include "../includes/header.php"; ?>


			<div class="contentAuth">
				<h1 id="h1Auth">Авторизация</h1>
				<form action="" method="post">
					<input type="login" name="email" size="20" placeholder="Эл.почта: Ivanov@mail.ru" class="input1"></input><br>
					<input type="password" name="pass" size="20" placeholder="Пароль: ********" class="input1"></input><br>
					<input type="submit" name="auth" size="20" value="Вход" class="button1"></input><br>
				</form>
			</div>
			
<?php include "../includes/footer.php"; ?>
</body>
</html>