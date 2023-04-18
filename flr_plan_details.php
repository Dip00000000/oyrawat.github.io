<?php
  if(isset($_POST['show_flr'])){
    $pic=addslashes($_POST['pic_data']);
    echo "<img src='.$pic'>";

  }


  
  ?>