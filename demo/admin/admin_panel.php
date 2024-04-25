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

			<a href="register.php">Регистрация</a>
			<a href="autoris.php">Авторизация</a>
			<a href="statement.php">Заявления</a>
			<a href="">Панель администратора</a>
		</header>
		<main>
			<h1>Панель администратора</h1>

			<?php
	$query = "SELECT statements.description, statements.auto_number, statements.status, statements.id, users.FIO 
	FROM statements 
	JOIN users ON statements.user_id = users.id";

	$result = mysqli_query($link, $query);

	while ($row = mysqli_fetch_assoc($result)) {
?>
	<div>
		<h2 style="display: inline;">ФИО:</h2>
		<p style="display: inline;"><?= $row['FIO'] ?></p>
		<h2>Регистрационный номер машины:</h2>
		<p style="display: inline;"><?= $row['auto_number'] ?></p>
		<h2>Описание нарушения:</h2>
		<p><?= $row['description'] ?></p>
		<h2 style="display: inline;">Статус:</h2>
		<p style="display: inline;"><?= $row['status'] ?></p>
		<a href="change_status.php?id=<?= $row['id'] ?>">Изменить статус</a>
	</div>
<?php
	}
?>

				

				

		</main>

		<footer></footer>
	</div>
</body>
</html>