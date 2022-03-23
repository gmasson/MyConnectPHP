<?php
/**
 * PDOConn - Connection examples
*/

include 'database.php';

/* INSERT */
$insert = $database_conexBD->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
$insert->bindValue(":name", "Full Name"); 
$insert->bindValue(":email", "email@email.com"); 
$insert->execute();

/* DELETE */
$delete = $database_conexBD->prepare("DELETE FROM users WHERE id=:id");
$delete->bindValue( ":id", "1", PDO::PARAM_STR );
$delete->execute();

/* UPDATE */
$update = $database_conexBD->prepare("UPDATE users SET name=:name WHERE id=:id");
$update->bindValue(":name", "Full Name"); 
$update->bindValue(":id", "1"); 
$update->execute();

/* SELECT */
$select = $database_conexBD->prepare("SELECT * FROM users WHERE name LIKE :search");
$select->bindValue( ":search", "%test%" );
$select->execute();
