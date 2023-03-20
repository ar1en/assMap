create table departments
(
    id                 uuid    not null
        primary key
        constraint departments_id_unique
            unique,
    "parentDepartment" uuid
        constraint departments_parentdepartment_foreign
            references departments,
    "bpmId"            varchar(255),
    "sasId"            varchar(255),
    name               text    not null,
    level              integer not null,
    path               text    not null,
    author             uuid    not null
        constraint departments_author_foreign
            references users,
    created_at         timestamp(0),
    updated_at         timestamp(0),
    deleted_at         timestamp(0)
)
    using ???;

alter table departments
    owner to root;

create index departments_parentdepartment_author_index
    on departments using ??? ("parentDepartment", author);

INSERT INTO public.departments (id, "parentDepartment", "bpmId", "sasId", name, level, path, author, created_at, updated_at, deleted_at) VALUES ('fde4e629-f265-4297-b266-9bf698d9b3b0', null, null, null, 'Компания', 1, 'fde4e629-f265-4297-b266-9bf698d9b3b0', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:12:27', '2023-03-19 17:12:29', null);
INSERT INTO public.departments (id, "parentDepartment", "bpmId", "sasId", name, level, path, author, created_at, updated_at, deleted_at) VALUES ('2ea9346e-e818-434f-b387-a7d14b2f7c4b', 'ec220a57-e3c2-4159-8d7c-6768b428531c', null, null, 'Управление методологии и организации внутреннего аудита', 3, 'fde4e629-f265-4297-b266-9bf698d9b3b0/ec220a57-e3c2-4159-8d7c-6768b428531c/2ea9346e-e818-434f-b387-a7d14b2f7c4b', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:09:46', '2023-03-19 17:09:49', null);
INSERT INTO public.departments (id, "parentDepartment", "bpmId", "sasId", name, level, path, author, created_at, updated_at, deleted_at) VALUES ('ec220a57-e3c2-4159-8d7c-6768b428531c', null, null, null, 'Служба внутреннего аудита', 2, 'fde4e629-f265-4297-b266-9bf698d9b3b0/ec220a57-e3c2-4159-8d7c-6768b428531c', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:07:37', '2023-03-19 17:07:39', null);
