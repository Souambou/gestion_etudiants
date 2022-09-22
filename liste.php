<?php 
session_start();
require 'connexion_db.php';
if(!$_SESSION['mdp'])
{
  header('Location: admin.php');

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>a'cka scholl</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


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
  
  <!-- End Header -->



















    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link href="projet/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="font/css/all.css">
    <link rel="stylesheet" href="font/css/fontawesome.css">
  <link rel="stylesheet" href="font/css/fontawesome.min.css">
    <link rel="stylesheet" href="projet/style.css">
   <link rel="stylesheet" href="projet/css/bootstrap.css">
     <!-- Custom CSS -->
    <link href="plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">

    <!-- Template Stylesheet -->
    
</head>

<body>
  <div class="container-fluid p-0">
    <img src="img/header.jpg" class="resp" style="height: 220px;">
  </div>
    
<div class="row">
  <div class="col-md-3">
     
                     <div class="col-2" style="margin-right:20px; margin-bottom:5px;">
        <!-- Mettez ici le contenu de votre sidenav: des liens, des boutons de commandes...  -->


        <div class="sidebar">
          <header>Menu principal</header>
          <a href="#" class="active">
            <i class="fas fa-qrcode"></i>
            <span style="color: white;">Etudiants</span>
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
  <div class="col">
    <div class="container-fluid" >
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#"><span style="height: 40px; color:white; padding-left:5px;">A'CKBA SCHOOL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active mx-5" class="text-white mt-5">
        <a class="nav-link" href="index.php" class="btn btn-info" style="color: white ;"> Accéder au site <span class="sr-only"></span></a>
      </li>
      
     
     
       
      <button class="btn btn-primary text-white text-bolder mx-0 mt-3" data-bs-toggle="modal" data-bs-target="#ajout">
 ajouter un étudiant
        </button>
      <div class="modal fade" id="ajout" tabindex="-1" aria-labelledby="ajout" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel text-center">Ajouter  étudiant!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
       <?php 
       require 'enregistrement.php';
       ?>
       
    

      </div>
    
    </div>
  </div>
</div>
  </div>
   <li class="nav-item active mx-5">
          <a href="deconnexion.php" class="btn btn-danger mt-3">
            <i class="fas fa-user"></i>
            DECONEXION</a>
      </li>
      
    
     
  
       
</nav>
</div>
 <h3 style="float: left;" class="text-muted pt-5">Liste des étudiants</h3>

<div class="container-fluid pt-2 mb-2">
   <div class="row text-right mb-5" style="float: right;" >
       <div class="col-md-12">
            <form method="GET" action="">
   <div class="input-group text-center " >
        
          </button>
        </div>
    </form>
       </div>
   </div>
     <div class="row justify-content-center">
    <div class="col-md-8">
      <?php 
              if(isset($erreur)){ ?>
                  <div class="alert alert-danger">
                    <p class="text-center"><i class=" fas fa-times-circle fs-1 "></i><br></p>
                    <?=$erreur?> &nbsp;&nbsp;&nbsp;
                      <a href="liste.php" class="btn btn-danger text-bolder">j'ai compris !</a></div>
              <?php }
              ?>
              
               <?php 
              if(isset($valider)){ ?>
                  <div class="alert alert-success text-center text-bolder">
                     <p class="text-center"> <i class=" fas fa-check-circle fs-1 " style="justify-content: center;"></i>
                    
                     </p>
                     <?=$valider?> &nbsp;&nbsp;&nbsp;
                      <a href="liste.php" class="btn btn-success">ok</a>
                   
              <?php }
              ?>
    </div>
  </div>
</div>
   <table class="table table-striped">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOM</th>
      <th scope="col">PRENOMS</th>
      <th scope="col">DATE DE NAISSANCE</th>
      <th scope="col">TELEPHONE</th>
      <th scope="col">FILIERE</th>
      <th scope="col">ACTIONS</th>

    </tr>
  </thead>
  <tbody>
      
   <?php 

if(isset($_GET['rechercher']) and !empty($_GET['rechercher']))
{
    
    $s=htmlspecialchars($_GET['rechercher']);
    $req=$bdd->query('SELECT * FROM etudiant   WHERE Nom LIKE "%'.$s.'%" ORDER BY id  ');

    if($req->rowCount() > 0)
    {   
     while($resultat = $req->fetch()) {  ?>
         <tr>
            <td><?=$resultat['id'];?></td>
            <td><?=$resultat['Nom'];?></td>
            <td><?=$resultat['Prenom'];?></td>
            <td><?=$resultat['Naissance'];?></td>
            <td><?=$resultat['Numero'];?></td>
            <td><?=$resultat['Filiere'];?></td>
         </tr>
     

     <?php

     }


    } else{
      ?>
      <p>Aucun résultat pour <strong><?=$s?></strong></p>
      <?php
    }

} else{
    ?>
    <p class="text-dark text-lead"></p>
    <?php 
   
}

  $req=$bdd->query('SELECT * FROM etudiant where statut = true  ORDER BY id DESC');
   while($resultat=$req->fetch()){ 
       
       $id=$resultat['id'];
       $nom=$resultat['Nom'];
       $prenom=$resultat['Prenom'];
       $naissance=$resultat['Naissance'];
       $numero=$resultat['Numero'];
       $filiere=$resultat['Filiere']
       
       ?>
    
    <tr>
      <td><?=$id;?></td>
      <td><?=$nom;?></td>
      <td><?=$prenom;?></td>
      <td><?=$naissance;?></td>
      <td><?=$numero;?></td>
      <td><?=$filiere;?></td>
      
   
      <td> 
        <button class="btn btn-dark mx-0" data-bs-toggle="modal" data-bs-target="#see">
         <i class=" fas fa-eye"></i>
        </button>
        <div class="modal fade" id="see" tabindex="-1" aria-labelledby="see" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informations sur l'étudiant!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6">
             <p style="font-size: 17px; font-weight:bolder;">ID :</p>
            <p style="font-size: 17px; font-weight:bolder;">NOM :</p>
            <p style="font-size: 17px; font-weight:bolder;">PRENOMS :</p>
            <p style="font-size: 17px; font-weight:bolder;">DATE DE NAISSANCE:</p>
            <p style="font-size: 17px; font-weight:bolder;">NUMERO :</p>
            <p style="font-size: 17px; font-weight:bolder;">FILIERE :</p>
          </div>
          <div class="col-md-6">
              
        <p class="text-bolder fs-20"> <?=$resultat['id'];?></p>
        <p> <?=$resultat['Nom'];?></p>
        <p>  <?=$resultat['Prenom'];?></p>
       <p><?=$resultat['Naissance'];?></p>
       <p> <?=$resultat['Numero'];?></p>
       <p><?=$resultat['Filiere'];?></p>
      </div>
          </div>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
          Fermer</button>   
      </div>
    </div>
  </div>
</div>
       <button class="btn btn-success">
        
         <a href="update.php?id=<?=$resultat['id']; ?>"  class="text-light"> <i class="fas fa-edit"></i>
         </a>
         </button>
         
     
          <button class="btn btn-danger mx-0" data-bs-toggle="modal" data-bs-target="#delete">
            <i class="fa-solid fa-trash-can"></i>
         </button>
<div class="modal fade" id="delete" tabindex="-1" aria-labelledby="delete" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supression de l'étudiant!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-bold">Voulez vous vraiment effectué cette suppression?</p>
      </div>
      <div class="modal-footer" >
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
          Non</button>
        <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#oui">
         <a href="delete.php?id=<?=$resultat['id']; ?> "  class="text-light" >Oui</a>
        
         </button>
         
      </div>
    </div>
  </div>
</div>
        <!--fin modal-->
        
       

    </td>
        
     
    </tr>
   <?php 
   }
   ?>
   
  </tbody>
</table>


    
  </tbody>
</table>
</div>
 
  </div>
</div>
<div class="container-fluid">
  <div class="row">
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
  </div>
</div>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="projet/js/bootstrap.js"></script>
     <script src="projet/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>