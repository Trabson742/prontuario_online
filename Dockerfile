# === ESTÁGIO 1: Instalação das dependências (Composer) ===
FROM composer AS vendor

WORKDIR /app

COPY database/ database/
COPY composer.json composer.lock ./

# Instala dependências de produção otimizadas
RUN composer install \
    --no-scripts \
    --no-dev \
    --prefer-dist

# === ESTÁGIO 2: Servidor de Produção Limpo ===
FROM php:8.4-fpm-alpine AS runner

WORKDIR /var/www/html

# Instala extensões PHP necessárias para o Laravel rodar no Alpine Linux
RUN docker-php-ext-install pdo pdo_mysql pcntl

# Copia o código do projeto
COPY . .

# Copia APENAS a pasta vendor gerada no Estágio 1 (evitando ter o Composer em produção)
COPY --from=vendor /app/vendor ./vendor

RUN php artisan package:discover --ansi && \
    php artisan config:cache && \
    php artisan route:cache

# Configura as permissões de escrita para as pastas de cache do Laravel
RUN chown -R www-data:www-data storage bootstrap/cache

# EXPOSE 9000

# CMD ["php-fpm"]

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
