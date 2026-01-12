create database Login_users;

create table users(
id int auto_increment primary key,
username varchar(100) not null,
email varchar(100) not null,
password varchar(2555) not null
);
Alter table users add unique(username);