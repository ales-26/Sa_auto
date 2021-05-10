<?php
$alert=0;
if(isset($_POST['inscrip'])){
    $aj = new ClientBD($cnx);
    $ajout = $aj->NewClient($_POST['nom_inscrip'],$_POST['prenom_inscrip'],$_POST['mail_inscrip'],$_POST['tel_inscrip'],$_POST['rue_inscrip'],$_POST['numero_inscrip'],$_POST['cp_inscrip'],$_POST['ville_inscrip'],$_POST['identif_inscrip'],$_POST['mdp_inscrip']);
    if($ajout){
        $_SESSION['user']=1;
        $_SESSION['login']= $_POST['identif_inscrip'];?>
        <!-- chargement -->
        <div class="d-flex align-items-center">
            <span class="sr-only">Loading...</span>
        </div>
        <!-- redirection -->
        <meta http-equiv="refresh": content="0;URL=./user/index_user.php?page=accueil_user.php"><?php
    }else{ $alert=2;}
}
?>
<section class="py-5 text-center container ">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Inscription </h2>
            <p class="lead text-muted">
                Veuillez entrer toutes vos informations afin de créer votre compte et de vous connecter.
            </p>
        </div>
    </div>
</section>


<form action="<?php print $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-md-2 mb-3"></div>
            <div class="col-md-3 mb-3">
                <h4>Informations</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 mb-3"></div>
            <div class="col-md-4 mb-3">
                <label for="nom_inscrip">Nom</label>
                <input type="text" class="form-control" name="nom_inscrip" id="nom_inscrip" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="prenom_inscrip">Prenom</label>
                <input type="text" class="form-control" name="prenom_inscrip" id="prenom_inscrip" required>
            </div>
            <div class="col-md-2 mb-3"></div>
        </div>

        <div class="row">
            <div class="col-md-2 mb-3"></div>
            <div class="col-md-8 mb-3">
                <label for="mail_inscrip">E-mail</label>
                <input type="email" class="form-control" name="mail_inscrip" id="mail_inscrip"  required>
            </div>
            <div class="col-md-2 mb-3"></div>
        </div>

        <div class="row">
            <div class="col-md-2 mb-3"></div>
            <div class="col-md-8 mb-3">
                <label for="tel_inscrip">Teléphone</label>
                <input type="number" class="form-control" name="tel_inscrip" id="tel_inscrip"  required>
            </div>
            <div class="col-md-2 mb-3"></div>
        </div>

        <div class="row">
            <div class="col-md-2 mb-3"></div>
            <div class="col-md-6 mb-3">
                <label for="rue_inscrip">Rue</label>
                <input type="text" class="form-control" name="rue_inscrip" id="rue_inscrip"  required>
            </div>
            <div class="col-md-2 mb-3">
                <label for="numero_inscrip">Numéro</label>
                <input type="number" class="form-control" name="numero_inscrip" id="numero_inscrip" required>
            </div>
            <div class="col-md-2 mb-3"></div>
        </div>

        <div class="row">
            <div class="col-md-2 mb-3"></div>
            <div class="col-md-3 mb-3">
                <label for="cp_inscrip">Code postal</label>
                <input type="number" class="form-control" name="cp_inscrip" id="cp_inscrip" required>
            </div>
            <div class="col-md-5 mb-3">
                <label for="ville_inscrip">Ville</label>
                <input type="text" class="form-control" name="ville_inscrip" id="ville_inscrip" required>
            </div>
            <div class="col-md-2 mb-3"></div>
        </div><br>
        <div class="row">
            <div class="col-md-2 mb-3"></div>
            <div class="col-md-3 mb-3">
                <h4>Connexion</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 mb-3"></div>
            <div class="col-md-4 mb-3">
                <label for="identif_inscrip">Identifiant</label>
                <input type="text" class="form-control" name="identif_inscrip" id="identif_inscrip" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="mdp_inscrip">Mot de passe</label>
                <input type="password" class="form-control" name="mdp_inscrip" id="mdp_inscrip" required>
            </div>
            <div class="col-md-2 mb-3"></div>
        </div><br><br>

        <div class="row">
            <div class="col-md-2 mb-3"></div>
            <button class="col-md-8 mb-3 btn btn-primary btn-lg btn-block" type="submit" name="inscrip" id="inscrip" value="Envoyer">Inscription</button>
        </div>
        <!-- Alert -->
        <?php if($alert == 2) { ?>
            <div id="alert" class="alert alert-danger text-center" role="alert"> Identifiant deja utilisé !</div> <?php } ?>
    </div>
</form><br><br><br><br><br>