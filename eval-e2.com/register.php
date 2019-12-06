<?php
 
    $titlePage = "login page";
     include("includes/header.php");

     //print_r($_SESSION);
?>

<body>

<?php
    include("includes/navigation.php");
?>

  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
    <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">
  </header>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Register</h1>
      <form method="POST" action="traitement.php" id="frmRegister">
                        <div class="form-group">
                            <label for="">Civilité</label>
                            <select class="form-control" id="frmCivilite" name="frmCivilite">
                                <option value="M" selected>Monsieur</option>
                                <option value="Mme">Madame</option>
                            </select>
                        </div>  
                        <div class="form-group">
                            <label for="">Prénom</label>
                            <input type="text" class="form-control" id="frmPrenom" aria-describedby="" placeholder="Indiquer Prénom (*)" name="frmPrenom" required>
                            <small id="prenomHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" id="frmNom" aria-describedby="" placeholder="Indiquer Nom (*)" name="frmNom" required>
                            <small id="nomHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Téléphone / Mobile</label>
                            <input type="tel" class="form-control" id="frmPhone" placeholder="Votre numéro de téléphone (*)" name="frmPhone" required>
                            <small id="phoneHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="frmEmail" aria-describedby="" placeholder="Indiquer Email (*)" name="frmEmail" required>
                            <small id="emailHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" id="frmPass" placeholder="Indiquer mot de passe (*)" name="frmPass" required>
                            <small id="passwordHelp" class="form-text text-muted">Caractère de 8 à 20. Champs obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Adresse</label>
                            <input type="text" class="form-control" id="frmAdresse" aria-describedby="" placeholder="Indiquer Adresse (*)" name="frmAdresse" required>
                            <small id="adresseHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Suite</label>
                            <input type="text" class="form-control" id="frmSuite" aria-describedby="" placeholder="Complément d'adresse" name="frmNom">
                            <small id="suiteHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Code Postal</label>
                            <input type="text" class="form-control" id="frmPostal" aria-describedby="" placeholder="Indiquer Code postal (*)" name="frmPostal" required>
                            <small id="cpHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Ville</label>
                            <input type="text" class="form-control" id="frmVille" aria-describedby="" placeholder="Indiquer Ville (*)" name="frmVille" required>
                            <small id="villeHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
                        </div>
                        
                        
                        <input type="submit" class="btn btn-primary" name="frmForm" value="Register">
                    </form>
    </div>
  </section>

  <!-- Image Section - set the background image for the header in the line below -->
  <section class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1081');">
    <!-- Put anything you want here! There is just a spacer below for demo purposes! -->
    <div style="height: 200px;"></div>
  </section>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Section Heading</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
        <?php
          include("includes/froms/register.php");
        ?>
    </div>
  </section>

  <?php
    include("includes/footer.php");
  ?>