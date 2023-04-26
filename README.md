# Teste

Follow the steps below to run the test.


## Requirements

- https://docker.com

## Install

In the project root run:
```bash
docker-compose up -d
```

To access the container run:
```bash
docker exec -it containerid bash
```

Go to the app folder then run:
```bash
composer install
```

Generate migrations and run seeds:
```bash
php artisan migrate --seed
```

## Routes

**Get all products**

Request

GET localhost/api/products

**Get specific product**

Request

GET localhost/api/products/{productId}

**Create new product**

Request

POST localhost/api/products

**Update specific product**

Request

PUT localhost/api/products/{productId}

**Delete specific product**

Request

DELETE localhost/api/products/{productId}
