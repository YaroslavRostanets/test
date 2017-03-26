<?php

global $con;

$con = mysqli_connect("mysql.hostinger.com.ua", "u539267858_anma", "qwerty12345", "u539267858_anma");
mysqli_set_charset($con, "utf8");

if(mysqli_connect_errno()){
    echo "Ошибка подключения к БД # ".mysqli_connect_errno();
}

?>