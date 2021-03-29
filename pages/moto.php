<?php
$liste = new MotoBD($cnx);
$moto = $liste->getMoto();
$nbr = count($moto);
?>

<section class="py-5 text-center container ">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Nos Moto</h2>
            <p class="lead text-muted">
                Voici notre large selection de moto toutes marques. Sur demande nous pouvons vous les faire essayer sans engagement.
            </p>
            <p>
                <a href="index_.php?page=new.php" class="btn btn-primary my-2">Nouveauté</a>
                <a href="index_.php?page=voiture.php" class="btn btn-secondary my-2">Voiture</a>
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
            <?php $nbr = count($moto); ?>
            <div class="card">
                <img src="./admin/images/moto/<?php print$moto[$i]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php print $moto[$i]->marque;?><?php print " ";?>
                        <?php  print$moto[$i]->modele; ?>
                    </h5>
                    <p class="card-text">
                        Carburant : <span class="card-reponse"><?php print$moto[$i]->carburant;?><?php print " ";?></span><br>
                        Année : <span class="card-reponse"><?php print$moto[$i]->annee;?><?php print " ";?></span><br>
                        Puissance : <span class="card-reponse"><?php print$moto[$i]->puissance;?> ch<?php print " ";?></span><br>
                        Kilomètre : <span class="card-reponse"><?php print$moto[$i]->km;?> km<?php print " ";?></span><br>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="card-prix">Prix : <?php print$moto[$i]->prix;?><?php print " ";?>€</span>
                        <div class="btn-group">
                            <button type="button" onclick="window.location.href='index_.php?page=News.php';" class="btn btn-sm btn-outline-secondary btn_card">Reserver</button>
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
            <?php $nbr = count($moto); ?>
            <div class="card">
                <img src="./admin/images/moto/<?php print$moto[$i]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php print $moto[$i]->marque;?><?php print " ";?>
                        <?php  print$moto[$i]->modele; ?>
                    </h5>
                    <p class="card-text">
                        Carburant : <span class="card-reponse"><?php print$moto[$i]->carburant;?><?php print " ";?></span><br>
                        Année : <span class="card-reponse"><?php print$moto[$i]->annee;?><?php print " ";?></span><br>
                        Puissance : <span class="card-reponse"><?php print$moto[$i]->puissance;?> ch<?php print " ";?></span><br>
                        Kilomètre : <span class="card-reponse"><?php print$moto[$i]->km;?> km<?php print " ";?></span><br>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="card-prix">Prix : <?php print$moto[$i]->prix;?><?php print " ";?>€</span>
                        <div class="btn-group">
                            <button type="button" onclick="window.location.href='index_.php?page=News.php';" class="btn btn-sm btn-outline-secondary btn_card">Reserver</button>
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

