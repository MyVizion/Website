FROM php:7.3-apache

RUN apt-get update
RUN apt-get upgrade -y

RUN apt-get install --fix-missing -y libpq-dev
RUN apt-get install --no-install-recommends -y libpq-dev
RUN apt-get install -y libxml2-dev libbz2-dev zlib1g-dev
RUN apt-get -y install libsqlite3-dev libsqlite3-0 mariadb-client curl exif ftp
RUN docker-php-ext-install intl
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN docker-php-ext-enable mysqli
RUN docker-php-ext-enable pdo
RUN docker-php-ext-enable pdo_mysql
RUN apt-get -y install --fix-missing zip unzip
RUN apt-get -y install --fix-missing git

# xdebug
RUN pecl install xdebug
RUN echo "zend_extension=$(find / -name xdebug.so)" > /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.client_port=9000' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.mode=debug' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
RUN echo 'xdebug.client_host=host.docker.internal' >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer self-update --2

ADD conf/apache.conf /etc/apache2/sites-available/000-default.conf

RUN a2enmod rewrite

ADD start.sh /start.sh
RUN chmod +x /start.sh

RUN cd /var/www/html

RUN composer create-project codeigniter4/appstarter codeigniter4 v4.1.1
RUN chmod -R 0777 /var/www/html/codeigniter4/writable

COPY src/app/ /var/www/html/codeigniter4/app/
COPY src/system/ /var/www/html/codeigniter4/system/
COPY src/public/ /var/www/html/codeigniter4/public/
COPY src/writable/ /var/www/html/codeigniter4/writable/

RUN mv codeigniter4 /

RUN apt-get clean \
    && rm -r /var/lib/apt/lists/*
    
EXPOSE 80
VOLUME ["/var/www/html", "/var/log/apache2", "/etc/apache2"]

CMD ["bash", "/start.sh"]