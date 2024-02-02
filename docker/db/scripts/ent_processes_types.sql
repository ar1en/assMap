create table ent_processes_types
(
    id         uuid not null
        primary key,
    name       text not null,
    author     uuid not null
        constraint ent_processes_types_author_foreign
            references ent_users,
    created_at timestamp(0),
    updated_at timestamp(0),
    deleted_at timestamp(0)
);

alter table ent_processes_types
    owner to root;

INSERT INTO public.ent_processes_types (id, name, author, created_at, updated_at, deleted_at) VALUES ('0f10f1ff-8fee-4c98-978f-7b73ccbf5708', 'Тестовый тип 1', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2024-02-02 10:15:59', '2024-02-02 10:16:03', null);
