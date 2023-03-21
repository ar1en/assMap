create table vacancies
(
    id           uuid         not null
        primary key,
    name         varchar(255) not null,
    type         uuid
        constraint vacancies_type_foreign
            references vacancies_types,
    department   uuid         not null
        constraint vacancies_department_foreign
            references departments,
    "validFrom"  timestamp(0) not null,
    "validUntil" timestamp(0),
    author       uuid         not null
        constraint vacancies_author_foreign
            references users,
    created_at   timestamp(0),
    updated_at   timestamp(0),
    deleted_at   timestamp(0)
);

alter table vacancies
    owner to root;

create index vacancies_department_author_index
    on vacancies (department, author);

INSERT INTO public.vacancies (id, name, type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('a1395941-e8c9-452f-b9b0-8e1f647c7e93', 'Глав. спец. УМиОВА', '18f414ab-96be-49a2-afad-b0196e42f078', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-03-19 17:22:56', null, '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:23:12', '2023-03-19 17:23:14', null);
INSERT INTO public.vacancies (id, name, type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', 'Менеджер УМиОВА', '304f433a-83b8-4f92-84c0-c26a83082a55', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-03-19 17:30:24', null, '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:30:35', '2023-03-19 17:30:38', null);
INSERT INTO public.vacancies (id, name, type, department, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('943cfa7c-7723-420e-8b19-1fbba63896dc', 'Спец. 1 категории УМиОВА', '0fc2d088-490f-4d57-b1ac-cdb31396cfe9', '2ea9346e-e818-434f-b387-a7d14b2f7c4b', '2023-03-19 17:41:56', null, '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:42:09', '2023-03-19 17:42:11', null);
