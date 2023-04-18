<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Oyrawat Properties|Ready-To-Move-In Properties</title>
     <link rel="icon" href="./main_images/oyrawat.gif" type="image/gif" sizes="16x16">

     
     
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      
      <link rel="stylesheet" href="./css/gen.css">
      <link rel="stylesheet" href="./css/carousel.css">
      <link rel="stylesheet" href="./css/timeline.css">
      <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
      <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
      <script src="./js/timeline.js"></script>
        <style>
.material-symbols-sharp {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>
  
</head><body style="background-color:whitesmoke;"><div class="container-fluid">
<?php require 'header.php';?>
<?php 
  $project=$_GET['project'];
  $developer=$_GET['developer'];
  $location=$_GET['location'];

?>
<div class="row">

    <div class="col-sm-1">&nbsp;&nbsp;</div>
    <div class="col-sm-8">
          <div class="row" id="banner">
                 <div class="col-sm-12">
                        <div class="swiffy-slider">  
                                <ul class="slider-container">
                                   <?php
                                   require './controller/dbcon.php';
                                   $sql="SELECT * FROM project_readytomovein_banner WHERE project='$project' AND location='$location' AND developer='$developer'";
                                   $stmt=$con->prepare($sql);
                                   $stmt->execute();
                                   $data=$stmt->fetchAll();
                                   foreach($data as $row){
                                      $project_readytomovein_pic1=$row['project_readytomovein_pic1'];
                                      $pic='.'.ltrim($project_readytomovein_pic1,'.');
                                      echo "<li> <img src='$pic' class='img-fluid w-100' style='height:400px;'>";
                                      
                                   }
                                    

                                  ?>
                                </ul>

                              <button type="button" class="slider-nav"></button>
                              <button type="button" class="slider-nav slider-nav-next"></button>

                              <div class="slider-indicators">
                                  <button class="active"></button>
                                  <button></button>
                                  <button></button>
                              </div>
                          </div>



                 </div>


          </div>
          <br>
          <div class="row bg-body" id="property_intro">
             <div class="col-sm-12">
             <?php
                    require './controller/dbcon.php';
                    $sql="SELECT * FROM project_readytomovein_intro WHERE project='$project' AND location='$location' AND developer='$developer'";
                    $stmt=$con->prepare($sql);
                    $stmt->execute();
                    $data=$stmt->fetchAll();
                    foreach($data as $row){
                      $project_readytomovein_intro=$row['project_readytomovein_intro'];
                      echo $project_readytomovein_intro;
                      }
                      
                      
              ?>                 

             </div>

          </div>
          <br>
          <div class="row bg-body" id="property_amenities">
                 <div class="col-sm-12">
                         <p>&nbsp;</p>
                         <h2><span style="color:darkorange;">Amenities</span> of <?php echo $project;?></h2>
                         <p>&nbsp;</p>
                         <?php
                                require './controller/dbcon.php';
                                $sql="SELECT * FROM project_readytomovein_amenities WHERE project='$project' AND location='$location' AND developer='$developer'";
                                $stmt=$con->prepare($sql);
                                $stmt->execute();
                                $numrows=$stmt->rowCount();
                                $data=$stmt->fetchAll();
                                $i=0;
                                $i=0;
                                foreach($data as $row){
                                  $amenity=$row['amenity'];                                                                           
                                      
                                      echo "<div style='text-align:center; box-sizing:border-box;display:inline-block;padding:15px;'class='col-sm-3 w-25'>&#9575;<br>$amenity</div>";
                                      

                                      
                                      
                                      
                                      $i++;
                                      if($i==4){
                                        echo '<p>';
                                        $i=0;
                                      }
                                      
                                    
                                      
                                      
                                      

                                      
                                     }
                                                           
                                   
                                   
                                  

                             echo "<br>";    
                                  
                           ?>  

                 </div>


          </div>
          <br>
          <div class="row bg-body" id="property_configuration">
            <div class="col-sm-12">
         
                 <?php
                  $project=$_GET['project'];
                  $developer=$_GET['developer'];
                  $location=$_GET['location'];
                  ?>
                  <p>&nbsp;</p>
                  <h3><span style="color:darkorange;">Price and Floor Plan</span> of &nbsp;<?php echo $project;?></h3>
                   
                   <?php  
                        require './controller/dbcon.php';
                        echo "<table class='table font_size_2'>";
                            echo "<thead>"; 
                                echo "<tr>
                                        <th scope='col'>Configuration</th>
                                        <th scope='col'>Carpet Area</th>
                                        <th scope='col'>Buildup Area</th>
                                        <th scope='col'>Super Buildup Area</th>
                                        <th scope='col'>Base Price</th>
                                        
                        
                        
                                     </tr>";
                     
                     
                            echo "</thead>";           
                  
                         $stmt1=$con->prepare("SELECT * FROM project_readytomovein_configuration WHERE project='$project' AND developer='$developer' AND location='$location'");
                         $stmt1->execute();
                         $data1=$stmt1->fetchAll();
                         foreach($data1 as $row){
                            $project1=$row['project'];
                            $developer1=$row['developer'];
                            $location1=$row['location'];
                            $configuration_type=$row['configuration_type'];
                            $carpet_area=$row['carpet_area'];
                            $buildup_area=$row['buildup_area'];
                            $superbuildup_area=$row['superbuildup_area'];
                            $base_price=$row['base_price'];
                            
                            echo "<tr>
                                <td style='color:lightslategrey;'>$configuration_type</td>
                                <td style='color:lightslategrey;'>$carpet_area</td>
                                <td style='color:lightslategrey;'>$buildup_area</td>
                                <td style='color:lightslategrey;'>$superbuildup_area</td>
                                <td style='color:darkorange;'>$base_price</td>
                                </tr>";
                    
                    
                            }
                        echo "</table>";
                
                ?>
              </div>
           </div>
           <br>
           <div class="row bg-body" id="property_specifications">  
             <div class="col-sm-12">
             <div class="row">
               <div class="col-sm-12">
                   <p>&nbsp;</p>
                     <h3><span style="color:darkorange">Specifications</span>&nbsp;of <?php echo $project;?></h3>
                   <p>&nbsp;</p>

               </div>
             </div>
             <div class="row">
               <div class="col-sm-12" style="padding:25px; column-count:2;">
                   <?php
                      require "./controller/dbcon.php";
                      $sql="SELECT * FROM project_readytomovein_specifications WHERE project='$project' AND developer='$developer' AND location='$location'";
                      $stmt=$con->prepare($sql);
                      $stmt->execute();
                      $data=$stmt->fetchAll();
                       foreach($data as $row){
                        $heading=$row['heading'];
                       $description=$row['description'];
                       echo "<b>$heading</b>";
                       echo "<br>";
                       echo "$description";
                       echo "<p>&nbsp;</p>";
                     }
               
               
               
                      ?>

                
                 
               </div>

             </div>


             </div>
            
           
           </div>
           <br>
           
           <div class="row bg-body" id="payment_plan">
               <div class="col-sm-12">
                  <p>&nbsp;</p>
                  <h3><span style="color:darkorange;">Payment Plan</span> of &nbsp;<?php echo $project;?></h3>
                  <p>&nbsp;</p>
                  <?php 
                  require './controller/dbcon.php';
                  $sql="SELECT * FROM project_readytomovein_payment WHERE project='$project' AND location='$location' AND developer='$developer'";
                  $stmt=$con->prepare($sql);
                  $stmt->execute();
                  $data=$stmt->fetchAll();                 
                  
                  
                  ?>
                  <div class="panel-body">
                      <div class="timeline">
                           <div class="timeline__wrap">
                              <div class="timeline__items">
                                  <?php
                                       foreach($data as $row)
                                      {
                                  ?>
                                     <div class="timeline__item">
                                        <div class="timeline__content">
                                        <h3><?php echo $row["timeline"]; ?></h3>
                                        <span class="font font_size_3"><?php echo $row["payment"]; ?></span>

                                        </div>
                                     </div>              


                                  <?php
                                      }
                                  ?>

                              </div>
                              <script>
                                   $(document).ready(function(){
                                   jQuery('.timeline').timeline({
	                                	mode: 'horizontal',
	                                  visibleItems:4,
	                                 });
                                   });
                              </script>
                           </div>
                      </div>
                  </div>   	
                            
                        
                    
                         
                                    
               </div>

           </div>
           <br>
           <div class="row bg-body">
                 <div class="col-sm-12">
                  <?php require 'bank_loans.php';?>
                 </div>

           </div>
           <br>
           <div class="row bg-light">
                 <div class="col-sm-12">
                   <?php require 'emi_calculator.php'; ?>
                 </div>

           </div>
           <br>
           

                
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
<div class="row bg-body">
       <div class="row">
              <div class="col-sm-12">
                <p>&nbsp;</p>
                <h3>Similar Projects</h3>
                <p>&nbsp;</p>
              </div>

       </div>
      <div class="col-sm-12">
             <div class="swiffy-slider slider-item-show4 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible">
                    <ul class="slider-container">
                         <?php 
                         require './controller/dbcon.php';
                         $sql="SELECT * FROM project_readytomovein_details";
                         $stmt=$con->prepare($sql);
                         $stmt->execute();
                         $data=$stmt->fetchAll();
                         foreach($data as $row){
                          $readytomovein_project_pic=$row['readytomovein_project_pic'];
                          $pic='.'.ltrim($readytomovein_project_pic,'.');
                          $project=$row['project'];
                          $location=$row['location'];
                          $developer=$row['developer'];
                          $price_range=$row['price_range'];
                          $possession=$row['possession'];
                          echo "<li>
                             <div class='card border-0'>
                                 <div class='card-body nopadding'>
                                  <img src='$pic' class='img-fluid' style='width:250px;height:200px;'>
                                  <div class='card-img-overlay'><br><span class='bg-warning text-danger text-center' style='padding:4px;border-radius:0px 12px 12px 0px;'>$price_range</span></div>
                                 </div>
                                 <div class='card-footer bg-transparent'>
                                 <span style='float:left;' class='w-50 font font_size_3'>
                                 $project
                                 <br>
                                 $developer
                                 
                                 </span>
                                 <span style='float:left;' class='w-50 font font_size_3'>
                                 $location
                                 
                                 </span>
                                 
                                 </div>
                             
                             </div>
                          
                          </li>";

                         }
                        
                        
                        ?>
                      
                        
                    </ul>

                      <button type="button" class="slider-nav"></button>
                      <button type="button" class="slider-nav slider-nav-next"></button>

                      <div class="slider-indicators">
                          <button class="active"></button>
                          <button></button>
                          <button></button>
                      </div>
             </div>

       </div>

</div>






<?php require 'footer.php';?></div></body></html>

