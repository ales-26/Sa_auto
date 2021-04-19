<?php

if(isset($_POST['submit'])){
    extract($_POST,EXTR_OVERWRITE);
    $ad = new Admin_membreBD($cnx);
    $admin = $ad->getAdmin($login, $password);
    //var_dump($admin);
    if($admin){
        $_SESSION['admin']=1;
        $_SESSION['login']= $login;
        //print "ok";
        ?>
        <!-- chargement -->
        <div class="d-flex align-items-center">
            <span class="sr-only">Loading...</span>
        </div>
        <!-- redirection -->
        <meta http-equiv="refresh": content="0;URL=./admin/index.php?page=accueil_admin.php">
        <?php

    } else {
        $message = "Identifiants incorrects";
    }
}
?>


<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

        <!-- Logo cliquable -->
        <a class="navbar-brand" href="index_.php?page=accueil.php">
            <img src="./admin/images/logo/Logo_page.jpg" alt="Logo"  class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Liste bouton -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active nav nav-pills">
                    <a class="nav-link active" aria-current="page" href="index_.php?page=accueil.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index_.php?page=voiture.php"><span class="button_nav">Voiture</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index_.php?page=moto.php"><span class="button_nav">Moto</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="button_nav">Rechercher</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="index_.php?page=recherche_voiture.php">Recherche voiture</a>
                        <a class="dropdown-item" href="index_.php?page=recherche_moto.php">Recherche moto</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index_.php?page=new.php">News</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index_.php?page=contact.php"><span class="button_nav">Qui somme nous ?</span></a>
                </li>
            </ul>

            <!-- Connexion -->
            <form class="d-flex" action="<?php print $_SERVER['PHP_SELF'];?>" method="post" >
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Connexion
                    </button>
                    <div class="dropdown-menu p-4">
                        <form class="pt-4 py-5">
                            <div class="mb-3">
                                <label for="login" class="form-label">Identifiant</label>
                                <input type="text" class="form-control" id="login" name="login" placeholder="voiture1234" size="25">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="*******">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Se connecter</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index_.php?page=pages404.php">Inscriptions</a>
                    </div>
                </div>
            </form>
        </div>
    </nav>
</div>