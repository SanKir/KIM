<?php 
	$connection = mysqli_connect('localhost','root','','russianpie');
	if($connection == false) echo 'Ошибка '.mysqli_connect_error();
?>