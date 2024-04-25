<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/autorization.css">
    <title>НАРУШЕНИЯМ.НЕТ</title>
</head>
<body>
    <div class="header">
    <a href="index.php" class="MainText">НАРУШЕНИЯМ.НЕТ</a>
    </div>
    <div class="MainPage">
            <form class="ContAutorizForm" action="bindigs/autoriz.php" method="post">
                <div class="FormMainAutorizText">
                    <h2 class="TextAutorizName">Авторизация</h2>
                    <input type="text"class="InputText" name="login" id="login" placeholder="Логин"><br>
                    <input type="text"class="InputText" name="pass" id="pass" placeholder="Пароль"><br>
                    <button class="ButtonAutoriz"type="submit" id="submit">Войти</button> 
                    <h3 class="Text">Если нету аккаунта то <a href="register.php">Регистрируйтесь</a></h3>
                    <p id="error" class="error">
					
                </div>
             </form>
    </div>
    <script src="script.js"></script>
</body>
</html>

