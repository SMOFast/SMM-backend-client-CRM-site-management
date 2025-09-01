# SMM Backend Client CRM & Site Management

## Описание

Веб-приложение для управления заказами и контентом в рамках SMM-проектов. Разработано на Laravel 9 с использованием современного стека технологий для обеспечения безопасности, производительности и удобства использования.

### Ключевые возможности:
- 🔐 **Безопасная аутентификация** с поддержкой двухфакторной авторизации (2FA)
- 📦 **Управление заказами** через интеграцию с внешним API
- 📄 **Система управления контентом** для статических страниц
- 👥 **Управление пользователями** с различными уровнями доступа
- 🛒 **Корзина покупок** с сессионным хранением
- 📊 **Личный кабинет** для отслеживания заказов и тикетов
- 🌐 **Адаптивный интерфейс** на Bootstrap 5

### Технологический стек:
- **Backend**: Laravel 9, PHP 8.1+
- **Frontend**: Vite, Bootstrap 5, Alpine.js, jQuery, Livewire
- **База данных**: MySQL 8.0
- **Кэширование**: Redis
- **Аутентификация**: Laravel Fortify + Jetstream
- **API**: Laravel Sanctum
- **Контейнеризация**: Docker + Docker Compose

## Архитектура проекта

### Структура приложения:

```
app/
├── Actions/           # Fortify действия для аутентификации
├── Http/
│   ├── Controllers/   # Контроллеры приложения
│   │   ├── Orders/    # Управление заказами
│   │   ├── Pages/     # Управление страницами
│   │   └── Users/     # Управление пользователями
│   ├── Middleware/    # Промежуточное ПО
│   └── Requests/      # Валидация запросов
├── Models/            # Eloquent модели
├── Services/          # Бизнес-логика и API сервисы
│   ├── Auth/         # Сервисы аутентификации
│   ├── Client/       # Клиентские сервисы
│   └── Server/       # Серверные API сервисы
└── View/             # Компоненты представлений
```

### Основные компоненты:

#### Сервисы API (app/Services/Server/)
- `BaseApiService.php` - Базовый класс для работы с внешним API
- `CategoryService.php` - Управление категориями товаров
- `ProductService.php` - Управление товарами
- `OrderService.php` - Обработка заказов
- `PageService.php` - Управление контентом страниц

#### Контроллеры (app/Http/Controllers/)
- `OrderController.php` - Корзина и заказы
- `PageController.php` - Статические страницы
- `AuthController.php` - Аутентификация
- `CabinetController.php` - Личный кабинет

## Системные требования

- **PHP**: 8.1 или выше
- **Composer**: 2.0+
- **Node.js**: 16+ и npm
- **MySQL**: 8.0+ или MariaDB 10.3+
- **Redis**: 6.0+ (для кэширования и сессий)
- **Nginx**: 1.18+ или Apache 2.4+

## Установка и запуск

### Локальная разработка

1. **Клонирование репозитория**
```bash
git clone https://github.com/SMOFast/SMM-backend-client-CRM-site-management.git
cd SMM-backend-client-CRM-site-management
```

2. **Установка зависимостей**
```bash
# PHP зависимости
composer install

# Node.js зависимости
npm install
```

3. **Настройка окружения**
```bash
# Копирование файла окружения
cp .env.example .env

# Генерация ключа приложения
php artisan key:generate
```

4. **Настройка базы данных**
```bash
# Создание и настройка БД
php artisan migrate

# Заполнение тестовыми данными (опционально)
php artisan db:seed
```

5. **Сборка фронтенда**
```bash
# Режим разработки
npm run dev

# Продакшн сборка
npm run build
```

6. **Запуск приложения**
```bash
# Встроенный сервер разработки
php artisan serve

# Приложение доступно по адресу: http://localhost:8000
```

### Docker развертывание

1. **Подготовка окружения**
```bash
# Копирование и настройка .env
cp .env.example .env

# Настройка переменных для Docker
export DOCKER_PROJECT_NAME=smo_client
export DOCKER_HTTP_PORT=8080
```

2. **Создание Docker сети**
```bash
docker network create smo-network
```

3. **Запуск контейнеров**
```bash
# Сборка и запуск
docker-compose up -d --build

# Установка зависимостей в контейнере
docker-compose exec php81 composer install
docker-compose exec php81 php artisan key:generate
docker-compose exec php81 php artisan migrate
```

4. **Сборка фронтенда**
```bash
npm install
npm run build
```

### Переменные окружения

Ключевые переменные в `.env`:

```env
# Основные настройки
APP_NAME="SMM Client CRM"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# База данных
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=smm_client
DB_USERNAME=root
DB_PASSWORD=your_secure_password

# Внешний API
SERVER_API_URL=https://api.example.com
SERVER_API_KEY=your_api_key

# Почта
MAIL_MAILER=smtp
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=your_email@example.com
MAIL_PASSWORD=your_password
MAIL_ENCRYPTION=tls
```

## Безопасность

### Аутентификация и авторизация
- **Laravel Fortify** для аутентификации
- **Laravel Jetstream** для управления профилями
- **Двухфакторная аутентификация (2FA)** через Google Authenticator
- **Laravel Sanctum** для API токенов
- **CSRF защита** на всех формах

