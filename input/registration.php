<?php 
	include "../includes/connection.php";
//*****************************Регистрация**************************
	if($_POST['reg'])
	{
		$email = $_POST['email'];
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		if($password == $confirm_password)
		{
			$password = md5($password);
			$query  = mysqli_query($connection,"INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES (NULL,'$name','$surname'
				,'$email','$password')");
		}
		else echo 'Пароли не совпадают!';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="../style1.css">
	<meta charset="UTF-8">
	<title>Регистрация</title>
</head>
<body>
	<div class="wrapper">

<?php include "../includes/header.php"; ?>

			<div class="contentReg">
				<h1 id="h1Reg">Регистрация</h1>
				<form action="" method="post">
					<input type="login" name="email" size="20" placeholder="Эл.почта: Ivanov@mail.ru" class="input1"></input><Br>
					<input type="login" name="surname" size="20" placeholder="Фамилия: Иванов" class="input1"></input><Br>
					<input type="login" name="name" size="20" placeholder="Имя: Иван" class="input1"></input><Br>
					<input type="password" name="password" size="20" placeholder="Пароль: ********" class="input1"></input><Br>
					<input type="password" name="confirm_password" size="20" placeholder="Повторите пароль: ********" class="input1"></input><Br>
					<input type="submit" name="reg" size="20" value="Регистрация" class="button1"></input><Br>
				</form>
			</div>
<?php include "../includes/footer.php"; ?>		
</body>
</html>