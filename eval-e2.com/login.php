
<!-- Header - set the background image for the header in the line below -->
<?php
  
  include("includes/header.php");
 /* $_SESSION["login"] = "Abcd";
  $_SESSION["profil"] = "utilisateur";
  $_SESSION["login"] = "Efgh"; */

  $_SESSION = array();
  session_destroy();

 // print_r($_SESSION);

  
?>
<body>
 
  <!-- Navigation -->
  <?php
  include("includes/navigation.php");
?>

 

  <!-- Content section -->
  <section class="py-5">
    <div class="container">
      <h1>Login</h1>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, suscipit, rerum quos facilis repellat architecto commodi officia atque nemo facere eum non illo voluptatem quae delectus odit vel itaque amet.</p>
      <form method="POST" action="traitement.php" id="frmRegister">
  
  <div class="form-group">
    <label for="">Login</label>
    <input type="email" class="form-control" id="frmEmail" aria-describedby="" placeholder="Indiquer email(*)" name="frmEmail" required>
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="">Password</label>
    <input type="password" class="form-control" id="frmPass" aria-describedby="" placeholder="Indiquer mot de passe(*)" name="frmPass" required>
    <small id="passwordHelp" class="form-text text-muted">Doit contenir entre 8 et 20 caractères.</small>
  </div>
  <input type="submit" class="btn btn-primary" name="frmForm" value="Login">
</form>    
        <a href="http://localhost/eval-e2.com/mdp_oublier.php">Mot de passe oublier?</a>

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

  <?php
  include("includes/footer.php");
?>