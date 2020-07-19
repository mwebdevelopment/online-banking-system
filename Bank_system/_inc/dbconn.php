<?php
$serverName="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bank_db";
$connect = mysqli_connect($serverName, $dbusername, $dbpassword)/* or die('the website is down for maintainance')*/;
mysqli_select_db($connect, $dbname) or die(mysqli_error());
?>