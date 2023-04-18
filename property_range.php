<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Oyrawat Properties|Under-Construction Properties</title>
     <link rel="icon" href="./main_images/oyrawat.gif" type="image/gif" sizes="16x16">

     
     
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="./css/gen.css">
      <link rel="stylesheet" href="./css/carousel.css">
      <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
      <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
      
        <style>
.material-symbols-sharp {
  font-variation-settings:
  'FILL' 0,
  'wght' 400,
  'GRAD' 0,
  'opsz' 48
}
.range_btn{
    border: 2px darkorange solid;
    border-radius:10px 10px 10px 10px;
    min-width:200px;
    min-height:35px;
    background:lavender;
    font-size:16px;
    font-weight:bold;
    color:lightslategray;
    padding:5px;
    pointer:cursor;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);

}
.range_desc{   
    
    
    display:block;
    background-color:ghostwhite;
    height:800px;
}
.know_more{
    position:relative;
    left:50%;
    top:45%;
}
.sel{
    
}
.sel:hover{
    background-image: linear-gradient(to left, blue , orange);
}
.display{
    left:0px;
}
.non_aff{
    display:none;
}

</style>
</head><body><div class="container-fluid">
<div class="row">
     
         <div class="col-sm-2"></div>
         <div class="col-sm-2">
             <button type="button" class="range_btn" id="af">AFFORDABLE</button>
         </div>
         <div class="col-sm-2">
             <button type="button" class="range_btn" id="rtm">Ready-To-Move-In</button>
         </div>
         <div class="col-sm-2">
             <button type="button" class="range_btn" id="cm">Commercial</button>
         </div>
         <div class="col-sm-2">
             <button type="button" class="range_btn" id="uc">Under-Construction</button>   
         </div>
         <div class="col-sm-2"></div>

     
     




    

</div>

 
 




     
    




<script>
    var af=document.getElementById("af");
    var rtm=document.getElementById("rtm");
    var cm=document.getElementById("cm");
    var uc=document.getElementById("uc");
    var af_d=document.getElementById("af_d");
    var rtm_d=document.getElementById("rtm_d");
    var cm_d=document.getElementById("cm_d");
    var uc_d=document.getElementById("uc_d");
    

    af.addEventListener("click",function(){
        
        af.style.background="navy";
        af.style.color="powderblue";
        rtm.style.background="lavender";
        rtm.style.color="lightslategrey";
        cm.style.background="lavender";
        cm.style.color="lightslategrey";
        uc.style.background="lavender";
        uc.style.color="lightslategrey";
        rtm_d.style.display="none";
        af_d.style.display="block";
        cm_d.style.display="none";
        uc_d.style.display="none";
        
        
    });


     rtm.addEventListener("click",function(){
        af.style.background="lavender";
        af.style.color="lightslategrey";
        rtm.style.background="navy";
        rtm.style.color="powderblue";
        cm.style.background="lavender";
        cm.style.color="lightslategrey";
        uc.style.background="lavender";
        uc.style.color="lightslategrey";
        
        af_d.style.display="none";
        rtm_d.style.display="block";
        cm_d.style.display="none";
        uc_d.style.display="none";

     });
     
    cm.onclick=function(){ 
        
        af.style.background="lavender";
        af.style.color="lightslategrey";
        rtm.style.background="lavender";
        rtm.style.color="lightslategrey";
        cm.style.background="navy";
        cm.style.color="powerderblue";
        uc.style.background="lavender";
        uc.style.color="lightslategrey";
        rtm_d.style.display="none";
        af_d.style.display="none";
        cm_d.style.display="block";
        uc_d.style.display="none";
        
        
        
    }
     uc.onclick=function(){
        
        af.style.background="lavender";
        af.style.color="lightslategrey";
        rtm.style.background="lavender";
        rtm.style.color="lightslategrey";
        cm.style.background="lavender";
        cm.style.color="lightslategrey";
        uc.style.background="navy";
        uc.style.color="powerderblue";
        rtm_d.style.display="none";
        af_d.style.display="none";
        cm_d.style.display="none";
        uc_d.style.display="block";
        
        
        
    }
    
        

             
                
            
                              
            
            

        


     </script>
</div></body></html>