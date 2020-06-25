<?php

define('DB_USUARIO', 'sw5MxXGW5u');
define('DB_PASSWORD', 'pjZJI2ypmy');
define('DB_HOST', 'remotemysql.com');
define('DB_NOMBRE', 'sw5MxXGW5u');

$conn = new mysqli(DB_HOST, DB_USUARIO, DB_PASSWORD, DB_NOMBRE, 3306);
$conn->set_charset('utf8');
if ($conn->connect_error) {
    echo $error->$conn->connect_error;
}
