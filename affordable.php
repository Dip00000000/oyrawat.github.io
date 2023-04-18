<?php
if(isset($_POST['res_btn'])){
     $ot=addslashes($_POST['search_res']);
     header("Location:affordable.php?key=$ot");
}
?>

<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Oyrawat Properties|Affordable Properties</title>
     
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
<body>
<div class="container-fluid">
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
           $stmt=$con->prepare("SELECT * FROM project_affordable_details
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



$stmt=$con->prepare("SELECT * FROM project_affordable_details
WHERE project='$ky' ||location='$ky' || developer='$ky'
ORDER BY project DESC LIMIT $start,$resultsperpage");
$stmt->execute();


$data=$stmt->fetchAll();
          }else{
               $resultsperpage=10;
           $stmt=$con->prepare("SELECT * FROM project_affordable_details");
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



            $stmt=$con->prepare("SELECT * FROM project_affordable_details ORDER BY project DESC LIMIT $start,$resultsperpage");
            $stmt->execute();


           $data=$stmt->fetchAll();

          }
foreach($data as $row){
  $affordable_project_pic=$row['affordable_project_pic'];
  $img=ltrim($affordable_project_pic,".");
  $project=$row['project'];
  $location=$row['location'];
  $developer=$row['developer'];
  $price_range=$row['price_range'];
  $possession=$row['possession']; 
  $flag=$row['flag'];
   echo "<p>&nbsp;</p>";
   echo "<div class='row no-gutters' style='background-color:whitesmoke;'>";
         echo "<div class='col-sm-2'></div>";
              echo "<div class='col-sm-8 nopadding' style='background-color:white;'>"; 
     
                   echo "<div class='row'>";
         
                         echo "<div class='col-sm-4'>";
                                echo  "<img src='.$img' class='float-start img-fluid w-auto' style='height:250px;'>";
         
                         echo "</div>";

                         echo "<div class='col-sm-7'>";
                                 echo  "<table class='table font font_size_4'>";
                
                                        echo "<tr>
                                                  <td class='text-left'><span style='color:slategrey;'><i>Property Name</i></td> 
                                                  <td class='text-left'><span style='color:darkorange;'><b>$project</b></td>
                                                  
                                        </tr>";
                                        echo "<tr>
                                                  <td class='text-left'><span style='color:slategrey;'><i>Location</i></td> 
                                                  <td class='text-left'><span style='color:darkorange;'><b>$location</b></td>
                                                  
                                        </tr>";
                                        echo "<tr>
                                                  <td class='text-left'><span style='color:slategrey;'><i>Developer</i></td> 
                                                  <td class='text-left'><span style='color:darkorange;'><b>$developer</b></td>
                                                  
                                        </tr>";
                                        echo "<tr>
                                                  <td class='text-left'><span style='color:slategrey;'><i>Price Range</i></td> 
                                                  <td class='text-left'><span style='color:darkorange;'><b>$price_range</b></td>
                                                  
                                        </tr>";
 
                                         echo "<tr>
                                                    <td class='text-left'><span style='color:slategrey;'><i>Possession Status</i></td>
                                                    <td class='text-left'>$possession</td>
                                        </tr>";              
                
                
                                  echo '</table>'; 
                                  
                                  
                                    echo "<div class='text-end font_size_2'>";
                                           switch($flag){
                                             case "af":
                                                  echo "<a href='affordable_property_details.php?project=$project&developer=$developer&location=$location' style='color:darkorange;text-decoration:none;'>View Details</a>";
                                                  break;
                                             case "uc":
                                                  echo "<a href='underconstruction_property_details.php?project=$project&developer=$developer&location=$location' style='color:darkorange;text-decoration:none;'>View Details</a>";
                                                  break;
                                           }
                                           
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
                     echo "<a href='affordable.php?page=".($page+1)."'>Next&gt;&gt;</a>";
                     echo "&nbsp;";
                     echo "<a href='affordable.php?page=".$rowcount."'>Last&gt;&gt;</a>";  
                     }

                if($page>=2){   
                     echo "<a href='affordable.php?page=".($page-1)."'>  &lt;&lt;Prev </a>";
                     echo "&nbsp;";
                     echo "<a href='affordable.php?page=1'>&lt;&lt;First</a>"; 
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
<!--Floor Plan Pop Up-->
<div id='flr_pic' class='popup_flr'>
  <span id ='flr_pic_close' style='background-color:darkorange;color:white; float:right;'>&nbsp;&nbsp;&nbsp;<b>&times;</b>&nbsp;&nbsp;&nbsp;</span>
  <br>
  <span id='flr_pic_show'></span>

</div>

  


<!--Container-->
</div>
</body>
</html>
