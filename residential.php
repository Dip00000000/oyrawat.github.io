<?php
if(isset($_POST['res_btn'])){
     $ot=addslashes($_POST['search_res']);
     header("Location:residential.php?key=$ot");
}
?>


<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Oyrawat Properties|Residential Properties</title>
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
  
</head><body style="background-color:whitesmoke;"><div class="container-fluid">
<?php require 'header.php';?>
<div class="row">
      <div class="col-sm-12 nopadding">
      <img src="./general_images/residentialpage.png" class="img_fluid w-100" alt="Header Page">

      </div>

</div>
<div class="row no-gutters" style="background-color:whitesmoke;">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
           <p>&nbsp;</p>
           <p>&nbsp;</p>
           <div class="bg-dark">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
                     <div class="input-group" style="padding:5px;">
                          <input name="search_res" type="text" class="form-control" placeholder="Search By Project,Builder Name,or Locality" aria-label="Residential_Property" aria-describedby="res_button" required>
                          <button name="res_btn" type="submit" class="btn btn-warning fw-bold" type="button" id="res_button" style="color:white;">SEARCH</button>

                     </div>
                </form>
           </div>
           <p>&nbsp;</p>
           
           
      </div>
      <div class="col-sm-3"></div>

</div>
<?php 


require './controller/dbcon.php';
if(isset($_GET['key'])){
           $ky=$_GET['key'];

           $resultsperpage=10;
           $stmt=$con->prepare("SELECT * FROM project_residential 
           WHERE project='$ky' ||location='$ky' || developer='$ky'");
           $stmt->execute();
           $rowcount=$stmt->rowCount();
           $totalpages=ceil($rowcount/$resultsperpage);
           if(isset($_GET['page'])){
              $page=$_GET['page'];
             }
            else{
                $page=1;
            }
  
           $start=($page-1)*$resultsperpage;



$stmt=$con->prepare("SELECT * FROM project_residential
WHERE project='$ky' ||location='$ky' || developer='$ky'
ORDER BY project DESC LIMIT $start,$resultsperpage");
$stmt->execute();


$data=$stmt->fetchAll();
          }else{
               $resultsperpage=10;
           $stmt=$con->prepare("SELECT * FROM project_residential");
           $stmt->execute();
           $rowcount=$stmt->rowCount();
           $totalpages=ceil($rowcount/$resultsperpage);
           if(isset($_GET['page'])){
              $page=$_GET['page'];
             }
            else{
                $page=1;
            }
  
           $start=($page-1)*$resultsperpage;



            $stmt=$con->prepare("SELECT * FROM project_residential ORDER BY project DESC LIMIT $start,$resultsperpage");
            $stmt->execute();


           $data=$stmt->fetchAll();

          }
foreach($data as $row){
  $project_residential_pic=$row['project_residential_pic'];
  $img=ltrim($project_residential_pic,".");
  $project=$row['project'];
  $location=$row['location'];
  $developer=$row['developer'];
  $price_range=$row['price_range'];
  $possession=$row['possession']; 
   echo "<p>&nbsp;</p>";
   echo "<div class='row no-gutters' style='background-color:whitesmoke;'>";
         echo "<div class='col-sm-2'></div>";
              echo "<div class='col-sm-8 nopadding' style='background-color:white;'>"; 
     
                   echo "<div class='row'>";
         
                         echo "<div class='col-sm-4'>";
                                echo  "<img src='.$img' class='float-start img-fluid'>";
         
                         echo "</div>";

                         echo "<div class='col-sm-7'>";
                                 echo  "<table class='table'>";
                
                                        echo "<tr> 
                                                  <td class='text-center'><span style='color:darkorange;'><b>$project</b><br><span style='color:lightslategrey;'>$location</span></td>
                                                  <td class='text-center'><span style='color:darkslategrey;'><b>$developer</b></td>
                                                  <td class='text-center><span style='color:darkorange;'>$price_range</td>
                                    
                                        </tr>";
 
                                         echo "<tr>
                                                    <td class='text-center font_size_1'><span style='background-color:lightgrey;color:darkgrey;border-radius:13px 13px 13px 13px;'>$possession</td>
                                                    <td class='text-center font_size_1'><span style='background-color:lightgrey;color:darkgrey;border-radius:13px 13px 13px 13px;'></td>
                                                    <td class='text-center font_size_1'><span style='background-color:lightgrey;color:darkgrey;border-radius:13px 13px 13px 13px;'></td>
                                          </tr>";              
                
                
                                  echo '</table>'; 
                                  
                                  echo "<table class='table font_size_2'>";
                                        echo "<thead>"; 
                                                      echo "<tr>
                                                                <th scope='col'>Configuration</th>
                                                                <th scope='col'>Area</th>
                                                                <th scope='col'>Base Price</th> 
                        
                        
                                                       </tr>";
                     
                     
                                         echo "</thead>";
                     
                                              $stmt1=$con->prepare("SELECT * FROM project_residential_configuration WHERE project='$project' AND developer='$developer' LIMIT 3");
                                              $stmt1->execute();
                                              $data1=$stmt1->fetchAll();
                                      
                                         echo "<tbody>"; 

                                             foreach($data1 as $row){
                                                                      $project1=$row['project'];
                                                                      $developer1=$row['developer'];
                                                                      $configuration_type=$row['configuration_type'];
                                                                      $area=$row['area'];
                                                                      $base_price=$row['base_price'];
                                                       echo "<tr>
                                                                 <td style='color:lightslategrey;'>$configuration_type</td>
                                                                 <td style='color:lightslategrey;'>$area</td>
                                                                 <td style='color:darkorange;'>$base_price</td>
                                                             </tr>";
                    
                    
                                                         }


                     
                     
                                            echo "</tbody>";                   
                     
                     
                                    echo "</table>";
                                    echo "<div class='text-end font_size_2'>";
                                           echo "<a href='residential_property_details.php?project=$project&developer=$developer' style='color:darkorange;text-decoration:none;'>View Details</a>";
                                           echo "&nbsp;";
                                           echo "<button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#enq1'>
                                              Get a Call Back
                                    
                                           </button>";
                                    
                                    
                                    
                                    echo "</div>";
                               
                          echo "</div>";
         
                      echo "</div>";
       
       
                   echo "</div>";
     
     
               echo "</div>";
  








     echo "</div>";}?>



<div class="row">
  
   <div class="col-sm-4"></div>
   <div class="col-sm-4 text-center">
   <?php
                if($page<$totalpages){
                     echo "<a href='residential.php?page=".($page+1)."'>Next&gt;&gt;</a>";
                     echo "&nbsp;";
                     echo "<a href='residential.php?page=".$rowcount."'>Last&gt;&gt;</a>";  
                     }

                if($page>=2){   
                     echo "<a href='residential.php?page=".($page-1)."'>  &lt;&lt;Prev </a>";
                     echo "&nbsp;";
                     echo "<a href='residential.php?page=1'>&lt;&lt;First</a>"; 
                     echo "&nbsp;";   
                     }
                   echo $page."&nbsp;of&nbsp;".$totalpages;

         ?>
   </div>
   <div class="col-sm-4"></div>

</div>







    



      














 
      
<?php require 'footer.php';?>
<div class="modal" id="enq1">
  <div class="modal-dialog">
    <div class="modal-content bg-primary">

      <!-- Modal Header -->
      
      <div class="modal-header">
          
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <h2 style="color:white;">Enquire for a Call Back</h2>
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
  


<!--Container-->
</div>
</body>
</html>
