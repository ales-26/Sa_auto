<!doctype html>
<?php
//index public
session_start();
include ('./admin/lib/php/admin_liste_includes.php');
$cnx = Connexion::getInstance($dsn,$user,$password);
?>

<html>
    <head>
        <title>Design auto</title>
        <link rel="icon" type="image/png" sizes="16x16" href="./admin/images/logo/logo_onglet.jpg">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="./admin/lib/css/style.css"/>
        <link rel="stylesheet" href="./admin/lib/css/custom.css"/>
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>

    <body>
        <div>
            <header></header>
            <section >
                <nav>
                    <?php
                        $path="./lib/php/public_menu.php";
                        if(file_exists($path)){
                            include ($path);
                        }
                    ?>
                </nav>
            </section>
            <section>
                <div>
                    <?php
                        if(!isset($_SESSION['page'])){
                            $_SESSION['page']="./pages/accueil.php";
                        }
                        if(isset($_GET['page'])){
                            $_SESSION['page']="./pages/".$_GET['page'];
                        }
                        $path=$_SESSION['page'];
                        if(file_exists($path)){
                            include ($path);
                        } else {
                            include ('./pages/pages404.php');
                        }
                    ?>
                </div>
            </section>
        </div>

        <footer>
            <?php
            $path="./lib/php/public_footer.php";
            if(file_exists($path)){
                include ($path);
            }
            ?>
        </footer>
    </body>
</html>