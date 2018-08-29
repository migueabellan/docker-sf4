# Docker Symfony 4

> Docker-compose for Symfony (PHP72-FPM - NGINX - MySQL)

Create a `.env`

```sh
$ cp .env.dist .env
```

Build and run container

```sh
$ docker-compose build
$ docker-compose up -d
```

Copy your symfony 4 in `web/` folder

```sh
$ web/
```

Access project

```sh
http://localhost:1180
```