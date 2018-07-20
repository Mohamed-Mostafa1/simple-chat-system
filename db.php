<?php
try
{
    $dsn = 'mysql:host=localhost;dbname=chat;charset=utf8';
    $user = 'root';
    $password = '';
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $password, $options);
}
catch(Exception $e)
{
    die('coudn\'t connect to database');
}
