# GESTÃO ACADÊMICA

![](gestao-academica.png)

## _CRUD - PHP - MySQL_

Sistema de Cadastro de Alunos e colaboradores de uma escola, com as funções de listar, cadastrar, editar e remover.

## 💻 Tecnologias
- HTML
- CSS
- JavaScript
- Bootstrap
- PHP
- Banco de Dados MySQL


## 💡 Funcionálidades

- Listar Alunos
- Cadastrar Aluno
- Editar Cadastro de Aluno
- Excluir Aluno
- Listar Colaboradores
- Cadastrar Colaborador
- Editar Cadastro de Colaborador
- Excluir Colaborador
-  Fazer pesquisa de aluno cadastrado (podendo buscar por matrícula, nome ou curso)
-  Fazer pesquisa de colaborador cadastrado (podendo buscar por matrícula, nome ou função)


## ⚡ Integração com Banco de Dados
Banco de dados Mysql com a ferramenta Workbench
Segue Script de Manipulação dos dados no Banco:


### Criando banco gestao-academica
```sh
create database gestao-academica;
```

### Criando tabela alunos
```sh
CREATE TABLE  alunos (
	id smallint AUTO_INCREMENT PRIMARY KEY,
	nome Varchar(50),
	data_nasc DATE,
	cpf varchar(15) 
);
```

### Listando tabela alunos
```sh
select * from alunos;
```

### Deletando tabela alunos
```sh
DELETE FROM alunos;
```

### Inserindo dados na tabela alunos
```sh
INSERT INTO `gestao-academica`.`alunos` (`nome`, `data_nasc`, `cpf`) VALUES ('julia', '2010-10-10', '10211214588');
```

### Modificando dados na tabela alunos
```sh
UPDATE `gestao-academica`.`alunos` SET `nome` = 'marcia da silva' WHERE (`id` = '3');
```