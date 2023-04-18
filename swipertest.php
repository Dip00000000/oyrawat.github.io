<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Swiper demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
             <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script><script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
             
    <meta
      name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />

    <!-- Demo styles -->
    <style>
      html,
      body {
        position: relative;
        
      }

      body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
      }

      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
  </head>

  <body>
    <!-- Swiper -->
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
      <?php
                      require './controller/dbcon.php';
                      $sql="SELECT * FROM featured_projects";
                      $stmt=$con->prepare($sql);
                      $stmt->execute();
                      $data=$stmt->fetchAll();
                      foreach($data as $row){
                       $pic1=$row['pic'];
                       $content1=$row['content1'];
                       $content2=$row['content2'];
                       $content3=$row['content3'];
                     
                       $pic='.'.ltrim($pic1,'.');
                                          
                     
                     
                        echo "<div class='swiper-slide'>
                             <div class='card'>
                                         <div class='card-body' style='height:300px;'>
                                     
                                           <img class='card-img img-fluid' src='$pic' alt='featured_image' >
                                           <div class='card-img-overlay'><br><span class='bg-warning text-danger' style='padding:5px;border-radius:0px 12px 12px 0px;'>$content1</span></div> 
                                        </div>
                                            
                                                                         
                                       <div class='card-footer font font_size_3'>
                                       <span class='text-center w-50'>$content2</span>
                                       <br>
                                       <span class='text-end w-50'>$content3</span>                                      
                                        
                                       </div>
                             
                             </div>
                        
                     
                     
                    
                    
                    
                    
                        </div>";
                    
                }?>
        
        
        
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 1,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },

        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 50,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 50,
          },
          1024: {
            slidesPerView: 5,
            spaceBetween: 5,
          },
        },
      });
    </script>
  </body>
</html>
