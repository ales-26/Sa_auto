<?php
if(!isset($_SESSION['admin'])){
?>
    <div class="container">
        <img src="./images/logo/acces_reserver.jpg" class="img-fluid" alt="image">
    </div>
    <? phpsession_destroy();
    ?>
    <meta http-equiv="refresh": content="0;URL=../index_.php?page=accueil.php">
    <?php
}
