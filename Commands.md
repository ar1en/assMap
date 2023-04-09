OS:
sudo chmod 777 -R .     - обновить права доступа (новые файлы создаеются под другой УЗ и иногда у проекта нет полномочий на их чтение/запись)

DOCKER:
docker-compose build        - собрать докер-контейнеры
docker-compose up -d        - запустить докер-контейнеры
docker-compose down         - остановить докер-контенеры
docker exec -it {contiainer_name} bash          - открыть терминал контейнера (nginx, app, db)

DB:
pg_dump --dbname=assuranceMap --file="../var/lib/postgresql/data/dumps/{filename}" --data-only      - дамп БД
psql -d assuranceMap < ./var/lib/postgresql/data/dumps/{dump_file_name}      - востановить БД из дампа

LARAVEL:
php artisan cache:clear     - очистить весь кеш
php artisan make:dbModels {table_prefix}        -  (bpm helper) сгенерировать модели на основании БД