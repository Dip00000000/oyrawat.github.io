<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Oyrawat Properties|Under-Construction Properties</title>
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
   <!--Banner-->
   <div class="col-sm-12">
                       <div class="swiffy-slider">  
                                <ul class="slider-container">
                                   <?php
                                   require './controller/dbcon.php';
                                   $sql="SELECT * FROM project_underconstruction_banner WHERE project='$project' AND location='$location' AND developer='$developer'";
                                   $stmt=$con->prepare($sql);
                                   $stmt->execute();
                                   $data=$stmt->fetchAll();
                                   foreach($data as $row){
                                      $project_underconstruction_pic1=$row['project_underconstruction_pic1'];
                                      $pic='.'.ltrim($project_underconstruction_pic1,'.');
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
<!--Description-->



<div class="row">
   <div class="col-sm-12 bg-body">
    <p>&nbsp;</p>
    <span class="font font_size_4 fw-bold" style="color:navy;">PROPERTY DESCRIPTION</span>
    <p>&nbsp;</p>
     <?php 
        $sql="SELECT * FROM project_underconstruction_details WHERE project='$project' AND location='$location' AND developer='$developer'";
        $stmt=$con->prepare($sql);
        $stmt->execute();
        $data=$stmt->fetchAll();
        foreach($data as $row){
          $ifaffordable=$row['ifaffordable'];
          if($ifaffordable=="Yes"){
            echo "<span class='text-white' style='padding:5px;background:navy;'>Affordable</span>";
          }
        }
        
     ?>
     <br>
     <br>
     <?php
      require "./controller/dbcon.php";
      $sql="SELECT * FROM project_underconstruction_configuration WHERE project='$project' AND location='$location' AND developer='$developer'";
      $stmt=$con->prepare($sql);
      $stmt->execute();
      $data=$stmt->fetchAll();
      foreach($data as $row){
                                  $project=$row['project'];
                                  $developer=$row['developer'];
                                  $location=$row['location'];
                                  $configuration_type=$row['configuration_type'];
                                  $carpet_area=$row['carpet_area'];
                                  $buildup_area=$row['buildup_area'];
                                  $superbuildup_area=$row['superbuildup_area'];
                                  $base_price=$row['base_price'];
      
        echo $configuration_type."&nbsp;".$carpet_area."&nbsp;".$buildup_area."&nbsp;".$superbuildup_area;
        echo "<p>&nbsp;</p>";
        echo "<span class='text-danger font font_size_4 fw-bold'>$base_price</span>";
        
      }
     ?>
     
     </div>


</row>
            
           
    
          
    
<div class="row bg-body">
   
   <div class="col-sm-12">
      <?php
           require "./controller/dbcon.php";
           $sql_a="SELECT amenity,remark FROM project_underconstruction_amenities WHERE project='$project' AND location='$location' AND developer='$developer'";
           $stmt_a=$con->prepare($sql_a);
           $stmt_a->execute();
           $data_a=$stmt_a->fetchAll();
           $i=0;
           foreach($data_a as $row){
           $amenity=$row['amenity'];
           $remark=$row['remark'];
           echo "<div style='min-width:16%;height:150px;text-align:center; border:1px solid lavender;box-sizing:border-box;display:inline-block;padding:15px;'>&#9575;<br>$amenity<br>$remark</div>";
              
               
           
           
           $i++;
           if($i==6){
            echo "<br><br>";
            $i=0;
           }
           

           
                  
           
           
           
           
          }
    ?>
    <p>&nbsp;</p>
   

   </div>
   



</div>
<!--emi-->
<br>
<div class="row bg-light">
   <div class="col-sm-12">
      <?php require 'emi_calculator.php'; ?>
   </div>

</div>
           <br>





<?php require 'footer.php';?></div></body></html>

