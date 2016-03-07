FROM ubuntu:14.04.4
MAINTAINER Chakkrit Termritthikun <chakkritte57@nu.ac.th>

# Install Nginx.
RUN \
  apt-get -q -y update && \
  apt-get -q -y install software-properties-common

RUN \
  apt-get -q -y install pgp wget && \
  add-apt-repository ppa:nginx/stable

RUN \
  apt-get -q -y update && \
  apt-get -q -y install nginx 

RUN \
  echo "\ndaemon off;" >> /etc/nginx/nginx.conf && \
  chown -R www-data:www-data /var/lib/nginx

VOLUME ["/etc/nginx/sites-enabled", "/etc/nginx/certs", "/etc/nginx/conf.d", "/var/log/nginx", "/var/www/html"]
  
# Define working directory.
WORKDIR /etc/nginx

# Expose ports.
EXPOSE 80
EXPOSE 443

# Boot up Nginx, when container is started
CMD service start && nginx
