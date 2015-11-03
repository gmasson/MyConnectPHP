<?php
  include 'info.php';
  try { $connect_mysql = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password); }
  catch(PDOException $e) { die("Oops, an error occurred"); }
