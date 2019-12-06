<?php



// mettre en place la class Personne
class Personne
{

    // attributs plublic 
    //il y a aussi des attributs privé

    public $civilite;
    public $nom;
    public $prenom;
    public $adresse;
    public $complementaire;
    public $postal;
    public $ville;
    public $telephone;
    public $email;
    public $password;

    public $connectDB;


    // methodes
    public function __construct($myconnexion)
    {
       //initialisation de la connection internet
       $this->connectDB = $myconnexion;

       //print_r($this->connectDB);
       

    }

    //methode avec paramettre de type tableau
    // ne pas oublier return ; arret le script donc mettre en echo a la place

    public function add_personne(array $data)
    {
        
        //print_r($data);

        

        // mise en forme et securite password
        $this->civilite = $data["frmCivilite"];
        if( $this->civilite != "M" || $this->civilite != "Mme" )
        {
            //return false;
            echo false;
        }
        
        $this->prenom = ltrim(htmlentities(ucfirst($data["frmPrenom"])));
        $this->nom = ltrim(htmlentities(strtoupper($data["frmNom"])));

        $this->adresse = ltrim(htmlentities($data["frmAdresse"]));
        $this->complementaire = ltrim(htmlentities($data["frmComplementaire"]));
        $this->postal = ltrim(htmlentities($data["frmPostal"]));

        
        
        // ! en ajoute ce signe signifie que ses si il n'y a pas
        // [],//,# ,** son des délimiteur

        if (!preg_match("#0-9{5}#",$data["frmVille"]))
         {
            //return false;
            echo "false";
         }
        
        

        
        $this->ville = ltrim(htmlentities(ucfirst($data["frmVille"])));
        $this->telephone = ltrim(htmlentities($data["frmPhone"]));

        $this->email = strtolower($data["frmEmail"]);

        // mise en securite du mot de passe

        // condition test longueur chaine mot de passe
        if( strlen($data["frmPass"]) < 8 )
        {
            //return false;
            echo "false";

        } else {
            if( strlen($data["frmPass"]) > 12)
            {
                //return false;
                echo "false";
            } else {
                $this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);
            }
        }
       
        // insert data in database

        //table personne
        //table logins

        //requete insert data

        //$this->mysqli = "INSERT INTO personnes (civilite,nom,prenom,adresse,complementaire,postal,ville,telephone) VALUES('". $this->civilite ."','". $this->nom ."','". $this->prenom ."','". $this->adresse ."','". $this->complementaire ."','". $this->postal ."','". $this->ville ."','". $this->telephone ."')";
        
        $resultat = $this->connectDB->query("INSERT INTO personnes (civilite,nom,prenom,adresse,complementaire,postal,ville,telephone) VALUES ('". $this->civilite ."','". $this->nom ."','". $this->prenom ."','". $this->adresse ."','". $this->complementaire ."','". $this->postal ."','". $this->ville ."','". $this->telephone ."')");

        //print_r($resultat);

        //requete select lastid
        if($resultat == 1)
        {
            //requet de select pour recuperer id personne

            $idPersonne = $this->connectDB->query("SELECT id, prenom FROM personnes WHERE telephone = '".$this->telephone."'");
            $row = $idPersonne->fetch_assoc();

           //id
           //print_r($row);
           $idP = $row["id"];
           $_SESSION["prenom"] = $row["prenom"]; 
           
           //insert logins
               if(!empty($idP))
               {
                   $resultat == $this->connectDB->query("INSERT INTO logins (email, password, idpersonne) VALUES ('".$this->email."','".$this->password."', '".$idP."')");

              // print_r($resultat);
              //redirection vers page connection
              header('Location: http://localhost/eval-e2.com/login.php', replace);

           
        }else{
            echo"problème d'insertion d'une personne";
        }

      




        //revision
        /*

        $filiere = "dweb";

        echo " la 3ème compagnie abrite la $filiere";
        echo 'la 3ème compagnie abrite la $filiere' ;
        echo 'la 3ème compagnie abrite la' .$filiere. 'azerty.';
        echo " la 3ème compagnie abrite la'". $filiere."'";
        
        */
    }


}

public function login( array $data){


    //recupération des donnée du formulaire de connection
    //comparesont entre les donnée saisie et celle de notre de base de donner
    //redirection vers un espace admin

    // data
    /*print_r($data);
    echo "ok";*/

    $this->email = $data["frmEmail"];

    // mise en securite du mot de passe

     // condition test longueur chaine mot de passe

    if( strlen($data["frmPass"]) < 8 )
    {
            //return false;
            echo "false";

    } else {
        if( strlen($data["frmPass"]) > 12)
        {
            //return false;
            echo "false";
        } else {
            //$this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);

            //requete de select pour recuperer les info login d'une personne
            $login = $this->connectDB->query ("SELECT * FROM logins WHERE email = '".$this->email."'");
            $row = $login->fetch_assoc();

            $idPers = $row["idpersonne"];
            $personne = $this->connectDB->query("SELECT prenom FROM personnes WHERE id = '".$idPers."'");
            $rowP = $personne->fetch_assoc();

            $password = $row["password"];


            if(password_verify($data["frmPass"], $password))
            {
                //redirection vers expace admin


                //stocker en session prenom et email
                $_SESSION["prenom"] = $rowP["prenom"];
                $_SESSION["email"] = $row["email"];

                //redirection vers page admin
                header("Location: http://localhost/eval-e2.com/admin", replace);
                

            } else{
                    //redirection vers page form login
                    
                    header("Location: http://localhost/eval-e2.com/login.php", replace);
                   
            }


        }
    }
    
public function resetPassword($data)
{
$this->email = $data;
// traitement adresse email
$resetPassword = $this->connectDB->query
("SELECT * FROM logins WHERE email = '".$this->email."' ");
//print_r(resetPassword);

//generateur new password
//$newPassword = "azertyui";

echo $newPassword = $this->genePasswd(8);
exit;

// crypter mot de passe
$this->password = password_hash($newPassword, PASSWORD_DEFAULT);

//mettre à jour mot de passe dans la table login
/*
- UPDATE
*/
$resultat = $this->connectDB->query("UPDATE logins 
SET password = '".$this->password."' 
WHERE email ='".$this->email."' ");
print_r($resultat);
}





public function genePasswd(int $lenght)
    {
//test longueur
$lenght = ($lenght ==8) ? 8 : 12;

//chaines 
$chaine = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789&#.";

//melanger
$melanger = str_shufffle($chaine);

//retourner 
return $passwd = substr($melanger, 0, $lenght);


        }

}
}


/* 
public function delete_personne(int $id)
{
  //pour supprimer un login il faut passer par son id 
  $requete = $this->connectdb->query("DELETE FROM logins WHERE id = '".$id."' ");
  
}

*/