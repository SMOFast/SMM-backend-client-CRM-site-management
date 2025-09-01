# Чеклист развертывания в продакшене

## Подготовка к развертыванию

### 1. Конфигурация безопасности ✅
- [ ] Обновлена CORS конфигурация в `config/cors.php`
- [ ] Включено шифрование сессий (`SESSION_ENCRYPT=true`)
- [ ] Настроены строгие rate limits для API
- [ ] Убрать `APP_DEBUG=false` в продакшене
- [ ] Установить `APP_ENV=production`

### 2. Переменные окружения
```bash
# Обязательные переменные для продакшена
APP_NAME="SMM Client CRM"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://yourdomain.com

# База данных
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=production_db_name
DB_USERNAME=production_user
DB_PASSWORD=secure_password

# Внешний API
SERVER_API_URL=https://api.yourdomain.com
SERVER_API_KEY=secure_api_key

# Почта
MAIL_MAILER=smtp
MAIL_HOST=smtp.yourdomain.com
MAIL_PORT=587
MAIL_USERNAME=noreply@yourdomain.com
MAIL_PASSWORD=secure_mail_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@yourdomain.com
MAIL_FROM_NAME="${APP_NAME}"

# Кэширование
CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis

# Redis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=redis_password
REDIS_PORT=6379

# Безопасность
SESSION_ENCRYPT=true
FRONTEND_URL=https://yourdomain.com
```

### 3. Файловые права
```bash
# Установка правильных прав доступа
sudo chown -R www-data:www-data /var/www/html
sudo chmod -R 755 /var/www/html
sudo chmod -R 775 /var/www/html/storage
sudo chmod -R 775 /var/www/html/bootstrap/cache
```

### 4. Оптимизация Laravel
```bash
# Оптимизация для продакшена
composer install --no-dev --optimize-autoloader
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache
```

### 5. Сборка фронтенда
```bash
npm ci --production
npm run build
```

## Веб-сервер конфигурация

### Nginx
```nginx
server {
    listen 443 ssl http2;
    server_name yourdomain.com www.yourdomain.com;
    root /var/www/html/public;
    index index.php;

    # SSL Configuration
    ssl_certificate /path/to/cert.pem;
    ssl_certificate_key /path/to/private.key;
    ssl_protocols TLSv1.2 TLSv1.3;
    ssl_ciphers ECDHE-RSA-AES256-GCM-SHA512:DHE-RSA-AES256-GCM-SHA512:ECDHE-RSA-AES256-GCM-SHA384:DHE-RSA-AES256-GCM-SHA384;

    # Security headers
    add_header X-Frame-Options "SAMEORIGIN" always;
    add_header X-XSS-Protection "1; mode=block" always;
    add_header X-Content-Type-Options "nosniff" always;
    add_header Referrer-Policy "no-referrer-when-downgrade" always;
    add_header Content-Security-Policy "default-src 'self' http: https: data: blob: 'unsafe-inline'" always;
    add_header Strict-Transport-Security "max-age=31536000; includeSubDomains" always;

    # Hide sensitive files
    location ~ /\.(?!well-known).* {
        deny all;
    }

    location ~ /\.env {
        deny all;
    }

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/run/php/php8.1-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
        
        # Security
        fastcgi_hide_header X-Powered-By;
        fastcgi_read_timeout 300;
    }

    # Gzip compression
    gzip on;
    gzip_vary on;
    gzip_min_length 1024;
    gzip_types text/plain text/css text/xml text/javascript application/javascript application/xml+rss application/json;

    # Cache static files
    location ~* \.(jpg|jpeg|png|gif|ico|css|js|woff|woff2)$ {
        expires 1y;
        add_header Cache-Control "public, immutable";
    }
}

# Redirect HTTP to HTTPS
server {
    listen 80;
    server_name yourdomain.com www.yourdomain.com;
    return 301 https://$server_name$request_uri;
}
```

## Проверки после развертывания

### 1. Функциональные тесты
- [ ] Главная страница загружается
- [ ] Регистрация пользователей работает
- [ ] Аутентификация работает
- [ ] 2FA работает (если включено)
- [ ] Корзина и заказы работают
- [ ] Личный кабинет доступен
- [ ] API эндпоинты отвечают

### 2. Тесты безопасности
- [ ] HTTPS работает корректно
- [ ] Редиректы с HTTP на HTTPS
- [ ] SSL сертификат действителен
- [ ] Security headers установлены
- [ ] .env файл недоступен через веб
- [ ] Rate limiting работает
- [ ] CORS настроен правильно

### 3. Производительность
- [ ] Время загрузки страниц < 3 сек
- [ ] Gzip сжатие работает
- [ ] Статические файлы кэшируются
- [ ] Redis работает
- [ ] MySQL оптимизирован

### 4. Мониторинг
```bash
# Проверка логов
tail -f /var/www/html/storage/logs/laravel.log

# Проверка статуса служб
systemctl status nginx
systemctl status php8.1-fpm
systemctl status mysql
systemctl status redis-server

# Проверка процессов
ps aux | grep nginx
ps aux | grep php-fpm
```

## Резервное копирование

### Ежедневный бэкап базы данных
```bash
#!/bin/bash
# /etc/cron.daily/mysql-backup

DATE=$(date +%Y%m%d_%H%M%S)
DB_NAME="production_db_name"
BACKUP_DIR="/var/backups/mysql"

mysqldump -u root -p$DB_PASSWORD $DB_NAME | gzip > $BACKUP_DIR/backup_$DB_NAME_$DATE.sql.gz

# Удаление старых бэкапов (старше 30 дней)
find $BACKUP_DIR -name "backup_$DB_NAME_*.sql.gz" -mtime +30 -delete
```

### Бэкап файлов приложения
```bash
#!/bin/bash
# /etc/cron.weekly/app-backup

DATE=$(date +%Y%m%d_%H%M%S)
APP_DIR="/var/www/html"
BACKUP_DIR="/var/backups/app"

tar -czf $BACKUP_DIR/app_backup_$DATE.tar.gz \
    --exclude="$APP_DIR/storage/logs/*" \
    --exclude="$APP_DIR/vendor" \
    --exclude="$APP_DIR/node_modules" \
    $APP_DIR

# Удаление старых бэкапов (старше 4 недель)
find $BACKUP_DIR -name "app_backup_*.tar.gz" -mtime +28 -delete
```

## Мониторинг и алерты

### Основные метрики для мониторинга
- CPU и память сервера
- Дисковое пространство
- Время отклика приложения
- Ошибки в логах
- Статус базы данных
- Статус Redis
- SSL сертификат (срок действия)

### Логирование
```bash
# Настройка logrotate для Laravel логов
# /etc/logrotate.d/laravel
/var/www/html/storage/logs/*.log {
    daily
    missingok
    rotate 30
    compress
    notifempty
    create 0644 www-data www-data
    postrotate
        systemctl reload php8.1-fpm
    endscript
}
```

## Контакты для экстренных случаев

- **DevOps**: devops@yourdomain.com
- **Backend**: backend@yourdomain.com  
- **Security**: security@yourdomain.com
- **24/7 Support**: +7-XXX-XXX-XXXX