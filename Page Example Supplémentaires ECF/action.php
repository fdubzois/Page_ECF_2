<?php 

if(isset($_POST['submit'])){
    
    $FirstName = "    Prénom : ".$_POST['FirstName']."
    ";

    $LastName = "Nom : ".$_POST['LastName']."
    ";

    $RecommendedName1 = "Nom du parrain n°1 : ".$_POST['RecommendedName1']."
    ";

    $RecommendedName2 = "Nom du parrain n°2 : ".$_POST['RecommendedName2']."
    ";

    $DateOfBirth = "Date de naissance : ".$_POST['DateOfBirth']."
    ";

    $PlaceOfBirth = "Lieu de naissance : ".$_POST['PlaceOfBirth']."
    ";

    $Adresse = "Adresse : ".$_POST['Adresse']."
    ";

    $city = "Ville : ".$_POST['city']."
    ";

    $Postal = "Code Postal : ".$_POST['Postal']."
    ";
    
    $Tel = "Numéro de téléphone : ".$_POST['Tel']."
    ";

    $mail = "Adresse mail : ".$_POST['mail']."
    ";

    $profession = "Profession : ".$_POST['profession']."
    ";

    $LicenceNumber = "Numero de Licence : ".$_POST['LicenceNumber']."
    ";

    $SelectionPaiement = "Type de paiement  : ".$_POST['ChoixPaiement']."


";

    $file = fopen("DataForm.txt","a");
    
    fwrite($file, $FirstName);
    fwrite($file, $LastName);
    fwrite($file, $RecommendedName1);
    fwrite($file, $RecommendedName2);
    fwrite($file, $DateOfBirth);
    fwrite($file, $PlaceOfBirth);
    fwrite($file, $Adresse);
    fwrite($file, $city);
    fwrite($file, $Postal);
    fwrite($file, $Tel);
    fwrite($file, $mail);
    fwrite($file, $profession);
    fwrite($file, $LicenceNumber);
    fwrite($file, $SelectionPaiement);

    fclose($file);

    if($_POST['ChoixPaiement'] === 'En ligne'){
        header("Location: https://www.helloasso.com/associations/tir-lyon-metropole/adhesions/ahesion", TRUE, 301); 
    }
    else {
        header("Location: http://localhost/TestSiteTlm/Page%20validationForm%20TLM%20VS.html", TRUE, 301);
    }

    $dest = "tirlyonmetropole@gmail.com";
    $objet = "Formulaire";
    $message = "
      
      Bonjour,
      
      Un Adhérent vient de remplir le formulaire d'adhésion à Tir Lyon Métropole .

      Vous pouvez consulter les données laisser sur le fichier texte.

      Bonne journée.
    ";

    $entetes = "From: SiteTirLyonMetropole ";
    $entetes .= "Content-Type: text/html; charset=utf-8\r\n";

    mail($dest , $objet , $message , );

}

exit();

?>