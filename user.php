
<?php include 'header.php';?>
      <!--/.Navbar-->
      <!-- marsk -->
    
          <div id="intro" class="view">
            <div class="mask flex-center ">
            
                <div class=" col-md-8 text-center" >
                   
                   <h3 class=" text-dark"><div class="col-md-12">Add Property Information</div></h3>
                  
                 
                   <hr class="hr-dark strong">
                 
                   <p class="">The Rwandan Government Is Improving the Technology   Usage in Government Services Production This Is One of Platform That Can Be serve you about destroyed properties by accessing this platform. </p><br>
                 
                 
                   
                    <div class="offset-1">

                            <?php
                           $cell = "";
                           $village = "";
                           $house_nbr = "";
                            
                          if(isset($_POST["register"])){ 
                            
                            $cell = $_POST["cell"];
                            $village = $_POST["village"];
                            $house_nbr = $_POST["house_nbr"];
                            $h_file=$_FILES['h_file']['name'];
                            $bphomove="img/".$_FILES['h_file']['name'];
                            
                            $allowed_image_extension = array(
                                "pdf"
                               
                            );
                            // Get image file extension
                            $file_extension = pathinfo($_FILES["h_file"]["name"], PATHINFO_EXTENSION);

                             if (!in_array($file_extension, $allowed_image_extension)) {

                              ?>
                              <style type="text/css">
                                  #h_file{
                                    color: #a94442;
                                    background-color: #f2dede;
                                    border-color: #a94442;
                                  }
                                </style> 
                               <div class="alert alert-danger animated shake col-md-12" id="aji">
                                 <button class="close" data-dismiss="alert"></button>
                                 <center><i>Only PDF file is allowed!!!</i></center>
                               </div>
                              <?php
                               
                            }
                            else{

                            $selectm="SELECT * FROM house WHERE h_nbr='$house_nbr'";
                            $c= mysqli_query($db,$selectm);
                            $user= mysqli_num_rows($c);
                           
                                    
                              if($user){
                                ?>
                                <style type="text/css">
                                  #house_nbr{
                                    color: #a94442;
                                    background-color: #f2dede;
                                    border-color: #a94442;
                                  }
                                </style> 
                                <div class="alert alert-danger animated shake col-md-12" id="aji">
                                  <button class="close" data-dismiss="alert"></button>
                                  <center><i>This UPI number exist already!!!</i></center>
                               </div>
                                <?php
                              }
                              
                              else{
                                $add="INSERT INTO house (h_cell,h_village,h_nbr,h_file,citi_id,sect_id) VALUES ('$cell','$village','$house_nbr','$h_file','$citizen_id','$sect_id')";
                                  $query=mysqli_query($db,$add);
                                   $a=move_uploaded_file($_FILES['h_file']['tmp_name'], $bphomove);
                                  
                              if ($query AND $a) {
                                ?> 
                                       <div class="alert alert-success strover animated bounce col-md-12" id="aji">
                                        <button class="close" data-dismiss="alert"></button>
                                        <center><i>Successfuly Registred</i></center>
                                     </div>
                                        <?php
                              }
                              }
                            }
                              
                           }
                          ?>
                          <form class="form-horizontal" method="POST" action="" id="reg_form"enctype="multipart/form-data">
                          <div class=" form-row form-group">
                              <div class="col-sm-6">
                                 <label for="employee" >UPI Number</label>
                                 <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                     <span id="phone" class="input-group-text" ><i class="fa fa-user"></i></span>
                                  </div>
                                <input type="text" class="form-control" id="house_nbr" name="house_nbr" value="<?php echo $house_nbr;?>"required placeholder="UPI_nbr" >
                              </div>
                            </div>
                              <div class="col-sm-6">
                                 <label for="employee" >Cell/Akagari</label>
                                 <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                     <span id="phone" class="input-group-text" ><i class="fa fa-user"></i></span>
                                  </div>
                                <input type="text" class="form-control" id="dep_name" name="cell" value="<?php echo $cell;?>"required placeholder="Akagari" >
                              </div>
                            </div>
                          </div>
                          <div class=" form-row form-group">
                              <div class="col-sm-6">
                                 <label for="employee" >Village/umudugudu</label>
                                 <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                     <span id="phone" class="input-group-text" ><i class="fa fa-user"></i></span>
                                  </div>
                                <input type="text" class="form-control" id="dep_name" name="village" value="<?php echo $village;?>"required placeholder="Umudugudu" >
                              </div>
                            </div>
                              <div class="col-sm-6">
                                 <label for="employee" >Property File</label>
                                 <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                     <span id="phone" class="input-group-text" ><i class="fa fa-user"></i></span>
                                  </div>
                                <input type="file" class="form-control" id="h_file" name="h_file" required>
                              </div>
                            </div>
                          </div>
                         
                      <div class="form-row form-group "> 
                      <div class="col-sm-12">
                        <button type="submit" class="btn  btn-block btn-default" name="register"><i class="fas fa-sign-in-alt"></i> Add Property</button>
                        </div> 
                      </div>
                        </form>
                    
                     </div>

                 </div>          
              
            </div>
        
      </div>
      <!-- /marsk -->
  

 
    <?php include 'footer_user.php'; ?>
</body>

</html>