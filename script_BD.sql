create database saraiva;

use saraiva;

create table cliente(
idCliente int not null auto_increment primary key,
nome varchar(50)not null,
endereco varchar(70)not null,
telefone varchar(13)not null,
dataNascimento varchar(10)not null,
loginn varchar(20)not null,
senha varchar(20)not null
)engine = innoDB;

create table livros(
idLivros int not null auto_increment primary key,
titulo varchar(50)not null,
precoLivro decimal(10,2)not null,
quantidadeLivros int not null default 0
)engine = innoDB;

create table pedido(
idPedido int not null auto_increment primary key,
codigoCliente int not null,
codigoLivros int not null,
precoTotal decimal(10,2)not null,
pagamento varchar(30)not null
)engine = innoDB;

alter table pedido add constraint codigoLivros
foreign key (codigoLivros) references livros(idLivros);

alter table pedido add constraint codigoCliente
foreign key (codigoCliente) references cliente(idCliente);

select * from cliente;
select * from livros;
select * from pedido;