Containerized LEMPA stack using Docker

- PHP8.1
- Mysql8
- Nginx
- Node

Run Docker Compose
>  docker-compose up -d --build

List containers
> docker ps

Run bash in certain container
> docker exec -it php81-container /bin/bash 