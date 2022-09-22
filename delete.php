
<?php 
require 'connexion_db.php';
if(isset($_GET['id']) and !empty($_GET['id']))
{
      $id = $_GET['id'];
      $req=$bdd->prepare('SELECT * FROM etudiant WHERE id =?');
      $req->execute(array($id));

      if($req->rowCount() > 0)
      {
            $supp=$bdd->prepare('UPDATE  etudiant SET statut=false WHERE id = ?');
            $supp->execute(array($id));
           $valider= "suppression effecué avec succès";

      }
      else{
            $erreur = ' echec de suppression ';    
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
 
   
    <div class="container-fluid pt-0 text-center  mx-0">
        <div class="row">
              <?php 
              if(isset($erreur)){ ?>
                  <div class="alert alert-danger pt-0 pt-2 text-center"><?=$erreur?></div>
              <?php }
              ?>
               <?php 
              if(isset($valider)){ ?>
                  <div class="alert alert-success"><?=$valider?>
                  <button class="btn btn-success mx-5 fs-6" >
                    <a href="liste.php"><i class="fas fa-check-circle fs-1 ">OK</i></a></button></div>
              <?php }
              ?>
        </div>
    </div>



 <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="projet/js/bootstrap.js"></script>
     <script src="projet/js/jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>