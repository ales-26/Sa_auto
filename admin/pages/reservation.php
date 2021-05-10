<?php
include('./lib/php/verifier_connexion.php');

if(isset($_SESSION['admin'])){
    ?>

    <section class="py-5 text-center container titre_page">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-light titre_page ">Les réservation</h2>
                <p class="lead text-muted">
                    <br>Voici la liste des réservations de tous les clients
                </p><br>
                <form action="<?php print $_SERVER['PHP_SELF'];?>" method="get">
                    <div class="">
                        <div class="row">
                            <div class="col-md-12 mb-4">
                                <label for="num_client_reserv">Numéro de gsm client</label>
                                <input type="text" class="form-control" id="num_client_reserv" name="num_client_reserv" placeholder="0499/**/**/**" required>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-4">
                                <br>
                                <button class="btn btn-primary btn-lg btn-block" type="button" id="submit_reserv" name="submit_reserv">Rechercher</button>
                            </div>
                            <div class="col-md-4 mb-4">
                                <br>
                                <button class="btn btn-primary btn-lg btn-block text-center" type="button" id="submit_allreserv" name="submit_allreserv">Tous</button>
                            </div>
                            <div class="col-md-4 mb-4">
                                <br>
                                <button class="btn btn-primary btn-lg btn-block" onclick="window.location.href='pages/print_reservation.php';" type="button" id="submit_imprim" name="submit_imprim"><i class="far fa-file-pdf"></i> Imprimer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section class="text-center container">
        <div id="table_reserv" style="visibility:hidden;">
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">ID Reservation</th>
                    <th scope="col">ID Client</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">ID Voiture</th>
                    <th scope="col">ID Moto</th>
                    <th scope="col">Date de reservation</th>
                    <th scope="col">Date du rendez-vous</th>
                    <th scope="col">Heure du rendez-vous</th>
                </tr>
                </thead>
                <tbody>
                <tr class="client">
                    <td id="id_reserv"></td>
                    <td id="id_client_reserv"></td>
                    <td id="nom_client_reserv"></td>
                    <td id="prenom_client_reserv"></td>
                    <td id="id_voiture_reserv"></td>
                    <td id="id_moto_reserv"></td>
                    <td id="date_reserv_reserv"></td>
                    <td id="date_rdv_reserv"></td>
                    <td id="heure_rdv_reserv"></td>
                </tr>
                </tbody>
            </table>
        </div><br><br>
    </section>
<?php } ?>