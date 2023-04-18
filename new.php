<!DOCTYPE html>
<html lang="en">
     <head>
            <title>Oyrawat Properties|Affordable|Ready-to-Move-in|Under Construction|Commercial </title>
            <link rel="icon" href="./main_images/oyrawat.gif" type="image/gif" sizes="16x16">

             <meta name="viewport" content="width=device-width, initial-scale=1">
             <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
             <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
             
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

</style>
    
</head><body><div class="container-fluid">
    <!--Header-->
    <?php
        require'header.php';
    ?>
    <!--Banner-->
<div class="row">
     <div class="col-sm-12 nopadding position-relative">

    <!--Carousel Starts-->
         <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
             <div class="carousel-inner">
                  <div class="carousel-item active">
                        <img src="./general_images/sld1.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                       <img src="./general_images/sld2.png" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                      <img src="./general_images/sld3.png" class="d-block w-100" alt="...">
                  </div>
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
    

    <!--Carousel Ends-->

    

    
        <!--Search Starts-->
         <div class="row position-absolute top-50 start-50 translate-middle w-50" style="padding:10px;background:rgba(120,120,120,0.7);z-index:3;">
             <form method="post" id="search" class="form-inline" action="search.php">
                  <div class="input-group">
                     <span class="input-group-text " id="addon-wrapping">
                         <div class="input-group">
                             <select id="s_p" name="search_projects" class="form-select form-control">
                                          <option value="0"selected>Property Type</option>
                                          <option value="Affordable">Affordable</option>
                                          <option value="Commercial">Commercial</option>
                                          <option value="Ready-to-Move-in">Ready-to-Move-in</option>
                                          <option value="Under-Construction">Under-Construction</option>
                                          
                             </select>
                         </div>
                     </span>
                     
                     <input id="s_o" name="search_others" type="text" class="form-control" placeholder="Search by Project Name, Builder, or Locality" aria-label="Search" aria-describedby="basic-addon2">
                     

                     <span class="input-group-text" id="addon-wrapping" style="background-color:darkorange">
                         <button name="send_search" type="submit" class="btn btn-warning fw-bold form-control" style="color:white;">
                             <span class="material-symbols-sharp align-middle">Search</span>
                            Search
                         </button>  
          
                    
                     </span>

                                          
                  </div>
             </form>
             <script>
                $(document).ready(function(){
                    $("#search").submit(function(){
                         var sp=$("#s_p").val();
                                if(sp==0){
                                    $("#s_p").css("border-color","red");
                                    return false;

                                }
                         var so=$("#s_o").val();
                                if(so.length==0){
                                    $("#s_o").css("border-color","red");
                                    return false;                                   

                                }
                    });
                });
             </script>
        
         </div>



        <!--Search Ends-->
        
                

</div>
<!--Featured Properties-->
<div class="row" style="background-color:whitesmoke;">
     <div class="col-sm-12 nopadding d-flex justify-content-center align-items-center" style="height:100px;">
             <p>&nbsp;</p>
             
                 <h3><span style="color:darkorange;">OYRAWAT</span><span style="color:midnightblue;"> FEATURED PROJECTS</span></h3>
             <p>&nbsp;</p>
    </div>
</div>   
<div class="row">
     <div class="col-sm-12">
     <?php require 'featured_projects_carousel.php'; ?>
     </div>


