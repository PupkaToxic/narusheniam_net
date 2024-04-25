<?php

	ini_set('display_errors', 0); /* Снос ошибок */
	ini_set('display_startup_errors', 0);
	error_reporting(E_ALL);
	require_once 'bindigs/connect.php';


	session_start();
	if (!$_SESSION['user']) { /* Если пользователь активен, открывается доступ к главной странице */
		header('Location: autorization.php');
	}

	$id = $_SESSION['user']['id'];
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>НАРУШЕНИЯМ.НЕТ</title>
	<link rel="stylesheet"  href="Css/MainIndex.css">
</head>
<body>
    <div class="header">
        <div class="MainContText">
            <a href="index.php" class="MainText">НАРУШЕНИЯМ.НЕТ</a>
        </div>
    </div>


		<main>
			<h1>Заявления</h1>
			<a href="config/logout.php">Выйти</a>
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