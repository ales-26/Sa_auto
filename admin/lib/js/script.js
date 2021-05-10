$(document).ready(function(){

    $('body').click(function(){
        $('#alert').fadeOut(2000);
    });

    /************************************ admin voiture ********************************************/
    /* modifier prix*/
    $('#v-pills-modif-tab').click(function(){
        $('#modif_prix_voit').fadeOut();
        $('#table_recherche').fadeOut();
    });

    $('#submit3').click(function(){
        var marque = $('#marque_voiture_modif_admin').val();
        var modele = $('#model_voiture_modif_admin').val();
        var parametre = "marque_voiture="+marque+"&model_voiture="+modele;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRecherchevoitbymarquemodele.php',
            success: function (data){
                var id="",marque="",model="",km="",prix="";
                $.each(data, function (i, valeur) {
                    $.each(valeur, function (j, val) {
                        id+=data[i][j].id_voiture+'<br><br>';
                        marque+=data[i][j].marque+'<br><br>';
                        model+=data[i][j].modele+'<br><br>';
                        km+=data[i][j].km+'<br><br>';
                        prix+=data[i][j].prix+'<br><br>';
                    });

                    if (id !== "") {
                        $('#id_voiture_rep').html(id);
                        $('#marque_voiture_rep').html(marque);
                        $('#model_voiture_rep').html(model);
                        $('#km_voiture_rep').html(km);
                        $('#prix_voiture_rep').html(prix);
                        $('#modif_prix_voit').fadeIn();
                        $('#table_recherche').fadeIn();
                    }
                });
            }
        });
    });

    /* supprimer new */
    $('#v-pills-supp_new-tab').click(function(){
        $('#supp_new_prix_voit').fadeOut();
        $('#table_recherche2').fadeOut();
    });

    $('#submit5').click(function(){
        var marque = $('#marque_voiture_supp_n_admin').val();
        var modele = $('#model_voiture_supp_n_admin').val();
        var parametre = "marque_voiture="+marque+"&model_voiture="+modele;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRecherchevoitbymarquemodele.php',
            success: function (data){
                var id="",marque="",model="",km="",prix="";
                $.each(data, function (i, valeur) {
                    $.each(valeur, function (j, val) {
                        id+=data[i][j].id_voiture+'<br><br>';
                        marque+=data[i][j].marque+'<br><br>';
                        model+=data[i][j].modele+'<br><br>';
                        km+=data[i][j].km+'<br><br>';
                        prix+=data[i][j].prix+'<br><br>';
                    });

                    if (id !== "") {
                        $('#id_voiture_rep2').html(id);
                        $('#marque_voiture_rep2').html(marque);
                        $('#model_voiture_rep2').html(model);
                        $('#km_voiture_rep2').html(km);
                        $('#prix_voiture_rep2').html(prix);
                        $('#modif_prix_voit2').fadeIn();
                        $('#supp_new_prix_voit').fadeIn();
                        $('#table_recherche2').fadeIn();
                    }
                });
            }
        });
    });

    /* supprimer voit */
    $('#v-pills-supp_voit-tab').click(function(){
        $('#supp_prix_voit').fadeOut();
        $('#table_recherche3').fadeOut();
    });

    $('#submit7').click(function(){
        var marque = $('#marque_voiture_supp_admin').val();
        var modele = $('#model_voiture_supp_admin').val();
        var parametre = "marque_voiture="+marque+"&model_voiture="+modele;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRecherchevoitbymarquemodele.php',
            success: function (data){
                var id="",marque="",model="",km="",prix="";
                $.each(data, function (i, valeur) {
                    $.each(valeur, function (j, val) {
                        id+=data[i][j].id_voiture+'<br><br>';
                        marque+=data[i][j].marque+'<br><br>';
                        model+=data[i][j].modele+'<br><br>';
                        km+=data[i][j].km+'<br><br>';
                        prix+=data[i][j].prix+'<br><br>';
                    });

                    if (id !== "") {
                        $('#id_voiture_rep3').html(id);
                        $('#marque_voiture_rep3').html(marque);
                        $('#model_voiture_rep3').html(model);
                        $('#km_voiture_rep3').html(km);
                        $('#prix_voiture_rep3').html(prix);
                        $('#modif_prix_voit3').fadeIn();
                        $('#supp_prix_voit').fadeIn();
                        $('#table_recherche3').fadeIn();
                    }
                });
            }
        });
    });

    /************************************ admin MOTO ********************************************/

    /* modifier prix */
    $('#v-pills-modif_moto-tab').click(function(){
        $('#modif_prix_moto').fadeOut();
        $('#table_recherche_moto').fadeOut();
    });

    $('#submit_moto3').click(function(){
        var marque = $('#marque_moto_modif_admin').val();
        var modele = $('#model_moto_modif_admin').val();
        var parametre = "marque_moto="+marque+"&model_moto="+modele;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRecherchemotobymarquemodele.php',
            success: function (data){
                var id="",marque="",model="",km="",prix="";
                $.each(data, function (i, valeur) {
                    $.each(valeur, function (j, val) {
                        id+=data[i][j].id_moto+'<br><br>';
                        marque+=data[i][j].marque+'<br><br>';
                        model+=data[i][j].modele+'<br><br>';
                        km+=data[i][j].km+'<br><br>';
                        prix+=data[i][j].prix+'<br><br>';
                    });

                    if (id !== "") {
                        $('#id_moto_rep').html(id);
                        $('#marque_moto_rep').html(marque);
                        $('#model_moto_rep').html(model);
                        $('#km_moto_rep').html(km);
                        $('#prix_moto_rep').html(prix);
                        $('#modif_prix_moto').fadeIn();
                        $('#table_recherche_moto').fadeIn();
                    }
                });
            }
        });
    });


    /* supprimer new */
    $('#v-pills-supp_new_moto-tab').click(function(){
        $('#supp_new_prix_moto').fadeOut();
        $('#table_recherche_moto2').fadeOut();
    });

    $('#submit_moto5').click(function(){
        var marque = $('#marque_moto_n_supp_admin').val();
        var modele = $('#model_moto_n_supp_admin').val();
        var parametre = "marque_moto="+marque+"&model_moto="+modele;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRecherchemotobymarquemodele.php',
            success: function (data){
                var id="",marque="",model="",km="",prix="";
                $.each(data, function (i, valeur) {
                    $.each(valeur, function (j, val) {
                        id+=data[i][j].id_moto+'<br><br>';
                        marque+=data[i][j].marque+'<br><br>';
                        model+=data[i][j].modele+'<br><br>';
                        km+=data[i][j].km+'<br><br>';
                        prix+=data[i][j].prix+'<br><br>';
                    });

                    if (id !== "") {
                        $('#id_moto_rep2').html(id);
                        $('#marque_moto_rep2').html(marque);
                        $('#model_moto_rep2').html(model);
                        $('#km_moto_rep2').html(km);
                        $('#prix_moto_rep2').html(prix);
                        $('#modif_prix_moto2').fadeIn();
                        $('#supp_new_prix_moto').fadeIn();
                        $('#table_recherche_moto2').fadeIn();
                    }
                });
            }
        });
    });

    /* supprimer voit */
    $('#v-pills-supp_moto-tab').click(function(){
        $('#supp_prix_moto').fadeOut();
        $('#table_recherche_moto3').fadeOut();
    });

    $('#submit_moto7').click(function(){
        var marque = $('#marque_moto_supp_admin').val();
        var modele = $('#model_moto_supp_admin').val();
        var parametre = "marque_moto="+marque+"&model_moto="+modele;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRecherchemotobymarquemodele.php',
            success: function (data){
                var id="",marque="",model="",km="",prix="";
                $.each(data, function (i, valeur) {
                    $.each(valeur, function (j, val) {
                        id+=data[i][j].id_moto+'<br><br>';
                        marque+=data[i][j].marque+'<br><br>';
                        model+=data[i][j].modele+'<br><br>';
                        km+=data[i][j].km+'<br><br>';
                        prix+=data[i][j].prix+'<br><br>';
                    });

                    if (id !== "") {
                        $('#id_moto_rep3').html(id);
                        $('#marque_moto_rep3').html(marque);
                        $('#model_moto_rep3').html(model);
                        $('#km_moto_rep3').html(km);
                        $('#prix_moto_rep3').html(prix);
                        $('#modif_moto_voit3').fadeIn();
                        $('#supp_prix_moto').fadeIn();
                        $('#table_recherche_moto3').fadeIn();
                    }
                });
            }
        });
    });

    /************************************ admin CLIENT********************************************/

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
                $('#table_client').css({
                    'visibility':'visible'
                });
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
                        $('#table_client').css({
                            'visibility':'visible'
                        });
                    }
                });
            }
        });
    });

    /*********************************** admin reservation *************************************************/

    /* btn rechercher client */
    $('#submit_reserv').click(function(){
        var id = $('#num_client_reserv').val();
        var parametre = "num_client_reserv="+id;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRechercheReservation.php',
            success: function (data){
                var idreserv ="" ,idclient="",nomclient="",prenomclient="";
                var idvoit="",idmoto="",datereserv="",daterdv="",heurerdv="";
                $.each(data, function (i, valeur) {
                   $.each(valeur, function (j, val) {
                        idreserv+=data[i][j].id_reservation+'<br><br>';
                        idclient+=data[i][j].id_client+'<br><br>';
                        nomclient+=data[i][j].nom+'<br><br>';
                        prenomclient+=data[i][j].prenom+'<br><br>';
                        idvoit+=data[i][j].id_voiture+'<br><br>';
                        idmoto+=data[i][j].id_moto+'<br><br>';
                        datereserv+=data[i][j].date_reserv+'<br><br>';
                        daterdv+=data[i][j].date_rdv+'<br><br>';
                        heurerdv+=data[i][j].heure_rdv+'<br><br>';
                   });

                   if (idreserv !== "") {
                        $('#id_reserv').html(idreserv);
                        $('#id_client_reserv').html(idclient);
                        $('#nom_client_reserv').html(nomclient);
                        $('#prenom_client_reserv').html(prenomclient);
                        $('#id_voiture_reserv').html(idvoit);
                        $('#id_moto_reserv').html(idmoto);
                        $('#date_reserv_reserv').html(datereserv);
                        $('#date_rdv_reserv').html(daterdv);
                        $('#heure_rdv_reserv').html(heurerdv);
                       $('#table_reserv').css({
                           'visibility':'visible'
                       });
                   }
                });
            }
        });
    });

    /* btn tous */
    $('#submit_allreserv').click(function(){
        var id = $('#num_client_reserv').val();
        var parametre = "num_client_reserv="+id;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRechercheAllReserv.php',
            success: function (data){
                var idreserv ="" ,idclient="",nomclient="",prenomclient="";
                var idvoit="",idmoto="",datereserv="",daterdv="",heurerdv="";
                $.each(data, function (i, valeur) {
                    $.each(valeur, function (j, val) {
                        idreserv+=data[i][j].id_reservation+'<br><br>';
                        idclient+=data[i][j].id_client+'<br><br>';
                        nomclient+=data[i][j].nom+'<br><br>';
                        prenomclient+=data[i][j].prenom+'<br><br>';
                        idvoit+=data[i][j].id_voiture+'<br><br>';
                        idmoto+=data[i][j].id_moto+'<br><br>';
                        datereserv+=data[i][j].date_reserv+'<br><br>';
                        daterdv+=data[i][j].date_rdv+'<br><br>';
                        heurerdv+=data[i][j].heure_rdv+'<br><br>';
                    });

                    if (idreserv !== "") {
                        $('#id_reserv').html(idreserv);
                        $('#id_client_reserv').html(idclient);
                        $('#nom_client_reserv').html(nomclient);
                        $('#prenom_client_reserv').html(prenomclient);
                        $('#id_voiture_reserv').html(idvoit);
                        $('#id_moto_reserv').html(idmoto);
                        $('#date_reserv_reserv').html(datereserv);
                        $('#date_rdv_reserv').html(daterdv);
                        $('#heure_rdv_reserv').html(heurerdv);
                        $('#table_reserv').css({
                            'visibility':'visible'
                        });
                    }
                });
            }
        });
    });

    /*********************************** user reservation voiture *************************************************/

    $('#submit_rech_reserv_voit').click(function(){
        var marque = $('#marque_voiture').val();
        var modele = $('#model_voiture').val();
        var parametre = "marque_voiture="+marque+"&model_voiture="+modele;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRecherchevoitbymarquemodele.php',
            success: function (data){
                var id="",marque="",model="",km="",prix="";
                $.each(data, function (i, valeur) {
                    $.each(valeur, function (j, val) {
                        id+=data[i][j].id_voiture+'<br><br>';
                        marque+=data[i][j].marque+'<br><br>';
                        model+=data[i][j].modele+'<br><br>';
                        km+=data[i][j].km+'<br><br>';
                        prix+=data[i][j].prix+'<br><br>';
                    });

                    if (id !== "") {
                        $('#id_voiture_reserv').html(id);
                        $('#marque_voit_reserv').html(marque);
                        $('#model_voit_reserv').html(model);
                        $('#km_voiture_reserv').html(km);
                        $('#prix_voiture_reserv').html(prix);
                        $('#aj_reserv_voit').css({
                            'visibility':'visible'
                        });
                        $('#table_reserv_voit').css({
                            'visibility':'visible'
                        });
                    }
                });
            }
        });
    });

    /*********************************** user reservation moto *************************************************/

    $('#submit_rech_reserv_moto').click(function(){
        var marque = $('#marque_moto_reserv').val();
        var modele = $('#model_moto_reserv').val();
        var parametre = "marque_moto="+marque+"&model_moto="+modele;
        $.ajax({
            type:'GET',
            data: parametre,
            dataType: 'json',
            url: '../admin/lib/php/ajax/ajaxRecherchemotobymarquemodele.php',
            success: function (data){
                var id="",marque="",model="",km="",prix="";
                $.each(data, function (i, valeur) {
                    $.each(valeur, function (j, val) {
                        id+=data[i][j].id_moto+'<br><br>';
                        marque+=data[i][j].marque+'<br><br>';
                        model+=data[i][j].modele+'<br><br>';
                        km+=data[i][j].km+'<br><br>';
                        prix+=data[i][j].prix+'<br><br>';
                    });

                    if (id !== "") {
                        $('#id_moto_reserv').html(id);
                        $('#marque_mot_reserv').html(marque);
                        $('#model_mot_reserv').html(model);
                        $('#km_moto_reserv').html(km);
                        $('#prix_moto_reserv').html(prix);
                        $('#aj_reserv_moto').css({
                            'visibility':'visible'
                        });
                        $('#table_reserv_moto').css({
                            'visibility':'visible'
                        });
                    }
                });
            }
        });
    });

    /*********************************** user mon compte *************************************************/

    $('input[id]').click(function(){
        var valeur1 = $.trim($(this).val());
        var ident = $(this).attr("id"); //valeur de l'id
        var name = $(this).attr("name"); //champ à modifier
        $(this).blur(function(){
            var valeur2 = $.trim($(this).val());
            if(valeur1 != valeur2){
                var parametre = 'champ='+name+'&id='+ident+'&nouveau='+valeur2;
                $.ajax({
                    type: 'GET',
                    data: parametre,
                    dataType: 'text',
                    url: '../admin/lib/php/ajax/ajaxUpdateCompte.php',
                    success: function(data){
                        console.log(data);
                    }
                });
            }
        });
    });
})