<?php 

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

session_start();
if ($_SESSION['user']) {
	header('Location: statement.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="css/autoris.css">
</head>
<body>
	<div class="parent_block">
		<header>
			<div>
				<h1>Нарушениям.Нет</h1>
			</div>
			<a href="config/logout.php">Выйти</a>
			<a href="register.php">Регистрация</a>
			<a href="autoris.php">Авторизация</a>
			<a href="statement.php">Заявления</a>
			<a href="admin_autoris.php">Панель администратора</a>
		</header>
		<main>
			<h1>Авторизация</h1>

			<div>
				<form action="config/signin.php" method="post">
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