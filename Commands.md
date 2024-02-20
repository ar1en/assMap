dockerOS:
sudo chmod 777 -R .     - обновить права доступа (новые файлы создаются под другой УЗ и иногда у проекта нет полномочий на их чтение/запись)
rm -rf {file/folder_name}   - удалить папку или директорию

DOCKER:
docker-compose build        - собрать докер-контейнеры
docker-compose up -d        - запустить докер-контейнеры
docker-compose down         - остановить докер-контейнеры
docker exec -it {contiainer_name} bash          - открыть терминал контейнера (nginx, app, db)

DB:
pg_dump --dbname=assuranceMap --file="../var/lib/postgresql/data/dumps/{filename}" --data-only      - дамп БД
psql -d assuranceMap < ./var/lib/postgresql/data/dumps/{dump_file_name}      - востановить БД из дампа

LARAVEL/BACKEND:
php artisan cache:clear     - очистить весь кеш
php artisan make:dbModels {table_prefix}        -  (bpm helper) сгенерировать модели на основании БД
composer update     - обновить/скачать заново все зависимости laravel-проекта (необходимо делать если клонировал проект с репозитория)