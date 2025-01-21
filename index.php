<?php
// include_once "../app/Models/User.php";
use App\Controllers\AuthController;

// use App\Controllers\AuthController;
require_once dirname(__DIR__) ."\\vendor\\autoload.php";



use App\Controllers\CategorieController;
use App\Controllers\CoursController;
session_start();
// use App\Models\Cours;
use App\Models\User;
$email = "";

// require __DIR__ ."/app/Controllers/AuthController.php";
$request = $_SERVER['REQUEST_URI'];
$auth = new AuthController ;
$categorie =  new CategorieController;
$cours = new CoursController;
$user = new User ;
$cama = '/Youdemy-Structer';
switch($request){
    case "":
    case "/":
          require  __DIR__ ."/Views/VisiteurView.php";
          break ;
    case "/Login" :
        require_once   __DIR__ ."/Views/LoginView.php";

        break ;
    case "/Auth/Login":
        $auth = new AuthController ;
        
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
  if(isset($_POST['submit'])){

      $auth->Login($_REQUEST['email'] , $_REQUEST['password']);
      $email = $_SESSION['user']->getEmail();
      echo $email ;
   var_dump($_SESSION['user']);
        $_REQUEST['email'] = "";
        $_REQUEST['password'] = "";
        if($_SESSION['user']->getRole()->getName()== "Admin"){
            require "./views/Enseignant.php";  
        }
        elseif($_SESSION['user']->getRole()->getName()== "Enseignant"){
            require "./views/AdminView.php";
        }
  }}

//   }}
    break ;
    case "/Auth/Cate":
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['categorysubmit'])){
                var_dump(  $_SESSION['user']);
               $categorie->modify($_POST['idinput'], $_POST['categoryname'],$_POST['categorydescription'],$_SESSION['user']->getEmail());
                $_POST['categoryname'] = "";
                $_POST['categorydescription'] =  "";
                $_POST['categorysubmit'] = "";
                require "./views/AdminView.php";
            }
        }
        unset($_POST);
      break;
        case "/Auth/Cours":
        //   var_dump(  $_SESSION['user']);
                if(isset($_POST['checkcour'])){
                   $cours->create($_POST['Tittle'], $_POST['description'], $_POST['contenu'],$_POST['logo'], $_POST['tags'],$_POST['category'] ,$_SESSION['user']->getEmail() );
                    $_POST['Tittle'] = "";
                    $_POST['description'] =  "";
                    $_POST['video'] = "";
                    require "./views/Enseignant.php";
                // }
            break ;
                }
            }



?>