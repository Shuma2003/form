<!DOCTYPE html>
<html>
<head>
    <title>Форма регистрации</title>
</head>
<body>
    <h2>Форма регистрации</h2>
    <form action="register.php" method="POST">
        <label for="username">Имя пользователя:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Зарегистрироваться">
    </form>
    
    <?php
    // Проверка отправки формы
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Получение отправленных данных
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        
        // Проверка правильности введенных данных и выполнение необходимых действий
        // (например, сохранение данных в базе данных)
        
        // Перенаправление на страницу авторизации после успешной регистрации
        header('Location: login.php');
        exit();
    }
    ?>
</body>
</html>