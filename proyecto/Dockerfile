FROM php:8.2-apache
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
COPY index.php /var/www/html/
RUN useradd -m vquimen1911
RUN chown -R vquimen1911:vquimen1911 /var/www/html
USER vquimen1911
