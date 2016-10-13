#!/bin/sh

composer install

if [! -e .env]; then
	cp .env.example .env
fi

php artisan key:generate

mysql -u root -p -e 'create database OIC_Book'
mysql -u root -p OIC_Book << OIC_Book.sql
