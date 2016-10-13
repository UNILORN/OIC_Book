#!/bin/sh

composer install
composer update

if [! -e .env]; then
	cp .env.example .env
fi

php artisan key:generate

echo "OIC_Book を一度作成しましたか？(Y/N)"
read ans

if [ $ans = N ]; then
	mysql -u root -p -e 'create database OIC_Book'
	mysql -u root -p OIC_Book < OIC_Book.sql
else
	mysql -u root -p OIC_Book < OIC_Book.sql
fi


