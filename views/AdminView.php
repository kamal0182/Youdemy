<?php
require_once  dirname( __DIR__,1) ."../../vendor/autoload.php";
use App\Controllers\CategorieController;
use App\Controllers\CoursController;
use App\Models\User;
use App\Controllers\TageController;
use App\Controllers\UserController;
use App\Models\Tag;
$categorie = new CategorieController ;
$tags = new TageController ;
$users = new UserController ;  
$courses = new CoursController ;       
// var_dump();

// if(($_SERVER['REQUEST_METHOD'] == 'POST')){
    // echo "Akascasc";
    // echo $_POST['check'] ;
   

?>
<!DOCTYPE html>
<html lang="en" >
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
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add  new Tags </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <label for="">Name :</label>
        <input type="text"  name="name" style="font-size : bold ; color: black ;"  class="form-control " > 
        <label for="">Description   :</label>
       <input type="text"  name="description" style="font-size : bold ; color: black ;"  class="form-control " >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="./AdminView.php"> <input type="submit" name="check"  value="Submit" class="btn btn-primary"> </a>
        </form> 
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="Modalmodification" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modify Category</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/Auth/Cate" method="post">
            <label for="">Name :</label>
        <input type="text" id="inputnamecategory"  name="categoryname" style="font-size : bold ; color: black ;"  class="form-control " > 
        <label for="">Description   :</label>
       <input type="text"  id="inputdescriptioncategory" name="categorydescription" style="font-size : bold ; color: black ;"  class="form-control " >
       <input type="hidden" name="idinput" value="" id="idcategoryupdated">
      </div>
      <div class="modal-footer">
        <button   class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
         <input   type="submit"name="categorysubmit"  value="Submit" class="btn btn-primary"> </a>
        </form> 
        <?php
     
        ?>
      </div>
    </div>
  </div>
</div>
<!-- for Tags  -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add A new Category </h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <label for="">Name :</label>
        <input type="text"  name="name" style="font-size : bold ; color: black ;"  class="form-control " > 
        <label for="">Description   :</label>
       <input type="text"  name="description" style="font-size : bold ; color: black ;"  class="form-control " >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="./AdminView.php"> <input type="submit" name="check"  value="Submit" class="btn btn-primary"> </a>
        </form> 
      </div>
    </div>
  </div>
</div>
<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
                <h3 class="text-success"><img src="https://bytewebster.com/img/logo.png" width="40"><span class="text-info">BYTE</span>WEBSTER</h3> 
            </a>
            <!-- User menu (mobile) -->
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                    <a href="#" id="sidebarAvatar" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar-parent-child">
                            <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar- rounded-circle">
                            <span class="avatar-child avatar-badge bg-success"></span>
                        </div>
                    </a>
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Billing</a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-house"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bar-chart"></i> Analitycs
                        </a>
                    </li>
                    <?php 
                        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                           
                           
                            if(isset($_POST['check'])){
                             
                                $categorie->create($_POST['name'],$_POST['description']);
                                $_POST['name'] = "";
                                $_POST['description'] = "";
                                $_POST['check'] = "";
                            }
                        }
                        unset($_POST);
                      
                     
                        
                    
                    // else {
                    //     echo "#################";
                    // }
                    
                    $tag = new Tag ;
                    ?>  

