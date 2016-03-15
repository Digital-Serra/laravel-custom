#!/usr/bin/env bash

docker-compose up -d;

docker exec nginx chmod 777 -R /var/www/storage;
docker exec nginx chmod 777 -R /var/www/vendor;

echo "That's it! Happy coding"
