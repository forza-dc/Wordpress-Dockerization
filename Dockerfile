FROM ubuntu:latest
ENV DEBIAN_FRONTEND noninteractive

# Updating and Upgrading ubuntu
RUN apt-get -y update \
    && apt-get -y upgrade

# Installing Basic Packages in Ubuntu
RUN apt-get -y install software-properties-common apt-transport-https git gnupg sudo nano wget curl zip unzip tcl inetutils-ping net-tools

# Copying wordpress project
COPY ./wordpress /var/www/wordpress

# Set working directory
WORKDIR /var/www/wordpress

# Adding Php repository  for php fpm
RUN LC_ALL=C.UTF-8 add-apt-repository -y ppa:ondrej/php
RUN apt-get update

# Install extensions for php
RUN apt-get install -y php8.2 php8.2-fpm php8.2-bcmath php8.2-curl php8.2-imagick php8.2-intl php-json php8.2-mbstring php8.2-mysql php8.2-xml php8.2-zip

# Clear cache
RUN apt-get clean

# Installing nginix
RUN apt-get -y install nginx-extras
RUN sudo apt-get update

# Nginx Configurations
RUN sudo rm -rf /etc/nginx/sites-available/default
RUN sudo rm -rf cd /etc/nginx/sites-enabled/default
COPY ./nginx/wordpress.com /etc/nginx/sites-available/wordpress.com
RUN ln -s /etc/nginx/sites-available/wordpress.com /etc/nginx/sites-enabled/wordpress.com
RUN chmod 777 -R index.php
RUN nginx -t

# Expose port 80
EXPOSE 80

# Entrypoint to start nginx
ENTRYPOINT ["./docker-entrypoint.sh"]

# Starting with bash
CMD ["/bin/bash"]