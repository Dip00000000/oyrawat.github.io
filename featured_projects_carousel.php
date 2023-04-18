<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title></title>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
<link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    
    </head><body>


<div class="swiffy-slider slider-item-show2 slider-item-reveal slider-nav-outside slider-nav-round slider-nav-visible slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-fadein slider-item-first-visible">
 
    <ul class="slider-container">
    <?php 
                         require './controller/dbcon.php';
                         $sql="SELECT * FROM featured_projects";
                         $stmt=$con->prepare($sql);
                         $stmt->execute();
                         $data=$stmt->fetchAll();
                         foreach($data as $row){
                          $pic1=$row['pic'];
                          $content1=$row['content1'];
                          $content2=$row['content2'];
                          $content3=$row['content3'];
                          $link=$row['link'];
                     
                          $pic='.'.ltrim($pic1,'.');
                          echo "<li>
                                    <div class='card border-0'>
                                           <div class='card-body nopadding'>
                                           <a href='$link' style='text-decoration:none;'>
                                           <img class='card-img img-fluid' src='$pic' style='width:450px;height:320px;' alt='featured_image'>
                                           </a>
                                           <div class='card-img-overlay'><br><span class='bg-info bg-gradient text-dark' style='padding:6px;border-radius:12px 12px 12px 12px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>$content1</span></div>
                                           </div>
                                           <div class='card-footer nopadding'>
                                           <span class='text-center w-50'>$content2</span>
                                           <br>
                                           <span class='text-center w-50'>$content3</span>
                                           
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










    </body></html>