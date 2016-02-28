#!/usr/bin/env bash

docker-compose up -d;

docker exec nginx chmod 777 /var/www/storage;
docker exec nginx chmod 777 /var/www/vendor;

echo "That's it! Happy coding"
