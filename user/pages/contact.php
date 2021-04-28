<?php
include('./lib/php/verifier_connexion_user.php');
if(isset($_SESSION['user'])){
?>

<!-- Banniere + text -->
<section>
    <br><img src="../admin/images/Banniere/Banniere_contact.jpg" class="img-fluid img1_contact " alt="image contact">
    <br><br>
    <p class="container text_contact">
        <b id="titre_contact">Design car.be</b><br><br>
        <b>Design car.be</b> est une plateforme en ligne de vente de véhicules qui s’adresse tant aux particuliers qu’aux professionnels.
        Le site propose actuellement plus de 1.000 voitures voitures d’occasions.<br><br>

        Chaque jour, ce sont plus de 100.000 visiteurs qui se rendent sur notre plateforme.<br><br>
        <b>Design car.be</b> souhaite offrir une solution facile à des utilisateurs qui sont à la recherche d’un véhicule.<br><br>
        <b>Design car.be</b> ne s’arrête pas uniquement aux petites annonces de voitures. Le site met également à disposition toute
        l’information nécessaire et utile à la recherche du véhicule idéal. Notre section News compte chaque jour, 7 nouveaux articles.
    </p>
</section>

<!-- Map -->
<section class="container-no-overflow-x">
    <br><br><p class="container text_contact"><b id="titre_contact">Rendez-nous visite !</b><br><br></p>
    <div class="row">
        <div class="col-12 col-md-7 px-0 map">
            <div class="map-wrapper-300">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.6020291434143!2d3.8794940161148244!3d50.44851307947505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c25a7564da92df%3A0xfb77d65f8f2a647b!2sRue%20de%20l&#39;Industrie%2025%2C%207012%20Mons!5e0!3m2!1sfr!2sbe!4v1616691449701!5m2!1sfr!2sbe" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <div class=" col-12 col-md-4 px-0 text_map d-flex justify-content-center align-items-center">
            <div>
                <p>
                    <span class="title_footer">Design auto</span>
                    <br>Rue se l'Industrie 25<br>
                    7012 Mons<br>Belgique
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Lien reseau -->
<section class="container">
    <br><br><p class="container text_contact"><b id="titre_contact">Contactez-nous</b><br><br></p>

    <div class="row">
        <div class="col img_agrand">
            <div class="card ">
                <a href="https:\www.facebook.com"><img src="../admin/images/logo/messanger.jpg" class="card-img-top" alt="Lien Facebook"></a>
            </div>
        </div>
        <div class="col img_agrand">
            <div class="card border-light mb-3">
                <a href="https:\www.instagram.com"><img src="../admin/images/logo/instagram2.jpg" class="card-img-top" alt="Lien Instagram"></a>
            </div>
        </div>
        <div class="col img_agrand">
            <div class="card">
                <a href="mailto:Design.auto@gmail.com"><img src="../admin/images/logo/mail.jpg" class="card-img-top" alt="Lien Mail"></a>
            </div>
        </div>
        <div class="col  img_agrand">
            <p>
                <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                    <img src="../admin/images/logo/numero.jpg" class="card-img-top" alt="Lien Numero">
                </a>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    <b>Numéro de téléphone :</b><br>
                    +32 (0)499/987/364<br>
                    +32 (0)65/257/985
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
</section>
<?php } ?>



