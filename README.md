<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## About project

Данный проект является тестовым, в котором я учился собирать данные из XML файла и отправлять их в базу данных

Здесь я не затрагивал тему обработки вложенных массивов, только элементы основного массива

После отправки данных в базу данных я их визуализировал и добавил поиск по ID элемента

## Installation

Для установки данного проекта локально необходимо:

1. забрать файлы с этого репозитория и развернуть проект на своей локальной машине

2. создать базу данных, чтобы сделать миграцию, и установить нужные зависимости composer и npm

3. после того, как вы скачали файлы из репозитория к себе, их можно разместить в любой директории

4. для работы локально я использовал OpenServer

5. чтобы работать с Laravel, вам нужно поставить Composer

6. как только у вас появился Composer, нужно выполнить следующие команды:

    composer update
    composer dump-autoload

7. проект развернут, далее вам нужно создать у себя базу данных в phpmyadmin

8. для связи с базой данных нужно сделать копию файла .env.exapmle, и назвать данный файл .env, после чего внести правки:

    DB_DATABASE - имя базы
    DB_USERNAME - имя пользователя (обычно root)
    DB_PASSWORD - пароль (если не задан, оставить пустым)

9. после создания базы, вам нужно сделать миграцию следующей командой:
    
    php artisan migrate

10. необходимо также сгенерировать ключ приложения командой:

    php artisan key:generate

11. для дальнейшних компиляций интерфейса вам потребуется пакет npm
12. после его установки, вам необходимо ввести команду:

    npm install

13. для последующей компиляции интерфейса используйте одну из следующих команд:

    npm run watch - компиляция происходит в реальном времени, файлы создаются после любого изменения (решение для локальной разработки)
    npm run dev - компиляция происходит один раз, создается несжатые файлы
    npm run prod - компиляция происходит один раз, создается сжатые файлы (решение для продакшна)

По вопросам, предложенияи, замечаниям пишите на [почту](mailto:my.test.laravel.message@gmail.com) и в [telegram](https://t.me/uuviuu)

