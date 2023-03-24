create table usertable
( 
	productid int unsigned not null auto_increment primary key,
	name char(50) not null,
	nric char(50) not null,
	email char(50) not null,
	phone char(50) not null,
	password char(50) not null
);