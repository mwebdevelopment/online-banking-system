<?php 
session_start();
        
if(!isset($_SESSION['admin_login'])) 
    header('location:adminlogin.php');   
?>
<?php
include '_inc/dbconn.php';
$name=  mysqli_real_escape_string($connect, $_REQUEST['staff_name']);
$gender=  mysqli_real_escape_string($connect, $_REQUEST['staff_gender']);
$dob=  mysqli_real_escape_string($connect, $_REQUEST['staff_dob']);
$status=  mysqli_real_escape_string($connect, $_REQUEST['staff_status']);
$dept=  mysqli_real_escape_string($connect, $_REQUEST['staff_dept']);
$doj=  mysqli_real_escape_string($connect, $_REQUEST['staff_doj']);
$address=  mysqli_real_escape_string($connect, $_REQUEST['staff_address']);
$mobile=  mysqli_real_escape_string($connect, $_REQUEST['staff_mobile']);
$email= mysqli_real_escape_string($connect, $_REQUEST['staff_email']);
$password=  mysqli_real_escape_string($connect, $_REQUEST['staff_pwd']);

$sql="insert into staff values(LAST_INSERT_ID(),'$name','$dob','$status','$dept','$doj','$address','$mobile',
    '$email','$password','$gender', CURRENT_DATE())";
mysqli_query($connect, $sql) or die(mysqli_error($connect));
header('location:admin_hompage.php');
?>