<br>
<?php
$liste = new NewvoitureBD($cnx);
$voiture = $liste->getNewVoiture();
$nbr = count($voiture);

$liste2 = new NewmotoBD($cnx);
$moto = $liste2->getNewMoto();
$nbr2 = count($moto);
?>

<h2 class="center"><span class="blue">Fraichement arrivée </span><span class="badge bg-secondary">New</span></h2>
<section class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrump2">
            <li class="breadcrumb-item"><a href=href="index_.php?page=accueil.php">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Rechercher</li>
            <li class="breadcrumb-item active" aria-current="page">News</li>
        </ol>
    </nav>
</section>
*
<?php
$i = 0;
$a = 0;
while($i<$nbr){
    if ($i<$nbr){?>
    <section class="container">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <?php $nbr = count($voiture); ?>
                <div class="card">
                    <img src="./admin/images/voiture/<?php print$voiture[$i]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php print $voiture[$i]->marque;?><?php print " ";?>
                            <?php  print$voiture[$i]->modele; ?>
                        </h5>
                        <p class="card-text">
                            Carburant : <span class="card-reponse"><?php print$voiture[$i]->carburant;?><?php print " ";?></span><br>
                            Année : <span class="card-reponse"><?php print$voiture[$i]->annee;?><?php print " ";?></span><br>
                            Puissance : <span class="card-reponse"><?php print$voiture[$i]->puissance;?> ch<?php print " ";?></span><br>
                            Boîte : <span class="card-reponse"><?php print$voiture[$i]->boite;?><?php print " ";?></span><br>
                            Kilomètre : <span class="card-reponse"><?php print$voiture[$i]->km;?> km<?php print " ";?></span><br>
                            <span class="card-prix">Prix : <?php print$voiture[$i]->prix;?><?php print " ";?>€</span>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> <a class="navbar-brand card-foot" href="index_.php?page=News.php">Reserver-moi maintenant !!</a></small>
                    </div>
                </div>
            </div>
<?php
}
$i=$i+1;
if ($i<$nbr){?>
            <div class="col">
                <?php $nbr = count($voiture); ?>
                <div class="card">
                    <img src="./admin/images/voiture/<?php print$voiture[$i]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php print $voiture[$i]->marque;?><?php print " ";?>
                            <?php  print$voiture[$i]->modele; ?>
                        </h5>
                        <p class="card-text">
                            Carburant : <span class="card-reponse"><?php print$voiture[$i]->carburant;?><?php print " ";?></span><br>
                            Année : <span class="card-reponse"><?php print$voiture[$i]->annee;?><?php print " ";?></span><br>
                            Puissance : <span class="card-reponse"><?php print$voiture[$i]->puissance;?> ch<?php print " ";?></span><br>
                            Boîte : <span class="card-reponse"><?php print$voiture[$i]->boite;?><?php print " ";?></span><br>
                            Kilomètre : <span class="card-reponse"><?php print$voiture[$i]->km;?> km<?php print " ";?></span><br>
                            <span class="card-prix">Prix : <?php print$voiture[$i]->prix;?><?php print " ";?>€</span>
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted"> <a class="navbar-brand card-foot" href="index_.php?page=News.php">Reserver-moi maintenant !!</a></small>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
}
$i=$i+1;


while($a<$nbr2){
    if ($a<$nbr2){?>
        <section class="container">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <?php $nbr2 = count($moto); ?>
                    <div class="card">
                        <img src="./admin/images/moto/<?php print$moto[$a]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php print $moto[$a]->marque;?><?php print " ";?>
                                <?php  print$moto[$a]->modele; ?>
                            </h5>
                            <p class="card-text">
                                Carburant : <span class="card-reponse"><?php print$moto[$a]->carburant;?><?php print " ";?></span><br>
                                Année : <span class="card-reponse"><?php print$moto[$a]->annee;?><?php print " ";?></span><br>
                                Puissance : <span class="card-reponse"><?php print$moto[$a]->puissance;?> ch<?php print " ";?></span><br>
                                Kilomètre : <span class="card-reponse"><?php print$moto[$a]->km;?> km<?php print " ";?></span><br>
                                <span class="card-prix">Prix : <?php print$moto[$a]->prix;?><?php print " ";?>€</span>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"> <a class="navbar-brand card-foot" href="index_.php?page=News.php">Reserver-moi maintenant !!</a></small>
                        </div>
                    </div>
                </div>

        <?php
    }
    $a=$a+1;
    if ($a<$nbr2){?>
                <div class="col">
                    <?php $nbr2 = count($moto); ?>
                    <div class="card">
                        <img src="./admin/images/moto/<?php print$moto[$a]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php print $moto[$a]->marque;?><?php print " ";?>
                                <?php  print$moto[$a]->modele; ?>
                            </h5>
                            <p class="card-text">
                                Carburant : <span class="card-reponse"><?php print$moto[$a]->carburant;?><?php print " ";?></span><br>
                                Année : <span class="card-reponse"><?php print$moto[$a]->annee;?><?php print " ";?></span><br>
                                Puissance : <span class="card-reponse"><?php print$moto[$a]->puissance;?> ch<?php print " ";?></span><br>
                                Kilomètre : <span class="card-reponse"><?php print$moto[$a]->km;?> km<?php print " ";?></span><br>
                                <span class="card-prix">Prix : <?php print$moto[$a]->prix;?><?php print " ";?>€</span>
                            </p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted"> <a class="navbar-brand card-foot" href="index_.php?page=News.php">Reserver-moi maintenant !!</a></small>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
    $a=$a+1;
}

}
?>
<br>
