<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css">


    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">
   <form method="POST" action="traitement.php" id="frmInscription">
   <div class="form-group">
    <label for="nom">Nom</label>
    <input type="text" class="form-control" id="frmNom" aria-describedby="nom" placeholder="Entrer votre nom (*)" name= "frmNom" required>
    <small id="nomHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
  </div>
  <div class="form-group">
    <label for="prénom">Prenom</label>
    <input type="text" class="form-control" id="frPrenom" aria-describedby="prenom" placeholder="Entrer votre prenom (*)" name= "frmPrenom" required>
    <small id="prenomHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre email (*)" name= "frmEmail" required>
    <small id="emailHelp" class="form-text text-muted">Ce champs est obligatoire.</small>
  </div>
  <input type="text" id="frmMDP">
  <button onclick="$('#frmMDP').val(password.generate());">
  Generate Password
</button>
  <div class="form-group">
    <label for="confirm_mot_de_passe">Confirmer votre mot de passe</label>
    <input type="password" class="form-control" id="frmMDP2" placeholder="Confirmer votre mot de passe (*)" name= "frComfirm">
  </div>
  <button type="submit" class="btn btn-primary">Inscription</button>
</form>
   </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/traitement.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/messages_fr.js"></script>
    <script src="//code.jquery.com/jquery.min.js"></script>
    <script src="js/password.js"></script>

  </body>
</html>