### Настройки безопасности
- **Шифрование сессий** (рекомендуется включить)
- **HTTPS** в продакшене (обязательно)
- **Валидация входных данных** через Form Requests
- **Rate limiting** для предотвращения брутфорса
- **XSS защита** через Blade шаблоны

### Рекомендации по безопасности

1. **Включите шифрование сессий** в `config/session.php`:
```php
'encrypt' => true,
```

2. **Настройте CORS** в `config/cors.php`:
```php
'allowed_origins' => [
    'https://yourdomain.com',
    'https://www.yourdomain.com'
],
```

3. **Настройте безопасные заголовки** в nginx/apache
4. **Используйте HTTPS** в продакшене
5. **Регулярно обновляйте зависимости**

## Тестирование

### Запуск тестов
```bash
# Все тесты
php artisan test

# Тесты с подробным выводом
php artisan test --verbose

# Конкретная группа тестов
php artisan test --testsuite=Feature
```

### Статический анализ
```bash
# Laravel Pint (код стайл)
./vendor/bin/pint

# PHPStan (статический анализ)
./vendor/bin/phpstan analyse
```

## API документация

### Аутентификация
Приложение использует токены Sanctum для API аутентификации:

```javascript
// Получение CSRF токена
fetch('/sanctum/csrf-cookie')

// Авторизация через API
fetch('/api/user', {
    headers: {
        'Authorization': 'Bearer ' + token,
        'Accept': 'application/json'
    }
})
```

### Основные эндпоинты
- `GET /api/user` - Информация о пользователе
- `POST /addToBasket` - Добавление в корзину
- `GET /cart` - Просмотр корзины

## Развертывание в продакшене

### Подготовка к развертыванию
```bash
# Оптимизация автозагрузчика
composer install --no-dev --optimize-autoloader

# Кэширование конфигурации
php artisan config:cache

# Кэширование маршрутов  
php artisan route:cache

# Кэширование представлений
php artisan view:cache

# Сборка фронтенда
npm run build
```

### Настройка веб-сервера

#### Nginx конфигурация
```nginx
server {
    listen 80;
    server_name yourdomain.com;
    root /var/www/html/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass php:9000;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

### Мониторинг и логирование
- Логи находятся в `storage/logs/`
- Настройте ротацию логов
- Используйте мониторинг производительности

## Структура файлов

### Конфигурационные файлы:
- **`.env.example`** - Шаблон переменных окружения с рекомендациями по безопасности
- **`composer.json`** - Зависимости PHP (обновлен для совместимости с PHP 8.1-8.3)
- **`package.json`** - Зависимости Node.js
- **`docker-compose.yml`** - Конфигурация Docker для разработки
- **`vite.config.js`** - Конфигурация сборки фронтенда

### Документация:
- **`README.md`** - Основная документация проекта
- **`SECURITY.md`** - Руководство по безопасности и найденные уязвимости
- **`DEPLOYMENT.md`** - Чеклист и руководство по развертыванию в продакшене
- **`LICENSE`** - MIT лицензия

## Изменения в рамках аудита безопасности

### ✅ Исправленные проблемы:
1. **CORS конфигурация** - убрана разрешительная настройка `['*']`
2. **Шифрование сессий** - включено по умолчанию через переменную окружения
3. **API Rate Limiting** - добавлены строгие ограничения (60 req/min)
4. **Валидация данных** - улучшена валидация в `AddToBasketRequest`
5. **PHP совместимость** - обновлен composer.json для PHP 8.1-8.3

### 📚 Добавленная документация:
- Подробное руководство по безопасности (`SECURITY.md`)
- Чеклист развертывания (`DEPLOYMENT.md`)  
- Расширенная техническая документация в README
- Примеры конфигурации Nginx с security headers
- Инструкции по мониторингу и резервному копированию

## Поддержка и содействие

### Сообщение о проблемах безопасности
Критические уязвимости безопасности следует сообщать приватно на **security@example.com**

### Внесение изменений  
1. Форкните репозиторий
2. Создайте ветку для функции (`git checkout -b feature/amazing-feature`)
3. Зафиксируйте изменения (`git commit -m 'Add amazing feature'`)
4. Отправьте в ветку (`git push origin feature/amazing-feature`)
5. Откройте Pull Request

### Стандарты кода
- Следуйте PSR-12 стандартам кодирования
- Используйте `./vendor/bin/pint` для форматирования кода
- Добавляйте тесты для новой функциональности
- Обновляйте документацию при необходимости

## Лицензия

Этот проект лицензирован под MIT License - см. файл [LICENSE](LICENSE) для подробностей.

## Контрибьюторы

- [@yrdevel](https://github.com/yrdevel) - Основной разработчик
- [@DeFiTON](https://github.com/DeFiTON) - Участник разработки

## Связанные проекты

- [SMM Backend API](https://github.com/example/smm-backend-api) - Серверная часть API
- [SMM Frontend](https://github.com/example/smm-frontend) - Фронтенд приложение

---

**Последнее обновление**: Декабрь 2024  
**Версия документации**: 2.0  
**Статус безопасности**: ✅ Аудит пройден
