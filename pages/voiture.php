<?php
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
                <a href="index_.php?page=new.php" class="btn btn-primary my-2">Nouveauté</a>
                <a href="index_.php?page=moto.php" class="btn btn-secondary my-2">Moto</a>
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
                        Kilomètre : <span class="card-reponse"><?php print  $format = number_format($voiture[$i]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="card-prix">Prix : <?php print  $format = number_format($voiture[$i]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary btn_card" data-toggle="modal" data-target="#essayer">Essayer</button>
                            <!-- modal -->
                            <div class="modal fade" id="essayer" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="titre_modal">Attention !</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger" role="alert">
                                                Veuillez vous connecter ou vous inscrire pour accéder à cette page.
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                        Kilomètre : <span class="card-reponse"><?php print  $format = number_format($voiture[$i]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="card-prix">Prix : <?php print  $format = number_format($voiture[$i]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary btn_card" data-toggle="modal" data-target="#essayer">Essayer</button>
                            <!-- modal -->
                            <div class="modal fade" id="essayer" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="titre_modal">Attention !</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="alert alert-danger" role="alert">
                                                Veuillez vous connecter ou vous inscrire pour accéder à cette page.
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
