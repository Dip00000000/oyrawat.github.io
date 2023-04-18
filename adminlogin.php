<!DOCTYPE html>
<html lang="en">
     <head>
        <title>Oyrawat Properties|Residential|Commercial|Affordable</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  
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
<div class="row" style="background-color:ghostwhite;padding:15px;">
     <div class="col-sm-3"></div>
     <div class="col-sm-6">
        
     </div>
     <div class="col-sm-3"></div>
</div>
<div class="row" style="background-color:whitesmoke;padding:15px;">
     <div class="col-sm-12">
     
     </div>

</div>

<div class="row" style="background-color:whitesmoke;padding:15px;">
     <div class="col-sm-4"></div>
     <div class="col-sm-4">
         
         <div class="card text-left;" style="color:white-smoke;box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
                <div class="card-header">
                    <h3>ADMIN LOGIN</h3>
                </div>
                <div class="card-body">
                        
                     <?php
                     if(isset($_GET['response'])){
                        $res=$_GET['response'];
                        if($res==0){
                            echo "<span style='color:red;'>Ensure Correct Username/Password</span>";
                        }

                     }
                     
                     ?>
                     <form id="ad_lg" method="post" action="./controller/validate.php">
                          
                          <div class="form-group">
                              
                              <label for="unm" class="form-label">Username</label>
                              <input type="email" class="form-control" id="unm" name="user_name" placeholder="Enter Registered Email">
                          </div>
                          <div class="form-group">
                              <label for="pwd" class="form-label">Password</label>                              
                              <input type="password" class="form-control" id="pwd" name="password">
                              <input type="checkbox" onclick="show_pwd()">Show Password
                              
                          </div>
                          <br>
                          <div class="form-group">
                              <button type="submit" class="form-control btn btn-primary" id="adm_lgn" name="admin_login">Submit</button>
                          </div>
                          <script src="./js/ad_lg.js"></script>
                     </form>

                </div>
                <div class="card-footer">
                    Forgot Password?

                 </div>
         </div>
     </div>
     <div class="col-sm-4"></div>

</div>
 






</body></html>