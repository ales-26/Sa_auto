create or replace function Supp_mot_moto(int) returns integer 
as
' 
	declare f_id_moto alias for $1;
	declare id integer;
	declare retour integer;
	
	BEGIN
		select into id id_moto from moto where id_moto = $1;
		if not found 
		then 
			retour = 0 ;
		else
			delete from moto where id_moto = $1;
			retour = 1 ;
		end if;
		return retour;
	END;

'
language plpgsql;