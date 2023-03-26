DOCKER
docker-compose build        - собрать докер-контейнеры
docker-compose up -d        - запустить докер-контейнеры
docker-compose down         - остановить докер-контенеры
docker exec -it {contiainer_name} bash          - открыть терминал контейнера (nginx, app, db)

DB:
psql -d assuranceMap < ./var/lib/postgresql/data/dumps/{dump_file_name}      - востановить БД из дампа


