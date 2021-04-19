<?php
$liste_voit = new VoitureBD($cnx);
$voiture = $liste_voit->getNewVoiture();
$nbr = count($voiture);
$voiture2 = $liste_voit->getVoituremarque();
$nbrvoit = count($voiture2);
?>
<section class="py-5 text-center container ">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Recherche de voiture </h2>
            <p class="lead text-muted">
                Vous pouvez par ici lancé une recherche complete pour une voiture.
                Afinnée votre recherche au maximum pour enfin trouver la voiture de vos rêves.
            </p>
        </div>
    </div>
</section>


<form action="<?php print $_SERVER['PHP_SELF']; ?>" method="get">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="marque">Marque</label>
                <select class="custom-select d-block w-100" id="marque_voiture" required>
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
                <input type="text" class="form-control" id="model_voiture" placeholder="Golf" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="carbu_voiture">Carburant</label>
                <select class="custom-select d-block w-100" id="carbu_voiture" >
                    <option value="">Carburant...</option>
                    <option value="Essence">Essence</option>
                    <option value="Diesel">Diesel</option>
                    <option value="Electrique">Electrique</option>
                    <option value="CNG">CNG</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="puissance_voiture">Puissance</label>
                <input type="number" class="form-control" id="puissance_voiture" placeholder="75">
            </div>

            <div class="col-md-4 mb-3">
                <label for="annee_voiture">Annee</label>
                <input type="number" class="form-control" id="annee_voiture" placeholder="2021">
            </div>

            <div class="col-md-4 mb-3">
                <label for="km_voiture">Kilométre</label>
                <input type="number" class="form-control" id="km_voiture" placeholder="120 000">
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>Boite de vitesse</label>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="automatique_voiture">
                    <label class="custom-control-label" for="automatique_voiture">Automatique</label>
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="manuel_voiture">
                    <label class="custom-control-label" for="manuel_voiture">Manuel</label>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <label for="prix_min_voiture">Prix minimum </label>
                <input type="number" class="form-control" id="prix_min_voiture" placeholder="1 000">
            </div>

            <div class="col-md-4 mb-3">
                <label for="prix_max_voiture">Prix maximum</label>
                <input type="number" class="form-control" id="prix_max_voiture" placeholder="30 000">
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" id="rechercher_voiture">Rechercher</button>
    </div>
</form><br>