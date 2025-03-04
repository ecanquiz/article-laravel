--
-- PostgreSQL database dump
--

-- Dumped from database version 16.4 (Debian 16.4-1.pgdg120+1)
-- Dumped by pg_dump version 16.3

-- Started on 2025-03-04 00:01:44 UTC

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
-- TOC entry 3397 (class 0 OID 77670)
-- Dependencies: 233
-- Data for Name: articles; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.articles VALUES (10, '0000000010', 'GALÓN DE PINTURA EXTERIORES, BLANCO TRÁFICO, MANPICA', 1, 'abc', 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MANPICA, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', 1, 1, '2025-03-03 18:55:00', '2025-03-03 23:43:39', NULL);
INSERT INTO public.articles VALUES (1, '0000000001', 'CUÑETE DE PINTURA EXTERIORES BLANCO TRÁFICO', 1, 'abc', 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', 1, 1, '2025-03-03 18:54:59', '2025-03-03 19:09:18', NULL);
INSERT INTO public.articles VALUES (2, '0000000002', 'GALÓN DE PINTURA EXTERIORES BLANCO TRÁFICO', 1, 'abc', 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', 1, 1, '2025-03-03 18:54:59', '2025-03-03 19:24:30', NULL);
INSERT INTO public.articles VALUES (3, '0000000003', 'MEDIO GALÓN DE PINTURA EXTERIORES BLANCO TRÁFICO', 1, 'abc', 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1', 1, 1, '2025-03-03 18:54:59', '2025-03-03 19:25:01', NULL);
INSERT INTO public.articles VALUES (5, '0000000005', 'CUÑETE DE PINTURA EXTERIORES, BLANCO TRÁFICO, MONTANA', 1, 'abc', 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', 1, 1, '2025-03-03 18:54:59', '2025-03-03 19:26:47', NULL);
INSERT INTO public.articles VALUES (6, '0000000006', 'GALÓN DE PINTURA EXTERIORES, BLANCO TRÁFICO, MONTANA', 1, 'abc', 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, GALÓN(ES) DE 3.78 Litro(s), Cantidad: 1', 1, 1, '2025-03-03 18:54:59', '2025-03-03 23:39:34', NULL);
INSERT INTO public.articles VALUES (7, '0000000007', 'MEDIO GALÓN DE PINTURAS EXTERIORES, BLANCO TRÁFICO, MONTANA', 1, 'abc', 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, GALÓN(ES) DE 1.89 Litro(s), Cantidad: 1', 1, 1, '2025-03-03 18:54:59', '2025-03-03 23:40:41', NULL);
INSERT INTO public.articles VALUES (8, '0000000008', 'QUARTO DE GALÓN PINTURA EXTERIORES, BLANCO TRÁFICO, MONTANA', 1, 'abc', 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MONTANA, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1', 1, 1, '2025-03-03 18:54:59', '2025-03-03 23:41:37', NULL);
INSERT INTO public.articles VALUES (4, '0000000004', 'QUARTO DE GALÓN DE PINTURA EXTERIORE BLANCO TRÁFICO', 1, 'abc', 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, GALÓN(ES) DE 0.94 Litro(s), Cantidad: 1', 1, 1, '2025-03-03 18:54:59', '2025-03-03 23:41:55', NULL);
INSERT INTO public.articles VALUES (9, '0000000009', 'CUÑETE DE PINTURA EXTERIORES, BLANCO TRÁFICO, MANPICA', 1, 'abc', 'PINTURAS / EXTERIORES, BLANCO TRÁFICO, MANPICA, CUÑETE(S) DE 18.92 Litro(s), Cantidad: 1', 1, 1, '2025-03-03 18:55:00', '2025-03-03 23:42:55', NULL);


--
-- TOC entry 3403 (class 0 OID 0)
-- Dependencies: 232
-- Name: articles_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.articles_id_seq', 10, true);


-- Completed on 2025-03-04 00:01:44 UTC

--
-- PostgreSQL database dump complete
--

