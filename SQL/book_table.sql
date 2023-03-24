create table booktable
( 
	productid int unsigned not null auto_increment primary key,
	name char(50) not null,
	nric char(50) not null,
	email char(50) not null,
	phone char(50) not null,
	day date not null,
	doctor char(50) not null,
	timing char(50) not null
);