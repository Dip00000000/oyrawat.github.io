<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Oyrawat Properties|Directors</title>     
     
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
<body>
<div class="container-fluid">
<?php require 'header.php';?>
<div class="row">
     <div class="col-sm-12 nopadding">
         <img src="./general_images/contactus.png" class="img_fluid w-100" alt="Header Page">
      
      </div>

</div>
<div class="row" style="background-color:ghostwhite;">
     <div class="col-sm-3"></div>
     <div class="col-sm-6">
     <p>&nbsp;</p>
              <h2><span style="color:darkorange;">CONTACT</span><span style="color:teal;">&nbsp;US</span></h2>
              <p>&nbsp;</p>
    
     </div>
     <div class="col-sm-3"></div>


</div>
<div class="row" style="background-color:ghostwhite;">
    <div class="col-sm-12">
    We at Oyrawat Group take our customers with utmost seriousness. You may write to us about your feedback, complaints or about your interest to buy a new estate. Together, we achieve extraordinary outcomes. Please be free to fill this form and we’ll get in touch shortly. We assure your contact detail is a Best-Kept-Secret with us & will not be shared to any third party without your consent.
    <p>&nbsp;</p>

    </div>

</div>
<div class="row" style="background-color:lavender;">
     <div class="col-sm-1"></div>
     <div class="col-sm-5">
         <span id="res" style="color:red;"></span>
         <form id="contactus" method="post"><br>
             <div class="input-group mb-3 input-group-lg">
                 <span class="input-group-text material-symbols-sharp bg-primary">Person</span>
                 <input id="nm" name="name" type="text" class="form-control" placeholder="Full Name">
             </div>
             
             <div class="input-group mb-3 input-group-lg">
                 <span class="input-group-text material-symbols-sharp bg-primary">Mail</span>
                 <input id="em" name="email" type="text" class="form-control" placeholder="Email">
             </div>
             <div class="input-group mb-3 input-group-lg">
                 <span class="input-group-text material-symbols-sharp bg-primary">Smartphone</span>
                 <input id="phn" name="phone" type="text" class="form-control" placeholder="Phone">
             </div>
             <div class="input-group mb-3 input-group-lg">
                 <span class="input-group-text material-symbols-sharp bg-primary">Quick_Phrases</span>
                 <textarea id="cmt" name="comment" class="form-control" rows="5" id="comment" name="text" placeholder="Message"></textarea>
             </div>
             <div class="input-group mb-3 input-group-lg">
             <button name="contactus_save" type="submit" class="btn btn-primary">Submit</button>
             </div>
         </form>
         <script src="./js/contactus.js"></script>
     </div>
     <div class="col-sm-5">
        <p>&nbsp;</p>
        <h2>OFFICE ADDRESS</h2>
        <p><?php echo $address1;?></p>
        <p>Phone:<?php echo "&nbsp;&nbsp;";echo $phone1; echo "&nbsp;&nbsp;"; echo $phone2; ?>
        <p>Email: <?php echo $official_email;?></p>
     </div>
     <div class="col-sm-1"></div>    


</div>

    






<?php require 'footer.php';?>
<!--Container-->
</div>
</body>
</html>