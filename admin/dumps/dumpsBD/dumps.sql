--
-- PostgreSQL database dump
--

-- Dumped from database version 13.1
-- Dumped by pg_dump version 13.1

-- Started on 2021-03-12 02:27:40

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
-- TOC entry 3046 (class 0 OID 0)
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
-- TOC entry 3047 (class 0 OID 0)
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
-- TOC entry 3048 (class 0 OID 0)
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
-- TOC entry 3049 (class 0 OID 0)
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
-- TOC entry 3050 (class 0 OID 0)
-- Dependencies: 200
-- Name: voiture_id_voiture_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: -
--

ALTER SEQUENCE public.voiture_id_voiture_seq OWNED BY public.voiture.id_voiture;


--
-- TOC entry 2881 (class 2604 OID 17210)
-- Name: client id_client; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client ALTER COLUMN id_client SET DEFAULT nextval('public.client_id_client_seq'::regclass);


--
-- TOC entry 2882 (class 2604 OID 17223)
-- Name: connexion id_connexion; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.connexion ALTER COLUMN id_connexion SET DEFAULT nextval('public.connexion_id_connexion_seq'::regclass);


--
-- TOC entry 2880 (class 2604 OID 17199)
-- Name: moto id_moto; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.moto ALTER COLUMN id_moto SET DEFAULT nextval('public.moto_id_moto_seq'::regclass);


--
-- TOC entry 2879 (class 2604 OID 17191)
-- Name: reservation id_reservation; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation ALTER COLUMN id_reservation SET DEFAULT nextval('public.reservation_id_reservation_seq'::regclass);


--
-- TOC entry 2878 (class 2604 OID 17180)
-- Name: voiture id_voiture; Type: DEFAULT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.voiture ALTER COLUMN id_voiture SET DEFAULT nextval('public.voiture_id_voiture_seq'::regclass);


--
-- TOC entry 3038 (class 0 OID 17207)
-- Dependencies: 207
-- Data for Name: client; Type: TABLE DATA; Schema: public; Owner: -
--



--
-- TOC entry 3040 (class 0 OID 17220)
-- Dependencies: 209
-- Data for Name: connexion; Type: TABLE DATA; Schema: public; Owner: -
--



