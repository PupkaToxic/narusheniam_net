
<?php

	ini_set('display_errors', 0); /* Снос ошибок */
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);


	session_start();
	if (!$_SESSION['user']) { /* Если пользователь активен, открывается доступ к главной странице */
		header('Location: autoris.php');
	}
	
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="css/add_statement.css">
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
			<h1>Подать заявление</h1>

			<div>
				<form action="config/statement_controller.php" method="post">
					<input type="text" name="auto" placeholder="Регистрационный номер авто">
					<textarea placeholder="Описание нарушения" name="description"></textarea>
					<input type="hidden" name="status" value="Отправлено">
					<input type="submit" name="" id="button" value="Отправить">
					<p id="error">
					<?php
						if ($_SESSION['message']){
							echo $_SESSION['message'];
						}
						unset($_SESSION['message']);
					?>
				</p>
				</form>
			</div>
		</main>
	</div>
</body>
</html>