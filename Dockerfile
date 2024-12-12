# Gunakan image resmi PHP sebagai base image
FROM php:8.1-fpm

# Set working directory di dalam container
WORKDIR /app

# Install sistem dependensi yang diperlukan (untuk Laravel)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libzip-dev \
    git \
    unzip \
    curl \
    && docker-php-ext-configure zip \
    && docker-php-ext-install gd zip

# Install Composer (dependency manager untuk PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Node.js (diperlukan untuk npm dan yarn)
RUN curl -sL https://deb.nodesource.com/setup_16.x | bash - && apt-get install -y nodejs

# Install Yarn
RUN npm install -g yarn

# Copy seluruh kode aplikasi ke dalam container
COPY . /app

# Install dependensi PHP melalui Composer
RUN composer install --no-dev --optimize-autoloader

# Install dependensi JavaScript melalui Yarn
RUN yarn install

# Run production build untuk frontend assets
RUN yarn prod

# Optimalkan aplikasi Laravel (cache routes, views, dll)
RUN php artisan optimize && php artisan view:cache

# Jalankan migrasi database secara force (tidak perlu interaksi)
RUN php artisan migrate --force

# Expose port yang digunakan oleh aplikasi
EXPOSE 9000

# Jalankan PHP-FPM untuk aplikasi Laravel
CMD ["php-fpm"]
