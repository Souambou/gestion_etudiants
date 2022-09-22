<?php

require 'connexion_db.php';
if(isset($_POST['valider']))
{
    if(!empty($_POST['nom'])  and !empty($_POST['prenom']) and !empty($_POST['naiss']) and !empty($_POST['tel'])
    and !empty($_POST['fil']))
    
    {
        
        $nom=htmlspecialchars(($_POST['nom']));
         $prenom=htmlspecialchars(($_POST['prenom']));
          $naiss=htmlspecialchars(($_POST['naiss']));
           $tel=htmlspecialchars(($_POST['tel']));
           $fil=htmlspecialchars(($_POST['fil']));
         
         
              $insert=$bdd->prepare('INSERT INTO etudiant(Nom,Prenom,Naissance,Numero,fILIERE) VALUES(?,?,?,?,?)');
           $insert->execute(array($nom,$prenom,$naiss,$tel,$fil));
           
             $valider='Bravo! enregistrement effectué avec succès!';
           

      } else{
            $erreur='Tous les champs doivent être renseignés !';
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

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    

    <!-- Customized Bootstrap Stylesheet -->
    <link href="projet/css/bootstrap.min.css" rel="stylesheet">
  
    <link rel="stylesheet" href="projet/style.css">

    <!-- Template Stylesheet -->
    
</head>

<body>
 
   
    <div class="container-fluid pt-0 text-center  mx-0">
        <div class="row">
            <div class="col-md-12 col-lg-12 mr-5">
              <?php 
              if(isset($erreur)){ ?>
                  <div class="alert alert-danger"><?=$erreur?></div>
              <?php }
              ?>
               <?php 
              if(isset($valider)){ ?>
                  <div class="alert alert-success"><?=$valider?></div>
              <?php }
              ?>
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="nom" class=""></label>
                        <input type="text" name="nom" placeholder="nom " class="form-control">
                    </div>
                     <div class="form-group mt-3">
                        <label for="nom" class=""></label>
                        <input type="text" name="prenom"  placeholder="Prénom" class="form-control">
                    </div>
                     <div class="form-group mt-3">
                        <label for="date de naissance" class=""></label>
                        <input type="date"  name="naiss" placeholder="date de naissance" class="form-control ">
                    </div>
                    <div class="form-group mt-5">
                      <input type="number" class="form-control" name="tel" placeholder="numéro de télephone">
                    </div>
                    <div class="form-group mt-5">
                     <select class="form-select" class="form-control" name="fil">
                       <option selected>choisir une filière</option>
                       <option value="informatique">informatique</option>
                       <option value="Marketing">Marketing</option>
                       <option value="Comptabilité">Comptabilité</option>
                       <option value="GEstion des projets">Gestion des projets</option>
                       <option value="Science politique">Science politique</option>
                       <option value=""></option>
                     </select>
                    </div>
                   
                    <div class="form-group mt-3">
                       <button type="reset" name="annuler" class="btn btn-danger" style="float: left;">Rénitialiser</button>
                     
                       <button type="submit" name="valider" class="btn btn-success btn-block " style="float: right;">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>