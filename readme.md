# Wordpress with docker
### Ready to go wordpress docker

Running WordPress typically involves installing a LAMP (Linux, Apache, MySQL, and PHP) or LEMP (Linux, Nginx, MySQL, and PHP) stack, which can be time-consuming. However, by using tools like Docker and Docker Compose, you can simplify the process of setting up your preferred stack and installing WordPress

# Prerequisites
- Docker install on machine
- Docker install on your server


### Installation

#### Copy `.env.example` file and update accordingly.

```sh
cp .env.example .env
```

#### Update all content inside of wordpress folder

Create the containers with docker-compose up and the -d flag, which will run the db, wordpress, and webserver containers in the background:

```sh
docker-compose up -d
```

### You will see output confirming that your services have been created:

```sh
Creating db ... done
Creating wordpress ... done
Creating webserver ... done
Creating certbot   ... done
```
### Using docker-compose ps, check the status of your services:

```sh
docker-compose ps
```

If everything was successful, your db, wordpress, and webserver services will be Up.
```sh
  Name                 Command               State           Ports
-------------------------------------------------------------------------
db          docker-entrypoint.sh --def ...   Up       3306/tcp, 33060/tcp
webserver   nginx -g daemon off;             Up       0.0.0.0:80->80/tcp
wordpress   docker-entrypoint.sh php-fpm     Up       9000/tcp
```

If you change on any config re-run webserver

```sh
docker-compose up -d --force-recreate --no-deps webserver
```

Happy dockering.