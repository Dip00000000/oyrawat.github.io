<!DOCTYPE html>
<html lang="en">
     <head>
        <title>Oyrawat Properties|Our Services</title>
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
            <img src="./general_images/aboutus.png" class="img-fluid w-100" alt="About Us">
         </div>
       </div>
      <div class="row" style="background-color:whitesmoke;">
           <div class="col-sm-12 text-center" >
              <p>&nbsp;</p>
              <h2><span style="color:darkorange;">OUR</span><span style="color:teal;">&nbsp;SERVICES</span></h2>
              <p>&nbsp;</p>
            </div>

      </div>
      <div class="row" style="background-color:whitesmoke;">
           <div class="col-sm-12 font font_size_3" >
                <p>Experts proclaim that Real Estate is the best and safest way to become wealthy. At Orion Realtors, we believe this and continually work towards growing the wealth of our clients by assisting them in making thoughtful and fruitful investment decisions.</p>
                <p>With an experience of over a decade, we have evolved into a full-service real estate solutions company that provides holistically designed services to take care of all your real estate needs. We have built a solid foundation of values, customer satisfaction, competency and commitment that has changed the face of the real estate market in India. Our team of seasoned professionals continuously works on gaining deep insights based on the latest trends in the real estate market to make our clients' decisions wise and rational. Our team is driven by a strong vision and has the competency to achieve excellence beyond expectation.</p>
                <p>We take pride in staying true to our founding values and only trading in properties that boast superior aesthetics, timely deliverance and functional aspirations of our clients. Our unmatchable services have led us to win many prestigious awards including Certificate of Appreciation by AMB Group, BPTP Ltd., Breez Builders and Developers Pvt. Ltd, GLS Infra, JMS Buildtech Pvt. Ltd., Signature Global and Silverglades.</p>
                <p>Orion Realtors has ushered a new era of trade in the commercial and residential real estate market by offering state-of-the-art properties at exceptional rates. From sourcing, negotiating, undertaking the legal process, helping in getting the finances from all the major banks and NBFCs, to acting as an interface with builders, every action of ours is dedicated towards keeping the customers happy.</p>
          
           </div>

      </div>

    <div class="row" style="background-color:ghostwhite;padding:15px;">
             <div class="col-sm-12 text-center" style="border-radius:15px 15px 15px 15px; border-left:3px solid navy; border-right:3px solid navy;" >
             <button onclick="chg_r()" type="button" class="btn btn-light w-100" data-bs-toggle="collapse" data-bs-target="#residential"><span style="float:left;">AFFORDABLE</span><span id="plus_r"style="float:right;color:darkorange;">&#10010;</span><span id="minus_r"style="float:right;display:none;color:darkorange;">&#65293;</span></button>
                   <div id="residential" class="collapse" style="background-color:whitesmoke;">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 </div>
                 <script>
                  var pl_r=document.getElementById("plus_r");
                  var ms_r=document.getElementById("minus_r");
                  function chg_r(){
                    if(ms_r.style.display==="none"){
                      ms_r.style.display="block";
                      pl_r.style.display="none";
                    }else if(pl_r.style.display==="none")
                     {
                      
                      pl_r.style.display="block";
                      ms_r.style.display="none";
                    

                    }
                  }
                 </script>

             </div>
     
            
    </div>
    <br>
    <div class="row" style="background-color:ghostwhite;padding:15px;">
             <div class="col-sm-12 text-center" style="border-radius:15px 15px 15px 15px; border-left:3px solid navy; border-right:3px solid navy;" >
             <button onclick="chg_c()" type="button" class="btn btn-light w-100" data-bs-toggle="collapse" data-bs-target="#commercial"><span style="float:left;">READY-TO-MOVE-IN</span><span id="plus_c"style="float:right;color:darkorange;">&#10010;</span><span id="minus_c"style="float:right;display:none;color:darkorange;">&#65293;</span></button>
                   <div id="commercial" class="collapse" style="background-color:whitesmoke;">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 </div>
                 <script>
                  var pl_c=document.getElementById("plus_c");
                  var ms_c=document.getElementById("minus_c");
                  function chg_c(){
                    if(ms_c.style.display==="none"){
                      ms_c.style.display="block";
                      pl_c.style.display="none";
                    }else if(pl_c.style.display==="none")
                     {
                      
                      pl_c.style.display="block";
                      ms_c.style.display="none";
                    

                    }
                  }
                 </script>

             </div>
     
            
    </div>
    
    <br>
    <div class="row" style="background-color:ghostwhite;padding:15px;">
             <div class="col-sm-12 text-center" style="border-radius:15px 15px 15px 15px; border-left:3px solid navy; border-right:3px solid navy;" >
             <button onclick="chg_cl()" type="button" class="btn btn-light w-100" data-bs-toggle="collapse" data-bs-target="#corporate_leasing"><span style="float:left;">UNDER CONSTRUCTION</span><span id="plus_cl"style="float:right;color:darkorange;">&#10010;</span><span id="minus_cl"style="float:right;display:none;color:darkorange;">&#65293;</span></button>
                   <div id="corporate_leasing" class="collapse" style="background-color:whitesmoke;">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 </div>
                 <script>
                  var pl_cl=document.getElementById("plus_cl");
                  var ms_cl=document.getElementById("minus_cl");
                  function chg_cl(){
                    if(ms_cl.style.display==="none"){
                      ms_cl.style.display="block";
                      pl_cl.style.display="none";
                    }else if(pl_cl.style.display==="none")
                     {
                      
                      pl_cl.style.display="block";
                      ms_cl.style.display="none";
                    

                    }
                  }
                 </script>

             </div>
     
            
    </div>
    <br>
    <div class="row" style="background-color:ghostwhite;padding:15px;">
             <div class="col-sm-12 text-center" style="border-radius:15px 15px 15px 15px; border-left:3px solid navy; border-right:3px solid navy;" >
             <button onclick="chg_rl()" type="button" class="btn btn-light w-100" data-bs-toggle="collapse" data-bs-target="#retail_leasing"><span style="float:left;">COMMERCIAL</span><span id="plus_rl"style="float:right;color:darkorange;">&#10010;</span><span id="minus_rl"style="float:right;display:none;color:darkorange;">&#65293;</span></button>
                   <div id="retail_leasing" class="collapse" style="background-color:whitesmoke;">
                   Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                   sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                 </div>
                 <script>
                  var pl_rl=document.getElementById("plus_rl");
                  var ms_rl=document.getElementById("minus_rl");
                  function chg_rl(){
                    if(ms_rl.style.display==="none"){
                      ms_rl.style.display="block";
                      pl_rl.style.display="none";
                    }else if(pl_rl.style.display==="none")
                     {
                      
                      pl_rl.style.display="block";
                      ms_rl.style.display="none";
                    

                    }
                  }
                 </script>

             </div>
     
            
    </div>

    <br>
    <br>
    

    
    


    



    <?php require 'footer.php';?>

</div>
</body>


</html>