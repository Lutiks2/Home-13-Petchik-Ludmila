<?php

/* Подключение к серверу MySQL */
$mysqli = new mysqli('localhost', 'root','', 'home13');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

?>
