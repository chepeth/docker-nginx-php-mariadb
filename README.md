# Docker nginx-php-mariadb
<pre>
chepeth@ubuntu:~$ docker network create -d bridge nginx-php-mariadb

chepeth@ubuntu:~$ docker network ls
NETWORK ID          NAME                DRIVER              SCOPE
3c8109be0c36        bridge              bridge              local
8432e3ca5322        host                host                local
b9daf0cdf2b5        nginx-php-mariadb   bridge              local
de83928e67a0        none                null                local

chepeth@ubuntu:~$ docker-compose up -d

<pre>
chepeth@ubuntu:~$ docker-compose ps
 Name                Command               State                    Ports                  
-------------------------------------------------------------------------------------------
mariadb   docker-entrypoint.sh mysqld      Up      0.0.0.0:3306->3306/tcp                  
nginx     /docker-entrypoint.sh ngin ...   Up      0.0.0.0:443->443/tcp, 0.0.0.0:80->80/tcp
php       docker-php-entrypoint php-fpm    Up      9000/tcp
</pre>

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
