<?php
include('./lib/php/verifier_connexion.php');

if(isset($_SESSION['admin'])){
?>

<section class="py-5 text-center container titre_page">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Les clients</h2>
            <p class="lead text-muted">
                <br>Voici la recherche de tous les membre affilié à notre site web.
                Faite une recherche par numero de téléphone, ou afficher tous pour tus voir.
            </p><br>
            <p>
                <form action="<?php print $_SERVER['PHP_SELF'];?>" method="get">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5 mb-4">
                                <label for="num_client">Numéro de gsm client</label>
                                <input type="text" class="form-control" id="num_client" name="num_client" placeholder="0499/**/**/**" required>
                            </div>
                            <div class="col-md-4 mb-4">
                                <br>
                                <button class="btn btn-primary btn-lg btn-block" type="button" id="submit_client" name="submit_client">Rechercher</button>
                            </div>
                            <div class="col-md-3 mb-4">
                                <br>
                                <button class="btn btn-primary btn-lg btn-block" type="button" id="submit_allclient" name="submit_allclient">Tous</button>
                            </div>
                        </div>
                    </div>
                </form>
            </p>
        </div>
    </div>
</section>

<section class="text-center container">
    <div id="table_client" style="visibility:hidden;">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Status</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Mail</th>
                <th scope="col">Rue</th>
                <th scope="col">Numero</th>
                <th scope="col">Code postal</th>
                <th scope="col">Ville</th>
            </tr>
            </thead>
            <tbody>
            <tr class="client">
                <td id="id_client"></td>
                <td id="statut_client"></td>
                <td id="nom_client"></td>
                <td id="prenom_client"></td>
                <td id="tel_client"></td>
                <td id="mail_client"></td>
                <td id="rue_client"></td>
                <td id="numero_client"></td>
                <td id="cp_client"></td>
                <td id="ville_client"></td>
            </tr>
            </tbody>
        </table>
    </div><br><br>
</section>
<?php } ?>