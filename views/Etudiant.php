<?php
require_once  dirname(__DIR__, 1) . "../../vendor/autoload.php";

use App\Controllers\CategorieController;
use App\Controllers\CoursController;
use App\Models\User;
use App\Controllers\TageController;
use App\Controllers\UserController;
use App\Models\Tag;

$categorie = new CategorieController;
$tags = new TageController;
$users = new UserController;
$courses = new CoursController;

// var_dump();

// if(($_SERVER['REQUEST_METHOD'] == 'POST')){
// echo "Akascasc";
// echo $_POST['check'] ;


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
    <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
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
                <a class="nav-link" href="#" onclick="return confirm('Are you sure you want to logout?')">
                    <i class="bi bi-box-arrow-left"></i> Logout
                </a>
            </li>
        </ul>
    </div>
    </div>
    </nav>
    <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCour" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div>
      <div class="container mx-auto px-6 lg:px-8">
      <div class="flex flex-col lg:flex-row items-center justify-center space-y-8 lg:space-y-0 lg:space-x-8">

        <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg">
          <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Create an Account</h2>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4" role="alert">
              <span class="block sm:inline"></span>
            </div>
    <form action="/Auth/Cours" method="POST">
        <div class="form-element mb-4">
            <label for="role" class="block text-gray-700 mb-2">Role</label>
            <select name="tags[]" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" multiple>
                <option value="">Select Role</option>
                <?php $tags = new TageController;
                foreach ($tags->getallTags() as $tag) { ?>
                    <option value="<?php echo $tag->getName() ?>"> <?php echo $tag->getName() ?> </option>
                <?php   } ?>
            </select>
        </div>
        <div class="form-element mb-4">
            <label for="Category" class="block text-gray-700 mb-2">Role</label>
            <select name="category" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="">Select Role</option>
                <?php $categories = new CategorieController;
                foreach ($categories->read()  as $category) { ?>
                    <option value="<?php echo $category->getName() ?>"> <?php echo $category->getName() ?> </option>
                <?php   } ?>
            </select>
        </div>

        <div class="form-element mb-4">
            <label for="" class="block text-gray-700 mb-2">Tittle :</label>
            <input type="text" name="Tittle" required placeholder="John" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="form-element mb-4">
            <label for="" class="block text-gray-700 mb-2">Description</label>
            <input type="description" name="description" required placeholder="Doe" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
        </div>

        <div class="form-element mb-4">
            <label for="email" class="block text-gray-700 mb-2">Contenu</label>
            <div class="form-element mb-4">
                <label for="role" class="block text-gray-700 mb-2">Role</label>
                <select id="typeofcontenu" onclick="SelectTypeOfContenu()" name="" required class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="">Select Type of Contenu </option>
                    <option selected value="Video">video</option>
                    <option value="Document">Document</option>
                </select>
                <div id="contenu" class="form-element mb-4">
                    <label for="" class="block text-gray-700 mb-2">Cour link :</label>
                    <input type="url" name="contenu" required placeholder="Doe" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
                <div id="contenu" class="form-element mb-4">
                    <label for="" class="block text-gray-700 mb-2">Cour link :</label>
                    <input type="url" name="logo" required placeholder="Doe" class="w-full p-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="checkcour" class="btn btn-primary">Save changes</button>
                </div>
    </form> 
    <!-- form -->
    </div>

    </div>
    </div>
    </div>
    </div>

    </div>
    </div>
    </div> 
</div>
</div>
    
    <!-- Main content -->

  


    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <!-- <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                           
                            <h1 class="h2 mb-0 ls-tight">
                                <img src="https://bytewebster.com/img/logo.png" width="40">
                                <h1></h1>
                        </div>
                    
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                                <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-pencil"></i>
                                    </span>
                                    <span>Edit</span>
                             
                                    <span class=" pe-2">
                                        <i class="bi bi-gear-wide-connected"></i>
                                    </span>
                                    <span>Manage</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
                    <div class="h-screen flex-grow-1 overflow-y-lg-auto"> -->
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">
                                <img src="https://bytewebster.com/img/logo.png" width="40"><h1></h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                                
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalCour" class="btn d-inline-flex btn-sm btn-primary mx-1">Create</button>
                              
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
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
        </header>
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
        <p class="text-sm text-gray-600"><?php $cour->getDescription() ?></p>
        <div class="flex items-center mt-3">
          <h1><?php $cour->getUser()->getName()?></h1>
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
        document.getElementById("coursescontainer").innerHTML = `  <?php  ?>        <?php foreach ($users->showMyCourses(14) as $cour) { ?>
                <div class="ab bg-white shadow-md rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl ">
    <div class="w-full h-56 bg-gray-300">
        <img src="<?php $cour->getLogo()?>" class="w-full h-full object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-800"><?php echo $cour->getTittle() ?></h3>
        <p class="text-sm text-gray-600"><?php $cour->getDescription() ?></p>
        <div class="flex items-center mt-3">
          <h1><?php $cour->getUser()->getName()?></h1>
            <?php 
            foreach($cour->getTags() as $tag){ ?>
                
                <span class="text-purple-600 font-bold"> <?php echo "#"  .$tag->getName()."  "?></span>
           <?php  } ?>
         </div>
    </div>
</div>   <?php  } ?>`
    }
    else {
        document.getElementById("coursescontainer").innerHTML  = `  <?php foreach ($courses->read() as $cour) { ?>
                <div class="ab bg-white shadow-md rounded-lg overflow-hidden transition-transform transform hover:scale-105 hover:shadow-xl ">
    <div class="w-full h-56 bg-gray-300">
        <img src="<?php $cour->getLogo()?>" class="w-full h-full object-cover">
    </div>
    <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-800"><?php echo $cour->getTittle() ?></h3>
        <p class="text-sm text-gray-600"><?php $cour->getDescription() ?></p>
        <div class="flex items-center mt-3">
          <h1><?php $cour->getUser()->getName()?></h1>
            <?php 
            foreach($cour->getTags() as $tag){ ?>
                
                <span class="text-purple-600 font-bold"> <?php echo "#"  .$tag->getName()."  "?></span>
           <?php  } ?>
         </div>
         <form action="/sirTa*wa" methode="post">
                  <input type="hidden" value=<?php $cour->getTittle() ?> name="sinscrir" >

         <input type="submit" value="sinscrir" name="sinscrir" >
         
         </form>
    </div>
</div>

            <?php } ?>`
    }
    
}
    </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <script src="script.js"></script>
</body>

</html>