<?php
require_once  dirname( __DIR__,1) ."../../vendor/autoload.php";// Include the Course Controller
use App\Controllers\CoursController;


// echo dirname(__DIR__, 1) . "../app/Controllers/CoursController.php"; 
$courses = new CoursController;
?>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Udemy Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100">
    <!-- Top Banner -->
    <div class="bg-purple-700 text-white text-center py-2">
        Prêt à vous mettre à la page ? | Obtenez les compétences qu'il vous faut avec Udemy Business.
    </div>

    <!-- Header -->
    <header class="bg-white shadow">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <div class="flex items-center">
                <img alt="Udemy logo" class="h-10" height="40" src="https://storage.googleapis.com/a1aa/image/tI31rQTOB_ngCP_fDYUGRUWuft5gbMnPf0uFgBleWIg.jpg" width="100" />
                <nav class="ml-6">
                    <a class="text-gray-700 hover:text-gray-900" href="#">Découvrir</a>
                </nav>
            </div>
            <div class="flex items-center">
                <div class="relative">
                    <input class="border rounded-full py-2 px-4 pl-10 w-64" placeholder="Rechercher" type="text" />
                    <i class="fas fa-search absolute left-3 top-3 text-gray-500"></i>
                </div>
                <nav class="ml-6 flex items-center space-x-4">
                    <a class="text-gray-700 hover:text-gray-900" href="#">Udemy Business</a>
                    <a class="text-gray-700 hover:text-gray-900" href="#">Enseigner sur Udemy</a>
                    <a class="text-gray-700 hover:text-gray-900" href="#"><i class="fas fa-shopping-cart"></i></a>
                    <a class="text-gray-700 hover:text-gray-900 border border-purple-700 rounded-full py-2 px-4" href="#">Se connecter</a>
                    <a class="bg-purple-700 text-white rounded-full py-2 px-4" href="/Login">S'inscrire</a>
                    <a class="text-gray-700 hover:text-gray-900" href="#"><i class="fas fa-globe"></i></a>
                </nav>
            </div>
        </div>
    </header>
<!--
  Heads up! 👋

  This component comes with some `rtl` classes. Please remove them if they are not needed in your project.
-->

<section
  class="relative bg-[url(https://img.freepik.com/free-photo/happy-professional-asian-female-manager-businesswoman-suit-showing-announcement-smiling-pointing-finger-left-product-project-banner-standing-white-background_1258-69508.jpg?t=st=1737168518~exp=1737172118~hmac=f7222254f53a00d63de69841a71fe6603876a2b86a9ac94505182e0ce904f016&w=1380)]   h-1/2 bg-no-repeat"
>
  <div
    class="absolute inset-0 bg-gray-900/75 sm:bg-transparent sm:from-gray-900/95 sm:to-gray-900/25 ltr:sm:bg-gradient-to-r rtl:sm:bg-gradient-to-l"
  ></div>

  <div
    class="relative mx-auto max-w-screen-xl px-4 py-32 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-8"
  >
    <div class="max-w-xl mb-72 text-center ltr:sm:text-left rtl:sm:text-right">
      <h1 class="text-3xl font-extrabold text-black sm:text-5xl">
        Let us find your

        <strong class="block font-extrabold text-black"> Forever Home. </strong>
      </h1>

      <p class="mt-4 max-w-lg text-black sm:text-xl/relaxed">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus
        numquam ea!
      </p>

      <div class="mt-8 flex flex-wrap gap-4 text-center">
        <a
          href="#"
          class="block w-full rounded bg-rose-600 px-12 py-3 text-sm font-medium text-white shadow hover:bg-rose-700 focus:outline-none focus:ring active:bg-rose-500 sm:w-auto"
        >
          Get Started
        </a>

        <a
          href="#"
          class="block w-full rounded bg-white px-12 py-3 text-sm font-medium text-rose-600 shadow hover:text-rose-700 focus:outline-none focus:ring active:text-rose-500 sm:w-auto"
        >
          Learn More
        </a>
      </div>
    </div>
  </div>
</section>
    <!-- Notification -->
    <div class="bg-yellow-100 border border-yellow-300 text-yellow-700 px-4 py-3 rounded relative mt-4 mx-6" role="alert">
        <strong class="font-bold">Désolé, ce cours n'est plus ouvert aux inscriptions.</strong>
        <span class="block sm:inline">Si vous étiez inscrit à ce cours, connectez-vous pour y accéder.</span>
    </div>

    <!-- Main Content -->
    <main class="container mx-auto mt-8 px-6">
        <h2 class="text-2xl font-bold mb-4">
            Meilleurs cours dans la catégorie
            <span class="text-purple-700">Développement mobile</span>
        </h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
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

    <!-- Footer -->
    <footer class="bg-gray-800 text-white text-center py-4 mt-8">
        <p>&copy; 2025 Udemy. Tous droits réservés.</p>
    </footer>
</body>

</html>