</div>
<!--Property Categories-->
<div class="row">
        <div class="col-sm-12">
              <p>&nbsp;</p>
              <h3><span style="color:darkorange;">PROPERTY CATEGORIES</span> ON THE OFFER</h3>
              <p>&nbsp;</p>

        </div>

 </div>
 <div class="row">
    <div class="col-sm-12">
         <div class="row">
             <div class="col">
                    <span style="position:relative;top:45px;left:15px;z-index:12;background-color:darkorange;padding:15px;" class="font font_size_3 fw-bold"><a href="affordable.php" style="color:black;text-decoration:none;">Affordable&#129154;</a></span>
                  
                     <?php
                        require './controller/dbcon.php';
                        $sql="SELECT * FROM property_range WHERE category='Affordable' LIMIT 1";
                        $stmt=$con->prepare($sql);
                        $stmt->execute();
                        $data=$stmt->fetchAll();
                        foreach($data as $row){ 
                                $pic1=$row['pic'];
                                        $pic_a='.'.ltrim($pic1,'.');
                                    
                                }             
                         
                         
                         
                               ?>
                               <img class="img-fluid w-100" src="<?php echo $pic_a;?>" style="height:400px;">
                               
                                
             </div>
             <div class="col">
                    <span style="position:relative;top:45px;left:15px;z-index:12;background-color:darkorange;padding:15px;" class="font font_size_3 fw-bold"><a href="readytomovein.php" style="color:black;text-decoration:none;">Ready-To-Move-In&#129154;</a></span>
                  
                  <?php
                     require './controller/dbcon.php';
                     $sql="SELECT * FROM property_range WHERE category='Ready-to-Move-in' LIMIT 1";
                     $stmt=$con->prepare($sql);
                     $stmt->execute();
                     $data=$stmt->fetchAll();
                     foreach($data as $row){ 
                             $pic1=$row['pic'];
                                     $pic_a='.'.ltrim($pic1,'.');
                                 
                             }             
                      
                      
                      
                            ?>
                            <img class="img-fluid w-100" src="<?php echo $pic_a;?>" style="height:400px;">
                            
            </div>
            <div class="w-100"></div>
            <div class="col">
                <span style="position:relative;top:45px;left:15px;z-index:12;background-color:darkorange;padding:15px;" class="font font_size_3 fw-bold"><a href="commercial.php" style="color:black;text-decoration:none;">Commercial&#129154;</a></span>
                  
                  <?php
                     require './controller/dbcon.php';
                     $sql="SELECT * FROM property_range WHERE category='Commercial' LIMIT 1";
                     $stmt=$con->prepare($sql);
                     $stmt->execute();
                     $data=$stmt->fetchAll();
                     foreach($data as $row){ 
                             $pic1=$row['pic'];
                                     $pic_a='.'.ltrim($pic1,'.');
                                 
                             }             
                      
                      
                      
                            ?>
                            <img class="img-fluid w-100" src="<?php echo $pic_a;?>" style="height:400px;">
                            
            </div>
            <div class="col">
                 <span style="position:relative;top:45px;left:15px;z-index:12;background-color:darkorange;padding:15px;" class="font font_size_3 fw-bold"><a href="underconstruction.php" style="color:black;text-decoration:none;">Under-Construction&#129154;</a></span>
                  
                  <?php
                     require './controller/dbcon.php';
                     $sql="SELECT * FROM property_range WHERE category='Under-Construction' LIMIT 1";
                     $stmt=$con->prepare($sql);
                     $stmt->execute();
                     $data=$stmt->fetchAll();
                     foreach($data as $row){ 
                             $pic1=$row['pic'];
                                     $pic_a='.'.ltrim($pic1,'.');
                                 
                             }             
                      
                      
                      
                            ?>
                            <img class="img-fluid w-100" src="<?php echo $pic_a;?>" style="height:400px;">
                            
            </div>



         </div>
               
   
    
       <br>  
    </div>
    

</div>
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
                          <div class="col">
                              <?php
                                    echo "hi";        
                         
                         
                         
                               ?>
                               



                          </div>
                          <div class="col">
                              <?php
                                    
                                echo "Hi";
                         
                         
                               ?>
                               



                          </div>
                          <div class="w-100"></div>
                          <div class="col">
                              <?php
                                    echo "Hi";
                         
                         
                               ?>
                               



                          </div>
                          <div class="col">
                              <?php
                                   echo "<p class='text-danger'>hi</p>";         
                         
                         
                         
                               ?>
                              



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