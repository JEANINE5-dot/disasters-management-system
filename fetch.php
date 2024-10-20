<?php
include 'session.php';



 $query = "SELECT *,disaster_report.re_id AS reuid FROM disaster_report JOIN citizen ON disaster_report.citi_id=citizen.c_id JOIN house ON disaster_report.house_id=house.h_id JOIN disaster ON disaster_report.dis_id=disaster.dis_id WHERE disaster_report.citi_id='$citizen_id'";

$result = mysqli_query($db,$query);
if(mysqli_num_rows($result) > 0)
{
  $i=1;
 ?>
  <div class="table-hover">
   <table class="table table-bordered">
    <tr class="bg-dark text-light">
     <th>No</th>
     <th>Name</th>
     <th>National ID</th>
     <th>House Number</th>
     <th>Disaster</th>
     <th>Village</th>
     <th>Cell</th>
     <th>Comment</th>
     <th>Status</th>
    
    </tr>
 <?php
 

 while($row = mysqli_fetch_array($result))
 {
  $id=$row['reuid'];
   
   if ($row['status']=='not') {
       ?>
   <tr class="record" style="background-color: #F8C4C4">
      <td><?php echo $i;?></td>
      <td><?php echo $row['c_name'];?></td>
      <td><?php echo $row['c_nationalid'];?></td>
      <td><?php echo $row['h_nbr'];?></td>
      <td><?php echo $row['dis_name'];?></td>
      <td><?php echo $row['h_village'];?></td>
      <td><?php echo $row['h_cell'];?></td>
      
      <td class=""><?php echo $row['comment']; ?></td>
     
     <td class="text-center"><a href="#" class="btn btn-outline-dark"><span class="fas fa-thumbs-down "></span></a></td>
     </tr>
  <?php
  $i++;
   }
   else {
     ?>
    <tr class="record" >
    <td><?php echo $i;?></td>
    <td><?php echo $row['c_name'];?></td>
    <td><?php echo $row['c_nationalid'];?></td>
    <td><?php echo $row['h_nbr'];?></td>
    <td><?php echo $row['dis_name'];?></td>
    <td><?php echo $row['h_village'];?></td>
    <td><?php echo $row['h_cell'];?></td>
    
    <td class="text-center"> <?php echo $row['comment']; ?></td>
    <td class="text-center"><button  class="btn btn-outline-primary text-dark"><i class="fas fa-thumbs-up"></i></button></td>
   </tr>
  <?php
  $i++;
   }

  

 }
 
}
else
{
 $_SESSION['message']=' 
            <div class="row" style="margin-top: 3%;">
                   <div class="alert alert-danger col-md-9 offset-md-1">
                    <button class="close" data-dismiss="alert">X</button>
                    <center><i>Data not found</i></center>
                 </div>
                 </div>
                  ';
  echo $_SESSION['message'];                
}

?>
<script type="text/javascript">
  $(document).ready(function(){
    $('.deletebtn').on('click',function(){
      $('#deletemodal').modal('show');
      $tr= $(this).closest('tr');
      var data=$tr.children('td').map(function(){
        return $(this).text();
      }).get();
      console.log(data);
      $('#delete_question').val(data[0]);
    })
  })
</script>