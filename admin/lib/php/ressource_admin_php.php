<?php
/* Voiture Ajout new */
    if(isset($_POST['submit'])){
        extract($_POST,EXTR_OVERWRITE);
        /* envoie de l'image dans le dossier */
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image_voiture']['name'], '.')  ,1)  );
        if ( in_array($extension_upload,$extensions_valides) ) {
            $nom = "../admin/images/Voiture/{$_FILES['image_voiture']['name']}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['image_voiture']['tmp_name'],$nom);
            $image_nom_voit = $_FILES['image_voiture']['name'];
        } else {
            echo "Extension incorecte";
        }

        /* ajout du vehicule new*/
        $aj = new VoitureBD($cnx);
        $ajout = $aj->NewVoitureAjout($image_nom_voit,$marque_voiture,$model_voiture,$_POST['carbu_voiture'],$annee_voiture,$puissance_voiture,$_POST['Boite_vitesse'],$km_voiture,$prix_voiture);
        if($ajout){ $alert=1;
        }else{ $alert=2;}

    }

/* Voiture Ajout voiture */
    if(isset($_POST['submit2'])){
        extract($_POST,EXTR_OVERWRITE);
        /* envoie de l'image dans le dossier */
        $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
        $extension_upload = strtolower(  substr(  strrchr($_FILES['image_voiture']['name'], '.')  ,1)  );
        if ( in_array($extension_upload,$extensions_valides) ) {
            $nom = "./images/Voiture/{$_FILES['image_voiture']['name']}.{$extension_upload}";
            $resultat = move_uploaded_file($_FILES['image_voiture']['tmp_name'],$nom);
            $image_nom_voit = $_FILES['image_voiture']['name'];
        } else {
            echo "Extension incorecte";
        }

        /* ajout du vehicule voiture*/
        $aj2 = new VoitureBD($cnx);
        $ajoutvoit = $aj2->VoitureAjout($image_nom_voit,$marque_voiture2,$model_voiture2,$_POST['carbu_voiture2'],$annee_voiture2,$puissance_voiture2,$_POST['Boite_vitesse2'],$km_voiture2,$prix_voiture2);
        if($ajoutvoit){ $alert=1;
        }else{ $alert=2;}
    }

/* Voiture modif voiture */
    if(isset($_POST['submit4'])){
        extract($_POST,EXTR_OVERWRITE);

        $modif= new VoitureBD($cnx);
        $modifprixvoit = $modif->ModifPrixVoit($id_voiture4,$new_prix_voiture4);
        if($modifprixvoit){ $alert=1;
        }else{$alert=2;}
    }

/* Voiture supp new */
if(isset($_POST['submit6'])){
    extract($_POST,EXTR_OVERWRITE);

    $supp= new VoitureBD($cnx);
    $suppnewvoit = $supp->SuppNewVoit($id_voiture6);
    if($suppnewvoit){ $alert=1;
    }else{$alert=2;}
}

/* Voiture supp voit */
if(isset($_POST['submit8'])){
    extract($_POST,EXTR_OVERWRITE);

    $supp= new VoitureBD($cnx);
    $suppvoit = $supp->SuppVoit($id_voiture8);
    if($suppvoit){ $alert=1;
    }else{$alert=2;}
}

/**********************Moto******************************/

/* Moto Ajout new */
if(isset($_POST['submit_moto'])){
    extract($_POST,EXTR_OVERWRITE);
    /* envoie de l'image dans le dossier */
    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
    $extension_upload = strtolower(  substr(  strrchr($_FILES['image_moto']['name'], '.')  ,1)  );
    if ( in_array($extension_upload,$extensions_valides) ) {
        $nom = "../admin/images/Moto/{$_FILES['image_moto']['name']}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image_moto']['tmp_name'],$nom);
        $image_nom_moto = $_FILES['image_moto']['name'];
    } else {
        echo "Extension incorecte";
    }

    /* ajout du moto new*/
    $aj = new MotoBD($cnx);
    $ajout = $aj->NewMotoAjout($image_nom_moto,$marque_moto,$model_moto,$_POST['carbu_moto'],$annee_moto,$puissance_moto,$km_moto,$prix_moto);
    if($ajout){ $alert=1;
    }else{ $alert=2;}

}

/* Moto Ajout Moto */
if(isset($_POST['submit_moto2'])){
    extract($_POST,EXTR_OVERWRITE);
    /* envoie de l'image dans le dossier */
    $extensions_valides = array( 'jpg' , 'jpeg' , 'gif' , 'png' );
    $extension_upload = strtolower(  substr(  strrchr($_FILES['image_moto']['name'], '.')  ,1)  );
    if ( in_array($extension_upload,$extensions_valides) ) {
        $nom = "./images/Moto/{$_FILES['image_moto']['name']}.{$extension_upload}";
        $resultat = move_uploaded_file($_FILES['image_moto']['tmp_name'],$nom);
        $image_nom_moto = $_FILES['image_moto']['name'];
    } else {
        echo "Extension incorecte";
    }

    /* ajout du moto moto */
    $aj_moto = new MotoBD($cnx);
    $ajoutmot = $aj_moto->MotoAjout($image_nom_moto,$marque_moto2,$model_moto2,$_POST['carbu_moto2'],$annee_moto2,$puissance_moto2,$km_moto2,$prix_moto2);
    if($ajoutmot){ $alert=1;
    }else{ $alert=2;}
}


/* Voiture modif moto */
if(isset($_POST['submit_moto4'])){
    extract($_POST,EXTR_OVERWRITE);

    $modif_moto= new MotoBD($cnx);
    $modifprixmoto = $modif_moto->ModifPrixmoto($id_moto4,$new_prix_moto4);
    if($modifprixmoto){ $alert=1;
    }else{$alert=2;}
}

/* Voiture supp new */
if(isset($_POST['submit_moto6'])){
    extract($_POST,EXTR_OVERWRITE);

    $supp_moto= new MotoBD($cnx);
    $suppnewmoto = $supp_moto->SuppNewMoto($id_moto6);
    if($suppnewmoto){ $alert=1;
    }else{$alert=2;}
}

/* Voiture supp moto */
if(isset($_POST['submit_moto8'])){
    extract($_POST,EXTR_OVERWRITE);

    $supp_moto2= new MotoBD($cnx);
    $suppmoto = $supp_moto2->SuppMoto($id_moto8);
    if($suppmoto){ $alert=1;
    }else{$alert=2;}
}