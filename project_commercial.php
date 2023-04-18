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
         <span class="bg-transparent fw-bold lead" style="border-radius:50%;">
                 <?php 
                 if($_GET['user']){
                 $usr=$_GET['user'];
                 }
                 ?>
                 <a style="color:black;text-decoration:none;" href='adminpage.php?user=<?php echo $usr;?>'>&#129152;</a>
         </span>
    
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
         <button id="show_add_commercial_projects" type="button" class="btn btn-secondary">&#10010;&nbsp;Commercial Projects</button>
         <!--PopuUp Start-->
         <div id="commercial_projects_add" class="popup">
             <button id="close_add_commercial_projects" style="border:1px solid black;">&#10060;</button>
             <h1> MANAGE COMMERCIAL PROJECTS</h1>
             <hr style="color:black;">
             <span id="res" style="color:red;"></span>
             <form id="add_add_commercial_projects" method="post" enctype="multipart/form-data">
                 <div class="form-group">
                    <label for="com_pic" class="form-label">Upload Commercial Picture</label>
                    <input type="file" class="form-control" id="com_pic" name="commercial_pic">
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
                     <button type="submit" class="form-control btn btn-primary" id="ad_com_prj_sv" name="add_commercial_projects_save">Submit Commercial Projects</button>
                 </div>

             </form>
             
             
             <span id="res1" style="color:red;"></span>
             <form id="add_commercial_projects_configuration" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    
                    <select class="form-select" id="prj_com" name="commercial_project">
                       <option value="0" selected>Select Project</option>
                       <?php
                       require './controller/dbcon.php';
                       $stmt=$con->prepare("SELECT project FROM project_commercial");
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
                    
                    <select class="form-select" id="com_dev" name="commercial_developer">
                       <option value="0" selected>Select Developer</option>
                       <?php
                       require './controller/dbcon.php';
                       $stmt=$con->prepare("SELECT developer FROM project_commercial");
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
                    
                    <select class="form-select" id="com_loc" name="commercial_location">
                       <option value="0" selected>Select Project Location</option>
                       <?php
                       require './controller/dbcon.php';
                       $stmt=$con->prepare("SELECT location FROM project_commercial");
                       $stmt->execute();
                       $data=$stmt->fetchAll();
                       foreach($data as $row){
                       $location=$row['location'];
                       echo "<option value='$location'>$location</option>";
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
                    <label for="com_flr_pln" class="form-label">Upload Commercial Floor Plan</label>
                    <input type="file" class="form-control" id="com_flr_pln" name="commercial_floor_plan">
                 </div>
                 <div class="form-group">
                     <button type="submit" class="form-control btn btn-primary" id="ad_com_prj_cnf_sv" name="add_commercial_projects_config_save">Submit Commercial Project Configurations</button>
                 </div>             
             
             
             </form>
             
             <script src="./js/project_commercial.js"></script>
         </div>
        

     </div>
     <div class="col-sm-3"></div>
     <div class="col-sm-3"></div>
    
</div>
<div class="row bg-light" style="padding:15px;">
    <div class="col-sm-12">
     <h1>COMMERCIAL PROPERTY DETAILS</h1>    
    </div>
</div>
<div class="row" style="padding:15px;">
    <div class="col-sm-12" style="overflow-y:auto;">
     <?php
     require './controller/dbcon.php';
     $stmt=$con->prepare("SELECT * FROM project_commercial");
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
         $id=$row['id'];
         $project_commercial_pic=$row['project_commercial_pic'];
         $project=$row['project'];
         $location=$row['location'];
         $developer=$row['developer'];
         $price_range=$row['price_range'];
         $possession=$row['possession'];

         echo "<tr>
                  <td>$project_commercial_pic</td>
                  <td>$project</td>
                  <td>$location</td>
                  <td>$developer</td>
                  <td>$price_range</td>
                  <td>$possession</td>
                  <td>&#128393;</td>
                  <td><a href='javascript:void(0);' id='$id' onclick='win_opn(this.id)'>&#215;</a></td>

         </tr>";
         }
      ?>
      
      
      
      
      </tbody>

     
     
     
     </table>
     
     
     
     
    </div>
    <script>
    function win_opn(getid){
      var gid=getid;
      
      window.open("delete_commercial.php?id="+gid,"_blank","top=200,left=500,width=400,height=200,toolbar=no,scrollbars=no,resizable=no");
    }
    
    
    </script>
    
</div>

<div class="row bg-light" style="padding:15px;">
    <div class="col-sm-12">
     <h1>COMMERCIAL PROPERTY CONFIGURATION</h1>    
    </div>
</div>

<div class="row" style="padding:15px;">
    <div class="col-sm-12" style="overflow-y:auto;">
     <?php
     require './controller/dbcon.php';
     $stmt=$con->prepare("SELECT * FROM project_commercial_configuration");
     $stmt->execute();
     $data=$stmt->fetchAll();
     ?>
     <table class="table table-hover text-center">
       <thead>
          <tr>
           <th scope="col">Commercial Project</th>
           <th scope="col">Project Developer</th>
           <th scope="col">Location</th>
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
         $location=$row['location'];
         $configuration_type=$row['configuration_type'];
         $super_area=$row['super_area'];
         $base_price=$row['base_price'];
         $commercial_floor_plan_pic=$row['commercial_floor_plan_pic'];

         echo "<tr>
                  <td>$project</td>
                  <td>$developer</td>
                  <td>$location</td>
                  <td>$configuration_type</td>
                  <td>$super_area</td>
                  <td>$base_price</td>
                  <td>$commercial_floor_plan_pic</td>
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

