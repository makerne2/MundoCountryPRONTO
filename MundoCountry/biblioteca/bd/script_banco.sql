
show databases;
create database mundocountry;
use mundocountry;


Create table log_produto(
id_Log int (11) auto_increment  not null,
Tabela varchar (45) not null,
Usuario varchar (45) not null,
Data_Hora Datetime not null,
Acao varchar (45) not null,
Dados varchar (100) not null,
primary key (id_Log)
);


Create table cupom(
id int (11) auto_increment  not null,
nome_cupom varchar (60) not null,
desconto int (11) not null,
primary key (id)
);

create table categoria(
codigo int(8) NOT NULL auto_increment,
descricao varchar(8) NOT NULL,
primary key(codigo)
);

create table produto(
codigo int(8) NOT NULL auto_increment,
categoria int(8) NOT NULL,
nomeproduto varchar(20) NOT NULL,
preco double NOT NULL,
descricao varchar(100) NOT NULL,
quant_estoque int(11) NOT NULL,
EstoqueMinimo int(11) NOT NULL,
EstoqueMaximo int(11) NOT NULL,
primary key(codigo),
foreign key(categoria) references categoria(codigo)
);

Create table estoque(
id int (11) auto_increment  not null,
idproduto int (11) not null,
qtde int (11) not null,
primary key (id),
foreign key(idproduto) references produto(codigo) on delete cascade on update cascade
);


create table cliente( 
id int not null auto_increment,
nome varchar(20) NOT NULL,
email varchar(30) NOT NULL,
senha varchar(15) NOT NULL,
cpf varchar(11) NOT NULL,
celular varchar(11) NOT NULL,
dataNascimento varchar(8) NOT NULL,
sexo varchar(10) NOT NULL,
tipousuario varchar(20)  NOT NULL,
primary key(id)
);

create table endereco(
idendereco int not null auto_increment,
idusuario integer not null,
logradouro varchar(60) not null,
numero varchar(7) not null,
complemento varchar(60) not null,
bairro varchar(60) not null,
cidade varchar(60) not null,
cep varchar(60) not null,
primary key(idendereco),
foreign key(idusuario) references cliente(id) on delete cascade on update cascade
);

Create table pedido (
idPedido int (11) auto_increment  not null,
idUsuario int(11) not null,
idendereco int(11) not null,
datacompra date not null,
primary key (idPedido),
foreign key(idusuario) references cliente (id) on delete cascade on update cascade,
foreign key(idendereco) references endereco(idendereco) on delete cascade on update cascade
);

Create table pedido_produto (
idproduto int(11) auto_increment not null,
idpedido int (11)  not null,
quantidade int(11) not null,
foreign key(idproduto) references produto(codigo) on delete cascade on update cascade,
foreign key(idpedido) references produto(codigo) on delete cascade on update cascade
);

Create table formapagamento(
idformapagamento bigint not null auto_increment, 
descricao varchar(25) not null,
primary key (idformapagamento)
);
