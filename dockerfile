FROM centos:7
RUN yum update -y ; yum install nano httpd php -y
COPY ./index.php /var/www/html/index.php
COPY ./httpd_myapp.conf /etc/httpd/conf.d/
EXPOSE 80
ENTRYPOINT ["/usr/sbin/httpd", "-D", "FOREGROUND"]