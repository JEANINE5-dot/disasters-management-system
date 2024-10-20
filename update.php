
<?php include 'header.php';?>
        <div id="intro" class="view">
          <div class="mask flex-center ">
          
              <div class=" col-md-8 text-center" >
                      <?php
                      if (isset($_POST["register"])){
                          $username = $_POST["username"];
                          $name=$_POST["name"];
                          $password=$_POST["password"];
                          $phone=$_POST["phone"];
                          
                        $add="UPDATE citizen SET c_name='$name',c_username='$username',c_phone='$phone',c_password='$password' WHERE c_id='$citizen_id'";

                      
                        $query=mysqli_query($db,$add);
                            if ($query) {
                              ?> 
                                <div class="alert alert-success strover animated bounce col-md-12" id="aji">
                                  <button class="close" data-dismiss="alert"></button>
                                  <center><i>Successfuly Updated</i></center>
                                </div>
                              <?php
                            }

                      }
                      if (isset($_POST['profile'])) {
                        $profile=$_FILES['profile']['name'];
                          $bphomove="img/".$_FILES['profile']['name'];
                          $add="UPDATE citizen SET c_profile='$profile' WHERE c_id='$citizen_id'";
                        $a=move_uploaded_file($_FILES['profile']['tmp_name'], $bphomove);
                        $query=mysqli_query($db,$add);
                            if ($query AND $a) {
                              ?> 
                                <div class="alert alert-success strover animated bounce col-md-12" id="aji">
                                  <button class="close" data-dismiss="alert"></button>
                                  <center><i>Profile Picture Successfuly Updated</i></center>
                                </div>
                              <?php
                            }
                      }
                      $shae= "SELECT * FROM citizen WHERE c_id='$citizen_id'";
                  $dool= mysqli_query($db,$shae);
                  $row= mysqli_fetch_array($dool);

                      ?>
                  <div class="row">
                    
                      <div class="col-md-4 offset-md-4">
                      <img src="img/<?php echo $row['c_profile']?>" id="photo" style="width: 300px;height: 180px;">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 offset-md-3">
                      <form method="post"enctype="multipart/form-data">
                        <div class="form-row">
                         <div class="form-group col-md-5">
                        <input type="file" class="form-control" id="email" name="profile" value="<?php echo $row['c_profile']?>">
                        </div>
                        <div class="col-md-6">
                          <button type="submit" name="profile" id="register" class="btn btn-outline-dark btn-block"><i class="fa fa-paper-plane"></i> Update Profile</button>
                        </div>
                        </div>
                      </form>
                    </div>
                    
                   </div>
                    <div class="row"> 
                     <div class="col-md-8 offset-md-2">
                     <form method="post" action="#" id="reg_form"enctype="multipart/form-data">
                               
                               
                               <div class="form-row">
                                 <div class="form-group col-md-6">
                                     <label for="name">Fullname</label>
                                     
                                     <input type="text" class="form-control" id="name" name="name" placeholder=" Fullname" value="<?php echo $row['c_name'];?>" required >
                                     
                                  
                                 </div>
                                 <div class="form-group col-md-6">
                                   <label for="inputAddress" >Username</label>
                                   
                                   <input type="text" class="form-control" id="email" name="username"  value="<?php echo $row['c_username'];?>" required>
                                 <!-- </div> -->
                               </div>
                                 
                               </div>
                               <div class="form-row">
                               
                               
                                <div class="form-group col-md-6">
                                     <label for="email" >Phone</label>
                                     
                                     <input type="text" class="form-control" id="email" name="phone" placeholder="username" value="<?php echo $row['c_phone'];?>" required>
                                 <!--   </div> -->
                                 </div>
                                  <div class="form-group col-md-6">
                                     <label for="email" >Password</label>
                                    
                                     <input type="text" class="form-control" id="email" name="password"  value="<?php echo $row['c_password'];?>" required>
                                 <!--   </div> -->
                                 </div>
                               </div> 
                               <button type="submit" name="register" id="register" class="btn btn-outline-dark btn-block"><i class="fa fa-paper-plane"></i> Update</button>
                             </form>
                   </div>
                   </div>
               </div>          
            
          </div>
      
    </div>
    
 
    <?php include 'footer_user.php'; ?>
</body>

</html>