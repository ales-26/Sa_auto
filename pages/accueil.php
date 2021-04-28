<?php
$liste_voit = new VoitureBD($cnx);
$voiture = $liste_voit->getNewVoiture();
$nbr = count($voiture);
$voiture2 = $liste_voit->getVoituremarque();
$nbrvoit = count($voiture2);

$listemoto = new MotoBD($cnx);
$moto2 = $listemoto->getMotomarque();
$nbrmoto = count($moto2);
$moto = $listemoto->getNewMoto();
$nbr2 = count($moto);
?>

<br>
<!-- Banniere -->
<section class="img_dim">
    <!-- Image banniere -->
    <article class="placement_titre_accueil">
        <span class="blue">Trouver</span> le vehicule de vos reves...
    </article>

    <!-- partie recherche -->
    <article class="placement_recherche_accueil">
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-voiture-tab" data-toggle="pill" href="#pills-voiture" role="tab" aria-controls="pills-voiture" aria-selected="true"><spab class="button_acceuil">Voiture</spab></a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-moto-tab" data-toggle="pill" href="#pills-moto" role="tab" aria-controls="pills-moto" aria-selected="false"><spab class="button_acceuil">Moto</spab></a>
            </li>
        </ul>
        <div class="tab-content recherche_syntaxe" id="pills-tabContent">
            <!-- Section voiture -->
            <div class="tab-pane fade show active" id="pills-voiture" role="tabpanel" aria-labelledby="pills-voiture-tab">
                <form action="index_.php?page=resultat_rech_rapide_voit.php" method="post">
                    <div class="tab-pane fade show active" id="pills-voiture" role="tabpanel" aria-labelledby="pills-voiture-tab">
                        <div class="col-md-5 mb-3">
                            <select class="custom-select" style="width: 200px;" id="marque_voit_accueil" name="marque_voit_accueil" required>
                                <option value="">Marque...</option>
                                <?php
                                for($i=0;$i<$nbrvoit;$i++){
                                    ?><option value="<?php print $voiture2[$i]->marque;?>"><?php print $voiture2[$i]->marque;?></option><?php
                                }
                                ?>
                            </select>
                            <div class="invalid-feedback">
                                Selectionné une marque disponible.
                            </div>
                        </div>
                        <div class="col-md-5 mb-3">
                            <input type="text" class="form-control" style="width: 200px;" id="modele_voit_accueil" name="modele_voit_accueil" placeholder="Modele">
                        </div>
                        <div class="col-md-5 mb-3">
                            <select class="custom-select  " style="width: 200px;" id="carburant_voit_accueil" name="carburant_voit_accueil" required>
                                <option value="">Carburant...</option>
                                <option value="Essence">Essence</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Electrique">Electrique</option>
                                <option value="CNG">CNG</option>
                            </select>
                            <div class="invalid-feedback">
                                Selectionné un carburant disponible.
                            </div>
                            <button type="submit" class="btn btn-primary">Rechercher</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- Section moto -->
            <div class="tab-pane fade" id="pills-moto" role="tabpanel" aria-labelledby="pills-moto-tab">
                <form action="index_.php?page=resultat_rech_rapide_moto.php" method="post">
                    <div class="col-md-5 mb-3">
                        <select class="custom-select" style="width: 200px;" id="marque_moto_accueil" name="marque_moto_accueil" required>
                            <option value="">Marque...</option>
                            <?php
                            for($i=0;$i<$nbrmoto;$i++){
                                ?><option value="<?php print $moto2[$i]->marque;?>"><?php print $moto2[$i]->marque;?></option><?php
                            }
                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Selectionné une marque disponible.
                        </div>
                    </div>
                    <div class="col-md-5 mb-3">
                        <input type="text" class="form-control" style="width: 200px;" id="modele_moto_accueil" name="modele_moto_accueil" placeholder="Modele">
                    </div>
                    <div class="col-md-5 mb-3">
                        <select class="custom-select  " style="width: 200px;" id="carburant_moto_accueil" name="carburant_moto_accueil" required>
                            <option value="">Carburant...</option>
                            <option value="Essence">Essence</option>
                            <option value="Diesel">Diesel</option>
                        </select>
                        <div class="invalid-feedback">
                            Selectionné un carburant disponible.
                        </div>
                        <button type="submit" class="btn btn-primary">Rechercher</button>
                    </div>
                </form>
            </div>
        </div>
    </article>
</section>
<br><br>

