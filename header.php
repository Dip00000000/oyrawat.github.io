<?php 
require './controller/dbcon.php';
$sql="SELECT * FROM contact_details";
$stmt=$con->prepare($sql);
$stmt->execute();
$data=$stmt->fetchAll();
foreach($data as $row){
     $address1=$row['address1'];
     $phone1=$row['phone1'];
     $phone2=$row['phone2'];
     $official_email=$row['official_email'];

}

?>
<div id="mobile_menu" class="row bg-primary bg-gradient" style="display:none;">
      <div class="row">
          <div class="col-sm-12 text-end">
               <span id="cls" class="bg-warning text-white" style="padding:5px;">&times;</span>
          </div>
      </div>
      <div class="row">
           <div class="col-sm-3">
          
           <table class="table table-borderless">
                <thead>
                     <tr>
                          <th scope="col"><span class="font font_size_4 text-warning fw-bold">QUICK LINKS</span></th>
                     </tr>

                </thead>
                <tbody>
                     <tr>
                         <td><a href="aboutus.php" class="font font_size_3 text-white text-decoration-none"">About Us</a></td>

                     </tr>
                     <tr>
                         <td><a href="director.php" class="font font_size_3 text-white text-decoration-none"">Director's Message</a></td>

                     </tr>
                     <tr>
                         <td><a href="contactus.php" class="font font_size_3 text-white text-decoration-none"">Contact Us</a></td>

                     </tr>

                </tbody>

           </table>
          </div>
           <div class="col-sm-3">
              <table class="table table-borderless">
                <thead>
                     <tr>
                          <th scope="col"><span class="font font_size_4 text-warning fw-bold">SERVICES</span></th>
                     </tr>

                </thead>
                <tbody>
                     <tr>
                         <td><a href="realestateconsultancy.php" class="font font_size_3 text-white text-decoration-none"">Real Estate Consultancy</a></td>

                     </tr>
                     <tr>
                         <td><a href="loanconsultancy.php" class="font font_size_3 text-white text-decoration-none"">Loan Consultancy</a></td>

                     </tr>
                     <tr>
                         <td><a href="interiordesign.php" class="font font_size_3 text-white text-decoration-none"">Interior Designing</a></td>

                     </tr>
                     <tr>
                         <td><a href="landscapedesign.php" class="font font_size_3 text-white text-decoration-none"">Landscape Designing</a></td>

                     </tr>

                </tbody>

            </table>
           </div>
           <div class="col-sm-3">
              <table class="table table-borderless">
                <thead>
                     <tr>
                          <th scope="col"><span class="font font_size_4 text-warning fw-bold">PROPERTIES</span></th>
                     </tr>

                </thead>
                <tbody>
                     <tr>
                         <td><a href="affordable.php" class="font font_size_3 text-white text-decoration-none"">Affordable</a></td>

                     </tr>
                     <tr>
                         <td><a href="readytomovein.php" class="font font_size_3 text-white text-decoration-none"">Ready-To-Move-In</a></td>

                     </tr>
                     <tr>
                         <td><a href="commercial.php" class="font font_size_3 text-white text-decoration-none"">Commercial</a></td>

                     </tr>
                     <tr>
                         <td><a href="underconstruction.php" class="font font_size_3 text-white text-decoration-none"">Under-Construction</a></td>

                     </tr>

                </tbody>

                 </table>
               </div>
                <div class="col-sm-3">
                  <span class="font font_size_4 text-warning fw-bold">CONNECT WITH US</span>
                  <br>
                   <span class="fa fa-solid fa-phone text-white"></span>&nbsp;<span class="text-white"><?php echo $phone1;?></span>
                  <br>
                  <span class="fa fa-solid fa-envelope text-white"></span>&nbsp;<span class="text-white"><?php echo $official_email;?></span>
                  <br>
                  <span class="fa fa-solid fa-location-dot text-white"></span>&nbsp;<span class="text-white"><?php echo $address1;?></span>

               </div>
          </div>
                                    
</div>

<div class="row" style="background-color:lavender;z-index:20;">
           <div class="col-sm-1">
                <a href="index.php" style="text-decoration:none;">
                 <img src="./main_images/logo.jpeg" class="img-responsive img-thumbnail" alt="logo">
                </a>
           </div>
           <div class="col-sm-11">
                <div class="row d-flex bd-highlight font font_size_2 text-left" style="background-color:whitesmoke;border-bottom:5px solid darkorange;border-radius:0px 0px 0px 55px;">
            
                     <div class="col-sm-2"></div>
                     <div class="col-sm-2"></div>
                     <div class="col-sm-2"></div>
                     <div class="col-sm-2"></div>
                     <div class="col-sm-2"><span class="fa fa-solid fa-phone"></span>&nbsp;<?php echo $phone1;?></div>
                     <div class="col-sm-2"><span class="fa fa-solid fa-envelope"></span>&nbsp;<?php echo $official_email;?></div>                    
                </div>
                <div class="row  font font_size_3 fw-bold">
                     <div class="col-sm-5"></div>                       
                     <div class="col-sm-6">
                          <nav class="navbar navbar-expand-lg bg-transparent">
                               <div class="container-fluid">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                              <li class="nav-item">
                                                   <a class="nav-link active" aria-current="page" href="main" style="color:black;">Home</a>
                                              </li>
                                              <li class="nav-item dropdown">
                                                   <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:navy;">About Us</a>
                                                   <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="aboutus">Company Overview</a></li>                                                                                     
                                                        <li><a class="dropdown-item" href="director">Director's Message</a></li>
                                                 
                                                   </ul>                             

                                              </li>
                                              <li class="nav-item dropdown">
                                                   <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:navy;">Services</a>
                                                   <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="realestateconsultancy.php">Real Esate Consultancy</a></li>
                                                        <li><a class="dropdown-item" href="loanconsultancy.php">Loan Consultancy</a></li>                                              
                                                        <li><a class="dropdown-item" href="interiordesign.php">Interior Designing</a></li>
                                                        <li><a class="dropdown-item" href="landscapedesign.php">Landscape Designing</a></li>
                                                 

                                                   </ul>                                    

                                              </li>
                                              <li class="nav-item dropdown">
                                                   <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:navy;">Properties</a>
                                                   <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="affordable.php">Affordable</a></li>
                                                        <li><a class="dropdown-item" href="readytomovein.php">Ready-To-Move-In</a></li>                                              
                                                        <li><a class="dropdown-item" href="commercial.php">Commercial</a></li>
                                                        <li><a class="dropdown-item" href="underconstruction.php">Under Construction</a></li>
                                                 

                                                   </ul>                                    

                                              </li>
                                              <li class="nav-item">
                                                   <a class="nav-link active" aria-current="page" href="contactus" style="color:navy;">Contact Us</a>
                                              </li>
                                                  
                                           


                                         </ul>

                                    </div>


                               </div>


                          </nav>

                     </div>
                     <div class="col-sm-1">
                          <span id="sw" class="material-symbols-sharp d-sm-block d-lg-none">Apps</span>             
         
                     </div>




                </div>




           </div>









</div>
<script>
     var sh=document.getElementById("sw");
     var cl=document.getElementById("cls");
     var mm=document.getElementById("mobile_menu");
     sh.onclick=function(){
          mm.style.display="block";
     }
     cl.onclick=function(){
          mm.style.display="none";
          
     }
</script>
