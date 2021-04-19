--
-- PostgreSQL database dump
--

-- Dumped from database version 13.1
-- Dumped by pg_dump version 13.1

-- Started on 2021-04-16 14:17:28

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
-- TOC entry 227 (class 1255 OID 17303)
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
-- TOC entry 224 (class 1255 OID 17293)
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
-- TOC entry 212 (class 1255 OID 17291)
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
-- TOC entry 228 (class 1255 OID 17304)
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
-- TOC entry 211 (class 1255 OID 17298)
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
-- TOC entry 230 (class 1255 OID 17306)
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
-- TOC entry 229 (class 1255 OID 17305)
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
-- TOC entry 225 (class 1255 OID 17302)
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
-- TOC entry 226 (class 1255 OID 17301)
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


SET default_tablespace = '';

SET default_table_access_method = heap;

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
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 3062 (class 0 OID 0)
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
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 3063 (class 0 OID 0)
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
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 3064 (class 0 OID 0)
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
    id_voiture integer NOT NULL,
    id_moto integer NOT NULL,
    id_client integer NOT NULL,
    date_reserv date NOT NULL
);


--
-- TOC entry 202 (class 1259 OID 17186)
-- Name: reservation_id_reservation_seq; Type: SEQUENCE; Schema: public; Owner: -
--

CREATE SEQUENCE public.reservation_id_reservation_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 3065 (class 0 OID 0)
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
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


--
-- TOC entry 3066 (class 0 OID 0)
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
-- TOC entry 2894 (class 2604 OID 17210)
-- Name: client id_client; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client ALTER COLUMN id_client SET DEFAULT nextval('public.client_id_client_seq'::regclass);


--
-- TOC entry 2895 (class 2604 OID 17223)
-- Name: connexion id_connexion; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.connexion ALTER COLUMN id_connexion SET DEFAULT nextval('public.connexion_id_connexion_seq'::regclass);


--
-- TOC entry 2893 (class 2604 OID 17199)
-- Name: moto id_moto; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.moto ALTER COLUMN id_moto SET DEFAULT nextval('public.moto_id_moto_seq'::regclass);


--
-- TOC entry 2892 (class 2604 OID 17191)
-- Name: reservation id_reservation; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation ALTER COLUMN id_reservation SET DEFAULT nextval('public.reservation_id_reservation_seq'::regclass);


--
-- TOC entry 2891 (class 2604 OID 17180)
-- Name: voiture id_voiture; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.voiture ALTER COLUMN id_voiture SET DEFAULT nextval('public.voiture_id_voiture_seq'::regclass);


--
-- TOC entry 3054 (class 0 OID 17207)
-- Dependencies: 207
-- Data for Name: client; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.client (id_client, id_connexion, nom, prenom, tel, mail, rue, numero, cp, ville) VALUES (1, 1, 'salemi', 'alessandro', '0499788925', 'alessandrosalemi@mail.be', 'rue de jour', '4001', 7000, 'mons');
INSERT INTO public.client (id_client, id_connexion, nom, prenom, tel, mail, rue, numero, cp, ville) VALUES (2, 2, 'dupreu', 'jean', '0454464646', 'jeandupreu@mail.be', 'rue grande', '2', 7340, 'wasmes');
INSERT INTO public.client (id_client, id_connexion, nom, prenom, tel, mail, rue, numero, cp, ville) VALUES (5, 3, 'duc', 'luc', '0667788', 'lucduc@mail.be', 'rue goerge', '4', 7300, 'boussu');
INSERT INTO public.client (id_client, id_connexion, nom, prenom, tel, mail, rue, numero, cp, ville) VALUES (6, 4, 'mike', 'mike', '0667777788', 'mikemike@mail.be', 'rue grand goerge', '41', 7301, 'hornu');

