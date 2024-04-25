<?php 

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="css/admin_autoris.css">
</head>
<body>
	<div class="parent_block">
		<header>
			<div>
				<h1>Нарушениям.Нет</h1>
			</div>

			<a href="register.php">Регистрация</a>
			<a href="autoris.php">Авторизация</a>
			<a href="statement.php">Заявления</a>
			<a href="">Панель администратора</a>
		</header>
		<main>
			<h1>Вход в панель администратора</h1>

			<div>
				<form action="config/admin_autoris.php" method="post">
					<input type="text" name="login" placeholder="Логин">
					<input type="password" name="password" placeholder="Пароль">
					<input type="submit" name="" id="button" value="Авторизоваться">
				</form>
				<p id="error">
					<?php
						if ($_SESSION['message']){
							echo $_SESSION['message'];
						}
						unset($_SESSION['message']);
					?>
				</p>
			</div>
		</main>
	</div>
</body>
</html>