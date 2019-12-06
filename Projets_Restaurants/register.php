<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Register.css">

    <?php
      include('include/header.php');
    ?>
    
    <title>Hello, world!</title>
  </head>
  <body>
    <main>
            <div class="container bloc">
                    <h1>Inscrit toi!</h1>
                    <div class="row wesh">
                        <div class="col-6">
                           <img class="log" src="Img/52184894-avatar-de-l-utilisateur-signe-anonimus-flat-icône-de-style-sur-fond-transparent (1).jpg" alt="">
                        </div>
                        <div class="col-6">
                           
                           <div class="col-6 facegoog">
                                   <a href="https://www.facebook.com/"><button type="button" class="btn btn-primary btn-block btn-lg text-monospace hey">S'inscrire avec Facebook</button></a>
                           </div>
                           <div class="col-6 look">
                                   <a href="https://accounts.google.com/ServiceLogin/signinchooser?service=mail&passive=true&rm=false&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%3Fhl%3Dfr&ss=1&scc=1&ltmpl=default&ltmplcache=2&hl=fr&emr=1&osid=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><button type="button" class="btn btn-danger btn-block btn-lg text-monospace hey">S'inscrire avec Google+</button></a>
                           </div>
                        </div>
                        </div>
                        <div class="row formu">
                        <div class="form-group">
                                <label for="" class="font-weight-bolder text-monospace"><img src="https://img.icons8.com/cotton/64/000000/user-male--v1.png" class="name">   Nom</label>
                                <input type="email" class="form-control" id="frmPrenom" aria-describedby="emailHelp" placeholder="Tapez votre adresse e-mail..">
                                <small id="emailHelp" class="form-text text-muted">Ce champ est obligatoire</small>
                              </div>
                              <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bolder text-monospace"><img src="https://img.icons8.com/cotton/64/000000/user-male--v1.png" class="name">   Prénom</label>
                                <input type="email" class="form-control" id="frmNom" aria-describedby="emailHelp" placeholder="Tapez votre adresse e-mail..">
                                <small id="emailHelp" class="form-text text-muted">Ce champ est obligatoire</small>
                              </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="font-weight-bolder text-monospace"><img src="https://img.icons8.com/cotton/64/000000/mail-account.png" class="name">   Adresse E-mail</label>
                                <input type="email" class="form-control" id="frmEmail" aria-describedby="emailHelp" placeholder="Tapez votre adresse e-mail..">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                <small id="emailHelp" class="form-text text-muted">Ce champ est obligatoire</small>
                              </div>
                              <div class="form-group">
                                <label for="exampleEmail2" class="font-weight-bolder text-monospace"><img src="https://img.icons8.com/cotton/64/000000/search-in-mail.png"class="name">   Confirmer mon adresse e-mail</label>
                                <input type="email" class="form-control" id="frmEmail2" placeholder="Veuillez confirmer votre adresse mail..">
                                <small id="emailHelp" class="form-text text-muted">Ce champ est obligatoire</small>
                              </div>
                              <form>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1" class="font-weight-bolder text-monospace"><img src="https://img.icons8.com/cotton/64/000000/laptop-key.png" class="name">   Mot de passe</label>
                                    <input type="password" class="form-control" id="frmPass" placeholder="Tapez votre mot de passe..">
                                    <small id="emailHelp" class="form-text text-muted">We'll never share your password with anyone else.</small>
                                    <small id="emailHelp" class="form-text text-muted">Ce champ est obligatoire</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1" class="font-weight-bolder text-monospace"><img src="https://img.icons8.com/cotton/64/000000/laptop-key.png" class="name">   Confirmer mon Mot de Passe</label>
                                    <input type="password" class="form-control" id="frmPass2" placeholder="Veuillez confirmer votre mot de passe..">
                                    <small id="emailHelp" class="form-text text-muted">Ce champ est obligatoire</small>
                                  </div>
                                  <div>
                                    <h5 class="font-weight-bolder text-monospace grade"><img src="https://img.icons8.com/cotton/64/000000/swiss-army-knife.png" class="name">   Grade</h5>
                                  <select class="custom-select font-weight-bolder text-monospace">
                                      <option selected>Grade</option>
                                      <option value="1">Marsouin(VS)</option>
                                      <option value="2">Techinicien(VT)</option>
                                      <option value="3">1er Classe</option>
                                      <option value="4">Caporal</option>
                                      <option value="5">Caporal-chef</option>
                                      <option value="6">Caporal-chef 1ère classe</option>
                                      <option value="7">Sergent</option>
                                      <option value="8">Sergent-chef</option>
                                      <option value="9">Adjudant</option>
                                      <option value="10">Adjudant-chef</option>
                                      <option value="11">Major</option>
                                      <option value="12">Aspirant</option>
                                      <option value="13"> Sous-lieutenant</option>
                                      <option value="14">Lieutenant</option>
                                      <option value="15">Capitaine</option>
                                      <option value="16">Commandant</option>
                                      <option value="17">Lieutenant-colonel</option>
                                      <option value="18">Colonel</option>
                                      </select>
                                      <small id="emailHelp" class="form-text text-muted">Attention! Mentir sur son grade est illégal.</small>
                                    </div>
                                    <div class="but">
                                    <button type="button" class="btn btn-info text-monospace but">M'inscrire</button> 
                                    </div>
                        </div>
                        <form>
                        
                </div>
    </main>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/safe.js"></script>
</body>



</html>