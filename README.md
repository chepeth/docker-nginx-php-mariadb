# Docker nginx-php-mariadb
docker-compose up -d

# Adminer alternative to replace phpMyAdmin
docker run -p 8080:8080 --network=nginx-php-mariadb adminer
