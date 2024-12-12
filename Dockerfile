# Base image
FROM php:8.2-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    nodejs \
    npm \
    yarn

# Install PHP extensions
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo_mysql zip gd

# Install Composer
COPY --from=composer:2.5 /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader
RUN yarn install && yarn prod

# Laravel setup
RUN php artisan optimize
RUN php artisan view:cache

# Run migrations with --force to bypass the prompt
RUN php artisan migrate --force

# Expose port
EXPOSE 8000

# Start server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
