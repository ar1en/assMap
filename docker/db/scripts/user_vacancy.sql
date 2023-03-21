create table user_vacancy
(
    id           uuid         not null
        primary key,
    "user"       uuid         not null
        constraint user_vacancy_user_foreign
            references users,
    vacancy      uuid         not null
        constraint user_vacancy_vacancy_foreign
            references vacancies,
    author       uuid         not null
        constraint user_vacancy_author_foreign
            references users,
    "validFrom"  timestamp(0) not null,
    "validUntil" timestamp(0),
    created_at   timestamp(0),
    updated_at   timestamp(0),
    deleted_at   timestamp(0)
);

alter table user_vacancy
    owner to root;

create index user_vacancy_user_vacancy_author_index
    on user_vacancy ("user", vacancy, author);

INSERT INTO public.user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('6281052e-5f44-4f37-ab09-10f48cf91494', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', 'a1395941-e8c9-452f-b9b0-8e1f647c7e93', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:27:53', null, '2023-03-19 17:28:00', '2023-03-19 17:28:02', null);
