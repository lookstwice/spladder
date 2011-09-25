CREATE DATABASE spladder;
CREATE USER 'spladder'@'localhost' IDENTIFIED BY 'spladder42';
GRANT ALL PRIVILEGES ON spladder.* TO 'spladder'@'localhost';
