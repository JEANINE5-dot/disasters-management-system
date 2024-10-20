<?php


            
?>
<?php include 'header.php';
$update="UPDATE disaster_report SET notification='read' WHERE citi_id='$citizen_id'";
            mysqli_query($db,$update);?>

       
           <div style="margin-top: 10%;">
            <h3 class="text-center" >Property Disaster Reporting Status</h3>
          
              <div class=" col-md-10 offset-1 mt-2"  >
               <div id="result"></div>

               </div> 
               </div>         
            
        
      
   
    
 

<script src="admin/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="admin/js/bootstrapValidator.js"></script>
<script src="admin/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css"> 

<script src="js/fontawesome.js"></script>
      <script>
     $(document).ready(function(){

      load_data();

      function load_data(query)
      {
       $.ajax({
        url:"fetch.php",
        method:"POST",
        data:{query:query},
        success:function(data)
        {
         $('#result').html(data);
        }
       });
      }
      $('#search_text').keyup(function(){
       var search = $(this).val();
       if(search != '')
       {
        load_data(search);
       }
       else
       {
        load_data();
       }
      });
     });
     </script>

</body>

</html>