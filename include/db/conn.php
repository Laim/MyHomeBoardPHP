<?php

$db_host    = "localhost";
$db_user    = "";
$db_pass    = "";
$db_name    = "";


try {
      $pdo = new PDO("mysql:host=".$db_host.";dbname=".$db_name, $db_user, $db_pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //echo "Connected successfully";
    }
catch(PDOException $e)
    {
      //echo "Connection failed: " . $e->getMessage();
    }

?>
