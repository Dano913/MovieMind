FROM php:8.2-apache

# Instalar extensiones necesarias
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip git \
    && docker-php-ext-install pdo pdo_mysql

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Copiar proyecto
COPY . /var/www/html/

# Cambiar permisos
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Establecer directorio de trabajo
WORKDIR /var/www/html

# Configurar Apache para que sirva public/
RUN sed -i 's|/var/www/html|/var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Exponer puerto 80
EXPOSE 80

# Comando por defecto
CMD ["apache2-foreground"]
