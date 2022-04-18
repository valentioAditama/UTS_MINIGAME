create database uts_minigame;

create table users(
    id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    fullname varchar(200) not null, 
    email varchar(255) not null,
    username varchar(255) not null,
    password varchar(255) not null,
    created_at timestamp
)