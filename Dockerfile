FROM php:8.2-apache

# Installer les extensions PHP (ajustez selon vos besoins)
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Activer mod_rewrite (indispensable pour .htaccess)
RUN a2enmod rewrite

# Copier le code source
COPY . /var/www/html/

# Droits pour Apache
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

EXPOSE 80