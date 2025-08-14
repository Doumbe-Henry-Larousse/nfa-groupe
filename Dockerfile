# 1️⃣ Utiliser PHP avec FPM
FROM php:8.2-fpm

# 2️⃣ Installer les dépendances système nécessaires pour Laravel et Node.js
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libpng-dev libonig-dev libxml2-dev curl nodejs npm \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath gd \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# 3️⃣ Installer Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 4️⃣ Définir le dossier de travail
WORKDIR /var/www/html

# 5️⃣ Copier le projet
COPY . .

# 6️⃣ Installer les dépendances PHP
RUN composer install --no-dev --optimize-autoloader

# 7️⃣ Installer les dépendances JS et builder les assets
RUN npm install
RUN npm run build

# 8️⃣ Copier .env.example si besoin (optionnel, Render prendra les variables d'environnement)
# COPY .env.example .env

# 9️⃣ Exposer le port pour Render
EXPOSE 8080

# 10️⃣ Lancer le serveur PHP minimal, servant le dossier public
CMD php -S 0.0.0.0:${PORT:-8080} -t public
