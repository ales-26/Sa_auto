<?php
$liste_moto = new MotoBD($cnx);
$moto2 = $liste_moto->getMotomarque();
$nbrmoto = count($moto2);
?>
<section class="py-5 text-center container ">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Recherche de moto</h2>
            <p class="lead text-muted">
                Vous pouvez par ici lancer une recherche complète pour une moto.
                Affiner votre recherche au maximum pour, enfin, trouver la moto de vos rêves.
            </p>
        </div>
    </div>
</section>


<form action="index_.php?page=resultat_rech_long_moto.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="marque_moto_rech_log">Marque</label>
                <select class="custom-select d-block w-100" name="marque_moto_rech_log" id="marque_moto_rech_log" required>
                    <option value="">Choisir...</option>
                    <?php
                    for($i=0;$i<$nbrmoto;$i++){
                        ?><option value="<?php print $moto2[$i]->marque;?>"><?php print $moto2[$i]->marque;?></option><?php
                    }
                    ?>
                </select>
            </div>

            <div class="col-md-4 mb-3">
                <label for="model_moto_rech_log">Modele</label>
                <input type="text" class="form-control"  name="model_moto_rech_log" id="model_moto_rech_log" placeholder="Sporter" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="carbu_moto_rech_log">Carburant</label>
                <select class="custom-select d-block w-100"  name="carbu_moto_rech_log" id="carbu_moto_rech_log" required>
                    <option value="">Carburant...</option>
                    <option value="Essence">Essence</option>
                    <option value="Diesel">Diesel</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="annee_moto_rech_log">Annee minimum</label>
                <input type="number" class="form-control"  name="annee_moto_rech_log" id="annee_moto_rech_log" placeholder="2021" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="prix_min_moto_rech_log">Prix minimum </label>
                <input type="number" class="form-control"  name="prix_min_moto_rech_log" id="prix_min_moto_rech_log" placeholder="1 000" required>
            </div>

            <div class="col-md-4 mb-3">
                <label for="prix_max_moto_rech_log">Prix maximum</label>
                <input type="number" class="form-control"  name="prix_max_moto_rech_log" id="prix_max_moto_rech_log" placeholder="30 000" required>
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" id="rechercher_long_moto">Rechercher</button>
    </div>
</form><br><br><br><br><br>