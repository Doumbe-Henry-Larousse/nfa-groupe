# Utilise une image PHP officielle
FROM php:8.2-cli

# Installer les extensions PHP nécessaires
RUN apt-get update && apt-get install -y unzip libpq-dev libzip-dev git \
    && docker-php-ext-install pdo pdo_pgsql zip

# Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copier le projet dans le conteneur
WORKDIR /app
COPY . .

# Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# Générer la clé d'application si nécessaire
RUN php artisan key:generate

# Expose le port Render
EXPOSE $PORT

# Commande pour lancer Laravel
CMD php artisan serve --host 0.0.0.0 --port $PORT
