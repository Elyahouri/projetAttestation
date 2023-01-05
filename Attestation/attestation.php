<?php
 
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$dateNaissance = $_POST["annee"]."-".$_POST["mois"]."-".$_POST["jour"];
$lieuNaissance = $_POST["ldn"];
$ville = $_POST["ville"];
$adresse = $_POST["adresse"];
$codePostal = (int)$_POST["codePostal"];
$dateTime = $_POST["date"]." ".$_POST["heure"];
$idMotif = (int)$_POST["box"];


$db_host = "localhost:3307";
$db_user = "root";
$db_mdp = "";
$db_database = "attestation";


$bdd = new PDO('mysql:host='.$db_host.';dbname='.$db_database,$db_user,$db_mdp);

$reponse = $bdd->query("SELECT count(*) FROM Utilisateurs WHERE Nom='$nom' and Prenom='$prenom' and 
DateNaissance='$dateNaissance' and LieuNaissance='$lieuNaissance' and Ville='$ville' and Adresse='$adresse' and 
CodePostal=$codePostal;");

$donnees = $reponse->Fetch();


if ($donnees['count(*)']== False) {

	$reponse = $bdd->query("INSERT INTO Utilisateurs (Nom, Prenom, DateNaissance, LieuNaissance, Ville, Adresse,CodePostal)
	VALUES ('$nom', '$prenom', '$dateNaissance', '$lieuNaissance', '$ville', '$adresse', $codePostal);");

}

$reponse = $bdd->query("SELECT IdUser FROM Utilisateurs WHERE Nom='$nom' and Prenom='$prenom' and 
DateNaissance='$dateNaissance' and LieuNaissance='$lieuNaissance' and Ville='$ville' and Adresse='$adresse' and 
CodePostal=$codePostal;");

$donnees = $reponse->fetch(); 

$idUser= array_pop($donnees);

$reponse = $bdd->query("INSERT INTO Sortie (IdUser, idMotif, dateTime) Values ($idUser, $idMotif, '$dateTime');");





  	
 




?>