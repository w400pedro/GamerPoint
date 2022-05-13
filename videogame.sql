/*CREATE DATABASE VIDEOGAME;*/
DROP TABLE item_usuario;
DROP TABLE item;
DROP TABLE usuario;
DROP TABLE games;
DROP TABLE genero;
DROP TABLE categoria;

CREATE TABLE genero (
    id int not null AUTO_INCREMENT,
    nome varchar(100) not null,
    primary key (id)
);

CREATE TABLE categoria (
  id int not null AUTO_INCREMENT, 
  nome varchar(100) not null,
  primary key (id)
);

CREATE TABLE usuario (
  id int not null AUTO_INCREMENT,
  nome varchar(100) not null,
  email varchar(200) not null,
  primary key (id)
);

CREATE TABLE item (
  id int not null AUTO_INCREMENT,
  nome varchar(100) not null,
  categoria int not null,
  preco varchar(100) not null,
  foreign key (categoria) references categoria(id),
  primary key (id)
);

CREATE TABLE games (
  id int NOT NULL AUTO_INCREMENT,
  nome varchar(100) NOT NULL,
  lancamento date NOT NULL,
  desenvolvedora varchar(100) NOT NULL,
  genero int NOT NULL,
  foreign key (genero) references genero(id),
  primary key(id)
);

CREATE TABLE itemusuario (
  item int not null,
  usuario int not null,
  qtd varchar(3) not null DEFAULT 1,
  foreign key (item) references item(id),
  foreign key (usuario) references usuario(id),
  primary key (usuario, item)
);

insert into genero (nome) values
  ('RPG'), ('MMORPG'), ('FPS'), ('Ação'), ('Aventura'), ('TPS'), ('Corrida'), ('Esporte'), ('Arcade');

insert into categoria (nome) values
  ('Jogos'), ('Consoles'), ('Canecas'), ('Camisas');

insert into item (nome, categoria, preco) values
  ('Playstation 5', 2, 'R$4499,00'), ('Camisa Kratos', 4, 'R$49,99'), ('Caneca Super Mario', 3, 'R$79,99'), ('Nintendo Switch', 2, 'R$2299,00'), ('Xbox Series X', 2, 'R$4499,00');

insert into usuario (nome, email) values
  ('Felipe Santos Almeida', 'felipaocomepao@hotmail.com'), ('Julio Santana Guimarães', 'juliosa@gmail.com'), ('João Pedro Garcia de Morais', 'pedrojacks47@hotmail.comhihiihi');

insert into itemusuario (item, usuario, qtd) values
    (1, 2, '1'), (1, 3, '2'), (3, 1, '1');
