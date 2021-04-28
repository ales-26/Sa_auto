create or replace view vue_reservation_client_voit as select
r.id_reservation,r.id_client,r.date_reserv,r.id_voiture,r.date_rdv,v.marque,v.modele,v.carburant,v.prix
from voiture v,reservation r
where v.id_voiture = r.id_voiture;