?>
                    <li class="nav-item">-
                        <a class="nav-link" href="#">
                            <i class="bi bi-chat"></i> Messages
                            <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-auto">6</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-bookmarks"></i> Collections
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-people"></i> Users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-globe-americas"></i> Ranking
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-file-text"></i> Posts
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="navbar-divider my-5 opacity-20">
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-4">
                    <li>
                        <div class="nav-link text-xs font-semibold text-uppercase text-muted ls-wide" href="#">
                            Contacts
                            <span class="badge bg-soft-primary text-primary rounded-pill d-inline-flex align-items-center ms-4">13</span>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="nav-link d-flex align-items-center">
                            <div class="me-4">
                                <div class="position-relative d-inline-block text-white">
                                    <img alt="Image Placeholder" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar rounded-circle">
                                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                                </div>
                            </div>
                            <div>
                                <span class="d-block text-sm font-semibold">
                                    Daisy johnson
                                </span>
                                <span class="d-block text-xs text-muted font-regular">
                                    Paris, FR
                                </span>
                            </div>
                            <div class="ms-auto">
                                <i class="bi bi-chat"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link d-flex align-items-center">
                            <div class="me-4">
                                <div class="position-relative d-inline-block text-white">
                                    <span class="avatar bg-soft-warning text-warning rounded-circle">JW</span>
                                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-success rounded-circle"></span>
                                </div>
                            </div>
                            <div>
                                <span class="d-block text-sm font-semibold">
                                    Michael Jordan
                                </span>
                                <span class="d-block text-xs text-muted font-regular">
                                    Bucharest, RO
                                </span>
                            </div>
                            <div class="ms-auto">
                                <i class="bi bi-chat"></i>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link d-flex align-items-center">
                            <div class="me-4">
                                <div class="position-relative d-inline-block text-white">
                                    <img alt="..." src="https://images.unsplash.com/photo-1610899922902-c471ae684eff?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar rounded-circle">
                                    <span class="position-absolute bottom-2 end-2 transform translate-x-1/2 translate-y-1/2 border-2 border-solid border-current w-3 h-3 bg-danger rounded-circle"></span>
                                </div>
                            </div>
                            <div>
                                <span class="d-block text-sm font-semibold">
                                    Heather Wright
                                </span>
                                <span class="d-block text-xs text-muted font-regular">
                                    London, UK
                                </span>
                            </div>
                            <div class="ms-auto">
                                <i class="bi bi-chat"></i>
                            </div>
                        </a>
                    </li>
                </ul>
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
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
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
                                <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-pencil"></i>
                                    </span>
                                    <span>Edit</span>
                                </a>
                                <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Create</span>
                                </a>
                                <a href="#" class="btn d-inline-flex btn-sm btn-warning mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-gear-wide-connected"></i>
                                    </span>
                                    <span>Manage</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
                    <ul class="nav nav-tabs mt-4 overflow-x border-0">
                        <li class="nav-item"  onclick="showCategories('Users')">
                            <a href="#" class="nav-link">Users</a>
                        </li>
                        
                        <li class="nav-item" onclick="showCategories('category')">
                            <a href="#"  class="nav-link">Categories</a>
                        </li >
                        <li onclick="showCategories('tags')" class="nav-item">
                            <a href="#" class="nav-link font-regular">Tags</a>
                        </li>
                        <li onclick="showCategories('Courses')" class="nav-item">
                            <a href="#" class="nav-link font-regular">Courses</a>
                        </li>
                    </ul>
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
                <div class="row g-6 mb-6">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Budget</span>
                                        <span class="h3 font-bold mb-0">$11590.90</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                            <i class="bi bi-credit-card"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>37%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">New projects</span>
                                        <span class="h3 font-bold mb-0">320</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg rounded-circle">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>80%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Total hours</span>
                                        <span class="h3 font-bold mb-0">4.100</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-info text-white text-lg rounded-circle">
                                            <i class="bi bi-clock-history"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-danger text-danger me-2">
                                        <i class="bi bi-arrow-down me-1"></i>-5%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Work load</span>
                                        <span class="h3 font-bold mb-0">88%</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white text-lg rounded-circle">
                                            <i class="bi bi-minecart-loaded"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>10%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<div style="display: flex ; justify-content: space-between ">

    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Categorie 
    </button>
    <button type="button" class="btn btn-primary mb-5" data-bs-toggle="modal" data-bs-target="#exampleModal1">
    Add  Tag 
    </button>
</div>
                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Applications</h5>
                    </div>
                    <div id="tables"  class="table-responsive">
                        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Offer</th>
                                    <th scope="col">Meeting</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer border-0 py-5">
                        <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link disabled" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-info text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
