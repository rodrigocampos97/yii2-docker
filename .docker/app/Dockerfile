ARG PHP_VERSION

FROM yiisoftware/yii2-php:${PHP_VERSION}

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Copy existing application directory permissions
COPY --chown=www:www . /app

RUN chown www:www-data -R /app
RUN chmod 755 -R /app
RUN chmod g+s -R  /app

# Change current user to www
USER www