<?php
include('./lib/php/verifier_connexion_user.php');
if(isset($_SESSION['user'])){
    $c = new ClientBD($cnx);
    $id_user = $c->get_id_user_reserv($_SESSION['login']);
    if($id_user){
        $liste = new ClientBD($cnx);
        $client = $liste->getclientbyid($id_user);
    }
?>
<section class="py-5 text-center container ">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Mes informations</h2>
        </div>
    </div>
</section>


<div class="container">
    <div class="row">
        <div class="col-md-2 mb-3"></div>
        <div class="col-md-4 mb-3">
            <label for="nom_client">Nom</label>
            <input type="text" class="form-control" name="nom" id="<?php print $client[0]->nom;?>" value="<?php print $client[0]->nom;?>" required>
        </div>

        <div class="col-md-4 mb-3">
            <label for="prenom_client">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="<?php print $client[0]->prenom;?>" value="<?php print $client[0]->prenom;?>" required>
        </div>
        <div class="col-md-2 mb-3"></div>
    </div>

    <div class="row">
        <div class="col-md-2 mb-3"></div>
        <div class="col-md-8 mb-3">
            <label for="mail_client">mail</label>
            <input type="text" class="form-control" name="mail" id="<?php print $client[0]->mail;?>" value="<?php print $client[0]->mail;?>" required>
        </div>
        <div class="col-md-2 mb-3"></div>
    </div>

    <div class="row">
        <div class="col-md-2 mb-3"></div>
        <div class="col-md-8 mb-3">
            <label for="tel_client">tel</label>
            <input type="text" class="form-control" name="tel" id="<?php print $client[0]->tel;?>" value="<?php print $client[0]->tel;?>" required>
        </div>
        <div class="col-md-2 mb-3"></div>
    </div>

    <div class="row">
        <div class="col-md-2 mb-3"></div>
        <div class="col-md-6 mb-3">
            <label for="rue_client">Rue</label>
            <input type="text" class="form-control" name="rue" id="<?php print $client[0]->rue;?>" value="<?php print $client[0]->rue;?>" required>
        </div>
        <div class="col-md-2 mb-3">
            <label for="numero_client">numero</label>
            <input type="text" class="form-control" name="numero" id="<?php print $client[0]->numero;?>" value="<?php print $client[0]->numero;?>" required>
        </div>
        <div class="col-md-2 mb-3"></div>
    </div>

    <div class="row">
        <div class="col-md-2 mb-3"></div>
        <div class="col-md-3 mb-3">
            <label for="cp_client">cp</label>
            <input type="text" class="form-control" name="cp" id="<?php print $client[0]->cp;?>" value="<?php print $client[0]->cp;?>" required>
        </div>
        <div class="col-md-5 mb-3">
            <label for="ville_client">ville</label>
            <input type="text" class="form-control" name="ville" id="<?php print $client[0]->ville;?>" value="<?php print $client[0]->ville;?>" required>
        </div>
        <div class="col-md-2 mb-3"></div>
    </div><br><br>
    <div class="row">
        <div class="col-md-2 mb-3"></div>
        <button class="col-md-8 mb-3 btn btn-primary btn-lg btn-block" type="submit" name="rechercher_voiture" id="rechercher_voiture">Mis à jour</button>
    </div>
</div><br><br><br><br>

<?php } ?>