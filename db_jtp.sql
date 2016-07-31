drop database if exists db_jtp;
create database if not exists db_jtp;
use db_jtp;

create table t_user(
	id int auto_increment primary key,
    user varchar(30),
    pwd varchar(30),
    email varchar(30),
    bday date
);


select * from t_user;