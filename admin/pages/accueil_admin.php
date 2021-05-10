<?php
include('./lib/php/verifier_connexion.php');
if(isset($_SESSION['admin'])){
date_default_timezone_set("Europe/Brussels");
$datelocal = date("Y-m-d");

$liste = new ReservationBD($cnx);
$reserv = $liste->getreserv_local($datelocal);
if($reserv==null){
    $nbr=0;
} else{
    $nbr = count($reserv);
}
?>

<section class="py-5 text-center container ">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Bienvenue <span class="blue"> <?php print $_SESSION['login']?></span> [Admin]</h2>
        </div>
    </div>
</section>

<section class="container ">
    <div class="card text-center text-black mb-3">
        <div class="card-header titre_reserv">Mes rendez-vous</div>
        <div class="card-body">
            <h3 class="card-title_admin">
                Nous sommes le
                <?php
                date_default_timezone_set("Europe/Brussels");
                setlocale(LC_TIME, 'fr');
                echo strftime('%A %d %B %Y, %H:%M'); // jeudi 11 octobre 2012, 16:03
                ?>
            </h3><br><br>
            <h4 class="titre_reserv">Voici vos réservations de la journée : </h4><br>
            <p>
                <a data-toggle="collapse" href="#rdv" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <button type="button" class="btn btn-primary btn-lg">
                        Listes des reservations du jour
                        <span class="badge bg-danger rounded-pill"> <?php print $nbr;?></span>
                    </button>
                </a>
            </p>
            <div class="collapse" id="rdv">
                <div class="card card-body liste_reserv">
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Id Client</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Téléphone</th>
                            <th scope="col">Id Voiture</th>
                            <th scope="col">Id Moto</th>
                            <th scope="col">Heure du rendez-vous</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $i = 0;
                        while($i<$nbr){
                        ?>
                        <tr>
                            <th scope="row"><?php print $i+1;?></th>
                            <td class="blue"><?php print $reserv[$i]->id_client;?></td>
                            <td class="blue"><?php print $reserv[$i]->nom;?></td>
                            <td class="blue"><?php print $reserv[$i]->prenom;?></td>
                            <td class="blue"><?php print $reserv[$i]->tel;?></td>
                            <td class="blue"><?php print $reserv[$i]->id_voiture;?></td>
                            <td class="blue"><?php print $reserv[$i]->id_moto;?></td>
                            <td class="blue"><?php print $reserv[$i]->heure_rdv;?></td>
                        </tr>
                        <?php
                        $i=$i+1;
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section><br><br><br><br><br><br><br>
<?php } ?>