<?php 
ob_start();
session_start();

include 'admin/include/conn.php'; 

$cat="SELECT * FROM sector";
$cate=mysqli_query($db,$cat);?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ODIMS</title>
  <!-- the photo of IPRC in the browser -->
  <link rel="icon" href="images/wseal.png" type="">
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
    background: url('images/147.jpg')no-repeat center center fixed;
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
        <a class="navbar-brand" style="color: #DDB437" href="#">Rubavu District</a>

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
              <a class="nav-link mr-4" href="#example">ABOUT US</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link mr-4" href="login.php">LOG IN</a>
            </li>

            <!-- Dropdown -->
            <!-- <li class="nav-item dropdown">
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
        <div class="mask rgba-orange-light">
        <div class="full-bg-img">
          <div class="container-fluid">
           <div class="row text-center ">
             <div class="col-md-4 offset-4" style="margin-top: 10%">
               <h3 class=" text-dark"><a href="#login-admin" class="text-">Citizen Login</a></h3>
             
               <hr class="hr-dark strong">
             
                    <?php

                     
                      if (isset($_POST['login-user'])) {
                       $username = $_POST["username"];
                       $password = $_POST["password"];

                        $selectsecurity="SELECT * FROM citizen WHERE c_password='$password' AND c_username='$username'";
                          $Security=mysqli_query($db,$selectsecurity);
                          $stu=mysqli_num_rows($Security);
                          $srow=mysqli_fetch_array($Security);
                          if ($stu>0) {
                           $_SESSION['citizen_id']=$srow['c_id'];
                             header("location:user.php");
                          }
                          else{
                           ?> 
                            
                                  <div class="alert alert-danger  "id="aji">
                                   <button class="close" data-dismiss="alert"></button>
                                   <center><i>Password Or Username is Incorect!!!</i></center>
                                </div>
                                   <?php
                          }
                      }

                    ?>
                    
                      
                        <form action="" method="post">

                          <div class="form-group">
                              <div class="col-md-12">
                                 <label for="employee" >Username</label>
                                 <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                     <span id="phone" class="input-group-text" ><i class="fa fa-user"></i></span>
                                  </div>
                                <input type="text" class="form-control" id="dep_name" name="username" required placeholder="username" >
                              </div>
                            </div>
                          </div>

                         <div class="form-group">
                             <div class="col-md-12">
                                <label for="employee" >Password</label>
                                <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                    <span id="phone" class="input-group-text" ><i class="fa fa-user"></i></span>
                                 </div>
                               <input type="password" class="form-control" id="dep_name" name="password" required placeholder="*********" >
                             </div>
                           </div>
                         </div>

                          <div class=" form-group col-md-12">  
                            <button type="submit" class="btn  btn-block btn-outline-dark" name="login-user"><i class="fas fa-sign-in-alt"></i> Login</button> <a href="#register" class="text-dark">First Time?</a>
                          </div>

                        </form>
                      </div>
                  
                 
               <!-- ******************* LOGIN FORM ENDS ************************** -->
                  </div>
             
             
             
             </div>          
           </div>
         </div>
        </div>
    </header>
    <main class="mt-5" id="register">
      <div class="container-fluid">
              <div class="col-md-8 offset-md-2 mt-5">
                          <?php
                   $username = "";
                    $password = "";
                    $phone = "";
                  
                    $fullname="";
                    $national_id="";
                   
                  if(isset($_POST["register"])){

                    $username = $_POST["username"];
                    $password = $_POST["passworda"];
                    $phone = $_POST["phone"];
                    $fullname = $_POST["fullname"];
                    $sector = $_POST["sector"];
                    $national_id = $_POST["national_id"];
                    $profile=$_FILES['profile']['name'];
                    $profilemove="img/".$_FILES['profile']['name'];
                    $allowed_image_extension = array(
                          "png",
                          "jpg",
                          "jpeg"
                      );
                    $file_extension = pathinfo($_FILES["profile"]["name"], PATHINFO_EXTENSION);
                    $time= date("Y-m-d");

                            $selectm="SELECT * FROM citizen WHERE c_username='$username'";
                            $c= mysqli_query($db,$selectm);
                            $user= mysqli_num_rows($c);
                            $selectm="SELECT * FROM citizen WHERE c_password='$password'";
                            $co= mysqli_query($db,$selectm);
                            $pass= mysqli_num_rows($co);
                            $selectm="SELECT * FROM citizen WHERE c_nationalid='$national_id'";
                            $col= mysqli_query($db,$selectm);
                            $ema= mysqli_num_rows($col);
                            
                           
                         if (!in_array($file_extension, $allowed_image_extension)) {
                          ?>
                          <style type="text/css">
                             #profile{
                               color: #a94442;
                               background-color: #f2dede;
                               border-color: #a94442;
                             }
                           </style>
                           <div class="alert alert-danger animated shake col-md-12" id="aji">
                             <button class="close" data-dismiss="alert"></button>
                             <center><i>Only PNG and JPG are allowed in Profile Field!!!</i></center>
                           </div>
                          <?php
                           
                        }      
                        elseif($user){
                        ?>
                        <style type="text/css">
                          #username{
                            color: #a94442;
                            background-color: #f2dede;
                            border-color: #a94442;
                          }
                        </style> 
                               <div class="alert alert-danger animated shake col-md-12" id="sams1">
                                <button class="close" data-dismiss="alert"></button>
                                <center><i>Username is taken already!!!</i></center>
                             </div>
                        <?php
                      }
                      
                      elseif ($pass) {
                        ?> 
                        <style type="text/css">
                          #passworda{
                            color: #a94442;
                            background-color: #f2dede;
                            border-color: #a94442;
                          }
                        </style> 
                               <div class="alert alert-danger animated shake col-md-12"id="sams1">
                                <button class="close" data-dismiss="alert"></button>
                                <center><i>Password is taken already!!!</i></center>
                             </div>
                                <?php
                      }
                      
                     
                       elseif ($ema) {
                        ?> 
                        <style type="text/css">
                          #passport{
                            color: #a94442;
                            background-color: #f2dede;
                            border-color: #a94442;
                          }
                         
                        </style> 
                               <div class="alert alert-danger animated shake col-md-12" id="sams1">
                                <button class="close" data-dismiss="alert"></button>
                                <center><i>National ID Taken already!!!</i></center>
                             </div>
                                <?php
                      }
                      
                      else{
                        $add="INSERT INTO citizen(c_username,c_password,c_phone,c_date,sect_id,c_nationalid,c_name,c_profile) VALUES ('$username','$password','$phone','$time','$sector','$national_id','$fullname','$profile')";

                          $hemo=mysqli_query($db,$add);
                          $a=move_uploaded_file($_FILES['profile']['tmp_name'], $profilemove);
                      if ($hemo AND $a) {
                        ?> 
                               <div class="alert alert-success strover animated bounce col-md-12"id="sams1">
                                <button class="close" data-dismiss="alert">X</button>
                                <center><i>Successfuly Registred</i></center>
                             </div>
                                <?php
                      }
                      
                      
                   }
                   
                      
                }
                   
                  
                  ?>
                <form class="text-center border border-light p-5" method="post"enctype="multipart/form-data" id="reg_form" action="#register">

            <p class="h4 mb-4" style="color:#DDB437 ">Registration Here</p>
   

            <!-- Name -->
            <div class="form-group row">
          
          <div class="col-md-4">
            <label for="staticEmail"  >ID</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span id="passport" class="input-group-text" ><i class="fa fa-user"></i></span>
                        </div>
                       <input type="text" class="form-control"name="national_id" value="<?php echo $national_id?>" id="passport" placeholder="Your National ID " aria-label="Your Passport Number" aria-describedby="basic-addon1">       
                    </div>
                  </div>
                <!-- </div>
                <div class="form-group row"> -->
                  
          <div class="col-md-4">
            <label for="staticEmail">Fullname</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span id="full" class="input-group-text"><i class="fa fa-user"></i></span>
                        </div>
                       <input type="text" class="form-control"name="fullname"value="<?php echo $fullname?>" id="full" placeholder="Your Fullname" aria-label="Username" aria-describedby="basic-addon1">       
                    </div>
                </div>
                <div class="col-md-4">
            <label for="staticEmail">Username</label>
                    
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span id="username" class="input-group-text" ><i class="fa fa-user"></i></span>
                        </div>
                       <input type="text" class="form-control"name="username" value="<?php echo $username?>" id="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">       
                    </div>
               
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-4">
                  <label for="staticEmail" >Sector</label>
             <div class="input-group mb-3">
                  <div class="input-group-prepend">
                     <span class="input-group-text" id="add"><i class="fa fa-list"></i></span>
                  </div> 
                  <select name="sector" class="form-control selectpicker" required >
                    
                    <?php
                    while ($category=mysqli_fetch_array($cate)) {
                      ?>
                      <option value="<?php echo $category['sec_id'];?>"><?php echo $category['sector_name'];?></option>
                      <?php
                    }
                  ?>
                </select>
                </div>
                    </div>
              <!-- </div>
              <div class="form-group row"> -->
                <div class="col-md-4">
                  <label for="staticEmail">Mobile</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span id="phone" class="input-group-text" ><i class="fa fa-mobile"></i></span>
                        </div>
                       <input type="text" class="form-control"name="phone"value="<?php echo $phone?>" id="phone" placeholder="Phone number" aria-label="Username" aria-describedby="basic-addon1">       
                    </div>
                </div>
          
                <div class="col-md-4">
                  <label for="staticEmail">Profile</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span id="phone" class="input-group-text" ><i class="fa fa-mobile"></i></span>
                        </div>
                       
              <input type="file" class="form-control"  id="profile" name="profile"   >       
                    </div>
                </div>
                
              </div>
              
              
              <div class=" form-row ssform-group">
                
          <div class="col-md-12">
            <label for="staticEmail">Password</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span id="passworda" class="input-group-text" ><i class="fa fa-lock"></i></span>
                        </div>
                       <input type="password" value="<?php echo $password?>" class="form-control"name="passworda" id="passworda" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">       
                    </div>
                </div>
                
              </div>
              <div class="form-row form-group">
                
          <div class="col-md-12">
            <label for="staticEmail">Confirm</label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text" ><i class="fa fa-lock"></i></span>
                        </div>
                       <input type="password" value="<?php echo $password?>" class="form-control"name="passwordb" id="passwordb" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">       
                    </div>
                </div>
                </div>
                
                <button type="submit"  id="register" name="register" class="btn btn-outline-dark btn-block " data-wow-delay=".5s"><i class="fas fa-sign-in-alt"></i> Register</button>

        </form>
              </div>
      </div> 
    </main>
    <main id="login-admin" class="mt-5">
      <div class="col-md-4 offset-4" style="margin-top: 10%">
        <h3 class=" text-dark text-center">Disrtict/Sector chief Login</h3>
      
        <hr class="hr-dark strong">
      
             <?php

               
               if (isset($_POST['login-admin'])) {
                $email = $_POST["email"];
                $password = $_POST["password"];
                $tasks=$_POST["task"];

                if ($tasks == "admin") {

                   $selectsecurity="SELECT * FROM admin WHERE ad_password='$password' AND ad_email='$email'";
                   $Security=mysqli_query($db,$selectsecurity);
                   $stu=mysqli_num_rows($Security);
                   $srow=mysqli_fetch_array($Security);
                   if ($stu>0) {
                    $_SESSION['admin_id']=$srow['adm_id'];
                      header("location:admin/dashboard.php");
                   }
                   else{
                    ?> 
                     
                           <div class="alert alert-danger  "id="aji">
                            <button class="close" data-dismiss="alert"></button>
                            <center><i>Password Or Username is Incorect!!!</i></center>
                         </div>
                            <?php
                   }
                 }
                 else{
                    $selectsecurity="SELECT * FROM chief_sector WHERE ch_password='$password' AND ch_username='$email'";
                    $Security=mysqli_query($db,$selectsecurity);
                    $stu=mysqli_num_rows($Security);
                    $srow=mysqli_fetch_array($Security);
                    if ($stu>0) {
                     $_SESSION['chief_id']=$srow['ch_id'];
                       header("location:admin/a_dashboard.php");
                    }
                    else{
                     ?> 
                      
                            <div class="alert alert-danger  "id="aji">
                             <button class="close" data-dismiss="alert"></button>
                             <center><i>Password Or Username is Incorect!!!</i></center>
                          </div>
                             <?php
                    }
                 }
               }

             ?>
             
               
                 <form action="" method="post">

                   <div class="form-group">
                       <div class="col-md-12">
                          <label for="employee" >Email/Username</label>
                          <div class="input-group mb-3">
                           <div class="input-group-prepend">
                              <span id="phone" class="input-group-text" ><i class="fa fa-user"></i></span>
                           </div>
                         <input type="text" class="form-control" id="dep_name" name="email"required placeholder="Email/Username" >
                       </div>
                     </div>
                   </div>

                  <div class="form-group">
                      <div class="col-md-12">
                         <label for="employee" >Password</label>
                         <div class="input-group mb-3">
                          <div class="input-group-prepend">
                             <span id="phone" class="input-group-text" ><i class="fa fa-user"></i></span>
                          </div>
                        <input type="password" class="form-control" id="dep_name" name="password"required placeholder="Password" >
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-8 offset-md-3" style="color: #DDB437">
                   <input type="radio" value="admin" name="task" required>&nbsp;<strong>District</strong>&nbsp;<input type="radio" value="employee" name="task" required>&nbsp;<strong>Sector</strong>
                  </div>

                   <div class=" form-group col-md-12">  
                     <button type="submit" class="btn  btn-block btn-outline-dark" name="login-admin"><i class="fas fa-sign-in-alt"></i> Login</button>
                   </div>

                 </form>
               </div>
    </main>
    <div class="mt-5"></div>
      <footer id="footer"class="page-footer font-small blue-grey lighten-5">

        <div style="background-color: #D0D251;">
          <div class="container">

            <!-- Grid row-->
            <div class="row py-4 d-flex align-items-center">

              <!-- Grid column -->
              <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                <h6 class="mb-0">Get connected with us on social networks!</h6>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6 col-lg-7 text-center text-md-right">

                <!-- Facebook -->
                <a class="fb-ic">
                  <i class="fab fa-facebook-f white-text mr-4"> </i>
                </a>
                <!-- Twitter -->
                <a class="tw-ic">
                  <i class="fab fa-twitter white-text mr-4"> </i>
                </a>
                <!-- Google +-->
                <a class="gplus-ic">
                  <i class="fab fa-google-plus-g white-text mr-4"> </i>
                </a>
                <!--Linkedin -->
                <a class="li-ic">
                  <i class="fab fa-linkedin-in white-text mr-4"> </i>
                </a>
                <!--Instagram-->
                <a class="ins-ic">
                  <i class="fab fa-instagram white-text"> </i>
                </a>

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row-->

          </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5">

          <!-- Grid row -->
          <div class="row mt-3 dark-grey-text">

            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

              <!-- Content -->
              <h6 class="text-uppercase font-weight-bold">Disters Testmony</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 130px;">
              <p>The volcano
