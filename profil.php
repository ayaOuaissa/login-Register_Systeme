<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>

<title>Profil Page</title>
<link rel="stylesheet" href="style.css">
</head>


<body>
<a class="link"  href='homepage.php'>HOME</a>
<?php

$nom = $_SESSION['utilisateur'];
$pass = $_SESSION['pass'];

$apoge=NULL;

if(isset($_POST['modifier'])){
    
    $tel=$_POST['tel'];
    $email =$_POST['email'];

    $con=mysqli_connect('localhost','root','','userregistration');
    if($con){
        $sqli = "SELECT * from usertable WHERE nom='$nom'";
        $r=mysqli_query($con,$sqli);
        $ro=mysqli_fetch_assoc($r);
        $apoge=$ro['apoge'];
        
        
            $sql = "UPDATE information SET  `tel`='$tel' , `email` = '$email' WHERE Apoge='$apoge'";
            $res=mysqli_query($con, $sql);
            
            mysqli_close($con);

    }
	
	

    
       
    }
    
    

   
$con=mysqli_connect('localhost','root','','userregistration');


if($con){
   
    
	$sql = "SELECT * FROM usertable, information WHERE usertable.apoge= information.Apoge AND usertable.nom = '$nom' AND usertable.pass= '$pass'";

		
	$result = mysqli_query($con, $sql);
   
	$row = mysqli_fetch_assoc($result);
     $apoge=$row['apoge'];
    

   
    ?>
 
    <form method="POST" >
    <table> 
    <div class="image"><img   src="<?php echo $row['Apoge'] ?>.png"/></div>
        <tr><td  class="td">Code apoge </td><td >: <?php echo $row['apoge'] ; ?></td></tr>
        <tr><td class="td">Nom        </td><td>: <?php echo $row['nom']; ?></td></tr>
        <tr><td class="td">Prenom     </td><td>:<?php echo $row['prenom']; ?></td></tr>
        <tr><td class="td">Tel        </td><td>: <input type = "text" name ="tel" value ="<?php echo $row['tel'] ; ?>" ></td></tr>
        <tr><td class="td">email      </td><td>: <input type = "text" name ="email" value ="<?php echo $row['email'] ; ?>" ></td></tr>
        </table>
        <div class="center"><input type = 'submit' name ='modifier' value ='modifier' ></div>
	</form>


    <?php 
   
}
		
else echo "pas de connexion";
mysqli_close($con);

        
?>


</body>
</html>


