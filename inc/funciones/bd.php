<?php

define('DB_USUARIO', '');
define('DB_PASSWORD', '');
define('DB_HOST', '');
define('DB_NOMBRE', '');

$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE, 3306);
$conn->set_charset('utf8');
if ($conn->connect_error) {
    echo $error->$conn->connect_error;
}
