<?php
include('./lib/php/verifier_connexion_user.php');
if(isset($_SESSION['user'])){
$alert=0;
$liste_voit = new VoitureBD($cnx);
$voiture2 = $liste_voit->getVoituremarque();
$nbrvoit = count($voiture2);

if(isset($_POST['submit_valid_resv_voit'])){
    extract($_POST,EXTR_OVERWRITE);
    /* ajout de la reservation*/
    $c = new ClientBD($cnx);
    $id_user = $c->get_id_user_reserv($_SESSION['login']);
    if($id_user){
        $aj = new ReservationBD($cnx);
        $reserv = $aj->Reservation_voit_Ajout($id_user,$id_reserv_voiture,$date_rdv,$heure_rdv);
        $alert=1;
    }else{ $alert=2;}
}
?>
<section class="py-5 text-center container titre_page">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Essai pour une voiture</h2>
            <p class="lead text-muted">
                Vous pouvez, ici, réservez un rendez-vous pour un essai de voiture.<br>
                Il vous suffit d’entrer sa marque et son modèle pour la réserver.
            </p>
        </div>
    </div>
</section>

<form action="<?php print $_SERVER['PHP_SELF'];?>" method="get">
    <div class="container titre_page">
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="marque_voiture">Marque</label>
                <select class="custom-select d-block w-100" id="marque_voiture" name="marque_voiture" >
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
                <input type="text" class="form-control" id="model_voiture"  name="model_voiture" placeholder="Golf">
            </div>
            <div class="col-md-4 mb-3">
                <br>
                <button class="btn btn-primary btn-lg btn-block" type="button" id="submit_rech_reserv_voit" name="submit_rech_reserv_voit">Rechercher</button>
            </div>
        </div>
        <?php if($alert == 1){?>
            <div id="alert" class="alert alert-success" role="alert" > Transaction réussi !</div>
        <?php } else if($alert == 2) { ?>
            <div id="alert" class="alert alert-danger" role="alert"> Transaction refusé !</div> <?php } ?>
    </div>
</form><br><br><br>

<section class="text-center container titre_page">
    <div id="table_reserv_voit" style="visibility:hidden;" >
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
                <td id="id_voiture_reserv"></td>
                <td id="marque_voit_reserv"></td>
                <td id="model_voit_reserv"></td>
                <td id="km_voiture_reserv"></td>
                <td id="prix_voiture_reserv"></td>
            </tr>
            </tbody>
        </table>
    </div><br><br><br>
</section>

<form action="<?php print $_SERVER['PHP_SELF'];?>" method="POST">
    <div class="container" id="aj_reserv_voit" style="visibility:hidden;">
        <div class="row">
            <div class="col-md-3 mb-3">
                <label for="id_reserv_voiture">ID Voiture</label>
                <input type="text" class="form-control" id="id_reserv_voiture" name="id_reserv_voiture" placeholder="25" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="date_rdv">Date du rendez-vous</label><br>
                <input class="form-control" id="date_rdv" name="date_rdv" type="date">
            </div>
            <div class="col-md-2 mb-3">
                <label for="heure_rdv">Heure du rendez-vous</label><br>
                <input class="form-control" id="date_rdv" name="heure_rdv" type="time">
            </div>
            <div class="col-md-3 mb-3">
                <br>
                <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit_valid_resv_voit" name="submit_valid_resv_voit" value="Envoyer">Valider</button>
            </div>
        </div>
    </div>
</form><br><br><br>


<?php } ?>