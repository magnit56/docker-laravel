<h1>Laravel в Docker</h1>
<h2>Описание</h2>
Сборка Docker: Laravel 9 с PHP 8.1, MYSQL 5.7, Redis 7<br>
- Кэш хранится в Redis<br>
- Сессии хранятся в Redis<br>
- Брокером очередей является Redis<br>

<h2>Использование</h2>
Набрать следующие команды в папке с проектом:<br>

**Развернуть:<br>**
$<code>docker-compose build</code><br>
$<code>docker-compose up -d</code><br>

**Основные команды:<br>**
_Установка зависимостей composer:<br>_
$<code>docker run --rm -w=/var/www/html -v $(pwd):/var/www/html composer install</code><br>
_Генерация кода приложения:<br>_
$<code>docker-compose exec fpm php artisan key:generate</code><br>
_Запуск миграций:<br>_
$<code>docker-compose exec fpm php artisan migrate</code><br>
_Установка зависимостей npm:<br>_
$<code>docker run --rm -w=/var/www/html -v $(pwd):/var/www/html node:18-alpine npm install</code><br>
_Сборка фронтенда:<br>_
$<code>docker run --rm -w=/var/www/html -v $(pwd):/var/www/html node:18-alpine npm run dev</code><br>

**Неосновные команды:<br>**
_Заполнение базы данных:<br>_
$<code>docker-compose exec fpm php artisan db:seed</code><br>
_Запуск сервера очередей:<br>_
$<code>docker-compose exec fpm php artisan queue:work</code><br>
