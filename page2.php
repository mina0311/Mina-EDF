<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
</head>
<body>
  

<?php
include ('cnx.php');//  connexion a la BDD 
?>
<?php
echo "<h1> <center> Liste des clients</h1>";
$sql = $cnx->prepare("select ancienReleve, dernierReleve, nom, prenom from client where idcontroleur ='".$_GET['mina1']."'");// CodeEquipe est une chaine de carac il faut mettre une petite cote 
$sql->execute();
echo "<table cellpadding='5' cellspacing='1' border='2' align='center'>";
echo "<tr style='background-color: blue'>";
echo "<th>Nom du client</th>";
echo "<th>Prenom du client</th>";
echo "<th>Ancien releve</th>";
echo "<th>Dernier releve</th>";
echo "<th>Inserer nouveau releve</th>";
echo "</tr>";
foreach ($sql->fetchAll (PDO::FETCH_ASSOC)  as $ligne)
{
    echo "<tr>"; // creationd d'une ligne 
      echo "<td>" .$ligne ['nom']."</td>"; // creation d'une colonne 1  
      echo "<td>" .$ligne ['prenom']."</td>";
      echo "<td>" .$ligne ['ancienReleve']."</td>"; // creation d'une colonne 2  
      echo "<td>" .$ligne ['dernierReleve']."</td>";
      echo "<td><a href='page3.php?mina2=".$ligne['']."'> Nouveau Releve</a></td>"; // creation d'une colonne 3 ou mettre la réference de la table tickets 
    echo "</tr>"; // fermeture d'une ligne 
}
?>
</body>
</html>