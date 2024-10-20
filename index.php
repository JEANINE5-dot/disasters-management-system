<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ODIMS</title>
  <!-- the photo of IPRC in the browser -->
  <link rel="icon" href="images/wseal.jpg" type="">
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
  <script>
     new WOW().init();
  </script>
</head>
<style type="text/css">
  html {
  scroll-behavior: smooth;
}
  .navbar-dark .navbar-nav .nav-link.active,.navbar-dark .navbar-nav .nav-link:hover{
    color: orange;
  }

  html,
  body,
  header,
  #intro{
    height: 100%;
  }
  #intro{
    background: url('images/banner.jpg')no-repeat center center fixed;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    background-size:cover;
  
  }
  .navbar{
      /*font-weight: 600;
      letter-spacing: .1rem;*/
      background: rgba(0,0,0,.6)! important;
    }
</style>
<body  >

  <!-- Start your project here-->  

  <!-- main navigation -->

    <header class="">
      <!--Navbar-->
      <nav class="navbar navbar-expand-lg navbar-dark black fixed-top scrolling-navbar">

        <div class="container">
          <!-- Navbar brand -->
          <img src="images/rwd.jpg" style="width: 100px;height: 50px" class="navbar-brand">
        <a class="navbar-brand" style="color:orange" href="#">Rubavu District</a>

        <!-- Collapse button -->

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
          aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" >

          <!-- Links -->
          <ul class="navbar-nav ml-auto ">
            <!-- <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link mr-4" href="index.php">HOME</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link mr-4" href="login.php">ABOUT US</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link mr-4" href="login.php">LOG IN</a>
            </li>

            <!-- Dropdown -->
            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->

          </ul>
          <!-- Links -->

         
        </div>
        <!-- Collapsible content -->
        </div>
    
      </nav>
      <!--/.Navbar-->
      <!-- marsk -->
      <div id="intro" class="view justify-content-center">
        <div class="mask flex-center rgba-orange-light">
        <div class="full-bg-img">
          <div class="container">
           <div class="row text-center ">
             <div class="col-md-10 offset-1">
               <h3 class=" text-dark" height="100"  style="text-align: center; font-weight: 50px; font-size: 35px; font-color:white; font-variant: 70px; background-color: grey;  background-size:50px; ">ONLINE DISASTERS INVENTORY MANAGEMENT SYSTEM</h3>
             
               <hr class="hr-dark strong">
             
               <p class="text-light font-weight-bold" height="100"  style="text-align: center;font-weight: 50px; font-size: 30px; font-variant: 60px;">This is A Rwandan Plattiform For Citizen</p><p2 class="text-light font-weight-bold" height="100"  style="text-align: center;font-weight: 50px; font-size: 30px; font-variant: 60px;"> To make any report regarding to natural damaged of their properties(natural disasters impacts)</p2>
             
             
             
             </div>          
           </div>
         </div>
        </div>
        </div>
      </div>
      <!-- /marsk -->
    </header>
  </body>
  </html>