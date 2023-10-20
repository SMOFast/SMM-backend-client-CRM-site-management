# SMM Backend Client CRM & Site Management

## Описание

Проект представляет собой веб-приложение для управления заказами и статическими страницами, разработанное на базе фреймворка Laravel. Система позволяет автоматизировать процессы управления заказами и содержимым сайта в рамках SMM-проектов.

## Структура проекта

### Директории:

- **`.github`**: Хранит конфигурационные файлы GitHub для автоматизации процессов.
- **`app`**: Содержит основной код приложения.
- **`bootstrap`**: Хранит инициализационные скрипты для загрузки приложения.
- **`config`**: Хранит файлы конфигурации проекта.
- **`database`**: Связана с базой данных проекта.
- **`docker`**: Содержит файлы для работы с Docker.
- **`lang/en`**: Хранит англоязычные файлы локализации.
- **`public`**: Хранит публичные файлы проекта.
- **`resources`**: Содержит ресурсы приложения.
- **`routes`**: Хранит файлы маршрутизации.
- **`storage`**: Используется для хранения временных или загруженных файлов.
- **`tests`**: Содержит тесты проекта.

### Файлы:

- **`.editorconfig, .env.example, .gitattributes, .gitignore`**: Файлы конфигурации проекта и Git.
- **`LICENSE`**: Лицензионное соглашение проекта.
- **`README.md`**: Описание проекта и инструкции по его использованию.
- **`artisan`**: Скрипт командной строки для управления Laravel проектом.
- **`composer.json, composer.lock`**: Файлы Composer для управления зависимостями PHP.
- **`docker-compose.yml`**: Файл конфигурации Docker Compose.
- **`package-lock.json, package.json`**: Файлы Node.js для управления зависимостями JavaScript.
- **`phpunit.xml`**: Конфигурационный файл для инструмента тестирования PHPUnit.
- **`postcss.config.js, vite.config.js`**: Файлы конфигурации для инструментов сборки JavaScript.

## Установка и запуск

1. Склонируйте репозиторий на свой локальный компьютер.
```bash
git clone https://github.com/SitesReviews/SMM-backend-client-CRM-site-management.git
```
2. Перейдите в директорию проекта.
```bash
cd SMM-backend-client-CRM-site-management
```
3. Установите зависимости Composer и Node.js.
```bash
composer install
npm install
```
4. Скопируйте файл `.env.example` в новый файл `.env` и настройте его в соответствии с вашей средой.
```bash
cp .env.example .env
```
5. Сгенерируйте ключ приложения Laravel.
```bash
php artisan key:generate
```
6. Запустите миграции базы данных.
```bash
php artisan migrate
```
7. Запустите проект.
```bash
php artisan serve
```
Теперь проект должен быть доступен по адресу [http://localhost:8000](http://localhost:8000).

## Тестирование

Запустите тесты с помощью PHPUnit:
```bash
php artisan test
```

## Лицензия

Этот проект лицензирован под MIT License - см. Файл [LICENSE](LICENSE) для подробностей.

## Контрибьюторы

- [@yrdevel](https://github.com/yrdevel)
- [@DeFiTON](https://github.com/DeFiTON)
