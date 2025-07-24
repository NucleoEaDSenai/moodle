FROM moodle

# Configurações básicas
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2

ENV MOODLE_USERNAME=admin
ENV MOODLE_PASSWORD=admin123
ENV MOODLE_EMAIL=admin@example.com

EXPOSE 80
CMD ["apache2-foreground"]
