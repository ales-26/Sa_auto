create or replace function Ajout_reserv_moto(int,int,date,time) returns integer 
as
' 
	declare f_idclient alias for $1;
	declare f_id_moto alias for $2;
	declare f_date_rdv alias for $3;
	declare f_heure_rdv alias for $4;
	declare id integer;
	declare retour integer;
	
	BEGIN
		insert into reservation(id_client,date_reserv,id_moto,date_rdv,heure_rdv)
		values($1,Date(now()),$2,$3,$4);

		return 1;
	END;

'
language plpgsql;