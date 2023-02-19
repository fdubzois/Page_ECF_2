<?php

// Créer variable

$servername = "localhost";
$username = "";
$password = "";
$dbname = "";


$mail = $_POST['mail'];
$password = $_POST['password'];
$allergy = $_POST['allergy'];
$Guest_Number = $_POST['Guest_Number'];


// Créer une conexion

$conn = new mysqli($servername, $username, $password, $dbname);

// verifier la connexion

if ($conn->connect_error) {
  die("La connexion a échouée: " . $conn->connect_error);
}

//Ajout dans Base de données

$sql = "INSERT INTO 'utilisateurs' ( 'mail', 'password', 'allergies', 'Guest_Number')
VALUES( $mail, $password, $allergy, $Guest_Number)
";

// Vérification et message d'information

if ($conn->query($sql) === TRUE) {
  echo "Inscription effectué avec succés";
} else {
  echo "Erreur: " . $sql . "
" . $conn->error;
}

$conn->close();


?>