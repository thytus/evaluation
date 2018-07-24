<?php

session_start();

// I connect with the DTB
$db ='mysql:host=localhost;dbname=userslist';
$login='root';
$pwd='';
$attributes=[
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$pdo = new PDO($db, $login, $pwd, $attributes);
