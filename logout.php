<?php
session_start();
if($_SESSION['admin_user']){
    session_destroy();
header("Location:adminlogin.php");

}
else if(!$_SESSION['admin_user']){
    header("Location:adminlogin.php"); 
}




?>