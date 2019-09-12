<?php
    include ("../include/head.php");
 ?>


  <body>
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d207734.02425977038!2d-60.99391916999208!3d14.65747156328199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2s!4v1567169817704!5m2!1sfr!2s" width="600" height="1450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
      <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1><span class="cyan">LOCATION</span> FIND <i class="fas fa-map-marker-alt"></i></h1>
                </div>
                <div class="col">
                 <p class="pHeader"> <strong>our network</strong>  <i class="fas fa-square"></i> </p>  
                </div>
            </div>
        </div>
      </header>
      <nav class="menu">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="lShop">
                        <li>
                            <a href="#"><i class="fas fa-map-marker-alt"></i> Find Locations</a>
                        </li>
                        <li><a href="#"><i class="fas fa-book-open"></i> Our Species</a></li>
                        <li><a href="#"><i class="fas fa-shopping-basket"></i> Shop</a></li>
                    </ul>
                </div>
                <div class="col">
                    <ul class="lAccount">
                        <li><a href="#"><i class="fas fa-window-restore"></i> My account</a></li>
                        <li><a href="#"><i class="fas fa-bookmark"></i> Sign Up</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i> Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </nav>   
        <div class="container bCyan">
            <div class="row">
                <div class="col">
                    <p>View a location</p>
                </div>
                <div class="col">
                    <ul class="register">
                        <li><a href="#">Login Here or</a></li>
                        <li><a href="#" class="btn btn-green">Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container loc">
            <p><span class="badge badge-secondary">1</span> Drop Pin onto the location on map</p>
            <p><span class="badge badge-secondary">2</span> Add a Species found at location</p>
            <form action="">
                <select name="" id="" >
                    <option value="">
                        Select Fish
                    </option>
                </select>
                <button class="btn btn-green">Add Location</button>
            </form>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="btn-group-vertical">
                        <button type="button" class="btn btn-cyan"><i class="fas fa-user"></i></button>
                        <button type="button" class="btn btn-cyan"><i class="fas fa-cog"></i></button>
                        <button type="button" class="btn btn-cyan"><i class="fas fa-star"></i></button>
                        <button type="button" class="btn btn-cyan"><i class="fas fa-map-marker-alt"></i></button>
                        <button type="button" class="btn btn-green"><i class="fas fa-plus"></i></button>
                    </div>
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
        <footer>
        <nav class="menu">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <h3>About us</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Who started it</a></li>
                            <li><a href="#">How to help</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h3>Account Informations</h3>
                        <ul>
                            <li><a href="#">How to login</a></li>
                            <li><a href="#">Create an account</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Join us</a></li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <h3>About us</h3>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Who started it</a></li>
                            <li><a href="#">How to help</a></li>
                        </ul>
                    </div>
                    <div class="col-3">
                        <h3>Account Informations</h3> 
                        <ul>
                            <li><a href="#">How to login</a></li>
                            <li><a href="#">Create an account</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Join us</a></li>
                        </ul>
                    </div>
                    <div class="col-2">
                        <h3>Ours Networks <span class="badge badge-secondary"><i class="fas fa-heart"></i></span></h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-9">
                    <p>We've made some small changes to BlazRobar.com. To keep the quality hight on the website and make sure everyone is playing nice. We've added a member login section. Created an account, then you'll have access to dowload all the files on the site. Don't worry through, it's all still free. </p>
                    </div>
                    <div class="col-3"></div>
                </div>
                
            </div>
        </nav>

        </footer>







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

