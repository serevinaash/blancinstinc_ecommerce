# Gunakan image PHP dengan Apache
FROM php:8.1-apache

# Instal dependensi sistem untuk ekstensi PHP dan MySQL
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    git \
    unzip \
    curl \
    && rm -rf /var/lib/apt/lists/*

# Instal ekstensi PHP yang diperlukan
RUN docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
    && docker-php-ext-install pdo_mysql

# Instal Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instal Yarn (untuk manajemen dependensi frontend)
RUN curl -sS https://dl.yarnpkg.com/debian/pubkey.gpg | tee /etc/apt/trusted.gpg.d/yarn.asc
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get update && apt-get install -y yarn

# Salin file aplikasi Anda ke dalam container
COPY . /var/www/html/

# Setel direktori kerja untuk Laravel
WORKDIR /var/www/html

# Instal dependensi PHP menggunakan Composer
RUN composer install --no-dev --optimize-autoloader

# Instal dependensi frontend menggunakan Yarn
RUN yarn install

# Proses build untuk produksi (misalnya, dengan 'yarn prod' jika itu tersedia dalam package.json Anda)
RUN yarn run prod

# Setel izin folder storage dan bootstrap/cache untuk Laravel
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Aktifkan mod_rewrite Apache
RUN a2enmod rewrite

# Ekspose port Apache
EXPOSE 80

# Jalankan Apache dalam mode foreground
CMD ["apache2-foreground"]
