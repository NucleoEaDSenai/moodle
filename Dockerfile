FROM moodlehq/moodle-php-apache

ENV MOODLE_USERNAME=admin
ENV MOODLE_PASSWORD=admin123
ENV MOODLE_EMAIL=admin@example.com

EXPOSE 80
CMD ["apache2-foreground"]
