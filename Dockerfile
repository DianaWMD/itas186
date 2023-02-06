FROM php:8.1-apache

# Install Xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# Add Xdebug configuration to php.ini
COPY docker/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Set working directory
WORKDIR /var/www/html

# Copy code into container
COPY . .

# Expose Apache port
EXPOSE 80

# To build a container using this Dockerfile, you'll need the command:
#
# docker build -t apachephp81 .
# (or call the container whatever you want, here I am using apachephp)
#
# And then to run and be able to edit files, we use a volume:
#
# docker run --rm --volume "$(pwd):/var/www/html" -d -p 8080:80 --name apachephp81 apachephp81