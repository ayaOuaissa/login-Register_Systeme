<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>PHP-TP4</title>
</head>


<body>
<div class="center"><a class="link" href='homepage.php' >HOME</a></div> </br>
<?php

$connex=mysqli_connect('localhost','root','','userregistration');

if($connex){
	$sql = "SELECT * FROM information";
	$result = mysqli_query($connex, $sql);
	
	?>
    </br></br></br>
	<table class="liste">
    <tr>
    <td class="td">Code apoge</td>
    <td class="td">Nom</td>
    <td class="td">Prenom</td>
    <td class="td">Tel</td>
    <td class="td">email</td>
    <td class="td"><div class="image"><img   src="iconee.jfif"/></div></td>
    </tr>
    <?php
    if(mysqli_num_rows($result) == 0) echo "pas d'enregistrements";
    elseif (mysqli_num_rows($result) > 0) {
	 while($row = mysqli_fetch_assoc($result)){?>
		  <tr>
          <td  class="info"><?php echo $row['Apoge'];?></td>
          <td class="info"><?php echo$row['nom'];?></td>
          <td class="info"><?php echo $row['prenom'];?></td>
          <td class="info"><?php echo $row['tel'];?></td>
          <td class="info"><?php echo $row['email'];?></td>
           <td class="info"><div class="image"><img   src="<?php echo $row['Apoge'] ?>.png"/></div></td>
          
        </tr>
		 <?php } }?> 
    </table>
         <?php 
	
} 
	  		
else
	echo "pas de connexion";
	mysqli_close($connex);

?>


</body>
</html>