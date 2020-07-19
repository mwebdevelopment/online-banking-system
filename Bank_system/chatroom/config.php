<?php 
$dbhost = "localhost";
$dbname = "bank_db";
$dbuser = "root";
$dbpass = "";


try{
    $db = new PDO("mysql:dbhost=$dbhost; dbname=$dbname", "$dbuser", "$dbpass" );
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "error".$e->getMessage();
}



?>