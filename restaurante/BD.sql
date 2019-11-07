create database purosabor;
use purosabor;

Create table usuarios (
ID Int UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,

login Varchar(30),
senha Varchar(40),
Primary Key (ID)) ENGINE = MyISAM;

create table pedidos(
cod int not null primary key auto_increment,
nome varchar(25),
mesa varchar(2));


