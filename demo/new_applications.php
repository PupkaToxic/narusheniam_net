<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/css.css">
    <title>НАРУШЕНИЯМ.НЕТ</title>
</head>
<body>
    <div class="header">
       <a href="index.php"> <h1 class="MainText">НАРУШЕНИЯМ.НЕТ</h1></a>
    </div>
    <div class="MainPage">
        
        <form action="config/statement_controller.php" method="post">
					<input type="text" name="auto" placeholder="Регистрационный номер авто">
					<textarea placeholder="Описание нарушения" name="description"></textarea>
					<input type="hidden" name="status" value="Отправлено">
					<input type="submit" name="" id="button" value="Отправить">
		</form>

        
    </div>
</body>
</html>

