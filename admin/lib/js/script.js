$(document).ready(function(){

    $('body').click(function(){
        $('#alert').fadeOut(2000);
    });

    /* modifier prix */
    $('#v-pills-modif-tab').click(function(){
        $('#modif_prix_voit').fadeOut();
        $('#table_recherche').fadeOut();
    });

    $('#submit3').click(function(){
        var id = $('#id_voiture').val();
        var parametre = "id_voiture="+id;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRechercheIdVoiture.php',
            success: function (data){
                $('#id_voiture_rep').html("<br><b>"+data[0].id_voiture);
                $('#marque_voiture_rep').html("<br><b>"+data[0].marque);
                $('#model_voiture_rep').html("<br><b>"+data[0].modele);
                $('#km_voiture_rep').html("<br><b>"+data[0].km);
                $('#prix_voiture_rep').html("<br><b>"+data[0].prix);
                $('#modif_prix_voit').fadeIn();
                $('#table_recherche').fadeIn();
            }
        });
    });

    /* supprimer new */
    $('#v-pills-supp_new-tab').click(function(){
        $('#supp_new_prix_voit').fadeOut();
        $('#table_recherche2').fadeOut();
    });

    $('#submit5').click(function(){
        var id = $('#id_voiture_supp_new').val();
        var parametre = "id_voiture="+id;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRechercheIdVoiture.php',
            success: function (data){
                $('#id_voiture_rep2').html("<br><b>"+data[0].id_voiture);
                $('#marque_voiture_rep2').html("<br><b>"+data[0].marque);
                $('#model_voiture_rep2').html("<br><b>"+data[0].modele);
                $('#km_voiture_rep2').html("<br><b>"+data[0].km);
                $('#prix_voiture_rep2').html("<br><b>"+data[0].prix);
                $('#supp_new_prix_voit').fadeIn();
                $('#table_recherche2').fadeIn();
            }
        });
    });

    /* supprimer voit */
    $('#v-pills-supp_voit-tab').click(function(){
        $('#supp_prix_voit').fadeOut();
        $('#table_recherche3').fadeOut();
    });

    $('#submit7').click(function(){
        var id = $('#id_voiture_supp').val();
        var parametre = "id_voiture="+id;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRechercheIdVoiture.php',
            success: function (data){
                $('#id_voiture_rep3').html("<br><b>"+data[0].id_voiture);
                $('#marque_voiture_rep3').html("<br><b>"+data[0].marque);
                $('#model_voiture_rep3').html("<br><b>"+data[0].modele);
                $('#km_voiture_rep3').html("<br><b>"+data[0].km);
                $('#prix_voiture_rep3').html("<br><b>"+data[0].prix);
                $('#supp_prix_voit').fadeIn();
                $('#table_recherche3').fadeIn();
            }
        });
    });

    /************************************MOTO********************************************/

    /* modifier prix */
    $('#v-pills-modif_moto-tab').click(function(){
        $('#modif_prix_moto').fadeOut();
        $('#table_recherche_moto').fadeOut();
    });

    $('#submit_moto3').click(function(){
        var id = $('#id_moto').val();
        var parametre = "id_moto="+id;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRechercheIdMoto.php',
            success: function (data){
                $('#id_moto_rep').html("<br><b>"+data[0].id_moto);
                $('#marque_moto_rep').html("<br><b>"+data[0].marque);
                $('#model_moto_rep').html("<br><b>"+data[0].modele);
                $('#km_moto_rep').html("<br><b>"+data[0].km);
                $('#prix_moto_rep').html("<br><b>"+data[0].prix);
                $('#modif_prix_moto').fadeIn();
                $('#table_recherche_moto').fadeIn();
            }
        });
    });

    /* supprimer new */
    $('#v-pills-supp_new_moto-tab').click(function(){
        $('#supp_new_prix_moto').fadeOut();
        $('#table_recherche_moto2').fadeOut();
    });

    $('#submit_moto5').click(function(){
        var id = $('#id_moto_supp_new').val();
        var parametre = "id_moto="+id;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRechercheIdMoto.php',
            success: function (data){
                $('#id_moto_rep2').html("<br><b>"+data[0].id_moto);
                $('#marque_moto_rep2').html("<br><b>"+data[0].marque);
                $('#model_moto_rep2').html("<br><b>"+data[0].modele);
                $('#km_moto_rep2').html("<br><b>"+data[0].km);
                $('#prix_moto_rep2').html("<br><b>"+data[0].prix);
                $('#supp_new_prix_moto').fadeIn();
                $('#table_recherche_moto2').fadeIn();
            }
        });
    });

    /* supprimer voit */
    $('#v-pills-supp_moto-tab').click(function(){
        $('#supp_prix_moto').fadeOut();
        $('#table_recherche_moto3').fadeOut();
    });

    $('#submit_moto7').click(function(){
        var id = $('#id_moto_supp').val();
        var parametre = "id_moto="+id;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRechercheIdMoto.php',
            success: function (data){
                    $('#id_moto_rep3').html("<br><b>"+data[0].id_moto);
                    $('#marque_moto_rep3').html("<br><b>"+data[0].marque);
                    $('#model_moto_rep3').html("<br><b>"+data[0].modele);
                    $('#km_moto_rep3').html("<br><b>"+data[0].km);
                    $('#prix_moto_rep3').html("<br><b>"+data[0].prix);
                    $('#supp_prix_moto').fadeIn();
                    $('#table_recherche_moto3').fadeIn();
            }
        });
    });

    /************************************CLIENT********************************************/

    /* btn rechercher client */
    $('#submit_client').click(function(){
        var id = $('#num_client').val();
        var parametre = "num_client="+id;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRechercheClient.php',
            success: function (data){
                $('#id_client').html("<br>"+data[0].id_client);
                $('#statut_client').html("<br>"+data[0].type_compte);
                $('#nom_client').html("<br>"+data[0].nom);
                $('#prenom_client').html("<br>"+data[0].prenom);
                $('#tel_client').html("<br>"+data[0].tel);
                $('#mail_client').html("<br>"+data[0].mail);
                $('#rue_client').html("<br>"+data[0].rue);
                $('#numero_client').html("<br>"+data[0].numero);
                $('#cp_client').html("<br>"+data[0].cp);
                $('#ville_client').html("<br>"+data[0].ville);
            }
        });
    });

    /* btn tous */
    $('#submit_allclient').click(function(){
        var id = $('#num_client').val();
        var parametre = "num_client="+id;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRechercheAllClient.php',
            success: function (data){
                 var idclient="",statutclient="",nomclient="",prenomclient="",telclient="",mailclient="";
                 var rueclient="",numeroclient="",cpclient="",villeclient="";
                $.each(data, function (i, valeur) {
                    $.each(valeur, function (j, val) {
                        idclient+=data[i][j].id_client+'<br><br>';
                        statutclient+=data[i][j].type_compte+'<br><br>';
                        nomclient+=data[i][j].nom+'<br><br>';
                        prenomclient+=data[i][j].prenom+'<br><br>';
                        telclient+=data[i][j].tel+'<br><br>';
                        mailclient+=data[i][j].mail+'<br><br>';
                        rueclient+=data[i][j].rue+'<br><br>';
                        numeroclient+=data[i][j].numero+'<br><br>';
                        cpclient+=data[i][j].cp+'<br><br>';
                        villeclient+=data[i][j].ville+'<br><br>';
                    });
                    if (idclient !== "") {
                        $('#id_client').html(idclient);
                        $('#statut_client').html(statutclient);
                        $('#nom_client').html(nomclient);
                        $('#prenom_client').html(prenomclient);
                        $('#tel_client').html(telclient);
                        $('#mail_client').html(mailclient);
                        $('#rue_client').html(rueclient);
                        $('#numero_client').html(numeroclient);
                        $('#cp_client').html(cpclient);
                        $('#ville_client').html(villeclient);
                    }
                });
            }
        });
    });

    /***********************************liste admin*************************************************/


})



