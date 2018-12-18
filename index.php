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
echo "<h1> <center> Liste des controleur</h1>";
$sql = $cnx->prepare("select id, nom, prenom from controleur");
$sql->execute();
echo "<table cellpadding='5' cellspacing='1' border='2' align='center'>";
echo "<tr style='background-color: green'>";
echo "<th>Nom du controleur</th>";
echo "<th>Prenom du controleur</th>";
echo "<th>Clients</th>";
echo "</tr>";
foreach ($sql->fetchAll (PDO::FETCH_ASSOC)  as $ligne)
{
    echo "<tr>"; // creation d'une ligne 
      echo "<td>" .$ligne ['nom']."</td>"; // creation d'une colonne 1  
      echo "<td>" .$ligne ['prenom']."</td>"; // creation d'une colonne 2  
      echo "<td><a href='page2.php?mina1=".$ligne['id']."'> Tous les clients</a></td>"; // creation d'une colonne 3 ou mettre la réference de la table tickets 
    echo "</tr>"; // fermeture d'une ligne 
}

?>

</body>
</html>