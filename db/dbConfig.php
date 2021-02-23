<?php 

    try {
        $host = "localhost";
        $dbname = "universityapply";
        $user = "root";
        $password = "";

        $db_connect = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
        $db_connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        
?>