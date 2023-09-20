<?php
session_start();

// Очищаем переменную сессии, содержащую имя пользователя
unset($_SESSION["username"]);

// Перенаправляем браузер обратно на index.php
header("Location: index.php");
exit();