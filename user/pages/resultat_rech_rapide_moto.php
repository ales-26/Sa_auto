<?php
include('./lib/php/verifier_connexion_user.php');
if(isset($_SESSION['user'])){


$marque = $_POST['marque_moto'];
$modele = $_POST['model_moto'];
$carbu = $_POST['carbu_moto'];

$liste = new MotoBD($cnx);
$moto = $liste->getrecherche_rapide_moto($marque,$modele,$carbu);
if($moto==null){;
    $nbr=0;?>
    <br><br><div class="container">
        <div class="row">
            <div class="col-lg-6">
                <br><br><h1><b>Désolée..... </b></h1><br>
                <p class="pg404">
                    Aucune voiture avec ces caractéristiques trouvés ...<br>
                </p>
            </div>
            <div class="col-lg-6">
                <img src="../admin/images/Logo/logo_404.jpg" class="img-fluid" alt="image">
            </div>
        </div>
    </div><br><br>
    <?php
} else{
    $nbr = count($moto);
    ?>

<section class="py-5 text-center container titre_page">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Résultats de la recherche</h2>
            <p class="lead text-muted">
                <?php print $nbr ?> moto trouvé
            </p>
        </div>
    </div>
</section>

<?php
$i = 0;
while($i<$nbr){
    if ($i<$nbr){?>

<section class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <?php $nbr = count($moto); ?>
            <div class="card">
                <img src="../admin/images/moto/<?php print$moto[$i]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
                <div class="card-body">
                    <h5 class="card-title">
                        <?php print $moto[$i]->marque;?><?php print " ";?>
                        <?php  print$moto[$i]->modele; ?>
                    </h5>
                    <p class="card-text">
                        Carburant : <span class="card-reponse"><?php print$moto[$i]->carburant;?><?php print " ";?></span><br>
                        Année : <span class="card-reponse"><?php print$moto[$i]->annee;?><?php print " ";?></span><br>
                        Puissance : <span class="card-reponse"><?php print$moto[$i]->puissance;?> ch<?php print " ";?></span><br>
                        Kilomètre : <span class="card-reponse"><?php print  $format = number_format( $moto[$i]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="card-prix">Prix : <?php print  $format = number_format( $moto[$i]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                        <div class="btn-group">
                            <button type="button" onclick="window.location.href='index_user.php?page=reservmoto.php';" class="btn btn-sm btn-outline-secondary btn_card">Essayer</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <?php
    }
    $i=$i+1;
    if ($i<$nbr){?>
    <div class="col">
        <?php $nbr = count($moto); ?>
        <div class="card">
            <img src="../admin/images/moto/<?php print$moto[$i]->nom_image?>" width="250" height="400" class="card-img-top " alt="images voiture">
            <div class="card-body">
                <h5 class="card-title">
                    <?php print $moto[$i]->marque;?><?php print " ";?>
                    <?php  print$moto[$i]->modele; ?>
                </h5>
                <p class="card-text">
                    Carburant : <span class="card-reponse"><?php print$moto[$i]->carburant;?><?php print " ";?></span><br>
                    Année : <span class="card-reponse"><?php print$moto[$i]->annee;?><?php print " ";?></span><br>
                    Puissance : <span class="card-reponse"><?php print$moto[$i]->puissance;?> ch<?php print " ";?></span><br>
                    Kilomètre : <span class="card-reponse"><?php print  $format = number_format( $moto[$i]->km, 0, ',', ' ');?> km<?php print " ";?></span><br>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <span class="card-prix">Prix : <?php print  $format = number_format( $moto[$i]->prix, 0, ',', ' ');?><?php print " ";?>€</span>
                    <div class="btn-group">
                        <button type="button" onclick="window.location.href='index_user.php?page=reservmoto.php';" class="btn btn-sm btn-outline-secondary btn_card">Essayer</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<?php
    }
    $i=$i+1;
    }
    }
    }
?>
<br>
