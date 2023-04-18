<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  
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
<body style="background-color:whitesmoke;">
<div class="container-fluid">
<!--Container Start-->
<div class="row" style="padding:15px;">
     <div class="col-sm-1">
         <span>
                 <?php 
                 if($_GET['user']){
                 $usr=$_GET['user'];
                 }
                 ?>
                 <a style="color:black;text-decoration:none;" href='adminpage.php?user=<?php echo $usr;?>'>&#129152;</a>
               </span>
     </div>
     <div class="col-sm-7"></div>
     <div class="col-sm-4">
     <?php
             session_start();
             if($_SESSION['admin_user']){ 
               $ses=$_SESSION['admin_user'];                   
               echo "<span style='color:navy;'>ADMIN[$ses] is logged in &nbsp;&#65372;&nbsp;";
               echo "<span style='color:red;'>
               <a href='logout.php' style='color:red;'>LogOut</a>                    
               </span>";
           }
           else if(!$_SESSION['admin_user']){
               header("Location:logout.php");

           }
             
     
        ?>
     

     </div>

</div>
<div class="row" style="padding:15px;">
     <div class="col-sm-3">
          <button id="show_add_contactdetails" type="button" class="btn btn-secondary">&#10010;&nbsp;Contact Details</button>
            
          <!--PopuUp Start-->
          <div id="contactdetails_add" class="popup">

                     <button id="close_add_contactdetails" style="border:1px solid black;">&#10060;</button>
                     <h1> Add Contact Details</h1>
                     <hr style="color:black;">
                     <span id="res" style="color:red;"></span>
                     <form id="add_contactdetails" method="post">
                            <div class="form-group">
                                 <label for="adrs1" class="form-label">Office Address-1</label>
                                 <textarea class="form-control" id="adrs1" name="address1"></textarea>
                            </div>
                                                        
                            <div class="form-group">
                                  <label for="ph1" class="form-label">Official Phone Number-1</label>
                                   <input type="text" class="form-control" id="ph1" name="phone1">
                            </div>
                            <div class="form-group">
                                  <label for="ph2" class="form-label">Official Phone Number-2</label>
                                   <input type="text" class="form-control" id="ph2" name="phone2">
                            </div>
                            <div class="form-group">
                              <label for="off_eml" class="form-label">Email</label>
                              <input type="email" class="form-control" id="off_eml" name="official_email">
                            </div>
                            <div class="form-group">
                                  <button type="submit" class="form-control btn btn-primary" id="ad_cd_sv" name="add_contactdetails_save">Submit Contact Details</button>
                            </div>                 


                     </form>
                     <script src="./js/add_contactdetails.js"></script>

          </div>
     </div><!--PopUp Ends-->
     <div class="col-sm-6">
        <h1>CONTACT DETAILS MANAGEMENT</h1>    
     </div>
     <div class="col-sm-3"></div>

     <!--User Table Starts-->


<div class="row" style="padding:15px;">
     <div class="col-sm-12">
     <?php
           require './controller/dbcon.php';
           $resultsperpage=15;
           $stmt=$con->prepare("SELECT * FROM contact_details");
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
           $stmt=$con->prepare("SELECT * FROM contact_details LIMIT $start,$resultsperpage");
           $stmt->execute();
           $data=$stmt->fetchAll();
           ?>

             <table class="table table-hover text-center">
                <thead>
                     <tr>
                          <th scope="col">Address 1</th>
                          <th scope="col">Phone Number 1</th>
                          <th scope="col">Phone Number 1</th>
                          <th scope="col">Official EMail</th>
                          <th scope="col">Update</th>
                          <th scope="col">Delete</th>
                     </tr>

                </thead>
                 <tbody>
                    <?php
                 foreach($data as $row){
                    $address1=$row['address1'];
                    $phone1=$row['phone1'];
                    $phone2=$row['phone2'];
                    $official_email=$row['official_email'];
                    $id=$row['id'];

                    echo "<tr>
                    <td>$address1</td>
                    <td>$phone1</td>
                    <td>$phone2</td>
                    <td>$official_email</td>
                    <td><a href='update_contactdetails.php?user=$ses&id=$id&page=$page'>&#128393;</a></td>
                    <td><a href='delete_contactdetails.php?user=$ses&id=$id&page=$page'>&#215;</a></td>
                     
                    
                    </tr>";
                 }
                  ?>

                 </tbody>

              </table>



     </div>



</div>
<div class="row">
          <div class="col-sm-2"></div>
          <div class="col-sm-8 text-center">
           <?php
                if($page<$totalpages){
                     echo "<a href='contactdetails.php?page=".($page+1)."'>Next&gt;&gt;</a>";
                     echo "&nbsp;";
                     echo "<a href='contactdetails.php?page=".$rowcount."'>Last&gt;&gt;</a>";  
                     }

                if($page>=2){   
                     echo "<a href='contactdetails.php?page=".($page-1)."'>  &lt;&lt;Prev </a>";
                     echo "&nbsp;";
                     echo "<a href='contactdetails.php?page=1'>&lt;&lt;First</a>"; 
                     echo "&nbsp;";   
                     }
                   echo $page."&nbsp;of&nbsp;".$totalpages;

         ?>
          </div>
          <div class="col-sm-2"></div>
          
      

      


</div>


</div>
<!--Container End-->
</div></body></html>