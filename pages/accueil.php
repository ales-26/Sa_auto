<?php
$liste = new NewvoitureBD($cnx);
$voiture = $liste->getNewVoiture();
$nbr = count($voiture);

$liste2 = new NewmotoBD($cnx);
$moto = $liste2->getNewMoto();
$nbr2 = count($moto);

$listevoiture = new VoituremarqueBD($cnx);
$voiture2 = $listevoiture->getVoituremarque();
$nbrvoit = count($voiture2);

$listemoto = new MotomarqueBD($cnx);
$moto2 = $listemoto->getMotomarque();
$nbrmoto = count($moto2);
?>

<br>
<section class="img_dim">
    <article class="placement_titre_accueil">
        <span class="blue">Trouver</span> le vehicule de vos reves...
    </article>

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
            <div class="tab-pane fade show active" id="pills-voiture" role="tabpanel" aria-labelledby="pills-voiture-tab">

                <!-- Section voiture -->
                <div class="col-md-5 mb-3">
                    <select class="custom-select" style="width: 200px;" id="marque" required>
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
                    <input type="text" class="form-control" style="width: 200px;" id="modele" placeholder="Modele" required>

                </div>
                <div class="col-md-5 mb-3">
                    <select class="custom-select  " style="width: 200px;" id="carburant" required>
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

            <!-- Section moto -->
            <div class="tab-pane fade" id="pills-moto" role="tabpanel" aria-labelledby="pills-moto-tab">
                <div class="col-md-5 mb-3">
                    <select class="custom-select" style="width: 200px;" id="marque" required>
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
                    <input type="text" class="form-control" style="width: 200px;" id="modele" placeholder="Modele" required>

                </div>
                <div class="col-md-5 mb-3">
                    <select class="custom-select  " style="width: 200px;" id="carburant" required>
                        <option value="">Carburant...</option>
                        <option value="Essence">Essence</option>
                        <option value="Diesel">Diesel</option>
                    </select>
                    <div class="invalid-feedback">
                        Selectionné un carburant disponible.
                    </div>
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </div>
            </div>
        </div>
    </article>
</section>

<br><br>
<section class="container">
    <article>
        <h2>Le bonheur à porter de main...</h2>
        <h3 class="blue">Nos meilleurs ventes</h3>
    </article>

    <br><br>
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
    <article>
        <h3 ><span class="blue">Les bonnes affaires </span><span class="badge bg-secondary">New</span></h3>
    </article>

    <br><br>
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
                            Kilomètre : <span class="card-reponse"><?php print$voiture[0]->km;?> km<?php print " ";?></span><br>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="card-prix">Prix : <?php print$voiture[0]->prix;?><?php print " ";?>€</span>
                            <div class="btn-group">
                                <button type="button" onclick="window.location.href='index_.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
                                <button type="button" onclick="window.location.href='index_.php?page=News.php';" class="btn btn-sm btn-outline-secondary btn_card">Reserver</button>
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
                            Kilomètre : <span class="card-reponse"><?php print$voiture[1]->km;?> km<?php print " ";?></span><br>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="card-prix">Prix : <?php print$voiture[1]->prix;?><?php print " ";?>€</span>
                            <div class="btn-group">
                                <button type="button" onclick="window.location.href='index_.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
                                <button type="button" onclick="window.location.href='index_.php?page=News.php';" class="btn btn-sm btn-outline-secondary btn_card">Reserver</button>
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
                            Kilomètre : <span class="card-reponse"><?php print$moto[0]->km;?> km<?php print " ";?></span><br>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="card-prix">Prix : <?php print$moto[0]->prix;?><?php print " ";?>€</span>
                            <div class="btn-group">
                                <button type="button" onclick="window.location.href='index_.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
                                <button type="button" onclick="window.location.href='index_.php?page=News.php';" class="btn btn-sm btn-outline-secondary btn_card">Reserver</button>
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
                            Kilomètre : <span class="card-reponse"><?php print$moto[1]->km;?> km<?php print " ";?></span><br>
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="card-prix">Prix : <?php print$moto[1]->prix;?><?php print " ";?>€</span>
                            <div class="btn-group">
                                <button type="button" onclick="window.location.href='index_.php?page=new.php';" class="btn btn-sm btn-outline-secondary btn_card2">Nouveauté</button>
                                <button type="button" onclick="window.location.href='index_.php?page=News.php';" class="btn btn-sm btn-outline-secondary btn_card">Reserver</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</section>
<br>