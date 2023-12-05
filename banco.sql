create database testt;
use testt;
create table usuario(
id int not null primary key auto_increment,
nome varchar(50) not null, 
senha varchar(20) not null
);
INSERT INTO `testt`.`usuario` (`nome`, `senha`) VALUES ('joao', '123');

