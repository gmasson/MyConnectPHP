<?php
  include 'database.php';
  
  // Connection examples

  /* INSERT */
  $insert = $database_conexBD->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
  $insert->bindParam(":name","Full Name"); 
  $insert->bindParam(":email","email@email.com"); 
  $insert->execute();

  /* DELETE */
  $delete = $database_conexBD->prepare("DELETE FROM users WHERE id=:id");
  $delete->bindParam( ":id", "1", PDO::PARAM_STR );
  $delete->execute();

  /* UPDATE */
  $update = $database_conexBD->prepare("UPDATE users SET name=:name WHERE id=:id");
  $update->bindParam(":name","Full Name"); 
  $update->bindParam(":id","1"); 
  $update->execute();

  /* SELECT */
  $select = $database_conexBD->prepare("SELECT * FROM users WHERE name LIKE :search");
  $select->bindParam( ":search", "%test%" );
  $select->execute();

?>
