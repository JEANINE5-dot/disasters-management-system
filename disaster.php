
<?php include 'header.php';?>
      <!--/.Navbar-->
      <!-- marsk -->
    
          <div id="intro" class="">
          <div class=" ">
          
              <div class=" col-md-10 offset-1 text-center" >
                   
                   <h3 class=" text-dark"><div class="col-md-12" style="margin-top: 10%;">Chose a Disaster to Report</div></h3>
                  
                 
                   <hr class="hr-dark strong">
                 
                   <p class="">The Rwandan Government Is Improving the Technology Usage in Government Services Production This Is One of Platform That Can Be serve you about destroyed properties by accessing this platform. </p><br>
                 
                 
                   
                   
                      <div class="table-hover">
                       <table class="table table-bordered">
                        <tr class="bg-dark text-light">
                          <th class="text-center">No</th>
                         <th class="text-center"> Photo</th>
                         <th class="text-center">Disaster Name</th>
                         <th class="text-center">Date</th>
                         <th class="" width="300">Report</th>
                        </tr>

                         <?php
                          $query = "
                           SELECT * FROM disaster
                          ";
                         
                         $result = mysqli_query($db, $query);
                         if(mysqli_num_rows($result) > 0)
                         {
                           $i=1;
                          

                          while($row = mysqli_fetch_array($result))

                          {
                          
                           $id=$row['dis_id'];
                             ?>
                            <tr class="record">
                             <td class="text-center"><?php echo $i;?></td>
                             <td class="text-center"><img src="img/<?php echo $row['dis_picture']?>" style="width: 250px;height: 120px;"></td>
                             <td class=""><?php echo $row['dis_name'];?></td>
                             <td class="text-center" width="150"><?php echo $row['dis_date'];?></td>
                             <td class="text-center">
                               <a href="report_disaster.php<?php echo '?id='.$id; ?>" class="btn btn-outline-primary text-dark"><i class="fa fa-pencil-alt"></i>&nbsp;</a>

                              

                               </td>
                           
                           <?php
                           $i++;

                          }
                          
                         }
                        

                         ?> 

                          </tr>
                          </table>
                        </div>  
                    
                     </div>

                 </div>          
              
            </div>
        
      </div>
      <!-- /marsk -->
  

 
   <script src="admin/js/jquery-3.3.1.min.js"></script>

<script type="text/javascript" src="admin/js/bootstrapValidator.js"></script>
<script src="admin/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css"> 
<script src="js/fontawesome.js"></script>
</body>

</html>
