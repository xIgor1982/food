<?php
// Перевод данных из JSON - нужен для работы с форматом JSON
$_POST = json_decode(file_get_contents("php://input"), true);

echo var_dump($_POST);