--
-- TOC entry 3056 (class 0 OID 17220)
-- Dependencies: 209
-- Data for Name: connexion; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.connexion (id_connexion, type_compte, identifiant, mdp) VALUES (1, 'admin', 'ales26', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO public.connexion (id_connexion, type_compte, identifiant, mdp) VALUES (2, 'admin', 'jean', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO public.connexion (id_connexion, type_compte, identifiant, mdp) VALUES (3, 'membre', 'luc21', 'admin');
INSERT INTO public.connexion (id_connexion, type_compte, identifiant, mdp) VALUES (4, 'membre', 'mike21', 'admin');


--
-- TOC entry 3052 (class 0 OID 17196)
-- Dependencies: 205
-- Data for Name: moto; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (1, 'Bmw_K1200LT.jpg', 'Bmw', 'K 1200 LT', 'Diesel', 2018, 1200, 120000, 14000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (3, 'Ducati_Desmosedici.jpg', 'Ducati', 'Desmosedici', 'Essence', 2020, 2000, 130000, 25000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (4, 'Ducati_Monster696.jpg', 'Ducati', 'Monster 696', 'Essence', 2020, 696, 80000, 21000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (5, 'Harley_Davidson_Sporter.jpg', 'Harley Davidson', 'Sporter', 'Diesel', 2019, 140, 180000, 33000, true);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (6, 'Harley-Davidson-Softail.jpg', 'Harley Davidson', 'Softail', 'Diesel', 2018, 1200, 170000, 24000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (7, 'Honda_Cb750.jpg', 'Honda', 'Cb 750', 'Essence', 2017, 750, 190000, 4000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (8, 'Honda_Cb1100.jpg', 'Honda', 'Cb 1100', 'Diesel', 2019, 1100, 140000, 18000, true);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (9, 'Suzuki_Gsx.jpg', 'Suzuki', 'Gsx', 'Essence', 2019, 1600, 112000, 19500, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (10, 'Suzuki_Sv650.jpg', 'Suzuki', 'Sv650', 'Essence', 2019, 650, 50000, 11500, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (2, 'BMW_R18.jpg', 'Bmw', 'R18', 'Diesel', 2019, 1300, 70000, 25, false);


--
-- TOC entry 3050 (class 0 OID 17188)
-- Dependencies: 203
-- Data for Name: reservation; Type: TABLE DATA; Schema: public; Owner: -
--



--
-- TOC entry 3048 (class 0 OID 17177)
-- Dependencies: 201
-- Data for Name: voiture; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (10, 'fiat_500.jpg', 'bmw', '500', 'Essence', 2017, 75, 'Manuel', 151000, 18000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (18, 'Volkswagen_Golf_Gti.jpg', 'volkswagen', 'golf gti', 'Essence', 2020, 180, 'Automatique', 140000, 24000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (3, 'Audi_Rs5.jpg', 'audi', 'rs5', 'Essence', 2019, 150, 'Automatique', 85000, 51000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (4, 'Audi_TT.jpg', 'audi', 'tt', 'Diesel', 2017, 110, 'Manuel', 125000, 29000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (6, 'Bmw_I3.jpg', 'bmw', 'i3', 'Electrique', 2021, 110, 'Automatique', 110000, 31000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (7, 'Bmw_Serie1.jpg', 'bmw', 'serie 1', 'Diesel', 2019, 100, 'Manuel', 138000, 25000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (8, 'Bmw_Serie4.jpeg', 'bmw', 'serie 4', 'Diesel', 2019, 120, 'Manuel', 160000, 41000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (9, 'Bmw_X6.jpg', 'bmw', 'x6', 'Essence', 2021, 180, 'Automatique', 15000, 71000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (11, 'Fiat_Grande_Punto.jpg', 'fiat', 'grande punto', 'Diesel', 2015, 75, 'Manuel', 170000, 8000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (12, 'Mercedes_Classe_A.jpg', 'mercedes', 'classe A', 'Diesel', 2019, 120, 'Automatique', 100000, 21000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (13, 'Mercedes_Classe_C_Cabrilet.jpg', 'mercedes', 'classe C', 'Diesel', 2020, 120, 'Manuel', 136000, 29000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (14, 'Mercedes-Gla.jpg', 'mercedes', 'gla', 'Essence', 2020, 130, 'Manuel', 125000, 27500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (15, 'Nissan_leaf.jpg', 'nissan', 'leaf', 'Electrique', 2021, 130, 'Automatique', 18000, 41500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (16, 'Nissan_Micra.jpg', 'nissan', 'micra', 'Essence', 2020, 90, 'Manuel', 165000, 15000, true);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (19, 'Volkswagen_Polo.jpg', 'volkswagen', 'polo', 'Diesel', 2019, 75, 'Manuel', 164000, 12500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (20, 'Volkswagen_Tiguan.jpg', 'volkswagen', 'tiguan', 'Diesel', 2018, 120, 'Manuel', 190000, 8500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (1, 'Audi_A1.jpg', 'audi', 'a1', 'Essence', 2021, 180, 'Automatique', 45000, 54000, true);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (17, 'Nissan_Qashqai.jpg', 'nissan', 'qashqai', 'Diesel', 2015, 110, 'Manuel', 70000, 15000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (2, 'Audi_Q3_RS.jpg', 'audi', 'q3 rs', 'Essence', 2020, 130, 'Manuel', 35000, 202, false);


--
-- TOC entry 3067 (class 0 OID 0)
-- Dependencies: 206
-- Name: client_id_client_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.client_id_client_seq', 5, true);


--
-- TOC entry 3068 (class 0 OID 0)
-- Dependencies: 208
-- Name: connexion_id_connexion_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.connexion_id_connexion_seq', 3, true);


--
-- TOC entry 3069 (class 0 OID 0)
-- Dependencies: 204
-- Name: moto_id_moto_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.moto_id_moto_seq', 16, true);


--
-- TOC entry 3070 (class 0 OID 0)
-- Dependencies: 202
-- Name: reservation_id_reservation_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.reservation_id_reservation_seq', 1, false);


--
-- TOC entry 3071 (class 0 OID 0)
-- Dependencies: 200
-- Name: voiture_id_voiture_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.voiture_id_voiture_seq', 111, true);


--
-- TOC entry 2903 (class 2606 OID 17217)
-- Name: client client_id_connexion_nom_prenom_key; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_id_connexion_nom_prenom_key UNIQUE (id_connexion, nom, prenom);


--
-- TOC entry 2905 (class 2606 OID 17215)
-- Name: client client_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_pkey PRIMARY KEY (id_client);


--
-- TOC entry 2907 (class 2606 OID 17308)
-- Name: client client_tel_uk; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_tel_uk UNIQUE (tel);


--
-- TOC entry 2909 (class 2606 OID 17230)
-- Name: connexion connexion_identifiant_key; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.connexion
    ADD CONSTRAINT connexion_identifiant_key UNIQUE (identifiant);


--
-- TOC entry 2911 (class 2606 OID 17228)
-- Name: connexion connexion_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.connexion
    ADD CONSTRAINT connexion_pkey PRIMARY KEY (id_connexion);


--
-- TOC entry 2901 (class 2606 OID 17204)
-- Name: moto moto_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.moto
    ADD CONSTRAINT moto_pkey PRIMARY KEY (id_moto);


--
-- TOC entry 2899 (class 2606 OID 17193)
-- Name: reservation reservation_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_pkey PRIMARY KEY (id_reservation);


--
-- TOC entry 2897 (class 2606 OID 17185)
-- Name: voiture voiture_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.voiture
    ADD CONSTRAINT voiture_pkey PRIMARY KEY (id_voiture);


--
-- TOC entry 2915 (class 2606 OID 17246)
-- Name: client client_id_connexion_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_id_connexion_fkey FOREIGN KEY (id_connexion) REFERENCES public.connexion(id_connexion);


--
-- TOC entry 2914 (class 2606 OID 17241)
-- Name: reservation reservation_id_client_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_id_client_fkey FOREIGN KEY (id_client) REFERENCES public.client(id_client);


--
-- TOC entry 2913 (class 2606 OID 17236)
-- Name: reservation reservation_id_moto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_id_moto_fkey FOREIGN KEY (id_moto) REFERENCES public.moto(id_moto);


--
-- TOC entry 2912 (class 2606 OID 17231)
-- Name: reservation reservation_id_voiture_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_id_voiture_fkey FOREIGN KEY (id_voiture) REFERENCES public.voiture(id_voiture);


-- Completed on 2021-04-16 14:17:28

--
-- PostgreSQL database dump complete
--

