# Pull base image.
FROM chakkritte/docker-nginx

# Set the author
MAINTAINER Chakkrit Termritthikun <chakkritte57@nu.ac.th>

# Install Nginx.
RUN \
  apt-get -q -y update

RUN \
  wget -O - http://dl.hhvm.com/conf/hhvm.gpg.key | sudo apt-key add - && \
  echo deb http://dl.hhvm.com/ubuntu trusty main | sudo tee /etc/apt/sources.list.d/hhvm.list

RUN \
  apt-get -q -y update && \
  apt-get -q -y install hhvm 

RUN \
  update-rc.d hhvm defaults && \
  /usr/share/hhvm/install_fastcgi.sh && \
  /etc/init.d/nginx restart && \
  /etc/init.d/hhvm restart

RUN cd /var/www/html/ && \
  echo "<?php\n phpinfo();" > /var/www/html/info.php

ADD default /etc/nginx/sites-available/default

VOLUME ["/etc/nginx/sites-enabled", "/etc/nginx/certs", "/etc/nginx/conf.d", "/var/log/nginx", "/var/www/html"]
  
# Define working directory.
WORKDIR /etc/nginx

# Expose ports.
EXPOSE 80
EXPOSE 443

# Boot up Nginx, and HHVM when container is started
CMD service hhvm start && nginx
