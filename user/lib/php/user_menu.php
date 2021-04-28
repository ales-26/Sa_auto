<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index_user.php?page=accueil_user.php">
            <img src="../admin/images/logo/Logo_page.jpg" alt="Logo"  class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active nav nav-pills">
                    <a class="nav-link active" aria-current="page" href="./index_user.php?page=accueil_user.php">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./index_user.php?page=voiture.php"><span class="button_nav">Voiture</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./index_user.php?page=moto.php"><span class="button_nav">Moto</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./index_user.php?page=new.php"><span class="button_nav">Nouveauté</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="button_nav">Réservations</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="index_user.php?page=reservvoiture.php">Réserver voiture</a>
                        <a class="dropdown-item" href="index_user.php?page=reservmoto.php">Réserver moto</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item"  href="index_user.php?page=mesreserv_voit.php">Mes réservations Voiture</a>
                        <a class="dropdown-item" href="index_user.php?page=mesreserv_moto.php">Mes réservations Moto</a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="button_nav">Gérer mon compte</span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item"  href="index_user.php?page=compte.php">Mon compte</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index_user.php?page=contact.php">Contact</a>
                    </div>
                </li>
            </ul>

            <form class="d-flex">
                <div class="btn-group">
                    <button onclick="window.location.href ='index_user.php?page=deconnexion.php';" type="button" class="btn btn-danger " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Deconnexion
                    </button>
                </div>
            </form>
        </div>
    </nav>
</div>