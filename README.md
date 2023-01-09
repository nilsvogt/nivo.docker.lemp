# Containerized LEMP stack using Docker

Services below are configured for you:

- Nginx
- PHP8.1
- Mysql8
- Node
- Redis

Run Docker Compose
> docker-compose up -d --build

List containers
> docker ps

Run bash in certain container
> docker exec -it php81-container bash