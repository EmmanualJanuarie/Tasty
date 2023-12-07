<!--===================== [Connecting to MySql Database ] ==========================-->
<php?
 
$dsn ="mysql:host=localhost; dbname=tasty_db;"

$dbusername ="root";
$dbpassword ="";

try{
    $pdo = new PDO($dsn, $dbusername, $dbpassword );
    $pdo->setAttribute(PDO::)
}catch () {

}



