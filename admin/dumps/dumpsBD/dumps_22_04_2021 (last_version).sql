--
-- PostgreSQL database dump
--

-- Dumped from database version 13.1
-- Dumped by pg_dump version 13.1

-- Started on 2021-04-22 14:00:14

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;


--
-- TOC entry 230 (class 1255 OID 17303)
-- Name: ajout_moto(text, text, text, text, integer, integer, integer, real, boolean); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION public.ajout_moto(text, text, text, text, integer, integer, integer, real, boolean) RETURNS integer
    LANGUAGE plpgsql
    AS ' 
	declare f_nom_image alias for $1;
	declare f_marque alias for $2;
	declare f_modele alias for $3;
	declare f_carburant alias for $4;
	declare f_annee alias for $5;
	declare f_puissance alias for $6;
	declare f_km alias for $7;
	declare f_prix alias for $8;
	declare f_new alias for $9;
	declare id integer;
	declare retour integer;
	
	BEGIN
		select into id id_moto from moto where marque = $2 and modele = $3 and annee = $5 and km = $7;
		if not found 
		then 
			insert into moto(nom_image,marque,modele,carburant,annee,puissance,km,prix,new)
			values($1,lower($2),lower($3),$4,$5,$6,$7,$8,$9);
			retour = 1;
		else
			retour = 0;
		end if;
		return retour;
	END;

';


--
-- TOC entry 227 (class 1255 OID 17293)
-- Name: ajout_voiture(text, text, text, text, integer, integer, text, integer, real, boolean); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION public.ajout_voiture(text, text, text, text, integer, integer, text, integer, real, boolean) RETURNS integer
    LANGUAGE plpgsql
    AS ' 
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

';


--
-- TOC entry 213 (class 1255 OID 17317)
-- Name: devient_admin(integer, text); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION public.devient_admin(integer, text) RETURNS integer
    LANGUAGE plpgsql
    AS ' 
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

';


--
-- TOC entry 212 (class 1255 OID 17316)
-- Name: devient_admin(text, text); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION public.devient_admin(text, text) RETURNS integer
    LANGUAGE plpgsql
    AS ' 
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
			select id_cli id_connexion from client where id_client = $1;
			Update connexion set type_compte = $2 where id_connexion = id_cli;
			retour = 1;
		end if;
		return retour;
	END;

';


--
-- TOC entry 215 (class 1255 OID 17291)
-- Name: is_admin(text, text, text); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION public.is_admin(text, text, text) RETURNS integer
    LANGUAGE plpgsql
    AS ' 
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

';


--
-- TOC entry 231 (class 1255 OID 17304)
-- Name: modif_prix_moto(integer, integer); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION public.modif_prix_moto(integer, integer) RETURNS integer
    LANGUAGE plpgsql
    AS ' 
	declare f_id_moto alias for $1;
	declare f_prix alias for $2;
	declare id integer;
	declare retour integer;
	
	BEGIN
		select into id id_moto from moto where id_moto = $1;
		if not found 
		then 
			retour = 0 ;
		else
			Update moto set prix = $2 where id_moto = $1;
			retour = 1;
		end if;
		return retour;
	END;

';


--
-- TOC entry 214 (class 1255 OID 17298)
-- Name: modif_prix_voiture(integer, integer); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION public.modif_prix_voiture(integer, integer) RETURNS integer
    LANGUAGE plpgsql
    AS ' 
	declare f_id_voiture alias for $1;
	declare f_prix alias for $2;
	declare id integer;
	declare retour integer;
	
	BEGIN
		select into id id_voiture from voiture where id_voiture = $1;
		if not found 
		then 
			retour = 0 ;
		else
			Update voiture set prix = $2 where id_voiture = $1;
			retour = 1;
		end if;
		return retour;
	END;

';


--
-- TOC entry 233 (class 1255 OID 17306)
-- Name: supp_mot_moto(integer); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION public.supp_mot_moto(integer) RETURNS integer
    LANGUAGE plpgsql
    AS ' 
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

';


--
-- TOC entry 232 (class 1255 OID 17305)
-- Name: supp_new_moto(integer, boolean); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION public.supp_new_moto(integer, boolean) RETURNS integer
    LANGUAGE plpgsql
    AS ' 
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

