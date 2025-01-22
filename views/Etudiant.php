<?php

require_once  dirname(__DIR__, 1) . "../../vendor/autoload.php";
echo require_once  dirname(__DIR__, 1) ."/index.php";
use App\Controllers\CategorieController;
use App\Controllers\CoursController;
use App\Models\User;
use App\Controllers\TageController;
use App\Controllers\UserController;
use App\Models\Tag;
$cours = new UserController;
$categorie = new CategorieController;
$tags = new TageController;
$users = new UserController;
$courses = new CoursController;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibblioschool</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <style>
        @import url(https://unpkg.com/@webpixels/css@1.1.5/dist/index.css);
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
    </style>
</head>
<!-- bytewebster.com -->
<!-- bytewebster.com -->
<!-- bytewebster.com -->

<body>


    <!-- Modal -->


    <!-- for Tags  -->

    <!-- Dashboard -->
 
        <!-- Vertical Navbar -->


        <!-- Push content down -->
        <div class="mt-auto"></div>
        <!-- User (md) -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="bi bi-person-square"></i> Account</a>
            </li>
            <li class="nav-item">
                   
                   <form action="/etudiant/Logout" method="get"> 
                        <input type="submit" name="Logout" value="Logout" >
                    </form>
            
            </li>
        </ul>
    </div>
    </div>
    </nav>
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <div class="h-screen flex-grow-1 overflow-y-lg-auto">
      
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <h1 class="h2 mb-0 ls-tight">
                                <img src="https://bytewebster.com/img/logo.png" width="40"><h1></h1>
                        </div>
                    </div>
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li onclick="showCategories('My Courses')" class="nav-item">
                            <a href="#" class="nav-link font-regular">My Courses</a>
                        </li>
                        <li onclick="showCategories('Courses')" class="nav-item">
                            <a href="#" class="nav-link font-regular">ALL Courses</a>
                        </li>
                    </ul>
                </div>
            </div>
     
        <main class="container mx-auto mt-8 px-6">
        <h2 class="text-2xl font-bold mb-4">
            Meilleurs cours dans la catégorie
            <span class="text-purple-700">Développement mobile</span>
        </h2>

        <div id="coursescontainer"  style="display: grid ; grid-template-columns : repeat(4,1fr); gap : 10px ;"class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($courses->read() as $cour) { ?>
                <div class="ab bg-white shadow-md rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl ">
    <div class="w-full h-56 bg-gray-300">
        <img src="<?php $cour->getLogo()?>" class="w-full h-full object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-800"><?php echo $cour->getTittle() ?></h3>
        <p class="text-sm text-gray-600"><?php $cour->getUser()->getFirstName()?></p>
        <form action="Auth/Inscription" method="post">
            <input type="hidden" name="subscriptionid"value="<?php echo $cour->getId() ?>">

            <input  type="submit" name="subscription"  class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
        </form>
        <div class="flex items-center mt-3">
            <div style="display:flex; ">

                <h5 style="margin-buttom: 10px;"> Enseignant : </h5><h5 style="margin-left: 20px; "> <?php echo "    " .$cour->getUser()->getFirstName() . $cour->getUser()->getLastName() ?></h5>
            </div >
            <div style="display:flex;">
                <h6 style="margin-left: 20px; ">Categorie :</h6><h6 style="margin-left: 20px; "><?php echo $cour->getCategorie()->getName()?></h6>
            </div>
            <?php
            foreach($cour->getTags() as $tag){ ?>
                <span class="text-purple-600 font-bold"> <?php echo "#"  .$tag->getName()."  "?></span>
           <?php  } ?>
         </div>
    </div>
</div>
            
<?php } ?>
        </div>
    </main>
    <script>
        
         function showCategories(name){
            if(name == "My Courses"){
        document.getElementById("coursescontainer").innerHTML = `
    <?php  foreach($cours->getAllinscriptions($_SESSION['user']->getId()) as $cour){ ?>
    <div class="ab bg-white shadow-md rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl ">
    <div class="w-full h-56 bg-gray-300">
  
    <img src="<?php $cour->getLogo()?>" class="w-full h-full object-cover">
    </div>  
    <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-800"><?php echo $cour->getTittle() ?></h3>
        <p class="text-sm text-gray-600"><?php $cour->getDescription() ?></p>
        <div class="flex items-center mt-3">
          <h1><?php ?></h1>
            <?php 
            foreach($cour->getTags() as $tag){ ?>
                <span class="text-purple-600 font-bold"> <?php echo "#"  .$tag->getName()."  "?></span>
           <?php  } ?>
         </div>
    </div>
</div>   <?php } ?>`
    }
   
}
    </script>
    

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="script.js"></script>
</body>

</html>