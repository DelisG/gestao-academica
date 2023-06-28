## criando banco escola
create database escola;

## criando tabela alunos
CREATE TABLE  alunos (
	id smallint AUTO_INCREMENT PRIMARY KEY,
	nome Varchar(50),
	data_nasc DATE,
	cpf varchar(15) 
);

## listando tabela alunos
select * from alunos;

## deletando tabela alunos
DELETE FROM alunos;

## inserindo dados na tabela alunos
INSERT INTO `escola`.`alunos` (`nome`, `data_nasc`, `cpf`) VALUES ('julia', '2010-10-10', '10211214588');

## modificando dados na tabela alunos
UPDATE `escola`.`alunos` SET `nome` = 'marcia da silva' WHERE (`id` = '3');