';


--
-- TOC entry 228 (class 1255 OID 17302)
-- Name: supp_new_voiture(integer, boolean); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION public.supp_new_voiture(integer, boolean) RETURNS integer
    LANGUAGE plpgsql
    AS ' 
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

';


--
-- TOC entry 229 (class 1255 OID 17301)
-- Name: supp_voit_voiture(integer); Type: FUNCTION; Schema: public; Owner: -
--

CREATE FUNCTION public.supp_voit_voiture(integer) RETURNS integer
    LANGUAGE plpgsql
    AS ' 
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

';


--
-- TOC entry 207 (class 1259 OID 17207)
-- Name: client; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.client (
    id_client integer NOT NULL,
    id_connexion integer NOT NULL,
    nom text NOT NULL,
    prenom text NOT NULL,
    tel text NOT NULL,
    mail text NOT NULL,
    rue text NOT NULL,
    numero text NOT NULL,
    cp integer NOT NULL,
    ville text NOT NULL
);


--
-- TOC entry 206 (class 1259 OID 17205)
-- Name: client_id_client_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.client_id_client_seq
    INCREMENT BY 1
    START WITH 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 3070 (class 0 OID 0)
-- Dependencies: 206
-- Name: client_id_client_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.client_id_client_seq OWNED BY public.client.id_client;


--
-- TOC entry 209 (class 1259 OID 17220)
-- Name: connexion; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.connexion (
    id_connexion integer NOT NULL,
    type_compte text NOT NULL,
    identifiant text NOT NULL,
    mdp text NOT NULL
);


--
-- TOC entry 208 (class 1259 OID 17218)
-- Name: connexion_id_connexion_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.connexion_id_connexion_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 3071 (class 0 OID 0)
-- Dependencies: 208
-- Name: connexion_id_connexion_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.connexion_id_connexion_seq OWNED BY public.connexion.id_connexion;


--
-- TOC entry 205 (class 1259 OID 17196)
-- Name: moto; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.moto (
    id_moto integer NOT NULL,
    nom_image text NOT NULL,
    marque text NOT NULL,
    modele text NOT NULL,
    carburant text NOT NULL,
    annee integer NOT NULL,
    puissance integer NOT NULL,
    km integer NOT NULL,
    prix real NOT NULL,
    new boolean NOT NULL
);


--
-- TOC entry 204 (class 1259 OID 17194)
-- Name: moto_id_moto_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.moto_id_moto_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 3072 (class 0 OID 0)
-- Dependencies: 204
-- Name: moto_id_moto_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.moto_id_moto_seq OWNED BY public.moto.id_moto;


--
-- TOC entry 203 (class 1259 OID 17188)
-- Name: reservation; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.reservation (
    id_reservation integer NOT NULL,
    id_client integer NOT NULL,
    date_reserv date NOT NULL,
    id_moto integer,
    id_voiture integer
);


--
-- TOC entry 202 (class 1259 OID 17186)
-- Name: reservation_id_reservation_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.reservation_id_reservation_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 3073 (class 0 OID 0)
-- Dependencies: 202
-- Name: reservation_id_reservation_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.reservation_id_reservation_seq OWNED BY public.reservation.id_reservation;


--
-- TOC entry 201 (class 1259 OID 17177)
-- Name: voiture; Type: TABLE; Schema: public; Owner: -
--

CREATE TABLE public.voiture (
    id_voiture integer NOT NULL,
    nom_image text NOT NULL,
    marque text NOT NULL,
    modele text NOT NULL,
    carburant text NOT NULL,
    annee integer NOT NULL,
    puissance integer NOT NULL,
    boite text NOT NULL,
    km integer NOT NULL,
    prix real NOT NULL,
    new boolean NOT NULL
);


--
-- TOC entry 200 (class 1259 OID 17175)
-- Name: voiture_id_voiture_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.voiture_id_voiture_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 3074 (class 0 OID 0)
-- Dependencies: 200
-- Name: voiture_id_voiture_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.voiture_id_voiture_seq OWNED BY public.voiture.id_voiture;


--
-- TOC entry 210 (class 1259 OID 17309)
-- Name: vue_client; Type: VIEW; Schema: public; Owner: -
--

