<?php
session_start();

if (isset($_POST['ope'])) {
if ($_POST['ope']=="Register"){

    $user = $_POST ['user']; 
    $pass = $_POST ['pass'];  
    $apoge = $_POST ['apoge']; 
    $name = $_POST ['nom']; 
    $prenom = $_POST ['prenom']; 
    $email = $_POST ['email']; 
    $tel = $_POST ['tel'];
    


$_SESSION['user'] = $user;
$_SESSION['pass'] = $pass;
$_SESSION['apoge'] = $apoge;
$_SESSION['nom'] = $name;
$_SESSION['pass'] = $pass;
$_SESSION['email'] = $email;
$_SESSION['tel'] = $tel ;
 


$connex=mysqli_connect('localhost','root','','userregistration');


if($connex){
	$sql = "SELECT apoge FROM usertable WHERE apoge=$apoge  ";
	$result = mysqli_query($connex, $sql);
	
	if (mysqli_num_rows($result) == 0 ) {
    $S="INSERT INTO usertable(apoge,nom,pass) VALUES ('$apoge','$user','$pass')";
    $Sq="INSERT INTO infornation(Apoge,nom,prenom,tel,email) VALUES ('$apoge','$name','$prenom','$tel','$email')";
    $res=mysqli_query($connex,$S);
    $rest=mysqli_query($connex,$Sq);
    echo"Register Done please  <a href=index.html> LOGIN </a>";
    
    
    }
    
	else{
        
    echo "this account already exist";
    echo "<a href=index.html >LOGIN </a>";
  		
    }

	mysqli_close($connex);
	    
}

else
    echo "not connected";


}else
header('location:Register.php');
}

?>



