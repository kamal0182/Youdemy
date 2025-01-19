<?php 
// echo "Ascascasc";
//  require __DIR__ ."./Views/VisiteurView.php";
// require __DIR__."

// use App\Controllers\AuthController;

use App\Controllers\AuthController;
require __DIR__ ."/app/Controllers/AuthController.php";
include_once "./views/LoginView.php";
$request = $_SERVER['REQUEST_URI'];
// echo $request ;
// echo $request ;
// if("/Youdemy-Structer/index.php" == $request ){
//     echo "!";
// }
$auth = new AuthController ; 
$cama = '/Youdemy-Structer';
switch($request){
    case "/Youdemy-Structer/index.php":
        if(returntoIndexRoutingValue()==false){
            require  "/Youdemy-Structer/Views/AdminView.php";
            echo "kamal";
            break ;
        }
          require  "/Youdemy-Structer/Views/LoginView.php";
          break ;
        
    case "/Youdemy-Structer/Views/VisiteurView" :
        require_once $cama ."Views/Sigup.php";
        // if(isset($_REQUEST)){
        //     if(());
        //     require __DIR__."/Views/AdminView.php";
        // }
        break ;
        case "Youdemy-Structer/Views/Sigup":
            require $cama."/Views/AdminView.php";
            break ;
}




?>