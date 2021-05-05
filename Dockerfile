FROM php:apache

EXPOSE 8000
RUN apt-get update && apt-get install -y vim
RUN docker-php-ext-install mysqli
RUN docker-php-ext-enable mysqli
RUN apachectl restart
RUN mkdir /myproject
COPY index.php /myproject
WORKDIR /myproject
CMD ["php", "-S", "0.0.0.0:8000"]
~                                        
