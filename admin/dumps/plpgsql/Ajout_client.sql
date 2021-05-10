create or replace function Ajout_client(text,text,text,text,text,text,int,text,text,text,text) returns integer 
as
' 
	declare f_nom alias for $1;
	declare f_prenom alias for $2;
	declare f_tel alias for $3;
	declare f_mail alias for $4;
	declare f_rue alias for $5;
	declare f_numero alias for $6;
	declare f_cp alias for $7;
	declare f_ville alias for $8;
	declare f_etat alias for $9;
	declare f_ident alias for $10;
	declare f_mdp alias for $11;
	declare id integer;
	declare id_co integer;
	declare retour integer;
	
	BEGIN
		select into id id_client from client where nom = $1 and prenom = $2 and tel = $3;
		if not found 
		then 
			insert into connexion(type_compte,identifiant,mdp)
			values($9,$10,md5($11));
			
			select into id_co id_connexion from connexion where identifiant = $10;
			insert into client(id_connexion,nom,prenom,tel,mail,rue,numero,cp,ville)
			values(id_co,$1,$2,$3,$4,$5,$6,$7,$8);
			retour = 1;
		else
			retour = 0;
		end if;
		return retour;
	END;

'
language plpgsql;