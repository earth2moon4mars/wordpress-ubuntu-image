
FROM ubuntu:16.04

RUN apt-get update && \
    apt -y install software-properties-common && \
    LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php && \
    apt-get update && \
    apt -y install apache2 && \
    apt -y install php7.3 && \
    apt -y install php7.3-mysql && \
    apt -y install curl

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf
#RUN mkdir /var/www/wordpress
RUN curl -o /var/www/wordpress.tar.gz http://your storage server/wordpress-5.4.tar.gz

WORKDIR /var/www

RUN tar -zxvf wordpress.tar.gz && \
    rm -f wordpress.tar.gz

COPY ./wp-config.php /var/www/wordpress
COPY ./000-default.conf /etc/apache2/sites-enabled/
COPY ./ports.conf /etc/apache2/ports.conf
COPY ./000-default.conf /etc/apache2/sites-available/

RUN chown -R www-data:www-data /var/www/ && \
    chmod -R 766 /var/www/
EXPOSE 80

#ENTRYPOINT ["/etc/init.d/apache2","start"]
#CMD ["apache2ctl", "-D", "FOREGROUND"]
COPY ./bin/start-wordpress.sh /usr/local/bin
WORKDIR /usr/local/bin
RUN chmod 777 ./start-wordpress.sh
ENTRYPOINT ["./start-wordpress.sh"]
