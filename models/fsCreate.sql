/* tables - plural */
/* columns singular */
/* snake_case */

drop database flowersale;
create database flowersale;
use flowersale;

create table scouts
(
	id int(6) unsigned auto_increment primary key,
	lastname varchar(50) not null,
	firstname varchar(50)
);
create table customers
(
	id int(6) unsigned auto_increment primary key,
	lastname varchar(50) not null,
	firstname varchar(50),
	email varchar(200),
	telephone varchar(12),
	address varchar(200)
);
create table flowers
(
 	id int(6) unsigned auto_increment primary key,
	flower varchar(40) not null,
	variety varchar(40) not null,
	container varchar(20) not null
);

create table prices
(
	container varchar(20) not null primary key,
	retail decimal(5,2) not null,
	wholesale decimal(5,2) not null
);

create table orders
(
	id int(6) not null auto_increment primary key,
	scout_id int(6) not null,
	customer_id int(6) not null,
	paytype varchar(45),
	amount varchar(45),
	year year(4) not null
);

create table ordflowers
(
	order_id int(6) not null,
	flower_id int(6) not null,
	quantity int(4) not null 
);
create table users
(
	id int(6) unsigned auto_increment primary key,
	lastname varchar(50) not null,
	firstname varchar(50),
	email varchar(200) not null unique,
	privilege int(2)
);

source insPrice.sql;
source insFlower.sql;
