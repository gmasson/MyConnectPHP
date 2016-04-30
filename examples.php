<?php

  include 'from/connect.php';
  
  // Connection examples

  /* INSERT */
  $insert = $connect->prepare("INSERT INTO users (name, email) VALUES (:name, :email)"); 
  $insert->bindParam(":name","Full Name"); 
  $insert->bindParam(":email","email@email.com"); 
  $insert->execute();

  /* DELETE */
  $delete = $connect->prepare("DELETE FROM users WHERE id=:id");
  $delete->bindParam( ":id", "1", PDO::PARAM_STR );
  $delete->execute();

  /* UPDATE */
  $update = $connect->prepare("UPDATE users SET name=:name WHERE id=:id");
  $update->bindParam(":name","Full Name"); 
  $update->bindParam(":id","1"); 
  $update->execute();

  /* SELECT */
  $select = $connect->prepare("SELECT * FROM users WHERE name LIKE :search");
  $select->bindParam( ":search", "%test%" );
  $select->execute();

?>
