#!/bin/sh

composer install

cp .env.example .env

echo "====================================================="
echo "DatabaseNameをOIC_Bookとして.envを更新します"
sed -i -e 's/DB_DATABASE=homestead/DB_DATABASE=OIC_Book/' .env

echo "====================================================="
echo "DBのユーザ名を入力"
read username

echo "====================================================="
echo "DBのパスワードを入力"
read userpass

sed -i -e 's/DB_USERNAME=homestead/DB_USERNAME='$username'/' .env
sed -i -e 's/DB_PASSWORD=secret/DB_PASSWORD='$userpass'/' .env

echo "====================================================="
echo "!! key:generate !!"
echo "====================================================="
php artisan key:generate

echo "====================================================="
echo "OIC_Book を一度作成しましたか？(Y/N)"
read ans
echo "====================================================="

if [ $ans = N ]; then

    echo "====================================================="
    echo "Database[OIC_Book] Create Now!"
    echo "mySQLのパスワードを入力"
    echo "====================================================="

	mysql -u root -p -e 'create database OIC_Book'
	echo "====================================================="

	echo "[OIC_Book] Dump file write"
    echo "mySQLのパスワードを入力"
    echo "====================================================="

	mysql -u root -p OIC_Book < OIC_Book.sql
else
    echo "====================================================="
    echo "[OIC_Book] Dump file write"
    echo "mySQLのパスワードを入力"
    echo "====================================================="
    mysql -u root -p -e 'drop database `OIC_Book`;create database `OIC_Book`'
fi

php artisan migrate
php artisan db:seed
