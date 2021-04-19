create or replace function Ajout_voiture(text,text,text,text,int,int,text,int,real,boolean) returns integer 
as
' 
	declare f_nom_image alias for $1;
	declare f_marque alias for $2;
	declare f_modele alias for $3;
	declare f_carburant alias for $4;
	declare f_annee alias for $5;
	declare f_puissance alias for $6;
	declare f_boite alias for $7;
	declare f_km alias for $8;
	declare f_prix alias for $9;
	declare f_new alias for $10;
	declare id integer;
	declare retour integer;
	
	BEGIN
		select into id id_voiture from voiture where marque = $2 and modele = $3 and annee = $5 and km = $8;
		if not found 
		then 
			insert into voiture(nom_image,marque,modele,carburant,annee,puissance,boite,km,prix,new)
			values($1,lower($2),lower($3),$4,$5,$6,$7,$8,$9,$10);
			retour = 1;
		else
			retour = 0;
		end if;
		return retour;
	END;

'
language plpgsql;