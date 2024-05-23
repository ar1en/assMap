--
-- PostgreSQL database dump
--

-- Dumped from database version 15.2
-- Dumped by pg_dump version 15.2

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
-- Data for Name: ent_users; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_users (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	System	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:05:13	2023-03-19 17:05:15	\N
30b0310d-15bd-41b4-bd1d-17d5a875a6f6	Демидов Ярослав Дмитриевич	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:26:03	2023-03-19 17:26:06	\N
250702e4-ac1c-43f0-b299-f994af07a32a	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-03-21 06:41:23	2023-03-21 06:41:23	\N
d99b273b-7eb5-419f-a1ba-f82b4495bc80	Голованов Михаил Сергеевич	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-03-21 06:41:23	2023-03-21 06:41:23	\N
de75a229-8a1c-44b1-9efc-1865f539aa3b	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-04 13:51:18	2023-04-04 13:51:18	\N
6d12ebdf-9c9d-4dac-8c37-0a934e00d984	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:30:22	2023-04-13 15:30:22	\N
b0857a5d-8397-4994-bae0-8f6731ce050e	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:36:42	2023-04-13 15:36:42	\N
415f6538-bb35-4b7f-bb23-95195a32ae7b	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 17:06:26	2023-04-13 17:06:26	\N
c7995ac9-d3a7-438a-a3d4-e335bc57463b	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 17:07:32	2023-04-13 17:07:32	\N
a12c2a8f-8db6-4f99-bbea-a07780b08638	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 17:09:32	2023-04-13 17:09:32	\N
56ba6886-8e87-4f2e-bef5-fcbc285698e3	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 17:12:30	2023-04-13 17:12:30	\N
484627ca-ff45-4115-bae9-e2c5c1fa67a1	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 17:12:56	2023-04-13 17:12:56	\N
bb9846a5-7397-4ecd-94d8-63521c10856e	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-18 14:55:55	2023-04-18 14:55:55	\N
b7755dfe-a1be-431b-b710-b0652121b3bd	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-19 00:35:53	2023-04-19 00:35:53	\N
0affcb07-1598-4f35-865d-8d0013a60e7a	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:34:54	2023-04-26 10:34:54	\N
fee58b7e-2c45-4c3f-96b9-3aaa2b6958af	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:35:21	2023-04-26 10:35:21	\N
f9c5dce2-21d0-4438-9f34-c90122ce384a	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:36:29	2023-04-26 10:36:29	\N
3eb7c556-885d-44f4-b126-ed70bac8a83a	Сидоров Анатолий Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:36:56	2023-04-26 10:36:56	\N
\.


--
-- Data for Name: ent_periods; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_periods (id, name, start, "end", desk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_assurance_maps; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_assurance_maps (id, period, name, status, "statusDate", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_audits; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_audits (id, "sasId", code, name, "desc", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_departments; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_departments (id, "parentDepartment", "bpmId", "sasId", name, level, path, author, created_at, updated_at, deleted_at) FROM stdin;
fde4e629-f265-4297-b266-9bf698d9b3b0	\N	\N	\N	Компания	1	fde4e629-f265-4297-b266-9bf698d9b3b0	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:12:27	2023-03-19 17:12:29	\N
2ea9346e-e818-434f-b387-a7d14b2f7c4b	ec220a57-e3c2-4159-8d7c-6768b428531c	\N	\N	Управление методологии и организации внутреннего аудита	3	fde4e629-f265-4297-b266-9bf698d9b3b0/ec220a57-e3c2-4159-8d7c-6768b428531c/2ea9346e-e818-434f-b387-a7d14b2f7c4b	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:09:46	2023-03-19 17:09:49	\N
ec220a57-e3c2-4159-8d7c-6768b428531c	\N	\N	\N	Служба внутреннего аудита	2	fde4e629-f265-4297-b266-9bf698d9b3b0/ec220a57-e3c2-4159-8d7c-6768b428531c	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:07:37	2023-03-19 17:07:39	\N
\.


--
-- Data for Name: ent_automated_monitoring; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_automated_monitoring (id, department, "desc", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_collegiate_bodies_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_collegiate_bodies_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_collegiate_bodies; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_collegiate_bodies (id, type, "desc", "sourceDepartment", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_documents_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_documents_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_documents; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_documents (id, name, type, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_external_controllers_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_external_controllers_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_objects; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_objects (id, "sasId", name, code, "supervisingDivision", supervisor, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_external_inspections; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_external_inspections (id, "externalControllerType", "desc", object, "sourceDepartment", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_fines; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_fines (id, object, sum, "desc", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_processes_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_processes_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
0f10f1ff-8fee-4c98-978f-7b73ccbf5708	Тестовый тип 1	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2024-02-02 10:15:59	2024-02-02 10:16:03	\N
\.


--
-- Data for Name: ent_vacancies_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_vacancies_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
0fc2d088-490f-4d57-b1ac-cdb31396cfe9	Специалист 1 категории	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:22	2023-03-19 17:20:24	\N
a1392d5c-b82f-4bb0-af0d-0cb5ea470b41	Ведущий специалист	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:25	2023-03-19 17:20:28	\N
18f414ab-96be-49a2-afad-b0196e42f078	Главный специалист	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:30	2023-03-19 17:20:31	\N
304f433a-83b8-4f92-84c0-c26a83082a55	Менеджер	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:33	2023-03-19 17:20:34	\N
1d7c8cef-35a4-4e97-8180-e929e1e07a08	Заместитель начальника управления	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:36	2023-03-19 17:20:38	\N
331f76b7-359c-4016-8973-ad25b6477b1f	Начальник управления	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:39	2023-03-19 17:20:41	\N
\.


--
-- Data for Name: ent_vacancies; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) FROM stdin;
a1395941-e8c9-452f-b9b0-8e1f647c7e93	\N	18f414ab-96be-49a2-afad-b0196e42f078	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-03-19 17:22:56	\N	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:23:12	2023-03-19 17:23:14	\N
1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	\N	304f433a-83b8-4f92-84c0-c26a83082a55	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-03-19 17:30:24	\N	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:30:35	2023-03-19 17:30:38	\N
943cfa7c-7723-420e-8b19-1fbba63896dc	\N	0fc2d088-490f-4d57-b1ac-cdb31396cfe9	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-03-19 17:41:56	\N	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:42:09	2023-03-19 17:42:11	\N
336e94b4-21ce-4401-98e1-751fddb25689	Вед. спец. УМиОВА	331f76b7-359c-4016-8973-ad25b6477b1f	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-07 11:37:11	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-07-04 11:37:12	2023-07-04 11:37:12	\N
78f8ea50-4356-4d6e-bdd2-4ce277e23837	Вед. спец. УМиОВА	331f76b7-359c-4016-8973-ad25b6477b1f	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-07 11:51:41	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-07-04 11:51:42	2023-07-04 11:51:42	\N
16f8af34-d684-4312-bdc3-2492479d0ed4	Вед. спец. УМиОВА	331f76b7-359c-4016-8973-ad25b6477b1f	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-07 12:10:19	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-07-04 12:10:20	2023-07-04 12:10:20	\N
559002a9-61a2-49f8-a4e5-249d1cf18f8a	Вед. спец. УМиОВА	331f76b7-359c-4016-8973-ad25b6477b1f	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-07 12:21:54	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-07-04 12:21:55	2023-07-04 12:21:55	\N
bc09f2db-d7d7-409e-af6d-2009bf214d74	Вед. спец. УМиОВА	331f76b7-359c-4016-8973-ad25b6477b1f	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-07 12:22:17	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-07-04 12:22:18	2023-07-04 12:22:18	\N
577b7c1c-939e-4c6f-8cd5-a35b43d9808d	Вед. спец. УМиОВА	331f76b7-359c-4016-8973-ad25b6477b1f	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-07 12:23:05	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-07-04 12:23:05	2023-07-04 12:23:05	\N
75f6c9f2-8e83-4455-b718-9f4a80d67be9	Вед. спец. УМиОВА	331f76b7-359c-4016-8973-ad25b6477b1f	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-07 12:23:20	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-07-04 12:23:21	2023-07-04 12:23:21	\N
5b039f7d-2964-441c-b7f1-c466a2fa5075	Вед. спец. УМиОВА	331f76b7-359c-4016-8973-ad25b6477b1f	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-07 12:29:09	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-07-04 12:29:10	2023-07-04 12:29:10	\N
92970b2e-c61b-4e33-bf83-24779e9195f9	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-07 12:30:45	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-07-04 12:30:45	2023-07-04 12:30:45	\N
b79dc88c-c9b4-48cf-842a-2b8915cd541d	Вед. спец. УМиОВА	331f76b7-359c-4016-8973-ad25b6477b1f	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-09 13:37:34	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-09-04 13:37:34	2023-09-04 13:37:34	\N
e704b11d-aecf-419a-b62f-f294b7da4d79	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-09 13:45:30	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-09-04 13:45:30	2023-09-04 13:45:30	\N
26cc2c49-2a2a-470e-8e7c-d2dc656a13d6	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-12 12:24:07	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-12-04 12:24:08	2023-12-04 12:24:08	\N
4658c6af-fba1-4eec-b4a7-7a6ce8d84e5e	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-13 15:41:19	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:41:20	2023-04-13 15:41:20	\N
9d8bbcae-2758-4bf9-ba38-da0b1a0e8a40	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-13 15:42:01	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:42:02	2023-04-13 15:42:02	\N
a23802d0-df87-49e5-9116-22c31bf9c05f	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-18 14:56:13	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-18 14:56:14	2023-04-18 14:56:14	\N
7294ab9d-4cb0-48aa-9d78-704aa90d32c0	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:21:45	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:21:45	2023-04-25 15:21:45	\N
27f56ec7-6a4b-424b-819a-fc221076146e	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:27:51	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:27:52	2023-04-25 15:27:52	\N
58f0a6cb-5ead-4af0-a7d1-22c41ecd7e88	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:40:21	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:40:22	2023-04-25 15:40:22	\N
a5e586ee-1456-4109-b124-2eae8c8a0407	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:43:43	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:43:44	2023-04-25 15:43:44	\N
11cfd2a5-54e7-4c15-b116-9c17b609ad47	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:44:45	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:44:46	2023-04-25 15:44:46	\N
a4a3c6d9-8571-4aaa-925d-8c7c83a6331e	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:47:34	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:47:34	2023-04-25 15:47:34	\N
43c67f52-655c-41df-82c9-ec5c38d6bea6	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:47:55	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:47:55	2023-04-25 15:47:55	\N
a9302b9d-69f0-4816-a67b-dd8a7aa58655	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:48:31	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:48:32	2023-04-25 15:48:32	\N
933ad72d-bf6e-4cf1-b79d-4a590245d9b9	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:48:59	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:49:00	2023-04-25 15:49:00	\N
d3f5cd6e-3d91-4936-a826-13fcbd9ed1da	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:56:11	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:56:12	2023-04-25 15:56:12	\N
d9afd855-d0f8-45c6-b8df-95d5407ad09e	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:56:34	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:56:35	2023-04-25 15:56:35	\N
bf00ecb5-2fd9-48a9-a663-aff238735cfa	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:57:22	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:57:23	2023-04-25 15:57:23	\N
63433b48-f2c0-4931-89cd-227082022352	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 15:59:19	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 15:59:19	2023-04-25 15:59:19	\N
be46298e-fa99-4bf7-bfa5-8a3daa29901d	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-25 17:24:17	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-25 17:24:17	2023-04-25 17:24:17	\N
3c1bdf0f-b601-4452-8dd8-beff84f0b601	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-26 10:16:59	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:16:59	2023-04-26 10:16:59	\N
200f5159-e8d9-4fa8-aef0-2b0695aaf628	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-26 10:17:37	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:17:37	2023-04-26 10:17:37	\N
708d2cba-395c-4d84-8ba4-8cf96f2567de	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-26 10:32:07	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:32:07	2023-04-26 10:32:07	\N
16067623-0166-475d-b48d-77cf8d7ad664	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-26 10:32:39	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:32:40	2023-04-26 10:32:40	\N
a04a98f9-f7e8-4fa4-823e-9b71b5c0b7ac	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-26 10:34:39	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:34:39	2023-04-26 10:34:39	\N
88371da5-a26f-46bf-8ca0-2d647500fdbe	Вед. спец. УМиОВА	\N	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-04-26 11:03:19	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 11:03:20	2023-04-26 11:03:20	\N
\.


--
-- Data for Name: ent_processes; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_processes (id, "parentProcess", path, level, type, "sasId", "bpmId", name, code, owner, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) FROM stdin;
94ee63e3-cec4-4d79-8121-b89d715a8b8a	\N	.	1	0f10f1ff-8fee-4c98-978f-7b73ccbf5708	BP-001	AS.AS	Тестовый процесс	001	336e94b4-21ce-4401-98e1-751fddb25689	2024-02-02 10:13:40	\N	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2024-02-02 10:13:11	2024-02-02 10:13:18	\N
\.


--
-- Data for Name: ent_ics_matrices; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_ics_matrices (id, object, process, "desc", ics, "impactOnRisk", "testingYear", "updatingYear", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_ics_works_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_ics_works_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_ics_works; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_ics_works (id, type, object, process, "desc", executor, deadline, "icsPerimeter", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_internal_inspections; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_internal_inspections (id, department, "desc", object, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_internal_inspections_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_internal_inspections_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_issues_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_issues_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_issues; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_issues (id, "sasId", type, desk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_logins; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_logins (id, "user", login, password, remember_token, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) FROM stdin;
0f1c36d6-bafb-45cb-a9c8-228fca505ea2	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	yaddemidov1	$2y$10$1OxB5yXpDwx/UXA1uF8ARui1M/KX1pF4HIXWMV7J92IJkoKBnl4P2	\N	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-23 23:14:59	\N	2023-03-23 23:15:03	2023-03-23 23:15:07	\N
\.


--
-- Data for Name: ent_permissions; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_permissions (id, name, permission, "desc", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_risks_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_risks_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_risks; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_risks (id, "sasId", "bpmId", name, type, code, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ent_roles; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_roles (id, "parentRole", department, object, process, name, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) FROM stdin;
a5af401c-95e4-4345-bae3-916e97603c5a	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 10:00:31	\N	2023-12-04 10:00:31	2023-12-04 10:00:31	\N
a3926825-b83e-4edc-b58a-198bbabda921	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 10:01:18	\N	2023-12-04 10:01:19	2023-12-04 10:01:19	\N
c07ff93e-7276-4633-9e3d-a42c70a9fd36	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 10:05:53	\N	2023-12-04 10:05:53	2023-12-04 10:05:53	\N
218787b6-3280-425e-821d-c2ed27d2155c	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 10:28:24	\N	2023-12-04 10:28:24	2023-12-04 10:28:24	\N
5694f30a-3d43-459b-a46a-378d1d548314	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 10:59:07	\N	2023-12-04 10:59:07	2023-12-04 10:59:07	\N
5b7b6371-a345-44d6-bac4-d9c0b4f13b03	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 10:59:37	\N	2023-12-04 10:59:37	2023-12-04 10:59:37	\N
dc39cb0a-37ce-4d52-b5da-4b0764aaead3	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 11:01:24	\N	2023-12-04 11:01:25	2023-12-04 11:01:25	\N
6a981780-c037-4a3a-8205-a314555fa75e	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 11:09:46	\N	2023-12-04 11:09:47	2023-12-04 11:09:47	\N
d3b7a818-e691-4601-9903-c97d5e723c36	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 12:23:24	\N	2023-12-04 12:23:25	2023-12-04 12:23:25	\N
88ce1cf8-a75c-48ee-b560-108fd12d477e	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 21:19:46	\N	2023-12-04 21:19:46	2023-12-04 21:19:46	\N
10469920-1600-4644-90f2-fccf68769b32	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 21:19:54	\N	2023-12-04 21:19:55	2023-12-04 21:19:55	\N
5e21631a-e411-4709-8660-dcc427d505de	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:29:53	\N	2023-04-13 15:29:54	2023-04-13 15:29:54	\N
68070e29-28f4-44bb-ae3a-4dedeebf4fa4	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:30:29	\N	2023-04-13 15:30:29	2023-04-13 15:30:29	\N
517290db-4c3f-44f5-b3c7-5ecdb8c8d57f	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-18 14:52:33	\N	2023-04-18 14:52:34	2023-04-18 14:52:34	\N
b54a3b04-81ad-4aee-b375-ee58ac416bf9	\N	\N	\N	\N	Администратор	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:34:46	\N	2023-04-26 10:34:47	2023-04-26 10:34:47	\N
02ffe75c-1aad-4b82-a83d-286fa50dd591	02ffe75c-1aad-4b82-a83d-286fa50dd591	\N	\N	\N	Администратор3354678	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 09:55:33	\N	2023-12-04 09:55:33	2023-05-02 15:05:53	\N
\.


--
-- Data for Name: ent_systems; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ent_systems (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.migrations (id, migration, batch) FROM stdin;
70	2014_10_12_100000_create_password_reset_tokens_table	1
71	2019_08_19_000000_create_failed_jobs_table	1
72	2019_12_14_000001_create_personal_access_tokens_table	1
73	2023_03_15_121400_create_users_table	1
74	2023_03_15_121408_01_create_departments_table	1
75	2023_03_15_121409_01_create_vacancy_types_table	1
76	2023_03_15_121409_02_create_vacancies_table	1
77	2023_03_15_121409_03_add_dependencies_to_users	1
78	2023_03_15_121410_create_periods_table	1
79	2023_03_15_121411_01_create_documents_types_table	1
80	2023_03_15_121411_02_create_documents_table	1
81	2023_03_15_121414_create_assurance_maps_table	1
82	2023_03_15_121415_create_objects_table	1
83	2023_03_15_121420_create_systems_table	1
84	2023_03_15_121422_create_internal_inspections_types_table	1
85	2023_03_15_121423_create_internal_inspections_table	1
86	2023_03_15_121426_create_processes_types_table	1
87	2023_03_15_121427_create_processes_table	1
88	2023_03_15_121428_create_ics_works_types_table	1
89	2023_03_15_121429_create_ics_works_table	1
90	2023_03_15_121430_create_audits_table	1
91	2023_03_15_121431_create_risks_types_table	1
92	2023_03_15_121432_create_risks_table	1
93	2023_03_15_121435_create_collegiate_bodies_types_table	1
94	2023_03_15_121436_create_collegiate_bodies_table	1
95	2023_03_15_121437_create_fines_table	1
96	2023_03_15_121438_create_issues_types_table	1
97	2023_03_15_121439_create_issues_table	1
98	2023_03_15_121444_create_automated_monitoring_table	1
99	2023_03_15_121448_create_external_controllers_types_table	1
100	2023_03_15_121449_create_external_inspections_table	1
101	2023_03_15_121454_create_ics_matrices_table	1
102	2023_03_15_121460_create_internal_inspection_process_table	1
103	2023_03_15_121461_create_internal_inspection_risk_table	1
104	2023_03_15_121462_create_internal_inspection_object_table	1
105	2023_03_15_121463_create_assurance_map_external_inspection_table	1
106	2023_03_15_121464_create_automated_monitoring_system_table	1
107	2023_03_15_121465_create_external_inspection_fine_table	1
108	2023_03_15_121466_create_audit_object_table	1
109	2023_03_15_121467_create_issue_process_table	1
110	2023_03_15_121468_create_risk_rates_table	1
111	2023_03_15_121469_create_risk_risk_table	1
112	2023_03_15_121470_create_assurance_map_self_rating_table	1
113	2023_03_15_121471_create_assurance_map_process_table	1
114	2023_03_15_121472_create_assurance_map_document_table	1
115	2023_03_15_121473_create_assurance_map_automated_monitoring_table	1
116	2023_03_15_121474_create_assurance_map_ics_work_table	1
117	2023_03_15_121475_create_document_processes_table	1
118	2023_03_15_121476_create_collegiate_body_process_table	1
119	2023_03_15_121477_create_department_process_table	1
120	2023_03_15_121478_create_assurance_map_ics_matrix_table	1
121	2023_03_15_121479_create_audit_process_table	1
122	2023_03_15_121480_create_external_inspection_object_table	1
123	2023_03_15_121481_create_external_inspection_process_table	1
124	2023_03_15_121482_create_collegiate_body_document_table	1
125	2023_03_15_121483_create_audit_issue_table	1
126	2023_03_15_121484_create_assurance_map_issue_table	1
127	2023_03_15_121485_create_assurance_map_collegiate_body_table	1
128	2023_03_15_121486_create_assurance_map_internal_inspection_table	1
129	2023_03_15_121487_create_risk_processes_table	1
130	2023_03_15_121488_create_external_inspection_risk_table	1
131	2023_03_15_121489_create_assurance_map_risk_table	1
132	2023_03_15_121490_create_automated_monitoring_process_table	1
133	2023_03_17_221700_create_permissions_table	1
134	2023_03_17_221701_create_roles_table	1
135	2023_03_17_221702_create_logins_table	1
136	2023_03_17_221704_create_user_role_table	1
137	2023_03_17_221705_create_role_permission_table	1
138	2023_03_19_131417_create_user_vacancy_table	1
\.


--
-- Data for Name: password_reset_tokens; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: personal_access_tokens; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.personal_access_tokens (id, tokenable_type, tokenable_id, name, token, abilities, last_used_at, expires_at, created_at, updated_at, deleted_at) FROM stdin;
aace4f64-7ae1-4ea5-83c7-67648581195a	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	9efd0d72d58d3587d137f89dc6e7ab670e1366d67850f7d78447085c3ffcd61d	["*"]	\N	\N	2023-04-05 16:01:05	2023-04-05 16:01:05	\N
650b2ba5-785e-40c7-ac39-c8539ef478dc	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	882cd10d5d364a09731df827eecc9183fc6510265b62564b7998d419fd51232e	["*"]	2023-04-06 16:14:55	\N	2023-04-06 15:33:57	2023-04-06 16:14:55	\N
bf75270f-7439-4281-8a02-50dd6f49d06c	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	c107fcc82f86d9a91f3ba40014616c39fa10aa66de022dc8656a72a4bb6ce275	["*"]	2023-04-06 15:32:19	\N	2023-04-06 14:33:49	2023-04-06 15:32:19	\N
ca498935-6b40-42ed-95fe-0c361814ea75	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	c6f64a8d64f232e65f22f91c8261e8fbeb1e8ecfc4a4d42b956f9bb2db2f7202	["*"]	2023-04-06 18:44:50	\N	2023-04-06 18:44:38	2023-04-06 18:44:50	\N
8f2c2511-183b-4ced-bb3e-dd30dc93ff99	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	ee91439c323d820bc023e0cb22fd02edb395f43fa3071ddce12139f22212f406	["*"]	2023-04-07 13:59:22	\N	2023-04-07 13:59:03	2023-04-07 13:59:22	\N
7df3b90b-2052-4841-8cd9-593ead0ef358	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	58e30116ef9eba6b2dcde0bc6ee4b445f23c32ddc71e288195aa6acd717b5ab6	["*"]	2023-04-07 14:02:47	\N	2023-04-07 13:28:07	2023-04-07 14:02:47	\N
f5a3e451-0947-4bb7-8023-70d7927d515d	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	3d832a4c06c451e8de5b07efffdce4ae5d227d5b8899e7a40f833c90b286bfda	["*"]	\N	\N	2023-04-06 15:44:37	2023-04-06 15:44:37	\N
744e47a4-a5b8-42af-ac1f-9d75dfc519eb	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	09031d7a0caa9e6c41762091bd82700b9470b1cef7ec57eef58572312a53f591	["*"]	2023-04-05 16:30:43	\N	2023-04-05 16:01:08	2023-04-05 16:30:43	\N
c5a1bea4-37e2-4041-8c68-00855f47db86	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	946125e5097d247fa4827ce8b3b882ae8b1ca73eebc0ac4a2c474422b2e5da3b	["*"]	2023-04-10 19:21:58	\N	2023-04-10 19:10:01	2023-04-10 19:21:58	\N
9d44de1c-b645-405e-adb6-c1cadf8e5352	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	50a43a68c1480ad320d8c0ff2198a65dd84a0cb4972d59442920ba02aa423589	["*"]	2023-04-07 12:23:42	\N	2023-04-07 11:57:21	2023-04-07 12:23:42	\N
18b3f195-0c58-4fd6-9cff-d6d84827b01a	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	94e045f78bd19365c69b1ca9056823d971a2b2aa2c6cb005ba4076eb79849581	["*"]	2023-04-06 17:02:36	\N	2023-04-06 17:02:20	2023-04-06 17:02:36	\N
418a2145-58b7-4c5d-9f5f-3223d06a03ad	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	d3d0dbdbda4bd39f65f61e17e01a85f6eb8103fc7d135d41cd7efb0ebcf914a2	["*"]	2023-04-06 16:05:27	\N	2023-04-06 15:07:40	2023-04-06 16:05:27	\N
69347c45-bd35-4ee6-a4e5-9a1a751b788c	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	d7b8ce64198fc1310c6d5e2e73a81cb7f4360afabe8149adab58ab575a7faca5	["*"]	2023-04-12 07:23:42	\N	2023-04-12 07:23:20	2023-04-12 07:23:42	\N
07bcf349-2466-4fe5-af67-1647637dcf4c	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	a302b6ca4f77d594cf87fb541f1aa5908ea561a11dd8f319269b7a32f724a4ed	["*"]	2023-04-09 11:52:10	\N	2023-04-09 11:32:37	2023-04-09 11:52:10	\N
1d96a327-1069-4685-ad84-985b001bf3f2	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	f5d6de6165f9b4e1e47a9cf80f5aad479035a20639c1cd4c58807520ae97f6d3	["*"]	2023-04-09 13:39:01	\N	2023-04-09 13:38:17	2023-04-09 13:39:01	\N
a389613f-1184-4b96-9f4b-de9da210bac5	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	5991058b50d2da609bca677b7102f0375c7ed50f547e360add2666d17393fd73	["*"]	2023-04-06 14:31:17	\N	2023-04-06 13:31:52	2023-04-06 14:31:17	\N
c7de0068-1f02-4c35-8347-13257c4337db	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	924939bc964eb3fc868a646f609b22c4e05ae42e1f476693bb3306d060c04e5a	["*"]	2023-04-07 10:36:52	\N	2023-04-07 09:45:23	2023-04-07 10:36:52	\N
cf412403-9a81-4c1b-aca4-aceb5ddc7282	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	a99b60c757bb7c13bb5356d58f7dfc4b4b7a10cff50df7fbbcd3aa672349c41e	["*"]	\N	\N	2023-04-12 12:16:56	2023-04-12 12:16:56	\N
4177df97-b2f3-4d59-9cb4-8e619fe8d064	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	4113686d72b047d3544d586e70ade5fdcd1cc6071f766fee579759edcb8f6040	["*"]	2023-04-07 13:11:12	\N	2023-04-07 12:21:36	2023-04-07 13:11:12	\N
28951de9-eadd-4bde-8315-6bca6d4015d1	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	bffb98b0923a58d3cb0eb330ff686aafba2fa9a268d4848cd0f2a0d691fde4b8	["*"]	2023-04-06 17:34:53	\N	2023-04-06 16:40:32	2023-04-06 17:34:53	\N
f8e084f4-07f3-4265-9fbd-1af05cd7e419	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	99abc1c9bb75e297486b352d8c77abb135b19fa7da81cadecd4cabca0c8bc9c3	["*"]	2023-04-07 12:10:19	\N	2023-04-07 11:11:41	2023-04-07 12:10:19	\N
e5a08520-422d-46d0-a22f-f20a7ec835c6	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	131ebb5b18126b246c8c9e89e1bf80209156c49a820acff2e6dd446a00f9747c	["*"]	\N	\N	2023-04-12 12:20:15	2023-04-12 12:20:15	\N
78439b85-943a-425f-86c7-c6f574ed9750	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	38b890fca5e233eb60333a8c2735cf1c7587125758c2ffba114974e179710b91	["*"]	\N	\N	2023-04-07 12:21:34	2023-04-07 12:21:34	\N
624b849d-0795-4146-baff-80e7939e9696	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	6c54adbe74be068dc5542c63d4d36832c32b78b594f6a7567dc46ecd00f42afe	["*"]	2023-04-09 13:45:30	\N	2023-04-09 12:50:31	2023-04-09 13:45:30	\N
4059f3a5-82fb-4f08-9ecc-ca797bdb8d72	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	7a90e6dffc051c03319859a65754566eb4a67173d4ae4db7340b0bce18ad42d9	["*"]	2023-04-12 10:28:24	\N	2023-04-12 09:53:31	2023-04-12 10:28:24	\N
75e83971-f75d-4b7e-a498-ffddb08f849e	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	e769766c882970fd2c207a1f4a51b5ad6905e9c64e291e7d3435921567f6cf5f	["*"]	2023-04-12 14:28:11	\N	2023-04-12 13:28:42	2023-04-12 14:28:11	\N
11a06b3d-d041-4d9f-82ab-0b77c7920108	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	514986899c13d1f9ca1619ce772b6bf70a948b02f593cfd5f9b49b2b34b41d6c	["*"]	2023-04-12 09:31:48	\N	2023-04-12 08:53:13	2023-04-12 09:31:48	\N
dc788ec8-e09f-4b51-8b6c-4df814e3679e	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	353b254fb31eb36d792404c55521a921b5bfdfd5ab15404e3c821b00e2f08e4c	["*"]	\N	\N	2023-04-12 17:09:22	2023-04-12 17:09:22	\N
bf6c00a9-1e5f-4882-928f-e947af1a47a7	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	202d22a9ca4483b0f089a78c2b02989ed86f571d7e023e8f58a3a15965fe6e41	["*"]	2023-04-12 13:08:55	\N	2023-04-12 12:23:04	2023-04-12 13:08:55	\N
3d5755c7-01b9-487d-9729-d71f8cd72fa5	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	e6dd8d7f988f932505553219391b9299671aeff124ba405a9b35f14a5662b7d1	["*"]	2023-04-12 11:09:46	\N	2023-04-12 10:58:41	2023-04-12 11:09:46	\N
a1388247-f00a-461e-8b1f-3a3f1821acf8	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	b3ae8d6254eb5c79b700f80c40b97ca01b5b49a43d65a11b95298bd18dba049b	["*"]	2023-04-12 12:05:45	\N	2023-04-12 11:12:57	2023-04-12 12:05:45	\N
4b2e7895-92f9-4417-a79e-c989b647123e	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	f11d1a1fabb67de78f64b453083c983cd72d7c470d2c9f0b9db9aa9d7f750c4f	["*"]	2023-04-12 17:09:45	\N	2023-04-12 17:05:27	2023-04-12 17:09:45	\N
c5becf93-3f4a-4070-b21b-0e59d7cdcb07	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	d78b5f3a1b7ba0ceefeab0f101a249ee3e54ca4752692168749d48a738e417f9	["*"]	2023-04-12 19:33:26	\N	2023-04-12 18:44:22	2023-04-12 19:33:26	\N
aacb1f14-e783-4f9e-886a-dfc8710e158a	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	173b9152c7d6d7b5158ec42f5d224c997d2f4382ce8b43387bf09a9a039206fc	["*"]	2023-04-12 21:22:13	\N	2023-04-12 20:52:18	2023-04-12 21:22:13	\N
c3ee53dc-b5af-4b0a-90df-c2fe71a69c9e	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	b4fa04c616268db21e3e18373773e446290c3c6e66966334531c78361615b390	["*"]	\N	\N	2023-04-13 10:26:17	2023-04-13 10:26:17	\N
d7e78b95-58ec-4fe0-9624-5063baea0c2f	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	6c47699e5ae6d1635864d286cd90691c6de52321278a8319ca5d4f9f858ea469	["*"]	2023-04-13 11:17:13	\N	2023-04-13 10:30:54	2023-04-13 11:17:13	\N
04a63b3b-4205-467a-b59e-2ce5af102c51	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	46d6cf3ef929b17f3e1add3c7689f9312374ff859d75967377e7edacec16d6e0	["*"]	2023-04-13 12:00:38	\N	2023-04-13 11:51:23	2023-04-13 12:00:38	\N
55cae77b-ab44-4eb8-a2ad-85cf12a7f136	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	f7b3734b49479e727c6cd046d3cc7f064e0cfb02a51f536ade72d13c24832e68	["*"]	2023-04-13 15:42:33	\N	2023-04-13 15:08:43	2023-04-13 15:42:33	\N
4e978726-60ad-4174-bb89-a92d0861deab	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	bab8473f6ef690a1dd2c26670a3e4b3bfec273d8f715716fb976bdeb47b1734e	["*"]	2023-04-13 17:12:55	\N	2023-04-13 17:02:50	2023-04-13 17:12:55	\N
0ef79dc5-651c-4a9b-8736-30d5afbc5393	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	5d4e3f5529a733371f15ea75e1db73033d3b008a97f19bc82facfe3abb50a95d	["*"]	2023-04-18 15:36:14	\N	2023-04-18 14:51:16	2023-04-18 15:36:14	\N
f27cb192-af25-40d8-b043-4799e97a9ae6	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	acbfb7bd4df2360664907f8353e40c3fe93c4e1e23771b76f9d3103da6bbe863	["*"]	2023-04-18 16:46:13	\N	2023-04-18 16:01:26	2023-04-18 16:46:13	\N
3810e6e8-73d3-4c45-85fc-00b93f182554	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	b460075d1e2df7da665d0471dd72bcd3282620bcce477eee40fd31bd42cb944c	["*"]	\N	\N	2023-04-18 23:37:59	2023-04-18 23:37:59	\N
1f564a4f-8c01-4b8a-9b74-63ce2cefa7d4	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	bbd7d262b2564e90f25342583585620dcebacaa9e106e1262a3fefe1e56f4915	["*"]	\N	\N	2023-04-18 23:39:14	2023-04-18 23:39:14	\N
1017850d-3484-4d9f-b43c-3a61390d8be9	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	41d5cc8e7e502e5aa4fdc6f146d501cc1ccd2af42d351b7add29226ee9e6f57a	["*"]	\N	\N	2023-04-18 23:39:40	2023-04-18 23:39:40	\N
329f5c60-0621-4363-b618-53b40b8f3449	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	12db4d05e753b45ede1b1222a5e8ae1628712b37d30850982e44b998d1f0f2ac	["*"]	2024-02-01 13:33:35	\N	2024-02-01 11:52:26	2024-02-01 13:33:35	\N
9345839b-9974-413d-8eaa-c2a2eb91de13	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	fdc1a3790359bd7939e5e37ae460e3ebcb0d15cbbe45db3000b1f2c3e9549bd7	["*"]	2024-02-02 10:18:22	\N	2024-02-01 13:34:09	2024-02-02 10:18:22	\N
67e41423-8cc3-4a00-aad7-264f9244b2f9	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	f46c0e6743f571035e5d7f2b5addbef4471bf3899181bee222f945d0b57de49f	["*"]	2023-04-19 00:40:34	\N	2023-04-18 23:40:36	2023-04-19 00:40:34	\N
47b61c15-53b3-4300-8cc5-fc37d6c20837	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	85ee99600f422d8e6bc4cf38c53b8e97c7cfdc331880d913f658243774740c8b	["*"]	2023-04-19 00:54:55	\N	2023-04-19 00:54:11	2023-04-19 00:54:55	\N
0f4af207-28e6-4464-a053-df86ddda8a7c	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	584fc1464371cacb85bce644315580f0950ba5fe21c591698da292169a7ce5da	["*"]	\N	\N	2024-02-02 09:17:31	2024-02-02 09:17:31	\N
debe33b5-9178-42bf-afa8-206b0a8f844a	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	3fd1291286e908a44142b0419eff35c6b1296990f480320ff587af6941b8b640	["*"]	2023-04-20 11:58:10	\N	2023-04-19 12:02:30	2023-04-20 11:58:10	\N
32d6c081-b1c6-4287-ac29-77360df260f3	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	b78d7c80acb7d34a9a136faa9d9e8c479c07449835628dfb80888f8aa74f3eca	["*"]	2023-04-24 17:43:50	\N	2023-04-24 09:30:37	2023-04-24 17:43:50	\N
792577ec-8ce6-4260-b559-31c934b8a8d8	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	b00422c9f35f89aee919ed9bc1cac4b6c119995c19ad74d1ddf9de5adb931dd4	["*"]	2023-04-19 11:22:04	\N	2023-04-19 10:53:00	2023-04-19 11:22:04	\N
5b7816a1-7497-4522-aca4-272e43488efa	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	c45fc2a68f93d1a750b9e733467834b43fd6d7d82b2f5274e7f0698cabb6c38e	["*"]	2023-04-23 10:15:29	\N	2023-04-22 11:27:20	2023-04-23 10:15:29	\N
f846d03e-7c7c-47e7-99df-b70aae2991dc	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	ef5b255ef94441c982f68aa6412e74dc01a804613e7d82328f21e452f1f3966e	["*"]	2023-04-21 00:10:04	\N	2023-04-20 22:14:15	2023-04-21 00:10:04	\N
5edd60ee-933f-42d8-bc83-e7a24d2d85d8	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	feccc67cbdf398be353990c7f94838d59ea2e42d3593409bfa838f3c48285478	["*"]	\N	\N	2024-02-01 12:46:33	2024-02-01 12:46:33	\N
96419e33-f40e-4163-a850-0399c94a0ce7	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	a17aff20749c9ffa2f6dc51f927dc6c467008b922e9cfc91d93fdac09ba9da89	["*"]	\N	\N	2024-02-01 13:10:16	2024-02-01 13:10:16	\N
6c43d8e1-1d16-4fdf-a65c-decaeaf98c56	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	ca260b64e35da0958e13e37615302758bc2cab900b06e48b98e6212702400c48	["*"]	\N	\N	2024-02-01 13:10:19	2024-02-01 13:10:19	\N
0fbf9476-dbed-42fd-a84e-5ff9cbb34bef	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	1f709062eda5e4698f44b450c8150001c7718c10e519228e45886f4743106890	["*"]	\N	\N	2024-02-01 13:30:04	2024-02-01 13:30:04	\N
9068bad6-1b45-45c4-a249-4c03fdfe6773	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	6d06d2dd12938c4368c033b23034287fb4edd1d0b4c7c7204770d2d3c3bbd3a5	["*"]	2023-04-20 16:59:29	\N	2023-04-20 12:13:12	2023-04-20 16:59:29	\N
2574ba7c-6e4e-418b-b563-91853d4b43c0	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	581d78068b96ed7797c2dd7af5d9e745c1a01f8e575c0a07381286060c74d188	["*"]	2023-05-03 11:58:15	\N	2023-05-02 12:15:25	2023-05-03 11:58:15	\N
311f6c79-b763-42f0-a13f-230dc108ce67	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	18a3ae034b406f21ae97100477616dc22438e80a8be81ab9b656074ab2cf9404	["*"]	2023-04-26 13:38:18	\N	2023-04-25 14:44:53	2023-04-26 13:38:18	\N
02b38680-8213-468e-b4e7-d7ddbc866dd0	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	afcf3c5a41c633244c66fa77688f8f0d1abb7bacedd86c80e4223a969b047786	["*"]	\N	\N	2023-05-03 13:14:37	2023-05-03 13:14:37	\N
e219e740-24c4-44ee-82e5-c40f497ed42e	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	58f549c362576aa8885e19f319cc3a5f8e85e9145228c572e8f2ea8e87cee289	["*"]	2023-04-27 17:13:34	\N	2023-04-27 09:42:16	2023-04-27 17:13:34	\N
74bf026b-f15a-472a-9391-72cdc71d4826	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	307768525ddb1255888e2c9cefde9af6909b58e8f33b2971701a6e7d8a790d5b	["*"]	2023-04-23 12:27:26	\N	2023-04-23 10:41:45	2023-04-23 12:27:26	\N
125ce322-257e-4767-b5a1-430b08ea07a7	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	368ffd482d957d486c0f653b892f30dfee877e0495cf1ccfae684d8be6b0e38d	["*"]	\N	\N	2023-05-03 13:14:37	2023-05-03 13:14:37	\N
55867ef1-5b99-49c6-b1fe-5023c862ba9d	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	2bc1be3ab9791a6f6afb5628940228f4f3f5f96becd1d86416cb83fc6c0a6393	["*"]	\N	\N	2024-02-01 11:48:02	2024-02-01 11:48:02	\N
06bf0f5b-36ca-406e-921a-53421ca31154	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	ace360cb4eeea8d4ebe848a46df65027b3d5459cd7b03f49d6e9fa4ed7a6f803	["*"]	\N	\N	2024-02-01 11:48:30	2024-02-01 11:48:30	\N
169a4974-a70b-4b75-8485-19671f9b840f	App\\Models\\DBModels\\Data\\DLogins	0f1c36d6-bafb-45cb-a9c8-228fca505ea2	auth_token	b2ec915b569dcc2ba806bb1321892643b375064462640a0a9d4ab9df29c38179	["*"]	\N	\N	2024-02-01 13:32:01	2024-02-01 13:32:01	\N
\.


--
-- Data for Name: rel_assurance_map_automated_monitoring; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_assurance_map_automated_monitoring (id, "assuranceMap", "automatedMonitoring", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_assurance_map_collegiate_body; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_assurance_map_collegiate_body (id, "assuranceMap", "collegiateBody", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_assurance_map_document; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_assurance_map_document (id, "assuranceMap", document, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_assurance_map_external_inspection; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_assurance_map_external_inspection (id, "assuranceMap", "externalInspection", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_assurance_map_ics_matrix; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_assurance_map_ics_matrix (id, "assuranceMap", "icsMatrix", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_assurance_map_ics_work; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_assurance_map_ics_work (id, "assuranceMap", "icsWork", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_assurance_map_internal_inspection; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_assurance_map_internal_inspection (id, "assuranceMap", "internalInspection", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_assurance_map_issue; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_assurance_map_issue (id, "assuranceMap", issue, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_assurance_map_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_assurance_map_process (id, "assuranceMap", process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_assurance_map_risk; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_assurance_map_risk (id, "assuranceMap", risk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_assurance_map_self_rating; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_assurance_map_self_rating (id, "assuranceMap", "selfRating", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_audit_issue; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_audit_issue (id, audit, issue, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_audit_object; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_audit_object (id, audit, object, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_audit_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_audit_process (id, audit, process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_automated_monitoring_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_automated_monitoring_process (id, "automatedMonitoring", process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_automated_monitoring_system; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_automated_monitoring_system (id, "automatedMonitoring", system, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_collegiate_body_document; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_collegiate_body_document (id, "collegiateBody", document, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_collegiate_body_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_collegiate_body_process (id, "collegiateBody", process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_department_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_department_process (id, department, process, desk, "controlFunction", result, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_document_processes; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_document_processes (id, document, process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_external_inspection_fine; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_external_inspection_fine (id, inspection, fine, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_external_inspection_object; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_external_inspection_object (id, inspection, object, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_external_inspection_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_external_inspection_process (id, inspection, process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_external_inspection_risk; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_external_inspection_risk (id, "externalInspection", risk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_internal_inspection_object; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_internal_inspection_object (id, object, inspection, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_internal_inspection_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_internal_inspection_process (id, inspection, process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_internal_inspection_risk; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_internal_inspection_risk (id, "internalInspection", risk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_issue_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_issue_process (id, issue, process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_risk_processes; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_risk_processes (id, process, risk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_risk_rates; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_risk_rates (id, risk, process, object, rate, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_risk_risk; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_risk_risk (id, risk1, risk2, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_role_permission; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_role_permission (id, role, permission, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: rel_user_role; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_user_role (id, "user", role, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) FROM stdin;
76fc4b30-771e-47f6-bc25-872da3d19330	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	218787b6-3280-425e-821d-c2ed27d2155c	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 10:28:24	\N	2023-04-12 10:28:24	2023-04-12 10:28:24	\N
fcfe4be2-83c4-44bc-83ec-31047c3fa631	d99b273b-7eb5-419f-a1ba-f82b4495bc80	218787b6-3280-425e-821d-c2ed27d2155c	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 10:28:24	\N	2023-04-12 10:28:24	2023-04-12 10:28:24	\N
5f0b2439-d889-47b2-8041-505f4e4ac3dc	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	dc39cb0a-37ce-4d52-b5da-4b0764aaead3	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 11:01:24	\N	2023-04-12 11:01:24	2023-04-12 11:01:24	\N
7783342b-7a83-43da-8829-9c47b0ea6a84	d99b273b-7eb5-419f-a1ba-f82b4495bc80	dc39cb0a-37ce-4d52-b5da-4b0764aaead3	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 11:01:24	\N	2023-04-12 11:01:24	2023-04-12 11:01:24	\N
48082b42-b9b6-4258-a1d9-9c203ff8adf9	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	6a981780-c037-4a3a-8205-a314555fa75e	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 11:09:46	\N	2023-04-12 11:09:46	2023-04-12 11:09:46	\N
341695cc-6992-49da-8854-e75981030acd	d99b273b-7eb5-419f-a1ba-f82b4495bc80	6a981780-c037-4a3a-8205-a314555fa75e	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 11:09:46	\N	2023-04-12 11:09:46	2023-04-12 11:09:46	\N
fc5c6bb8-cae1-4f8b-95be-83ff14923e09	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	d3b7a818-e691-4601-9903-c97d5e723c36	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 12:23:24	\N	\N	\N	\N
ba5babf0-0dce-4392-89c7-46b338d0b0bc	d99b273b-7eb5-419f-a1ba-f82b4495bc80	d3b7a818-e691-4601-9903-c97d5e723c36	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 12:23:24	\N	\N	\N	\N
4baff7e5-190f-4605-aeaa-63760daeeaa7	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	88ce1cf8-a75c-48ee-b560-108fd12d477e	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 21:19:46	\N	\N	\N	\N
7dd68412-089b-40e3-9ee3-6f5047f53c12	d99b273b-7eb5-419f-a1ba-f82b4495bc80	88ce1cf8-a75c-48ee-b560-108fd12d477e	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 21:19:46	\N	\N	\N	\N
abb6300c-5970-45c9-b17b-2dde1d499001	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	10469920-1600-4644-90f2-fccf68769b32	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 21:19:54	\N	\N	\N	\N
0211ed81-eca6-4171-851f-fbb2b6459442	d99b273b-7eb5-419f-a1ba-f82b4495bc80	10469920-1600-4644-90f2-fccf68769b32	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-12 21:19:54	\N	\N	\N	\N
91516ad4-401b-43fc-b13b-a0593ba73a41	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	5e21631a-e411-4709-8660-dcc427d505de	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:29:53	\N	\N	\N	\N
575313e8-508a-4bb1-87a9-7e9188900761	d99b273b-7eb5-419f-a1ba-f82b4495bc80	5e21631a-e411-4709-8660-dcc427d505de	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:29:53	\N	\N	\N	\N
174e3a72-8ab1-432b-9f6e-607910ca92ae	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	68070e29-28f4-44bb-ae3a-4dedeebf4fa4	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:30:29	\N	\N	\N	\N
742165b8-ab3a-41b1-880f-bfb63f693c5a	d99b273b-7eb5-419f-a1ba-f82b4495bc80	68070e29-28f4-44bb-ae3a-4dedeebf4fa4	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:30:29	\N	\N	\N	\N
901e9ae7-4668-402d-a0e7-b6e4fdbfd8b1	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	517290db-4c3f-44f5-b3c7-5ecdb8c8d57f	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-18 14:52:34	\N	\N	\N	\N
afc0e7b4-9463-4010-aa2d-d1867f55d865	d99b273b-7eb5-419f-a1ba-f82b4495bc80	517290db-4c3f-44f5-b3c7-5ecdb8c8d57f	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-18 14:52:34	\N	\N	\N	\N
dff50dfc-9dd0-4b20-a33d-152931d1fc25	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	b54a3b04-81ad-4aee-b375-ee58ac416bf9	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:34:46	\N	\N	\N	\N
201fdf22-74f6-4846-a43f-1078a69022fe	d99b273b-7eb5-419f-a1ba-f82b4495bc80	b54a3b04-81ad-4aee-b375-ee58ac416bf9	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:34:46	\N	\N	\N	\N
a5862cd8-41eb-4acb-9e97-73b46c24af27	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	02ffe75c-1aad-4b82-a83d-286fa50dd591	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-05-03 11:55:59	\N	2023-05-03 11:55:59	2023-05-03 11:57:36	2023-05-03 11:57:36
b41aac6f-15af-4c4d-a0e2-d09e52f49c15	d99b273b-7eb5-419f-a1ba-f82b4495bc80	02ffe75c-1aad-4b82-a83d-286fa50dd591	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-05-03 11:55:59	\N	2023-05-03 11:55:59	2023-05-03 11:57:36	2023-05-03 11:57:36
\.


--
-- Data for Name: rel_user_vacancy; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) FROM stdin;
4189de33-ee7f-4fc6-8799-5a5bc58d6e1c	6d12ebdf-9c9d-4dac-8c37-0a934e00d984	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:30:21	\N	\N	\N	\N
65f3ad9c-ef2c-4596-bed4-6642245c8530	b0857a5d-8397-4994-bae0-8f6731ce050e	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 15:36:42	\N	\N	\N	\N
f0ce4f32-a181-4fec-9873-5dbf8085f18f	415f6538-bb35-4b7f-bb23-95195a32ae7b	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 17:06:26	\N	\N	\N	\N
ebdc71d5-10b8-4788-b704-0374b62c6930	c7995ac9-d3a7-438a-a3d4-e335bc57463b	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 17:07:31	\N	\N	\N	\N
8dc33ffb-b764-4090-ae4d-218915fe60b2	a12c2a8f-8db6-4f99-bbea-a07780b08638	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 17:09:31	\N	\N	\N	\N
07d1b951-94c1-4590-b799-daf1e3266e1b	56ba6886-8e87-4f2e-bef5-fcbc285698e3	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 17:12:29	\N	\N	\N	\N
8d7547fa-f8a3-428a-b06d-f5604abf53a6	484627ca-ff45-4115-bae9-e2c5c1fa67a1	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-13 17:12:55	\N	\N	\N	\N
1341414c-f61a-434b-9731-20f9c4913dbe	bb9846a5-7397-4ecd-94d8-63521c10856e	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-18 14:55:55	\N	\N	\N	\N
3d1f51c4-f9ab-4418-85e7-8d06fa3a5b55	b7755dfe-a1be-431b-b710-b0652121b3bd	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-19 00:35:52	\N	\N	\N	\N
f2651920-218c-4711-9368-e1e39a420061	f9c5dce2-21d0-4438-9f34-c90122ce384a	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:36:28	\N	\N	\N	\N
6ff23fd5-86fd-4518-ac19-8ddb71396192	3eb7c556-885d-44f4-b126-ed70bac8a83a	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-04-26 10:36:55	\N	\N	\N	\N
\.


--
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: root
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: root
--

SELECT pg_catalog.setval('public.migrations_id_seq', 138, true);


--
-- PostgreSQL database dump complete
--

