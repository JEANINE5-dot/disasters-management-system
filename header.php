

<?php

include 'session.php';

 $queryyyyy = "SELECT *,disaster_report.re_id AS reuid FROM disaster_report JOIN citizen ON disaster_report.citi_id=citizen.c_id JOIN house ON disaster_report.house_id=house.h_id JOIN disaster ON disaster_report.dis_id=disaster.dis_id WHERE disaster_report.citi_id='$citizen_id' AND disaster_report.notification='unread'";

$resultyyy = mysqli_query($db,$queryyyyy);
$nbr_hol = mysqli_num_rows($resultyyy);
?>

<?php


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ODIMS</title>
  <!-- the photo of IPRC in the browser --
  <link rel="icon" href="images/wseal.jpg" type="" -->
  <link rel="stylesheet" href="admin/css/animate.css">
  <script src="admin/js/wow.min.js"></script>
  <script>
     new WOW().init();
  </script>
  <link rel="stylesheet" href="admin/css/animate2.css">
  <!--  all css are in here...-->
  <link rel="stylesheet" href="admin/bootstrap-4.1.3-dist/css/bootstrap.css">
  <!--end  -->
  <!-- this is css that handle the navbar -->
  <link rel="stylesheet" href="admin/bootstrap-4.1.3-dist/css/mdb.css">
  <!-- end -->
  <!-- this is css file that handle the validation in the form field to check error by making it red.. -->
  <link rel="stylesheet" href="admin/bootstrap-4.1.3-dist/css/validecss.css">
  <!--end -->
  <!-- this is the css file for the chat -->
  <link rel="stylesheet" type="text/css" href="admin/bootstrap-4.1.3-dist/css/chat_bubble.css" media="all">
 
  <!-- end -->

  
  <style type="text/css">
    
  
    html {
    scroll-behavior: smooth;
  }
    

html,
body,
header,
#intro{
  height: 100%;
}
.navbar{
    
    background: rgba(0,0,0,.6)! important;/* to change the navbar color*/
    border-bottom: orange;

  }
  </style>
  <!-- -->
  <body>

    
        <header>
     

      
         
         <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar"  >

           <div class="container">
             <!-- Navbar brand -->
             <img src="images/rwd.jpg" style="width: 100px;height: 50px" class="navbar-brand">
           <a class="navbar-brand mr-5"  href="#" ><?php echo $erow['sector_name']?> Sector</a>

           <!-- Collapse button -->
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
             aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>

           <div class="collapse navbar-collapse" id="basicExampleNav">
             <ul class="navbar-nav ml-auto" >
              
               <li class="nav-item">
                 <a class="nav-link mr-2" href="user.php">HOME</a>
               </li>
               
               
               <li class="nav-item">
                 <a class="nav-link mr-2" href="disaster.php">Declere Property</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link mr-2" href="status.php">Status (<?php echo $nbr_hol;?>)</a>
               </li>
               
             <li class="nav-item dropdown" >
                 <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false"><?php echo $erow['c_name']?></a>
                 <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                   <img src="img/<?php echo $erow['c_profile']?>" style="width: 200px;height: 100px; border-radius: 100%;" class="dropdown-item">
                   <a class="dropdown-item " href="#"><?php echo $erow['c_name']?></a>
                   <a class="dropdown-item" href="update.php">Update Profile</a>
                   <a class="dropdown-item" href="status.php">Status</a>
                   <a class="dropdown-item" href="logout.php">Logout</a>
                 </div>
             </li>
            

              

             </ul>
             <!-- Links -->
             
           
           </div>
           <!-- Collapsible content -->
           </div>
         
         </nav>
       

    
<style type="text/css">

</style>

