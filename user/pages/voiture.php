<?php
include('./lib/php/verifier_connexion_user.php');
if(isset($_SESSION['user'])){
$liste = new VoitureBD($cnx);
$voiture = $liste->getvoiture();
$nbr = count($voiture);
?>

<section class="py-5 text-center container titre_page">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Nos Voitures</h2>
            <p class="lead text-muted">
                Voici notre large selection de voitures toutes marques. Sur demande nous pouvons vous les faire essayer sans engagement.
            </p>
            <p>
                <a href="index_user.php?page=new.php" class="btn btn-primary my-2">Nouveauté</a>
                <a href="index_user.php?page=moto.php" class="btn btn-secondary my-2">Moto</a>
            </p>
        </div>
    </div>
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
                <img src="../admin/images/voiture/<?php print$voiture[$i]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
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
                        Kilomètre : <span class="card-reponse"><?php print  $format = number_format( $voiture[$i]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="card-prix">Prix : <?php print  $format = number_format( $voiture[$i]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                        <div class="btn-group">
                            <button type="button" onclick="window.location.href='index_user.php?page=reservvoiture.php';" class="btn btn-sm btn-outline-secondary btn_card">Essayer</button>
                        </div>
                    </div>
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
                <img src="../admin/images/voiture/<?php print$voiture[$i]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
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
                        Kilomètre : <span class="card-reponse"><?php print  $format = number_format( $voiture[$i]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="card-prix">Prix : <?php print  $format = number_format( $voiture[$i]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                        <div class="btn-group">
                            <button type="button" onclick="window.location.href='index_user.php?page=reservvoiture.php';" class="btn btn-sm btn-outline-secondary btn_card">Essayer</button>
                        </div>
                    </div>
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
<?php } ?>