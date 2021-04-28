<?php
include('./lib/php/verifier_connexion_user.php');
if(isset($_SESSION['user'])){

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

    <!-- Titre avec nom -->
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-light titre_page">Bienvenue <span class="blue"> <?php print $_SESSION['login']?></span></h2>
            </div>
        </div>
    </section>


    <!-- Raccourci -->
    <section class="container">
        <p class="container text_contact"><b id="titre_contact">Accés rapide</b><br><br></p>
        <div class="row" >
            <!-- Reserver -->
            <div class="col img_agrand">
                <div class="card ">
                    <a data-toggle="modal"  data-target="#choisreserv">
                        <img src="../admin/images/logo/reserver.png" class="card-img-top" alt="Lien"></a>
                    </a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="choisreserv" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Messages</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-info" role="alert">
                                    Quel type de véhicule voulez-vous réservez ?
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" onclick="window.location.href='index_user.php?page=reservvoiture.php';">Voitures</button>
                                <button type="button" class="btn btn-primary" onclick="window.location.href='index_user.php?page=reservmoto.php';">Moto</button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mes reservation -->
            <div class="col img_agrand">
                <div class="card border-light mb-3">
                    <a data-toggle="modal"  data-target="#choismesreserv">
                        <img src="../admin/images/logo/mesreservation.png" class="card-img-top" alt="Lien">
                    </a>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="choismesreserv" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Messages</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="alert alert-info" role="alert">
                                Quel réservations voulez-vous voir ?
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" onclick="window.location.href='index_user.php?page=mesreserv_voit.php';">Voitures</button>
                            <button type="button" class="btn btn-primary" onclick="window.location.href='index_user.php?page=mesreserv_moto.php';">Moto</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- mon compte -->
            <div class="col img_agrand">
                <div class="card">
                    <a href="index_user.php?page=compte.php"><img src="../admin/images/logo/compte.png" class="card-img-top" alt="Lien"></a>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br>

    <!-- Recherche -->
    <section class="container">
        <p class="container text_contact"><b id="titre_contact">Recherche rapide</b><br><br></p>
        <article class="recherche_syntaxe_user">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-voiture-tab" data-toggle="pill" href="#pills-voiture" role="tab" aria-controls="pills-voiture" aria-selected="true">Voiture</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-moto-tab" data-toggle="pill" href="#pills-moto" role="tab" aria-controls="pills-moto" aria-selected="false">Moto</a>
                </li>
            </ul>

            <div class="tab-content" id="pills-tabContent">
                <!-- Section voiture -->
                <div class="tab-pane fade show active" id="pills-voiture" role="tabpanel" aria-labelledby="pills-voiture-tab">
                    <form action="index_user.php?page=resultat_rech_rapide_voit.php" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="marque_voiture">Marque</label>
                                    <select class="custom-select d-block w-100" id="marque_voiture" name="marque_voiture" required>
                                        <option value="">Choisir...</option>
                                        <?php
                                        for($i=0;$i<$nbrvoit;$i++){
                                            ?><option value="<?php print $voiture2[$i]->marque;?>"><?php print $voiture2[$i]->marque;?></option><?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="model_voiture">Modele</label>
                                    <input type="text" class="form-control" id="model_voiture" name="model_voiture" placeholder="Golf">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="carbu_voiture">Carburant</label>
                                    <select class="custom-select d-block w-100" id="carbu_voiture" name="carbu_voiture" required>
                                        <option value="">Carburant...</option>
                                        <option value="Essence">Essence</option>
                                        <option value="Diesel">Diesel</option>
                                        <option value="Electrique">Electrique</option>
                                        <option value="CNG">CNG</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="rechercher_voiture">Rechercher</button>
                        </div>
                    </form>
                </div>

                <!-- Section moto -->
                <div class="tab-pane fade" id="pills-moto" role="tabpanel" aria-labelledby="pills-moto-tab">
                    <form action="index_user.php?page=resultat_rech_rapide_moto.php" method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="marque_moto">Marque</label>
                                    <select class="custom-select d-block w-100" id="marque_moto" name="marque_moto"required>
                                        <option value="">Choisir...</option>
                                        <?php
                                        for($i=0;$i<$nbrmoto;$i++){
                                            ?><option value="<?php print $moto2[$i]->marque;?>"><?php print $moto2[$i]->marque;?></option><?php
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="model_moto">Modele</label>
                                    <input type="text" class="form-control" id="model_moto" name="model_moto" placeholder="Spotser">
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="carbu_moto">Carburant</label>
                                    <select class="custom-select d-block w-100" id="carbu_moto" name="carbu_moto" required>
                                        <option value="">Carburant...</option>
                                        <option value="Essence">Essence</option>
                                        <option value="Diesel">Diesel</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="rechercher_voiture">Rechercher</button>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </section>
    <br><br><br><br><br><br><br><br>

    <!-- Nouveauté -->
    <section class="container">
        <article>
            <p class="container text_contact"><b id="titre_contact">Des nouveautés juste pour vous</b><br><br></p>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <?php $nbr = count($voiture); ?>
                    <div class="card">
                        <img src="../admin/images/voiture/<?php print$voiture[0]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
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
                                Kilomètre : <span class="card-reponse"><?php print  $format = number_format( $voiture[0]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-prix">Prix : <?php print  $format = number_format( $voiture[0]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                                <div class="btn-group">
                                    <button type="button" onclick="window.location.href='index_user.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
                                    <button type="button" onclick="window.location.href='index_user.php?page=reservvoiture.php';" class="btn btn-sm btn-outline-secondary btn_card">Essayer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <?php $nbr = count($voiture); ?>
                    <div class="card">
                        <img src="../admin/images/voiture/<?php print$voiture[1]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
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
                                Kilomètre : <span class="card-reponse"><?php print  $format = number_format( $voiture[1]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-prix">Prix : <?php print  $format = number_format( $voiture[1]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                                <div class="btn-group">
                                    <button type="button" onclick="window.location.href='index_user.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
                                    <button type="button" onclick="window.location.href='index_user.php?page=reservvoiture.php';" class="btn btn-sm btn-outline-secondary btn_card">Essayer</button>
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
                        <img src="../admin/images/moto/<?php print$moto[0]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php print $moto[0]->marque;?><?php print " ";?>
                                <?php  print$moto[0]->modele; ?>
                            </h5>
                            <p class="card-text">
                                Carburant : <span class="card-reponse"><?php print$moto[0]->carburant;?><?php print " ";?></span><br>
                                Année : <span class="card-reponse"><?php print$moto[0]->annee;?><?php print " ";?></span><br>
                                Puissance : <span class="card-reponse"><?php print$moto[0]->puissance;?> ch<?php print " ";?></span><br>
                                Kilomètre : <span class="card-reponse"><?php print  $format = number_format( $moto[0]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-prix">Prix : <?php print  $format = number_format( $moto[0]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                                <div class="btn-group">
                                    <button type="button" onclick="window.location.href='index_user.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
                                    <button type="button" onclick="window.location.href='index_user.php?page=reservmoto.php';" class="btn btn-sm btn-outline-secondary btn_card">Essayer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <?php $nbr2 = count($moto); ?>
                    <div class="card">
                        <img src="../admin/images/moto/<?php print$moto[1]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php print $moto[1]->marque;?><?php print " ";?>
                                <?php  print$moto[1]->modele; ?>
                            </h5>
                            <p class="card-text">
                                Carburant : <span class="card-reponse"><?php print$moto[1]->carburant;?><?php print " ";?></span><br>
                                Année : <span class="card-reponse"><?php print$moto[1]->annee;?><?php print " ";?></span><br>
                                Puissance : <span class="card-reponse"><?php print$moto[1]->puissance;?> ch<?php print " ";?></span><br>
                                Kilomètre : <span class="card-reponse"><?php print  $format = number_format( $moto[1]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="card-prix">Prix : <?php print  $format = number_format( $moto[1]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                                <div class="btn-group">
                                    <button type="button" onclick="window.location.href='index_user.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
                                    <button type="button" onclick="window.location.href='index_user.php?page=reservmoto.php';" class="btn btn-sm btn-outline-secondary btn_card">Essayer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <br><br><br>

<?php } ?>