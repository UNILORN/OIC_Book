#!/bin/sh

composer install

cp .env.example .env

php artisan key:generate

echo "OIC_Book を一度作成しましたか？(Y/N)"
read ans

if [ $ans = N ]; then
	mysql -u root -p -e 'create database OIC_Book'
	mysql -u root -p OIC_Book < OIC_Book.sql
else
	mysql -u root -p OIC_Book < OIC_Book.sql
fi

php artisan migrate
