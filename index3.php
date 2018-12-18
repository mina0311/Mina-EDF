<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script type="text/javascript" src="main.js" charset="UTF-8"></script><script src="main.js"></script>
</head>
<body>

<?php
include ('cnx.php');//  connexion a la BDD 
?>
<?php  
 
  // afficher un menu de login membre simple 
  echo "<h1> <center> Nouveau releve</h1>";
  echo'
  echo"<table>" 
  <form action="index.php" method="post" name="Nouveau Releve"> 
  <tr> 
  <td>Nom client</td> 
  <td><input type="text" name="nom" value="" size="20" maxlength="42"></td> 
  </tr> 
  <tr> 
  <td>Prenom client</td> 
  <td><input type="text" name="prenom" value="" size="20" maxlenght="12"></td> 
  </tr> 
  <tr> 
  <td>Ancien releve</td> 
  <td><input type="text" name="login" value="" size="20" maxlength="42"></td> 
  </tr> 
  <tr> 
  <td>Nouveau releve</td> 
  <td><input type="text" name="login" value="" size="20" maxlength="42"></td> 
  </tr>
  <tr> 
  <td> 
  <input type="submit" name="valider" value="valider"> 
  <input type="reset" name="annuler" value="annuler"> 
  </td> 
  </tr> 
  </form> 
  </table>'; 

?>  
