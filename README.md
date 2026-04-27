<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

In addition, [Laracasts](https://laracasts.com) contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

You can also watch bite-sized lessons with real-world projects on [Laravel Learn](https://laravel.com/learn), where you will be guided through building a Laravel application from scratch while learning PHP fundamentals.

## Agentic Development

Laravel's predictable structure and conventions make it ideal for AI coding agents like Claude Code, Cursor, and GitHub Copilot. Install [Laravel Boost](https://laravel.com/docs/ai) to supercharge your AI workflow:

```bash
composer require laravel/boost --dev

php artisan boost:install
```

Boost provides your agent 15+ tools and skills that help agents build Laravel applications while following best practices.

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).




Перечислите список composer-пакетов, которые использует фреймворк Laravel после установки:
Основные зависимости (require):
php ^8.3 - язык программирования
laravel/framework ^13.0 - ядро фреймворка Laravel
laravel/tinker ^3.0 - интерактивная оболочка для работы с Laravel

Пакеты для разработки (require-dev):
fakerphp/faker ^1.23 - генерация тестовых данных
laravel/pail ^1.2.5 - инструмент для работы с логами
laravel/pint ^1.27 - форматирование кода (PHP CS Fixer)
mockery/mockery ^1.6 - библиотека для создания mock-объектов в тестах
nunomaduro/collision ^8.6 - улучшенный вывод ошибок для консоли
phpunit/phpunit ^12.5.12 - фреймворк для модульного тестирования

Зависимости, установленные автоматически (через laravel/framework):
guzzlehttp/guzzle - HTTP-клиент
symfony/* - компоненты Symfony (консоль, http-foundation, process и др.)
monolog/monolog - логирование
doctrine/inflector - преобразование слов во множественное/единственное число
vlucas/phpdotenv - работа с переменными окружения
ramsey/uuid - генерация UUID
nesbot/carbon - работа с датами и временем
league/flysystem - работа с файловыми системами

Изучите директорию config и опишите какие файлы хранятся в этой директории:
app.php	Основные настройки приложения: имя, окружение, часовой пояс, провайдеры
auth.php	Настройки аутентификации: guards, провайдеры, пароли
cache.php	Настройки кэширования (file, redis, memcached, database)
database.php	Настройки подключения к БД (MySQL, PostgreSQL, SQLite, SQL Server)
filesystems.php	Настройки файловых систем (local, public, s3)
logging.php	Настройки логирования (channels, stack, single, daily)
mail.php	Настройки отправки почты (SMTP, Mailgun, SES, Postmark)
queue.php	Настройки очередей (database, redis, sqs, beanstalkd)
services.php	Настройки сторонних сервисов (Mailgun, Postmark, Stripe)
session.php	Настройки сессий (file, cookie, database, redis)

В какой директории хранятся основные файлы (классы) с бизнес-логикой приложения?
Основные файлы (классы) с бизнес-логикой хранятся в директории: app/


Ответы по домашнему заданию к занятию "MVC. Базы данных":

Миграции — это механизм версионирования схемы базы данных. Они позволяют описывать изменения структуры БД (создание таблиц, добавление/удаление колонок, индексов, внешних ключей и т.д.) в виде PHP-классов, которые хранятся в системе контроля версий.

Eloquent ORM — это встроенная в Laravel объектно-реляционная проекция (Object-Relational Mapper), которая позволяет работать с базой данных через PHP-объекты, а не писать сырые SQL-запросы.

