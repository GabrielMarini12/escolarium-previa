Códigos SQL:

create table pessoas (id int auto_increment primary key, nome varchar(90) not
null, sobrenome varchar(90) not null, email varchar(90) not null, senha
varchar(90) not null);

create table livros (id_livro int auto_increment primary key, nome_livro
varchar(90) not null, genero varchar(90) not null, autor varchar(90) not
null, ano int not null, dono_id int not null, CONSTRAINT `fk_id_dono` FOREIGN
KEY(dono_id) REFERENCES pessoas(id));

insert into pessoas (nome, sobrenome, email, senha) values ("Julia", "Vargas", "julia@julia.com", "senha@123");

insert into pessoas (nome, sobrenome, email, senha) values ("Thiago", "Heilmann", "thiago@thiago.com", "thiaho@123");

insert into pessoas (nome, sobrenome, email, senha) values ("Gabriel", "Marini", "gabriel@gabriel.com", "gabriel@123");

insert into pessoas (nome, sobrenome, email, senha) values ("Pedro", "Santana", "pedro@pedro.com", "pedro@123");

insert into pessoas (nome, sobrenome, email, senha) values ("Gustavo", "Canisio", "gustavo@gustavo.com", "gustavo@123");


insert into livros (nome_livro, genero, autor, ano, dono_id) values
("Java - Como Programar", "Programação", "Paul Deitel", 2016, 1);

insert into livros (nome_livro, genero, autor, ano, dono_id) values
("Fundamentos da Programação de Computadores", "Programação", "Ascencio Campos", 2012, 2)

