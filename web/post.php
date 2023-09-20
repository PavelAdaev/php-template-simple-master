<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    // Сохраняем имя пользователя в сессии
    $_SESSION["username"] = $username;

    // Перенаправляем браузер обратно на index.php
    header("Location: index.php");
    exit();
} else {
    // Если обращение не через POST-запрос, можно выполнить другие действия.
    echo "Доступ запрещен!";
}