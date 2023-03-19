create table vacancies_types
(
    id         uuid not null
        primary key,
    name       text not null,
    author     uuid not null
        constraint vacancies_types_author_foreign
            references users,
    created_at timestamp(0),
    updated_at timestamp(0),
    deleted_at timestamp(0)
);

alter table vacancies_types
    owner to root;

INSERT INTO public.vacancies_types (id, name, author, created_at, updated_at, deleted_at) VALUES ('0fc2d088-490f-4d57-b1ac-cdb31396cfe9', 'Специалист 1 категории', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:20:22', '2023-03-19 17:20:24', null);
INSERT INTO public.vacancies_types (id, name, author, created_at, updated_at, deleted_at) VALUES ('a1392d5c-b82f-4bb0-af0d-0cb5ea470b41', 'Ведущий специалист', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:20:25', '2023-03-19 17:20:28', null);
INSERT INTO public.vacancies_types (id, name, author, created_at, updated_at, deleted_at) VALUES ('18f414ab-96be-49a2-afad-b0196e42f078', 'Главный специалист', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:20:30', '2023-03-19 17:20:31', null);
INSERT INTO public.vacancies_types (id, name, author, created_at, updated_at, deleted_at) VALUES ('304f433a-83b8-4f92-84c0-c26a83082a55', 'Менеджер', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:20:33', '2023-03-19 17:20:34', null);
INSERT INTO public.vacancies_types (id, name, author, created_at, updated_at, deleted_at) VALUES ('1d7c8cef-35a4-4e97-8180-e929e1e07a08', 'Заместитель начальника управления', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:20:36', '2023-03-19 17:20:38', null);
INSERT INTO public.vacancies_types (id, name, author, created_at, updated_at, deleted_at) VALUES ('331f76b7-359c-4016-8973-ad25b6477b1f', 'Начальник управления', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:20:39', '2023-03-19 17:20:41', null);
