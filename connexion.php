<?php
session_start();
$login=NULL;
if (isset($_POST['ope'])) 
{ if($_POST['ope']=="Connexion"){
    $name = $_POST['utilisateur']; 
    $pass = $_POST['pass'];
    $_SESSION['utilisateur'] =$name;
    $_SESSION['pass']=$pass ;
   $connex=mysqli_connect('localhost','root','','userregistration');
       if($connex){
           $sql = "SELECT * FROM usertable ";
           $result = mysqli_query($connex, $sql);
                 while($row = mysqli_fetch_assoc($result)){
                     if ($row["nom"] == $name && $row["pass"] == $pass){
                        
                         $login=1;
                         header('location:homepage.php');

                        }
                        if ($login == 1 )break ;
                        else $login =  0;

                    }
                    if ($login == 0 ) header('location:index.html');
                       
        }
      else echo "not connected";

}else header('location:index.html');

}

?>