--
-- TOC entry 3036 (class 0 OID 17196)
-- Dependencies: 205
-- Data for Name: moto; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (1, 'Bmw_K1200LT.jpg', 'Bmw', 'K 1200 LT', 'Diesel', 2018, 1200, 120000, 14000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (2, 'BMW_R18.jpg', 'Bmw', 'R18', 'Diesel', 2019, 1300, 70000, 19000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (3, 'Ducati_Desmosedici.jpg', 'Ducati', 'Desmosedici', 'Essence', 2020, 2000, 130000, 25000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (4, 'Ducati_Monster696.jpg', 'Ducati', 'Monster 696', 'Essence', 2020, 696, 80000, 21000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (5, 'Harley_Davidson_Sporter.jpg', 'Harley Davidson', 'Sporter', 'Diesel', 2019, 140, 180000, 33000, true);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (6, 'Harley-Davidson-Softail.jpg', 'Harley Davidson', 'Softail', 'Diesel', 2018, 1200, 170000, 24000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (7, 'Honda_Cb750.jpg', 'Honda', 'Cb 750', 'Essence', 2017, 750, 190000, 4000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (8, 'Honda_Cb1100.jpg', 'Honda', 'Cb 1100', 'Diesel', 2019, 1100, 140000, 18000, true);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (9, 'Suzuki_Gsx.jpg', 'Suzuki', 'Gsx', 'Essence', 2019, 1600, 112000, 19500, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (10, 'Suzuki_Sv650.jpg', 'Suzuki', 'Sv650', 'Essence', 2019, 650, 50000, 11500, false);


--
-- TOC entry 3034 (class 0 OID 17188)
-- Dependencies: 203
-- Data for Name: reservation; Type: TABLE DATA; Schema: public; Owner: -
--



--
-- TOC entry 3032 (class 0 OID 17177)
-- Dependencies: 201
-- Data for Name: voiture; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (3, 'Audi_Rs5.jpg', 'Audi', 'RS5', 'Essence', 2019, 150, 'Automatique', 85000, 51000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (4, 'Audi_TT.jpg', 'Audi', 'TT', 'Diesel', 2017, 110, 'Manuel', 125000, 29000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (5, 'Bmw_Grand_Turismo.jpg', 'Bmw', 'Grand Turismo', 'Essence', 2020, 150, 'Automatique', 41000, 55000, true);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (6, 'Bmw_I3.jpg', 'Bmw', 'I3', 'Electrique', 2021, 110, 'Automatique', 110000, 31000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (7, 'Bmw_Serie1.jpg', 'Bmw', 'Serie 1', 'Diesel', 2019, 100, 'Manuel', 138000, 25000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (8, 'Bmw_Serie4.jpeg', 'Bmw', 'Serie 4', 'Diesel', 2019, 120, 'Manuel', 160000, 41000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (9, 'Bmw_X6.jpg', 'Bmw', 'X6', 'Essence', 2021, 180, 'Automatique', 15000, 71000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (10, 'fiat_500.jpg', 'Fiat', '500', 'Essence', 2017, 75, 'Manuel', 151000, 18000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (11, 'Fiat_Grande_Punto.jpg', 'Fiat', 'Grande punto', 'Diesel', 2015, 75, 'Manuel', 170000, 8000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (12, 'Mercedes_Classe_A.jpg', 'Mercedes', 'Classe A', 'Diesel', 2019, 120, 'Automatique', 100000, 21000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (13, 'Mercedes_Classe_C_Cabrilet.jpg', 'Mercedes', 'Classe C', 'Diesel', 2020, 120, 'Manuel', 136000, 29000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (14, 'Mercedes-Gla.jpg', 'Mercedes', 'Gla', 'Essence', 2020, 130, 'Manuel', 125000, 27500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (15, 'Nissan_leaf.jpg', 'Nissan', 'Leaf', 'Electrique', 2021, 130, 'Automatique', 18000, 41500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (16, 'Nissan_Micra.jpg', 'Nissan', 'Micra', 'Essence', 2020, 90, 'Manuel', 165000, 15000, true);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (17, 'Nissan_Qashqai.jpg', 'Nissan', 'Qashqai', 'Disel', 2015, 110, 'Manuel', 70000, 15000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (18, 'Volkswagen_Golf_Gti.jpg', 'Volkswagen', 'Golf GTI', 'Essence', 2020, 180, 'Automatique', 140000, 24000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (19, 'Volkswagen_Polo.jpg', 'Volkswagen', 'Polo', 'Diesel', 2019, 75, 'Manuel', 164000, 12500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (20, 'Volkswagen_Tiguan.jpg', 'Volkswagen', 'Tiguan', 'Diesel', 2018, 120, 'Manuel', 190000, 8500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (1, 'Audi_A1.jpg', 'Audi', 'A1', 'Essence', 2021, 180, 'Automatique', 45000, 54000, true);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (2, 'Audi_Q3_RS.jpg', 'Audi', 'Q3 RS', 'Essence', 2020, 130, 'Manuel', 35000, 49000, false);


--
-- TOC entry 3051 (class 0 OID 0)
-- Dependencies: 206
-- Name: client_id_client_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.client_id_client_seq', 1, false);


--
-- TOC entry 3052 (class 0 OID 0)
-- Dependencies: 208
-- Name: connexion_id_connexion_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.connexion_id_connexion_seq', 1, false);


--
-- TOC entry 3053 (class 0 OID 0)
-- Dependencies: 204
-- Name: moto_id_moto_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.moto_id_moto_seq', 10, true);


--
-- TOC entry 3054 (class 0 OID 0)
-- Dependencies: 202
-- Name: reservation_id_reservation_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.reservation_id_reservation_seq', 1, false);


--
-- TOC entry 3055 (class 0 OID 0)
-- Dependencies: 200
-- Name: voiture_id_voiture_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.voiture_id_voiture_seq', 20, true);


--
-- TOC entry 2890 (class 2606 OID 17217)
-- Name: client client_id_connexion_nom_prenom_key; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_id_connexion_nom_prenom_key UNIQUE (id_connexion, nom, prenom);


--
-- TOC entry 2892 (class 2606 OID 17215)
-- Name: client client_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_pkey PRIMARY KEY (id_client);


--
-- TOC entry 2894 (class 2606 OID 17230)
-- Name: connexion connexion_identifiant_key; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.connexion
    ADD CONSTRAINT connexion_identifiant_key UNIQUE (identifiant);


--
-- TOC entry 2896 (class 2606 OID 17228)
-- Name: connexion connexion_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.connexion
    ADD CONSTRAINT connexion_pkey PRIMARY KEY (id_connexion);


--
-- TOC entry 2888 (class 2606 OID 17204)
-- Name: moto moto_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.moto
    ADD CONSTRAINT moto_pkey PRIMARY KEY (id_moto);


--
-- TOC entry 2886 (class 2606 OID 17193)
-- Name: reservation reservation_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_pkey PRIMARY KEY (id_reservation);


--
-- TOC entry 2884 (class 2606 OID 17185)
-- Name: voiture voiture_pkey; Type: CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.voiture
    ADD CONSTRAINT voiture_pkey PRIMARY KEY (id_voiture);


--
-- TOC entry 2900 (class 2606 OID 17246)
-- Name: client client_id_connexion_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.client
    ADD CONSTRAINT client_id_connexion_fkey FOREIGN KEY (id_connexion) REFERENCES public.connexion(id_connexion);


--
-- TOC entry 2899 (class 2606 OID 17241)
-- Name: reservation reservation_id_client_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_id_client_fkey FOREIGN KEY (id_client) REFERENCES public.client(id_client);


--
-- TOC entry 2898 (class 2606 OID 17236)
-- Name: reservation reservation_id_moto_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_id_moto_fkey FOREIGN KEY (id_moto) REFERENCES public.moto(id_moto);


--
-- TOC entry 2897 (class 2606 OID 17231)
-- Name: reservation reservation_id_voiture_fkey; Type: FK CONSTRAINT; Schema: public; Owner: -
--

ALTER TABLE ONLY public.reservation
    ADD CONSTRAINT reservation_id_voiture_fkey FOREIGN KEY (id_voiture) REFERENCES public.voiture(id_voiture);


-- Completed on 2021-03-12 02:27:40

--
-- PostgreSQL database dump complete
--

