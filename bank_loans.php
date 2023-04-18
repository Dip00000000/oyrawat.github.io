<!DOCTYPE html>
<html lang="en">
     <head>
        <title>Oyrawat Properties|Affordable Properties</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js">
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="../css/gen.css">
  <link rel="stylesheet" href="../css/carousel.css">
  <script src="https://cdn.ckeditor.com/ckeditor5/35.4.0/classic/ckeditor.js"></script>
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
<body><div class="container-fluid">
<div class="row" style="padding:15px;">
     <div class="col-sm-12">
         <h3><span style="color:darkorange;">LOANS</span>&nbsp;Approved By</h3>   
     </div>


</div>
<div class="row" style="padding:15px;">
        <div class="col-sm-12">
        <?php
            require './controller/dbcon.php';
            $sql="SELECT * FROM financing";
            $stmt=$con->prepare($sql);
            $stmt->execute();
            $data=$stmt->fetchAll();
            foreach($data as $row){
                $bank_pic1=$row['bank_pic1'];
                $pic='.'.ltrim($bank_pic1,'.');
                echo "<img src='$pic' class='img-fluid' style='width:200px;height:120px;'>";
                echo "&nbsp;";echo "&nbsp;";
            }
            ?>
        
        
        </div>





</div>
</div></body></html>