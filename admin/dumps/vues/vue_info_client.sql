create or replace view vue_info_client as select
c.nom,c.prenom,c.tel,c.mail,c.rue,c.numero,c.cp,c.ville,co.identifiant,c.id_client
from client c,connexion co
where c.id_connexion = co.id_connexion;