#!/bin/bash

apt-get update

apt-get install python-software-properties

add-apt-repository ppa:ondrej/php5
add-apt-repository ppa:nginx/development

apt-get update
apt-get upgrade

# Nginx, Apache2, PHP-FPM
apt-get install -qq nginx php5-cli php5-fpm php-pear build-essential libpcre3-dev apache2-mpm-itk apache2-dev libapache2-mod-php5
# PHP 扩展
apt-get install -qq php5-mysql php5-curl php5-gd php-pear php5-imagick php5-imap php5-mcrypt php5-memcache php5-ming php5-pspell php5-recode php5-snmp php5-tidy php5-xmlrpc php5-sqlite php5-xsl
pecl install apc mongo
# MySQL, Memcached, PPTPD
apt-get install -qq mysql-server mysql-client phpmyadmin memcached pptpd
# 工具
apt-get install -qq screen git wget zip unzip iftop unrar-free axel vim emacs subversion subversion-tools curl chkconfig ntp snmpd quota quotatool tmux
# Python
apt-get install -qq python python-dev libapache2-mod-wsgi python-setuptools python-pip libapache2-mod-python python-virtualenv uwsgi
pip install django tornado
# C/C++ Dev
apt-get install -qq g++ gcc qt4-dev-tools clang cmake

# Ruby
\curl -L https://get.rvm.io | bash -s stable --ruby
source /usr/local/rvm/scripts/rvm
rvm install 1.9.3
rvm install 1.8.7
