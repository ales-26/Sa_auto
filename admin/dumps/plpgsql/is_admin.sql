create or replace function is_admin(text,text,text) returns integer 
as
' 
	declare f_statu alias for $1;
	declare f_login alias for $2;
	declare f_password alias for $3;
	declare id integer;
	declare retour integer;
	
	BEGIN
		select into id id_connexion from connexion where type_compte = f_statu and identifiant = f_login and mdp = f_password;
		if not found 
		then
			retour = 0;
		else
			retour = 1;
		end if;
		return retour;
	END;

'
language plpgsql;