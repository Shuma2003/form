<!DOCTYPE html>
<html>
<head>
    <title>Форма авторизации</title>
</head>
<body>
    <h2>Форма авторизации</h2>
    <form action="login.php" method="POST">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <input type="submit" value="Войти">
    </form>
    
    <?php
    // Проверка отправки формы
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Получение отправленных данных
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        // Проверка, что поля не пусты
        if (empty($username) || empty($password)) {
            echo 'Заполните все поля!'; // Вывод сообщения об ошибке
        } else {
            // Проверка правильности введенных данных и выполнение необходимых действий
            // (например, проверка данных в базе данных и создание сеанса)
            
            // Перенаправление на главную страницу после успешной авторизации
            header('Location: main.php');
            exit();
        }
    }
    ?>
</body>
</html>