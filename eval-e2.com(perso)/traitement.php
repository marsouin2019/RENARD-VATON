<?php


/* foreach($_POST as $key => $value)
{
    echo $key . "valeur". $value . "<br />"  ;
}

foreach($_POST as $key => $value)
{
  echo $key . " valeur ". htmlentities(strip_tags($value)) . "<br />";
     if (strlen(htmlentities(strip_tags($value)) ) < 25 )
    { echo "$key valeur".htmlentities(strip_tags($value)). "<br />";
    } else{
            echo "la chaine correspondant à $key,n'est pas valide <br />";
          } 
} */
include("class/cl_traitement.php");
$addPersonne = new Personne ();
$addPersonne->add_personne($_POST);
?>