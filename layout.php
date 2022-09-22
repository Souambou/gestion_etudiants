<?php
require 'connexion_db.php'; 
?>



<!DOCTYPE html>
<html lang="en">

<head>
  
  <link rel="stylesheet" href="css/app.css">
  <!-- Bootstrap CSS & JS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="font/css/all.css">
  <link rel="stylesheet" href="projet/css/bootstrap.css">

  <!-- Bootstrap CSS & JS Online
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      -->
      <script src="js/bootstrap.bundle.min.js"></script>
  
  <!-- END Bootstrap -->
  <link rel="stylesheet" href="/css/style.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gestion des étudiants </title>
</head>

<body>
  <!--  Header -->
  <div class="container-fluid p-0">
    <img src="img/header.jpg" class="resp" style="height: 220px;">
  </div>
  <!-- End Header -->

  <!--  Navbar -->
  <!-- https://getbootstrap.com/docs/5.0/components/navbar/  -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">

            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="https://getbootstrap.com/">Actualités</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" style="color:white">Nous contacter</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#" style="color:white">Archives</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:white">Cours</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:white">Projets</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:white">Librairies</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" style="color:white">
              Formations
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Web Developpement</a></li>
              <li><a class="dropdown-item" href="#">Mobile Developpement</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Desktop Developpement</a></li>
              <li><a class="dropdown-item" href="#">Data Sciences</a></li>

            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" style="color:white">Nous contactez</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success mt-2 pb-1" type="submit">Rechercher</button>
        </form>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->

 <div class="row">
  <div class="col-md-3">
     <!-- Sidenav & Body & Sidbar  -->
  <div class="container" style="margin-top: 20px; margin-left:0px;">
    <div class="row">

      <!-- 4.1)  Sidenav avec 2 colonnes -->
      <div class="col-2" style="margin-right:20px; margin-bottom:5px;">
        <!-- Mettez ici le contenu de votre sidenav: des liens, des boutons de commandes...  -->


        <div class="sidebar">
          <header>Menu principal</header>
          <a href="#" class="active">
            <i class="fas fa-qrcode"></i>
            <span style="color: white;">Gestion étudiants</span>
          </a>
          
          <a href="#">
            <i class="fas fa-stream"></i>
            <span>Overview</span>
          </a>
          <a href="#">
            <i class="fas fa-calendar"></i>
            <span>Evenements</span>
          </a>
          <a href="#">
            <i class="far fa-question-circle"></i>
            <span>A propos</span>
          </a>
          <a href="#">
            <i class="fas fa-sliders-h"></i>
            <span>Services</span>
          </a>
          <a href="#">
            <i class="far fa-envelope"></i>
            <span>Contact</span>
          </a>
        </div>


      </div>
      <!-- End Sidenav-->
  </div>
 </div>




    </div>
    
 <?php 
 require 'liste.php'; 
 
 
 ?>
  </div>
  <footer class="bg-dark text-center text-white">
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Form -->
      <section class="">
        <form action="">
          <!--Grid row-->
          <div class="row d-flex justify-content-center">
            <!--Grid column-->
            <div class="col-auto">
              <p class="pt-2">
                <strong>S'abonnez à notre newsletter</strong>
              </p>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-5 col-12">
              <!-- Email input -->
              <div class="form-outline form-white mb-4">
                <input type="email" id="form5Example2" class="form-control" />
                <label class="form-label" for="form5Example2">Adresse email</label>
              </div>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-auto">
              <!-- Submit button -->
              <button type="submit" class="btn btn-outline-light mb-4">
               S'abonnez
              </button>
            </div>
            <!--Grid column-->
          </div>
          <!--Grid row-->
        </form>
      </section>
      <!-- Section: Form -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2020 Copyright:
      <a class="text-white" href="https://mdbootstrap.com/">gestion etudiant.com</a>
    </div>
    <!-- Copyright -->
  </footer>

</body>
<script src="projet/js/bootstrap.js"></script>
<script src="projet/js/jquery.js"></script>

</html>