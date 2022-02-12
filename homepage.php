<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">

<title>PHP-TP4</title>
</head>

<style >
table , th , td {
border: 1px solid blue;
border-collapse: collapse;
}
</style >

<body>
<?php
$nom = $_SESSION['utilisateur'];
$pass = $_SESSION['pass'];

?>
<div class="titleb"> WELCOME  <?php echo $nom ?> </div></br>
<div class="box">
✓<a class="link" href ='index.html'> Deconnexion </a><br>

✓<a  class="link" href ='profil.php'> Mon profil </a><br>
✓<a  class="link" href ='liste.php'> Liste des étudiants </a>
</div>
</body>
</html>