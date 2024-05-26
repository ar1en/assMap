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
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.users (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	System	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:05:13	2023-03-19 17:05:15	\N
30b0310d-15bd-41b4-bd1d-17d5a875a6f6	Демидов Ярослав Дмитриевич	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:26:03	2023-03-19 17:26:06	\N
250702e4-ac1c-43f0-b299-f994af07a32a	Иванов Петр Михайлович	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-03-21 06:41:23	2023-03-21 06:41:23	\N
d99b273b-7eb5-419f-a1ba-f82b4495bc80	Голованов Михаил Сергеевич	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-03-21 06:41:23	2023-03-21 06:41:23	\N
\.


--
-- Data for Name: periods; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.periods (id, name, start, "end", desk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_maps; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_maps (id, period, name, status, "statusDate", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: departments; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.departments (id, "parentDepartment", "bpmId", "sasId", name, level, path, author, created_at, updated_at, deleted_at) FROM stdin;
fde4e629-f265-4297-b266-9bf698d9b3b0	\N	\N	\N	Компания	1	fde4e629-f265-4297-b266-9bf698d9b3b0	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:12:27	2023-03-19 17:12:29	\N
2ea9346e-e818-434f-b387-a7d14b2f7c4b	ec220a57-e3c2-4159-8d7c-6768b428531c	\N	\N	Управление методологии и организации внутреннего аудита	3	fde4e629-f265-4297-b266-9bf698d9b3b0/ec220a57-e3c2-4159-8d7c-6768b428531c/2ea9346e-e818-434f-b387-a7d14b2f7c4b	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:09:46	2023-03-19 17:09:49	\N
ec220a57-e3c2-4159-8d7c-6768b428531c	\N	\N	\N	Служба внутреннего аудита	2	fde4e629-f265-4297-b266-9bf698d9b3b0/ec220a57-e3c2-4159-8d7c-6768b428531c	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:07:37	2023-03-19 17:07:39	\N
\.


--
-- Data for Name: automated_monitoring; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.automated_monitoring (id, department, "desc", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_map_automated_monitoring; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_map_automated_monitoring (id, "assuranceMap", "automatedMonitoring", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: collegiate_bodies_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.collegiate_bodies_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: collegiate_bodies; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.collegiate_bodies (id, type, "desc", "sourceDepartment", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_map_collegiate_body; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_map_collegiate_body (id, "assuranceMap", "collegiateBody", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: documents_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.documents_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: documents; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.documents (id, name, type, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_map_document; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_map_document (id, "assuranceMap", document, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: external_controllers_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.external_controllers_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: objects; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.objects (id, "sasId", name, code, "supervisingDivision", supervisor, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: external_inspections; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.external_inspections (id, "externalControllerType", "desc", object, "sourceDepartment", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_map_external_inspection; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_map_external_inspection (id, "assuranceMap", "externalInspection", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: processes_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.processes_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: vacancies_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.vacancies_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
0fc2d088-490f-4d57-b1ac-cdb31396cfe9	Специалист 1 категории	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:22	2023-03-19 17:20:24	\N
a1392d5c-b82f-4bb0-af0d-0cb5ea470b41	Ведущий специалист	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:25	2023-03-19 17:20:28	\N
18f414ab-96be-49a2-afad-b0196e42f078	Главный специалист	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:30	2023-03-19 17:20:31	\N
304f433a-83b8-4f92-84c0-c26a83082a55	Менеджер	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:33	2023-03-19 17:20:34	\N
1d7c8cef-35a4-4e97-8180-e929e1e07a08	Заместитель начальника управления	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:36	2023-03-19 17:20:38	\N
331f76b7-359c-4016-8973-ad25b6477b1f	Начальник управления	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:20:39	2023-03-19 17:20:41	\N
\.


--
-- Data for Name: vacancies; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.vacancies (id, name, type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) FROM stdin;
a1395941-e8c9-452f-b9b0-8e1f647c7e93	Глав. спец. УМиОВА	18f414ab-96be-49a2-afad-b0196e42f078	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-03-19 17:22:56	\N	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:23:12	2023-03-19 17:23:14	\N
1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	Менеджер УМиОВА	304f433a-83b8-4f92-84c0-c26a83082a55	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-03-19 17:30:24	\N	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:30:35	2023-03-19 17:30:38	\N
943cfa7c-7723-420e-8b19-1fbba63896dc	Спец. 1 категории УМиОВА	0fc2d088-490f-4d57-b1ac-cdb31396cfe9	2ea9346e-e818-434f-b387-a7d14b2f7c4b	2023-03-19 17:41:56	\N	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:42:09	2023-03-19 17:42:11	\N
\.


--
-- Data for Name: processes; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.processes (id, "parentProcess", path, level, type, "sasId", "bpmId", name, code, owner, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ics_matrices; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ics_matrices (id, object, process, "desc", ics, "impactOnRisk", "testingYear", "updatingYear", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_map_ics_matrix; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_map_ics_matrix (id, "assuranceMap", "icsMatrix", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ics_works_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ics_works_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: ics_works; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.ics_works (id, type, object, process, "desc", executor, deadline, "icsPerimeter", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_map_ics_work; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_map_ics_work (id, "assuranceMap", "icsWork", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: internal_inspections; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.internal_inspections (id, department, "desc", object, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_map_internal_inspection; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_map_internal_inspection (id, "assuranceMap", "internalInspection", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: issues_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.issues_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: issues; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.issues (id, "sasId", type, desk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_map_issue; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_map_issue (id, "assuranceMap", issue, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_map_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_map_process (id, "assuranceMap", process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: risks_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.risks_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: risks; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.risks (id, "sasId", "bpmId", name, type, code, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_map_risk; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_map_risk (id, "assuranceMap", risk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: assurance_map_self_rating; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.assurance_map_self_rating (id, "assuranceMap", "selfRating", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: audits; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.audits (id, "sasId", code, name, "desc", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: audit_issue; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.audit_issue (id, audit, issue, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: audit_object; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.audit_object (id, audit, object, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: audit_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.audit_process (id, audit, process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: automated_monitoring_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.automated_monitoring_process (id, "automatedMonitoring", process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: systems; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.systems (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: automated_monitoring_system; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.automated_monitoring_system (id, "automatedMonitoring", system, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: collegiate_body_document; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.collegiate_body_document (id, "collegiateBody", document, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: collegiate_body_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.collegiate_body_process (id, "collegiateBody", process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: department_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.department_process (id, department, process, desk, "controlFunction", result, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: document_processes; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.document_processes (id, document, process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: fines; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.fines (id, object, sum, "desc", author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: external_inspection_fine; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.external_inspection_fine (id, inspection, fine, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: external_inspection_object; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.external_inspection_object (id, inspection, object, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: external_inspection_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.external_inspection_process (id, inspection, process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: external_inspection_risk; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.external_inspection_risk (id, "externalInspection", risk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- Data for Name: internal_inspection_object; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.internal_inspection_object (id, object, inspection, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: internal_inspection_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.internal_inspection_process (id, inspection, process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: internal_inspection_risk; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.internal_inspection_risk (id, "internalInspection", risk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: internal_inspections_types; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.internal_inspections_types (id, name, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: issue_process; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.issue_process (id, issue, process, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: logins; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.logins (id, "user", login, password, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.migrations (id, migration, batch) FROM stdin;
\.


--
-- Data for Name: password_reset_tokens; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: permissions; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.permissions (id, name, permission, "desc", author, created_at, updated_at, deleted_at) FROM stdin;
\.

--
-- Data for Name: risk_processes; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.risk_processes (id, process, risk, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: risk_rates; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.risk_rates (id, risk, process, object, rate, author, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: risk_risk; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.risk_risk (id, risk1, risk2, author, created_at, updated_at, deleted_at) FROM stdin;
\.

--
-- Data for Name: roles; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.roles (id, "parentRole", department, object, process, name, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: role_permission; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.role_permission (id, role, permission, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: user_role; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.user_role (id, "user", role, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: user_vacancy; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) FROM stdin;
6281052e-5f44-4f37-ab09-10f48cf91494	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	a1395941-e8c9-452f-b9b0-8e1f647c7e93	9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac	2023-03-19 17:27:53	\N	2023-03-19 17:28:00	2023-03-19 17:28:02	\N
47cf2c01-2ebe-4db1-8c7a-eb2a91602bbe	250702e4-ac1c-43f0-b299-f994af07a32a	1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-03-21 06:41:23	\N	2023-03-21 06:41:23	2023-03-21 06:41:23	\N
dbfcc98f-bc08-48c9-9c70-20bccc6a478a	250702e4-ac1c-43f0-b299-f994af07a32a	943cfa7c-7723-420e-8b19-1fbba63896dc	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-03-21 06:41:23	\N	2023-03-21 06:41:23	2023-03-21 06:41:23	\N
63695938-11a5-4fa5-b507-cfc1a3f4941f	d99b273b-7eb5-419f-a1ba-f82b4495bc80	a1395941-e8c9-452f-b9b0-8e1f647c7e93	30b0310d-15bd-41b4-bd1d-17d5a875a6f6	2023-03-21 06:41:23	\N	2023-03-21 06:41:23	2023-03-21 06:41:23	\N
\.


--
-- Data for Name: users_laravel_native; Type: TABLE DATA; Schema: public; Owner: root
--

COPY public.users_laravel_native (id, name, email, email_verified_at, password, remember_token, created_at, updated_at, deleted_at) FROM stdin;
666	Ярослав	2@2.ru	\N	$2y$10$75fTyBIhrHkFs4N5Up/ro.q/OyEgzG2BLI.kov0xCehP6YWCKPqxi	\N	2023-03-22 10:01:09	2023-03-22 10:01:09	\N
\.


--
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: root
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: root
--

SELECT pg_catalog.setval('public.migrations_id_seq', 147, true);


--
-- Name: users_laravel_native_id_seq; Type: SEQUENCE SET; Schema: public; Owner: root
--

SELECT pg_catalog.setval('public.users_laravel_native_id_seq', 2, true);


--
-- PostgreSQL database dump complete
--

