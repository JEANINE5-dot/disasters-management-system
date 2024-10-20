<!-- this file session when a student login to identify his details(name,photo,etc..) 
it is in header_stu.php in order to be in every student page-->
<?php
session_start();
// this is include of database connection file
include 'admin/include/conn.php';
if (!isset($_SESSION['citizen_id'])) {
	header("location:login.php");
}

$citizen_id=$_SESSION['citizen_id'];

$userr= "SELECT *,citizen.c_id AS citid FROM citizen JOIN sector ON citizen.sect_id=sector.sec_id WHERE citizen.c_id='$citizen_id'";
$exl= mysqli_query($db,$userr);
$erow= mysqli_fetch_array($exl);
$student_dep=$erow['c_name'];
$stu_profile=$erow['c_profile'];
$sect_id=$erow['sect_id'];
// $admin_phone=$erow['phone'];
// $admin_password=$erow['password'];




  ?>