<!DOCTYPE html>
<html>
<head>

<title>PHP-TP4</title>
<link rel="stylesheet" href="style.css">
</head>


<body>
<div class="box">
<h class="title">Register Form</h>
<form class="form"  action = "signup.php" method ="POST">
<table>
<tr><td class="td" >NomUtilisateur </td><td><input type="text" name ="user" required /></td></tr>
<tr><td class="td">Pass </td><td><input type="password" name ="pass" required /></td></tr>
<tr><td class="td">Apoge</td><td><input type="text" name ="apoge" required /></td></tr>
<tr><td class="td">Nom: </td><td><input type="text" name ="nom" required /></td></tr>
<tr><td class="td">Prenom : </td><td><input type="text" name ="prenom" required /></td></tr>
<tr><td class="td">Tel: </td><td><input type="text" name ="tel" required /></td></tr>
<tr><td class="td">Email </td><td><input type="text" name ="email" required /></td></tr>

<tr><td><input name ='ope' type="submit" value ="Register" /></td><td> <input name ='ope' type="submit" value ="Annuler" /></td></tr>
 
<tr><td><a class="link" href=index.html>LOGIN </a></td></tr>
</tale>
</form>
</div>
</body>
</html>