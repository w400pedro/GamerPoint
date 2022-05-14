/*CREATE DATABASE VIDEOGAME;*/
DROP TABLE itemusuario;
DROP TABLE item;
DROP TABLE usuario;
DROP TABLE categoria;
DROP TABLE desenvolvedora;
DROP TABLE gamegenero;

CREATE TABLE gamegenero (
    id int not null AUTO_INCREMENT,
    nome varchar(100) not null,
    primary key (id)
);

CREATE TABLE categoria (
  id int not null AUTO_INCREMENT, 
  nome varchar(100) not null,
  primary key (id)
);

CREATE TABLE desenvolvedora (
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
  gamegenero int,
  desenvolvedora int,
  foreign key (categoria) references categoria(id),
  foreign key (gamegenero) references gamegenero(id),
  foreign key (desenvolvedora) references desenvolvedora(id),
  primary key (id)
);

CREATE TABLE itemusuario (
  item int not null,
  usuario int not null,
  qtd varchar(3) not null DEFAULT 1,
  foreign key (item) references item(id),
  foreign key (usuario) references usuario(id),
  primary key (usuario, item)
);

insert into gamegenero (nome) values
  ('RPG'), ('MMORPG'), ('FPS'), ('Ação'), ('Aventura'), ('TPS'), ('Corrida'), ('Esporte'), ('Arcade');

insert into categoria (nome) values
  ('Jogos'), ('Consoles'), ('Canecas'), ('Camisas');

  insert into desenvolvedora (nome) values
  ('Naughty Dog'), ('Santa Monica');

insert into item (nome, categoria, preco) values
  ('Playstation 5', 2, 'R$4499.00'), ('Camisa Kratos', 4, 'R$49.99'), ('Caneca Super Mario', 3, 'R$79.99'), ('Nintendo Switch', 2, 'R$2299.00'), ('Xbox Series X', 2, 'R$4499.00');

insert into item (nome, categoria, preco, gamegenero, desenvolvedora) values 
  ('The Last of Us 2', 1, 'R$149.99', 4, 1);

insert into usuario (nome, email) values
  ('Felipe Santos Almeida', 'felipaocomepao@hotmail.com'), ('Julio Santana Guimarães', 'juliosa@gmail.com'), ('João Pedro Garcia de Morais', 'pedrojacks47@hotmail.com');

insert into itemusuario (item, usuario, qtd) values
    (1, 2, '1'), (1, 3, '2'), (3, 1, '1');
