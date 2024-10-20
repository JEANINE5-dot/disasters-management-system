
<?php include 'header.php';
$disaster_id=$_GET['id'];
$cat="SELECT * FROM disaster WHERE dis_id='$disaster_id'";
$cate=mysqli_query($db,$cat);
$row=mysqli_fetch_array($cate);

$shae= "SELECT * FROM house WHERE citi_id='$citizen_id'";
$dool= mysqli_query($db,$shae);



?>
        <div id="intro" class="view">
          <div class="mask flex-center ">
          
              <div class=" col-md-8 text-center" >
                      <?php
                      if (isset($_POST["register"])){
                          $comment=mysqli_real_escape_string($db,$_POST["comment"]);
                          $house_nbr=$_POST["house_nbr"];
                          $date_created=$_POST["date_created"];
                        
                          
                        $add="INSERT INTO disaster_report(comment,house_id,re_date,citi_id,dis_id,sect_id,status)VALUES('$comment','$house_nbr','$date_created','$citizen_id','$disaster_id','$sect_id','unread')";

                      
                        $query=mysqli_query($db,$add);
                            if ($query) {
                              ?> 
                                <div class="alert alert-success strover animated bounce col-md-12" id="aji">
                                  <button class="close" data-dismiss="alert"></button>
                                  <center><i>Successfuly Sent</i></center>
                                </div>
                              <?php
                            }

                      }
                    
                 

                      ?>
                  <div class="row">
                    
                      <div class="col-md-4 offset-md-4">
                      <img src="img/<?php echo $row['dis_picture']?>" id="photo" style="width: 300px;height: 180px;">
                    </div>
                  </div>
                  
                    <div class="row"> 
                     <div class="col-md-8 offset-md-2">
                     <form method="post" action="#" id="reg_form"enctype="multipart/form-data">
                               
                               
                               <div class="form-row">
                                 <div class="form-group col-md-6">
                                     <label for="name">House Number</label>
                                     
                                     <select name="house_nbr" class="form-control selectpicker" required >
                                                         
                                       <?php
                                       while ($houserow= mysqli_fetch_array($dool)) {
                                         ?>
                                         <option value="<?php echo $houserow['h_id'];?>"><?php echo $houserow['h_nbr'];?></option>
                                         <?php
                                       }
                                     ?>
                                   </select>
        
                                 </div>
                                 <div class="form-group col-md-6">
                                   <label for="inputAddress" >Disaster Date</label>
                                 
                                   <input type="text" class="form-control" id="date" name="date_created"  placeholder="Date" required>
                               
                               </div>
                                 
                               </div>
                               <div class="form-row">
                               <div class="form-group col-md-12">
                                
                               <textarea type="text" name="comment" id="re_name" class="form-control" placeholder="Write your message"></textarea>
                                </div>
                               </div> 
                               <button type="submit" name="register" id="register" class="btn btn-outline-primary btn-block"><i class="fa fa-paper-plane"></i> Send</button>
                             </form>
                   </div>
                   </div>
               </div>          
            
          </div>
      
    </div>
    
 
    <?php include 'footer_user.php'; ?>
