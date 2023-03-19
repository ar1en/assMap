create table users
(
    id         uuid         not null
        primary key,
    name       varchar(255) not null,
    author     uuid         not null
        constraint users_author_foreign
            references users,
    created_at timestamp(0),
    updated_at timestamp(0),
    deleted_at timestamp(0)
);

alter table users
    owner to root;

INSERT INTO public.users (id, name, author, created_at, updated_at, deleted_at) VALUES ('9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', 'System', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:05:13', '2023-03-19 17:05:15', null);
INSERT INTO public.users (id, name, author, created_at, updated_at, deleted_at) VALUES ('30b0310d-15bd-41b4-bd1d-17d5a875a6f6', 'Демидов Ярослав Дмитриевич', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:26:03', '2023-03-19 17:26:06', null);
