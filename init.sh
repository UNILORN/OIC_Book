#!/bin/sh

composer install

if [! -e .env]; then
	cp .env.example .env
fi

php artisan key:generate

