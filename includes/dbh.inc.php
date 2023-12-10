<!--===================== [Connecting to MySql Database ] ==========================-->
<?php
 
$dsn = "mysql:host=localhost; dbname=tasty_db";

$dbusername = "root";
$dbpassword= "";

try {
    $pdo = new PDO($dsn, $dbusername, $dbpassword); //This will allow us to connect to the database
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);//will allow us to cahnge some features of the 'pdo' object 
} catch (PDOException $e) {
   echo "Connection Failed: ". $e->getMessage();
}





