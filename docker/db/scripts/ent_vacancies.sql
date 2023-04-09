create table ent_vacancies
(
    id           uuid not null
        primary key,
    "desc"       varchar(255),
    type         uuid
        constraint ent_vacancies_type_foreign
            references ent_vacancies_types,
    department   uuid not null
        constraint ent_vacancies_department_foreign
            references ent_departments,
    "validFrom"  timestamp(0),
    "validUntil" timestamp(0),
    author       uuid not null
        constraint ent_vacancies_author_foreign
            references ent_users,
    created_at   timestamp(0),
    updated_at   timestamp(0),
    deleted_at   timestamp(0)
);

alter table ent_vacancies
    owner to root;

create index ent_vacancies_department_author_index
    on ent_vacancies (department, author);

INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('a1395941-e8c9-452f-b9b0-8e1f647c7e93', null, '18f414ab-96be-49a2-afad-b0196e42f078', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-03-19 17:22:56', null, '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:23:12', '2023-03-19 17:23:14', null);
INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', null, '304f433a-83b8-4f92-84c0-c26a83082a55', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-03-19 17:30:24', null, '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:30:35', '2023-03-19 17:30:38', null);
INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('943cfa7c-7723-420e-8b19-1fbba63896dc', null, '0fc2d088-490f-4d57-b1ac-cdb31396cfe9', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-03-19 17:41:56', null, '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:42:09', '2023-03-19 17:42:11', null);
INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('336e94b4-21ce-4401-98e1-751fddb25689', 'Вед. спец. УМиОВА', '331f76b7-359c-4016-8973-ad25b6477b1f', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-04-07 11:37:11', null, '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-07-04 11:37:12', '2023-07-04 11:37:12', null);
INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('78f8ea50-4356-4d6e-bdd2-4ce277e23837', 'Вед. спец. УМиОВА', '331f76b7-359c-4016-8973-ad25b6477b1f', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-04-07 11:51:41', null, '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-07-04 11:51:42', '2023-07-04 11:51:42', null);
INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('16f8af34-d684-4312-bdc3-2492479d0ed4', 'Вед. спец. УМиОВА', '331f76b7-359c-4016-8973-ad25b6477b1f', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-04-07 12:10:19', null, '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-07-04 12:10:20', '2023-07-04 12:10:20', null);
INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('559002a9-61a2-49f8-a4e5-249d1cf18f8a', 'Вед. спец. УМиОВА', '331f76b7-359c-4016-8973-ad25b6477b1f', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-04-07 12:21:54', null, '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-07-04 12:21:55', '2023-07-04 12:21:55', null);
INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('bc09f2db-d7d7-409e-af6d-2009bf214d74', 'Вед. спец. УМиОВА', '331f76b7-359c-4016-8973-ad25b6477b1f', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-04-07 12:22:17', null, '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-07-04 12:22:18', '2023-07-04 12:22:18', null);
INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('577b7c1c-939e-4c6f-8cd5-a35b43d9808d', 'Вед. спец. УМиОВА', '331f76b7-359c-4016-8973-ad25b6477b1f', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-04-07 12:23:05', null, '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-07-04 12:23:05', '2023-07-04 12:23:05', null);
INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('75f6c9f2-8e83-4455-b718-9f4a80d67be9', 'Вед. спец. УМиОВА', '331f76b7-359c-4016-8973-ad25b6477b1f', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-04-07 12:23:20', null, '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-07-04 12:23:21', '2023-07-04 12:23:21', null);
INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('5b039f7d-2964-441c-b7f1-c466a2fa5075', 'Вед. спец. УМиОВА', '331f76b7-359c-4016-8973-ad25b6477b1f', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-04-07 12:29:09', null, '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-07-04 12:29:10', '2023-07-04 12:29:10', null);
INSERT INTO public.ent_vacancies (id, "desc", type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('92970b2e-c61b-4e33-bf83-24779e9195f9', 'Вед. спец. УМиОВА', null, '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-04-07 12:30:45', null, '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-07-04 12:30:45', '2023-07-04 12:30:45', null);