CREATE VIEW public.vue_client AS
 SELECT c.id_client,
    cnx.type_compte,
    c.nom,
    c.prenom,
    c.tel,
    c.mail,
    c.rue,
    c.numero,
    c.cp,
    c.ville
   FROM public.client c,
    public.connexion cnx
  WHERE (c.id_connexion = cnx.id_connexion);


--
-- TOC entry 211 (class 1259 OID 17361)
-- Name: vue_reservation; Type: VIEW; Schema: public; Owner: -
--

CREATE VIEW public.vue_reservation AS
 SELECT r.id_reservation,
    r.id_client,
    r.date_reserv,
    r.id_moto,
    r.id_voiture,
    c.tel,
    c.nom,
    c.prenom
   FROM public.client c,
    public.reservation r
  WHERE (c.id_client = r.id_client);


--
-- TOC entry 2900 (class 2604 OID 17210)
-- Name: client id_client; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client ALTER COLUMN id_client SET DEFAULT nextval('public.client_id_client_seq'::regclass);


--
-- TOC entry 2901 (class 2604 OID 17223)
-- Name: connexion id_connexion; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.connexion ALTER COLUMN id_connexion SET DEFAULT nextval('public.connexion_id_connexion_seq'::regclass);


--
-- TOC entry 2899 (class 2604 OID 17199)
-- Name: moto id_moto; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.moto ALTER COLUMN id_moto SET DEFAULT nextval('public.moto_id_moto_seq'::regclass);


--
-- TOC entry 2898 (class 2604 OID 17191)
-- Name: reservation id_reservation; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation ALTER COLUMN id_reservation SET DEFAULT nextval('public.reservation_id_reservation_seq'::regclass);


--
-- TOC entry 2897 (class 2604 OID 17180)
-- Name: voiture id_voiture; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.voiture ALTER COLUMN id_voiture SET DEFAULT nextval('public.voiture_id_voiture_seq'::regclass);


--
-- TOC entry 2909 (class 2606 OID 17217)
-- Name: client client_id_connexion_nom_prenom_key; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_id_connexion_nom_prenom_key UNIQUE (id_connexion, nom, prenom);


--
-- TOC entry 2911 (class 2606 OID 17215)
-- Name: client client_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_pkey PRIMARY KEY (id_client);


--
-- TOC entry 2913 (class 2606 OID 17308)
-- Name: client client_tel_uk; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_tel_uk UNIQUE (tel);


--
-- TOC entry 2915 (class 2606 OID 17230)
-- Name: connexion connexion_identifiant_key; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.connexion
    ADD CONSTRAINT connexion_identifiant_key UNIQUE (identifiant);


--
-- TOC entry 2917 (class 2606 OID 17228)
-- Name: connexion connexion_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.connexion
    ADD CONSTRAINT connexion_pkey PRIMARY KEY (id_connexion);


--
-- TOC entry 2907 (class 2606 OID 17204)
-- Name: moto moto_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.moto
    ADD CONSTRAINT moto_pkey PRIMARY KEY (id_moto);


--
-- TOC entry 2905 (class 2606 OID 17193)
-- Name: reservation reservation_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_pkey PRIMARY KEY (id_reservation);


--
-- TOC entry 2903 (class 2606 OID 17185)
-- Name: voiture voiture_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.voiture
    ADD CONSTRAINT voiture_pkey PRIMARY KEY (id_voiture);


--
-- TOC entry 2921 (class 2606 OID 17246)
-- Name: client client_id_connexion_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_id_connexion_fkey FOREIGN KEY (id_connexion) REFERENCES public.connexion(id_connexion);


--
-- TOC entry 2918 (class 2606 OID 17241)
-- Name: reservation reservation_id_client_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_id_client_fkey FOREIGN KEY (id_client) REFERENCES public.client(id_client);


--
-- TOC entry 2919 (class 2606 OID 17336)
-- Name: reservation reservation_id_moto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_id_moto_fkey FOREIGN KEY (id_moto) REFERENCES public.moto(id_moto);


--
-- TOC entry 2920 (class 2606 OID 17356)
-- Name: reservation reservation_id_voiture_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_id_voiture_fkey FOREIGN KEY (id_voiture) REFERENCES public.voiture(id_voiture);


-- Completed on 2021-04-22 14:00:15

--
-- PostgreSQL database dump complete
--

