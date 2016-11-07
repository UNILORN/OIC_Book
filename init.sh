#!/bin/sh

composer install

cp .env.example .env

php artisan key:generate

echo "OIC_Book を一度作成しましたか？(Y/N)"
read ans

if [ $ans = N ]; then
    echo "Database[OIC_Book] Create Now!"
    echo "mySQLのパスワードを入力"
	mysql -u root -p -e 'create database OIC_Book'
	echo "[OIC_Book] Dump file write"
    echo "mySQLのパスワードを入力"
	mysql -u root -p OIC_Book < OIC_Book.sql
else
    echo "[OIC_Book] Dump file write"
    echo "mySQLのパスワードを入力"
	mysql -u root -p OIC_Book < OIC_Book.sql
fi

php artisan migrate
