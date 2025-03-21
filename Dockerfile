# Utiliser l'image officielle PHP avec Apache
FROM php:8.2-apache

# Activer les modules nécessaires
RUN docker-php-ext-install pdo pdo_mysql

# Copie du code source de l'application dans le conteneur
COPY . /var/www/html/

# Donne les droits au répertoire public
RUN chown -R www-data:www-data /var/www/html

# Expose le port sur lequel Apache va écouter
EXPOSE 80
