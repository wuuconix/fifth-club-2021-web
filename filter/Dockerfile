FROM wuuconix/base_image_nginx_php_55

LABEL Author="wuuconix <wuuconix@gmail.com>"
LABEL Blog="https://blog.csdn.net/Cypher_X"

COPY ./files /tmp/
RUN cp -rf /tmp/html/ /var/www/ \
    && cp -f /tmp/flag.sh /flag.sh \
    && chown -R www-data:www-data /var/www/html \   