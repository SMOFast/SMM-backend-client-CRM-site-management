# Руководство по безопасности

## Обзор безопасности

Данный документ содержит рекомендации по обеспечению безопасности приложения SMM Backend Client CRM.

## Выявленные уязвимости и рекомендации

### 🔴 Критические проблемы

#### 1. CORS Configuration (config/cors.php)
**Проблема**: Слишком разрешительная CORS конфигурация
```php
'allowed_origins' => ['*'], // НЕБЕЗОПАСНО!
```

**Решение**:
```php
'allowed_origins' => [
    env('APP_URL', 'http://localhost'),
    'https://yourdomain.com',
    'https://www.yourdomain.com'
],
'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE'],
'allowed_headers' => ['Content-Type', 'X-Requested-With', 'Authorization', 'X-CSRF-TOKEN'],
'supports_credentials' => true,
```

#### 2. Session Encryption (config/session.php)
**Проблема**: Отключено шифрование сессий
```php
'encrypt' => false, // НЕБЕЗОПАСНО!
```

**Решение**:
```php
'encrypt' => true,
```

### 🟡 Проблемы средней критичности

#### 3. API Rate Limiting (app/Http/Kernel.php)
**Проблема**: API роуты не имеют proper throttling
```php
'api' => [
    // \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
    'throttle:api', // Только базовый throttling
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
],
```

**Решение**:
```php
'api' => [
    \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
    'throttle:60,1', // Более строгие ограничения
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
],
```

#### 4. Input Validation
**Проблема**: Недостаточная валидация в некоторых контроллерах

**Решение**: Создать дополнительные Form Request классы для всех входящих данных.

### 🟢 Рекомендации по улучшению

#### 5. SSL/TLS Configuration
```nginx
# Nginx security headers
add_header X-Frame-Options "SAMEORIGIN" always;
add_header X-XSS-Protection "1; mode=block" always;
add_header X-Content-Type-Options "nosniff" always;
add_header Referrer-Policy "no-referrer-when-downgrade" always;
add_header Content-Security-Policy "default-src 'self' http: https: data: blob: 'unsafe-inline'" always;
add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;
```

#### 6. Environment Variables Security
```bash
# Убедитесь, что .env файл не доступен через веб
# Добавьте в .htaccess или nginx config:
location ~ /\.env {
    deny all;
}
```

#### 7. Database Security
```php
// В config/database.php добавьте SSL для MySQL в продакшене
'mysql' => [
    // ... existing config
    'options' => [
        PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
    ],
],
```

## Контрольный список безопасности

### Перед развертыванием:

- [ ] **Обновить CORS конфигурацию** для продакшена
- [ ] **Включить шифрование сессий**
- [ ] **Настроить строгие rate limits**
- [ ] **Включить HTTPS везде**
- [ ] **Настроить безопасные заголовки**
- [ ] **Проверить права доступа к файлам**
- [ ] **Обновить все зависимости**
- [ ] **Настроить логирование безопасности**
- [ ] **Провести security scan**
- [ ] **Настроить backup'ы**

### Регулярные проверки:

- [ ] **Мониторинг логов на подозрительную активность**
- [ ] **Обновление зависимостей (composer update)**
- [ ] **Проверка SSL сертификатов**
- [ ] **Аудит пользователей и их прав**
- [ ] **Проверка конфигурации безопасности**

## Инструменты для анализа безопасности

### Автоматический анализ
```bash
# Проверка уязвимых зависимостей
composer audit

# Security анализ кода
./vendor/bin/phpstan analyse --level=max

# Проверка стиля кода
./vendor/bin/pint --test
```

### Внешние инструменты
- **OWASP ZAP** - для тестирования веб-приложений
- **Nmap** - для сканирования портов
- **SSL Labs** - для проверки SSL конфигурации

## Реагирование на инциденты

### При обнаружении уязвимости:

1. **Немедленно** изолировать затронутые системы
2. **Оценить** масштаб проблемы
3. **Уведомить** команду безопасности
4. **Задокументировать** все действия
5. **Исправить** уязвимость
6. **Протестировать** исправления
7. **Развернуть** обновления
8. **Провести** post-mortem анализ

## Контакты для сообщения об уязвимостях

Если вы обнаружили уязвимость в безопасности, пожалуйста, свяжитесь с нами:

- **Email**: security@example.com
- **GPG Key**: [Публичный ключ для шифрования]

**Не сообщайте о уязвимостях через публичные каналы (GitHub Issues, etc.)**

## Дополнительные ресурсы

- [OWASP Top 10](https://owasp.org/www-project-top-ten/)
- [Laravel Security](https://laravel.com/docs/9.x/security)
- [PHP Security Guide](https://phpsecurity.readthedocs.io/)