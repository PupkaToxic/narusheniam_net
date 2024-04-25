<?php

	ini_set('display_errors', 0); /* Снос ошибок */
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);


	session_start();
	if ($_SESSION['user']) { /* Если пользователь активен, открывается доступ к главной странице */
		header('Location: statement.php');
	}
	
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body>
	<div class="parent_block">
		<header>
			<div>
				<h1>Нарушениям.Нет</h1>
			</div>

			<a href="">Регистрация</a>
			<a href="autoris.php">Авторизация</a>
			<a href="statement.php">Заявления</a>
			<a href="admin_autoris.php">Панель администратора</a>
		</header>
		<main>
			<h1>Регистрация</h1>

			<div>
				<form onsubmit="return CheckForm(this)" action="config/signup.php" method="post" >
					<input type="text" name="FIO" placeholder="ФИО" class="FIO" id="FIO">
					<input type="tel" name="phone_number" required placeholder="Номер телефона" class="tel" id="tel">
					<input type="email" name="email" placeholder="Email" class="email" id="email">
					<input type="text" name="login" placeholder="Логин" class="login" id="login">
					<input type="password" name="password" placeholder="Пароль" class="password" id="password">
					<input type="submit" name="" id="button" value="Зарегистрироваться">
				</form>
				<p id="error" class="error">
					<?php
						if ($_SESSION['message']){ /* Уведомление об ошибке */
							echo $_SESSION['message'];
						}
						unset($_SESSION['message']);
					 ?>
				</p>
			</div>
		</main>
	</div>
	<script src="js/register.js"></script>
</body>
</html>