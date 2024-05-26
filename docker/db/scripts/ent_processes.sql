create table ent_processes
(
    id              uuid         not null
        primary key
        constraint ent_processes_id_unique
            unique,
    "parentProcess" uuid
        constraint ent_processes_parentprocess_foreign
            references ent_processes,
    path            text         not null,
    level           integer      not null,
    type            uuid         not null
        constraint ent_processes_type_foreign
            references ent_processes_types,
    "sasId"         varchar(255) not null
        constraint ent_processes_sasid_unique
            unique,
    "bpmId"         varchar(255) not null
        constraint ent_processes_bpmid_unique
            unique,
    name            text         not null,
    code            text         not null,
    owner           uuid         not null
        constraint ent_processes_owner_foreign
            references ent_vacancies,
    "validFrom"     timestamp(0) not null,
    "validUntil"    timestamp(0),
    author          uuid         not null
        constraint ent_processes_author_foreign
            references ent_users,
    created_at      timestamp(0),
    updated_at      timestamp(0),
    deleted_at      timestamp(0)
);

alter table ent_processes
    owner to root;

create index ent_processes_parentprocess_bpmid_owner_author_index
    on ent_processes ("parentProcess", "bpmId", owner, author);

INSERT INTO public.ent_processes (id, "parentProcess", path, level, type, "sasId", "bpmId", name, code, owner, "validFrom", "validUntil", author, created_at, updated_at, deleted_at) VALUES ('94ee63e3-cec4-4d79-8121-b89d715a8b8a', null, '.', 1, '0f10f1ff-8fee-4c98-978f-7b73ccbf5708', 'BP-001', 'AS.AS', 'Тестовый процесс', '001', '336e94b4-21ce-4401-98e1-751fddb25689', '2024-02-02 10:13:40', null, '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2024-02-02 10:13:11', '2024-02-02 10:13:18', null);
