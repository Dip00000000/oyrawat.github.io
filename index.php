<!DOCTYPE html>
<html lang="en">
     <head>
            <title>Oyrawat Properties|Affordable|Ready-to-Move-in|Under Construction|Commercial </title>
            <link rel="icon" href="./main_images/oyrawat.gif" type="image/gif" sizes="16x16">

             <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
             <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
             
              <link rel="stylesheet" href="./css/gen.css">
              <link rel="stylesheet" href="./css/carousel.css">
              <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
              <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
      
              
              <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
.material-symbols-sharp {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
.main_banner{  
     
    width:100%;
    left:0px;
    top:0px;    
}

.service_banner{
    position:absolute;     
    background-color:black; 
    top:535px;;
    width:100%;
    padding:0px;       
        
    z-index:12;
    opacity:0.7;
    left:0.8%;
    
}

</style>
    
</head><body><div class="container-fluid">

    <!--Header-->
    <?php
        require'header.php';
    ?>
    <!--Banner-->
<div class="row">


     <div class="col-sm-12 nopadding main_banner">
         <div class="row service_banner">
             <div class="col-sm-2">&nbsp;</div>
             <div class="col-sm-8 text-white">
                     <table class="table table-borderless text-white">
                         <tr>
                             <td>
                                <span class="material-symbols-sharp">Real_Estate_Agent</span>
                             </td>
                             <td>
                                <a href="realestateconsultancy.php" class="text-white text-decoration-none">Real Estate<br>Consultancy</a>
                             </td>
                             <td>
                                  &#47;
                             </td>
                             <td>
                                <span class="material-symbols-sharp">Credit_Score</span>
                             </td>
                             <td>
                                <a href="loanconsultancy.php" class="text-white text-decoration-none">Loan<br>Consultancy</a>
                             </td>
                             <td>
                                  &#47;
                             </td>
                             <td>
                                <span class="material-symbols-sharp">Design_Services</span>
                             </td>
                             <td>
                                <a href="interiordesign.php" class="text-white text-decoration-none">Interior<br>Designing</a>
                             </td>
                             <td>
                                  &#47;
                             </td>
                             <td>
                                <span class="material-symbols-sharp">Draw</span>
                             </td>
                             <td>
                                <a href="landscapedesign.php" class="text-white text-decoration-none">Landscape<br>Designing</a>
                             </td>
                             <td>
                                  &#47;
                             </td>

                             
                             
                             
                         
                                
                             

                         </tr>

                     </table>                
                     
             </div>
                
             <div class="col-sm-2"></div>
             
         </div>
         <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
                 <div class="carousel-item active">
                     <img src="./general_images/sld1.png" class="d-block w-100 img-fluid" alt="banner1">

                 </div>
                 <div class="carousel-item">
                     <img src="./general_images/sld2.png" class="d-block w-100 img-fluid" alt="banner2">

                 </div>
                 <div class="carousel-item">
                     <img src="./general_images/sld3.png" class="d-block w-100 img-fluid" alt="banner3">
                 </div>  
                         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                             <span class="visually-hidden">Previous</span>
                         </button>
                         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="visually-hidden">Next</span>
                         </button>           
            
             </div>            

        </div>
     </div>

</div>
<!--Featured Properties-->
<div class="row" style="background-color:whitesmoke;">
     <div class="col-sm-12 nopadding d-flex justify-content-center align-items-center" style="height:100px;">
             <p>&nbsp;</p>
             
                 <h3><span style="color:darkorange;">OYRAWAT</span><span style="color:midnightblue;"> FEATURED PROJECTS</span></h3>
             <p>&nbsp;</p>
    </div>
</div>   
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
                                          <a href='$link' style='text-decoration:none;'>
                                           <div class='card-body nopadding'>
                                           
                                           <img class='card-img img-fluid w-100' src='$pic' style='height:320px;' alt='featured_image'>
                                           
                                           <div class='card-img-overlay'><br><span class='bg-info bg-gradient text-dark' style='padding:6px;border-radius:12px 12px 12px 12px; box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;'>$content1</span></div>
                                           </div>
                                           </a>
                                           
                                           
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
<!--Property Categories-->
<div class="row" style="background-color:whitesmoke;">
        <div class="col-sm-12">
              <p>&nbsp;</p>
              <h2>The Best Properties in</h2>
              <h2><span style="color:darkorange;">GUWAHATI</span> </h2>
              <p>&nbsp;</p>

        </div>

 </div>
 <div class="row">
     
         <div class="col-sm-2"></div>
         <div class="col-sm-2">
             <button type="button" class="range_btn" id="af">AFFORDABLE</button>
         </div>
         <div class="col-sm-2">
             <button type="button" class="range_btn" id="rtm">Ready-To-Move-In</button>
         </div>
         <div class="col-sm-2">
             <button type="button" class="range_btn" id="cm">Commercial</button>
         </div>
         <div class="col-sm-2">
             <button type="button" class="range_btn" id="uc">Under-Construction</button>   
         </div>
         <div class="col-sm-2"></div>

     
     




    

</div>
<div class="row">
     <div class="col-sm-6">
         <section class="display" id="af_d">
               <span style="position:relative;left:40%;top:160px;z-index:12;"class="text-white">
                            <?php 
                            require './controller/dbcon.php';
                            $sql="SELECT location FROM property_range WHERE position='1' AND category='Affordable'";
                            $stmt=$con->prepare($sql);
                            $stmt->execute();
                            $data=$stmt->fetchAll();
                            foreach($data as $row){
                                $location=$row['location'];
                                

                            }
                            echo "<span class='font font_size_5 bg-transparent fw-bold'>$location</span>";

                                            $sql="SELECT * FROM project_affordable_details WHERE location='$location'";
                                            $stmt=$con->prepare($sql);
                                            $stmt->execute();
                                            $numrows=$stmt->rowCount();
                                            echo "<br>";
                                            echo "<span class='sel bg-warning' style='padding:5px; max-width:25%;text-align:center;'>$numrows &nbsp;PROPERTIES </span>";
                                            
                                            
                                

                            
                            ?>
                            </span>
                        
                        <?php 
                            require './controller/dbcon.php';
                            $sql="SELECT * FROM property_range WHERE position='1' AND category='Affordable'";
                            $stmt=$con->prepare($sql);
                            $stmt->execute();
                            $data=$stmt->fetchAll();
                            foreach($data as $row){
                                $pic=$row['pic'];
                                

                            }
                                
                            
                        
                        
                        ?>
                        
                        <img src="./project_range_images/<?php echo $pic;?>" class="w-100" style="height:394px">
                        




         </section>
         <section class="display non_aff" id="rtm_d">
                         <span style="position:relative;left:40%;top:160px;z-index:12;"class="text-white">
                            <?php 
                            require './controller/dbcon.php';
                            $sql="SELECT location FROM property_range WHERE position='1' AND category='Ready-To-Move-In'";
                            $stmt=$con->prepare($sql);
                            $stmt->execute();
                            $data=$stmt->fetchAll();
                            foreach($data as $row){
                                $location=$row['location'];
                                

                            }
                            echo "<span class='font font_size_5 bg-transparent fw-bold'>$location</span>";

                                            $sql="SELECT * FROM project_readytomovein_details WHERE location='$location'";
                                            $stmt=$con->prepare($sql);
                                            $stmt->execute();
                                            $numrows=$stmt->rowCount();
                                            echo "<br>";
                                            echo "<span class='sel bg-warning' style='padding:5px;max-width:25%;text-align:center;'>$numrows &nbsp;PROPERTIES </span>";
                                            
                                            
                                

                            
                            ?>
                            </span>
                        
                        <?php 
                            require './controller/dbcon.php';
                            $sql="SELECT * FROM property_range WHERE position='1' AND category='Ready-To-Move-In'";
                            $stmt=$con->prepare($sql);
                            $stmt->execute();
                            $data=$stmt->fetchAll();
                            foreach($data as $row){
                                $pic=$row['pic'];
                                

                            }
                                
                            
                        
                        
                        ?>
                        
                        <img src="./project_range_images/<?php echo $pic;?>" class="w-100" style="height:394px">
                        


         </section>

     </div>
     <div class="col-sm-6">
         <section class="display" id="af_d2">
                      <span style="position:relative;left:40%;top:160px;z-index:12;"class="text-white">
                        <?php 
                        require './controller/dbcon.php';
                        $sql="SELECT location FROM property_range WHERE position='2' AND category='Affordable'";
                        $stmt=$con->prepare($sql);
                        $stmt->execute();
                        $data=$stmt->fetchAll();
                        foreach($data as $row){
                            $location=$row['location'];
                            

                        }
                        echo "<span class='font font_size_5 bg-transparent fw-bold'>$location</span>";

                                        $sql="SELECT * FROM project_affordable_details WHERE location='$location'";
                                        $stmt=$con->prepare($sql);
                                        $stmt->execute();
                                        $numrows=$stmt->rowCount();
                                        echo "<br>";
                                        echo "<span class='sel bg-warning' style='padding:5px;max-width:23%;text-align:center;'>$numrows &nbsp;PROPERTIES </span>";
                                        
                                        
                            

                        
                        ?>
                        </span>
                    
                    <?php 
                        require './controller/dbcon.php';
                        $sql="SELECT * FROM property_range WHERE position='2' AND category='Affordable'";
                        $stmt=$con->prepare($sql);
                        $stmt->execute();
                        $data=$stmt->fetchAll();
                        foreach($data as $row){
                            $pic=$row['pic'];
                            

                        }
                            
                        
                    
                    
                    ?>
                    
                    <img src="./project_range_images/<?php echo $pic;?>" class="w-100" style="height:394px">
                    




         </section>

     </div>

</div>
<div class="row">
     <div class="col-sm-6">
         <section class="display" id="af_d3">
          <span style="position:relative;left:40%;top:160px;z-index:12;"class="text-white">
          <?php 
            require './controller/dbcon.php';
            $sql="SELECT location FROM property_range WHERE position='3' AND category='Affordable'";
                            $stmt=$con->prepare($sql);
                            $stmt->execute();
                            $data=$stmt->fetchAll();
                            foreach($data as $row){
                                $location=$row['location'];
                                

                            }
                            echo "<span class='font font_size_5 bg-transparent fw-bold'>$location</span>";
                             
                            $sql="SELECT * FROM project_affordable_details WHERE location='$location'";
                            $stmt=$con->prepare($sql);
                            $stmt->execute();
                            $numrows=$stmt->rowCount();
                            echo "<span class='sel bg-warning' style='padding:5px;text-align:center;max-width:23%;'>$numrows &nbsp;PROPERTIES </span>";
          
          ?>
        
         </span>
            
            <?php                             
                            $sql="SELECT * FROM property_range WHERE position='3' AND category='Affordable'";
                            $stmt=$con->prepare($sql);
                            $stmt->execute();
                            $data=$stmt->fetchAll();
                            foreach($data as $row){
                                $pic=$row['pic'];                              

                            }                              
                            
                        
                        
                        ?>                        
                        <img src="./project_range_images/<?php echo $pic;?>" class="w-100 img-fluid" style="height:394px; z-index:1;">
                        




         </section>

     </div>
     <div class="col-sm-6">
        <br>
         <section class="display" id="af_d4">
             <span style="position:relative;left:40%;top:160px;z-index:12;"class="text-white">
                    
                    <a href="affordable.php" class="sel"  style="text-align:center;max-width:23%;padding:5px;text-decoration:none;color:white;background-color:darkorange;border-radius:11px 11px 11px 11px;"> More&#129138;</a>


                        
                </span>
                <?php 
                                require './controller/dbcon.php';
                                $sql="SELECT * FROM property_range WHERE position='4' AND category='Affordable'";
                                $stmt=$con->prepare($sql);
                                $stmt->execute();
                                $data=$stmt->fetchAll();
                                foreach($data as $row){
                                    $pic=$row['pic'];                                   

                                }
                                    
                                
                            
                            
                            ?>                            
                            <img src="./project_range_images/<?php echo $pic;?>" class="w-100 img-fluid" style="height:394px">
                            
         </section>
     </div>

</div>
<br>

<script>
    var af=document.getElementById("af");
    
    var rtm=document.getElementById("rtm");
    var cm=document.getElementById("cm");
    var uc=document.getElementById("uc");
    var af_d=document.getElementById("af_d");
    var af_d2=document.getElementById("af_d2");
    var af_d3=document.getElementById("af_d3");
    var af_d4=document.getElementById("af_d4");

    var rtm_d=document.getElementById("rtm_d");
    var cm_d=document.getElementById("cm_d");
    var uc_d=document.getElementById("uc_d");
    var id=null;
    

    
    af.addEventListener("click",function(){
        
                
        af.style.background="navy";
        af.style.color="powderblue";
        rtm.style.background="lavender";
        rtm.style.color="lightslategrey";
        cm.style.background="lavender";
        cm.style.color="lightslategrey";
        uc.style.background="lavender";
        uc.style.color="lightslategrey";
        
        af_d.style.display="block";
        af_d2.style.display="block";
        af_d3.style.display="block";
        af_d4.style.display="block";

        af_d.style.width="10%";
        af_d2.style.float="right";
        af_d2.style.width="10%"; 
        af_d3.style.width="10%";
        af_d4.style.float="right";
        af_d4.style.width="10%";

        
        clearInterval(id);
        id = setInterval(frame,300);
        function frame(){
            $("#af_d").animate({width:'100%'});
            $("#af_d2").animate({width:'100%'});
            $("#af_d3").animate({width:'100%'});
            $("#af_d4").animate({width:'100%'});
            
           
        }
        rtm_d.style.display="none";
        cm_d.style.display="none";
        uc_d.style.display="none";      

        
        
    });
     rtm.onclick=function(){
        af.style.background="lavender";
        af.style.color="lightslategrey";
        rtm.style.background="navy";
        rtm.style.color="powderblue";
        cm.style.background="lavender";
        cm.style.color="lightslategrey";
        uc.style.background="lavender";
        uc.style.color="lightslategrey";
       
        af_d.style.display="none";
        af_d2.style.display="none";
        af_d3.style.display="none";
        af_d4.style.display="none";
        rtm_d.style.display="block";
        cm_d.style.display="none";
        uc_d.style.display="none";
        
        
    }
    cm.onclick=function(){
        af.style.background="lavender";
        af.style.color="lightslategrey";
        rtm.style.background="lavender";
        rtm.style.color="lightslategrey";
        cm.style.background="navy";
        cm.style.color="powerderblue";
        uc.style.background="lavender";
        uc.style.color="lightslategrey";
        
        af_d.style.display="none";
        rtm_d.style.display="none";
        cm_d.style.display="block";
        uc_d.style.display="none";
        
        
    }
     uc.onclick=function(){
        af.style.background="lavender";
        af.style.color="lightslategrey";
        rtm.style.background="lavender";
        rtm.style.color="lightslategrey";
        cm.style.background="lavender";
        cm.style.color="lightslategrey";
        uc.style.background="navy";
        uc.style.color="powerderblue";
        rtm_d.style.display="none";
        af_d.style.display="none";
        cm_d.style.display="none";
        uc_d.style.display="block";
        
        
    }
    
        

             
                
            
                              
            
            

        


     </script>
<!--About Guwahati-->
<div class="row" style="background-image: url('./general_images/about.png');">
         <div class="col-sm-1"></div>
         <div class="col-sm-5">
            <p>&nbsp;</p>
               <span class="font font_size_4" style="color:darkorange;font-weight:bold;">
                 ABOUT GUWAHATI 
               </span>
              <p>&nbsp;</p>
               <p style="color:ghostwhite;" class="font font_size_3 text-justify">
                   Guwahati is a city in the north-eastern state of Assam. It lies on the banks of the mighty Brahmaputra River and at the foothills of the Shillong Plateau. Owing to its location, the city is a natural hotspot with several rare animals and birds either residing here or regularly visiting it, making tourism a significant contributor to its economy.
                 </p>
                 <p style="color:ghostwhite;" class="font font_size_3">
                    Besides being an important region for wildlife, Guwahati is a major commercial, educational, political and cultural centre of the east and especially the north-east. The city’s view on various political matters also holds great importance for the region.
               
                 </p>
            
                  <a href="guwahati.php" style="text-decoration:none;"><button style="background-color:darkorange;color:white;padding:13px;">KNOW MORE</button></a>
         </div>
         <div class="col-sm-6 text-center">
             <p>&nbsp;</p>
              <span class="font font_size_4" style="color:darkorange;font-weight:bold;">
               STASTICS AT A GLANCE
              </span>
              <p>&nbsp;</p>
               <!--Picture Divs Start-->
                     <div class="row">
                          <div class="col bg-light fw-bold">
                              <?php
                                    require './controller/dbcon.php';
                                    $sql="SELECT * FROM project_affordable_details ";
                                    $stmt=$con->prepare($sql);
                                    $stmt->execute(); 
                                    $numrows=$stmt->rowCount();                       
                         
                         
                               ?>
                               <span style="color:darkorange;font-size:80px;"><?php echo $numrows.'+';?></span>
                               



                          </div>
                          &nbsp;
                          <div class="col bg-light fw-bold">
                              

                                <?php
                                require './controller/dbcon.php';
                                $sql="SELECT * FROM project_readytomovein_details ";
                                $stmt=$con->prepare($sql);
                                $stmt->execute(); 
                                $numrows=$stmt->rowCount();                       


                                ?>
                                <span style="color:darkorange;font-size:80px;"><?php echo $numrows.'+';?></span>


                                    
                                
                         
                         
                               
                               



                          </div>
                          <div class="w-100"></div>
                          <br>
                          <div class="col bg-light fw-bold">
                            <?php
                                    require './controller/dbcon.php';
                                    $sql="SELECT * FROM project_commercial_details ";
                                    $stmt=$con->prepare($sql);
                                    $stmt->execute(); 
                                    $numrows=$stmt->rowCount();                       


                                    ?>
                                    <span style="color:darkorange;font-size:80px;"><?php echo $numrows.'+';?></span>

                               



                          </div>
                          &nbsp;
                          <div class="col bg-light fw-bold">
                                <?php
                                            require './controller/dbcon.php';
                                            $sql="SELECT * FROM project_underconstruction_details ";
                                            $stmt=$con->prepare($sql);
                                            $stmt->execute(); 
                                            $numrows=$stmt->rowCount();                       


                                            ?>
                                            <span style="color:darkorange;font-size:80px;"><?php echo $numrows.'+';?></span>

                              



                          </div>


                     </div>


               
            
                 
                 
              
                     



                 

                    
                 
                
                
                           
                 
                 
        
    

        </div>
           
        <p>&nbsp;</p>
</div>
<!--Customer Testimonials-->
<div class="row bg-light">
     <div class="row">
         <div class="col-sm-12">
              <p>&nbsp;</p>             
              <h3><span style="color:darkorange;">CUSTOMER</span><span style="color:midnightblue;"> TESTIMONIALS</span></h3>
              <p>&nbsp;</p>

         </div>

     </div>
     <div class="row">
             <div class="col-sm-12">
     
             <?php require 'customer_testimonials.php';?>

             </div>

     </div>
         
</div>
<!--Footer-->
<?php require 'footer.php';?> 
             
</div></body></html>