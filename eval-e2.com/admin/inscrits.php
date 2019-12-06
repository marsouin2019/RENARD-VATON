<?php 

print_r($_SERVER);
echo $_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']);
include("");

if(isset($_SESSION["prenom"])== "")
{

}else{
    $nomPage = "Inscrits";
    $personne= "";
    include("includes/header.php");  
    include("includes/content.php");
    include("includes/footer.php");

    
}
?>