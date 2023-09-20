<?php
session_start();

echo 'Автор: Адаев Павел';

// Если внутри сессии существует непустая переменная с именем пользователя
if (isset($_SESSION["username"]) && !empty($_SESSION["username"])) {
    // просто приветствуем пользователя и предлагаем выйти
    echo "<h1>Добро пожаловать, " . htmlspecialchars($_SESSION["username"]) . "!</h1>";
    echo "<p><a href='exit.php'>Выйти</a></p>";
} else {
    // Иначе отображаем форму для ввода имени пользователя
    include 'form.php';
}