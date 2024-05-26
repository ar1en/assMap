create table rel_user_vacancy
(
    id           uuid         not null
        primary key,
    "user"       uuid         not null
        constraint rel_user_vacancy_user_foreign
            references ent_users,
    vacancy      uuid         not null
        constraint rel_user_vacancy_vacancy_foreign
            references ent_vacancies,
    author       uuid         not null
        constraint rel_user_vacancy_author_foreign
            references ent_users,
    "validFrom"  timestamp(0) not null,
    "validUntil" timestamp(0),
    created_at   timestamp(0),
    updated_at   timestamp(0),
    deleted_at   timestamp(0)
);

alter table rel_user_vacancy
    owner to root;

create index rel_user_vacancy_user_vacancy_author_index
    on rel_user_vacancy ("user", vacancy, author);

INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('6281052e-5f44-4f37-ab09-10f48cf91494', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', 'a1395941-e8c9-452f-b9b0-8e1f647c7e93', '9b2a7d0a-573d-4dfd-98a4-9c0d8a7b1bac', '2023-03-19 17:27:53', null, '2023-03-19 17:28:00', '2023-03-19 17:28:02', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('dbfcc98f-bc08-48c9-9c70-20bccc6a478a', '250702e4-ac1c-43f0-b299-f994af07a32a', '943cfa7c-7723-420e-8b19-1fbba63896dc', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-03-21 06:41:23', null, '2023-03-21 06:41:23', '2023-03-21 06:41:23', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('63695938-11a5-4fa5-b507-cfc1a3f4941f', 'd99b273b-7eb5-419f-a1ba-f82b4495bc80', 'a1395941-e8c9-452f-b9b0-8e1f647c7e93', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-03-21 06:41:23', null, '2023-03-21 06:41:23', '2023-03-21 06:41:23', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('d59078c7-08dd-459b-877d-c2c994e0a8cf', 'e169f33f-febb-4dd5-8140-da6077bd5400', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-04 13:54:29', null, '2023-04-04 13:54:29', '2023-04-04 13:54:29', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('a3698623-fa88-4af1-b041-1914602f5298', 'e169f33f-febb-4dd5-8140-da6077bd5400', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-04 13:54:29', null, '2023-04-04 13:54:29', '2023-04-04 13:54:29', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('a11abd1d-f295-4a19-9c31-f5b8e956c685', 'c7d6f310-dce2-4e53-8dd0-1624a260250f', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-06 15:15:21', null, '2023-04-06 15:15:21', '2023-04-06 15:15:21', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('f4dc0f2f-edac-448e-878b-e2a3ba81d77c', '4f413bd0-cf49-4787-a30a-f8b0760802ef', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-06 15:16:00', null, '2023-04-06 15:16:00', '2023-04-06 15:16:00', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('88d3605b-1711-422b-9f3d-24f64843ddcb', 'c692da5d-07a4-4596-a576-e8e20c1299a6', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-06 15:16:32', null, '2023-04-06 15:16:32', '2023-04-06 15:16:32', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('93eb9e18-bde0-47a4-a7fd-27d347c2b6ee', 'bbe0557d-d761-4390-b6d3-11837245fe42', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-06 15:17:15', null, '2023-04-06 15:17:15', '2023-04-06 15:17:15', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('17d7779a-848d-4dc8-8400-c86a866848a5', '5b1b5ebb-ad9f-4bf3-8b1c-4af458294638', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-06 15:18:27', null, '2023-04-06 15:18:27', '2023-04-06 15:18:27', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('5c4bb9de-1ccd-4ca7-a76f-18a80340b313', 'c332448d-865b-4b0e-bf9e-d3fa5d4ba0d8', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-06 15:29:42', null, '2023-04-06 15:29:42', '2023-04-06 15:29:42', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('3530ecb6-0f88-47be-8b6f-b292897d7d5d', '9141dcbf-50ae-4502-bd30-04d9adcd448b', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-06 15:32:07', null, '2023-04-06 15:32:07', '2023-04-06 15:32:07', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('a81d4e23-9a46-427c-933f-eddd68df41b3', 'fb56bf60-b7bc-4fe9-9b50-ed9511c7c1b7', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-06 15:42:42', null, '2023-04-06 15:42:42', '2023-04-06 15:42:42', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('fb86c213-9d84-41ae-9077-79ad862d1217', 'd442f03d-7c47-4f57-8401-5329dbd5f970', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-06 16:05:27', null, '2023-04-06 16:05:27', '2023-04-06 16:05:27', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('28a01465-b1e3-46ae-a6f2-7d4409ba1c08', '5d628a6f-68cc-4e5e-8dac-33df9e3d851e', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-07 12:00:24', null, '2023-04-07 12:00:24', '2023-04-07 12:00:24', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('4604e22f-98b4-47ed-a246-22c6c5b2285a', '7efbdbd9-ccc1-47b5-a417-f10bc288ba85', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-07 12:23:38', null, '2023-04-07 12:23:38', '2023-04-07 12:23:38', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('1985884a-a990-4f04-ba4c-7d704b911982', '97eea5fa-08e5-4184-bbc8-13f1b6932bbd', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-07 12:23:42', null, '2023-04-07 12:23:42', '2023-04-07 12:23:42', null);
INSERT INTO public.rel_user_vacancy (id, "user", vacancy, author, "validFrom", "validUntil", created_at, updated_at, deleted_at) VALUES ('6da815b2-5648-4694-8098-5b10baefb6d7', '000b088c-86dc-4428-8b66-e51e9ff3b8b8', '1e3f3d3d-a2b5-4fcc-83d1-a2d110a15271', '30b0310d-15bd-41b4-bd1d-17d5a875a6f6', '2023-04-09 13:39:01', null, '2023-04-09 13:39:01', '2023-04-09 13:39:01', null);
