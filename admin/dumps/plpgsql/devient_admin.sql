create or replace function devient_admin(int,text) returns integer 
as
' 
	declare f_id alias for $1;
	declare f_etat alias for $2;
	declare id_cli integer;
	declare id integer;
	declare retour integer;
	
	BEGIN
		select into id id_client from client where id_client = $1;
		if not found 
		then 
			retour = 0 ;
		else
			select into id_cli id_connexion from client where id_client = $1;
			Update connexion set type_compte = $2 where id_connexion = id_cli;
			retour = 1;
		end if;
		return retour;
	END;

'
language plpgsql;