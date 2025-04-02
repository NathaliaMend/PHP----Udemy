FROM php:8.1-apache

#onde vai ser o diretorio principal
WORKDIR /var/www/html

# copiar todos os arquivos
COPY . /var/www/html/

RUN chmod -R 777 /var/www/html/
RUN chown -R www-data:www-data /var/www/html

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
# Ativa a exibição de erros no apache
RUN echo "error_log = /dev/stdout" >> /usr/local/etc/php/php.ini


#excuta arquivos em vez de rotas
RUN a2enmod rewrite

#expoe ports
EXPOSE 80