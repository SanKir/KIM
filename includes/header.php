<?php 
	function Input()
	{
		if(isset($_SESSION['logged_user']))
		{
			echo '<div class="form_auth"><img src="/image/useracc.png"><pre>'.$_SESSION['logged_user']['firstname'].' '.$_SESSION['logged_user']['lastname'].'</pre></div>
				  <div class="form_input"><a href="/myprofile.php" class="menuAvtoriz">Личный кабинет</a>
				  <a href="/logout.php" class="menuAvtoriz">Выход</a></div>';
		}
		else 
		{
			echo '<div class="form_input"><a href="/input/auth.php" class="menuAvtoriz">Авторизация</a>
				  <a href="/input/registration.php" class="menuAvtoriz">Регистрация</a></div>';
		}
	}
?>

<div class="main_header">
			<div class="input">
				<?php Input(); ?>
			</div>
			<div class="header">
				<a href="../index.php"><img id="logo" src="/image/logo3.png"></a>
				<a href="../index.php"><img id="logo3" src="/image/fit.png"></a>
				<a href="../index.php"><img id="logo2" src="/image/logo11.png"></a>
			</div>
			<div class="menu">
				<ul class="top_menu">
					<li><a href="#">Форум</a></li>
					<li><a href="#">Что нового?</a></li>
					<li><a href="#">Чат</a></li>
					<li><a href="#">Платные услуги</a></li>
					
				</ul>
			</div>
</div>