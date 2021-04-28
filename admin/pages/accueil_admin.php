<?php
include('./lib/php/verifier_connexion.php');
if(isset($_SESSION['admin'])){
    $alert=0;
    $liste_voit = new VoitureBD($cnx);
    $voiture2 = $liste_voit->getVoituremarque();
    $nbrvoit = count($voiture2);
    $liste_moto = new MotoBD($cnx);
    $moto2 = $liste_moto->getMotomarque();
    $nbrmoto = count($moto2);
    include ('./lib/php/ressource_admin_php.php');
?>
<section class="py-5 text-center container ">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Bienvenue <span class="blue"> <?php print $_SESSION['login']?></span> [Admin]</h2>
        </div>
    </div>
</section>

<section class=" text-center accueil_admin titre_page">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active t" id="pills-voiture-tab" data-toggle="pill" href="#pills-voiture" role="tab" aria-controls="pills-voiture" aria-selected="true">Voiture</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-moto" role="tab" aria-controls="pills-moto" aria-selected="false">Moto</a>
        </li>
    </ul>


    <div class="tab-content titre_page" id="pills-tabContent">
        <!-- Voiture -->
        <div class="tab-pane fade show active" id="pills-voiture" role="tabpanel" aria-labelledby="pills-voiture-tab">
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="list-group-item list-group-item-action active" id="v-pills-ajou_new-tab" data-toggle="pill" href="#v-pills-ajou_new" role="tab" aria-controls="v-pills-ajou_new" aria-selected="true">Ajouter voiture dans "NEW"</a>
                        <a class="list-group-item list-group-item-action" id="v-pills-ajou_voit-tab" data-toggle="pill" href="#v-pills-ajou_voit" role="tab" aria-controls="v-pills-ajou_voit" aria-selected="false">Ajouter voiture dans "VOITURE"</a>
                        <a class="list-group-item list-group-item-action" id="v-pills-modif-tab" data-toggle="pill" href="#v-pills-modif" role="tab" aria-controls="v-pills-modif" aria-selected="false">Modifier prix voiture</a>
                        <a class="list-group-item list-group-item-action" id="v-pills-supp_new-tab" data-toggle="pill" href="#v-pills-supp_new" role="tab" aria-controls="v-pills-supp_new" aria-selected="false">Supprimer voiture dans "NEW"</a>
                        <a class="list-group-item list-group-item-action" id="v-pills-supp_voit-tab" data-toggle="pill" href="#v-pills-supp_voit" role="tab" aria-controls="v-pills-supp_voit" aria-selected="false">Supprimer voiture dans "VOITURE"</a>
                    </div>
                </div>
                <div class="col-9 ">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- ajout new -->
                        <div class="tab-pane  fade show active" id="v-pills-ajou_new" role="tabpanel" aria-labelledby="v-pills-ajou_new-tab">
                            <h2 class="fw-light titre_page blue">Ajouter New </h2><br><br>
                            <p class="lead text-muted">
                                En ajoutant la voiture sur la page new, elle sera aussi visible sur la page voiture !!
                            </p><br>
                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="marque_voiture">Marque</label>
                                            <input type="text" class="form-control" id="marque_voiture" name="marque_voiture" placeholder="Volkswagen" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="model_voiture">Modele</label>
                                            <input type="text" class="form-control" id="model_voiture" name="model_voiture" placeholder="Golf" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="carbu_voiture">Carburant</label>
                                            <select class="custom-select d-block w-100" id="carbu_voiture" name="carbu_voiture" required>
                                                <option value="default">Carburant...</option>
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
                                            <input type="number" class="form-control" id="puissance_voiture" name="puissance_voiture" placeholder="75" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="annee_voiture">Annee</label>
                                            <input type="number" class="form-control" id="annee_voiture" name="annee_voiture" placeholder="2021" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="km_voiture">Kilométre</label>
                                            <input type="number" class="form-control" id="km_voiture" name="km_voiture" placeholder="120 000" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label>Boite de vitesse</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Boite_vitesse" id="automatique_voiture" value="Automatique" checked>
                                                <label class="form-check-label" for="automatique_voiture">Automatique</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Boite_vitesse" id="manuel_voiture" value="Manuel">
                                                <label class="form-check-label" for="manuel_voiture">Manuel</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="prix_voiture">Prix </label>
                                            <input type="number" class="form-control" id="prix_voiture" name="prix_voiture" placeholder="1 000" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="image_voiture">Photo voiture</label>
                                                <input type="file" id="image_voiture"  class="form-control-file" name="image_voiture"
                                                       accept=".jpg, .jpeg, .png" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit" name="submit" value="Envoyer">Valider</button>
                                </div><br>
                            </form><br>
                        </div>

                        <!-- ajout voiture -->
                        <div class="tab-pane fade" id="v-pills-ajou_voit" role="tabpanel" aria-labelledby="v-pills-ajou_voit-tab">
                            <h2 class="fw-light titre_page blue ">Ajouter Voiture </h2><br><br>
                            <p class="lead text-muted">
                                En ajoutant la voiture sur la page voiture, elle ne sera pas visible sur la page new !!
                            </p><br>
                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="marque_voiture2">Marque</label>
                                            <input type="text" class="form-control" id="marque_voiture2" name="marque_voiture2" placeholder="Volkswagen" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="model_voiture2">Modele</label>
                                            <input type="text" class="form-control" id="model_voiture2" name="model_voiture2" placeholder="Golf" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="carbu_voiture2">Carburant</label>
                                            <select class="custom-select d-block w-100" id="carbu_voiture2" name="carbu_voiture2" required>
                                                <option value="default">Carburant...</option>
                                                <option value="Essence">Essence</option>
                                                <option value="Diesel">Diesel</option>
                                                <option value="Electrique">Electrique</option>
                                                <option value="CNG">CNG</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="puissance_voiture2">Puissance</label>
                                            <input type="number" class="form-control" id="puissance_voiture2" name="puissance_voiture2" placeholder="75" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="annee_voiture2">Annee</label>
                                            <input type="number" class="form-control" id="annee_voiture2" name="annee_voiture2" placeholder="2021" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="km_voiture2">Kilométre</label>
                                            <input type="number" class="form-control" id="km_voiture2" name="km_voiture2" placeholder="120 000" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label>Boite de vitesse</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Boite_vitesse2" id="automatique_voiture" value="Automatique" checked>
                                                <label class="form-check-label" for="automatique_voiture">Automatique</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="Boite_vitesse2" id="manuel_voiture" value="Manuel">
                                                <label class="form-check-label" for="manuel_voiture">Manuel</label>
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="prix_voiture2">Prix </label>
                                            <input type="number" class="form-control" id="prix_voiture2" name="prix_voiture2" placeholder="1 000" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="image_voiture">Photo voiture</label>
                                                <input type="file" id="image_voiture"  class="form-control-file" name="image_voiture"
                                                       accept=".jpg, .jpeg, .png" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit" name="submit2" value="Envoyer">Valider</button>
                                </div>
                            </form><br>
                        </div>

                        <!-- modif -->
                        <div class="tab-pane fade" id="v-pills-modif" role="tabpanel" aria-labelledby="v-pills-modif-tab">
                            <h2 class="fw-light titre_page blue ">Modifier prix  </h2><br><br>
                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="get">
                                 <div class="container">
                                     <div class="row">
                                         <div class="col-md-4 mb-3">
                                             <label for="marque_voiture_modif_admin">Marque</label>
                                             <select class="custom-select d-block w-100" id="marque_voiture_modif_admin" name="marque_voiture_modif_admin" >
                                                 <option value="">Choisir...</option>
                                                 <?php
                                                 for($i=0;$i<$nbrvoit;$i++){
                                                     ?><option value="<?php print $voiture2[$i]->marque;?>"><?php print $voiture2[$i]->marque;?></option><?php
                                                 }
                                                 ?>
                                             </select>
                                         </div>
                                         <div class="col-md-4 mb-3">
                                             <label for="model_voiture_modif_admin">Modele</label>
                                             <input type="text" class="form-control" id="model_voiture_modif_admin"  name="model_voiture_modif_admin" placeholder="Golf">
                                         </div>
                                         <div class="col-md-4 mb-3">
                                             <br>
                                             <button class="btn btn-primary btn-lg btn-block" type="button" id="submit3" name="submit3">Valider</button>
                                         </div>
                                     </div>
                                 </div>
                             </form><br><br><br>

                            <div id="table_recherche">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Marque</th>
                                        <th scope="col">Modele</th>
                                        <th scope="col">Km</th>
                                        <th scope="col">Prix</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td id="id_voiture_rep"></td>
                                        <td id="marque_voiture_rep"></td>
                                        <td id="model_voiture_rep"></td>
                                        <td id="km_voiture_rep"></td>
                                        <td id="prix_voiture_rep"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><br><br><br>

                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="container" id="modif_prix_voit">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="id_voiture4">ID</label>
                                            <input type="text" class="form-control" id="id_voiture4" name="id_voiture4" placeholder="25" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="new_prix_voiture4">Nouveau Prix</label>
                                            <input type="text" class="form-control" id="new_prix_voiture4" name="new_prix_voiture4" placeholder="250000" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit4" name="submit4" value="Envoyer">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- supprimer new -->
                        <div class="tab-pane fade" id="v-pills-supp_new" role="tabpanel" aria-labelledby="v-pills-supp_new-tab">
                            <h2 class="fw-light titre_page blue ">Supprimer New</h2><br><br>
                            <p class="lead text-muted">
                                En supprimant la voiture de la page New, cela n'affectera pas la page voiture !
                            </p><br>
                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="get">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="marque_voiture_supp_n_admin">Marque</label>
                                            <select class="custom-select d-block w-100" id="marque_voiture_supp_n_admin" name="marque_voiture_supp_n_admin" >
                                                <option value="">Choisir...</option>
                                                <?php
                                                for($i=0;$i<$nbrvoit;$i++){
                                                    ?><option value="<?php print $voiture2[$i]->marque;?>"><?php print $voiture2[$i]->marque;?></option><?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="model_voiture_supp_n_admin">Modele</label>
                                            <input type="text" class="form-control" id="model_voiture_supp_n_admin"  name="model_voiture_supp_n_admin" placeholder="Golf">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-block" type="button" id="submit5" name="submit5">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form><br><br><br>

                            <div id="table_recherche2">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Marque</th>
                                        <th scope="col">Modele</th>
                                        <th scope="col">Km</th>
                                        <th scope="col">Prix</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td id="id_voiture_rep2"></td>
                                        <td id="marque_voiture_rep2"></td>
                                        <td id="model_voiture_rep2"></td>
                                        <td id="km_voiture_rep2"></td>
                                        <td id="prix_voiture_rep2"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><br><br><br>

                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="container" id="supp_new_prix_voit">
                                    <div class="row">
                                        <div class="col-md-4 mb-3"><br></div>
                                        <div class="col-md-4 mb-3">
                                            <label for="id_voiture6">Id</label>
                                            <input type="text" class="form-control" id="id_voiture6" name="id_voiture6" placeholder="25" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit6" name="submit6" value="Envoyer">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- supprimer voiture -->
                        <div class="tab-pane fade" id="v-pills-supp_voit" role="tabpanel" aria-labelledby="v-pills-supp_voit-tab">
                            <h2 class="fw-light titre_page blue ">Supprimer Voiture</h2><br><br>
                            <p class="lead text-muted">
                                En supprimant la voiture de la page Voiture, vous la supprimer totalement !
                            </p><br>
                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="get">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="marque_voiture_supp_admin">Marque</label>
                                            <select class="custom-select d-block w-100" id="marque_voiture_supp_admin" name="marque_voiture_supp_admin" >
                                                <option value="">Choisir...</option>
                                                <?php
                                                for($i=0;$i<$nbrvoit;$i++){
                                                    ?><option value="<?php print $voiture2[$i]->marque;?>"><?php print $voiture2[$i]->marque;?></option><?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="model_voiture_supp_admin">Modele</label>
                                            <input type="text" class="form-control" id="model_voiture_supp_admin"  name="model_voiture_supp_admin" placeholder="Golf">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-block" type="button" id="submit7" name="submit7">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form><br><br><br>

                            <div id="table_recherche3">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Marque</th>
                                        <th scope="col">Modele</th>
                                        <th scope="col">Km</th>
                                        <th scope="col">Prix</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td id="id_voiture_rep3"></td>
                                        <td id="marque_voiture_rep3"></td>
                                        <td id="model_voiture_rep3"></td>
                                        <td id="km_voiture_rep3"></td>
                                        <td id="prix_voiture_rep3"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><br><br><br>

                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="container" id="supp_prix_voit">
                                    <div class="row">
                                        <div class="col-md-4 mb-3"><br></div>
                                        <div class="col-md-4 mb-3">
                                            <label for="id_voiture8">Id</label>
                                            <input type="text" class="form-control" id="id_voiture8" name="id_voiture8" placeholder="25" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit8" name="submit8" value="Envoyer">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Moto -->
        <div class="tab-pane fade" id="pills-moto" role="tabpanel" aria-labelledby="pills-moto-tab">
            <div class="row">
                <div class="col-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="list-group-item list-group-item-action active" id="v-pills-ajou_new_moto-tab" data-toggle="pill" href="#v-pills-ajou_new_moto" role="tab" aria-controls="v-pills-ajou_new_moto" aria-selected="true">Ajouter moto dans "NEW"</a>
                        <a class="list-group-item list-group-item-action" id="v-pills-ajou_moto-tab" data-toggle="pill" href="#v-pills-ajou_moto" role="tab" aria-controls="v-pills-ajou_moto" aria-selected="false">Ajouter moto dans "MOTO"</a>
                        <a class="list-group-item list-group-item-action" id="v-pills-modif_moto-tab" data-toggle="pill" href="#v-pills-modif_moto" role="tab" aria-controls="v-pills-modif_moto" aria-selected="false">Modifier prix moto</a>
                        <a class="list-group-item list-group-item-action" id="v-pills-supp_new_moto-tab" data-toggle="pill" href="#v-pills-supp_new_moto" role="tab" aria-controls="v-pills-supp_new_moto" aria-selected="false">Supprimer moto dans "NEW"</a>
                        <a class="list-group-item list-group-item-action" id="v-pills-supp_moto-tab" data-toggle="pill" href="#v-pills-supp_moto" role="tab" aria-controls="v-pills-supp_moto" aria-selected="false">Supprimer moto dans "MOTO"</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <!-- ajout new -->
                        <div class="tab-pane fade show active" id="v-pills-ajou_new_moto" role="tabpanel" aria-labelledby="v-pills-ajou_new_moto-tab">
                            <h2 class="fw-light titre_page blue ">Ajouter New </h2><br><br>
                            <p class="lead text-muted">
                                En ajoutant la moto sur la page new, elle sera aussi visible sur la page moto !!
                            </p><br>
                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="marque_moto">Marque</label>
                                            <input type="text" class="form-control" id="marque_moto" name="marque_moto" placeholder="Harley Davidson" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="model_moto">Modele</label>
                                            <input type="text" class="form-control" id="model_moto" name="model_moto" placeholder="Sporter" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="carbu_moto">Carburant</label>
                                            <select class="custom-select d-block w-100" id="carbu_moto" name="carbu_moto" required>
                                                <option value="default">Carburant...</option>
                                                <option value="Essence">Essence</option>
                                                <option value="Diesel">Diesel</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="puissance_moto">Puissance</label>
                                            <input type="number" class="form-control" id="puissance_moto" name="puissance_moto" placeholder="75" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="annee_moto">Annee</label>
                                            <input type="number" class="form-control" id="annee_moto" name="annee_moto" placeholder="2021" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="km_moto">Kilométre</label>
                                            <input type="number" class="form-control" id="km_moto" name="km_moto" placeholder="120 000" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="prix_moto">Prix </label>
                                            <input type="number" class="form-control" id="prix_moto" name="prix_moto" placeholder="1 000" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="image_moto">Photo voiture</label>
                                                <input type="file" id="image_moto"  class="form-control-file" name="image_moto"
                                                       accept=".jpg, .jpeg, .png" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit_moto" name="submit_moto" value="Envoyer">Valider</button>
                                </div><br>
                            </form><br>
                        </div>

                        <!-- ajout moto -->
                        <div class="tab-pane fade" id="v-pills-ajou_moto" role="tabpanel" aria-labelledby="v-pills-ajou_moto-tab">
                            <h2 class="fw-light titre_page blue ">Ajouter Moto </h2><br><br>
                            <p class="lead text-muted">
                                En ajoutant la moto sur la page moto, elle ne sera pas visible sur la page new !!
                            </p><br>
                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="marque_moto2">Marque</label>
                                            <input type="text" class="form-control" id="marque_moto2" name="marque_moto2" placeholder="Harley Davidson" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="model_moto2">Modele</label>
                                            <input type="text" class="form-control" id="model_moto2" name="model_moto2" placeholder="Sporter" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="carbu_moto2">Carburant</label>
                                            <select class="custom-select d-block w-100" id="carbu_moto2" name="carbu_moto2" required>
                                                <option value="default">Carburant...</option>
                                                <option value="Essence">Essence</option>
                                                <option value="Diesel">Diesel</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="puissance_moto2">Puissance</label>
                                            <input type="number" class="form-control" id="puissance_moto2" name="puissance_moto2" placeholder="75" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="annee_moto2">Annee</label>
                                            <input type="number" class="form-control" id="annee_moto2" name="annee_moto2" placeholder="2021" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <label for="km_moto2">Kilométre</label>
                                            <input type="number" class="form-control" id="km_moto2" name="km_moto2" placeholder="120 000" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="prix_moto2">Prix </label>
                                            <input type="number" class="form-control" id="prix_moto2" name="prix_moto2" placeholder="1 000" required>
                                        </div>

                                        <div class="col-md-4 mb-3">
                                            <div class="form-group">
                                                <label for="image_moto">Photo voiture</label>
                                                <input type="file" id="image_moto"  class="form-control-file" name="image_moto"
                                                       accept=".jpg, .jpeg, .png" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit_moto2" name="submit_moto2" value="Envoyer">Valider</button>
                                </div>
                            </form><br>
                        </div>

                        <!-- modif -->
                        <div class="tab-pane fade" id="v-pills-modif_moto" role="tabpanel" aria-labelledby="v-pills-modif_moto-tab">
                            <h2 class="fw-light titre_page blue ">Modifier prix  </h2><br><br>
                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="get">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="marque_moto_modif_admin">Marque</label>
                                            <select class="custom-select d-block w-100" id="marque_moto_modif_admin" name="marque_moto_modif_admin" >
                                                <option value="">Choisir...</option>
                                                <?php
                                                for($i=0;$i<$nbrmoto;$i++){
                                                    ?><option value="<?php print $moto2[$i]->marque;?>"><?php print $moto2[$i]->marque;?></option><?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="model_moto_modif_admin">Modele</label>
                                            <input type="text" class="form-control" id="model_moto_modif_admin"  name="model_moto_modif_admin" placeholder="Sporter">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-block" type="button" id="submit_moto3" name="submit_moto3">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form><br><br><br>

                            <div id="table_recherche_moto">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Marque</th>
                                        <th scope="col">Modele</th>
                                        <th scope="col">Km</th>
                                        <th scope="col">Prix</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td id="id_moto_rep"></td>
                                        <td id="marque_moto_rep"></td>
                                        <td id="model_moto_rep"></td>
                                        <td id="km_moto_rep"></td>
                                        <td id="prix_moto_rep"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><br><br><br>

                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="container" id="modif_prix_moto">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="id_moto4">Id</label>
                                            <input type="text" class="form-control" id="id_moto4" name="id_moto4" placeholder="25" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="new_prix_moto4">Nouveau Prix</label>
                                            <input type="text" class="form-control" id="new_prix_moto4" name="new_prix_moto4" placeholder="250000" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit_moto4" name="submit_moto4" value="Envoyer">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- supprimer new -->
                        <div class="tab-pane fade" id="v-pills-supp_new_moto" role="tabpanel" aria-labelledby="v-pills-supp_new_moto-tab">
                            <h2 class="fw-light titre_page blue ">Supprimer New</h2><br><br>
                            <p class="lead text-muted">
                                En supprimant la moto de la page New, cela n'affectera pas la page voiture !
                            </p><br>
                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="get">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="marque_moto_n_supp_admin">Marque</label>
                                            <select class="custom-select d-block w-100" id="marque_moto_n_supp_admin" name="marque_voiture_moto_n_supp_admin" >
                                                <option value="">Choisir...</option>
                                                <?php
                                                for($i=0;$i<$nbrmoto;$i++){
                                                    ?><option value="<?php print $moto2[$i]->marque;?>"><?php print $moto2[$i]->marque;?></option><?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="model_moto_n_supp_admin">Modele</label>
                                            <input type="text" class="form-control" id="model_moto_n_supp_admin"  name="model_moto_n_supp_admin" placeholder="Sporter">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-block" type="button" id="submit_moto5" name="submit_moto5">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form><br><br><br>

                            <div id="table_recherche_moto2">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Marque</th>
                                        <th scope="col">Modele</th>
                                        <th scope="col">Km</th>
                                        <th scope="col">Prix</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td id="id_moto_rep2"></td>
                                        <td id="marque_moto_rep2"></td>
                                        <td id="model_moto_rep2"></td>
                                        <td id="km_moto_rep2"></td>
                                        <td id="prix_moto_rep2"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><br><br><br>

                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="container" id="supp_new_prix_moto">
                                    <div class="row">
                                        <div class="col-md-4 mb-3"><br></div>
                                        <div class="col-md-4 mb-3">
                                            <label for="id_moto6">Id</label>
                                            <input type="text" class="form-control" id="id_moto6" name="id_moto6" placeholder="25" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit_moto6" name="submit_moto6" value="Envoyer">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- supprimer moto -->
                        <div class="tab-pane fade" id="v-pills-supp_moto" role="tabpanel" aria-labelledby="v-pills-supp_moto-tab">
                            <h2 class="fw-light titre_page blue ">Supprimer Moto</h2><br><br>
                            <p class="lead text-muted">
                                En supprimant la moto de la page Moto, vous la supprimer totalement !
                            </p><br>
                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="get">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="marque_moto_supp_admin">Marque</label>
                                            <select class="custom-select d-block w-100" id="marque_moto_supp_admin" name="marque_moto_supp_admin" >
                                                <option value="">Choisir...</option>
                                                <?php
                                                for($i=0;$i<$nbrmoto;$i++){
                                                    ?><option value="<?php print $moto2[$i]->marque;?>"><?php print $moto2[$i]->marque;?></option><?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="model_moto_supp_admin">Modele</label>
                                            <input type="text" class="form-control" id="model_moto_supp_admin"  name="model_moto_supp_admin" placeholder="Sporter">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-block" type="button" id="submit_moto7" name="submit_moto7">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form><br><br><br>

                            <div id="table_recherche_moto3">
                                <table class="table">
                                    <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Marque</th>
                                        <th scope="col">Modele</th>
                                        <th scope="col">Km</th>
                                        <th scope="col">Prix</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td id="id_moto_rep3"></td>
                                        <td id="marque_moto_rep3"></td>
                                        <td id="model_moto_rep3"></td>
                                        <td id="km_moto_rep3"></td>
                                        <td id="prix_moto_rep3"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div><br><br><br>

                            <form action="<?php print $_SERVER['PHP_SELF'];?>" method="POST">
                                <div class="container" id="supp_prix_moto">
                                    <div class="row">
                                        <div class="col-md-4 mb-3"><br></div>
                                        <div class="col-md-4 mb-3">
                                            <label for="id_moto8">Id</label>
                                            <input type="text" class="form-control" id="id_moto8" name="id_moto8" placeholder="25" required>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <br>
                                            <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit_moto8" name="submit_moto8" value="Envoyer">Valider</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Alert -->
        <?php if($alert == 1){?>
            <div id="alert" class="alert alert-success" role="alert" > Transaction réussi !</div>
        <?php } else if($alert == 2) { ?>
            <div id="alert" class="alert alert-danger" role="alert"> Transaction refusé !</div> <?php } ?>
    </div>
</section>



<?php } ?>


