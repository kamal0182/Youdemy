<?php
session_start();
// use App\Controllers\AuthController;
require_once dirname(__DIR__) ."\\vendor\\autoload.php";

use App\Controllers\AuthController;
require __DIR__ ."/app/Controllers/AuthController.php";
$request = $_SERVER['REQUEST_URI'];
$auth = new AuthController ;
$cama = '/Youdemy-Structer';
switch($request){
    case "":
    case "/":
          require  __DIR__ ."/Views/VisiteurView.php";
          break ;
    case "/Login" :
        require_once   __DIR__ ."/Views/LoginView.php";
        break ;
        case "Youdemy-Structer/Views/Sigup":
            require $cama."/Views/AdminView.php";
            break ;
}




?>