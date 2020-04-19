b1: install docker (keyword: how to install docker ce v19 ubuntu)
https://docs.docker.com/engine/install/ubuntu/

b2: install docker compose (keyword: how to install docker-composer 1.25 ubuntu)

sudo curl -L https://github.com/docker/compose/releases/download/1.25.0/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose

sudo chmod +x /usr/local/bin/docker-compose

b3: clone pj
git clone https://github.com/TheSoloGod/cinema-coffee.git

b4: docker-compose up —build

b5: docker exec -it web bash

b6: composer install

b7: chmod -R 777 storage

b8: localhost:8080 -> import <cinema-coffee-new.sql> to <cinema-coffe>

b9: localhost => login (user/pass => member@gmail.com/menber12)

b10: localhost/admin => login (user/pass => admin@gmail.com/admin123)
