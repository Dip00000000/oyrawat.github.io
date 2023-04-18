<?php
$redir=$_SERVER['REQUEST_URI'];
switch($redir){
    case '/RealEstate':
    require __DIR__.'./index.php ';
    break;

    case '/RealEstate/':
    require __DIR__.'./index.php ';
    break;
    case '/RealEstate/main':
        require __DIR__.'./index.php ';
        break;

    case '/RealEstate/aboutus':
        require __DIR__.'./aboutus.php ';
        
        break;
    case '/RealEstate/director':
        require __DIR__.'./director.php ';
            
    break;
    
     
    case '/RealEstate/services':
     require __DIR__.'./services.php ';
    break;

    case '/RealEstate/contactus':
    require __DIR__.'./contactus.php ';
    break;
    
}



?>