<?php
  session_start();

  // Database
  $database_type = 'mysql'; // Serv MySQL 
  $database_serv = 'localhost:3306'; // Serv MySQL 
  $database_user = 'root'; // User MySQL
  $database_pass = 'root'; // Password MySQL
  $database_bd = 'name_database'; // Database

  // Connection
  $database_conexBD = new PDO("{$database_type}:host={$database_serv};dbname={$database_bd}", "{$database_user}", "{$database_pass}");
  $database_conexBD->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $database_conexBD->exec("set names utf8");