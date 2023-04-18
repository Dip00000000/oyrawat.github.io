<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Oyrawat Properties|Builder Properties</title>
     <link rel="icon" href="./main_images/oyrawat.gif" type="image/gif" sizes="16x16">   
     
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

      <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
      <link rel="stylesheet" href="./css/gen.css">
      <link rel="stylesheet" href="./css/carousel.css">
      <script src="./js/table_show.js"></script>
        <style>
.material-symbols-sharp {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>
  
</head><body style="background-color:whitesmoke;"><div class="container-fluid"><?php require 'header.php';?>
<div class="row">

    <div class="col-sm-1">&nbsp;&nbsp;</div>
    <div class="col-sm-8">
         
             <?php
                  $project=$_GET['project'];
                  $developer=$_GET['developer'];
                  ?>
                  <p>&nbsp;</p>
                  <h3><span style="color:darkorange;">Price and Floor Plan</span> of &nbsp;<?php echo $project;?></h3>
                   
                   <?php  
                        require './controller/dbcon.php';
                        echo "<table class='table font_size_2'>";
                            echo "<thead>"; 
                                echo "<tr>
                                        <th scope='col'>Configuration</th>
                                        <th scope='col'>Super Area</th>
                                        <th scope='col'>Base Price</th>
                                        <th scope='col'>Floor Plan</th> 
                        
                        
                                     </tr>";
                     
                     
                            echo "</thead>";           
                  
                         $stmt1=$con->prepare("SELECT * FROM project_builder_configuration WHERE project='$project' AND developer='$developer'");
                         $stmt1->execute();
                         $data1=$stmt1->fetchAll();
                         foreach($data1 as $row){
                            $project1=$row['project'];
                            $developer1=$row['developer'];
                            $configuration_type=$row['configuration_type'];
                            $super_area=$row['super_area'];
                            $base_price=$row['base_price'];
                            $pic=ltrim($row['builder_floor_plan_pic'],'.');
                            echo "<tr>
                                <td style='color:lightslategrey;'>$configuration_type</td>
                                <td style='color:lightslategrey;'>$super_area</td>
                                <td style='color:darkorange;'>$base_price</td>
                                <td style='color:darkorange;'><form method='post'>
                                                                 <button  id='$pic' class='flr' type='submit'><span class='material-symbols-sharp'>Map</span></button>
                                                              </form>
                                                                                                     
                                                                                                     
                                </td>
                                </tr>";
                    
                    
                            }
                        echo "</table>";
                    ?>
                    <script>
  $(document).ready(function(){
    $(".flr").bind("click",function(){
         var getid=$(this).attr('id'); 
         var pd={
         pic_data:getid,
         show_flr:'show'
                };
           $.ajax({
                   type:'post',
                   url:'flr_plan_details.php',
                    data:pd,
                   success:function(data){         
                                            $('#flr_pic').show();
                                            $('#flr_pic_show').html(data);
                                        }     
    
                  });  
          return false;
          
  
        });
        $("#flr_pic_close").click(function(){
            $("#flr_pic").hide();
          });
  
  
  
  
  });
  

  
  


</script>
                
  </div>
             <div class="col-sm-3">
                <div class="card">
                    <div class="card-header">
                      <h2>ENQUIRE NOW</h2>
                    </div>
                    <div class="card-body">
                       <form id="contactus" method="post">
                         <input id="nm" name="name" type="text" class="form-control form-control-lg" placeholder="Enter Name">
                         <br>
                         <input id="em" name="email" type="text" class="form-control form-control-lg" placeholder="Enter Email ID">
                         <br>
                         <input id="phn" name="phone" type="text" class="form-control form-control-lg" placeholder="Enter Phone Number">
                         <br>
                         <textarea id="cmt" name="comment" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Send Enquiry"></textarea>
                         <button name="contactus_save" type="submit" type="button" class="btn btn-warning align-left" data-bs-dismiss="modal">Send Enquiry</button>

                         
                      </form>
                       <script src="./js/contactus.js"></script>


                    </div>
                  
                </div>
             </div>


         
    
      
      
    </div>
   


</div>


<!--Floor Plan Pop Up-->
<div id='flr_pic' class='popup_flr'>
  <span id ='flr_pic_close' style='background-color:darkorange;color:white; float:right;'>&nbsp;&nbsp;&nbsp;<b>&times;</b>&nbsp;&nbsp;&nbsp;</span>
  <br>
  <span id='flr_pic_show'></span>

</div>



<?php require 'footer.php';?></div></body></html>

