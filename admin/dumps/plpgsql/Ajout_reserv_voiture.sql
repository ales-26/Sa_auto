create or replace function Ajout_reserv_voiture(int,int,date) returns integer 
as
' 
	declare f_idclient alias for $1;
	declare f_id_voiture alias for $2;
	declare f_date_rdv alias for $3;
	declare id integer;
	declare retour integer;
	
	BEGIN
		insert into reservation(id_client,date_reserv,id_voiture,date_rdv)
		values($1,Date(now()),$2,$3);

		return 1;
	END;

'
language plpgsql;