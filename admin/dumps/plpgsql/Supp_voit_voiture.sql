create or replace function Supp_voit_voiture(int) returns integer 
as
' 
	declare f_id_voiture alias for $1;
	declare id integer;
	declare retour integer;
	
	BEGIN
		select into id id_voiture from voiture where id_voiture = $1;
		if not found 
		then 
			retour = 0 ;
		else
			delete from voiture where id_voiture = $1;
			retour = 1 ;
		end if;
		return retour;
	END;

'
language plpgsql;