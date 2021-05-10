<?php
include('./lib/php/verifier_connexion.php');
$alert=0;
if (isset($_SESSION['admin'])){

$liste = new ClientBD($cnx);
$client = $liste->getlisteadmin();
$nbr = count($client);

    if(isset($_POST['submit_client_admin'])){
        extract($_POST,EXTR_OVERWRITE);

        $aj= new ClientBD($cnx);
        $ajadmin = $aj->devient_admin($id_admin);
        if($ajadmin){ $alert=1;
        }else{$alert=2;}
    }
?>
<section class="py-5 text-center container titre_page">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h2 class="fw-light titre_page ">Listes de tous les admin</h2>
            <p class="lead text-muted">
                Voici la liste de tous les admin de notre site web.
                Vous pouvez en ajouter, en entrant l’id du futur admin.
            </p>
            <p>
                <a href="index.php?page=Client.php" class="btn btn-primary my-2">Client</a>
                <a href="index.php?page=accueil_admin.php" class="btn btn-secondary my-2">Accueil</a>
            </p>
        </div>
    </div>
</section>

<!-- Tableau -->
<section class=" text-center container">
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
        <?php
        $i = 0;
        while($i<$nbr){
            ?>
            <tr>
                <th scope="row"><?php print $client[$i]->id_client;?></th>
                <td><?php print $client[$i]->type_compte;?></td>
                <td><?php print $client[$i]->nom;?></td>
                <td><?php print $client[$i]->prenom;?></td>
                <td><?php print $client[$i]->tel;?></td>
                <td><?php print $client[$i]->mail;?></td>
                <td><?php print $client[$i]->rue;?></td>
                <td><?php print $client[$i]->numero;?></td>
                <td><?php print $client[$i]->cp;?></td>
                <td><?php print $client[$i]->ville;?></td>
            </tr>
            <?php
            $i=$i+1;
        }
        ?>
        </tbody>
    </table>
</section><br><br>

<!-- ajout admin  -->
<section class="container text-center">
    <form action="<?php print $_SERVER['PHP_SELF'];?>" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mb-4"><br><p class="client_admin">Ajouter Admin :</p></div>
                <div class="col-md-3 mb-4">
                    <label for="id_admin">id</label>
                    <input type="text" class="form-control" id="id_admin" name="id_admin" placeholder="25" required>
                </div>
                <div class="col-md-4 mb-4">
                    <br>
                    <button class="btn btn-primary btn-lg btn-block" type="submit" id="submit_client_admin" name="submit_client_admin">Ajouter</button>
                </div>
            </div>
        </div>
    </form><br>

    <!-- message de reussite ou pas -->
    <?php if($alert == 1){?>
        <div id="alert" class="alert alert-success" role="alert" > Transaction réussi !</div>
    <?php } else if($alert == 2) { ?>
        <div id="alert" class="alert alert-danger" role="alert"> Transaction refusé !</div> <?php } ?>
</section>

<?php } ?>