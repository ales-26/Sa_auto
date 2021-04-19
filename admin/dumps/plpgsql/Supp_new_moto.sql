create or replace function Supp_new_moto(int,boolean) returns integer 
as
' 
	declare f_id_moto alias for $1;
	declare f_etat alias for $2;
	declare id integer;
	declare retour integer;
	
	BEGIN
		select into id id_moto from moto where id_moto = $1;
		if not found 
		then 
			retour = 0 ;
		else
			Update moto set new = $2 where id_moto = $1;
			retour = 1 ;
		end if;
		return retour;
	END;

'
language plpgsql;