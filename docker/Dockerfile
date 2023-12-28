FROM php:7-apache

# Site Settings
ENV PAGE_TITLE 'Simple Register'
ENV BASEURL 'http://localhost'
ENV TEMPLATE 'light'
ENV TEMPLATE_AUTOGENERATE 'true'
ENV LANGUAGE 'english'
ENV DEBUG_MODE 'false'
ENV DISABLE_CHANGEPASSWORD 'false'
ENV DISABLE_ONLINE_PLAYERS 'false'
ENV DISABLE_TOP_PLAYERS 'false'
ENV CAPTCHA_KEY ''
ENV CAPTCHA_LANGUAGE 'en'
ENV CAPTCHA_SECRET ''
ENV CAPTCHA_TYPE '0'
ENV SCRIPT_VERSION '2.0.2'
ENV SERVER_CORE '0'
ENV EXPANSION '2'
ENV GAME_VERSION '3.3.5a (12340)'

# Realmlist Settings
ENV PATCH_LOCATION 'http://mypatch.com/patch.mpq'
ENV REALMLIST 'logon.myserver.com'

# Database Settings
ENV DB_AUTH_DBNAME 'realmd'
ENV DB_AUTH_HOST '127.0.0.1'
ENV DB_AUTH_PASS 'root'
ENV DB_AUTH_PORT '3306'
ENV DB_AUTH_USER 'root'

# Auth / Registration Settings
ENV MULTIPLE_EMAIL_USE 'false'
ENV TWOFA_SUPPORT 'false'
ENV BATTLENET_SUPPORT 'false'
ENV SRP6_SUPPORT 'true'

# SMTP
ENV SMTP_AUTH 'true'
ENV SMTP_HOST 'smtp1.example.com'
ENV SMTP_MAIL 'no-reply@example.com'
ENV SMTP_PASS 'SECRET'
ENV SMTP_PORT '587'
ENV SMTP_SECURE 'tls'
ENV SMTP_USER 'user@example.com'

# SOAP
ENV SOAP_HOST '127.0.0.1'
ENV SOAP_PASSWORD 'admin_soap'
ENV SOAP_PORT '7878'
ENV SOAP_STYLE 'SOAP_RPC'
ENV SOAP_URI 'urn:MaNGOS'
ENV SOAP_USERNAME 'admin_soap'
ENV SOAP_2D_COMMAND 'account set 2fa {USERNAME} off'
ENV SOAP_2E_COMMAND 'account set 2fa {USERNAME} {SECRET}'
ENV SOAP_ASA_COMMAND 'account set addon {USERNAME} {EXPANSION}'
ENV SOAP_CA_COMMAND 'account create {USERNAME} {PASSWORD}'
ENV SOAP_CP_COMMAND 'account set password {USERNAME} {PASSWORD} {PASSWORD}'
ENV SOAP_FOR_REGISTER 'false'

# Realmlists
ENV REALMLISTS_1_REALMID '1'
ENV REALMLISTS_1_REALMNAME 'Realm 1'
ENV REALMLISTS_1_DB_HOST '127.0.0.1'
ENV REALMLISTS_1_DB_PORT '3306'
ENV REALMLISTS_1_DB_USER 'root'
ENV REALMLISTS_1_DB_PASS 'root'
ENV REALMLISTS_1_DB_NAME 'characters'
#ENV REALMLISTS_2_REALMID '2'
#ENV REALMLISTS_2_REALMNAME 'Realm 2'
#ENV REALMLISTS_2_DB_HOST '127.0.0.1'
#ENV REALMLISTS_2_DB_PORT '3306'
#ENV REALMLISTS_2_DB_USER 'root'
#ENV REALMLISTS_2_DB_PASS 'root'
#ENV REALMLISTS_2_DB_NAME 'characters'

# Vote System
ENV VOTE_SYSTEM 'true'
ENV VOTE_SITES_1_IMAGE 'http://www.top100arena.com/hit.asp?id=93137&c=WoW&t=2'
ENV VOTE_SITES_1_SITE_URL 'http://www.top100arena.com/in.asp?id=93137'
ENV VOTE_SITES_2_IMAGE 'https://topg.org/topg.gif'
ENV VOTE_SITES_2_SITE_URL 'https://topg.org/wow-private-servers/in-479394'
ENV VOTE_SITES_3_IMAGE 'http://www.xtremeTop100.com/votenew.jpg'
ENV VOTE_SITES_3_SITE_URL 'http://www.xtremetop100.com/in.php?site=1132364316'

# Install PHP Requirements
RUN apt update && \
    apt install -y \
      libfreetype6-dev \
      libmcrypt-dev \
      libpng-dev \
      libjpeg-dev \
      libgmp-dev \
      libonig-dev \
      libpng-dev \
      libxml2-dev \
    && apt-get clean -y

RUN docker-php-ext-configure gd --with-jpeg --with-freetype
RUN docker-php-ext-install -j$(nproc) gd gmp iconv mbstring mysqli pdo pdo_mysql soap
RUN docker-php-ext-enable gd gmp iconv mbstring mysqli pdo pdo_mysql soap
RUN a2enmod rewrite

RUN echo "error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT" >> "$PHP_INI_DIR/conf.d/zz_00_error_reporting.ini"

# Copy base files to image
COPY ./application /var/www/html/application
COPY ./screenshots /var/www/html/screenshots
COPY ./template /var/www/html/template

COPY ./favicon.ico /var/www/html/
COPY ./index.php /var/www/html/
COPY ./LICENSE /var/www/html/

# Copy extra files
RUN mkdir -p /var/www/html/template/docker
COPY ./docker/.htaccess /var/www/html/
COPY ./docker/debug.php /var/www/html/
COPY ./docker/entrypoint.sh /
COPY ./docker/application/config/config.php /var/www/html/application/config/
COPY ./docker/template /var/www/html/template/docker

RUN chmod a+x /entrypoint.sh && \
    chown -R www-data:www-data . && \
    find . -type d -exec chmod 755 {} \; && \
    find . -type f -exec chmod 655 {} \;

CMD ["/entrypoint.sh"]