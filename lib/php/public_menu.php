<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index_.php?page=accueil.php">
            <img src="./admin/images/logo/Logo_page.jpg" alt="Logo"  class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

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
                        <a class="dropdown-item" href="index_.php?page=rechercher_voiture.php">Recherche voiture</a>
                        <a class="dropdown-item" href="index_.php?page=rechercher_moto.php">Recherche moto</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index_.php?page=new.php">News</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="index_.php?page=pages404.php"><span class="button_nav">Qui somme nous ?</span></a>
                </li>
            </ul>

            <form class="d-flex" method="POST" action="<?php print $_SERVER['PHP_SELF']; ?>">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Connexion
                    </button>
                    <div class="dropdown-menu p-4">
                        <form class="pt-4 py-5" >
                            <div class="mb-3">
                                <label for="login" class="form-label">Identifiant</label>
                                <input type="text" class="form-control" id="login" name="login" placeholder="voiture1234" size="25">
                            </div>
                            <div class="mb-3">
                                <label for="pass" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="pass" name="pass" placeholder="*******">
                            </div>
                            <button type="submit" class="btn btn-primary" id="connexion" name="connexion" value="connexion">Se connecter</button>
                        </form>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index_.php?page=pages404.php">Inscriptions</a>
                    </div>
                </div>
            </form>
        </div>
    </nav>
</div>