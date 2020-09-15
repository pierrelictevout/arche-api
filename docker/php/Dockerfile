FROM php:7.2.14-fpm-alpine3.8
ENV APCU_VERSION 5.1.16
ENV XDEBUG_VERSION 2.6.1
ENV COMPOSER_VERSION 1.8.6
RUN apk add --update --no-cache \
        bash \
        ca-certificates \
        git \
        icu-libs \
        unzip \
        zip \
        zlib-dev \
        postgresql-dev && \
    apk add --update --no-cache --virtual .build-deps \
        $PHPIZE_DEPS \
        icu-dev && \
    pecl install apcu-${APCU_VERSION} xdebug-${XDEBUG_VERSION} && \
    docker-php-ext-install intl zip && \
    docker-php-ext-enable apcu opcache xdebug && \
    docker-php-ext-install -j$(nproc) pgsql && \
    docker-php-ext-install -j$(nproc) pdo_pgsql && \
    apk del .build-deps && \
    apk add gosu --update --no-cache --repository http://dl-3.alpinelinux.org/alpine/edge/testing/ && \
    addgroup bar && \
    adduser -D -h /home -s /bin/bash -G bar foo
RUN apk add --no-cache freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev && \
  docker-php-ext-configure gd \
    --with-gd \
    --with-freetype-dir=/usr/include/ \
    --with-png-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ && \
  NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) && \
  docker-php-ext-install -j${NPROC} gd && \
  apk del --no-cache freetype-dev libpng-dev libjpeg-turbo-dev
RUN curl -sS https://getcomposer.org/installer | php -- --filename=composer --install-dir=/usr/local/bin --version=${COMPOSER_VERSION}
RUN apk add --no-cache rabbitmq-c rabbitmq-c-dev $PHPIZE_DEPS \
    && pecl install amqp-1.9.3 \
    && docker-php-ext-enable amqp \
    && apk del $PHPIZE_DEPS
RUN apk add --no-cache --virtual .phpize-deps $PHPIZE_DEPS imagemagick-dev libtool && \
        export CFLAGS="$PHP_CFLAGS" CPPFLAGS="$PHP_CPPFLAGS" LDFLAGS="$PHP_LDFLAGS" && \
        pecl install imagick && \
        docker-php-ext-enable imagick && \
        apk add --no-cache --virtual .imagick-runtime-deps imagemagick
ADD entrypoint.sh /entrypoint
COPY conf/php.ini /usr/local/etc/php/php.ini
COPY conf/xdebug.ini /usr/local/etc/php/conf.d/debug.ini
WORKDIR /srv
ENTRYPOINT ["/entrypoint"]