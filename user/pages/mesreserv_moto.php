<?php
include('./lib/php/verifier_connexion_user.php');
if(isset($_SESSION['user'])){
    $alert=0;
    $c = new ClientBD($cnx);
    $id_user = $c->get_id_user_reserv($_SESSION['login']);
    if($id_user){
        $liste = new ReservationBD($cnx);
        $reserv = $liste->getliste_reserv_client_moto($id_user);
        if($reserv==null){
            $nbr=0;?>
            <br><br><div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <br><br><h1><b>Désolée..... </b></h1><br>
                        <p class="pg404">
                            Aucune réservation n'a été faite...<br>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="../admin/images/Logo/logo_404.jpg" class="img-fluid" alt="image">
                    </div>
                </div>
            </div><br><br>
            <?php
            $nbr=0;
        } else{
            $nbr = count($reserv);
?>

    <section class="py-5 text-center container titre_page">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h2 class="fw-light titre_page ">Mes réservations de moto</h2>
                <p class="lead text-muted">
                    Voici la liste de toutes vos réservations, vous pouvez modifier la date en nous contactant.
                </p>
                <p>
                    <a href="index_user.php?page=reservvoiture.php" class="btn btn-primary my-2">Réserver une voiture</a>
                    <a href="index_user.php?page=reservmoto.php" class="btn btn-primary my-2">Réserver une moto</a>
                </p>
            </div>
        </div>
    </section>

    <!-- Tableau -->
    <section class=" text-center container">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Date de réservation</th>
                <th scope="col">Marque</th>
                <th scope="col">Modele</th>
                <th scope="col">Carburant</th>
                <th scope="col">Prix</th>
                <th scope="col">Date du rendez-vous</th>
                <th scope="col">Heure du rendez-vous</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $i = 0;
            while($i<$nbr){
                ?>
                <tr>
                    <td><?php print $reserv[$i]->date_reserv;?></td>
                    <td><?php print $reserv[$i]->marque;?></td>
                    <td><?php print $reserv[$i]->modele;?></td>
                    <td><?php print $reserv[$i]->carburant;?></td>
                    <td><?php print $reserv[$i]->prix;?></td>
                    <td><?php print $reserv[$i]->date_rdv;?></td>
                    <td><?php print $reserv[$i]->heure_rdv;?></td>
                </tr>
                <?php
                $i=$i+1;
            }
            ?>
            </tbody>
        </table>
    </section><br><br>

<?php }
}
}
?>


