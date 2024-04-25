<?php

	ini_set('display_errors', 0); /* Снос ошибок */
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
	require_once 'config/connect.php';


	session_start();
	if (!$_SESSION['user']) { /* Если пользователь активен, открывается доступ к главной странице */
		header('Location: autoris.php');
		$id = $_SESSION['user']['id'];
	}

    $statement_id = $_GET['id'];
    $statements = mysqli_query($link, "SELECT *  FROM `statements` WHERE `id` = '$statement_id'");
    $statements = mysqli_fetch_assoc($statements);
	
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link rel="stylesheet" type="text/css" href="css/admin_panel.css">
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
			<a href="">Панель администратора</a>
		</header>
		<main>
            <form action="config/update.php" method="post">
                <input type="hidden" name="id"  value="<?= $statements['id'] ?>">
                <input type="text" name="status" placeholder="Измените статус" value="<?= $statements['status'] ?>">
                <button type="submit">Отправить</button>
            </form>
        </main>
</body>
</html>