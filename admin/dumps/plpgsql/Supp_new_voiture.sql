create or replace function Supp_new_voiture(int,boolean) returns integer 
as
' 
	declare f_id_voiture alias for $1;
	declare f_etat alias for $2;
	declare id integer;
	declare retour integer;
	
	BEGIN
		select into id id_voiture from voiture where id_voiture = $1;
		if not found 
		then 
			retour = 0 ;
		else
			Update voiture set new = $2 where id_voiture = $1;
			retour = 1 ;
		end if;
		return retour;
	END;

'
language plpgsql;