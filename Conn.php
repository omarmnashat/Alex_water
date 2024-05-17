<?php 
$dsn = "mysql: host = localhost;dbname=ttest";
$user = 'root';
$pass = "";
$lang = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8");

try{
    $db = new PDO($dsn,$user,$pass,$lang);
    $dbb-> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Wrong" . $e->getLine();
}
?>