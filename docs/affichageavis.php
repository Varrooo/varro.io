<?php
   // Vérifier si le formulaire est soumis 
   if ( isset( $_POST['submit'] ) ) {
     /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé 
       */
     $prenom = $_POST["prenom"]; 
     $email = $_POST["email"]; 
     $avis = $_POST["avis"];
    
     // afficher le résultat
    echo 'Prénom : ' . $prenom . '<br><br> Email : ' . $email . '<br><br><br> Avis : <br><br>' . $avis; 
   }
    exit;
   
?>