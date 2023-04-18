<!DOCTYPE html>
<html lang="en">
     <head>
        <title>Oyrawat Properties|Residential|Commercial|Affordable</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="./css/gen.css">
  <link rel="stylesheet" href="./css/carousel.css">
        <style>
.material-symbols-sharp {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
</style>
    
</head>
<body style="background-color:whitesmoke;"><div class="container-fluid">
<div class="row bg-light" style="padding:15px;">
       <div class="col-sm-4">
         <button class="btn btn-secondary">
                 <?php 
                 if($_GET['user']){
                 $usr=$_GET['user'];
                 }
                 ?>
                 <a style="color:powderblue;text-decoration:none;" href='adminpage.php?user=<?php echo $usr;?>'>&#129152;</a>
         </button>
    
    </div>
    <div class="col-sm-4"></div>
    
    <div class="col-sm-4">
    <?php
             
                session_start();                                
                
                if($_SESSION['admin_user']){ 
                     $ses=$_SESSION['admin_user'];
                    if($usr===$ses){
                     echo "<span style='color:navy;'>ADMIN[$ses] is logged in &nbsp;&#65372;&nbsp;";
                     echo "<span style='color:red;'>
                       <a href='logout.php' style='color:red;'>LogOut</a>                    
                      </span>";
                   }else if($user!=$_SESSION['admin_user']){
                     echo "Login Again.....";

                   }  
                                     
                  }
                else if(!$_SESSION['admin_user']){
                    header("Location:logout.php");

                }

                
             
     
        ?>
    
    
    
    
    
    </div>
</div>
<div class="row" style="padding:15px;">
     <div class="col-sm-3">
         <button id="show_add_builder_projects" type="button" class="btn btn-secondary">&#10010;&nbsp;Builder Projects</button>
         <!--PopuUp Start-->
         <div id="builder_projects_add" class="popup">
             <button id="close_add_builder_projects" style="border:1px solid black;">&#10060;</button>
             <h1> MANAGE BUILDER PROJECTS</h1>
             <hr style="color:black;">
             <span id="res" style="color:red;"></span>
             <form id="add_builder_projects" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                    <label for="bld_pic" class="form-label">Upload Builder Picture</label>
                    <input type="file" class="form-control" id="bld_pic" name="builder_pic">
                 </div>
                 <div class="form-group">
                    <label for="prj" class="form-label">Project</label>
                    <input type="text" class="form-control" id="prj" name="project">
                 </div>
                 <div class="form-group">
                    <label for="loc" class="form-label">Location</label>
                    <input type="text" class="form-control" id="loc" name="location">
                 </div>
                 <div class="form-group">
                    <label for="dev" class="form-label">Developer</label>
                    <input type="text" class="form-control" id="dev" name="developer">
                 </div>
                 <div class="form-group">
                    <label for="pr" class="form-label">Price Range</label>
                    <input type="text" class="form-control" id="pr" name="price_range">
                 </div>
                 <div class="form-group">
                    <label for="psn" class="form-label">Possession Status</label>
                    <input type="text" class="form-control" id="psn" name="possession">
                 </div>
                 
                 <div class="form-group">
                     <button type="submit" class="form-control btn btn-primary" id="ad_bld_prj_sv" name="add_builder_projects_save">Submit Builder Projects</button>
                 </div>

             </form>
             
             
             <span id="res1" style="color:red;"></span>
             <form id="add_builder_projects_configuration" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    
                    <select class="form-select" id="prj_bld" name="builder_project">
                       <option value="0" selected>Select Project</option>
                       <?php
                       require './controller/dbcon.php';
                       $stmt=$con->prepare("SELECT project FROM project_builder");
                       $stmt->execute();
                       $data=$stmt->fetchAll();
                       foreach($data as $row){
                       $project=$row['project'];
                       echo "<option value='$project'>$project</option>";
                       }
                       ?>

                       
                       
                    </select>
                 </div>
                 <div class="form-group">
                    
                    <select class="form-select" id="bld_dev" name="builder_developer">
                       <option value="0" selected>Select Developer</option>
                       <?php
                       require './controller/dbcon.php';
                       $stmt=$con->prepare("SELECT developer FROM project_builder");
                       $stmt->execute();
                       $data=$stmt->fetchAll();
                       foreach($data as $row){
                       $developer=$row['developer'];
                       echo "<option value='$developer'>$developer</option>";
                       }
                       ?>
                       
                    </select>
                 </div>
             
             
             
                <div class="form-group">
                    <label for="con_typ" class="form-label">Configuration Type</label>
                    <input type="text" class="form-control" id="con_typ" name="configuration_type">
                 </div>
                 <div class="form-group">
                    <label for="s_ar" class="form-label">Super Area</label>
                    <input type="text" class="form-control" id="s_ar" name="super_area">
                 </div>
                 <div class="form-group">
                    <label for="bs_pr" class="form-label">Base Price</label>
                    <input type="text" class="form-control" id="bs_pr" name="base_price">
                 </div>
                 <div class="form-group">
                    <label for="bld_flr_pln" class="form-label">Upload Builder Floor Plan</label>
                    <input type="file" class="form-control" id="bld_flr_pln" name="builder_floor_plan">
                 </div>
                 <div class="form-group">
                     <button type="submit" class="form-control btn btn-primary" id="ad_bld_prj_cnf_sv" name="add_builder_projects_config_save">Submit Builder Project Configurations</button>
                 </div>             
             
             
             </form>
             
             <script src="./js/projects_builder.js"></script>
         </div>
        

     </div>
     <div class="col-sm-3"></div>
     <div class="col-sm-3"></div>
    
</div>
<div class="row bg-light" style="padding:15px;">
    <div class="col-sm-12">
     <h1>Builder Property Titles</h1>    
    </div>
</div>
<div class="row" style="padding:15px;">
    <div class="col-sm-12" style="overflow-y:auto;">
     <?php
     require './controller/dbcon.php';
     $stmt=$con->prepare("SELECT * FROM project_builder");
     $stmt->execute();
     $data=$stmt->fetchAll();
     ?>
     <table class="table table-hover text-center">
       <thead>
          <tr>
           <th scope="col">Picture Path</th>
           <th scope="col">Project</th>
           <th scope="col">Location</th>
           <th scope="col">Developer</th>
           <th scope="col">Price Range</th>
           <th scope="col">Possession Status</th>
           <th scope="col">Update</th>
           <th scope="col">Delete</th>
          </tr>
      </thead>
      <tbody>
      <?php
         foreach($data as $row){
         $project_builder_pic=$row['project_builder_pic'];
         $project=$row['project'];
         $location=$row['location'];
         $developer=$row['developer'];
         $price_range=$row['price_range'];
         $possession=$row['possession'];

         echo "<tr>
                  <td>$project_builder_pic</td>
                  <td>$project</td>
                  <td>$location</td>
                  <td>$developer</td>
                  <td>$price_range</td>
                  <td>$possession</td>
                  <td>&#128393;</td>
                  <td>&#215;</td>

         </tr>";
         }
      ?>
      
      
      
      
      </tbody>

     
     
     
     </table>
     
     
     
     
    </div>
</div>

<div class="row bg-light" style="padding:15px;">
    <div class="col-sm-12">
     <h1>Builder Property Configurations</h1>    
    </div>
</div>

<div class="row" style="padding:15px;">
    <div class="col-sm-12" style="overflow-y:auto;">
     <?php
     require './controller/dbcon.php';
     $stmt=$con->prepare("SELECT * FROM project_builder_configuration");
     $stmt->execute();
     $data=$stmt->fetchAll();
     ?>
     <table class="table table-hover text-center">
       <thead>
          <tr>
           <th scope="col">Builder Project</th>
           <th scope="col">Project Developer</th>
           <th scope="col">Configuration Type</th>
           <th scope="col">Super Area</th>
           <th scope="col">Base Price</th>
           <th scope="col">Picture Path</th>
           <th scope="col">Update</th>
           <th scope="col">Delete</th>
          </tr>
      </thead>
      <tbody>
      <?php
         foreach($data as $row){
         $project=$row['project'];
         $developer=$row['developer'];
         $configuration_type=$row['configuration_type'];
         $super_area=$row['super_area'];
         $base_price=$row['base_price'];
         $builder_floor_plan_pic=$row['builder_floor_plan_pic'];

         echo "<tr>
                  <td>$project</td>
                  <td>$developer</td>
                  <td>$configuration_type</td>
                  <td>$super_area</td>
                  <td>$base_price</td>
                  <td>$builder_floor_plan_pic</td>
                  <td>&#128393;</td>
                  <td>&#215;</td>

         </tr>";
         }
      ?>
      
      
      
      
      </tbody>

     
     
     
     </table>
     
     
     
     
    </div>
</div>















</div></body></html>

