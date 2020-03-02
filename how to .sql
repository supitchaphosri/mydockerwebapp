---------------
สร้าง directory 
---------------
cd directory และ nano Dockerfile 
สร้าง mkdir src , cd src ||สร้าง index.html 
docker exec -ti $(docker ps -q) bash|| เข้าไปดูว่าใน host ทำอะไร
docker kill $(docker ps -q)
cd st_mook2020
docker build -t st_mook2020 . || run ทำก่อน 
docker run -d --rm -p 8080:80 st_mook2020 ||เปิด port
-------------
docker rm $(docker ps -aq) | all container 
docker image prune -a | all 
docker rmi -f $(docker images -a -q) | all images
docker rm -vf $(docker ps -a -q) | all container
docker-compose up -d
docker-compose exec db mysql -u root -p
sudo rm -rf folderName | ลบแบบ non-empty
------------


docker exec -it mookweb bash 
cd / 
apt update
apt install mysql-server
|y|
service mysql start
mysql_secure_installation
| n y y y y y |
-----------
---mysql -u root -p --> pass :root
---mysql -u mook -p -h localhost ---> pass : mook
mysql -u root -p -h localhost
CREATE USER 'mook'@'localhost' IDENTIFIED BY 'mook';
GRANT ALL PRIVILEGES ON phonebook.* TO 'mook'@'localhost';
exit
mysql -u mook -p -h localhost
---source phonebook.sql;
CREATE DATABASE phonebook;
--DROP DATABASE phonebook;
USE phonebook;
CREATE TABLE phonebook (
    name1 varchar(255),
    phone varchar(10)
);
--DROP TABLE phonebook;
docker-compose up -d 
------------
SELECT User,Host FROM mysql.user;
SHOW DATABASES;
SHOW TABLES;
SHOW COLUMNS FROM phonebook;
mysql -u root -p -h localhost
CREATE USER 'mook'@'localhost' IDENTIFIED BY 'mook';
GRANT ALL PRIVILEGES ON phonebook.* TO 'mook'@'localhost';
mysql -u mook -p -h localhost
source phonebook.sql;
----------------
sudo docker build -t yourNamespace/yourImageName:yourTagName .
docker login
docker tag b5c4105506c8|images id| supitchapho1997|docker hub user|/mookmook_web|reponame in terminal|:phonenumberweb|all what you want|
docker push supitchapho1997/mookmook_web
-----------
how to run
1) docker pull supitchapho1997/mookmook_web
2) docker container run -d -it --name mookweb -p 8000:80 supitchapho1997/mookmook_web
3) docker exec mookweb service mysql start
