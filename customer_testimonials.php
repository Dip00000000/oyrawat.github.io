<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <style>
      <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
      <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
      




    </style>
    
    
    
</head><body>
<div class="col-sm-12">
             <div class="swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible">
                    <ul class="slider-container">
                         <?php 
                         require './controller/dbcon.php';
                         $sql="SELECT * FROM customer_testimonials";
                         $stmt=$con->prepare($sql);
                         $stmt->execute();
                         $data=$stmt->fetchAll();
                         foreach($data as $row){
                          $pic1=$row['pic'];
                                          
                          $pic='.'.ltrim($pic1,'.');
                          echo "<li>
                                    <div class='card border-0'>
                                           <div class='card-body nopadding'>
                                           <img class='card-img img-fluid' src='$pic' style='width:450px;height:320px;' alt='featured_image'>
                                           
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






      
</body></html>
