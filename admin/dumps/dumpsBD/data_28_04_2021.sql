--
-- PostgreSQL database dump
--

-- Dumped from database version 13.1
-- Dumped by pg_dump version 13.1

-- Started on 2021-04-28 00:19:38

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
-- TOC entry 3084 (class 0 OID 17220)
-- Dependencies: 209
-- Data for Name: connexion; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.connexion (id_connexion, type_compte, identifiant, mdp) VALUES (4, 'membre', 'mike21', 'ee11cbb19052e40b07aac0ca060c23ee');
INSERT INTO public.connexion (id_connexion, type_compte, identifiant, mdp) VALUES (5, 'membre', 'luc21', 'ee11cbb19052e40b07aac0ca060c23ee');
INSERT INTO public.connexion (id_connexion, type_compte, identifiant, mdp) VALUES (1, 'admin', 'ales26', '21232f297a57a5a743894a0e4a801fc3');
INSERT INTO public.connexion (id_connexion, type_compte, identifiant, mdp) VALUES (2, 'admin', 'jean', '21232f297a57a5a743894a0e4a801fc3');


--
-- TOC entry 3082 (class 0 OID 17207)
-- Dependencies: 207
-- Data for Name: client; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.client (id_client, id_connexion, nom, prenom, tel, mail, rue, numero, cp, ville) VALUES (1, 1, 'salemi', 'alessandro', '0499788925', 'alessandrosalemi@mail.be', 'rue de jour', '4001', 7000, 'mons');
INSERT INTO public.client (id_client, id_connexion, nom, prenom, tel, mail, rue, numero, cp, ville) VALUES (2, 2, 'dupreu', 'jean', '0454464646', 'jeandupreu@mail.be', 'rue grande', '2', 7340, 'wasmes');
INSERT INTO public.client (id_client, id_connexion, nom, prenom, tel, mail, rue, numero, cp, ville) VALUES (7, 4, 'menfis', 'mickael', '0687728
', 'mikemike01@mail.be', 'rue grand goerge', '42', 7301, 'hornu');
INSERT INTO public.client (id_client, id_connexion, nom, prenom, tel, mail, rue, numero, cp, ville) VALUES (6, 5, 'duc', 'luc', '06677889', 'lucduc@mail.be', 'rue goerge', '4', 7300, 'boussu');


--
-- TOC entry 3080 (class 0 OID 17196)
-- Dependencies: 205
-- Data for Name: moto; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (1, 'Bmw_K1200LT.jpg', 'Bmw', 'K 1200 LT', 'Diesel', 2018, 1200, 120000, 14000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (3, 'Ducati_Desmosedici.jpg', 'Ducati', 'Desmosedici', 'Essence', 2020, 2000, 130000, 25000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (4, 'Ducati_Monster696.jpg', 'Ducati', 'Monster 696', 'Essence', 2020, 696, 80000, 21000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (5, 'Harley_Davidson_Sporter.jpg', 'Harley Davidson', 'Sporter', 'Diesel', 2019, 140, 180000, 33000, true);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (6, 'Harley-Davidson-Softail.jpg', 'Harley Davidson', 'Softail', 'Diesel', 2018, 1200, 170000, 24000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (8, 'Honda_Cb1100.jpg', 'Honda', 'Cb 1100', 'Diesel', 2019, 1100, 140000, 18000, true);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (9, 'Suzuki_Gsx.jpg', 'Suzuki', 'Gsx', 'Essence', 2019, 1600, 112000, 19500, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (10, 'Suzuki_Sv650.jpg', 'Suzuki', 'Sv650', 'Essence', 2019, 650, 50000, 11500, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (2, 'BMW_R18.jpg', 'Bmw', 'R18', 'Diesel', 2019, 1300, 70000, 25, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (19, 'test.jpg', 'Kawazaki', 'Tfd', 'Essence', 8, 3, 3, 3, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (7, 'Honda_Cb750.jpg', 'Honda', 'Cb 750', 'Essence', 2017, 750, 190000, 10000, false);
INSERT INTO public.moto (id_moto, nom_image, marque, modele, carburant, annee, puissance, km, prix, new) VALUES (21, 'test.jpg', 'Xb', 'Xbc', 'Essence', 35, 35, 5, 53, false);


--
-- TOC entry 3076 (class 0 OID 17177)
-- Dependencies: 201
-- Data for Name: voiture; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (18, 'Volkswagen_Golf_Gti.jpg', 'Volkswagen', 'Golf gti', 'Essence', 2020, 180, 'Automatique', 140000, 24000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (3, 'Audi_Rs5.jpg', 'Audi', 'Rs5', 'Essence', 2019, 150, 'Automatique', 85000, 51000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (4, 'Audi_TT.jpg', 'Audi', 'Tt', 'Diesel', 2017, 110, 'Manuel', 125000, 29000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (6, 'Bmw_I3.jpg', 'Bmw', 'I3', 'Electrique', 2021, 110, 'Automatique', 110000, 31000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (7, 'Bmw_Serie1.jpg', 'Bmw', 'Serie 1', 'Diesel', 2019, 100, 'Manuel', 138000, 25000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (8, 'Bmw_Serie4.jpeg', 'Bmw', 'Serie 4', 'Diesel', 2019, 120, 'Manuel', 160000, 41000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (9, 'Bmw_X6.jpg', 'Bmw', 'X6', 'Essence', 2021, 180, 'Automatique', 15000, 71000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (11, 'Fiat_Grande_Punto.jpg', 'Fiat', 'Grande punto', 'Diesel', 2015, 75, 'Manuel', 170000, 8000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (12, 'Mercedes_Classe_A.jpg', 'Mercedes', 'Classe a', 'Diesel', 2019, 120, 'Automatique', 100000, 21000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (13, 'Mercedes_Classe_C_Cabrilet.jpg', 'Mercedes', 'Classe c', 'Diesel', 2020, 120, 'Manuel', 136000, 29000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (14, 'Mercedes-Gla.jpg', 'Mercedes', 'Gla', 'Essence', 2020, 130, 'Manuel', 125000, 27500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (15, 'Nissan_leaf.jpg', 'Nissan', 'Leaf', 'Electrique', 2021, 130, 'Automatique', 18000, 41500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (19, 'Volkswagen_Polo.jpg', 'Volkswagen', 'Polo', 'Diesel', 2019, 75, 'Manuel', 164000, 12500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (20, 'Volkswagen_Tiguan.jpg', 'Volkswagen', 'Tiguan', 'Diesel', 2018, 120, 'Manuel', 190000, 8500, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (1, 'Audi_A1.jpg', 'Audi', 'A1', 'Essence', 2021, 180, 'Automatique', 45000, 54000, true);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (2, 'Audi_Q3_RS.jpg', 'Audi', 'Q3 rs', 'Essence', 2020, 130, 'Manuel', 35000, 203, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (112, 'audi-tt-sport.jpg', 'Audi', 'Tt sport', 'Diesel', 2020, 105, 'Manuel', 110000, 250000, false);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (16, 'Nissan_Micra.jpg', 'Nissan', 'Micra', 'Essence', 2020, 90, 'Manuel', 165000, 16000, true);
INSERT INTO public.voiture (id_voiture, nom_image, marque, modele, carburant, annee, puissance, boite, km, prix, new) VALUES (10, 'fiat_500.jpg', 'Bmw', '500', 'Essence', 2017, 75, 'Manuel', 151000, 18000, false);


--
-- TOC entry 3078 (class 0 OID 17188)
-- Dependencies: 203
-- Data for Name: reservation; Type: TABLE DATA; Schema: public; Owner: -
--

INSERT INTO public.reservation (id_reservation, id_client, date_reserv, id_moto, id_voiture, date_rdv) VALUES (24, 7, '2021-04-23', NULL, 14, '2021-04-28');
INSERT INTO public.reservation (id_reservation, id_client, date_reserv, id_moto, id_voiture, date_rdv) VALUES (25, 7, '2021-04-23', 4, NULL, '2021-04-26');
INSERT INTO public.reservation (id_reservation, id_client, date_reserv, id_moto, id_voiture, date_rdv) VALUES (26, 6, '2021-04-26', NULL, 14, '2021-07-23');
INSERT INTO public.reservation (id_reservation, id_client, date_reserv, id_moto, id_voiture, date_rdv) VALUES (27, 6, '2021-04-26', NULL, 2, '2021-06-10');


--
-- TOC entry 3090 (class 0 OID 0)
-- Dependencies: 206
-- Name: client_id_client_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.client_id_client_seq', 7, true);


--
-- TOC entry 3091 (class 0 OID 0)
-- Dependencies: 208
-- Name: connexion_id_connexion_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.connexion_id_connexion_seq', 5, true);


--
-- TOC entry 3092 (class 0 OID 0)
-- Dependencies: 204
-- Name: moto_id_moto_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.moto_id_moto_seq', 22, true);


--
-- TOC entry 3093 (class 0 OID 0)
-- Dependencies: 202
-- Name: reservation_id_reservation_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.reservation_id_reservation_seq', 27, true);


--
-- TOC entry 3094 (class 0 OID 0)
-- Dependencies: 200
-- Name: voiture_id_voiture_seq; Type: SEQUENCE SET; Schema: public; Owner: -
--

SELECT pg_catalog.setval('public.voiture_id_voiture_seq', 115, true);


-- Completed on 2021-04-28 00:19:38

--
-- PostgreSQL database dump complete
--

