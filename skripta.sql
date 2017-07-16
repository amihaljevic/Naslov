create database naslov character set utf8 collate utf8_general_ci;
use naslov;

create table Naslov (
	id int not null primary key auto_increment,
    naslov varchar(250),
    podnaslov varchar(250)
)engine=innodb;
