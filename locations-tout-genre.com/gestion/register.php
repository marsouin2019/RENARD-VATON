<?php
    include ("../include/head.php");
 ?>


  <body>
  <?php 
    include ("../include/menu.php");
  ?>
        <div class="container">
            <div class="row">
                <div class="col-2">
                   <?php
                        include("../include/sidebar.php");
                   ?>
                </div>
                <div class="col-10">
                    <div class="container content">
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
                            <small id="passwordHelp" class="form-text text-muted">Carractère de 6 à 12. Ce champ est obligatoire.</small>
                        </div>
                        <div class="form-group">
                            <label for="">Confirmez votre de mot passe</label>
                            <input type="password" class="form-control" id="frmPassB" placeholder="Confirmer votre mot de passe (*)" name="frmPass2"required>
                            <small id="passwordBHelp" class="form-text text-muted">Vous devez confirmé votre mot de passe.</small>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                                    
                    </div>
                </div>
        </div>
        </div>
            <?php
                include("../include/footer.php");
            ?>







 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src=" http://locations-tout-genre.com/js/jquery.validate.js"></script>
    <script src="http://locations-tout-genre.com/js/messages_fr.js"></script>
    <script src="http://localhost/locations-tout-genre.com/js/traitement.js"></script>
  </body>
</html>

