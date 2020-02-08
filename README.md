# LAMP Stack Docker Compose

## Introduction

Launch LAMP services by docker-compose. This environment consists of 3 containers:
1. PHP 5.5.29 + APACHE 2.4.10
2. MYSQL 5.6.46
3. PHPMYADMIN 5.0.0 (image: php 7.4.1; Apache/2.4.38 (Debian))

> Purposes of development and test. Not recommended to use in production environment.

## User Guide

### Project Structure:

```
$ tree
.
├── db-data
├── docker-compose.yml
├── php5apache
│   └── Dockerfile
└── www
    ├── connDB.php
    └── index.php
```

* `db-data`: persistent MySQL DB Data will be here.
* `www`: place your php web code here.


### Usage

1. `git clone` this repository.

2. Copy your php web code into directory `www`.

3. **IMPORTANT!!** Modify MySQL Root Password in docker-compose.yml:

```
MYSQL_ROOT_PASSWORD: root1234
```

4. (Optional) If you have existing mysql data(`/var/lib/mysql/*`), you can copy them to overwrite `db-data/*`.


5. Launch LAMP services:

```
$ cd lamp-stack-docker-compose
$ docker-compose up -d
```

6. Test:
    - Pure PHP: http://127.0.0.1:41001
    - DB Connect: http://127.0.0.1:41001/connDB.php
    - PhpMyAdmin http://127.0.0.1:41002


7. If you want to terminal LAMP services but keep data:
```
$ docker-compose down
```
> * Container instances will be removed.
> * MySQL data will persist in folder `db-data`.






