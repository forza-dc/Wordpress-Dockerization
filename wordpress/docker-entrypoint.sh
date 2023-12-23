#!/bin/bash

sudo service nginx start
sudo service php8.2-fpm start
# sudo service mysql start
# # MySQL Configuration
# RUN sudo mysql -u root -e "create database wordpress;"
# RUN sudo mysql -u root -e "ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'wordpress';"
# #sudo service mysql reload
exec "$@";
