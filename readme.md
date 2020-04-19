<CHÚ Ý> Hướng dẫn sử dụng project mẫu áp dụng Docker, Repository patern dành cho học viên Codegym.

<CHÚ Ý> Docker trong project cài trên ubuntu clean, KHÔNG cài môi trường PHP, Apache và Mysql.
Nếu sử dụng trên ubuntu đã cài sẵn môi trường, vui lòng tìm hiểu thêm về docker để biết cách config lại cổng.

Step 1: install docker (keyword: how to install docker ce v19 ubuntu)
https://docs.docker.com/engine/install/ubuntu/

1. sudo apt-get remove docker docker-engine docker.io containerd runc

2. sudo apt-get update

3. sudo apt-get install \
apt-transport-https \
ca-certificates \
curl \
gnupg-agent \
software-properties-common

4. curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -

5. sudo add-apt-repository \
"deb [arch=amd64] https://download.docker.com/linux/ubuntu \
$(lsb_release -cs) \
stable"

6. sudo apt-get update

7. sudo apt-get install docker-ce docker-ce-cli containerd.io

Step 2: install docker compose (keyword: how to install docker-composer 1.25 ubuntu)

1. sudo curl -L https://github.com/docker/compose/releases/download/1.25.0/docker-compose-`uname -s`-`uname -m` -o /usr/local/bin/docker-compose

2. sudo chmod +x /usr/local/bin/docker-compose

Step 3: clone pj
git clone https://github.com/TheSoloGod/cinema-coffee.git

Step 4: docker-compose up —build

Step 5: docker exec -it web bash

Step 6: composer install

Step 7: chmod -R 777 storage

Step 8: localhost:8080 => (login PHP Myadmin) => import <cinema-coffee-new.sql> to <cinema-coffee>

Step 9: localhost => (hompage)=> login (user/pass => member@gmail.com/member12)

Step 10: localhost/admin => (admin page) => login (user/pass => admin@gmail.com/admin123)
