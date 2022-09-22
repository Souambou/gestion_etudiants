<?php 
require 'connexion_db.php';
if(isset($_GET['id']) and !empty($_GET['id'])){

$getid=$_GET['id'];
       
$req=$bdd->prepare('SELECT * FROM etudiant where id = ? ');
$req->execute(array($getid));

if(isset($_POST['valider']))
{
     if(!empty($_POST['nom']) and !empty($_POST['prenom'])  and !empty($_POST['naiss'])  and !empty($_POST['tel'])
      and !empty($_POST['fil']))
      
      { 
               
               $nom=htmlspecialchars($_POST['nom']);
               $prenom=htmlspecialchars($_POST['prenom']);
               $naiss=htmlspecialchars($_POST['naiss']);
               $tel=htmlspecialchars($_POST['tel']);
               $fil=htmlspecialchars($_POST['fil']);
         
           
              $mise=$bdd->prepare('UPDATE etudiant SET Nom = ?, Prenom = ?, Naissance = ?, Numero = ?, Filiere = ? where id = ? ');
              $mise->execute(array($nom,$prenom,$naiss,$tel,$fil,$getid));
           
          $valider="Mise à jour éffectuer avec succès";

      } else{
          $erreur = "veillez renseigner tous les champs";
      }
}
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
    <link rel="stylesheet" href="css/style.css">

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

<body>
    <div class="container-fluid p-0">
    <img src="img/header.jpg" class="resp" style="height: 220px;">
  </div>
    
<div class="container-fluid pt-3">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><span style="height: 40px; color:red">A</span >'CK<span style="height: 40px; color:red">BA</span><base href="">  SCHOOL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item active">
        <a class="btn btn-primary text-white" href="index.php">
          Lien vers le site<span class="sr-only"></span></a>
      </li>
     
       <li class="nav-item">
           <a href="liste.php"class="btn btn-success me-5"   style="margin-left: 100px;" >Voir la  liste des étudiant</a>
      </li>
  </div>
</nav>
</div>
<marquee behavior="
" direction=""><H3 class="text-bolder text-primary">Edition profil</H3></marquee>
   
    <div class="container pt-0 mx-0">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <img src="img/teacher.png" class="img-rounded img-responsive" alt="" style="width: 100%; height:550px;">
            </div>
            <div class="col-md-6 col-lg-6 mr-5">
              <?php 
              if(isset( $erreur )){ ?>
                  <div class="alert alert-danger pt-0 pt-2 text-center"><?=$erreur?></div>
              <?php }
              ?>
               <?php 
              if(isset($valider)){ ?>
                  <div class="alert alert-success"><?=$valider?>
                  <button class="btn btn-success mx-5 fs-6" >
                    <a href="liste.php" class="btn btn-success"><i class="fas fa-check-circle fs-1 ">OK</i></a></button></div>
              <?php }
              ?>          
                 <?php 

                 
                 while($res=$req->fetch()){ ?>
                 
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="nom" class=""></label>
                        <input type="text" name="nom" placeholder="<?=$res['Nom'];?>" class="form-control">
                    </div>
                     <div class="form-group mt-3">
                        <label for="nom" class=""></label>
                        <input type="text" name="prenom"  placeholder="<?=$res['Prenom'];?>" class="form-control">
                    </div>

                     <div class="form-group mt-3">
                        <label for="date de naissance" class=""></label>
                        <input type="date"  name="naiss" placeholder="<?=$res['Naissance'];?>" class="form-control ">
                    </div>
                    <div class="form-group mt-5">
                      <input type="number" class="form-control" name="tel" placeholder="<?=$res['Numero'];?>">
                    </div>
                    <div class="form-group mt-5">
                     <select class="form-select" class="form-control" name="fil" placeholder="<?=$res['Filiere'];?>">
                       <option selected>choisir une filière</option>
                       <option value="informatique">informatique</option>
                       <option value="Marketing">Marketing</option>
                       <option value="Comptabilité">Comptabilité</option>
                       <option value="GEstion des projets">Gestion des projets</option>
                       <option value="Science politique">Science politique </option>
                       <option value=""></option>
                     </select>
                    </div>
                   
                    <div class="form-group mt-1"><br>
                       <button type="reset" name="annuler" class="btn btn-danger" style="float: left;">Rénitialiser</button>
                       <button type="submit" name="valider" class="btn btn-success " style="float: right;">Mettre à jour</button>
                    </div>
                </form>

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
              <button type="button" class="btn btn-outline-light mb-4">
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
<?php } ?>