<!-- Modal modification  -->



   
<script>
    function showCategories(name){
        if(name == "category"){
        document.getElementById("tables").innerHTML = `
       
        <table class="table table-hover table-nowrap">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name  </th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php 
         foreach($categorie->read() as $category){
        ?>
                                <tr>
                                    <td id="namecategory">
                                        <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                        <?php echo $category->getName() ;?>
                                        </a>    
                                    </td>
                                    <td id="descriptioncategory">
                                    <?php echo $category->getDescription() ;?>
                                    </td>
                                    <td>
                                    <td style="visibility: hidden;"></td>
                                    <td id="idCategory" class="text-end" >
                                    <input  name="id" value="" type="hidden" >
                                    <button   onclick="showModificaionForm(<?php echo $category->getId() ?>,'<?php echo $category->getName()?>','<?php echo $category->getDescription() ?>')" data-bs-toggle="modal" data-bs-target="#Modalmodification" >Modify                             
 </button>
                                    <button  type="button"  class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr> <?php  ;}?>`
    }

    if(name  == "tags"){
       
       document.getElementById("tables").innerHTML = `
          <table class="table table-hover table-nowrap">
                              <thead class="thead-light">
                                  <tr>
                                      <th scope="col">Name  </th>
                                      <th scope="col">Description</th>
                                  </tr>
                              </thead>
                              <tbody>
           <?php                         
           foreach($tags->getallTags() as $tag){
          ?>
                                  <tr>
                                      <td id="namecategory">
                                          <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                          <a class="text-heading font-semibold" href="#">
                                          <?php echo $tag->getName();?>
                                          </a>
                                      </td>
                                      <td id="descriptioncategory">
                                      <?php echo $tag->getDescription();?>
                                      </td>
                                      <td>
                                      <td style="visibility: hidden;"></td>
                                      <td id="idCategory" class="text-end" >
    
                                      <input     data-bs-toggle="modal" data-bs-target="#Modalmodification" value="Modify">
                                    
                                      <button  type="button"  class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                              <i class="bi bi-trash"></i>
                                          </button>
                                      </td>
                                  </tr> <?php  ;}?>`
       }
       if(name  == "Courses"){
       
       document.getElementById("tables").innerHTML = `
          <table class="table table-hover table-nowrap">
                              <thead class="thead-light">
                                  <tr>
                                      <th scope="col">Name  </th>
                                      <th scope="col">Description</th>
                                  </tr>
                              </thead>
                              <tbody>
           <?php                         
           foreach($courses->read() as $cour){
          ?>
                                  <tr>
                                      <td id="namecategory">
                                          <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                          <a class="text-heading font-semibold" href="#">
                                          <?php echo $cour->getTittle();?>
                                          </a>
                                      </td>
                                      <td id="descriptioncategory">
                                      <?php echo $cour->getDescrition();?>
                                      </td>
                                       <td id="descriptioncategory">
                                      <?php echo $cour->getUser()->getFirsName() ." " .$cour->getUser()->getLastName();?>
                                      </td>
                                      <td id="descriptioncategory">
                                      <?php echo $cour->getCategorie()->getName();?>
                                      </td>
                                      <td id="descriptioncategory">
                                      <?php 
                                       if(empty($cour->getTags())){
                                        echo "no Tags Found";
                                       }
                                       else{
                                      foreach( $cour->getTags() as $tag) {
                                        echo $tag->getName();
                                      }
                                    };?>
                                      </td>
                                      <td>
                                      <td style="visibility: hidden;"></td>
                                      <td id="idCategory" class="text-end" >
    
                                      <input    data-bs-toggle="modal" data-bs-target="#Modalmodification" value="Modify">
                                    
                                      <button  type="button"  class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                              <i class="bi bi-trash"></i>
                                          </button>
                                      </td>
                                  </tr> <?php  ;}?>`
       }
      
       
  

       }
    function showModificaionForm (id,name ,descr) {
        console.log(name);
        document.getElementById("inputnamecategory").value = name ;
        document.getElementById("inputdescriptioncategory").value = descr ;
        document.getElementById("idcategoryupdated").value = id ;

    }
</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>
</html>