<?php 
   try{
       $bdd=new PDO('mysql:host=localhost;dbname=gestion_etudiant;charset=utf8','root','');
       
   }
    catch(Exception $e){
        die('erreur'.$e->getMessage());
    }
?>