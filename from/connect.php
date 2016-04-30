<?php

$db = array(
  'type' => 'mysql',
  'host' => 'localhost:3306',
  'name' => 'database_name',
  'user' => 'root',
  'pass' => 'root'
);

# MySQL
$connect = new PDO("{$db['type']}:host={$db['host']};dbname={$db['name']}", "{$db['user']}", "{$db['pass']}");
$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$connect->exec("set names utf8");
