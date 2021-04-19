create or replace view vue_client as select
c.id_client,cnx.type_compte,c.nom,c.prenom,c.tel,c.mail,c.rue,c.numero,c.cp,c.ville
from client c,connexion cnx
where c.id_connexion = cnx.id_connexion;

