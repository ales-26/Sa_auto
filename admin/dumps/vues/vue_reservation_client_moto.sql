create or replace view vue_reservation_client_moto as select
r.id_reservation,r.id_client,r.date_reserv,r.id_moto,r.date_rdv,m.marque,m.modele,m.carburant,m.prix
from moto m,reservation r
where m.id_moto = r.id_moto;