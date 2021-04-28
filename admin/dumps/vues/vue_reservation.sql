create or replace view vue_reservation as select
r.id_reservation,r.id_client,r.date_reserv,r.id_moto,r.id_voiture,c.tel,c.nom,c.prenom,r.date_rdv
from client c,reservation r
where c.id_client = r.id_client;