which erupted in January 2002 on the border with the Democratic Republic of Congo,
also led to the displacement of people from the Democratic Republic of Congo on a
temporary basis. <br><br> A national policy on disaster risk reduction and prevention in Rwanda was formulated
in 2002 and approved by the Cabinet in July 2003. From the policy, a national body
on Disaster Risk Management was put in place in July 2004, and is functioning as an
autonomous body under the Ministry of Local Government. </p>

            </div>
            <!-- Grid column -->

            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

              <!-- Content -->
              <h6 class="text-uppercase font-weight-bold">District In Rwanda</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 170px;">
              <p>There are also disasters resulting from epidemics, road
accidents, forest fires and social conflicts. . <br><br> In the past 10 years, a mass population
displacement occurred as a result of conflict (1994 war and genocide), and was
followed by the reception and resettlement of many returning refugees</p>

            </div>
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4">

              <!-- Content -->
              <h6 class="text-uppercase font-weight-bold">District Mission</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 140px;">
              <p>Disaster context in Rwanda is mainly linked with natural, man-made and mixed
disasters. Many cases of disaster are particularly linked to the geographic, <br> <br>  historical
and socio-cultural aspects of the country. Rwanda has limited cases of disaster
resulting from natural hazards, but has sometimes experienced localized flooding and
landslides and drought.</p>

            </div>

           

            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

              <!-- Links -->
              <h6 class="text-uppercase font-weight-bold">Contact</h6>
              <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
              <p>
                <i class="fas fa-home mr-3"></i> Rubavu District,West, Rwanda</p>
              <p>
                <i class="fas fa-envelope mr-3"></i> Rubavu_district@gmail.rw</p>
              <p>
                <i class="fas fa-phone mr-3"></i> + 250 780816923</p>
              <!-- <p>
                <i class="fas fa-print mr-3"></i> + 01 234 567 89</p> -->

            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

        </div>
        <!-- Footer Links -->

        <!-- Copyright -->
        <!-- <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
          <a class="dark-grey-text" href="https://mdbootstrap.com/"> Burere District</a>
        </div> -->
        <!-- Copyright -->

      </footer>
      <?php include 'footer.php'; ?>
  </body>
  </html>
  <?php  ob_end_flush();?>