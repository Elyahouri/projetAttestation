<!DOCTYPE html>
<html>
<head>
	<title>controle</title>
</head>
<body>


<?php
          
 
 $nom = $_POST["nom"];
 $prenom = $_POST["prenom"];
 $dateNaissance = $_POST["annee"]."-".$_POST["mois"]."-".$_POST["jour"];
 $lieuNaissance = $_POST["ldn"];
 $ville = $_POST["ville"];
 $adresse = $_POST["adresse"];
 $codePostal = (int)$_POST["codePostal"];

 $db_host = "localhost:3307";
 $db_user = "root";
 $db_mdp = "";
 $db_database = "attestation";
 $bdd = new PDO('mysql:host='.$db_host.';dbname='.$db_database,$db_user,$db_mdp);
 
 $reponse = $bdd->query("SELECT IdUser FROM Utilisateurs WHERE Nom='$nom' and Prenom='$prenom' and 
DateNaissance='$dateNaissance' and LieuNaissance='$lieuNaissance' and Ville='$ville' and Adresse='$adresse' and 
CodePostal=$codePostal;");

 $donnees = $reponse->fetch();


 $idUser= array_pop($donnees);

 $reponse = $bdd->query("SELECT motif,dateTime FROM sortie,motif WHERE IdUser=$idUser and sortie.idMotif=motif.idMotif;");
 
 ?>
 <table border="5">
  <?php
   while ($donnees = $reponse->fetch()) {
  ?>
 		<tr>
 			<td><?php echo $donnees["motif"]; ?></td>
 			<td><?php echo $donnees["dateTime"]; ?></td>
 		</tr>
 	
  <?php   
    }
   ?>
 </table>
</body>
</html>



      	
		
