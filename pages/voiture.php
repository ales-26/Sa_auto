<br>
<?php
$liste = new VoitureBD($cnx);
$voiture = $liste->getvoiture();
$nbr = count($voiture);
?>

<h2 class="center"><span class="blue">Nos Voitures</span></h2>
<section class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrump2">
            <li class="breadcrumb-item"><a href="index_.php?page=accueil.php">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Voiture</li>
        </ol>
    </nav>
</section>
<?php
$i = 0;
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
}
?>
<br>
