<?php
  include 'db_php/connect.php';
  
  // Connection examples

  /* INSERT */
  $insert = $connect_mysql->prepare("INSERT INTO people(name, email) VALUES(:name, :email)"); 
  $insert->bindParam(":name","Name"); 
  $insert->bindParam(":email","email@email.com"); 
  $insert->execute();

?>
