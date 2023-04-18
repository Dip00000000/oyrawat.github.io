<?php
if(isset($_POST["send_search"])){
    $pj=addslashes($_POST['search_projects']);
    $ot=addslashes($_POST['search_others']);
    if($pj=="Residential"){
        header("Location:residential.php?key=$ot");
    }else if($pj=="Commercial"){
        header("Location:commercial.php?key=$ot");

    }else if($pj=="Affordable"){
        header("Location:affordable.php?key=$ot");

    }else if($pj=="Gated"){
        header("Location:gated.php?key=$ot");

    }else if($pj=="Builder"){
        header("Location:builder.php?key=$ot");
    }


}








?>