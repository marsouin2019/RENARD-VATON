<!DOCTYPE html>

<html lang="en">
<?php 
include("include/header.php")
?>


<body>

  <!-- Navigation -->
  <?php 
    include("include/navigation.php")
  ?>
  <link rel="stylesheet" href="traitement.php">
  

  <!-- Header - set the background image for the header in the line below -->
 
  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Register</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      <form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Nom</label>
      <input type="text" class="form-control text-muted" id="frmNom" placeholder="Votre Nom" name="frmNom" required>
      <small id="nomHelp" class="form-text text-muted">Ce champ est obligatoire</small>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02">Prénom</label>
      <input type="text" class="form-control" id="frmPrenom" placeholder="Votre prénom" required>
      <small id="nomHelp" class="form-text text-muted">Ce champ est obligatoire</small>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">E-mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend2">@</span>
        </div>
        <input type="text" class="form-control text-muted" id="frmEmail" placeholder="Votre adresse e-mail" aria-describedby="inputGroupPrepend2" required>
      </div>
      <small id="nomHelp" class="form-text text-muted">Ce champ est obligatoire</small>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefaultUsername">Confirmez votre adresse mail</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="frmEmail2">@</span>
        </div>
        <input type="text" class="form-control text-muted" id="validationDefaultUsername" placeholder="Veuillez confirmer votre adresse e-mail" aria-describedby="inputGroupPrepend2" required>
      </div>
      <small id="nomHelp" class="form-text text-muted">Ce champ est obligatoire</small>
    </div>
  
    <div class="col-md-4 mb-3">
      <label for="validationDefault03">Mot de Passe</label>
      <input type="text" class="form-control text-muted" id="frmPass" placeholder="Veuillez taper votre mot de passe.." required>
      <small id="nomHelp" class="form-text text-muted">Ce champ est obligatoire</small>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault03">Confirmer le Mot de Passe</label>
      <input type="text" class="form-control text-muted" id="frmPass2" placeholder="Veuillez taper votre mot de passe.." required>
      <small id="nomHelp" class="form-text text-muted">Ce champ est obligatoire</small>
    </div>
    
    <button class="btn btn-primary" type="submit">Register</button>
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
    </div>
  </section>

  <!-- Footer -->
  <?php
  include("include/footer.php")
                        ?>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="secure.js"></script>
  <script src="traitement.php"></script>

</body>

</html>
