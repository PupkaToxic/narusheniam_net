<?php

	ini_set('display_errors', 0); /* Снос ошибок */
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
	require_once 'config/connect.php';


	session_start();
	if (!$_SESSION['user']) { /* Если пользователь активен, открывается доступ к главной странице */
		header('Location: autoris.php');
	}
	
	$id = $_SESSION['user']['id'];
	
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="css/statement.css">
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
			<a href="">Заявления</a>
			<a href="admin_autoris.php">Панель администратора</a>
		</header>
		<main>
			<h1>Заявления</h1>
			<a href="add_statement.php">Добавить новое заявление</a>

			<?php

				$statements = mysqli_query($link, query:"SELECT *  FROM `statements` WHERE `user_id` = '$id'"); /* Выборка элементов из базы данных */
				$statements = mysqli_fetch_all($statements);
				
				foreach ($statements as $statements) {
			?>

			<div>
				<h2>Регистрационный номер машины:</h2>
				<p><?= $statements[2] ?></p>
				<h2>Описание нарушения:</h2>
				<p><?= $statements[1] ?></p>
				<h2>Статус:</h2>
				<p><?= $statements[3] ?></p>
			</div>

			<?php
			}

			?>

		</main>

		<footer></footer>
	</div>
</body>
</html>