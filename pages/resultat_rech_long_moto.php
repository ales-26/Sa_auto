<?php
$marque = $_POST['marque_moto_rech_log'];
$modele = $_POST['model_moto_rech_log'];
$carbu = $_POST['carbu_moto_rech_log'];
$annee = $_POST['annee_moto_rech_log'];
$prixmin = $_POST['prix_min_moto_rech_log'];
$prixmax = $_POST['prix_max_moto_rech_log'];


$liste = new MotoBD($cnx);
$moto = $liste->getrecherche_long_moto($marque,$modele,$carbu,$annee,$prixmin,$prixmax);
if($moto==null){;
    $nbr=0;?>
    <br><br><div class="container">
        <div class="row">
            <div class="col-lg-6">
                <br><br><h1><b>Désolée..... </b></h1><br>
                <p class="pg404">
                    Aucune moto avec ces caractéristiques trouvés ...<br>
                </p>
            </div>
            <div class="col-lg-6">
                <img src="./admin/images/Logo/logo_404.jpg" class="img-fluid" alt="image">
            </div>
            <div class="col-lg-6">
                <button type="submit" class="btn btn-primary" onclick="window.location.href='index_.php?page=recherche_moto.php';">Retour recherche moto</button>
                <button type="submit" class="btn btn-primary" onclick="window.location.href='index_.php?page=accueil.php';">Retour accueil</button>
            </div>
        </div>
    </div><br><br>
    <?php
} else{
    $nbr = count($moto);
    ?>

    <section class="py-5 text-center container titre_page">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-light titre_page ">Résultats de la recherche</h2>
                <p class="lead text-muted">
                    <?php print $nbr ?> moto trouvé
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
                            Kilomètre : <span class="card-reponse"><?php print  $format = number_format( $moto[$i]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="card-prix">Prix : <?php print  $format = number_format( $moto[$i]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
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
                            Kilomètre : <span class="card-reponse"><?php print  $format = number_format( $moto[$i]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="card-prix">Prix : <?php print  $format = number_format( $moto[$i]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
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
}
?>
<br><br><br>
