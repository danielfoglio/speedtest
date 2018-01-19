FROM gjuniioor/php-sqlsrv:7.0
EXPOSE 80
WORKDIR /var/www/html/
COPY . /var/www/html
RUN ln -s /var/www/html /var/www/html/speedtest
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
