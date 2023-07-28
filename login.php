<!DOCTYPE html>
<html>
<head>
  <title>Мой сайт</title>
</head>
<body>

  <h1>Авторизация</h1>

  <form method="post" action="login.php">
    <label for="username">Логин:</label>
    <input type="text" name="username" id="username">

    <label for="password">Пароль:</label>
    <input type="password" name="password" id="password">

    <input type="submit" value="Войти">
  </form>

  <?php
  session_start();

  // Проверяем, была ли отправлена форма
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем логин и пароль, введенные пользователем
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Проверяем, совпадают ли логин и пароль с данными пользователя
    if ($username === "Amir.Pirnazarov" && $password === "1234") {
      // Если данные правильные, сохраняем их в сессии
      $_SESSION["username"] = $username;
      // Перенаправляем пользователя на главную страницу
      header("Location: /index.php");
      exit();
    } else {
      // Если данные неверные, выводим сообщение об ошибке
      echo "Неверный логин или пароль.";
    }
  }
  ?>

</body>
</html>
