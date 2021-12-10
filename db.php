<?php 
  $mysqli = new mysqli("127.0.0.1", "mysql", "", "luckru", 3306);
  $res = $mysqli->query("SELECT * FROM phone_book");
  
  
  foreach ($res as $row){
    echo 'FullName = ' . $row['FullName'] . 'Phone' . $row['Phone'] . "\n";
  }
?>