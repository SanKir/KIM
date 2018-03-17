<?php 
	function Input()
	{
		if($_SESSION['logged_user'])
		{
			echo '<a href="#" id="menuAvtoriz">Личный кабинет</a>';
		}
		else 
		{
			echo '<a href="/input/auth.php" id="menuAvtoriz">Авторизация</a>
				  <a href="/input/registration.php" id="menuAvtoriz">Регистрация</a>';
		}
	}
?>

<div class="main_header">
			<div class="input">
					<?php Input(); ?>
			</div>
			<div class="header">
				<a href="/index.php"><img id="logo" src="/image/logo3.png"></a>
				<a href="/index.php"><img id="logo3" src="/image/fit.png"></a>
				<a href="/index.php"><img id="logo2" src="/image/logo11.png"></a>
			</div>
			<div class="menu"></div>
</div>