<?php
include('include/header.php');
?>

<body>

  <!-- Navigation -->
  <?php
  include('include/navigation.php');
  ?>
  <!-- Header - set the background image for the header in the line below -->
  <header class="py-5 bg-image-full" style="background-image: url('https://unsplash.it/1900/1080?image=1076');">
    <img class="img-fluid d-block mx-auto" src="http://placehold.it/200x200&text=Logo" alt="">
  </header>

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
       <h1>Register</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      <form method="POST" action="traitement.php" id="frmRegister">
                        <div class="form-group">
                            <label for="">Prénom</label>
                            <input type="text" class="form-control" id="frmPrenom" aria-describedby="" placeholder="Entrez votre prénom (*)" name="frmPrenom" required>
                            <small id="prenomHelp" class="form-text text-muted">Ce champ est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" class="form-control" id="frmNom" aria-describedby="" placeholder="Entre votre nom (*)" name="frmNom" required>
                            <small id="nomHelp" class="form-text text-muted">Ce champ est onligatoire</small>
                        </div>
                        <div class="form-group">
                            <label for="">Email address</label>
                            <input type="email" class="form-control" id="frmEmail" aria-describedby="" placeholder="Entrez votre adresse mail(*)" name="frmEmail" required>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="frmPass" placeholder="Entrez votre mot de passe (*)" name="frmPass" required>
                            <small id="passwordHelp" class="form-text text-muted">Doit contenir entre 8 et 20 carractère. Ce champ est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Confirmez votre de mot passe</label>
                            <input type="password" class="form-control" id="frmPassB" placeholder="Confirmer votre mot de passe (*)" name="frmPass2"required>
                            <small id="passwordBHelp" class="form-text text-muted">Vous devez confirmé votre mot de passe.</small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Register</button>
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
include('include/footer.php');
 ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="secure.js"></script>
<script src="traitement.php"></script>
</body>

</html>
