# Usamos una imagen base de PHP con las extensiones necesarias para Laravel
FROM php:8.1-fpm

# Instalamos las dependencias del sistema
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    curl \
    unzip \
    git \
    libzip-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd

# Instalamos Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecemos el directorio de trabajo
WORKDIR /var/www/html

# Copiamos el código del proyecto Laravel en la imagen
COPY . .

# Instalamos las dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# Copiar permisos para el storage
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Configurar variables de entorno
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV APP_KEY=

# Exponer el puerto para servir la aplicación
EXPOSE 8000

# El comando que ejecutará cuando el contenedor esté en funcionamiento
CMD ["php-fpm"]
