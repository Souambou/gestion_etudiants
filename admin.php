<?php
session_start(); 
if(isset($_POST['connecter']))
{
    if(isset($_POST['nom'],$_POST['mdp']) and !empty($_POST['nom']) and !empty($_POST['mdp']))
    {
       $nom=htmlspecialchars($_POST['nom']);
       $mdp=htmlspecialchars($_POST['mdp']);
      
       if($nom == "eric" and $mdp == 1234){
            header('Location: liste.php');
           $_SESSION['mdp']=$mdp;
           

       }else{
            
             $erreur = "Identifiants incorrectes!";
       }
    }
    else{
            ?>
            <div class="modal fade" id="admin" tabindex="-1" aria-labelledby="admin" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="admin">Supression de l'étudiant!</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="text-bold">
            <?=$erreur="Veillez renseigner tous les champs"?></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
          Non</button>
        <button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#admin">
         </i>oui</a>
        
         </button>
         
      </div>
    </div>
  </div>
</div>
            <?php
        
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
    <link rel="stylesheet" href="projet/css/bootstrap.css">
  
    <link rel="stylesheet" href="projet/style.css">

    <!-- Template Stylesheet -->
    
</head>

<body style="background-color: gray;">

<div class="container text-center mt-5" style="width:560px" >
<?php 
if(isset($erreur)) { ?>
<div class="alert alert-danger  " style="font-weight: bolder; font-size: 18px;width:525px;"><i class=" fas fa-times-circle"><?=$erreur ?></i></div>

<?php 
}
?>
</div>
      
<div class="container p-5 ">
    <div class="row justify-content-center align-items-center">
         <div class="col-md-6 col-12">
               <div class="card">
                    <div class="card-header pb-5 pt-3  text-center" >
                          <img src="img/administrator.png" alt="" class="img-circle " style="width: 150px;" style="align-items: center;">
                    </div> 
                    <div class="card-body">
                           <form method="POST" action="">
                                 <div class="form-group ">
                                      <input type="text" class="form-control input-lg  mb-3  " name="nom"    placeholder="Nom d'utilisateur" style="height: 50px;">
                                      <input type="password" class="form-control input-lg mb-3 " name="mdp"     placeholder="mot de passe" style="height: 50px;"> 
                                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-block text-center text-white text-bolder " name="connecter" style="width: 475px; height:50px;"data-bs-toggle="modal" data-bs-target="#admin">Se connecter</button>
                                              
                           </form> 
                    </div>
                  </div>
           </div>
        </div>
     </div>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="projet/js/bootstrap.js"></script>
    <script src="projet/js/jquery.js"></script>
</body>

</html>