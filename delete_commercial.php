<?php
require './controller/dbcon.php';
?>
<?php
if(isset($_POST['delete_project'])){
    $project=addslashes($_POST['project']);
    $developer=addslashes($_POST['developer']);
    $location=addslashes($_POST['location']);
    $pic_project=addslashes($_POST['pic_prj']);
    $img=ltrim($pic_project,'.');
    $prj_pic_path='.'.$img;


    $delete_data=[
        'project'=>$project,
        'developer'=>$developer,
         'location'=>$location        
    ];
    $delete_data1=[
        'project'=>$project,
        'developer'=>$developer        
    ];


    $sql="DELETE FROM project_commercial WHERE project=:project AND developer=:developer AND location=:location";
        $stmt=$con->prepare($sql);                            
        $stmt->execute($delete_data);
        unlink($prj_pic_path);
        if($stmt){

                     $stmt1=$con->prepare("SELECT * FROM project_commercial_configuration WHERE project=:project AND developer=:developer AND location=:location");
                     $stmt1->execute($delete_data);
                     $data=$stmt1->fetchAll();
                      foreach($data as $row){
                        $commercial_floor_plan_pic=$row['commercial_floor_plan_pic'];

                                 }
                    $flr_pln_pic=ltrim($commercial_floor_plan_pic,'.');
                    $flr_pln_pic_path='.'.$flr_pln_pic;
                    unlink($flr_pln_pic_path);
        
                    $sql="DELETE FROM project_commercial_configuration WHERE project=:project AND developer=:developer AND location=:location";
                    $stmt=$con->prepare($sql);                            
                    $stmt->execute($delete_data);
                    
                    


        }
        
        if($stmt&&$stmt1){
            echo "<script>
                window.close();
            
                  </script>";
        }
                
    
    

}
?>













<?php

if(isset($_GET['id'])){
                        $tid=$_GET['id'];                        
                        $stmt=$con->prepare("SELECT * FROM project_commercial WHERE id='$tid'");
                        $stmt->execute();
                        $data=$stmt->fetchAll();
                            foreach($data as $row){
                                $project=$row['project'];
                                $developer=$row['developer'];
                                $location=$row['location'];
                                $pic_project=$row['project_commercial_pic'];
                                
                            }
                            
                            
                            

                                                        
                            
                            
                            
                            



}else{
    echo "Something Went Wrong. Try Again.....";
}


?>
<!DOCTYPE html>
<html lang="en">
     <head></head>
     <body>
             <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
             <?php
             echo "Do You Want To DELETE project--".$project."--of developer--".$developer."?";
             ?>
             <input type="hidden" name="project" value="<?=$project;?>">
             <input type="hidden" name="developer" value="<?=$developer;?>">
             <input type="hidden" name="location" value="<?=$location;?>">
             <input type="hidden" name="pic_prj" value="<?=$pic_project;?>">

             
             <br><br>
             <button type="submit" name="delete_project" style="width:450px;width:150px;">Yes, Delete</button>
             &nbsp;&nbsp;
             <button id="del_can" onclick="cancel()" name="delete_cancel" style="width:450px;width:150px;">Cancel</button>

             </form>
             <script>
                function cancel(){
                    window.close();
                }
             </script>
           


     </body>


</html>