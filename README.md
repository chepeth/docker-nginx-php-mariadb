# Docker nginx-php-mariadb
docker network create -d bridge nginx-php-mariadb
docker-compose up -d

<pre>Open url: http://localhost</pre>

# Adminer alternative to replace phpMyAdmin
docker run -p 8080:8080 --network=nginx-php-mariadb adminer

<pre>Open url: http://localhost:8080</pre>
<pre>
System: MySQL
Server: mariadb
Username: root
Password: ROOTPASS
</pre>