<!-- Card -->
<section class="container">
    <!-- Titre -->
    <article>
        <h2>Le bonheur à porter de main...</h2>
        <h3 class="blue">Nos meilleurs ventes</h3>
    </article>

    <br><br>
    <!-- Carousel -->
    <article>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./admin/images/voiture_expo/v4.jpg"  class="d-block w-100" alt="voiture">
                </div>
                <div class="carousel-item">
                    <img src="./admin/images/voiture_expo/v1.jpg"  class="d-block w-100"  alt="voiture">
                </div>
                <div class="carousel-item">
                    <img src="./admin/images/voiture_expo/v3.jpg"  class="d-block w-100" alt="voiture">
                </div>
                <div class="carousel-item">
                    <img src="./admin/images/voiture_expo/v2.jpg"  class="d-block w-100"  alt="voiture">
                </div>
            </div>
        </div>
    </article>

    <br><br>
    <!-- Titre -->
    <article>
        <h3 ><span class="blue">Les bonnes affaires </span><span class="badge bg-secondary">New</span></h3>
    </article>
    <br><br>

    <!-- News -->
    <article>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <?php $nbr = count($voiture); ?>
                <div class="card">
                    <img src="./admin/images/voiture/<?php print$voiture[0]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php print $voiture[0]->marque;?><?php print " ";?>
                            <?php  print$voiture[0]->modele; ?>
                        </h5>
                        <p class="card-text">
                            Carburant : <span class="card-reponse"><?php print$voiture[0]->carburant;?><?php print " ";?></span><br>
                            Année : <span class="card-reponse"><?php print$voiture[0]->annee;?><?php print " ";?></span><br>
                            Puissance : <span class="card-reponse"><?php print$voiture[0]->puissance;?> ch<?php print " ";?></span><br>
                            Boîte : <span class="card-reponse"><?php print$voiture[0]->boite;?><?php print " ";?></span><br>
                            Kilomètre : <span class="card-reponse"><?php print $format = number_format($voiture[0]->km,0,',',' ');?> km<?php print " ";?></span><br>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="card-prix">Prix : <?php print  $format = number_format( $voiture[0]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                            <div class="btn-group">
                                <button type="button" onclick="window.location.href='index_.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
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
            <div class="col">
                <?php $nbr = count($voiture); ?>
                <div class="card">
                    <img src="./admin/images/voiture/<?php print$voiture[1]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php print $voiture[1]->marque;?><?php print " ";?>
                            <?php  print$voiture[1]->modele; ?>
                        </h5>
                        <p class="card-text">
                            Carburant : <span class="card-reponse"><?php print$voiture[1]->carburant;?><?php print " ";?></span><br>
                            Année : <span class="card-reponse"><?php print$voiture[1]->annee;?><?php print " ";?></span><br>
                            Puissance : <span class="card-reponse"><?php print$voiture[1]->puissance;?> ch<?php print " ";?></span><br>
                            Boîte : <span class="card-reponse"><?php print$voiture[1]->boite;?><?php print " ";?></span><br>
                            Kilomètre : <span class="card-reponse"><?php print $format = number_format($voiture[1]->km,0,',',' ');?> km<?php print " ";?></span><br>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="card-prix">Prix : <?php print  $format = number_format( $voiture[1]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                            <div class="btn-group">
                                <button type="button" onclick="window.location.href='index_.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
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
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <?php $nbr2 = count($moto); ?>
                <div class="card">
                    <img src="./admin/images/moto/<?php print$moto[0]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php print $moto[0]->marque;?><?php print " ";?>
                            <?php  print$moto[0]->modele; ?>
                        </h5>
                        <p class="card-text">
                            Carburant : <span class="card-reponse"><?php print$moto[0]->carburant;?><?php print " ";?></span><br>
                            Année : <span class="card-reponse"><?php print$moto[0]->annee;?><?php print " ";?></span><br>
                            Puissance : <span class="card-reponse"><?php print$moto[0]->puissance;?> ch<?php print " ";?></span><br>
                            Kilomètre : <span class="card-reponse"><?php print $format = number_format($moto[0]->km,0,',',' ');?> km<?php print " ";?></span><br>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="card-prix">Prix : <?php print  $format = number_format($moto[0]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                            <div class="btn-group">
                                <button type="button" onclick="window.location.href='index_.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
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

            <div class="col">
                <?php $nbr2 = count($moto); ?>
                <div class="card">
                    <img src="./admin/images/moto/<?php print$moto[1]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php print $moto[1]->marque;?><?php print " ";?>
                            <?php  print$moto[1]->modele; ?>
                        </h5>
                        <p class="card-text">
                            Carburant : <span class="card-reponse"><?php print$moto[1]->carburant;?><?php print " ";?></span><br>
                            Année : <span class="card-reponse"><?php print$moto[1]->annee;?><?php print " ";?></span><br>
                            Puissance : <span class="card-reponse"><?php print$moto[1]->puissance;?> ch<?php print " ";?></span><br>
                            Kilomètre : <span class="card-reponse"><?php print $format = number_format($moto[1]->km,0,',',' ');?> km<?php print " ";?></span><br>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="card-prix">Prix : <?php print  $format = number_format( $moto[1]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                            <div class="btn-group">
                                <button type="button" onclick="window.location.href='index_.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
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
    </article>
</section>
<br>