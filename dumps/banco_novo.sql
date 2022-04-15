-- Create database
CREATE DATABASE crudphp;

-- Enter the database
USE crudphp;

-- Create table "cliente"
CREATE TABLE clients (
	id int not null auto_increment primary key,
    nome_cliente varchar (100) not null,
    cpf char (15) not null,
    email varchar (100)
);

-- Insert values into the clientes table
INSERT INTO clients values
	(1, "Flavio", "123456789123", "flavio@email.com"),
    (2, "Juliana", "987654321987", "ju@email.com"),
    (3, "Rafa", "159753159753", "rafa@email.com"),
    (4, "Giovanni", "268268268268", "gio@email.com"),
    (5, "Michael", "00000000000", "michael@email.com");

-- Create table "produto"
CREATE TABLE products (
	id int not null auto_increment primary key,
    nome_produto varchar (250) not null,
    valor_unitario decimal (5,2) not null,
    cod_barras varchar (11) not null unique key
);

-- Insert values into the produto table
INSERT INTO products values
	(1, "Biscoito Treloso", 1.50, "12345678900"),
    (2, "Refrigerante", 9.00, "00123456789"),
    (3, "Vinho", 58.90, "12345600789"),
    (4, "Agua", 1.00, "12345600798"),
    (5, "Nescau", 9.90, "12333600777");

-- Create table "pedido"
CREATE TABLE orders (
	numero_pedido int not null auto_increment primary key,
    id_client int not null,
    id_product int not null,
    id_value decimal (8,2) unique key,
    data_pedido datetime not null,
    quantidade int not null,
    total decimal (8,2)
);

-- Insert values into the pedido table
INSERT INTO orders values
	(1, now(), 2, null),
    (2, now(), 1, null),
    (3, now(), 5, null),
    (4, now(), 1, null),
    (5, now(), 3, null),
    (6, now(), 2, null),
    (7, now(), 2, null);

ALTER TABLE orders ADD COLUMN id_client INT AFTER numero_pedido;
ALTER TABLE orders ADD COLUMN id_product INT AFTER id_client;
ALTER TABLE orders ADD COLUMN id_value INT AFTER id_product;

ALTER TABLE orders ADD foreign key (id_client) references clients (id);
ALTER TABLE orders ADD foreign key (id_product) references products (id);
ALTER TABLE orders ADD foreign key (id_value) references products (valor_unitario);
