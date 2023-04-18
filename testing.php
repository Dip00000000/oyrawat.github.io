<!DOCTYPE html>
<html lang="en">
     <head>
        <title>Oyrawat Properties|Affordable Properties</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="../css/gen.css">
  <link rel="stylesheet" href="../css/carousel.css">
  <link rel="stylesheet" href="./css/timeline.css">
  <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script src="./js/timeline.js"></script>
  <style>
   .left_right{
   width:100%;
   animation:lr 5s;
   }
   @keyframes lr{
    from {width:0%;}
    to {width:100%;}
   }
   .right_left{
    width:100%;   
   animation:rl 5s;
   }
   @keyframes rl{
    from {width:10%;}
    to {width:100%;}
   }
   .sel{
    position: relative;
    left:45%;
    top:205px;
    max-width:25%;
    background-color:darkorange;
    color:black;
    z-index:12;
    font-weight:bold;
    font-size:18px;
    border-box:box-sizing;
    text-align:center;
    border-radius:10px 10px 10px 10px;
   }
  
  </style>
</head>
<body>
<?php 
require './controller/dbcon.php';
$sql="SELECT * FROM project_affordable_payment";
$stmt=$con->prepare($sql);
$stmt->execute();
$result=$stmt->fetchAll();
?>

<div class="panel-body">
                	<div class="timeline">
                        <div class="timeline__wrap">
                            <div class="timeline__items">
                            <?php
                            foreach($result as $row)
                            {
                            ?>
                            	<div class="timeline__item">
                                    <div class="timeline__content">
                                    	<h2><?php echo $row["timeline"]; ?></h2>
                                    	<p><?php echo $row["payment"]; ?></p>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</div>
                         










</body>
<script>
$(document).ready(function(){
    jQuery('.timeline').timeline({
		mode: 'horizontal',
	    visibleItems: 4,
	});
});
</script>

<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="affordable-tab" data-bs-toggle="tab" data-bs-target="#affordable" type="button" role="tab" aria-controls="affordable" aria-selected="true">Affordable</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="readytomovein-tab" data-bs-toggle="tab" data-bs-target="#readytomovein" type="button" role="tab" aria-controls="readytomovein" aria-selected="false">Ready-To-Move-In</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="commercial-tab" data-bs-toggle="tab" data-bs-target="#commercial" type="button" role="tab" aria-controls="commercial" aria-selected="false">Commercial</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="underconstruction-tab" data-bs-toggle="tab" data-bs-target="#underconstruction" type="button" role="tab" aria-controls="underconstruction" aria-selected="false">Under-Construction</button>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
     <div class="tab-pane fade show active" id="affordable" role="tabpanel" aria-labelledby="affordable-tab">
  
       <div class="container">
             <div class="row">
                 <div class="col-6 col-sm-6">

                 <section class="display left_right" id="af_d">
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
                        
                        <img src="./project_range_images/<?php echo $pic;?>" class="w-100 " style="height:394px">
                        




                     </section>
                 
                 
                 </div>
                 <div class="col-6 col-sm-6">
                  <section class="display right_left" id="af_d2" style="position:relative;float:right;">
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

    
                 <div class="w-100"></div>

                 <div class="col-6 col-sm-6">
                 <section class="display left_right" id="af_d3">
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
                 <div class="col-6 col-sm-6">
                 <section class="display left_right" id="af_d4" style="position:relative;float:right;">
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
     </div>
                        




         
  
     </div>
     <div class="tab-pane fade" id="readytomovein" role="tabpanel" aria-labelledby="readytomovein-tab">
        <dib class="row">     
             <div class="col-6 col-sm-6">
                 <section id="rm_d" class="left_right">
                     <?php 
                        require './controller/dbcon.php';
                        $sql="SELECT * FROM property_range WHERE position='1' AND category='Ready-To-Move-In'";
                        $stmt=$con->prepare($sql);
                        $stmt->execute();
                        $data=$stmt->fetchAll();
                        foreach($data as $row){
                            $location=$row['location'];
                            $pic=$row['pic'];
                            $pic1=ltrim($pic,'.');
                        }
                        
                        $sql1="SELECT * FROM project_readytomovein_details WHERE location='$location'";
                        $stmt=$con->prepare($sql);
                        $stmt->execute();
                        $numrows=$stmt->rowCount();
                        echo "<div class='sel'>$location<br>$numrows&nbsp;PROPERTIES</div>";
                        
                        echo "<img src='.$pic1'>";
                        

                                 

                        
                     ?>                                     

                        
                  
                 </section>
              
     
             </div>
             <div class="col-6 col-sm-6">
             <section id="rm_d2" class="right_left">
                     <?php 
                        require './controller/dbcon.php';
                        $sql="SELECT * FROM property_range WHERE position='2' AND category='Ready-To-Move-In'";
                        $stmt=$con->prepare($sql);
                        $stmt->execute();
                        $data=$stmt->fetchAll();
                        foreach($data as $row){
                            $location=$row['location'];
                            $pic=$row['pic'];
                            $pic1=ltrim($pic,'.');
                        }
                        
                        $sql1="SELECT * FROM project_readytomovein_details WHERE location='$location'";
                        $stmt=$con->prepare($sql);
                        $stmt->execute();
                        $numrows=$stmt->rowCount();
                        echo "<div class='sel'>$location<br>$numrows&nbsp;PROPERTIES</div>";
                        
                        echo "<img src='.$pic1'>";
                        

                                 

                        
                     ?>                                     

                        
                  
                 </section>
     
     
            </div>
             <div class="w-100"></div>
             <div class="col-6 col-sm-6">
              3
             </div>
             <div class="col-6 col-sm-6">
               4
     
             </div>
  
         </div>
  
  
  </div>
  <div class="tab-pane fade" id="commercial" role="tabpanel" aria-labelledby="commercial-tab">3</div>
  <div class="tab-pane fade" id="underconstruction" role="tabpanel" aria-labelledby="underconstruction-tab">4</div>
</div>
</html>