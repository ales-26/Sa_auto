<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php?page=accueil_admin.php">
            <img src="./images/logo/Logo_page.jpg" alt="Logo"  class="d-inline-block align-top">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto ">
                <li class="nav-item active nav nav-pills">
                    <a class="nav-link active" aria-current="page" href="./index.php?page=accueil_admin.php">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./index.php?page=voiture.php"><span class="button_nav">Voiture</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./index.php?page=moto.php"><span class="button_nav">Moto</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./index.php?page=new.php"><span class="button_nav">New</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link "  href="./index.php?page=reservation.php"><span class="button_nav">Reservation</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./index.php?page=Client.php"><span class="button_nav">Client</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="./index.php?page=Liste_admin.php"><span class="button_nav">Liste Admin</span></a>
                </li>
            </ul>

            <form class="d-flex">
                <div class="btn-group">
                    <button onclick="window.location.href ='index.php?page=deconnexion.php';" type="button" class="btn btn-danger " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Deconnexion
                    </button>
                </div>
            </form>
        </div>
    </nav>
</div>