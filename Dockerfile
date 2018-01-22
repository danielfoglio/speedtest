FROM gjuniioor/php-sqlsrv:7.0
EXPOSE 80
WORKDIR /var/www/html/
COPY . /var/www/html
RUN ln -s /var/www/html /var/www/html/speedtest
RUN ln -sfT /dev/stderr /var/log/apache2/error.log \
    	&& ln -sfT /dev/stdout /var/log/apache2/access.log \
    	&& ln -sfT /dev/stdout /var/log/apache2/other_vhosts_access.log
CMD ["/usr/sbin/apache2ctl", "-DFOREGROUND"]
